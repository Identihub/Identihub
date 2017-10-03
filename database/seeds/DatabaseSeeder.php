<?php

use App\SectionType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedSectionTypes();
        $this->call(FontsListTableSeeder::class);
        $this->call(FontVariantsTableSeeder::class);
    }

    private function seedSectionTypes()
    {

        foreach ([
                     SectionType::COLORS,
                     SectionType::FONTS,
                     SectionType::ICONS,
                     SectionType::IMAGES
                 ] as $type) {
            if(SectionType::where('name', $type)->get()->count() === 0)
                SectionType::create([
                    'name' => $type
                ]);
        }

        $this->call(FontsListTableSeeder::class);
        $this->call(FontVariantsTableSeeder::class);

    }
}
