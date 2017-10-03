<?php

use Illuminate\Database\Seeder;

class FontsListTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fonts_list')->delete();
        
        \DB::table('fonts_list')->insert(array (
            0 => 
            array (
                'id' => 1,
                'family' => 'ABeeZee',
                'category' => 'sans-serif',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:07:27',
                'updated_at' => '2017-05-11 09:07:27',
            ),
            1 => 
            array (
                'id' => 2,
                'family' => 'Abel',
                'category' => 'sans-serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            2 => 
            array (
                'id' => 3,
                'family' => 'Abhaya Libre',
                'category' => 'serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            3 => 
            array (
                'id' => 4,
                'family' => 'Abril Fatface',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            4 => 
            array (
                'id' => 5,
                'family' => 'Aclonica',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            5 => 
            array (
                'id' => 6,
                'family' => 'Acme',
                'category' => 'sans-serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            6 => 
            array (
                'id' => 7,
                'family' => 'Actor',
                'category' => 'sans-serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            7 => 
            array (
                'id' => 8,
                'family' => 'Adamina',
                'category' => 'serif',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            8 => 
            array (
                'id' => 9,
                'family' => 'Advent Pro',
                'category' => 'sans-serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            9 => 
            array (
                'id' => 10,
                'family' => 'Aguafina Script',
                'category' => 'handwriting',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            10 => 
            array (
                'id' => 11,
                'family' => 'Akronim',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            11 => 
            array (
                'id' => 12,
                'family' => 'Aladin',
                'category' => 'handwriting',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            12 => 
            array (
                'id' => 13,
                'family' => 'Aldrich',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            13 => 
            array (
                'id' => 14,
                'family' => 'Alef',
                'category' => 'sans-serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            14 => 
            array (
                'id' => 15,
                'family' => 'Alegreya',
                'category' => 'serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            15 => 
            array (
                'id' => 16,
                'family' => 'Alegreya SC',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            16 => 
            array (
                'id' => 17,
                'family' => 'Alegreya Sans',
                'category' => 'sans-serif',
                'version' => 'v3',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            17 => 
            array (
                'id' => 18,
                'family' => 'Alegreya Sans SC',
                'category' => 'sans-serif',
                'version' => 'v3',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            18 => 
            array (
                'id' => 19,
                'family' => 'Alex Brush',
                'category' => 'handwriting',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            19 => 
            array (
                'id' => 20,
                'family' => 'Alfa Slab One',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            20 => 
            array (
                'id' => 21,
                'family' => 'Alice',
                'category' => 'serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            21 => 
            array (
                'id' => 22,
                'family' => 'Alike',
                'category' => 'serif',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            22 => 
            array (
                'id' => 23,
                'family' => 'Alike Angular',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            23 => 
            array (
                'id' => 24,
                'family' => 'Allan',
                'category' => 'display',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            24 => 
            array (
                'id' => 25,
                'family' => 'Allerta',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            25 => 
            array (
                'id' => 26,
                'family' => 'Allerta Stencil',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            26 => 
            array (
                'id' => 27,
                'family' => 'Allura',
                'category' => 'handwriting',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            27 => 
            array (
                'id' => 28,
                'family' => 'Almendra',
                'category' => 'serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            28 => 
            array (
                'id' => 29,
                'family' => 'Almendra Display',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            29 => 
            array (
                'id' => 30,
                'family' => 'Almendra SC',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            30 => 
            array (
                'id' => 31,
                'family' => 'Amarante',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            31 => 
            array (
                'id' => 32,
                'family' => 'Amaranth',
                'category' => 'sans-serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            32 => 
            array (
                'id' => 33,
                'family' => 'Amatic SC',
                'category' => 'handwriting',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            33 => 
            array (
                'id' => 34,
                'family' => 'Amatica SC',
                'category' => 'display',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            34 => 
            array (
                'id' => 35,
                'family' => 'Amethysta',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            35 => 
            array (
                'id' => 36,
                'family' => 'Amiko',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            36 => 
            array (
                'id' => 37,
                'family' => 'Amiri',
                'category' => 'serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            37 => 
            array (
                'id' => 38,
                'family' => 'Amita',
                'category' => 'handwriting',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            38 => 
            array (
                'id' => 39,
                'family' => 'Anaheim',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            39 => 
            array (
                'id' => 40,
                'family' => 'Andada',
                'category' => 'serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            40 => 
            array (
                'id' => 41,
                'family' => 'Andika',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            41 => 
            array (
                'id' => 42,
                'family' => 'Angkor',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            42 => 
            array (
                'id' => 43,
                'family' => 'Annie Use Your Telescope',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            43 => 
            array (
                'id' => 44,
                'family' => 'Anonymous Pro',
                'category' => 'monospace',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            44 => 
            array (
                'id' => 45,
                'family' => 'Antic',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            45 => 
            array (
                'id' => 46,
                'family' => 'Antic Didone',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            46 => 
            array (
                'id' => 47,
                'family' => 'Antic Slab',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            47 => 
            array (
                'id' => 48,
                'family' => 'Anton',
                'category' => 'sans-serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            48 => 
            array (
                'id' => 49,
                'family' => 'Arapey',
                'category' => 'serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            49 => 
            array (
                'id' => 50,
                'family' => 'Arbutus',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            50 => 
            array (
                'id' => 51,
                'family' => 'Arbutus Slab',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            51 => 
            array (
                'id' => 52,
                'family' => 'Architects Daughter',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            52 => 
            array (
                'id' => 53,
                'family' => 'Archivo Black',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            53 => 
            array (
                'id' => 54,
                'family' => 'Archivo Narrow',
                'category' => 'sans-serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            54 => 
            array (
                'id' => 55,
                'family' => 'Aref Ruqaa',
                'category' => 'serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            55 => 
            array (
                'id' => 56,
                'family' => 'Arima Madurai',
                'category' => 'display',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            56 => 
            array (
                'id' => 57,
                'family' => 'Arimo',
                'category' => 'sans-serif',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            57 => 
            array (
                'id' => 58,
                'family' => 'Arizonia',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            58 => 
            array (
                'id' => 59,
                'family' => 'Armata',
                'category' => 'sans-serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            59 => 
            array (
                'id' => 60,
                'family' => 'Arsenal',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            60 => 
            array (
                'id' => 61,
                'family' => 'Artifika',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            61 => 
            array (
                'id' => 62,
                'family' => 'Arvo',
                'category' => 'serif',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            62 => 
            array (
                'id' => 63,
                'family' => 'Arya',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            63 => 
            array (
                'id' => 64,
                'family' => 'Asap',
                'category' => 'sans-serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            64 => 
            array (
                'id' => 65,
                'family' => 'Asar',
                'category' => 'serif',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            65 => 
            array (
                'id' => 66,
                'family' => 'Asset',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            66 => 
            array (
                'id' => 67,
                'family' => 'Assistant',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            67 => 
            array (
                'id' => 68,
                'family' => 'Astloch',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            68 => 
            array (
                'id' => 69,
                'family' => 'Asul',
                'category' => 'sans-serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            69 => 
            array (
                'id' => 70,
                'family' => 'Athiti',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            70 => 
            array (
                'id' => 71,
                'family' => 'Atma',
                'category' => 'display',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            71 => 
            array (
                'id' => 72,
                'family' => 'Atomic Age',
                'category' => 'display',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            72 => 
            array (
                'id' => 73,
                'family' => 'Aubrey',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            73 => 
            array (
                'id' => 74,
                'family' => 'Audiowide',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            74 => 
            array (
                'id' => 75,
                'family' => 'Autour One',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            75 => 
            array (
                'id' => 76,
                'family' => 'Average',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            76 => 
            array (
                'id' => 77,
                'family' => 'Average Sans',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            77 => 
            array (
                'id' => 78,
                'family' => 'Averia Gruesa Libre',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            78 => 
            array (
                'id' => 79,
                'family' => 'Averia Libre',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            79 => 
            array (
                'id' => 80,
                'family' => 'Averia Sans Libre',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            80 => 
            array (
                'id' => 81,
                'family' => 'Averia Serif Libre',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            81 => 
            array (
                'id' => 82,
                'family' => 'Bad Script',
                'category' => 'handwriting',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            82 => 
            array (
                'id' => 83,
                'family' => 'Bahiana',
                'category' => 'display',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            83 => 
            array (
                'id' => 84,
                'family' => 'Baloo',
                'category' => 'display',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            84 => 
            array (
                'id' => 85,
                'family' => 'Baloo Bhai',
                'category' => 'display',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            85 => 
            array (
                'id' => 86,
                'family' => 'Baloo Bhaina',
                'category' => 'display',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            86 => 
            array (
                'id' => 87,
                'family' => 'Baloo Chettan',
                'category' => 'display',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            87 => 
            array (
                'id' => 88,
                'family' => 'Baloo Da',
                'category' => 'display',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            88 => 
            array (
                'id' => 89,
                'family' => 'Baloo Paaji',
                'category' => 'display',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            89 => 
            array (
                'id' => 90,
                'family' => 'Baloo Tamma',
                'category' => 'display',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            90 => 
            array (
                'id' => 91,
                'family' => 'Baloo Thambi',
                'category' => 'display',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            91 => 
            array (
                'id' => 92,
                'family' => 'Balthazar',
                'category' => 'serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            92 => 
            array (
                'id' => 93,
                'family' => 'Bangers',
                'category' => 'display',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            93 => 
            array (
                'id' => 94,
                'family' => 'Barrio',
                'category' => 'display',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            94 => 
            array (
                'id' => 95,
                'family' => 'Basic',
                'category' => 'sans-serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            95 => 
            array (
                'id' => 96,
                'family' => 'Battambang',
                'category' => 'display',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            96 => 
            array (
                'id' => 97,
                'family' => 'Baumans',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            97 => 
            array (
                'id' => 98,
                'family' => 'Bayon',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            98 => 
            array (
                'id' => 99,
                'family' => 'Belgrano',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            99 => 
            array (
                'id' => 100,
                'family' => 'Belleza',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            100 => 
            array (
                'id' => 101,
                'family' => 'BenchNine',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            101 => 
            array (
                'id' => 102,
                'family' => 'Bentham',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            102 => 
            array (
                'id' => 103,
                'family' => 'Berkshire Swash',
                'category' => 'handwriting',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            103 => 
            array (
                'id' => 104,
                'family' => 'Bevan',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            104 => 
            array (
                'id' => 105,
                'family' => 'Bigelow Rules',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            105 => 
            array (
                'id' => 106,
                'family' => 'Bigshot One',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            106 => 
            array (
                'id' => 107,
                'family' => 'Bilbo',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            107 => 
            array (
                'id' => 108,
                'family' => 'Bilbo Swash Caps',
                'category' => 'handwriting',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            108 => 
            array (
                'id' => 109,
                'family' => 'BioRhyme',
                'category' => 'serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            109 => 
            array (
                'id' => 110,
                'family' => 'BioRhyme Expanded',
                'category' => 'serif',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            110 => 
            array (
                'id' => 111,
                'family' => 'Biryani',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            111 => 
            array (
                'id' => 112,
                'family' => 'Bitter',
                'category' => 'serif',
                'version' => 'v10',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            112 => 
            array (
                'id' => 113,
                'family' => 'Black Ops One',
                'category' => 'display',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            113 => 
            array (
                'id' => 114,
                'family' => 'Bokor',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            114 => 
            array (
                'id' => 115,
                'family' => 'Bonbon',
                'category' => 'handwriting',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            115 => 
            array (
                'id' => 116,
                'family' => 'Boogaloo',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            116 => 
            array (
                'id' => 117,
                'family' => 'Bowlby One',
                'category' => 'display',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            117 => 
            array (
                'id' => 118,
                'family' => 'Bowlby One SC',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            118 => 
            array (
                'id' => 119,
                'family' => 'Brawler',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            119 => 
            array (
                'id' => 120,
                'family' => 'Bree Serif',
                'category' => 'serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            120 => 
            array (
                'id' => 121,
                'family' => 'Bubblegum Sans',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            121 => 
            array (
                'id' => 122,
                'family' => 'Bubbler One',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            122 => 
            array (
                'id' => 123,
                'family' => 'Buda',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            123 => 
            array (
                'id' => 124,
                'family' => 'Buenard',
                'category' => 'serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            124 => 
            array (
                'id' => 125,
                'family' => 'Bungee',
                'category' => 'display',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            125 => 
            array (
                'id' => 126,
                'family' => 'Bungee Hairline',
                'category' => 'display',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            126 => 
            array (
                'id' => 127,
                'family' => 'Bungee Inline',
                'category' => 'display',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            127 => 
            array (
                'id' => 128,
                'family' => 'Bungee Outline',
                'category' => 'display',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            128 => 
            array (
                'id' => 129,
                'family' => 'Bungee Shade',
                'category' => 'display',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            129 => 
            array (
                'id' => 130,
                'family' => 'Butcherman',
                'category' => 'display',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            130 => 
            array (
                'id' => 131,
                'family' => 'Butterfly Kids',
                'category' => 'handwriting',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            131 => 
            array (
                'id' => 132,
                'family' => 'Cabin',
                'category' => 'sans-serif',
                'version' => 'v10',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            132 => 
            array (
                'id' => 133,
                'family' => 'Cabin Condensed',
                'category' => 'sans-serif',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            133 => 
            array (
                'id' => 134,
                'family' => 'Cabin Sketch',
                'category' => 'display',
                'version' => 'v10',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            134 => 
            array (
                'id' => 135,
                'family' => 'Caesar Dressing',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            135 => 
            array (
                'id' => 136,
                'family' => 'Cagliostro',
                'category' => 'sans-serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            136 => 
            array (
                'id' => 137,
                'family' => 'Cairo',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            137 => 
            array (
                'id' => 138,
                'family' => 'Calligraffitti',
                'category' => 'handwriting',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            138 => 
            array (
                'id' => 139,
                'family' => 'Cambay',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            139 => 
            array (
                'id' => 140,
                'family' => 'Cambo',
                'category' => 'serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            140 => 
            array (
                'id' => 141,
                'family' => 'Candal',
                'category' => 'sans-serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            141 => 
            array (
                'id' => 142,
                'family' => 'Cantarell',
                'category' => 'sans-serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            142 => 
            array (
                'id' => 143,
                'family' => 'Cantata One',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            143 => 
            array (
                'id' => 144,
                'family' => 'Cantora One',
                'category' => 'sans-serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            144 => 
            array (
                'id' => 145,
                'family' => 'Capriola',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            145 => 
            array (
                'id' => 146,
                'family' => 'Cardo',
                'category' => 'serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            146 => 
            array (
                'id' => 147,
                'family' => 'Carme',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            147 => 
            array (
                'id' => 148,
                'family' => 'Carrois Gothic',
                'category' => 'sans-serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            148 => 
            array (
                'id' => 149,
                'family' => 'Carrois Gothic SC',
                'category' => 'sans-serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            149 => 
            array (
                'id' => 150,
                'family' => 'Carter One',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            150 => 
            array (
                'id' => 151,
                'family' => 'Catamaran',
                'category' => 'sans-serif',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            151 => 
            array (
                'id' => 152,
                'family' => 'Caudex',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            152 => 
            array (
                'id' => 153,
                'family' => 'Caveat',
                'category' => 'handwriting',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            153 => 
            array (
                'id' => 154,
                'family' => 'Caveat Brush',
                'category' => 'handwriting',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            154 => 
            array (
                'id' => 155,
                'family' => 'Cedarville Cursive',
                'category' => 'handwriting',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            155 => 
            array (
                'id' => 156,
                'family' => 'Ceviche One',
                'category' => 'display',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            156 => 
            array (
                'id' => 157,
                'family' => 'Changa',
                'category' => 'sans-serif',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            157 => 
            array (
                'id' => 158,
                'family' => 'Changa One',
                'category' => 'display',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            158 => 
            array (
                'id' => 159,
                'family' => 'Chango',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            159 => 
            array (
                'id' => 160,
                'family' => 'Chathura',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            160 => 
            array (
                'id' => 161,
                'family' => 'Chau Philomene One',
                'category' => 'sans-serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            161 => 
            array (
                'id' => 162,
                'family' => 'Chela One',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            162 => 
            array (
                'id' => 163,
                'family' => 'Chelsea Market',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            163 => 
            array (
                'id' => 164,
                'family' => 'Chenla',
                'category' => 'display',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            164 => 
            array (
                'id' => 165,
                'family' => 'Cherry Cream Soda',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            165 => 
            array (
                'id' => 166,
                'family' => 'Cherry Swash',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            166 => 
            array (
                'id' => 167,
                'family' => 'Chewy',
                'category' => 'display',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            167 => 
            array (
                'id' => 168,
                'family' => 'Chicle',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            168 => 
            array (
                'id' => 169,
                'family' => 'Chivo',
                'category' => 'sans-serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            169 => 
            array (
                'id' => 170,
                'family' => 'Chonburi',
                'category' => 'display',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            170 => 
            array (
                'id' => 171,
                'family' => 'Cinzel',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            171 => 
            array (
                'id' => 172,
                'family' => 'Cinzel Decorative',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            172 => 
            array (
                'id' => 173,
                'family' => 'Clicker Script',
                'category' => 'handwriting',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            173 => 
            array (
                'id' => 174,
                'family' => 'Coda',
                'category' => 'display',
                'version' => 'v11',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            174 => 
            array (
                'id' => 175,
                'family' => 'Coda Caption',
                'category' => 'sans-serif',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            175 => 
            array (
                'id' => 176,
                'family' => 'Codystar',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            176 => 
            array (
                'id' => 177,
                'family' => 'Coiny',
                'category' => 'display',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            177 => 
            array (
                'id' => 178,
                'family' => 'Combo',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            178 => 
            array (
                'id' => 179,
                'family' => 'Comfortaa',
                'category' => 'display',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            179 => 
            array (
                'id' => 180,
                'family' => 'Coming Soon',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            180 => 
            array (
                'id' => 181,
                'family' => 'Concert One',
                'category' => 'display',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            181 => 
            array (
                'id' => 182,
                'family' => 'Condiment',
                'category' => 'handwriting',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            182 => 
            array (
                'id' => 183,
                'family' => 'Content',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            183 => 
            array (
                'id' => 184,
                'family' => 'Contrail One',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            184 => 
            array (
                'id' => 185,
                'family' => 'Convergence',
                'category' => 'sans-serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            185 => 
            array (
                'id' => 186,
                'family' => 'Cookie',
                'category' => 'handwriting',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            186 => 
            array (
                'id' => 187,
                'family' => 'Copse',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            187 => 
            array (
                'id' => 188,
                'family' => 'Corben',
                'category' => 'display',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            188 => 
            array (
                'id' => 189,
                'family' => 'Cormorant',
                'category' => 'serif',
                'version' => 'v3',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            189 => 
            array (
                'id' => 190,
                'family' => 'Cormorant Garamond',
                'category' => 'serif',
                'version' => 'v3',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            190 => 
            array (
                'id' => 191,
                'family' => 'Cormorant Infant',
                'category' => 'serif',
                'version' => 'v3',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            191 => 
            array (
                'id' => 192,
                'family' => 'Cormorant SC',
                'category' => 'serif',
                'version' => 'v3',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            192 => 
            array (
                'id' => 193,
                'family' => 'Cormorant Unicase',
                'category' => 'serif',
                'version' => 'v3',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            193 => 
            array (
                'id' => 194,
                'family' => 'Cormorant Upright',
                'category' => 'serif',
                'version' => 'v3',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            194 => 
            array (
                'id' => 195,
                'family' => 'Courgette',
                'category' => 'handwriting',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            195 => 
            array (
                'id' => 196,
                'family' => 'Cousine',
                'category' => 'monospace',
                'version' => 'v10',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            196 => 
            array (
                'id' => 197,
                'family' => 'Coustard',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            197 => 
            array (
                'id' => 198,
                'family' => 'Covered By Your Grace',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            198 => 
            array (
                'id' => 199,
                'family' => 'Crafty Girls',
                'category' => 'handwriting',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            199 => 
            array (
                'id' => 200,
                'family' => 'Creepster',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            200 => 
            array (
                'id' => 201,
                'family' => 'Crete Round',
                'category' => 'serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            201 => 
            array (
                'id' => 202,
                'family' => 'Crimson Text',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            202 => 
            array (
                'id' => 203,
                'family' => 'Croissant One',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            203 => 
            array (
                'id' => 204,
                'family' => 'Crushed',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            204 => 
            array (
                'id' => 205,
                'family' => 'Cuprum',
                'category' => 'sans-serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            205 => 
            array (
                'id' => 206,
                'family' => 'Cutive',
                'category' => 'serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            206 => 
            array (
                'id' => 207,
                'family' => 'Cutive Mono',
                'category' => 'monospace',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            207 => 
            array (
                'id' => 208,
                'family' => 'Damion',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            208 => 
            array (
                'id' => 209,
                'family' => 'Dancing Script',
                'category' => 'handwriting',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            209 => 
            array (
                'id' => 210,
                'family' => 'Dangrek',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            210 => 
            array (
                'id' => 211,
                'family' => 'David Libre',
                'category' => 'serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            211 => 
            array (
                'id' => 212,
                'family' => 'Dawning of a New Day',
                'category' => 'handwriting',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            212 => 
            array (
                'id' => 213,
                'family' => 'Days One',
                'category' => 'sans-serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            213 => 
            array (
                'id' => 214,
                'family' => 'Dekko',
                'category' => 'handwriting',
                'version' => 'v3',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            214 => 
            array (
                'id' => 215,
                'family' => 'Delius',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            215 => 
            array (
                'id' => 216,
                'family' => 'Delius Swash Caps',
                'category' => 'handwriting',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            216 => 
            array (
                'id' => 217,
                'family' => 'Delius Unicase',
                'category' => 'handwriting',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            217 => 
            array (
                'id' => 218,
                'family' => 'Della Respira',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            218 => 
            array (
                'id' => 219,
                'family' => 'Denk One',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            219 => 
            array (
                'id' => 220,
                'family' => 'Devonshire',
                'category' => 'handwriting',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            220 => 
            array (
                'id' => 221,
                'family' => 'Dhurjati',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            221 => 
            array (
                'id' => 222,
                'family' => 'Didact Gothic',
                'category' => 'sans-serif',
                'version' => 'v10',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            222 => 
            array (
                'id' => 223,
                'family' => 'Diplomata',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            223 => 
            array (
                'id' => 224,
                'family' => 'Diplomata SC',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            224 => 
            array (
                'id' => 225,
                'family' => 'Domine',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            225 => 
            array (
                'id' => 226,
                'family' => 'Donegal One',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            226 => 
            array (
                'id' => 227,
                'family' => 'Doppio One',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            227 => 
            array (
                'id' => 228,
                'family' => 'Dorsa',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            228 => 
            array (
                'id' => 229,
                'family' => 'Dosis',
                'category' => 'sans-serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            229 => 
            array (
                'id' => 230,
                'family' => 'Dr Sugiyama',
                'category' => 'handwriting',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            230 => 
            array (
                'id' => 231,
                'family' => 'Droid Sans',
                'category' => 'sans-serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            231 => 
            array (
                'id' => 232,
                'family' => 'Droid Sans Mono',
                'category' => 'monospace',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            232 => 
            array (
                'id' => 233,
                'family' => 'Droid Serif',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            233 => 
            array (
                'id' => 234,
                'family' => 'Duru Sans',
                'category' => 'sans-serif',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            234 => 
            array (
                'id' => 235,
                'family' => 'Dynalight',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            235 => 
            array (
                'id' => 236,
                'family' => 'EB Garamond',
                'category' => 'serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            236 => 
            array (
                'id' => 237,
                'family' => 'Eagle Lake',
                'category' => 'handwriting',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            237 => 
            array (
                'id' => 238,
                'family' => 'Eater',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            238 => 
            array (
                'id' => 239,
                'family' => 'Economica',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            239 => 
            array (
                'id' => 240,
                'family' => 'Eczar',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            240 => 
            array (
                'id' => 241,
                'family' => 'Ek Mukta',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            241 => 
            array (
                'id' => 242,
                'family' => 'El Messiri',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            242 => 
            array (
                'id' => 243,
                'family' => 'Electrolize',
                'category' => 'sans-serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            243 => 
            array (
                'id' => 244,
                'family' => 'Elsie',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            244 => 
            array (
                'id' => 245,
                'family' => 'Elsie Swash Caps',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            245 => 
            array (
                'id' => 246,
                'family' => 'Emblema One',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            246 => 
            array (
                'id' => 247,
                'family' => 'Emilys Candy',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            247 => 
            array (
                'id' => 248,
                'family' => 'Engagement',
                'category' => 'handwriting',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            248 => 
            array (
                'id' => 249,
                'family' => 'Englebert',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            249 => 
            array (
                'id' => 250,
                'family' => 'Enriqueta',
                'category' => 'serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            250 => 
            array (
                'id' => 251,
                'family' => 'Erica One',
                'category' => 'display',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            251 => 
            array (
                'id' => 252,
                'family' => 'Esteban',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            252 => 
            array (
                'id' => 253,
                'family' => 'Euphoria Script',
                'category' => 'handwriting',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            253 => 
            array (
                'id' => 254,
                'family' => 'Ewert',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            254 => 
            array (
                'id' => 255,
                'family' => 'Exo',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            255 => 
            array (
                'id' => 256,
                'family' => 'Exo 2',
                'category' => 'sans-serif',
                'version' => 'v3',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            256 => 
            array (
                'id' => 257,
                'family' => 'Expletus Sans',
                'category' => 'display',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            257 => 
            array (
                'id' => 258,
                'family' => 'Fanwood Text',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            258 => 
            array (
                'id' => 259,
                'family' => 'Farsan',
                'category' => 'display',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            259 => 
            array (
                'id' => 260,
                'family' => 'Fascinate',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            260 => 
            array (
                'id' => 261,
                'family' => 'Fascinate Inline',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            261 => 
            array (
                'id' => 262,
                'family' => 'Faster One',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            262 => 
            array (
                'id' => 263,
                'family' => 'Fasthand',
                'category' => 'serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            263 => 
            array (
                'id' => 264,
                'family' => 'Fauna One',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            264 => 
            array (
                'id' => 265,
                'family' => 'Federant',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            265 => 
            array (
                'id' => 266,
                'family' => 'Federo',
                'category' => 'sans-serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            266 => 
            array (
                'id' => 267,
                'family' => 'Felipa',
                'category' => 'handwriting',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            267 => 
            array (
                'id' => 268,
                'family' => 'Fenix',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            268 => 
            array (
                'id' => 269,
                'family' => 'Finger Paint',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            269 => 
            array (
                'id' => 270,
                'family' => 'Fira Mono',
                'category' => 'monospace',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            270 => 
            array (
                'id' => 271,
                'family' => 'Fira Sans',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            271 => 
            array (
                'id' => 272,
                'family' => 'Fira Sans Condensed',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            272 => 
            array (
                'id' => 273,
                'family' => 'Fira Sans Extra Condensed',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            273 => 
            array (
                'id' => 274,
                'family' => 'Fjalla One',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            274 => 
            array (
                'id' => 275,
                'family' => 'Fjord One',
                'category' => 'serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            275 => 
            array (
                'id' => 276,
                'family' => 'Flamenco',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            276 => 
            array (
                'id' => 277,
                'family' => 'Flavors',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            277 => 
            array (
                'id' => 278,
                'family' => 'Fondamento',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            278 => 
            array (
                'id' => 279,
                'family' => 'Fontdiner Swanky',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            279 => 
            array (
                'id' => 280,
                'family' => 'Forum',
                'category' => 'display',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            280 => 
            array (
                'id' => 281,
                'family' => 'Francois One',
                'category' => 'sans-serif',
                'version' => 'v10',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            281 => 
            array (
                'id' => 282,
                'family' => 'Frank Ruhl Libre',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            282 => 
            array (
                'id' => 283,
                'family' => 'Freckle Face',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            283 => 
            array (
                'id' => 284,
                'family' => 'Fredericka the Great',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            284 => 
            array (
                'id' => 285,
                'family' => 'Fredoka One',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            285 => 
            array (
                'id' => 286,
                'family' => 'Freehand',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            286 => 
            array (
                'id' => 287,
                'family' => 'Fresca',
                'category' => 'sans-serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            287 => 
            array (
                'id' => 288,
                'family' => 'Frijole',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            288 => 
            array (
                'id' => 289,
                'family' => 'Fruktur',
                'category' => 'display',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            289 => 
            array (
                'id' => 290,
                'family' => 'Fugaz One',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            290 => 
            array (
                'id' => 291,
                'family' => 'GFS Didot',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            291 => 
            array (
                'id' => 292,
                'family' => 'GFS Neohellenic',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            292 => 
            array (
                'id' => 293,
                'family' => 'Gabriela',
                'category' => 'serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            293 => 
            array (
                'id' => 294,
                'family' => 'Gafata',
                'category' => 'sans-serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            294 => 
            array (
                'id' => 295,
                'family' => 'Galada',
                'category' => 'display',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            295 => 
            array (
                'id' => 296,
                'family' => 'Galdeano',
                'category' => 'sans-serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            296 => 
            array (
                'id' => 297,
                'family' => 'Galindo',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            297 => 
            array (
                'id' => 298,
                'family' => 'Gentium Basic',
                'category' => 'serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            298 => 
            array (
                'id' => 299,
                'family' => 'Gentium Book Basic',
                'category' => 'serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            299 => 
            array (
                'id' => 300,
                'family' => 'Geo',
                'category' => 'sans-serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            300 => 
            array (
                'id' => 301,
                'family' => 'Geostar',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            301 => 
            array (
                'id' => 302,
                'family' => 'Geostar Fill',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            302 => 
            array (
                'id' => 303,
                'family' => 'Germania One',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            303 => 
            array (
                'id' => 304,
                'family' => 'Gidugu',
                'category' => 'sans-serif',
                'version' => 'v3',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            304 => 
            array (
                'id' => 305,
                'family' => 'Gilda Display',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            305 => 
            array (
                'id' => 306,
                'family' => 'Give You Glory',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            306 => 
            array (
                'id' => 307,
                'family' => 'Glass Antiqua',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            307 => 
            array (
                'id' => 308,
                'family' => 'Glegoo',
                'category' => 'serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            308 => 
            array (
                'id' => 309,
                'family' => 'Gloria Hallelujah',
                'category' => 'handwriting',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            309 => 
            array (
                'id' => 310,
                'family' => 'Goblin One',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            310 => 
            array (
                'id' => 311,
                'family' => 'Gochi Hand',
                'category' => 'handwriting',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            311 => 
            array (
                'id' => 312,
                'family' => 'Gorditas',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            312 => 
            array (
                'id' => 313,
                'family' => 'Goudy Bookletter 1911',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            313 => 
            array (
                'id' => 314,
                'family' => 'Graduate',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            314 => 
            array (
                'id' => 315,
                'family' => 'Grand Hotel',
                'category' => 'handwriting',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            315 => 
            array (
                'id' => 316,
                'family' => 'Gravitas One',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            316 => 
            array (
                'id' => 317,
                'family' => 'Great Vibes',
                'category' => 'handwriting',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            317 => 
            array (
                'id' => 318,
                'family' => 'Griffy',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            318 => 
            array (
                'id' => 319,
                'family' => 'Gruppo',
                'category' => 'display',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            319 => 
            array (
                'id' => 320,
                'family' => 'Gudea',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            320 => 
            array (
                'id' => 321,
                'family' => 'Gurajada',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            321 => 
            array (
                'id' => 322,
                'family' => 'Habibi',
                'category' => 'serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            322 => 
            array (
                'id' => 323,
                'family' => 'Halant',
                'category' => 'serif',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            323 => 
            array (
                'id' => 324,
                'family' => 'Hammersmith One',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            324 => 
            array (
                'id' => 325,
                'family' => 'Hanalei',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            325 => 
            array (
                'id' => 326,
                'family' => 'Hanalei Fill',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            326 => 
            array (
                'id' => 327,
                'family' => 'Handlee',
                'category' => 'handwriting',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            327 => 
            array (
                'id' => 328,
                'family' => 'Hanuman',
                'category' => 'serif',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            328 => 
            array (
                'id' => 329,
                'family' => 'Happy Monkey',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            329 => 
            array (
                'id' => 330,
                'family' => 'Harmattan',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            330 => 
            array (
                'id' => 331,
                'family' => 'Headland One',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            331 => 
            array (
                'id' => 332,
                'family' => 'Heebo',
                'category' => 'sans-serif',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            332 => 
            array (
                'id' => 333,
                'family' => 'Henny Penny',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            333 => 
            array (
                'id' => 334,
                'family' => 'Herr Von Muellerhoff',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            334 => 
            array (
                'id' => 335,
                'family' => 'Hind',
                'category' => 'sans-serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            335 => 
            array (
                'id' => 336,
                'family' => 'Hind Guntur',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            336 => 
            array (
                'id' => 337,
                'family' => 'Hind Madurai',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            337 => 
            array (
                'id' => 338,
                'family' => 'Hind Siliguri',
                'category' => 'sans-serif',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            338 => 
            array (
                'id' => 339,
                'family' => 'Hind Vadodara',
                'category' => 'sans-serif',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            339 => 
            array (
                'id' => 340,
                'family' => 'Holtwood One SC',
                'category' => 'serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            340 => 
            array (
                'id' => 341,
                'family' => 'Homemade Apple',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            341 => 
            array (
                'id' => 342,
                'family' => 'Homenaje',
                'category' => 'sans-serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            342 => 
            array (
                'id' => 343,
                'family' => 'IM Fell DW Pica',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            343 => 
            array (
                'id' => 344,
                'family' => 'IM Fell DW Pica SC',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            344 => 
            array (
                'id' => 345,
                'family' => 'IM Fell Double Pica',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            345 => 
            array (
                'id' => 346,
                'family' => 'IM Fell Double Pica SC',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            346 => 
            array (
                'id' => 347,
                'family' => 'IM Fell English',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            347 => 
            array (
                'id' => 348,
                'family' => 'IM Fell English SC',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            348 => 
            array (
                'id' => 349,
                'family' => 'IM Fell French Canon',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            349 => 
            array (
                'id' => 350,
                'family' => 'IM Fell French Canon SC',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            350 => 
            array (
                'id' => 351,
                'family' => 'IM Fell Great Primer',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            351 => 
            array (
                'id' => 352,
                'family' => 'IM Fell Great Primer SC',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            352 => 
            array (
                'id' => 353,
                'family' => 'Iceberg',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            353 => 
            array (
                'id' => 354,
                'family' => 'Iceland',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            354 => 
            array (
                'id' => 355,
                'family' => 'Imprima',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            355 => 
            array (
                'id' => 356,
                'family' => 'Inconsolata',
                'category' => 'monospace',
                'version' => 'v15',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            356 => 
            array (
                'id' => 357,
                'family' => 'Inder',
                'category' => 'sans-serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            357 => 
            array (
                'id' => 358,
                'family' => 'Indie Flower',
                'category' => 'handwriting',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            358 => 
            array (
                'id' => 359,
                'family' => 'Inika',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            359 => 
            array (
                'id' => 360,
                'family' => 'Inknut Antiqua',
                'category' => 'serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            360 => 
            array (
                'id' => 361,
                'family' => 'Irish Grover',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            361 => 
            array (
                'id' => 362,
                'family' => 'Istok Web',
                'category' => 'sans-serif',
                'version' => 'v10',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            362 => 
            array (
                'id' => 363,
                'family' => 'Italiana',
                'category' => 'serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            363 => 
            array (
                'id' => 364,
                'family' => 'Italianno',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            364 => 
            array (
                'id' => 365,
                'family' => 'Itim',
                'category' => 'handwriting',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            365 => 
            array (
                'id' => 366,
                'family' => 'Jacques Francois',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            366 => 
            array (
                'id' => 367,
                'family' => 'Jacques Francois Shadow',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            367 => 
            array (
                'id' => 368,
                'family' => 'Jaldi',
                'category' => 'sans-serif',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            368 => 
            array (
                'id' => 369,
                'family' => 'Jim Nightshade',
                'category' => 'handwriting',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            369 => 
            array (
                'id' => 370,
                'family' => 'Jockey One',
                'category' => 'sans-serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            370 => 
            array (
                'id' => 371,
                'family' => 'Jolly Lodger',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            371 => 
            array (
                'id' => 372,
                'family' => 'Jomhuria',
                'category' => 'display',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            372 => 
            array (
                'id' => 373,
                'family' => 'Josefin Sans',
                'category' => 'sans-serif',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            373 => 
            array (
                'id' => 374,
                'family' => 'Josefin Slab',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            374 => 
            array (
                'id' => 375,
                'family' => 'Joti One',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            375 => 
            array (
                'id' => 376,
                'family' => 'Judson',
                'category' => 'serif',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            376 => 
            array (
                'id' => 377,
                'family' => 'Julee',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            377 => 
            array (
                'id' => 378,
                'family' => 'Julius Sans One',
                'category' => 'sans-serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            378 => 
            array (
                'id' => 379,
                'family' => 'Junge',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            379 => 
            array (
                'id' => 380,
                'family' => 'Jura',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            380 => 
            array (
                'id' => 381,
                'family' => 'Just Another Hand',
                'category' => 'handwriting',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            381 => 
            array (
                'id' => 382,
                'family' => 'Just Me Again Down Here',
                'category' => 'handwriting',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            382 => 
            array (
                'id' => 383,
                'family' => 'Kadwa',
                'category' => 'serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            383 => 
            array (
                'id' => 384,
                'family' => 'Kalam',
                'category' => 'handwriting',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            384 => 
            array (
                'id' => 385,
                'family' => 'Kameron',
                'category' => 'serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            385 => 
            array (
                'id' => 386,
                'family' => 'Kanit',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            386 => 
            array (
                'id' => 387,
                'family' => 'Kantumruy',
                'category' => 'sans-serif',
                'version' => 'v3',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            387 => 
            array (
                'id' => 388,
                'family' => 'Karla',
                'category' => 'sans-serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            388 => 
            array (
                'id' => 389,
                'family' => 'Karma',
                'category' => 'serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            389 => 
            array (
                'id' => 390,
                'family' => 'Katibeh',
                'category' => 'display',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            390 => 
            array (
                'id' => 391,
                'family' => 'Kaushan Script',
                'category' => 'handwriting',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            391 => 
            array (
                'id' => 392,
                'family' => 'Kavivanar',
                'category' => 'handwriting',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            392 => 
            array (
                'id' => 393,
                'family' => 'Kavoon',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            393 => 
            array (
                'id' => 394,
                'family' => 'Kdam Thmor',
                'category' => 'display',
                'version' => 'v3',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            394 => 
            array (
                'id' => 395,
                'family' => 'Keania One',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            395 => 
            array (
                'id' => 396,
                'family' => 'Kelly Slab',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            396 => 
            array (
                'id' => 397,
                'family' => 'Kenia',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            397 => 
            array (
                'id' => 398,
                'family' => 'Khand',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            398 => 
            array (
                'id' => 399,
                'family' => 'Khmer',
                'category' => 'display',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            399 => 
            array (
                'id' => 400,
                'family' => 'Khula',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            400 => 
            array (
                'id' => 401,
                'family' => 'Kite One',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            401 => 
            array (
                'id' => 402,
                'family' => 'Knewave',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            402 => 
            array (
                'id' => 403,
                'family' => 'Kotta One',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            403 => 
            array (
                'id' => 404,
                'family' => 'Koulen',
                'category' => 'display',
                'version' => 'v10',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            404 => 
            array (
                'id' => 405,
                'family' => 'Kranky',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            405 => 
            array (
                'id' => 406,
                'family' => 'Kreon',
                'category' => 'serif',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            406 => 
            array (
                'id' => 407,
                'family' => 'Kristi',
                'category' => 'handwriting',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            407 => 
            array (
                'id' => 408,
                'family' => 'Krona One',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            408 => 
            array (
                'id' => 409,
                'family' => 'Kumar One',
                'category' => 'display',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            409 => 
            array (
                'id' => 410,
                'family' => 'Kumar One Outline',
                'category' => 'display',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            410 => 
            array (
                'id' => 411,
                'family' => 'Kurale',
                'category' => 'serif',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            411 => 
            array (
                'id' => 412,
                'family' => 'La Belle Aurore',
                'category' => 'handwriting',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            412 => 
            array (
                'id' => 413,
                'family' => 'Laila',
                'category' => 'serif',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            413 => 
            array (
                'id' => 414,
                'family' => 'Lakki Reddy',
                'category' => 'handwriting',
                'version' => 'v3',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            414 => 
            array (
                'id' => 415,
                'family' => 'Lalezar',
                'category' => 'display',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            415 => 
            array (
                'id' => 416,
                'family' => 'Lancelot',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            416 => 
            array (
                'id' => 417,
                'family' => 'Lateef',
                'category' => 'handwriting',
                'version' => 'v10',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            417 => 
            array (
                'id' => 418,
                'family' => 'Lato',
                'category' => 'sans-serif',
                'version' => 'v13',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            418 => 
            array (
                'id' => 419,
                'family' => 'League Script',
                'category' => 'handwriting',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            419 => 
            array (
                'id' => 420,
                'family' => 'Leckerli One',
                'category' => 'handwriting',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            420 => 
            array (
                'id' => 421,
                'family' => 'Ledger',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            421 => 
            array (
                'id' => 422,
                'family' => 'Lekton',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            422 => 
            array (
                'id' => 423,
                'family' => 'Lemon',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            423 => 
            array (
                'id' => 424,
                'family' => 'Lemonada',
                'category' => 'display',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            424 => 
            array (
                'id' => 425,
                'family' => 'Libre Baskerville',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            425 => 
            array (
                'id' => 426,
                'family' => 'Libre Franklin',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            426 => 
            array (
                'id' => 427,
                'family' => 'Life Savers',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            427 => 
            array (
                'id' => 428,
                'family' => 'Lilita One',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            428 => 
            array (
                'id' => 429,
                'family' => 'Lily Script One',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            429 => 
            array (
                'id' => 430,
                'family' => 'Limelight',
                'category' => 'display',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            430 => 
            array (
                'id' => 431,
                'family' => 'Linden Hill',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            431 => 
            array (
                'id' => 432,
                'family' => 'Lobster',
                'category' => 'display',
                'version' => 'v18',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            432 => 
            array (
                'id' => 433,
                'family' => 'Lobster Two',
                'category' => 'display',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            433 => 
            array (
                'id' => 434,
                'family' => 'Londrina Outline',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            434 => 
            array (
                'id' => 435,
                'family' => 'Londrina Shadow',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            435 => 
            array (
                'id' => 436,
                'family' => 'Londrina Sketch',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            436 => 
            array (
                'id' => 437,
                'family' => 'Londrina Solid',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            437 => 
            array (
                'id' => 438,
                'family' => 'Lora',
                'category' => 'serif',
                'version' => 'v10',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            438 => 
            array (
                'id' => 439,
                'family' => 'Love Ya Like A Sister',
                'category' => 'display',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            439 => 
            array (
                'id' => 440,
                'family' => 'Loved by the King',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            440 => 
            array (
                'id' => 441,
                'family' => 'Lovers Quarrel',
                'category' => 'handwriting',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            441 => 
            array (
                'id' => 442,
                'family' => 'Luckiest Guy',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            442 => 
            array (
                'id' => 443,
                'family' => 'Lusitana',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            443 => 
            array (
                'id' => 444,
                'family' => 'Lustria',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            444 => 
            array (
                'id' => 445,
                'family' => 'Macondo',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            445 => 
            array (
                'id' => 446,
                'family' => 'Macondo Swash Caps',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            446 => 
            array (
                'id' => 447,
                'family' => 'Mada',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            447 => 
            array (
                'id' => 448,
                'family' => 'Magra',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            448 => 
            array (
                'id' => 449,
                'family' => 'Maiden Orange',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            449 => 
            array (
                'id' => 450,
                'family' => 'Maitree',
                'category' => 'serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            450 => 
            array (
                'id' => 451,
                'family' => 'Mako',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            451 => 
            array (
                'id' => 452,
                'family' => 'Mallanna',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            452 => 
            array (
                'id' => 453,
                'family' => 'Mandali',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            453 => 
            array (
                'id' => 454,
                'family' => 'Marcellus',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            454 => 
            array (
                'id' => 455,
                'family' => 'Marcellus SC',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            455 => 
            array (
                'id' => 456,
                'family' => 'Marck Script',
                'category' => 'handwriting',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            456 => 
            array (
                'id' => 457,
                'family' => 'Margarine',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            457 => 
            array (
                'id' => 458,
                'family' => 'Marko One',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            458 => 
            array (
                'id' => 459,
                'family' => 'Marmelad',
                'category' => 'sans-serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            459 => 
            array (
                'id' => 460,
                'family' => 'Martel',
                'category' => 'serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            460 => 
            array (
                'id' => 461,
                'family' => 'Martel Sans',
                'category' => 'sans-serif',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            461 => 
            array (
                'id' => 462,
                'family' => 'Marvel',
                'category' => 'sans-serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            462 => 
            array (
                'id' => 463,
                'family' => 'Mate',
                'category' => 'serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            463 => 
            array (
                'id' => 464,
                'family' => 'Mate SC',
                'category' => 'serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            464 => 
            array (
                'id' => 465,
                'family' => 'Maven Pro',
                'category' => 'sans-serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            465 => 
            array (
                'id' => 466,
                'family' => 'McLaren',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            466 => 
            array (
                'id' => 467,
                'family' => 'Meddon',
                'category' => 'handwriting',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            467 => 
            array (
                'id' => 468,
                'family' => 'MedievalSharp',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            468 => 
            array (
                'id' => 469,
                'family' => 'Medula One',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            469 => 
            array (
                'id' => 470,
                'family' => 'Meera Inimai',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            470 => 
            array (
                'id' => 471,
                'family' => 'Megrim',
                'category' => 'display',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            471 => 
            array (
                'id' => 472,
                'family' => 'Meie Script',
                'category' => 'handwriting',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            472 => 
            array (
                'id' => 473,
                'family' => 'Merienda',
                'category' => 'handwriting',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            473 => 
            array (
                'id' => 474,
                'family' => 'Merienda One',
                'category' => 'handwriting',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            474 => 
            array (
                'id' => 475,
                'family' => 'Merriweather',
                'category' => 'serif',
                'version' => 'v15',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            475 => 
            array (
                'id' => 476,
                'family' => 'Merriweather Sans',
                'category' => 'sans-serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            476 => 
            array (
                'id' => 477,
                'family' => 'Metal',
                'category' => 'display',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            477 => 
            array (
                'id' => 478,
                'family' => 'Metal Mania',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            478 => 
            array (
                'id' => 479,
                'family' => 'Metamorphous',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            479 => 
            array (
                'id' => 480,
                'family' => 'Metrophobic',
                'category' => 'sans-serif',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            480 => 
            array (
                'id' => 481,
                'family' => 'Michroma',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            481 => 
            array (
                'id' => 482,
                'family' => 'Milonga',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            482 => 
            array (
                'id' => 483,
                'family' => 'Miltonian',
                'category' => 'display',
                'version' => 'v10',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            483 => 
            array (
                'id' => 484,
                'family' => 'Miltonian Tattoo',
                'category' => 'display',
                'version' => 'v11',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            484 => 
            array (
                'id' => 485,
                'family' => 'Miniver',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            485 => 
            array (
                'id' => 486,
                'family' => 'Miriam Libre',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            486 => 
            array (
                'id' => 487,
                'family' => 'Mirza',
                'category' => 'display',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            487 => 
            array (
                'id' => 488,
                'family' => 'Miss Fajardose',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            488 => 
            array (
                'id' => 489,
                'family' => 'Mitr',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            489 => 
            array (
                'id' => 490,
                'family' => 'Modak',
                'category' => 'display',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            490 => 
            array (
                'id' => 491,
                'family' => 'Modern Antiqua',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            491 => 
            array (
                'id' => 492,
                'family' => 'Mogra',
                'category' => 'display',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            492 => 
            array (
                'id' => 493,
                'family' => 'Molengo',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            493 => 
            array (
                'id' => 494,
                'family' => 'Molle',
                'category' => 'handwriting',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            494 => 
            array (
                'id' => 495,
                'family' => 'Monda',
                'category' => 'sans-serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            495 => 
            array (
                'id' => 496,
                'family' => 'Monofett',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            496 => 
            array (
                'id' => 497,
                'family' => 'Monoton',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            497 => 
            array (
                'id' => 498,
                'family' => 'Monsieur La Doulaise',
                'category' => 'handwriting',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            498 => 
            array (
                'id' => 499,
                'family' => 'Montaga',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            499 => 
            array (
                'id' => 500,
                'family' => 'Montez',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
        ));
        \DB::table('fonts_list')->insert(array (
            0 => 
            array (
                'id' => 501,
                'family' => 'Montserrat',
                'category' => 'sans-serif',
                'version' => 'v10',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            1 => 
            array (
                'id' => 502,
                'family' => 'Montserrat Alternates',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            2 => 
            array (
                'id' => 503,
                'family' => 'Montserrat Subrayada',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            3 => 
            array (
                'id' => 504,
                'family' => 'Moul',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            4 => 
            array (
                'id' => 505,
                'family' => 'Moulpali',
                'category' => 'display',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            5 => 
            array (
                'id' => 506,
                'family' => 'Mountains of Christmas',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            6 => 
            array (
                'id' => 507,
                'family' => 'Mouse Memoirs',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            7 => 
            array (
                'id' => 508,
                'family' => 'Mr Bedfort',
                'category' => 'handwriting',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            8 => 
            array (
                'id' => 509,
                'family' => 'Mr Dafoe',
                'category' => 'handwriting',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            9 => 
            array (
                'id' => 510,
                'family' => 'Mr De Haviland',
                'category' => 'handwriting',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            10 => 
            array (
                'id' => 511,
                'family' => 'Mrs Saint Delafield',
                'category' => 'handwriting',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            11 => 
            array (
                'id' => 512,
                'family' => 'Mrs Sheppards',
                'category' => 'handwriting',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            12 => 
            array (
                'id' => 513,
                'family' => 'Mukta Vaani',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            13 => 
            array (
                'id' => 514,
                'family' => 'Muli',
                'category' => 'sans-serif',
                'version' => 'v10',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            14 => 
            array (
                'id' => 515,
                'family' => 'Mystery Quest',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            15 => 
            array (
                'id' => 516,
                'family' => 'NTR',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            16 => 
            array (
                'id' => 517,
                'family' => 'Neucha',
                'category' => 'handwriting',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            17 => 
            array (
                'id' => 518,
                'family' => 'Neuton',
                'category' => 'serif',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            18 => 
            array (
                'id' => 519,
                'family' => 'New Rocker',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            19 => 
            array (
                'id' => 520,
                'family' => 'News Cycle',
                'category' => 'sans-serif',
                'version' => 'v13',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            20 => 
            array (
                'id' => 521,
                'family' => 'Niconne',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            21 => 
            array (
                'id' => 522,
                'family' => 'Nixie One',
                'category' => 'display',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            22 => 
            array (
                'id' => 523,
                'family' => 'Nobile',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            23 => 
            array (
                'id' => 524,
                'family' => 'Nokora',
                'category' => 'serif',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            24 => 
            array (
                'id' => 525,
                'family' => 'Norican',
                'category' => 'handwriting',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            25 => 
            array (
                'id' => 526,
                'family' => 'Nosifer',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            26 => 
            array (
                'id' => 527,
                'family' => 'Nothing You Could Do',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            27 => 
            array (
                'id' => 528,
                'family' => 'Noticia Text',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            28 => 
            array (
                'id' => 529,
                'family' => 'Noto Sans',
                'category' => 'sans-serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            29 => 
            array (
                'id' => 530,
                'family' => 'Noto Serif',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            30 => 
            array (
                'id' => 531,
                'family' => 'Nova Cut',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            31 => 
            array (
                'id' => 532,
                'family' => 'Nova Flat',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            32 => 
            array (
                'id' => 533,
                'family' => 'Nova Mono',
                'category' => 'monospace',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            33 => 
            array (
                'id' => 534,
                'family' => 'Nova Oval',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            34 => 
            array (
                'id' => 535,
                'family' => 'Nova Round',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            35 => 
            array (
                'id' => 536,
                'family' => 'Nova Script',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            36 => 
            array (
                'id' => 537,
                'family' => 'Nova Slim',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            37 => 
            array (
                'id' => 538,
                'family' => 'Nova Square',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            38 => 
            array (
                'id' => 539,
                'family' => 'Numans',
                'category' => 'sans-serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            39 => 
            array (
                'id' => 540,
                'family' => 'Nunito',
                'category' => 'sans-serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            40 => 
            array (
                'id' => 541,
                'family' => 'Nunito Sans',
                'category' => 'sans-serif',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            41 => 
            array (
                'id' => 542,
                'family' => 'Odor Mean Chey',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            42 => 
            array (
                'id' => 543,
                'family' => 'Offside',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            43 => 
            array (
                'id' => 544,
                'family' => 'Old Standard TT',
                'category' => 'serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            44 => 
            array (
                'id' => 545,
                'family' => 'Oldenburg',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            45 => 
            array (
                'id' => 546,
                'family' => 'Oleo Script',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            46 => 
            array (
                'id' => 547,
                'family' => 'Oleo Script Swash Caps',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            47 => 
            array (
                'id' => 548,
                'family' => 'Open Sans',
                'category' => 'sans-serif',
                'version' => 'v13',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            48 => 
            array (
                'id' => 549,
                'family' => 'Open Sans Condensed',
                'category' => 'sans-serif',
                'version' => 'v10',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            49 => 
            array (
                'id' => 550,
                'family' => 'Oranienbaum',
                'category' => 'serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            50 => 
            array (
                'id' => 551,
                'family' => 'Orbitron',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            51 => 
            array (
                'id' => 552,
                'family' => 'Oregano',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            52 => 
            array (
                'id' => 553,
                'family' => 'Orienta',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            53 => 
            array (
                'id' => 554,
                'family' => 'Original Surfer',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            54 => 
            array (
                'id' => 555,
                'family' => 'Oswald',
                'category' => 'sans-serif',
                'version' => 'v13',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            55 => 
            array (
                'id' => 556,
                'family' => 'Over the Rainbow',
                'category' => 'handwriting',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            56 => 
            array (
                'id' => 557,
                'family' => 'Overlock',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            57 => 
            array (
                'id' => 558,
                'family' => 'Overlock SC',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            58 => 
            array (
                'id' => 559,
                'family' => 'Overpass',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            59 => 
            array (
                'id' => 560,
                'family' => 'Overpass Mono',
                'category' => 'monospace',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            60 => 
            array (
                'id' => 561,
                'family' => 'Ovo',
                'category' => 'serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            61 => 
            array (
                'id' => 562,
                'family' => 'Oxygen',
                'category' => 'sans-serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            62 => 
            array (
                'id' => 563,
                'family' => 'Oxygen Mono',
                'category' => 'monospace',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            63 => 
            array (
                'id' => 564,
                'family' => 'PT Mono',
                'category' => 'monospace',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            64 => 
            array (
                'id' => 565,
                'family' => 'PT Sans',
                'category' => 'sans-serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            65 => 
            array (
                'id' => 566,
                'family' => 'PT Sans Caption',
                'category' => 'sans-serif',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            66 => 
            array (
                'id' => 567,
                'family' => 'PT Sans Narrow',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            67 => 
            array (
                'id' => 568,
                'family' => 'PT Serif',
                'category' => 'serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            68 => 
            array (
                'id' => 569,
                'family' => 'PT Serif Caption',
                'category' => 'serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            69 => 
            array (
                'id' => 570,
                'family' => 'Pacifico',
                'category' => 'handwriting',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            70 => 
            array (
                'id' => 571,
                'family' => 'Padauk',
                'category' => 'sans-serif',
                'version' => 'v3',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            71 => 
            array (
                'id' => 572,
                'family' => 'Palanquin',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            72 => 
            array (
                'id' => 573,
                'family' => 'Palanquin Dark',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            73 => 
            array (
                'id' => 574,
                'family' => 'Pangolin',
                'category' => 'handwriting',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            74 => 
            array (
                'id' => 575,
                'family' => 'Paprika',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            75 => 
            array (
                'id' => 576,
                'family' => 'Parisienne',
                'category' => 'handwriting',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            76 => 
            array (
                'id' => 577,
                'family' => 'Passero One',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            77 => 
            array (
                'id' => 578,
                'family' => 'Passion One',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            78 => 
            array (
                'id' => 579,
                'family' => 'Pathway Gothic One',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            79 => 
            array (
                'id' => 580,
                'family' => 'Patrick Hand',
                'category' => 'handwriting',
                'version' => 'v10',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            80 => 
            array (
                'id' => 581,
                'family' => 'Patrick Hand SC',
                'category' => 'handwriting',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            81 => 
            array (
                'id' => 582,
                'family' => 'Pattaya',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            82 => 
            array (
                'id' => 583,
                'family' => 'Patua One',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            83 => 
            array (
                'id' => 584,
                'family' => 'Pavanam',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            84 => 
            array (
                'id' => 585,
                'family' => 'Paytone One',
                'category' => 'sans-serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            85 => 
            array (
                'id' => 586,
                'family' => 'Peddana',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            86 => 
            array (
                'id' => 587,
                'family' => 'Peralta',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            87 => 
            array (
                'id' => 588,
                'family' => 'Permanent Marker',
                'category' => 'handwriting',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            88 => 
            array (
                'id' => 589,
                'family' => 'Petit Formal Script',
                'category' => 'handwriting',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            89 => 
            array (
                'id' => 590,
                'family' => 'Petrona',
                'category' => 'serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            90 => 
            array (
                'id' => 591,
                'family' => 'Philosopher',
                'category' => 'sans-serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            91 => 
            array (
                'id' => 592,
                'family' => 'Piedra',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            92 => 
            array (
                'id' => 593,
                'family' => 'Pinyon Script',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            93 => 
            array (
                'id' => 594,
                'family' => 'Pirata One',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            94 => 
            array (
                'id' => 595,
                'family' => 'Plaster',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            95 => 
            array (
                'id' => 596,
                'family' => 'Play',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            96 => 
            array (
                'id' => 597,
                'family' => 'Playball',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            97 => 
            array (
                'id' => 598,
                'family' => 'Playfair Display',
                'category' => 'serif',
                'version' => 'v10',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            98 => 
            array (
                'id' => 599,
                'family' => 'Playfair Display SC',
                'category' => 'serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            99 => 
            array (
                'id' => 600,
                'family' => 'Podkova',
                'category' => 'serif',
                'version' => 'v10',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            100 => 
            array (
                'id' => 601,
                'family' => 'Poiret One',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            101 => 
            array (
                'id' => 602,
                'family' => 'Poller One',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            102 => 
            array (
                'id' => 603,
                'family' => 'Poly',
                'category' => 'serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            103 => 
            array (
                'id' => 604,
                'family' => 'Pompiere',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            104 => 
            array (
                'id' => 605,
                'family' => 'Pontano Sans',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            105 => 
            array (
                'id' => 606,
                'family' => 'Poppins',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            106 => 
            array (
                'id' => 607,
                'family' => 'Port Lligat Sans',
                'category' => 'sans-serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            107 => 
            array (
                'id' => 608,
                'family' => 'Port Lligat Slab',
                'category' => 'serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            108 => 
            array (
                'id' => 609,
                'family' => 'Pragati Narrow',
                'category' => 'sans-serif',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            109 => 
            array (
                'id' => 610,
                'family' => 'Prata',
                'category' => 'serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            110 => 
            array (
                'id' => 611,
                'family' => 'Preahvihear',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            111 => 
            array (
                'id' => 612,
                'family' => 'Press Start 2P',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            112 => 
            array (
                'id' => 613,
                'family' => 'Pridi',
                'category' => 'serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            113 => 
            array (
                'id' => 614,
                'family' => 'Princess Sofia',
                'category' => 'handwriting',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            114 => 
            array (
                'id' => 615,
                'family' => 'Prociono',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            115 => 
            array (
                'id' => 616,
                'family' => 'Prompt',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            116 => 
            array (
                'id' => 617,
                'family' => 'Prosto One',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            117 => 
            array (
                'id' => 618,
                'family' => 'Proza Libre',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            118 => 
            array (
                'id' => 619,
                'family' => 'Puritan',
                'category' => 'sans-serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            119 => 
            array (
                'id' => 620,
                'family' => 'Purple Purse',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            120 => 
            array (
                'id' => 621,
                'family' => 'Quando',
                'category' => 'serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            121 => 
            array (
                'id' => 622,
                'family' => 'Quantico',
                'category' => 'sans-serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            122 => 
            array (
                'id' => 623,
                'family' => 'Quattrocento',
                'category' => 'serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            123 => 
            array (
                'id' => 624,
                'family' => 'Quattrocento Sans',
                'category' => 'sans-serif',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            124 => 
            array (
                'id' => 625,
                'family' => 'Questrial',
                'category' => 'sans-serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            125 => 
            array (
                'id' => 626,
                'family' => 'Quicksand',
                'category' => 'sans-serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            126 => 
            array (
                'id' => 627,
                'family' => 'Quintessential',
                'category' => 'handwriting',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            127 => 
            array (
                'id' => 628,
                'family' => 'Qwigley',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            128 => 
            array (
                'id' => 629,
                'family' => 'Racing Sans One',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            129 => 
            array (
                'id' => 630,
                'family' => 'Radley',
                'category' => 'serif',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            130 => 
            array (
                'id' => 631,
                'family' => 'Rajdhani',
                'category' => 'sans-serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            131 => 
            array (
                'id' => 632,
                'family' => 'Rakkas',
                'category' => 'display',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            132 => 
            array (
                'id' => 633,
                'family' => 'Raleway',
                'category' => 'sans-serif',
                'version' => 'v11',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            133 => 
            array (
                'id' => 634,
                'family' => 'Raleway Dots',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            134 => 
            array (
                'id' => 635,
                'family' => 'Ramabhadra',
                'category' => 'sans-serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            135 => 
            array (
                'id' => 636,
                'family' => 'Ramaraja',
                'category' => 'serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            136 => 
            array (
                'id' => 637,
                'family' => 'Rambla',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            137 => 
            array (
                'id' => 638,
                'family' => 'Rammetto One',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            138 => 
            array (
                'id' => 639,
                'family' => 'Ranchers',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            139 => 
            array (
                'id' => 640,
                'family' => 'Rancho',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            140 => 
            array (
                'id' => 641,
                'family' => 'Ranga',
                'category' => 'display',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            141 => 
            array (
                'id' => 642,
                'family' => 'Rasa',
                'category' => 'serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            142 => 
            array (
                'id' => 643,
                'family' => 'Rationale',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            143 => 
            array (
                'id' => 644,
                'family' => 'Ravi Prakash',
                'category' => 'display',
                'version' => 'v3',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            144 => 
            array (
                'id' => 645,
                'family' => 'Redressed',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            145 => 
            array (
                'id' => 646,
                'family' => 'Reem Kufi',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            146 => 
            array (
                'id' => 647,
                'family' => 'Reenie Beanie',
                'category' => 'handwriting',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            147 => 
            array (
                'id' => 648,
                'family' => 'Revalia',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            148 => 
            array (
                'id' => 649,
                'family' => 'Rhodium Libre',
                'category' => 'serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            149 => 
            array (
                'id' => 650,
                'family' => 'Ribeye',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            150 => 
            array (
                'id' => 651,
                'family' => 'Ribeye Marrow',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            151 => 
            array (
                'id' => 652,
                'family' => 'Righteous',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            152 => 
            array (
                'id' => 653,
                'family' => 'Risque',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            153 => 
            array (
                'id' => 654,
                'family' => 'Roboto',
                'category' => 'sans-serif',
                'version' => 'v16',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            154 => 
            array (
                'id' => 655,
                'family' => 'Roboto Condensed',
                'category' => 'sans-serif',
                'version' => 'v14',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            155 => 
            array (
                'id' => 656,
                'family' => 'Roboto Mono',
                'category' => 'monospace',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            156 => 
            array (
                'id' => 657,
                'family' => 'Roboto Slab',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            157 => 
            array (
                'id' => 658,
                'family' => 'Rochester',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            158 => 
            array (
                'id' => 659,
                'family' => 'Rock Salt',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            159 => 
            array (
                'id' => 660,
                'family' => 'Rokkitt',
                'category' => 'serif',
                'version' => 'v11',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            160 => 
            array (
                'id' => 661,
                'family' => 'Romanesco',
                'category' => 'handwriting',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            161 => 
            array (
                'id' => 662,
                'family' => 'Ropa Sans',
                'category' => 'sans-serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            162 => 
            array (
                'id' => 663,
                'family' => 'Rosario',
                'category' => 'sans-serif',
                'version' => 'v11',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            163 => 
            array (
                'id' => 664,
                'family' => 'Rosarivo',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            164 => 
            array (
                'id' => 665,
                'family' => 'Rouge Script',
                'category' => 'handwriting',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            165 => 
            array (
                'id' => 666,
                'family' => 'Rozha One',
                'category' => 'serif',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            166 => 
            array (
                'id' => 667,
                'family' => 'Rubik',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            167 => 
            array (
                'id' => 668,
                'family' => 'Rubik Mono One',
                'category' => 'sans-serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            168 => 
            array (
                'id' => 669,
                'family' => 'Ruda',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            169 => 
            array (
                'id' => 670,
                'family' => 'Rufina',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            170 => 
            array (
                'id' => 671,
                'family' => 'Ruge Boogie',
                'category' => 'handwriting',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            171 => 
            array (
                'id' => 672,
                'family' => 'Ruluko',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            172 => 
            array (
                'id' => 673,
                'family' => 'Rum Raisin',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            173 => 
            array (
                'id' => 674,
                'family' => 'Ruslan Display',
                'category' => 'display',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            174 => 
            array (
                'id' => 675,
                'family' => 'Russo One',
                'category' => 'sans-serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            175 => 
            array (
                'id' => 676,
                'family' => 'Ruthie',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            176 => 
            array (
                'id' => 677,
                'family' => 'Rye',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            177 => 
            array (
                'id' => 678,
                'family' => 'Sacramento',
                'category' => 'handwriting',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            178 => 
            array (
                'id' => 679,
                'family' => 'Sahitya',
                'category' => 'serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            179 => 
            array (
                'id' => 680,
                'family' => 'Sail',
                'category' => 'display',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            180 => 
            array (
                'id' => 681,
                'family' => 'Salsa',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            181 => 
            array (
                'id' => 682,
                'family' => 'Sanchez',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            182 => 
            array (
                'id' => 683,
                'family' => 'Sancreek',
                'category' => 'display',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            183 => 
            array (
                'id' => 684,
                'family' => 'Sansita',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            184 => 
            array (
                'id' => 685,
                'family' => 'Sarala',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            185 => 
            array (
                'id' => 686,
                'family' => 'Sarina',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            186 => 
            array (
                'id' => 687,
                'family' => 'Sarpanch',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            187 => 
            array (
                'id' => 688,
                'family' => 'Satisfy',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            188 => 
            array (
                'id' => 689,
                'family' => 'Scada',
                'category' => 'sans-serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            189 => 
            array (
                'id' => 690,
                'family' => 'Scheherazade',
                'category' => 'serif',
                'version' => 'v12',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            190 => 
            array (
                'id' => 691,
                'family' => 'Schoolbell',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            191 => 
            array (
                'id' => 692,
                'family' => 'Scope One',
                'category' => 'serif',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            192 => 
            array (
                'id' => 693,
                'family' => 'Seaweed Script',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            193 => 
            array (
                'id' => 694,
                'family' => 'Secular One',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            194 => 
            array (
                'id' => 695,
                'family' => 'Sevillana',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            195 => 
            array (
                'id' => 696,
                'family' => 'Seymour One',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            196 => 
            array (
                'id' => 697,
                'family' => 'Shadows Into Light',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            197 => 
            array (
                'id' => 698,
                'family' => 'Shadows Into Light Two',
                'category' => 'handwriting',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            198 => 
            array (
                'id' => 699,
                'family' => 'Shanti',
                'category' => 'sans-serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            199 => 
            array (
                'id' => 700,
                'family' => 'Share',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            200 => 
            array (
                'id' => 701,
                'family' => 'Share Tech',
                'category' => 'sans-serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            201 => 
            array (
                'id' => 702,
                'family' => 'Share Tech Mono',
                'category' => 'monospace',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            202 => 
            array (
                'id' => 703,
                'family' => 'Shojumaru',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            203 => 
            array (
                'id' => 704,
                'family' => 'Short Stack',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            204 => 
            array (
                'id' => 705,
                'family' => 'Shrikhand',
                'category' => 'display',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            205 => 
            array (
                'id' => 706,
                'family' => 'Siemreap',
                'category' => 'display',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            206 => 
            array (
                'id' => 707,
                'family' => 'Sigmar One',
                'category' => 'display',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            207 => 
            array (
                'id' => 708,
                'family' => 'Signika',
                'category' => 'sans-serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            208 => 
            array (
                'id' => 709,
                'family' => 'Signika Negative',
                'category' => 'sans-serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            209 => 
            array (
                'id' => 710,
                'family' => 'Simonetta',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            210 => 
            array (
                'id' => 711,
                'family' => 'Sintony',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            211 => 
            array (
                'id' => 712,
                'family' => 'Sirin Stencil',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            212 => 
            array (
                'id' => 713,
                'family' => 'Six Caps',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            213 => 
            array (
                'id' => 714,
                'family' => 'Skranji',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            214 => 
            array (
                'id' => 715,
                'family' => 'Slabo 13px',
                'category' => 'serif',
                'version' => 'v3',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            215 => 
            array (
                'id' => 716,
                'family' => 'Slabo 27px',
                'category' => 'serif',
                'version' => 'v3',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            216 => 
            array (
                'id' => 717,
                'family' => 'Slackey',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            217 => 
            array (
                'id' => 718,
                'family' => 'Smokum',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            218 => 
            array (
                'id' => 719,
                'family' => 'Smythe',
                'category' => 'display',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            219 => 
            array (
                'id' => 720,
                'family' => 'Sniglet',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            220 => 
            array (
                'id' => 721,
                'family' => 'Snippet',
                'category' => 'sans-serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            221 => 
            array (
                'id' => 722,
                'family' => 'Snowburst One',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            222 => 
            array (
                'id' => 723,
                'family' => 'Sofadi One',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            223 => 
            array (
                'id' => 724,
                'family' => 'Sofia',
                'category' => 'handwriting',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            224 => 
            array (
                'id' => 725,
                'family' => 'Sonsie One',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            225 => 
            array (
                'id' => 726,
                'family' => 'Sorts Mill Goudy',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            226 => 
            array (
                'id' => 727,
                'family' => 'Source Code Pro',
                'category' => 'monospace',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            227 => 
            array (
                'id' => 728,
                'family' => 'Source Sans Pro',
                'category' => 'sans-serif',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            228 => 
            array (
                'id' => 729,
                'family' => 'Source Serif Pro',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            229 => 
            array (
                'id' => 730,
                'family' => 'Space Mono',
                'category' => 'monospace',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            230 => 
            array (
                'id' => 731,
                'family' => 'Special Elite',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            231 => 
            array (
                'id' => 732,
                'family' => 'Spicy Rice',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            232 => 
            array (
                'id' => 733,
                'family' => 'Spinnaker',
                'category' => 'sans-serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            233 => 
            array (
                'id' => 734,
                'family' => 'Spirax',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            234 => 
            array (
                'id' => 735,
                'family' => 'Squada One',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            235 => 
            array (
                'id' => 736,
                'family' => 'Sree Krushnadevaraya',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            236 => 
            array (
                'id' => 737,
                'family' => 'Sriracha',
                'category' => 'handwriting',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            237 => 
            array (
                'id' => 738,
                'family' => 'Stalemate',
                'category' => 'handwriting',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            238 => 
            array (
                'id' => 739,
                'family' => 'Stalinist One',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            239 => 
            array (
                'id' => 740,
                'family' => 'Stardos Stencil',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            240 => 
            array (
                'id' => 741,
                'family' => 'Stint Ultra Condensed',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            241 => 
            array (
                'id' => 742,
                'family' => 'Stint Ultra Expanded',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            242 => 
            array (
                'id' => 743,
                'family' => 'Stoke',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            243 => 
            array (
                'id' => 744,
                'family' => 'Strait',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            244 => 
            array (
                'id' => 745,
                'family' => 'Sue Ellen Francisco',
                'category' => 'handwriting',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            245 => 
            array (
                'id' => 746,
                'family' => 'Suez One',
                'category' => 'serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            246 => 
            array (
                'id' => 747,
                'family' => 'Sumana',
                'category' => 'serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            247 => 
            array (
                'id' => 748,
                'family' => 'Sunshiney',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            248 => 
            array (
                'id' => 749,
                'family' => 'Supermercado One',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            249 => 
            array (
                'id' => 750,
                'family' => 'Sura',
                'category' => 'serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            250 => 
            array (
                'id' => 751,
                'family' => 'Suranna',
                'category' => 'serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            251 => 
            array (
                'id' => 752,
                'family' => 'Suravaram',
                'category' => 'serif',
                'version' => 'v3',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            252 => 
            array (
                'id' => 753,
                'family' => 'Suwannaphum',
                'category' => 'display',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            253 => 
            array (
                'id' => 754,
                'family' => 'Swanky and Moo Moo',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            254 => 
            array (
                'id' => 755,
                'family' => 'Syncopate',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            255 => 
            array (
                'id' => 756,
                'family' => 'Tangerine',
                'category' => 'handwriting',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            256 => 
            array (
                'id' => 757,
                'family' => 'Taprom',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            257 => 
            array (
                'id' => 758,
                'family' => 'Tauri',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            258 => 
            array (
                'id' => 759,
                'family' => 'Taviraj',
                'category' => 'serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            259 => 
            array (
                'id' => 760,
                'family' => 'Teko',
                'category' => 'sans-serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            260 => 
            array (
                'id' => 761,
                'family' => 'Telex',
                'category' => 'sans-serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            261 => 
            array (
                'id' => 762,
                'family' => 'Tenali Ramakrishna',
                'category' => 'sans-serif',
                'version' => 'v3',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            262 => 
            array (
                'id' => 763,
                'family' => 'Tenor Sans',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            263 => 
            array (
                'id' => 764,
                'family' => 'Text Me One',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            264 => 
            array (
                'id' => 765,
                'family' => 'The Girl Next Door',
                'category' => 'handwriting',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            265 => 
            array (
                'id' => 766,
                'family' => 'Tienne',
                'category' => 'serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            266 => 
            array (
                'id' => 767,
                'family' => 'Tillana',
                'category' => 'handwriting',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            267 => 
            array (
                'id' => 768,
                'family' => 'Timmana',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            268 => 
            array (
                'id' => 769,
                'family' => 'Tinos',
                'category' => 'serif',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            269 => 
            array (
                'id' => 770,
                'family' => 'Titan One',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            270 => 
            array (
                'id' => 771,
                'family' => 'Titillium Web',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            271 => 
            array (
                'id' => 772,
                'family' => 'Trade Winds',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            272 => 
            array (
                'id' => 773,
                'family' => 'Trirong',
                'category' => 'serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            273 => 
            array (
                'id' => 774,
                'family' => 'Trocchi',
                'category' => 'serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            274 => 
            array (
                'id' => 775,
                'family' => 'Trochut',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            275 => 
            array (
                'id' => 776,
                'family' => 'Trykker',
                'category' => 'serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            276 => 
            array (
                'id' => 777,
                'family' => 'Tulpen One',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            277 => 
            array (
                'id' => 778,
                'family' => 'Ubuntu',
                'category' => 'sans-serif',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            278 => 
            array (
                'id' => 779,
                'family' => 'Ubuntu Condensed',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            279 => 
            array (
                'id' => 780,
                'family' => 'Ubuntu Mono',
                'category' => 'monospace',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            280 => 
            array (
                'id' => 781,
                'family' => 'Ultra',
                'category' => 'serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            281 => 
            array (
                'id' => 782,
                'family' => 'Uncial Antiqua',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            282 => 
            array (
                'id' => 783,
                'family' => 'Underdog',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            283 => 
            array (
                'id' => 784,
                'family' => 'Unica One',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            284 => 
            array (
                'id' => 785,
                'family' => 'UnifrakturCook',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            285 => 
            array (
                'id' => 786,
                'family' => 'UnifrakturMaguntia',
                'category' => 'display',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            286 => 
            array (
                'id' => 787,
                'family' => 'Unkempt',
                'category' => 'display',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            287 => 
            array (
                'id' => 788,
                'family' => 'Unlock',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            288 => 
            array (
                'id' => 789,
                'family' => 'Unna',
                'category' => 'serif',
                'version' => 'v9',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            289 => 
            array (
                'id' => 790,
                'family' => 'VT323',
                'category' => 'monospace',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            290 => 
            array (
                'id' => 791,
                'family' => 'Vampiro One',
                'category' => 'display',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            291 => 
            array (
                'id' => 792,
                'family' => 'Varela',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            292 => 
            array (
                'id' => 793,
                'family' => 'Varela Round',
                'category' => 'sans-serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            293 => 
            array (
                'id' => 794,
                'family' => 'Vast Shadow',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            294 => 
            array (
                'id' => 795,
                'family' => 'Vesper Libre',
                'category' => 'serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            295 => 
            array (
                'id' => 796,
                'family' => 'Vibur',
                'category' => 'handwriting',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            296 => 
            array (
                'id' => 797,
                'family' => 'Vidaloka',
                'category' => 'serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            297 => 
            array (
                'id' => 798,
                'family' => 'Viga',
                'category' => 'sans-serif',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            298 => 
            array (
                'id' => 799,
                'family' => 'Voces',
                'category' => 'display',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            299 => 
            array (
                'id' => 800,
                'family' => 'Volkhov',
                'category' => 'serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            300 => 
            array (
                'id' => 801,
                'family' => 'Vollkorn',
                'category' => 'serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            301 => 
            array (
                'id' => 802,
                'family' => 'Voltaire',
                'category' => 'sans-serif',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            302 => 
            array (
                'id' => 803,
                'family' => 'Waiting for the Sunrise',
                'category' => 'handwriting',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            303 => 
            array (
                'id' => 804,
                'family' => 'Wallpoet',
                'category' => 'display',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            304 => 
            array (
                'id' => 805,
                'family' => 'Walter Turncoat',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            305 => 
            array (
                'id' => 806,
                'family' => 'Warnes',
                'category' => 'display',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            306 => 
            array (
                'id' => 807,
                'family' => 'Wellfleet',
                'category' => 'display',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            307 => 
            array (
                'id' => 808,
                'family' => 'Wendy One',
                'category' => 'sans-serif',
                'version' => 'v4',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            308 => 
            array (
                'id' => 809,
                'family' => 'Wire One',
                'category' => 'sans-serif',
                'version' => 'v7',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            309 => 
            array (
                'id' => 810,
                'family' => 'Work Sans',
                'category' => 'sans-serif',
                'version' => 'v2',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            310 => 
            array (
                'id' => 811,
                'family' => 'Yanone Kaffeesatz',
                'category' => 'sans-serif',
                'version' => 'v8',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            311 => 
            array (
                'id' => 812,
                'family' => 'Yantramanav',
                'category' => 'sans-serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            312 => 
            array (
                'id' => 813,
                'family' => 'Yatra One',
                'category' => 'display',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            313 => 
            array (
                'id' => 814,
                'family' => 'Yellowtail',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            314 => 
            array (
                'id' => 815,
                'family' => 'Yeseva One',
                'category' => 'display',
                'version' => 'v11',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            315 => 
            array (
                'id' => 816,
                'family' => 'Yesteryear',
                'category' => 'handwriting',
                'version' => 'v5',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            316 => 
            array (
                'id' => 817,
                'family' => 'Yrsa',
                'category' => 'serif',
                'version' => 'v1',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            317 => 
            array (
                'id' => 818,
                'family' => 'Zeyada',
                'category' => 'handwriting',
                'version' => 'v6',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
        ));
        
        
    }
}