<?php

namespace App\Console\Commands;

use App\IconConverted;
use App\ImageConverted;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class CleanCustomConvertedItems extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clean:custom-converted-items';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clean custom converted images and icons created by visitors.';

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
        $convertedImages = ImageConverted::where('is_visitor_custom', 1)
            ->where('created_at', '<', Carbon::now()->subHours(12))->get();

        foreach ($convertedImages as $image) {
            $done = Storage::disk('assets')->delete($image->filename);
            if ($done) {
                $image->forceDelete();
            }
        }

        $convertedIcons = IconConverted::where('is_visitor_custom', 1)
            ->where('created_at', '<', Carbon::now()->subHours(12))->get();

        foreach ($convertedIcons as $icon) {
            $done = Storage::disk('assets')->delete($icon->filename);
            if ($done) {
                $icon->forceDelete();
            }
        }
    }
}
