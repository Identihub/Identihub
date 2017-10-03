<?php

namespace App\Console\Commands;

use App\Font;
use App\FontFamily;
use App\FontVariant;
use App\Jobs\CreateFontFamily;
use App\Jobs\CreateFontImage;
use App\Jobs\CreateFontVariant;
use App\Jobs\UpdateFontFamily;
use App\Jobs\UpdateFontVariant;
use GuzzleHttp\Client;
use Illuminate\Config\Repository;
use Illuminate\Console\Command;

class UpdateFonts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fonts:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(Repository $config)
    {
        $client = new Client();
        $response = $client->get($config->get('logobridge.fontAPI'), [
            'query' => ['key' => $config->get('logobridge.googleFontApiKey')]
        ]);
        $items = \GuzzleHttp\json_decode($response->getBody())->items;

        foreach ($items as $item) {

            $fontFamilyModelCollection = FontFamily::where('family', $item->family)->get();

            if($fontFamilyModelCollection->count() === 0) {
                $fontFamily = (new CreateFontFamily($item))->handle();
            }else{
                $fontFamily = (new UpdateFontFamily($item, $fontFamilyModelCollection->first()))->handle();
            }

            foreach ($item->variants as $variant) {

                $fontVariantModelCollection = FontVariant::where('font_id', $fontFamily->id)->where('variant', $variant)->get();

                if($fontVariantModelCollection->count() === 0) {
                    (new CreateFontVariant($variant, $fontFamily, $item->files->$variant))->handle();
                }else{
                    (new UpdateFontVariant($variant, $fontVariantModelCollection->first(), $item->files->$variant))->handle();
                }

            }
        }

        $fontList = Font::all();

        foreach ($fontList as $font) {
            (new CreateFontImage($font->variant))->handle();
        }
    }
}
