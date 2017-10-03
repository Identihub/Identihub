<?php

namespace App\Console\Commands;

use App\FontVariant;
use App\Jobs\CreateFontImage;
use Illuminate\Console\Command;

class CreateImagesFromFontVariants extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fonts:generate-images';

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
    public function handle()
    {
        FontVariant::chunk(200, function ($fontVariants) {
            foreach ($fontVariants as $fontVariant) {
                (new CreateFontImage($fontVariant))->handle();
            }
        });
    }
}
