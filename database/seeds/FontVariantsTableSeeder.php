<?php

use Illuminate\Database\Seeder;

class FontVariantsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('font_variants')->delete();
        
        \DB::table('font_variants')->insert(array (
            0 => 
            array (
                'id' => 1,
                'font_id' => 1,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/abeezee/v9/mE5BOuZKGln_Ex0uYKpIaw.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            1 => 
            array (
                'id' => 2,
                'font_id' => 1,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/abeezee/v9/kpplLynmYgP0YtlJA3atRw.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            2 => 
            array (
                'id' => 3,
                'font_id' => 2,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/abel/v6/RpUKfqNxoyNe_ka23bzQ2A.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            3 => 
            array (
                'id' => 4,
                'font_id' => 3,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/abhayalibre/v1/zTLc5Jxv6yvb1nHyqBasVy3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            4 => 
            array (
                'id' => 5,
                'font_id' => 3,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/abhayalibre/v1/wBjdF6T34NCo7wQYXgzrc5MQuUSAwdHsY8ov_6tk1oA.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            5 => 
            array (
                'id' => 6,
                'font_id' => 3,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/abhayalibre/v1/wBjdF6T34NCo7wQYXgzrc2v8CylhIUtwUiYO7Z2wXbE.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            6 => 
            array (
                'id' => 7,
                'font_id' => 3,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/abhayalibre/v1/wBjdF6T34NCo7wQYXgzrc0D2ttfZwueP-QU272T9-k4.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            7 => 
            array (
                'id' => 8,
                'font_id' => 3,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/abhayalibre/v1/wBjdF6T34NCo7wQYXgzrc_qsay_1ZmRGmC8pVRdIfAg.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            8 => 
            array (
                'id' => 9,
                'font_id' => 4,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/abrilfatface/v8/X1g_KwGeBV3ajZIXQ9VnDojjx0o0jr6fNXxPgYh_a8Q.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            9 => 
            array (
                'id' => 10,
                'font_id' => 5,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/aclonica/v7/M6pHZMPwK3DiBSlo3jwAKQ.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            10 => 
            array (
                'id' => 11,
                'font_id' => 6,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/acme/v6/-J6XNtAHPZBEbsifCdBt-g.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            11 => 
            array (
                'id' => 12,
                'font_id' => 7,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/actor/v6/ugMf40CrRK6Jf6Yz_xNSmQ.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            12 => 
            array (
                'id' => 13,
                'font_id' => 8,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/adamina/v9/RUQfOodOMiVVYqFZcSlT9w.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            13 => 
            array (
                'id' => 14,
                'font_id' => 9,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/adventpro/v5/87-JOpSUecTG50PBYK4ysi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            14 => 
            array (
                'id' => 15,
                'font_id' => 9,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/adventpro/v5/URTSSjIp0Wr-GrjxFdFWnGeudeTO44zf-ht3k-KNzwg.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            15 => 
            array (
                'id' => 16,
                'font_id' => 9,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/adventpro/v5/sJaBfJYSFgoB80OL1_66m0eOrDcLawS7-ssYqLr2Xp4.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            16 => 
            array (
                'id' => 17,
                'font_id' => 9,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/adventpro/v5/1NxMBeKVcNNH2H46AUR3wfesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            17 => 
            array (
                'id' => 18,
                'font_id' => 9,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/adventpro/v5/7kBth2-rT8tP40RmMMXMLJp-63r6doWhTEbsfBIRJ7A.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            18 => 
            array (
                'id' => 19,
                'font_id' => 9,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/adventpro/v5/3Jo-2maCzv2QLzQBzaKHV_pTEJqju4Hz1txDWij77d4.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            19 => 
            array (
                'id' => 20,
                'font_id' => 9,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/adventpro/v5/M4I6QiICt-ey_wZTpR2gKwJKKGfqHaYFsRG-T3ceEVo.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            20 => 
            array (
                'id' => 21,
                'font_id' => 10,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/aguafinascript/v5/65g7cgMtMGnNlNyq_Z6CvMxLhO8OSNnfAp53LK1_iRs.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            21 => 
            array (
                'id' => 22,
                'font_id' => 11,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/akronim/v6/qA0L2CSArk3tuOWE1AR1DA.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            22 => 
            array (
                'id' => 23,
                'font_id' => 12,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/aladin/v5/PyuJ5cVHkduO0j5fAMKvAA.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            23 => 
            array (
                'id' => 24,
                'font_id' => 13,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/aldrich/v7/kMMW1S56gFx7RP_mW1g-Eg.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            24 => 
            array (
                'id' => 25,
                'font_id' => 14,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/alef/v8/ENvZ_P0HBDQxNZYCQO0lUA.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            25 => 
            array (
                'id' => 26,
                'font_id' => 14,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/alef/v8/VDgZJhEwudtOzOFQpZ8MEA.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            26 => 
            array (
                'id' => 27,
                'font_id' => 15,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/alegreya/v7/62J3atXd6bvMU4qO_ca-eA.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            27 => 
            array (
                'id' => 28,
                'font_id' => 15,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/alegreya/v7/cbshnQGxwmlHBjUil7DaIfesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            28 => 
            array (
                'id' => 29,
                'font_id' => 15,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/alegreya/v7/5oZtdI5-wQwgAFrd9erCsaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            29 => 
            array (
                'id' => 30,
                'font_id' => 15,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/alegreya/v7/IWi8e5bpnqhMRsZKTcTUWgJKKGfqHaYFsRG-T3ceEVo.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            30 => 
            array (
                'id' => 31,
                'font_id' => 15,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/alegreya/v7/oQeMxX-vxGImzDgX6nxA7KCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            31 => 
            array (
                'id' => 32,
                'font_id' => 15,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/alegreya/v7/-L71QLH_XqgYWaI1GbOVhp0EAVxt0G0biEntp43Qt6E.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            32 => 
            array (
                'id' => 33,
                'font_id' => 16,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/alegreyasc/v6/3ozeFnTbygMK6PfHh8B-iqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            33 => 
            array (
                'id' => 34,
                'font_id' => 16,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/alegreyasc/v6/GOqmv3FLsJ2r6ZALMZVBmkeOrDcLawS7-ssYqLr2Xp4.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            34 => 
            array (
                'id' => 35,
                'font_id' => 16,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/alegreyasc/v6/M9OIREoxDkvynwTpBAYUq3e1Pd76Vl7zRpE7NLJQ7XU.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            35 => 
            array (
                'id' => 36,
                'font_id' => 16,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/alegreyasc/v6/5PCoU7IUfCicpKBJtBmP6c_zJjSACmk0BRPxQqhnNLU.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            36 => 
            array (
                'id' => 37,
                'font_id' => 16,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/alegreyasc/v6/M9OIREoxDkvynwTpBAYUqyenaqEuufTBk9XMKnKmgDA.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            37 => 
            array (
                'id' => 38,
                'font_id' => 16,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/alegreyasc/v6/5PCoU7IUfCicpKBJtBmP6U_yTOUGsoC54csJe1b-IRw.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            38 => 
            array (
                'id' => 39,
                'font_id' => 17,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/alegreyasans/v3/TKyx_-JJ6MdpQruNk-t-PJFGFO4uyVFMfB6LZsii7kI.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            39 => 
            array (
                'id' => 40,
                'font_id' => 17,
                'variant' => '100italic',
                'link' => 'http://fonts.gstatic.com/s/alegreyasans/v3/gRkSP2lBpqoMTVxg7DmVn2cDnjsrnI9_xJ-5gnBaHsE.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            40 => 
            array (
                'id' => 41,
                'font_id' => 17,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/alegreyasans/v3/11EDm-lum6tskJMBbdy9acB1LjARzAvdqa1uQC32v70.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            41 => 
            array (
                'id' => 42,
                'font_id' => 17,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/alegreyasans/v3/WfiXipsmjqRqsDBQ1bA9CnfqlVoxTUFFx1C8tBqmbcg.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            42 => 
            array (
                'id' => 43,
                'font_id' => 17,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/alegreyasans/v3/KYNzioYhDai7mTMnx_gDgn8f0n03UdmQgF_CLvNR2vg.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            43 => 
            array (
                'id' => 44,
                'font_id' => 17,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/alegreyasans/v3/TKyx_-JJ6MdpQruNk-t-PD4G9C9ttb0Oz5Cvf0qOitE.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            44 => 
            array (
                'id' => 45,
                'font_id' => 17,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/alegreyasans/v3/11EDm-lum6tskJMBbdy9aQqQmZ7VjhwksfpNVG0pqGc.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            45 => 
            array (
                'id' => 46,
                'font_id' => 17,
                'variant' => '500italic',
                'link' => 'http://fonts.gstatic.com/s/alegreyasans/v3/WfiXipsmjqRqsDBQ1bA9Cs7DCVO6wo6i5LKIyZDzK40.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            46 => 
            array (
                'id' => 47,
                'font_id' => 17,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/alegreyasans/v3/11EDm-lum6tskJMBbdy9aVCbmAUID8LN-q3pJpOk3Ys.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            47 => 
            array (
                'id' => 48,
                'font_id' => 17,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/alegreyasans/v3/WfiXipsmjqRqsDBQ1bA9CpF66r9C4AnxxlBlGd7xY4g.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            48 => 
            array (
                'id' => 49,
                'font_id' => 17,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/alegreyasans/v3/11EDm-lum6tskJMBbdy9acxnD5BewVtRRHHljCwR2bM.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            49 => 
            array (
                'id' => 50,
                'font_id' => 17,
                'variant' => '800italic',
                'link' => 'http://fonts.gstatic.com/s/alegreyasans/v3/WfiXipsmjqRqsDBQ1bA9CicOAJ_9MkLPbDmrtXDPbIU.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            50 => 
            array (
                'id' => 51,
                'font_id' => 17,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/alegreyasans/v3/11EDm-lum6tskJMBbdy9aW42xlVP-j5dagE7-AU2zwg.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            51 => 
            array (
                'id' => 52,
                'font_id' => 17,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/alegreyasans/v3/WfiXipsmjqRqsDBQ1bA9ChRaDUI9aE8-k7PrIG2iiuo.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            52 => 
            array (
                'id' => 53,
                'font_id' => 18,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/alegreyasanssc/v3/trwFkDJLOJf6hqM93944kVnzStfdnFU-MXbO84aBs_M.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            53 => 
            array (
                'id' => 54,
                'font_id' => 18,
                'variant' => '100italic',
                'link' => 'http://fonts.gstatic.com/s/alegreyasanssc/v3/qG3gA9iy5RpXMH4crZboqqakMVR0XlJhO7VdJ8yYvA4.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            54 => 
            array (
                'id' => 55,
                'font_id' => 18,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/alegreyasanssc/v3/AjAmkoP1y0Vaad0UPPR46-1IqtfxJspFjzJp0SaQRcI.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            55 => 
            array (
                'id' => 56,
                'font_id' => 18,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/alegreyasanssc/v3/0VweK-TO3aQgazdxg8fs0CnTKaH808trtzttbEg4yVA.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            56 => 
            array (
                'id' => 57,
                'font_id' => 18,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/alegreyasanssc/v3/6kgb6ZvOagoVIRZyl8XV-EklWX-XdLVn1WTiuGuvKIU.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            57 => 
            array (
                'id' => 58,
                'font_id' => 18,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/alegreyasanssc/v3/trwFkDJLOJf6hqM93944kTfqo69HNOlCNZvbwAmUtiA.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            58 => 
            array (
                'id' => 59,
                'font_id' => 18,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/alegreyasanssc/v3/AjAmkoP1y0Vaad0UPPR46_hHTluI57wqxl55RvSYo3s.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            59 => 
            array (
                'id' => 60,
                'font_id' => 18,
                'variant' => '500italic',
                'link' => 'http://fonts.gstatic.com/s/alegreyasanssc/v3/0VweK-TO3aQgazdxg8fs0NqVvxKdFVwqwzilqfVd39U.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            60 => 
            array (
                'id' => 61,
                'font_id' => 18,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/alegreyasanssc/v3/AjAmkoP1y0Vaad0UPPR4600aId5t1FC-xZ8nmpa_XLk.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            61 => 
            array (
                'id' => 62,
                'font_id' => 18,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/alegreyasanssc/v3/0VweK-TO3aQgazdxg8fs0IBYn3VD6xMEnodOh8pnFw4.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            62 => 
            array (
                'id' => 63,
                'font_id' => 18,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/alegreyasanssc/v3/AjAmkoP1y0Vaad0UPPR46wQgSHD3Lo1Mif2Wkk5swWA.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            63 => 
            array (
                'id' => 64,
                'font_id' => 18,
                'variant' => '800italic',
                'link' => 'http://fonts.gstatic.com/s/alegreyasanssc/v3/0VweK-TO3aQgazdxg8fs0HStmCm6Rs90XeztCALm0H8.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            64 => 
            array (
                'id' => 65,
                'font_id' => 18,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/alegreyasanssc/v3/AjAmkoP1y0Vaad0UPPR461Rf9EWUSEX_PR1d_gLKfpM.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            65 => 
            array (
                'id' => 66,
                'font_id' => 18,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/alegreyasanssc/v3/0VweK-TO3aQgazdxg8fs0IvtwEfTCJoOJugANj-jWDI.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            66 => 
            array (
                'id' => 67,
                'font_id' => 19,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/alexbrush/v7/ooh3KJFbKJSUoIRWfiu8o_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            67 => 
            array (
                'id' => 68,
                'font_id' => 20,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/alfaslabone/v6/Qx6FPcitRwTC_k88tLPc-Yjjx0o0jr6fNXxPgYh_a8Q.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            68 => 
            array (
                'id' => 69,
                'font_id' => 21,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/alice/v8/wZTAfivekBqIg-rk63nFvQ.ttf',
                'created_at' => '2017-05-11 09:09:13',
                'updated_at' => '2017-05-11 09:09:13',
            ),
            69 => 
            array (
                'id' => 70,
                'font_id' => 22,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/alike/v9/Ho8YpRKNk_202fwDiGNIyw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            70 => 
            array (
                'id' => 71,
                'font_id' => 23,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/alikeangular/v6/OpeCu4xxI3qO1C7CZcJtPT3XH2uEnVI__ynTBvNyki8.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            71 => 
            array (
                'id' => 72,
                'font_id' => 24,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/allan/v7/T3lemhgZmLQkQI2Qc2bQHA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            72 => 
            array (
                'id' => 73,
                'font_id' => 24,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/allan/v7/zSxQiwo7wgnr7KkMXhSiag.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            73 => 
            array (
                'id' => 74,
                'font_id' => 25,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/allerta/v7/s9FOEuiJFTNbMe06ifzV8g.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            74 => 
            array (
                'id' => 75,
                'font_id' => 26,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/allertastencil/v7/CdSZfRtHbQrBohqmzSdDYFf2eT4jUldwg_9fgfY_tHc.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            75 => 
            array (
                'id' => 76,
                'font_id' => 27,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/allura/v4/4hcqgZanyuJ2gMYWffIR6A.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            76 => 
            array (
                'id' => 77,
                'font_id' => 28,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/almendra/v8/PDpbB-ZF7deXAAEYPkQOeg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            77 => 
            array (
                'id' => 78,
                'font_id' => 28,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/almendra/v8/CNWLyiDucqVKVgr4EMidi_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            78 => 
            array (
                'id' => 79,
                'font_id' => 28,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/almendra/v8/ZpLdQMj7Q2AFio4nNO6A76CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            79 => 
            array (
                'id' => 80,
                'font_id' => 28,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/almendra/v8/-tXHKMcnn6FqrhJV3l1e3QJKKGfqHaYFsRG-T3ceEVo.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            80 => 
            array (
                'id' => 81,
                'font_id' => 29,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/almendradisplay/v6/2Zuu97WJ_ez-87yz5Ai8fF6uyC_qD11hrFQ6EGgTJWI.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            81 => 
            array (
                'id' => 82,
                'font_id' => 30,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/almendrasc/v6/IuiLd8Fm9I6raSalxMoWeaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            82 => 
            array (
                'id' => 83,
                'font_id' => 31,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/amarante/v4/2dQHjIBWSpydit5zkJZnOw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            83 => 
            array (
                'id' => 84,
                'font_id' => 32,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/amaranth/v6/7VcBog22JBHsHXHdnnycTA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            84 => 
            array (
                'id' => 85,
                'font_id' => 32,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/amaranth/v6/UrJlRY9LcVERJSvggsdBqPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            85 => 
            array (
                'id' => 86,
                'font_id' => 32,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/amaranth/v6/j5OFHqadfxyLnQRxFeox6qCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            86 => 
            array (
                'id' => 87,
                'font_id' => 32,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/amaranth/v6/BHyuYFj9nqLFNvOvGh0xTwJKKGfqHaYFsRG-T3ceEVo.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            87 => 
            array (
                'id' => 88,
                'font_id' => 33,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/amaticsc/v9/MldbRWLFytvqxU1y81xSVg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            88 => 
            array (
                'id' => 89,
                'font_id' => 33,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/amaticsc/v9/IDnkRTPGcrSVo50UyYNK7y3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            89 => 
            array (
                'id' => 90,
                'font_id' => 34,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/amaticasc/v1/f9SWSy9DLsJV2etvm5rwGPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            90 => 
            array (
                'id' => 91,
                'font_id' => 34,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/amaticasc/v1/nFmSxyAMfCP_5xGDJ4j5TgJKKGfqHaYFsRG-T3ceEVo.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            91 => 
            array (
                'id' => 92,
                'font_id' => 35,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/amethysta/v4/1jEo9tOFIJDolAUpBnWbnA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            92 => 
            array (
                'id' => 93,
                'font_id' => 36,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/amiko/v1/A7bjc3cOLJtGgpPGnxyHsw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            93 => 
            array (
                'id' => 94,
                'font_id' => 36,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/amiko/v1/BaZst4RZ4sDyD3mH-BfVaA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            94 => 
            array (
                'id' => 95,
                'font_id' => 36,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/amiko/v1/6syx43mQ07VvOmpFc0G9Lg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            95 => 
            array (
                'id' => 96,
                'font_id' => 37,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/amiri/v7/ATARrPmSew75SlpOw2YABQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            96 => 
            array (
                'id' => 97,
                'font_id' => 37,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/amiri/v7/3t1yTQlLUXBw8htrqlXBrw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            97 => 
            array (
                'id' => 98,
                'font_id' => 37,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/amiri/v7/WQsR_moz-FNqVwGYgptqiA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            98 => 
            array (
                'id' => 99,
                'font_id' => 37,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/amiri/v7/uF8aNEyD0bxMeTBg9bFDSPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            99 => 
            array (
                'id' => 100,
                'font_id' => 38,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/amita/v1/RhdhGBXSJqkHo6g7miTEcQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            100 => 
            array (
                'id' => 101,
                'font_id' => 38,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/amita/v1/cIYA2Lzp7l2pcGsqpUidBg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            101 => 
            array (
                'id' => 102,
                'font_id' => 39,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/anaheim/v4/t-z8aXHMpgI2gjN_rIflKA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            102 => 
            array (
                'id' => 103,
                'font_id' => 40,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/andada/v7/rSFaDqNNQBRw3y19MB5Y4w.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            103 => 
            array (
                'id' => 104,
                'font_id' => 41,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/andika/v7/oe-ag1G0lcqZ3IXfeEgaGg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            104 => 
            array (
                'id' => 105,
                'font_id' => 42,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/angkor/v8/DLpLgIS-8F10ecwKqCm95Q.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            105 => 
            array (
                'id' => 106,
                'font_id' => 43,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/annieuseyourtelescope/v6/2cuiO5VmaR09C8SLGEQjGqbp7mtG8sPlcZvOaO8HBak.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            106 => 
            array (
                'id' => 107,
                'font_id' => 44,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/anonymouspro/v9/Zhfjj_gat3waL4JSju74E-V_5zh5b-_HiooIRUBwn1A.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            107 => 
            array (
                'id' => 108,
                'font_id' => 44,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/anonymouspro/v9/q0u6LFHwttnT_69euiDbWKwIsuKDCXG0NQm7BvAgx-c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            108 => 
            array (
                'id' => 109,
                'font_id' => 44,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/anonymouspro/v9/WDf5lZYgdmmKhO8E1AQud--Cz_5MeePnXDAcLNWyBME.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            109 => 
            array (
                'id' => 110,
                'font_id' => 44,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/anonymouspro/v9/_fVr_XGln-cetWSUc-JpfA1LL9bfs7wyIp6F8OC9RxA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            110 => 
            array (
                'id' => 111,
                'font_id' => 45,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/antic/v7/hEa8XCNM7tXGzD0Uk0AipA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            111 => 
            array (
                'id' => 112,
                'font_id' => 46,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/anticdidone/v4/r3nJcTDuOluOL6LGDV1vRy3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            112 => 
            array (
                'id' => 113,
                'font_id' => 47,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/anticslab/v4/PSbJCTKkAS7skPdkd7AKEvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            113 => 
            array (
                'id' => 114,
                'font_id' => 48,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/anton/v8/XIbCenm-W0IRHWYIh7CGUQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            114 => 
            array (
                'id' => 115,
                'font_id' => 49,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/arapey/v5/dqu823lrSYn8T2gApTdslA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            115 => 
            array (
                'id' => 116,
                'font_id' => 49,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/arapey/v5/pY-Xi5JNBpaWxy2tZhEm5A.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            116 => 
            array (
                'id' => 117,
                'font_id' => 50,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/arbutus/v5/Go_hurxoUsn5MnqNVQgodQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            117 => 
            array (
                'id' => 118,
                'font_id' => 51,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/arbutusslab/v4/6k3Yp6iS9l4jRIpynA8qMy3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            118 => 
            array (
                'id' => 119,
                'font_id' => 52,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/architectsdaughter/v6/RXTgOOQ9AAtaVOHxx0IUBMCy0EhZjHzu-y0e6uLf4Fg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            119 => 
            array (
                'id' => 120,
                'font_id' => 53,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/archivoblack/v4/WoAoVT7K3k7hHfxKbvB6B51XQG8isOYYJhPIYAyrESQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            120 => 
            array (
                'id' => 121,
                'font_id' => 54,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/archivonarrow/v5/DsLzC9scoPnrGiwYYMQXppTvAuddT2xDMbdz0mdLyZY.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            121 => 
            array (
                'id' => 122,
                'font_id' => 54,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/archivonarrow/v5/vqsrtPCpTU3tJlKfuXP5zUpmlyBQEFfdE6dERLXdQGQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            122 => 
            array (
                'id' => 123,
                'font_id' => 54,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/archivonarrow/v5/M__Wu4PAmHf4YZvQM8tWsMLtdzs3iyjn_YuT226ZsLU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            123 => 
            array (
                'id' => 124,
                'font_id' => 54,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/archivonarrow/v5/wG6O733y5zHl4EKCOh8rSTg5KB8MNJ4uPAETq9naQO8.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            124 => 
            array (
                'id' => 125,
                'font_id' => 55,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/arefruqaa/v1/kbqI055uLQz2hkccTTrYPfesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            125 => 
            array (
                'id' => 126,
                'font_id' => 55,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/arefruqaa/v1/RT-Q5DVI9arM6ZKux-UmTAJKKGfqHaYFsRG-T3ceEVo.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            126 => 
            array (
                'id' => 127,
                'font_id' => 56,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/arimamadurai/v2/Q0tjl46beRRcUe3RlWWNrdyXLlNBCUjoM1yKFfVCFUI.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            127 => 
            array (
                'id' => 128,
                'font_id' => 56,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/arimamadurai/v2/EsCGNPwBfkMk17-w_DTJ4rArwWuxcSSKq67BdR6k5Rg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            128 => 
            array (
                'id' => 129,
                'font_id' => 56,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/arimamadurai/v2/EsCGNPwBfkMk17-w_DTJ4joJ52uD-1fmXmi8u0n_zsc.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            129 => 
            array (
                'id' => 130,
                'font_id' => 56,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/arimamadurai/v2/8fNfThKRw_pr7MwgNdcHiW_MnNA9OgK8I1F23mNWOpE.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            130 => 
            array (
                'id' => 131,
                'font_id' => 56,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/arimamadurai/v2/EsCGNPwBfkMk17-w_DTJ4v_2zpxNHQ3utWt_82o9dAo.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            131 => 
            array (
                'id' => 132,
                'font_id' => 56,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/arimamadurai/v2/EsCGNPwBfkMk17-w_DTJ4qiiXuG_rGcOxkuidirlnJE.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            132 => 
            array (
                'id' => 133,
                'font_id' => 56,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/arimamadurai/v2/EsCGNPwBfkMk17-w_DTJ4khKLu0CevfTHM1eXjGnvQo.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            133 => 
            array (
                'id' => 134,
                'font_id' => 56,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/arimamadurai/v2/EsCGNPwBfkMk17-w_DTJ4kZ0oshA7r_PlGegwiHddT8.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            134 => 
            array (
                'id' => 135,
                'font_id' => 57,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/arimo/v9/Gpeo80g-5ji2CcyXWnzh7g.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            135 => 
            array (
                'id' => 136,
                'font_id' => 57,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/arimo/v9/_OdGbnX2-qQ96C4OjhyuPw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            136 => 
            array (
                'id' => 137,
                'font_id' => 57,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/arimo/v9/ZItXugREyvV9LnbY_gxAmw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            137 => 
            array (
                'id' => 138,
                'font_id' => 57,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/arimo/v9/__nOLWqmeXdhfr0g7GaFePesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            138 => 
            array (
                'id' => 139,
                'font_id' => 58,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/arizonia/v6/yzJqkHZqryZBTM7RKYV9Wg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            139 => 
            array (
                'id' => 140,
                'font_id' => 59,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/armata/v6/1H8FwGgIRrbYtxSfXhOHlQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            140 => 
            array (
                'id' => 141,
                'font_id' => 60,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/arsenal/v1/PkcjwJ0AdgwImdsRdyzQQQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            141 => 
            array (
                'id' => 142,
                'font_id' => 60,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/arsenal/v1/FvYQ_YMyIFZw-8dXMYPhHg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            142 => 
            array (
                'id' => 143,
                'font_id' => 60,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/arsenal/v1/6R-JWA0Y5N2Lvul2TLOH3_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            143 => 
            array (
                'id' => 144,
                'font_id' => 60,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/arsenal/v1/AnUIg26c0nuMZMpNWtsDFy3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            144 => 
            array (
                'id' => 145,
                'font_id' => 61,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/artifika/v6/Ekfp4H4QG7D-WsABDOyj8g.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            145 => 
            array (
                'id' => 146,
                'font_id' => 62,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/arvo/v9/vvWPwz-PlZEwjOOIKqoZzA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            146 => 
            array (
                'id' => 147,
                'font_id' => 62,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/arvo/v9/id5a4BCjbenl5Gkqonw_Rw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            147 => 
            array (
                'id' => 148,
                'font_id' => 62,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/arvo/v9/OB3FDST7U38u3OjPK_vvRQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            148 => 
            array (
                'id' => 149,
                'font_id' => 62,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/arvo/v9/Hvl2MuWoXLaCy2v6MD4Yvw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            149 => 
            array (
                'id' => 150,
                'font_id' => 63,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/arya/v1/xEVqtU3v8QLospHKpDaYEw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            150 => 
            array (
                'id' => 151,
                'font_id' => 63,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/arya/v1/N13tgOvG7VTXawiI-fJiQA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            151 => 
            array (
                'id' => 152,
                'font_id' => 64,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/asap/v5/2lf-1MDR8tsTpEtvJmr2hA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            152 => 
            array (
                'id' => 153,
                'font_id' => 64,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/asap/v5/mwxNHf8QS8gNWCAMwkJNIg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            153 => 
            array (
                'id' => 154,
                'font_id' => 64,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/asap/v5/bSf7UzaPFkjzB9TuOPVhgw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            154 => 
            array (
                'id' => 155,
                'font_id' => 64,
                'variant' => '500italic',
                'link' => 'http://fonts.gstatic.com/s/asap/v5/RUbFVj3EkB2Yo9QDVzDKLw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            155 => 
            array (
                'id' => 156,
                'font_id' => 64,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/asap/v5/o5RUA7SsJ80M8oDFBnrDbg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            156 => 
            array (
                'id' => 157,
                'font_id' => 64,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/asap/v5/_rZz9y2oXc09jT5T6BexLQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            157 => 
            array (
                'id' => 158,
                'font_id' => 65,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/asar/v2/mSmn3H5CcMA84CZ586X7WQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            158 => 
            array (
                'id' => 159,
                'font_id' => 66,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/asset/v6/hfPmqY-JzuR1lULlQf9iTg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            159 => 
            array (
                'id' => 160,
                'font_id' => 67,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/assistant/v1/xXstfiHQzjB9j5ZxYTBoZy3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            160 => 
            array (
                'id' => 161,
                'font_id' => 67,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/assistant/v1/vPC3tCw3LOzCSeGCtVp5Wi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            161 => 
            array (
                'id' => 162,
                'font_id' => 67,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/assistant/v1/2iDwv6DBtyixlK5YHngp1w.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            162 => 
            array (
                'id' => 163,
                'font_id' => 67,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/assistant/v1/Y4UC5nQA69lWpfV0itoWLi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            163 => 
            array (
                'id' => 164,
                'font_id' => 67,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/assistant/v1/dZywGH4pMxP6OVyrppOJxy3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            164 => 
            array (
                'id' => 165,
                'font_id' => 67,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/assistant/v1/-mTR0sX8a0RsadH4AMDT8C3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            165 => 
            array (
                'id' => 166,
                'font_id' => 68,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/astloch/v6/fmbitVmHYLQP7MGPuFgpag.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            166 => 
            array (
                'id' => 167,
                'font_id' => 68,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/astloch/v6/aPkhM2tL-tz1jX6aX2rvo_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            167 => 
            array (
                'id' => 168,
                'font_id' => 69,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/asul/v5/9qpsNR_OOwyOYyo2N0IbBw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            168 => 
            array (
                'id' => 169,
                'font_id' => 69,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/asul/v5/uO8uNmxaq87-DdPmkEg5Gg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            169 => 
            array (
                'id' => 170,
                'font_id' => 70,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/athiti/v1/Ge5skdKwzxRPajVLdOJuIg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            170 => 
            array (
                'id' => 171,
                'font_id' => 70,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/athiti/v1/OoT7lj4AaSp1JpGJLKn3CA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            171 => 
            array (
                'id' => 172,
                'font_id' => 70,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/athiti/v1/e7eiIKP18Iz9Kg1xat6AYw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            172 => 
            array (
                'id' => 173,
                'font_id' => 70,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/athiti/v1/W3pP-ANXfsMOVOG-cqqMFw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            173 => 
            array (
                'id' => 174,
                'font_id' => 70,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/athiti/v1/kYx3dtUYNEuUlzWczYzsmQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            174 => 
            array (
                'id' => 175,
                'font_id' => 70,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/athiti/v1/tyXFOxQyZGXfqHhtqSikdw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            175 => 
            array (
                'id' => 176,
                'font_id' => 71,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/atma/v1/noxn2r6cT3JgmEDt6Ip5pQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            176 => 
            array (
                'id' => 177,
                'font_id' => 71,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/atma/v1/dkXPrLoE_uqcgUFj4JdfRQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            177 => 
            array (
                'id' => 178,
                'font_id' => 71,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/atma/v1/Htksg3ZXeAEbSvUdTQX-uw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            178 => 
            array (
                'id' => 179,
                'font_id' => 71,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/atma/v1/EGUwD65ZZn9IIHp5Y36b4A.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            179 => 
            array (
                'id' => 180,
                'font_id' => 71,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/atma/v1/-fkXl3wADUHjobbwO9d-Wg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            180 => 
            array (
                'id' => 181,
                'font_id' => 72,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/atomicage/v7/WvBMe4FxANIKpo6Oi0mVJ_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            181 => 
            array (
                'id' => 182,
                'font_id' => 73,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/aubrey/v8/zo9w8klO8bmOQIMajQ2aTA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            182 => 
            array (
                'id' => 183,
                'font_id' => 74,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/audiowide/v4/yGcwRZB6VmoYhPUYT-mEow.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            183 => 
            array (
                'id' => 184,
                'font_id' => 75,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/autourone/v5/2xmQBcg7FN72jaQRFZPIDvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            184 => 
            array (
                'id' => 185,
                'font_id' => 76,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/average/v4/aHUibBqdDbVYl5FM48pxyQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            185 => 
            array (
                'id' => 186,
                'font_id' => 77,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/averagesans/v4/dnU3R-5A_43y5bIyLztPsS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            186 => 
            array (
                'id' => 187,
                'font_id' => 78,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/averiagruesalibre/v4/10vbZTOoN6T8D-nvDzwRFyXcKHuZXlCN8VkWHpkUzKM.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            187 => 
            array (
                'id' => 188,
                'font_id' => 79,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/averialibre/v4/r6hGL8sSLm4dTzOPXgx5XacQoVhARpoaILP7amxE_8g.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            188 => 
            array (
                'id' => 189,
                'font_id' => 79,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/averialibre/v4/I6wAYuAvOgT7el2ePj2nkina0FLWfcB-J_SAYmcAXaI.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            189 => 
            array (
                'id' => 190,
                'font_id' => 79,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/averialibre/v4/rYVgHZZQICWnhjguGsBspC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            190 => 
            array (
                'id' => 191,
                'font_id' => 79,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/averialibre/v4/1etzuoNxVHR8F533EkD1WfMZXuCXbOrAvx5R0IT5Oyo.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            191 => 
            array (
                'id' => 192,
                'font_id' => 79,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/averialibre/v4/r6hGL8sSLm4dTzOPXgx5XUD2ttfZwueP-QU272T9-k4.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            192 => 
            array (
                'id' => 193,
                'font_id' => 79,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/averialibre/v4/I6wAYuAvOgT7el2ePj2nkvAs9-1nE9qOqhChW0m4nDE.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            193 => 
            array (
                'id' => 194,
                'font_id' => 80,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/averiasanslibre/v4/_9-jTfQjaBsWAF_yp5z-V4CP_KG_g80s1KXiBtJHoNc.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            194 => 
            array (
                'id' => 195,
                'font_id' => 80,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/averiasanslibre/v4/o7BEIK-fG3Ykc5Rzteh88YuyGu4JqttndUh4gRKxic0.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            195 => 
            array (
                'id' => 196,
                'font_id' => 80,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/averiasanslibre/v4/yRJpjT39KxACO9F31mj_LqV8_KRn4epKAjTFK1s1fsg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            196 => 
            array (
                'id' => 197,
                'font_id' => 80,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/averiasanslibre/v4/COEzR_NPBSUOl3pFwPbPoCZU2HnUZT1xVKaIrHDioao.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            197 => 
            array (
                'id' => 198,
                'font_id' => 80,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/averiasanslibre/v4/_9-jTfQjaBsWAF_yp5z-V8QwVOrz1y5GihpZmtKLhlI.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            198 => 
            array (
                'id' => 199,
                'font_id' => 80,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/averiasanslibre/v4/o7BEIK-fG3Ykc5Rzteh88bXy1DXgmJcVtKjM5UWamMs.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            199 => 
            array (
                'id' => 200,
                'font_id' => 81,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/averiaseriflibre/v5/yvITAdr5D1nlsdFswJAb8SmC4gFJ2PHmfdVKEd_5S9M.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            200 => 
            array (
                'id' => 201,
                'font_id' => 81,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/averiaseriflibre/v5/YOLFXyye4sZt6AZk1QybCG2okl0bU63CauowU4iApig.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            201 => 
            array (
                'id' => 202,
                'font_id' => 81,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/averiaseriflibre/v5/fdtF30xa_Erw0zAzOoG4BZqY66i8AUyI16fGqw0iAew.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            202 => 
            array (
                'id' => 203,
                'font_id' => 81,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/averiaseriflibre/v5/o9qhvK9iT5iDWfyhQUe-6Ru_b0bTq5iipbJ9hhgHJ6U.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            203 => 
            array (
                'id' => 204,
                'font_id' => 81,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/averiaseriflibre/v5/yvITAdr5D1nlsdFswJAb8Q50KV5TaOVolur4zV2iZsg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            204 => 
            array (
                'id' => 205,
                'font_id' => 81,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/averiaseriflibre/v5/YOLFXyye4sZt6AZk1QybCNxohRXP4tNDqG3X4Hqn21k.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            205 => 
            array (
                'id' => 206,
                'font_id' => 82,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/badscript/v5/cRyUs0nJ2eMQFHwBsZNRXfesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            206 => 
            array (
                'id' => 207,
                'font_id' => 83,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/bahiana/v1/uUnBWf2QkuMyfXPof7lcwQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            207 => 
            array (
                'id' => 208,
                'font_id' => 84,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/baloo/v1/uFkbq9GEAWUcT0XNeptJ1Q.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            208 => 
            array (
                'id' => 209,
                'font_id' => 85,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/baloobhai/v1/FQvpC-04bh2QINuWAdnNW_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            209 => 
            array (
                'id' => 210,
                'font_id' => 86,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/baloobhaina/v1/HxxbxOVf9WQem_hKo1MXSi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            210 => 
            array (
                'id' => 211,
                'font_id' => 87,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/baloochettan/v1/ODsFofLybGVOJ90e_EwdFbyYXtM25qb63HASTPtoTFA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            211 => 
            array (
                'id' => 212,
                'font_id' => 88,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/balooda/v1/RAJ0l2eJl_HDURCVxRE1iQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            212 => 
            array (
                'id' => 213,
                'font_id' => 89,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/baloopaaji/v1/KeqAjVRzso6QUEfpMLQ-7KCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            213 => 
            array (
                'id' => 214,
                'font_id' => 90,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/balootamma/v1/-FKAYy14SAfG8Gc6YAAaMaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            214 => 
            array (
                'id' => 215,
                'font_id' => 91,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/baloothambi/v1/qXK3dZIeU-O-HruaN5cK0y3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            215 => 
            array (
                'id' => 216,
                'font_id' => 92,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/balthazar/v5/WgbaSIs6dJAGXJ0qbz2xlw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            216 => 
            array (
                'id' => 217,
                'font_id' => 93,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/bangers/v9/WAffdge5w99Xif-DLeqmcA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            217 => 
            array (
                'id' => 218,
                'font_id' => 94,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/barrio/v1/kzvMfZB0agZKzXC5yyRwWA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            218 => 
            array (
                'id' => 219,
                'font_id' => 95,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/basic/v6/hNII2mS5Dxw5C0u_m3mXgA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            219 => 
            array (
                'id' => 220,
                'font_id' => 96,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/battambang/v9/MzrUfQLefYum5vVGM3EZVPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            220 => 
            array (
                'id' => 221,
                'font_id' => 96,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/battambang/v9/dezbRtMzfzAA99DmrCYRMgJKKGfqHaYFsRG-T3ceEVo.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            221 => 
            array (
                'id' => 222,
                'font_id' => 97,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/baumans/v5/o0bFdPW1H5kd5saqqOcoVg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            222 => 
            array (
                'id' => 223,
                'font_id' => 98,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/bayon/v8/yTubusjTnpNRZwA4_50iVw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            223 => 
            array (
                'id' => 224,
                'font_id' => 99,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/belgrano/v6/iq8DUa2s7g6WRCeMiFrmtQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            224 => 
            array (
                'id' => 225,
                'font_id' => 100,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/belleza/v4/wchA3BWJlVqvIcSeNZyXew.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            225 => 
            array (
                'id' => 226,
                'font_id' => 101,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/benchnine/v4/ah9xtUy9wLQ3qnWa2p-piS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            226 => 
            array (
                'id' => 227,
                'font_id' => 101,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/benchnine/v4/h3OAlYqU3aOeNkuXgH2Q2w.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            227 => 
            array (
                'id' => 228,
                'font_id' => 101,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/benchnine/v4/qZpi6ZVZg3L2RL_xoBLxWS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            228 => 
            array (
                'id' => 229,
                'font_id' => 102,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/bentham/v6/5-Mo8Fe7yg5tzV0GlQIuzQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            229 => 
            array (
                'id' => 230,
                'font_id' => 103,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/berkshireswash/v4/4RZJjVRPjYnC2939hKCAimKfbtsIjCZP_edQljX9gR0.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            230 => 
            array (
                'id' => 231,
                'font_id' => 104,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/bevan/v8/Rtg3zDsCeQiaJ_Qno22OJA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            231 => 
            array (
                'id' => 232,
                'font_id' => 105,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/bigelowrules/v4/FEJCPLwo07FS-6SK6Al50X8f0n03UdmQgF_CLvNR2vg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            232 => 
            array (
                'id' => 233,
                'font_id' => 106,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/bigshotone/v6/wSyZjBNTWDQHnvWE2jt6j6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            233 => 
            array (
                'id' => 234,
                'font_id' => 107,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/bilbo/v6/-ty-lPs5H7OIucWbnpFrkA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            234 => 
            array (
                'id' => 235,
                'font_id' => 108,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/bilboswashcaps/v7/UB_-crLvhx-PwGKW1oosDmYeFSdnSpRYv5h9gpdlD1g.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            235 => 
            array (
                'id' => 236,
                'font_id' => 109,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/biorhyme/v1/bj-6g_1gJHCc9xQZtLWL36CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            236 => 
            array (
                'id' => 237,
                'font_id' => 109,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/biorhyme/v1/jWqHmLFlu30n7xp12uZd8qCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            237 => 
            array (
                'id' => 238,
                'font_id' => 109,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/biorhyme/v1/n6v5UkVPy_CjbP3fvsu1CA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            238 => 
            array (
                'id' => 239,
                'font_id' => 109,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/biorhyme/v1/36KN76U1iKt5TFDm2lBz0KCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            239 => 
            array (
                'id' => 240,
                'font_id' => 109,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/biorhyme/v1/k6bYbUnESjLYnworWvSTL6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            240 => 
            array (
                'id' => 241,
                'font_id' => 110,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/biorhymeexpanded/v2/FKL4Vyxmq2vsiDrSOzz2sC7oxZzNh3ej55UHm-HviBI.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            241 => 
            array (
                'id' => 242,
                'font_id' => 110,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/biorhymeexpanded/v2/FKL4Vyxmq2vsiDrSOzz2sFu4cYPPksG4MRjB5UiYPPw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            242 => 
            array (
                'id' => 243,
                'font_id' => 110,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/biorhymeexpanded/v2/hgBNpgjTRZzGmZxqN5OuVjndr_hij4ilAk2n1d1AhsE.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            243 => 
            array (
                'id' => 244,
                'font_id' => 110,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/biorhymeexpanded/v2/FKL4Vyxmq2vsiDrSOzz2sMVisRVfPEfQ0jijOMQbr0Q.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            244 => 
            array (
                'id' => 245,
                'font_id' => 110,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/biorhymeexpanded/v2/FKL4Vyxmq2vsiDrSOzz2sIv1v1eCT6RPbcYZYQ1T1CE.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            245 => 
            array (
                'id' => 246,
                'font_id' => 111,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/biryani/v1/Xx38YzyTFF8n6mRS1Yd88vesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            246 => 
            array (
                'id' => 247,
                'font_id' => 111,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/biryani/v1/u-bneRbizmFMd0VQp5Ze6vesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            247 => 
            array (
                'id' => 248,
                'font_id' => 111,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/biryani/v1/W7bfR8-IY76Xz0QoB8L2xw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            248 => 
            array (
                'id' => 249,
                'font_id' => 111,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/biryani/v1/1EdcPCVxBR2txgjrza6_YPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            249 => 
            array (
                'id' => 250,
                'font_id' => 111,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/biryani/v1/qN2MTZ0j1sKSCtfXLB2dR_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            250 => 
            array (
                'id' => 251,
                'font_id' => 111,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/biryani/v1/DJyziS7FEy441v22InYdevesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            251 => 
            array (
                'id' => 252,
                'font_id' => 111,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/biryani/v1/trcLkrIut0lM_PPSyQfAMPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            252 => 
            array (
                'id' => 253,
                'font_id' => 112,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/bitter/v10/w_BNdJvVZDRmqy5aSfB2kQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            253 => 
            array (
                'id' => 254,
                'font_id' => 112,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/bitter/v10/TC0FZEVzXQIGgzmRfKPZbA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            254 => 
            array (
                'id' => 255,
                'font_id' => 112,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/bitter/v10/4dUtr_4BvHuoRU35suyOAg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            255 => 
            array (
                'id' => 256,
                'font_id' => 113,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/blackopsone/v7/2XW-DmDsGbDLE372KrMW1Yjjx0o0jr6fNXxPgYh_a8Q.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            256 => 
            array (
                'id' => 257,
                'font_id' => 114,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/bokor/v8/uAKdo0A85WW23Gs6mcbw7A.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            257 => 
            array (
                'id' => 258,
                'font_id' => 115,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/bonbon/v7/IW3u1yzG1knyW5oz0s9_6Q.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            258 => 
            array (
                'id' => 259,
                'font_id' => 116,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/boogaloo/v6/4Wu1tvFMoB80fSu8qLgQfQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            259 => 
            array (
                'id' => 260,
                'font_id' => 117,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/bowlbyone/v7/eKpHjHfjoxM2bX36YNucefesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            260 => 
            array (
                'id' => 261,
                'font_id' => 118,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/bowlbyonesc/v8/8ZkeXftTuzKBtmxOYXoRedDkZCMxWJecxjvKm2f8MJw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            261 => 
            array (
                'id' => 262,
                'font_id' => 119,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/brawler/v6/3gfSw6imxQnQxweVITqUrg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            262 => 
            array (
                'id' => 263,
                'font_id' => 120,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/breeserif/v5/5h9crBVIrvZqgf34FHcnEfesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            263 => 
            array (
                'id' => 264,
                'font_id' => 121,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/bubblegumsans/v5/Y9iTUUNz6lbl6TrvV4iwsytnKWgpfO2iSkLzTz-AABg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            264 => 
            array (
                'id' => 265,
                'font_id' => 122,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/bubblerone/v4/e8S0qevkZAFaBybtt_SU4qCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            265 => 
            array (
                'id' => 266,
                'font_id' => 123,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/buda/v6/hLtAmNUmEMJH2yx7NGUjnA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            266 => 
            array (
                'id' => 267,
                'font_id' => 124,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/buenard/v7/NSpMPGKAUgrLrlstYVvIXQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            267 => 
            array (
                'id' => 268,
                'font_id' => 124,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/buenard/v7/yUlGE115dGr7O9w9FlP3UvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            268 => 
            array (
                'id' => 269,
                'font_id' => 125,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/bungee/v2/0jM4G9s968t1_tpwzM9UDg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            269 => 
            array (
                'id' => 270,
                'font_id' => 126,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/bungeehairline/v2/8Li3dr3whdkxuk7pmLaZaSom6rTIagUDR1YFcrrRZjQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            270 => 
            array (
                'id' => 271,
                'font_id' => 127,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/bungeeinline/v2/Tb-1914q4rFpjT-F66PLCYjjx0o0jr6fNXxPgYh_a8Q.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            271 => 
            array (
                'id' => 272,
                'font_id' => 128,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/bungeeoutline/v2/PcidvzXIcqS2Qwxm_iG6bLAREgn5xbW23GEXXnhMQ5Y.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            272 => 
            array (
                'id' => 273,
                'font_id' => 129,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/bungeeshade/v2/HSW7pxPYXBWkq7OSnuXoeC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            273 => 
            array (
                'id' => 274,
                'font_id' => 130,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/butcherman/v7/bxiJmD567sPBVpJsT0XR0vesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            274 => 
            array (
                'id' => 275,
                'font_id' => 131,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/butterflykids/v4/J4NTF5M25htqeTffYImtlUZaDk62iwTBnbnvwSjZciA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            275 => 
            array (
                'id' => 276,
                'font_id' => 132,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/cabin/v10/XeuAFYo2xAPHxZGBbQtHhA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            276 => 
            array (
                'id' => 277,
                'font_id' => 132,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/cabin/v10/0tJ9k3DI5xC4GBgs1E_Jxw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            277 => 
            array (
                'id' => 278,
                'font_id' => 132,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/cabin/v10/HgsCQ-k3_Z_uQ86aFolNBg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            278 => 
            array (
                'id' => 279,
                'font_id' => 132,
                'variant' => '500italic',
                'link' => 'http://fonts.gstatic.com/s/cabin/v10/50sjhrGE0njyO-7mGDhGP_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            279 => 
            array (
                'id' => 280,
                'font_id' => 132,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/cabin/v10/eUDAvKhBtmTCkeVBsFk34A.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            280 => 
            array (
                'id' => 281,
                'font_id' => 132,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/cabin/v10/sFQpQDBd3G2om0Nl5dD2CvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            281 => 
            array (
                'id' => 282,
                'font_id' => 132,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/cabin/v10/4EKhProuY1hq_WCAomq9Dg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            282 => 
            array (
                'id' => 283,
                'font_id' => 132,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/cabin/v10/K83QKi8MOKLEqj6bgZ7LrfesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            283 => 
            array (
                'id' => 284,
                'font_id' => 133,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/cabincondensed/v9/B0txb0blf2N29WdYPJjMSiQPsWWoiv__AzYJ9Zzn9II.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            284 => 
            array (
                'id' => 285,
                'font_id' => 133,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/cabincondensed/v9/Ez4zJbsGr2BgXcNUWBVgEARL_-ABKXdjsJSPT0lc2Bk.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            285 => 
            array (
                'id' => 286,
                'font_id' => 133,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/cabincondensed/v9/Ez4zJbsGr2BgXcNUWBVgELS5sSASxc8z4EQTQj7DCAI.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            286 => 
            array (
                'id' => 287,
                'font_id' => 133,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/cabincondensed/v9/Ez4zJbsGr2BgXcNUWBVgEMAWgzcA047xWLixhLCofl8.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            287 => 
            array (
                'id' => 288,
                'font_id' => 134,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/cabinsketch/v10/d9fijO34zQajqQvl3YHRCS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            288 => 
            array (
                'id' => 289,
                'font_id' => 134,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/cabinsketch/v10/ki3SSN5HMOO0-IOLOj069ED2ttfZwueP-QU272T9-k4.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            289 => 
            array (
                'id' => 290,
                'font_id' => 135,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/caesardressing/v5/2T_WzBgE2Xz3FsyJMq34T9gR43u4FvCuJwIfF5Zxl6Y.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            290 => 
            array (
                'id' => 291,
                'font_id' => 136,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/cagliostro/v5/i85oXbtdSatNEzss99bpj_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            291 => 
            array (
                'id' => 292,
                'font_id' => 137,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/cairo/v1/9BU6Hrio9syG9zwo_CNPXg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            292 => 
            array (
                'id' => 293,
                'font_id' => 137,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/cairo/v1/mpy3SIEJVOIfFnVLujcRDg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            293 => 
            array (
                'id' => 294,
                'font_id' => 137,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/cairo/v1/-tPnHq7mmAjcjJRSjsuZGA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            294 => 
            array (
                'id' => 295,
                'font_id' => 137,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/cairo/v1/Ct_3a0tcTEyNNSnuZKDd7g.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            295 => 
            array (
                'id' => 296,
                'font_id' => 137,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/cairo/v1/ONxTSBYfmg-V5CkIwS_5gQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            296 => 
            array (
                'id' => 297,
                'font_id' => 137,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/cairo/v1/Fm-hIVCp5OI5mO4Ec71jcw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            297 => 
            array (
                'id' => 298,
                'font_id' => 138,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/calligraffitti/v7/vLVN2Y-z65rVu1R7lWdvyDXz_orj3gX0_NzfmYulrko.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            298 => 
            array (
                'id' => 299,
                'font_id' => 139,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/cambay/v1/etU9Bab4VuhzS-OKsb1VXg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            299 => 
            array (
                'id' => 300,
                'font_id' => 139,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/cambay/v1/ZEz9yNqpEOgejaw1rBhugQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            300 => 
            array (
                'id' => 301,
                'font_id' => 139,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/cambay/v1/jw9niBxa04eEhnSwTWCEgw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            301 => 
            array (
                'id' => 302,
                'font_id' => 139,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/cambay/v1/j-5v_uUr0NXTumWN0siOiaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            302 => 
            array (
                'id' => 303,
                'font_id' => 140,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/cambo/v5/PnwpRuTdkYCf8qk4ajmNRA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            303 => 
            array (
                'id' => 304,
                'font_id' => 141,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/candal/v6/x44dDW28zK7GR1gGDBmj9g.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            304 => 
            array (
                'id' => 305,
                'font_id' => 142,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/cantarell/v6/p5ydP_uWQ5lsFzcP_XVMEw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            305 => 
            array (
                'id' => 306,
                'font_id' => 142,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/cantarell/v6/DTCLtOSqP-7dgM-V_xKUjqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            306 => 
            array (
                'id' => 307,
                'font_id' => 142,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/cantarell/v6/Yir4ZDsCn4g1kWopdg-ehC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            307 => 
            array (
                'id' => 308,
                'font_id' => 142,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/cantarell/v6/weehrwMeZBXb0QyrWnRwFXe1Pd76Vl7zRpE7NLJQ7XU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            308 => 
            array (
                'id' => 309,
                'font_id' => 143,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/cantataone/v6/-a5FDvnBqaBMDaGgZYnEfqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            309 => 
            array (
                'id' => 310,
                'font_id' => 144,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/cantoraone/v6/oI-DS62RbHI8ZREjp73ehqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            310 => 
            array (
                'id' => 311,
                'font_id' => 145,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/capriola/v4/JxXPlkdzWwF9Cwelbvi9jA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            311 => 
            array (
                'id' => 312,
                'font_id' => 146,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/cardo/v8/jbkF2_R0FKUEZTq5dwSknQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            312 => 
            array (
                'id' => 313,
                'font_id' => 146,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/cardo/v8/pcv4Np9tUkq0YREYUcEEJQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            313 => 
            array (
                'id' => 314,
                'font_id' => 146,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/cardo/v8/lQN30weILimrKvp8rZhF1w.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            314 => 
            array (
                'id' => 315,
                'font_id' => 147,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/carme/v7/08E0NP1eRBEyFRUadmMfgA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            315 => 
            array (
                'id' => 316,
                'font_id' => 148,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/carroisgothic/v5/GCgb7bssGpwp7V5ynxmWy2x3d0cwUleGuRTmCYfCUaM.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            316 => 
            array (
                'id' => 317,
                'font_id' => 149,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/carroisgothicsc/v5/bVp4nhwFIXU-r3LqUR8DSJTdPW1ioadGi2uRiKgJVCY.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            317 => 
            array (
                'id' => 318,
                'font_id' => 150,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/carterone/v8/5X_LFvdbcB7OBG7hBgZ7fPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            318 => 
            array (
                'id' => 319,
                'font_id' => 151,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/catamaran/v2/ilWHBiy0krUPdlmYxDuqC6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            319 => 
            array (
                'id' => 320,
                'font_id' => 151,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/catamaran/v2/hFc-HKSsGk6M-psujei1MC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            320 => 
            array (
                'id' => 321,
                'font_id' => 151,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/catamaran/v2/Aaag4ccR7Oh_4eai-jbrYC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            321 => 
            array (
                'id' => 322,
                'font_id' => 151,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/catamaran/v2/MdNkM-DU8f6R-25Nxpr_XA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            322 => 
            array (
                'id' => 323,
                'font_id' => 151,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/catamaran/v2/83WSX3F86qsvj1Z4EI0tQi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            323 => 
            array (
                'id' => 324,
                'font_id' => 151,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/catamaran/v2/a9PlHHnuBWiGGk0TwuFKTi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            324 => 
            array (
                'id' => 325,
                'font_id' => 151,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/catamaran/v2/PpgVtUHUdnBZYNpnzGbScy3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            325 => 
            array (
                'id' => 326,
                'font_id' => 151,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/catamaran/v2/6VjB_uSfn3DZ93IQv58CmC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            326 => 
            array (
                'id' => 327,
                'font_id' => 151,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/catamaran/v2/5ys9TqpQc9Q6gHqbSox6py3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            327 => 
            array (
                'id' => 328,
                'font_id' => 152,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/caudex/v6/PWEexiHLDmQbn2b1OPZWfg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            328 => 
            array (
                'id' => 329,
                'font_id' => 152,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/caudex/v6/XjMZF6XCisvV3qapD4oJdw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            329 => 
            array (
                'id' => 330,
                'font_id' => 152,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/caudex/v6/PetCI4GyQ5Q3LiOzUu_mMg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            330 => 
            array (
                'id' => 331,
                'font_id' => 152,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/caudex/v6/yT8YeHLjaJvQXlUEYOA8gqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            331 => 
            array (
                'id' => 332,
                'font_id' => 153,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/caveat/v2/8I23b6N-6rRVbh-C_Vx3yA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            332 => 
            array (
                'id' => 333,
                'font_id' => 153,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/caveat/v2/LkaFtQENGJry2eUMwGRTeA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            333 => 
            array (
                'id' => 334,
                'font_id' => 154,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/caveatbrush/v2/_d7bgsk3hfC4DXnUEeYKsy3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            334 => 
            array (
                'id' => 335,
                'font_id' => 155,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/cedarvillecursive/v7/cuCe6HrkcqrWTWTUE7dw-41zwq9-z_Lf44CzRAA0d0Y.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            335 => 
            array (
                'id' => 336,
                'font_id' => 156,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/cevicheone/v7/WOaXIMBD4VYMy39MsobJhKCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            336 => 
            array (
                'id' => 337,
                'font_id' => 157,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/changa/v2/QNWVD9FzsnhVmHzE7HryDQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            337 => 
            array (
                'id' => 338,
                'font_id' => 157,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/changa/v2/OKZ0H1bMg3M9EZMVzgQ9fg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            338 => 
            array (
                'id' => 339,
                'font_id' => 157,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/changa/v2/7_e8qktkj6uKM0DamZJY9Q.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            339 => 
            array (
                'id' => 340,
                'font_id' => 157,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/changa/v2/KrXcHYf9ILB8aFWCj0Vfxg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            340 => 
            array (
                'id' => 341,
                'font_id' => 157,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/changa/v2/6uCpqxwcsYkfV0M8Ls6WPA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            341 => 
            array (
                'id' => 342,
                'font_id' => 157,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/changa/v2/vAXzeaPkdpxlejFN7h0ibw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            342 => 
            array (
                'id' => 343,
                'font_id' => 157,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/changa/v2/H3IsiH2Fx0Pc4_OU4HSpng.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            343 => 
            array (
                'id' => 344,
                'font_id' => 158,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/changaone/v9/dr4qjce4W3kxFrZRkVD87fesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            344 => 
            array (
                'id' => 345,
                'font_id' => 158,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/changaone/v9/wJVQlUs1lAZel-WdTo2U9y3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            345 => 
            array (
                'id' => 346,
                'font_id' => 159,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/chango/v5/3W3AeMMtRTH08t5qLOjBmg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            346 => 
            array (
                'id' => 347,
                'font_id' => 160,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/chathura/v1/7tUse0wFXIOSPewsdeNXPvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            347 => 
            array (
                'id' => 348,
                'font_id' => 160,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/chathura/v1/Gmhr6ULHnPDt9spOZrHOfKCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            348 => 
            array (
                'id' => 349,
                'font_id' => 160,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/chathura/v1/7hRNO-_zjRopkcP2n1rr8g.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            349 => 
            array (
                'id' => 350,
                'font_id' => 160,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/chathura/v1/BO9LvNAseMQ3n1tKWH-uTKCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            350 => 
            array (
                'id' => 351,
                'font_id' => 160,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/chathura/v1/prh_X_5NSsBQefIdGi5B6KCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            351 => 
            array (
                'id' => 352,
                'font_id' => 161,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/chauphilomeneone/v5/KKc5egCL-a2fFVoOA2x6tBFi5dxgSTdxqnMJgWkBJcg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            352 => 
            array (
                'id' => 353,
                'font_id' => 161,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/chauphilomeneone/v5/eJj1PY_iN4KiIuyOvtMHJP6uyLkxyiC4WcYA74sfquE.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            353 => 
            array (
                'id' => 354,
                'font_id' => 162,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/chelaone/v5/h5O0dEnpnIq6jQnWxZybrA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            354 => 
            array (
                'id' => 355,
                'font_id' => 163,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/chelseamarket/v4/qSdzwh2A4BbNemy78sJLfAAI1i8fIftCBXsBF2v9UMI.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            355 => 
            array (
                'id' => 356,
                'font_id' => 164,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/chenla/v9/aLNpdAUDq2MZbWz2U1a16g.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            356 => 
            array (
                'id' => 357,
                'font_id' => 165,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/cherrycreamsoda/v6/OrD-AUnFcZeeKa6F_c0_WxOiHiuAPYA9ry3O1RG2XIU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            357 => 
            array (
                'id' => 358,
                'font_id' => 166,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/cherryswash/v4/HqOk7C7J1TZ5i3L-ejF0vi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            358 => 
            array (
                'id' => 359,
                'font_id' => 166,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/cherryswash/v4/-CfyMyQqfucZPQNB0nvYyED2ttfZwueP-QU272T9-k4.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            359 => 
            array (
                'id' => 360,
                'font_id' => 167,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/chewy/v7/hcDN5cvQdIu6Bx4mg_TSyw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            360 => 
            array (
                'id' => 361,
                'font_id' => 168,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/chicle/v5/xg4q57Ut9ZmyFwLp51JLgg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            361 => 
            array (
                'id' => 362,
                'font_id' => 169,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/chivo/v8/NB24D2RW9gYUd3ctGd-AhA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            362 => 
            array (
                'id' => 363,
                'font_id' => 169,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/chivo/v8/A0NbKkUXhyt-4OxUzvrNT_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            363 => 
            array (
                'id' => 364,
                'font_id' => 169,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/chivo/v8/L88PEuzS9eRfHRZhAPhZyw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            364 => 
            array (
                'id' => 365,
                'font_id' => 169,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/chivo/v8/Oe3-Q-a2kBzPnhHck_baMg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            365 => 
            array (
                'id' => 366,
                'font_id' => 169,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/chivo/v8/zC8JLnJuu9Lw0_rA3_VYhg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            366 => 
            array (
                'id' => 367,
                'font_id' => 169,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/chivo/v8/2M3ifXA84fdnDIxoCi18JvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            367 => 
            array (
                'id' => 368,
                'font_id' => 169,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/chivo/v8/JAdkiWd46QCW4vOsj3dzTA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            368 => 
            array (
                'id' => 369,
                'font_id' => 169,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/chivo/v8/LoszYnE86q2wJEOjCigBQ_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            369 => 
            array (
                'id' => 370,
                'font_id' => 170,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/chonburi/v1/jd9PfbW0x_8Myt_XeUxvSQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            370 => 
            array (
                'id' => 371,
                'font_id' => 171,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/cinzel/v4/GF7dy_Nc-a6EaHYSyGd-EA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            371 => 
            array (
                'id' => 372,
                'font_id' => 171,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/cinzel/v4/nYcFQ6_3pf_6YDrOFjBR8Q.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            372 => 
            array (
                'id' => 373,
                'font_id' => 171,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/cinzel/v4/FTBj72ozM2cEOSxiVsRb3A.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            373 => 
            array (
                'id' => 374,
                'font_id' => 172,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/cinzeldecorative/v4/fmgK7oaJJIXAkhd9798yQgT5USbJx2F82lQbogPy2bY.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            374 => 
            array (
                'id' => 375,
                'font_id' => 172,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/cinzeldecorative/v4/pXhIVnhFtL_B9Vb1wq2F95-YYVDmZkJErg0zgx9XuZI.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            375 => 
            array (
                'id' => 376,
                'font_id' => 172,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/cinzeldecorative/v4/pXhIVnhFtL_B9Vb1wq2F97Khqbv0zQZa0g-9HOXAalU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            376 => 
            array (
                'id' => 377,
                'font_id' => 173,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/clickerscript/v4/Zupmk8XwADjufGxWB9KThBnpV0hQCek3EmWnCPrvGRM.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            377 => 
            array (
                'id' => 378,
                'font_id' => 174,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/coda/v11/yHDvulhg-P-p2KRgRrnUYw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            378 => 
            array (
                'id' => 379,
                'font_id' => 174,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/coda/v11/6ZIw0sbALY0KTMWllZB3hQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            379 => 
            array (
                'id' => 380,
                'font_id' => 175,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/codacaption/v9/YDl6urZh-DUFhiMBTgAnz_qsay_1ZmRGmC8pVRdIfAg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            380 => 
            array (
                'id' => 381,
                'font_id' => 176,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/codystar/v4/EVaUzfJkcb8Zqx9kzQLXqqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            381 => 
            array (
                'id' => 382,
                'font_id' => 176,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/codystar/v4/EN-CPFKYowSI7SuR7-0cZA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            382 => 
            array (
                'id' => 383,
                'font_id' => 177,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/coiny/v1/B-pC9lRxssd2RDK37Rdekw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            383 => 
            array (
                'id' => 384,
                'font_id' => 178,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/combo/v5/Nab98KjR3JZSSPGtzLyXNw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            384 => 
            array (
                'id' => 385,
                'font_id' => 179,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/comfortaa/v9/r_tUZNl0G8xCoOmp_JkSCi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            385 => 
            array (
                'id' => 386,
                'font_id' => 179,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/comfortaa/v9/lZx6C1VViPgSOhCBUP7hXA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            386 => 
            array (
                'id' => 387,
                'font_id' => 179,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/comfortaa/v9/fND5XPYKrF2tQDwwfWZJIy3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            387 => 
            array (
                'id' => 388,
                'font_id' => 180,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/comingsoon/v6/Yz2z3IAe2HSQAOWsSG8COKCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            388 => 
            array (
                'id' => 389,
                'font_id' => 181,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/concertone/v7/N5IWCIGhUNdPZn_efTxKN6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            389 => 
            array (
                'id' => 390,
                'font_id' => 182,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/condiment/v4/CstmdiPpgFSV0FUNL5LrJA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            390 => 
            array (
                'id' => 391,
                'font_id' => 183,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/content/v8/l8qaLjygvOkDEU2G6-cjfQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            391 => 
            array (
                'id' => 392,
                'font_id' => 183,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/content/v8/7PivP8Zvs2qn6F6aNbSQe_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            392 => 
            array (
                'id' => 393,
                'font_id' => 184,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/contrailone/v6/b41KxjgiyqX-hkggANDU6C3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            393 => 
            array (
                'id' => 394,
                'font_id' => 185,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/convergence/v5/eykrGz1NN_YpQmkAZjW-qKCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            394 => 
            array (
                'id' => 395,
                'font_id' => 186,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/cookie/v7/HxeUC62y_YdDbiFlze357A.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            395 => 
            array (
                'id' => 396,
                'font_id' => 187,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/copse/v6/wikLrtPGjZDvZ5w2i5HLWg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            396 => 
            array (
                'id' => 397,
                'font_id' => 188,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/corben/v9/tTysMZkt-j8Y5yhkgsoajQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            397 => 
            array (
                'id' => 398,
                'font_id' => 188,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/corben/v9/lirJaFSQWdGQuV--fksg5g.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            398 => 
            array (
                'id' => 399,
                'font_id' => 189,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/cormorant/v3/diggKPcUerIA8GQWRVxsVS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            399 => 
            array (
                'id' => 400,
                'font_id' => 189,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/cormorant/v3/UydD9tmk-DfLnEFRr_bBZy9-WlPSxbfiI49GsXo3q0g.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            400 => 
            array (
                'id' => 401,
                'font_id' => 189,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/cormorant/v3/9vWr5LgrNEgvhv1P3z9uuQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            401 => 
            array (
                'id' => 402,
                'font_id' => 189,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/cormorant/v3/zzcH3j00ejnIc8jicdcz6KCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            402 => 
            array (
                'id' => 403,
                'font_id' => 189,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/cormorant/v3/lwoiMb1lzDf49h802vpRUy3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            403 => 
            array (
                'id' => 404,
                'font_id' => 189,
                'variant' => '500italic',
                'link' => 'http://fonts.gstatic.com/s/cormorant/v3/UydD9tmk-DfLnEFRr_bBZ8CNfqCYlB_eIx7H1TVXe60.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            404 => 
            array (
                'id' => 405,
                'font_id' => 189,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/cormorant/v3/LKEtp8XimHLN0gSYqnV9qy3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            405 => 
            array (
                'id' => 406,
                'font_id' => 189,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/cormorant/v3/UydD9tmk-DfLnEFRr_bBZ5Z7xm-Bj30Bj2KNdXDzSZg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            406 => 
            array (
                'id' => 407,
                'font_id' => 189,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/cormorant/v3/vOi7JV5F3JmPzXDgUqUwgS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            407 => 
            array (
                'id' => 408,
                'font_id' => 189,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/cormorant/v3/UydD9tmk-DfLnEFRr_bBZ3e1Pd76Vl7zRpE7NLJQ7XU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            408 => 
            array (
                'id' => 409,
                'font_id' => 190,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/cormorantgaramond/v3/iEjm9hVxcattz37Y8gZwVXDeRRUpi2fYbqcTC9PsYaU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            409 => 
            array (
                'id' => 410,
                'font_id' => 190,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/cormorantgaramond/v3/zuqx3k1yUEl3Eavo-ZPEAjZXe39LdglsIzDOvKnCCso.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            410 => 
            array (
                'id' => 411,
                'font_id' => 190,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/cormorantgaramond/v3/EI2hhCO6kSfLAy-Dpd8fd7_BES7rBA-D9Lo3vCx9yHc.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            411 => 
            array (
                'id' => 412,
                'font_id' => 190,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/cormorantgaramond/v3/eGTlzchVxDKKvK6d7drzlkVlEttMzBRhK_wsRQ4MqEE.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            412 => 
            array (
                'id' => 413,
                'font_id' => 190,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/cormorantgaramond/v3/iEjm9hVxcattz37Y8gZwVSkwnhSVYGQY4MSUB3uw374.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            413 => 
            array (
                'id' => 414,
                'font_id' => 190,
                'variant' => '500italic',
                'link' => 'http://fonts.gstatic.com/s/cormorantgaramond/v3/zuqx3k1yUEl3Eavo-ZPEAq8qrY1CcUgPLrA3ytfr3SY.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            414 => 
            array (
                'id' => 415,
                'font_id' => 190,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/cormorantgaramond/v3/iEjm9hVxcattz37Y8gZwVVc2xdGA7R8efE0K6NwSoyI.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            415 => 
            array (
                'id' => 416,
                'font_id' => 190,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/cormorantgaramond/v3/zuqx3k1yUEl3Eavo-ZPEAqms9Rm_p2hhD4xhClOGPEw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            416 => 
            array (
                'id' => 417,
                'font_id' => 190,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/cormorantgaramond/v3/iEjm9hVxcattz37Y8gZwVdNg01MkafbqNYmDx8wt95c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            417 => 
            array (
                'id' => 418,
                'font_id' => 190,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/cormorantgaramond/v3/zuqx3k1yUEl3Eavo-ZPEAvEntfLz8TC-DlAIEJQEwCA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            418 => 
            array (
                'id' => 419,
                'font_id' => 191,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/cormorantinfant/v3/MYRpw6pQIf0XStsiZXQWA_alucuYFvoGqpCMGloCN2Y.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            419 => 
            array (
                'id' => 420,
                'font_id' => 191,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/cormorantinfant/v3/PK34LKusK6SSQFR2m5-LZgNCjGMFnYSoo4kW2wZNowE.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            420 => 
            array (
                'id' => 421,
                'font_id' => 191,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/cormorantinfant/v3/q5F0I_a42y_qtMoOtqdjagGlf-pqPDOheSBqZOVpkRo.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            421 => 
            array (
                'id' => 422,
                'font_id' => 191,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/cormorantinfant/v3/U6OamtMgLoVs0zd53Z1pNpbq6_N3pcDBvA-VsecMIAA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            422 => 
            array (
                'id' => 423,
                'font_id' => 191,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/cormorantinfant/v3/MYRpw6pQIf0XStsiZXQWA4PJQ8Vh-2Qw35Pq7cVYzdo.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            423 => 
            array (
                'id' => 424,
                'font_id' => 191,
                'variant' => '500italic',
                'link' => 'http://fonts.gstatic.com/s/cormorantinfant/v3/PK34LKusK6SSQFR2m5-LZq9x-au7fLBTFpfuT52_G64.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            424 => 
            array (
                'id' => 425,
                'font_id' => 191,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/cormorantinfant/v3/MYRpw6pQIf0XStsiZXQWA9G0tNuOpbNMRdNl4S5e-n0.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            425 => 
            array (
                'id' => 426,
                'font_id' => 191,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/cormorantinfant/v3/PK34LKusK6SSQFR2m5-LZkZbdnTqrL_1WMEFjxg0OwY.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            426 => 
            array (
                'id' => 427,
                'font_id' => 191,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/cormorantinfant/v3/MYRpw6pQIf0XStsiZXQWAx-3ZynwDtU_450Ho62jf_I.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            427 => 
            array (
                'id' => 428,
                'font_id' => 191,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/cormorantinfant/v3/PK34LKusK6SSQFR2m5-LZmKEEmz9BBHY1o7RrRAiUXQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            428 => 
            array (
                'id' => 429,
                'font_id' => 192,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/cormorantsc/v3/CCo4fI9EYzhUJcvojQ9Em6cQoVhARpoaILP7amxE_8g.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            429 => 
            array (
                'id' => 430,
                'font_id' => 192,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/cormorantsc/v3/o2HxNCgvhmwJdltu-68tzC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            430 => 
            array (
                'id' => 431,
                'font_id' => 192,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/cormorantsc/v3/CCo4fI9EYzhUJcvojQ9Em5MQuUSAwdHsY8ov_6tk1oA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            431 => 
            array (
                'id' => 432,
                'font_id' => 192,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/cormorantsc/v3/CCo4fI9EYzhUJcvojQ9Em2v8CylhIUtwUiYO7Z2wXbE.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            432 => 
            array (
                'id' => 433,
                'font_id' => 192,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/cormorantsc/v3/CCo4fI9EYzhUJcvojQ9Em0D2ttfZwueP-QU272T9-k4.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            433 => 
            array (
                'id' => 434,
                'font_id' => 193,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/cormorantunicase/v3/-0mwRHhjEGfrz-UDHJ_78TyAYAK5JX1-zBpfFXu9t3Y.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            434 => 
            array (
                'id' => 435,
                'font_id' => 193,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/cormorantunicase/v3/THO7JMNV6qRoZlg7dU5RUz01TLsHlMvD1uPU3gXOh9s.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            435 => 
            array (
                'id' => 436,
                'font_id' => 193,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/cormorantunicase/v3/-0mwRHhjEGfrz-UDHJ_78WActzpz5sLElWWJpZBcHK4.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            436 => 
            array (
                'id' => 437,
                'font_id' => 193,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/cormorantunicase/v3/-0mwRHhjEGfrz-UDHJ_78U0bQT13XmwBbvkXy6Yb64Y.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            437 => 
            array (
                'id' => 438,
                'font_id' => 193,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/cormorantunicase/v3/-0mwRHhjEGfrz-UDHJ_78Z5CFeQBXku3ADXbkP2V7W8.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            438 => 
            array (
                'id' => 439,
                'font_id' => 194,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/cormorantupright/v3/PwJT_lCdbLUyVq-tARIPhjCfCvaSiUMfec2BKBTMAaw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            439 => 
            array (
                'id' => 440,
                'font_id' => 194,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/cormorantupright/v3/0n68kajKjTOJn9EPQkf1a-ojtTJJf2MtgkoRSid3NcM.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            440 => 
            array (
                'id' => 441,
                'font_id' => 194,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/cormorantupright/v3/PwJT_lCdbLUyVq-tARIPhiWhx5Kr-bzfZXhgF-AnSvk.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            441 => 
            array (
                'id' => 442,
                'font_id' => 194,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/cormorantupright/v3/PwJT_lCdbLUyVq-tARIPhuDigFx2V_wQ4SOTZdg5a2s.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            442 => 
            array (
                'id' => 443,
                'font_id' => 194,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/cormorantupright/v3/PwJT_lCdbLUyVq-tARIPhuO6SP7lRr11seyd3AkK37Q.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            443 => 
            array (
                'id' => 444,
                'font_id' => 195,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/courgette/v4/2YO0EYtyE9HUPLZprahpZA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            444 => 
            array (
                'id' => 445,
                'font_id' => 196,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/cousine/v10/GYX4bPXObJNJo63QJEUnLg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            445 => 
            array (
                'id' => 446,
                'font_id' => 196,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/cousine/v10/1WtIuajLoo8vjVwsrZ3eOg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            446 => 
            array (
                'id' => 447,
                'font_id' => 196,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/cousine/v10/FXEOnNUcCzhdtoBxiq-lovesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            447 => 
            array (
                'id' => 448,
                'font_id' => 196,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/cousine/v10/y_AZ5Sz-FwL1lux2xLSTZS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            448 => 
            array (
                'id' => 449,
                'font_id' => 197,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/coustard/v6/iO2Rs5PmqAEAXoU3SkMVBg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            449 => 
            array (
                'id' => 450,
                'font_id' => 197,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/coustard/v6/W02OCWO6OfMUHz6aVyegQ6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            450 => 
            array (
                'id' => 451,
                'font_id' => 198,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/coveredbyyourgrace/v6/6ozZp4BPlrbDRWPe3EBGA6CVUMdvnk-GcAiZQrX9Gek.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            451 => 
            array (
                'id' => 452,
                'font_id' => 199,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/craftygirls/v5/0Sv8UWFFdhQmesHL32H8oy3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            452 => 
            array (
                'id' => 453,
                'font_id' => 200,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/creepster/v5/0vdr5kWJ6aJlOg5JvxnXzQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            453 => 
            array (
                'id' => 454,
                'font_id' => 201,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/creteround/v5/B8EwN421qqOCCT8vOH4wJ6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            454 => 
            array (
                'id' => 455,
                'font_id' => 201,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/creteround/v5/5xAt7XK2vkUdjhGtt98unUeOrDcLawS7-ssYqLr2Xp4.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            455 => 
            array (
                'id' => 456,
                'font_id' => 202,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/crimsontext/v6/3IFMwfRa07i-auYR-B-zNS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            456 => 
            array (
                'id' => 457,
                'font_id' => 202,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/crimsontext/v6/a5QZnvmn5amyNI-t2BMkWPMZXuCXbOrAvx5R0IT5Oyo.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            457 => 
            array (
                'id' => 458,
                'font_id' => 202,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/crimsontext/v6/rEy5tGc5HdXy56Xvd4f3I2v8CylhIUtwUiYO7Z2wXbE.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            458 => 
            array (
                'id' => 459,
                'font_id' => 202,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/crimsontext/v6/4j4TR-EfnvCt43InYpUNDIR-5-urNOGAobhAyctHvW8.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            459 => 
            array (
                'id' => 460,
                'font_id' => 202,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/crimsontext/v6/rEy5tGc5HdXy56Xvd4f3I0D2ttfZwueP-QU272T9-k4.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            460 => 
            array (
                'id' => 461,
                'font_id' => 202,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/crimsontext/v6/4j4TR-EfnvCt43InYpUNDPAs9-1nE9qOqhChW0m4nDE.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            461 => 
            array (
                'id' => 462,
                'font_id' => 203,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/croissantone/v4/mPjsOObnC77fp1cvZlOfIYjjx0o0jr6fNXxPgYh_a8Q.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            462 => 
            array (
                'id' => 463,
                'font_id' => 204,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/crushed/v6/aHwSejs3Kt0Lg95u7j32jA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            463 => 
            array (
                'id' => 464,
                'font_id' => 205,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/cuprum/v8/JgXs0F_UiaEdAS74msmFNg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            464 => 
            array (
                'id' => 465,
                'font_id' => 205,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/cuprum/v8/cLEz0KV6OxInnktSzpk58g.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            465 => 
            array (
                'id' => 466,
                'font_id' => 205,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/cuprum/v8/6tl3_FkDeXSD72oEHuJh4w.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            466 => 
            array (
                'id' => 467,
                'font_id' => 205,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/cuprum/v8/bnkXaBfoYvaJ75axRPSwVKCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            467 => 
            array (
                'id' => 468,
                'font_id' => 206,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/cutive/v8/G2bW-ImyOCwKxBkLyz39YQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            468 => 
            array (
                'id' => 469,
                'font_id' => 207,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/cutivemono/v5/ncWQtFVKcSs8OW798v30k6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            469 => 
            array (
                'id' => 470,
                'font_id' => 208,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/damion/v6/13XtECwKxhD_VrOqXL4SiA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            470 => 
            array (
                'id' => 471,
                'font_id' => 209,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/dancingscript/v8/DK0eTGXiZjN6yA8zAEyM2RnpV0hQCek3EmWnCPrvGRM.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            471 => 
            array (
                'id' => 472,
                'font_id' => 209,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/dancingscript/v8/KGBfwabt0ZRLA5W1ywjowb_dAmXiKjTPGCuO6G2MbfA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            472 => 
            array (
                'id' => 473,
                'font_id' => 210,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/dangrek/v8/LOaFhBT-EHNxZjV8DAW_ew.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            473 => 
            array (
                'id' => 474,
                'font_id' => 211,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/davidlibre/v1/Fp_YuX4CP0pzlSUtACdOo6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            474 => 
            array (
                'id' => 475,
                'font_id' => 211,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/davidlibre/v1/ea-623K8OFNeGhfSzdpmysCNfqCYlB_eIx7H1TVXe60.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            475 => 
            array (
                'id' => 476,
                'font_id' => 211,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/davidlibre/v1/ea-623K8OFNeGhfSzdpmyne1Pd76Vl7zRpE7NLJQ7XU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            476 => 
            array (
                'id' => 477,
                'font_id' => 212,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/dawningofanewday/v7/JiDsRhiKZt8uz3NJ5xA06gXLnohmOYWQZqo_sW8GLTk.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            477 => 
            array (
                'id' => 478,
                'font_id' => 213,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/daysone/v6/kzwZjNhc1iabMsrc_hKBIA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            478 => 
            array (
                'id' => 479,
                'font_id' => 214,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/dekko/v3/AKtgABKC1rUxgIgS-bpojw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            479 => 
            array (
                'id' => 480,
                'font_id' => 215,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/delius/v6/TQA163qafki2-gV-B6F_ag.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            480 => 
            array (
                'id' => 481,
                'font_id' => 216,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/deliusswashcaps/v8/uXyrEUnoWApxIOICunRq7yIrxb5zDVgU2N3VzXm7zq4.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            481 => 
            array (
                'id' => 482,
                'font_id' => 217,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/deliusunicase/v9/b2sKujV3Q48RV2PQ0k1vqu6rPKfVZo7L2bERcf0BDns.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            482 => 
            array (
                'id' => 483,
                'font_id' => 217,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/deliusunicase/v9/7FTMTITcb4dxUp99FAdTqNy5weKXdcrx-wE0cgECMq8.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            483 => 
            array (
                'id' => 484,
                'font_id' => 218,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/dellarespira/v4/F4E6Lo_IZ6L9AJCcbqtDVeDcg5akpSnIcsPhLOFv7l8.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            484 => 
            array (
                'id' => 485,
                'font_id' => 219,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/denkone/v4/TdXOeA4eA_hEx4W8Sh9wPw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            485 => 
            array (
                'id' => 486,
                'font_id' => 220,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/devonshire/v5/I3ct_2t12SYizP8ZC-KFi_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            486 => 
            array (
                'id' => 487,
                'font_id' => 221,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/dhurjati/v4/uV6jO5e2iFMbGB0z79Cy5g.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            487 => 
            array (
                'id' => 488,
                'font_id' => 222,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/didactgothic/v10/v8_72sD3DYMKyM0dn3LtWotBLojGU5Qdl8-5NL4v70w.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            488 => 
            array (
                'id' => 489,
                'font_id' => 223,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/diplomata/v8/u-ByBiKgN6rTMA36H3kcKg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            489 => 
            array (
                'id' => 490,
                'font_id' => 224,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/diplomatasc/v5/JdVwAwfE1a_pahXjk5qpNi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            490 => 
            array (
                'id' => 491,
                'font_id' => 225,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/domine/v4/wfVIgamVFjMNQAEWurCiHA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            491 => 
            array (
                'id' => 492,
                'font_id' => 225,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/domine/v4/phBcG1ZbQFxUIt18hPVxnw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            492 => 
            array (
                'id' => 493,
                'font_id' => 226,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/donegalone/v4/6kN4-fDxz7T9s5U61HwfF6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            493 => 
            array (
                'id' => 494,
                'font_id' => 227,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/doppioone/v4/WHZ3HJQotpk_4aSMNBo_t_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            494 => 
            array (
                'id' => 495,
                'font_id' => 228,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/dorsa/v7/wCc3cUe6XrmG2LQE6GlIrw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            495 => 
            array (
                'id' => 496,
                'font_id' => 229,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/dosis/v6/ztftab0r6hcd7AeurUGrSQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            496 => 
            array (
                'id' => 497,
                'font_id' => 229,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/dosis/v6/awIB6L0h5mb0plIKorXmuA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            497 => 
            array (
                'id' => 498,
                'font_id' => 229,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/dosis/v6/rJRlixu-w0JZ1MyhJpao_Q.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            498 => 
            array (
                'id' => 499,
                'font_id' => 229,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/dosis/v6/ruEXDOFMxDPGnjCBKRqdAQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            499 => 
            array (
                'id' => 500,
                'font_id' => 229,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/dosis/v6/KNAswRNwm3tfONddYyidxg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
        ));
        \DB::table('font_variants')->insert(array (
            0 => 
            array (
                'id' => 501,
                'font_id' => 229,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/dosis/v6/AEEAj0ONidK8NQQMBBlSig.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            1 => 
            array (
                'id' => 502,
                'font_id' => 229,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/dosis/v6/nlrKd8E69vvUU39XGsvR7Q.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            2 => 
            array (
                'id' => 503,
                'font_id' => 230,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/drsugiyama/v5/S5Yx3MIckgoyHhhS4C9Tv6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            3 => 
            array (
                'id' => 504,
                'font_id' => 231,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/droidsans/v6/rS9BT6-asrfjpkcV3DXf__esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            4 => 
            array (
                'id' => 505,
                'font_id' => 231,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/droidsans/v6/EFpQQyG9GqCrobXxL-KRMQJKKGfqHaYFsRG-T3ceEVo.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            5 => 
            array (
                'id' => 506,
                'font_id' => 232,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/droidsansmono/v7/ns-m2xQYezAtqh7ai59hJcwD6PD0c3_abh9zHKQtbGU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            6 => 
            array (
                'id' => 507,
                'font_id' => 233,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/droidserif/v6/DgAtPy6rIVa2Zx3Xh9KaNaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            7 => 
            array (
                'id' => 508,
                'font_id' => 233,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/droidserif/v6/cj2hUnSRBhwmSPr9kS5890eOrDcLawS7-ssYqLr2Xp4.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            8 => 
            array (
                'id' => 509,
                'font_id' => 233,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/droidserif/v6/QQt14e8dY39u-eYBZmppwXe1Pd76Vl7zRpE7NLJQ7XU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            9 => 
            array (
                'id' => 510,
                'font_id' => 233,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/droidserif/v6/c92rD_x0V1LslSFt3-QEps_zJjSACmk0BRPxQqhnNLU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            10 => 
            array (
                'id' => 511,
                'font_id' => 234,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/durusans/v9/xn7iYH8xwmSyTvEV_HOxTw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            11 => 
            array (
                'id' => 512,
                'font_id' => 235,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/dynalight/v5/-CWsIe8OUDWTIHjSAh41kA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            12 => 
            array (
                'id' => 513,
                'font_id' => 236,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ebgaramond/v7/CDR0kuiFK7I1OZ2hSdR7G6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            13 => 
            array (
                'id' => 514,
                'font_id' => 237,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/eaglelake/v4/ZKlYin7caemhx9eSg6RvPfesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            14 => 
            array (
                'id' => 515,
                'font_id' => 238,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/eater/v5/gm6f3OmYEdbs3lPQtUfBkA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            15 => 
            array (
                'id' => 516,
                'font_id' => 239,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/economica/v4/G4rJRujzZbq9Nxngu9l3hg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            16 => 
            array (
                'id' => 517,
                'font_id' => 239,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/economica/v4/p5O9AVeUqx_n35xQRinNYaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            17 => 
            array (
                'id' => 518,
                'font_id' => 239,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/economica/v4/UK4l2VEpwjv3gdcwbwXE9C3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            18 => 
            array (
                'id' => 519,
                'font_id' => 239,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/economica/v4/ac5dlUsedQ03RqGOeay-3Xe1Pd76Vl7zRpE7NLJQ7XU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            19 => 
            array (
                'id' => 520,
                'font_id' => 240,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/eczar/v4/uKZcAQ5JBBs1UbeXFRbBRg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            20 => 
            array (
                'id' => 521,
                'font_id' => 240,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/eczar/v4/Ooe4KaPp2594tF8TbMfdlQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            21 => 
            array (
                'id' => 522,
                'font_id' => 240,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/eczar/v4/IjQsWW0bmgkZ6lnN72cnTQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            22 => 
            array (
                'id' => 523,
                'font_id' => 240,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/eczar/v4/ELC8RVXfBMb3VuuHtMwBOA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            23 => 
            array (
                'id' => 524,
                'font_id' => 240,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/eczar/v4/9Uyt6nTZLx_Qj5_WRah-iQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            24 => 
            array (
                'id' => 525,
                'font_id' => 241,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/ekmukta/v7/crtkNHh5JcM3VJKG0E-B36CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            25 => 
            array (
                'id' => 526,
                'font_id' => 241,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/ekmukta/v7/mpaAv7CIyk0VnZlqSneVxKCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            26 => 
            array (
                'id' => 527,
                'font_id' => 241,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ekmukta/v7/aFcjXdC5jyJ1p8w54wIIrg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            27 => 
            array (
                'id' => 528,
                'font_id' => 241,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/ekmukta/v7/PZ1y2MstFczWvBlFSgzMyaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            28 => 
            array (
                'id' => 529,
                'font_id' => 241,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/ekmukta/v7/Z5Mfzeu6M3emakcJO2QeTqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            29 => 
            array (
                'id' => 530,
                'font_id' => 241,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/ekmukta/v7/4ugcOGR28Jn-oBIn0-qLYaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            30 => 
            array (
                'id' => 531,
                'font_id' => 241,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/ekmukta/v7/O68TH5OjEhVmn9_gIrcfS6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            31 => 
            array (
                'id' => 532,
                'font_id' => 242,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/elmessiri/v1/dik94vfrFvHFnvdvxaX8N_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            32 => 
            array (
                'id' => 533,
                'font_id' => 242,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/elmessiri/v1/kQW9PA2krAOzditagrX75pp-63r6doWhTEbsfBIRJ7A.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            33 => 
            array (
                'id' => 534,
                'font_id' => 242,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/elmessiri/v1/HYl7TNqFfA1utGLZRWwzLPpTEJqju4Hz1txDWij77d4.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            34 => 
            array (
                'id' => 535,
                'font_id' => 242,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/elmessiri/v1/ji73glXFIetaSqMU3cz7rAJKKGfqHaYFsRG-T3ceEVo.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            35 => 
            array (
                'id' => 536,
                'font_id' => 243,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/electrolize/v5/yFVu5iokC-nt4B1Cyfxb9aCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            36 => 
            array (
                'id' => 537,
                'font_id' => 244,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/elsie/v5/gwspePauE45BJu6Ok1QrfQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            37 => 
            array (
                'id' => 538,
                'font_id' => 244,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/elsie/v5/1t-9f0N2NFYwAgN7oaISqg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            38 => 
            array (
                'id' => 539,
                'font_id' => 245,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/elsieswashcaps/v4/9L3hIJMPCf6sxCltnxd6X2YeFSdnSpRYv5h9gpdlD1g.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            39 => 
            array (
                'id' => 540,
                'font_id' => 245,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/elsieswashcaps/v4/iZnus9qif0tR5pGaDv5zdKoKBWBozTtxi30NfZDOXXU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            40 => 
            array (
                'id' => 541,
                'font_id' => 246,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/emblemaone/v5/7IlBUjBWPIiw7cr_O2IfSaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            41 => 
            array (
                'id' => 542,
                'font_id' => 247,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/emilyscandy/v4/PofLVm6v1SwZGOzC8s-I3S3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            42 => 
            array (
                'id' => 543,
                'font_id' => 248,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/engagement/v5/4Uz0Jii7oVPcaFRYmbpU6vesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            43 => 
            array (
                'id' => 544,
                'font_id' => 249,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/englebert/v4/sll38iOvOuarDTYBchlP3Q.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            44 => 
            array (
                'id' => 545,
                'font_id' => 250,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/enriqueta/v5/_p90TrIwR1SC-vDKtmrv6A.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            45 => 
            array (
                'id' => 546,
                'font_id' => 250,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/enriqueta/v5/I27Pb-wEGH2ajLYP0QrtSC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            46 => 
            array (
                'id' => 547,
                'font_id' => 251,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ericaone/v7/cIBnH2VAqQMIGYAcE4ufvQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            47 => 
            array (
                'id' => 548,
                'font_id' => 252,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/esteban/v4/ESyhLgqDDyK5JcFPp2svDw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            48 => 
            array (
                'id' => 549,
                'font_id' => 253,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/euphoriascript/v4/c4XB4Iijj_NvSsCF4I0O2MxLhO8OSNnfAp53LK1_iRs.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            49 => 
            array (
                'id' => 550,
                'font_id' => 254,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ewert/v4/Em8hrzuzSbfHcTVqMjbAQg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            50 => 
            array (
                'id' => 551,
                'font_id' => 255,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/exo/v4/RI7A9uwjRmPbVp0n8e-Jvg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            51 => 
            array (
                'id' => 552,
                'font_id' => 255,
                'variant' => '100italic',
                'link' => 'http://fonts.gstatic.com/s/exo/v4/qtGyZZlWb2EEvby3ZPosxw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            52 => 
            array (
                'id' => 553,
                'font_id' => 255,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/exo/v4/F8OfC_swrRRxpFt-tlXZQg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            53 => 
            array (
                'id' => 554,
                'font_id' => 255,
                'variant' => '200italic',
                'link' => 'http://fonts.gstatic.com/s/exo/v4/fr4HBfXHYiIngW2_bhlgRw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            54 => 
            array (
                'id' => 555,
                'font_id' => 255,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/exo/v4/SBrN7TKUqgGUvfxqHqsnNw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            55 => 
            array (
                'id' => 556,
                'font_id' => 255,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/exo/v4/3gmiLjBegIfcDLISjTGA1g.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            56 => 
            array (
                'id' => 557,
                'font_id' => 255,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/exo/v4/eUEzTFueNXRVhbt4PEB8kQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            57 => 
            array (
                'id' => 558,
                'font_id' => 255,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/exo/v4/cfgolWisMSURhpQeVHl_NA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            58 => 
            array (
                'id' => 559,
                'font_id' => 255,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/exo/v4/jCg6DmGGXt_OVyp5ofQHPw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            59 => 
            array (
                'id' => 560,
                'font_id' => 255,
                'variant' => '500italic',
                'link' => 'http://fonts.gstatic.com/s/exo/v4/lo5eTdCNJZQVN08p8RnzAQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            60 => 
            array (
                'id' => 561,
                'font_id' => 255,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/exo/v4/q_SG5kXUmOcIvFpgtdZnlw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            61 => 
            array (
                'id' => 562,
                'font_id' => 255,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/exo/v4/0cExa8K_pxS2lTuMr68XUA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            62 => 
            array (
                'id' => 563,
                'font_id' => 255,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/exo/v4/3_jwsL4v9uHjl5Q37G57mw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            63 => 
            array (
                'id' => 564,
                'font_id' => 255,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/exo/v4/0me55yJIxd5vyQ9bF7SsiA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            64 => 
            array (
                'id' => 565,
                'font_id' => 255,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/exo/v4/yLPuxBuV0lzqibRJyooOJg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            65 => 
            array (
                'id' => 566,
                'font_id' => 255,
                'variant' => '800italic',
                'link' => 'http://fonts.gstatic.com/s/exo/v4/n3LejeKVj_8gtZq5fIgNYw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            66 => 
            array (
                'id' => 567,
                'font_id' => 255,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/exo/v4/97d0nd6Yv4-SA_X92xAuZA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            67 => 
            array (
                'id' => 568,
                'font_id' => 255,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/exo/v4/JHTkQVhzyLtkY13Ye95TJQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            68 => 
            array (
                'id' => 569,
                'font_id' => 256,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/exo2/v3/oVOtQy53isv97g4UhBUDqg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            69 => 
            array (
                'id' => 570,
                'font_id' => 256,
                'variant' => '100italic',
                'link' => 'http://fonts.gstatic.com/s/exo2/v3/LNYVgsJcaCxoKFHmd4AZcg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            70 => 
            array (
                'id' => 571,
                'font_id' => 256,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/exo2/v3/qa-Ci2pBwJdCxciE1ErifQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            71 => 
            array (
                'id' => 572,
                'font_id' => 256,
                'variant' => '200italic',
                'link' => 'http://fonts.gstatic.com/s/exo2/v3/DCrVxDVvS69n50O-5erZVvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            72 => 
            array (
                'id' => 573,
                'font_id' => 256,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/exo2/v3/nLUBdz_lHHoVIPor05Byhw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            73 => 
            array (
                'id' => 574,
                'font_id' => 256,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/exo2/v3/iSy9VTeUTiqiurQg2ywtu_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            74 => 
            array (
                'id' => 575,
                'font_id' => 256,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/exo2/v3/Pf_kZuIH5c5WKVkQUaeSWQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            75 => 
            array (
                'id' => 576,
                'font_id' => 256,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/exo2/v3/xxA5ZscX9sTU6U0lZJUlYA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            76 => 
            array (
                'id' => 577,
                'font_id' => 256,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/exo2/v3/oM0rzUuPqVJpW-VEIpuW5w.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            77 => 
            array (
                'id' => 578,
                'font_id' => 256,
                'variant' => '500italic',
                'link' => 'http://fonts.gstatic.com/s/exo2/v3/amzRVCB-gipwdihZZ2LtT_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            78 => 
            array (
                'id' => 579,
                'font_id' => 256,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/exo2/v3/YnSn3HsyvyI1feGSdRMYqA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            79 => 
            array (
                'id' => 580,
                'font_id' => 256,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/exo2/v3/Vmo58BiptGwfVFb0teU5gPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            80 => 
            array (
                'id' => 581,
                'font_id' => 256,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/exo2/v3/2DiK4XkdTckfTk6we73-bQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            81 => 
            array (
                'id' => 582,
                'font_id' => 256,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/exo2/v3/Sdo-zW-4_--pDkTg6bYrY_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            82 => 
            array (
                'id' => 583,
                'font_id' => 256,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/exo2/v3/IVYl_7dJruOg8zKRpC8Hrw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            83 => 
            array (
                'id' => 584,
                'font_id' => 256,
                'variant' => '800italic',
                'link' => 'http://fonts.gstatic.com/s/exo2/v3/p0TA6KeOz1o4rySEbvUxI_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            84 => 
            array (
                'id' => 585,
                'font_id' => 256,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/exo2/v3/e8csG8Wnu87AF6uCndkFRQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            85 => 
            array (
                'id' => 586,
                'font_id' => 256,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/exo2/v3/KPhsGCoT2-7Uj6pMlRscH_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            86 => 
            array (
                'id' => 587,
                'font_id' => 257,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/expletussans/v9/gegTSDBDs5le3g6uxU1ZsX8f0n03UdmQgF_CLvNR2vg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            87 => 
            array (
                'id' => 588,
                'font_id' => 257,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/expletussans/v9/Y-erXmY0b6DU_i2Qu0hTJj4G9C9ttb0Oz5Cvf0qOitE.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            88 => 
            array (
                'id' => 589,
                'font_id' => 257,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/expletussans/v9/cl6rhMY77Ilk8lB_uYRRwAqQmZ7VjhwksfpNVG0pqGc.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            89 => 
            array (
                'id' => 590,
                'font_id' => 257,
                'variant' => '500italic',
                'link' => 'http://fonts.gstatic.com/s/expletussans/v9/sRBNtc46w65uJE451UYmW87DCVO6wo6i5LKIyZDzK40.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            90 => 
            array (
                'id' => 591,
                'font_id' => 257,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/expletussans/v9/cl6rhMY77Ilk8lB_uYRRwCvj1tU7IJMS3CS9kCx2B3U.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            91 => 
            array (
                'id' => 592,
                'font_id' => 257,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/expletussans/v9/sRBNtc46w65uJE451UYmW8yKH23ZS6zCKOFHG0e_4JE.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            92 => 
            array (
                'id' => 593,
                'font_id' => 257,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/expletussans/v9/cl6rhMY77Ilk8lB_uYRRwFCbmAUID8LN-q3pJpOk3Ys.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            93 => 
            array (
                'id' => 594,
                'font_id' => 257,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/expletussans/v9/sRBNtc46w65uJE451UYmW5F66r9C4AnxxlBlGd7xY4g.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            94 => 
            array (
                'id' => 595,
                'font_id' => 258,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/fanwoodtext/v6/hDNDHUlsSb8bgnEmDp4T_i3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            95 => 
            array (
                'id' => 596,
                'font_id' => 258,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/fanwoodtext/v6/0J3SBbkMZqBV-3iGxs5E9_MZXuCXbOrAvx5R0IT5Oyo.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            96 => 
            array (
                'id' => 597,
                'font_id' => 259,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/farsan/v1/Hdf9Y76SQ6e1X0Nqk3rHtw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            97 => 
            array (
                'id' => 598,
                'font_id' => 260,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/fascinate/v5/ZE0637WWkBPKt1AmFaqD3Q.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            98 => 
            array (
                'id' => 599,
                'font_id' => 261,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/fascinateinline/v6/lRguYfMfWArflkm5aOQ5QJmp8DTZ6iHear7UV05iykg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            99 => 
            array (
                'id' => 600,
                'font_id' => 262,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/fasterone/v6/YxTOW2sf56uxD1T7byP5K_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            100 => 
            array (
                'id' => 601,
                'font_id' => 263,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/fasthand/v7/6XAagHH_KmpZL67wTvsETQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            101 => 
            array (
                'id' => 602,
                'font_id' => 264,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/faunaone/v4/8kL-wpAPofcAMELI_5NRnQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            102 => 
            array (
                'id' => 603,
                'font_id' => 265,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/federant/v8/tddZFSiGvxICNOGra0i5aA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            103 => 
            array (
                'id' => 604,
                'font_id' => 266,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/federo/v8/JPhe1S2tujeyaR79gXBLeQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            104 => 
            array (
                'id' => 605,
                'font_id' => 267,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/felipa/v4/SeyfyFZY7abAQXGrOIYnYg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            105 => 
            array (
                'id' => 606,
                'font_id' => 268,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/fenix/v4/Ak8wR3VSlAN7VN_eMeJj7Q.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            106 => 
            array (
                'id' => 607,
                'font_id' => 269,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/fingerpaint/v5/m_ZRbiY-aPb13R3DWPBGXy3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            107 => 
            array (
                'id' => 608,
                'font_id' => 270,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/firamono/v5/WQOm1D4RO-yvA9q9trJc8g.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            108 => 
            array (
                'id' => 609,
                'font_id' => 270,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/firamono/v5/PJ4zAY1ucu5ib6LzyvHMkS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            109 => 
            array (
                'id' => 610,
                'font_id' => 270,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/firamono/v5/l24Wph3FsyKAbJ8dfExTZy3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            110 => 
            array (
                'id' => 611,
                'font_id' => 271,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/firasans/v7/8lKWk2lAb6-y9gc_GLDdPKCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            111 => 
            array (
                'id' => 612,
                'font_id' => 271,
                'variant' => '100italic',
                'link' => 'http://fonts.gstatic.com/s/firasans/v7/fmobwZujc_UI4huzQvESm4AWxXGWZ3yJw6KhWS7MxOk.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            112 => 
            array (
                'id' => 613,
                'font_id' => 271,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/firasans/v7/H2QtVYRshA1CFy63P7ykZy3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            113 => 
            array (
                'id' => 614,
                'font_id' => 271,
                'variant' => '200italic',
                'link' => 'http://fonts.gstatic.com/s/firasans/v7/6s0YCA9oCTF6hM60YM-qTUnzyIngrzGjGh22wPb6cGM.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            114 => 
            array (
                'id' => 615,
                'font_id' => 271,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/firasans/v7/VTBnrK42EiOBncVyQXZ7jy3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            115 => 
            array (
                'id' => 616,
                'font_id' => 271,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/firasans/v7/6s0YCA9oCTF6hM60YM-qTS9-WlPSxbfiI49GsXo3q0g.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            116 => 
            array (
                'id' => 617,
                'font_id' => 271,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/firasans/v7/nsT0isDy56OkSX99sFQbXw.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            117 => 
            array (
                'id' => 618,
                'font_id' => 271,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/firasans/v7/cPT_2ddmoxsUuMtQqa8zGqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            118 => 
            array (
                'id' => 619,
                'font_id' => 271,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/firasans/v7/zM2u8V3CuPVwAAXFQcDi4C3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            119 => 
            array (
                'id' => 620,
                'font_id' => 271,
                'variant' => '500italic',
                'link' => 'http://fonts.gstatic.com/s/firasans/v7/6s0YCA9oCTF6hM60YM-qTcCNfqCYlB_eIx7H1TVXe60.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            120 => 
            array (
                'id' => 621,
                'font_id' => 271,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/firasans/v7/TPhEsJuyxIEzWtby22btfi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            121 => 
            array (
                'id' => 622,
                'font_id' => 271,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/firasans/v7/6s0YCA9oCTF6hM60YM-qTZZ7xm-Bj30Bj2KNdXDzSZg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            122 => 
            array (
                'id' => 623,
                'font_id' => 271,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/firasans/v7/DugPdSljmOTocZOR2CItOi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            123 => 
            array (
                'id' => 624,
                'font_id' => 271,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/firasans/v7/6s0YCA9oCTF6hM60YM-qTXe1Pd76Vl7zRpE7NLJQ7XU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            124 => 
            array (
                'id' => 625,
                'font_id' => 271,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/firasans/v7/htOw9f-chtELyJuFCkCrFi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            125 => 
            array (
                'id' => 626,
                'font_id' => 271,
                'variant' => '800italic',
                'link' => 'http://fonts.gstatic.com/s/firasans/v7/6s0YCA9oCTF6hM60YM-qTQ89PwPrYLaRFJ-HNCU9NbA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            126 => 
            array (
                'id' => 627,
                'font_id' => 271,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/firasans/v7/rowJfijyp23uW9P2J-sluC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            127 => 
            array (
                'id' => 628,
                'font_id' => 271,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/firasans/v7/6s0YCA9oCTF6hM60YM-qTSenaqEuufTBk9XMKnKmgDA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            128 => 
            array (
                'id' => 629,
                'font_id' => 272,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/firasanscondensed/v1/-hkH0zXsjNm-yd0g99LvtmzsEJYDLiwza6ZHrdqhthQ.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            129 => 
            array (
                'id' => 630,
                'font_id' => 272,
                'variant' => '100italic',
                'link' => 'http://fonts.gstatic.com/s/firasanscondensed/v1/Nqqv1KfmeTlTML-ky7aaRPKr3wa5Ugsm4QGD8HSjBf8.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            130 => 
            array (
                'id' => 631,
                'font_id' => 272,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/firasanscondensed/v1/k1srRZ14gKpu4XGd0R993IBfX0yoOQz7y6Fa57EWAgY.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            131 => 
            array (
                'id' => 632,
                'font_id' => 272,
                'variant' => '200italic',
                'link' => 'http://fonts.gstatic.com/s/firasanscondensed/v1/Z87ZCYzj43dcQd7C-kCjDzTCSvnRzshTGhbaUNxVLsY.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            132 => 
            array (
                'id' => 633,
                'font_id' => 272,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/firasanscondensed/v1/k1srRZ14gKpu4XGd0R993EMwSSh38KQVJx4ABtsZTnA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            133 => 
            array (
                'id' => 634,
                'font_id' => 272,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/firasanscondensed/v1/Z87ZCYzj43dcQd7C-kCjD4_LkTZ_uhAwfmGJ084hlvM.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            134 => 
            array (
                'id' => 635,
                'font_id' => 272,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/firasanscondensed/v1/HQGj1o4-qj8agzakWWMQw0b2huS6PSilRpwXI3qYZmg.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            135 => 
            array (
                'id' => 636,
                'font_id' => 272,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/firasanscondensed/v1/-hkH0zXsjNm-yd0g99Lvtv745YdnE8ZqDtluSBzScUA.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            136 => 
            array (
                'id' => 637,
                'font_id' => 272,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/firasanscondensed/v1/k1srRZ14gKpu4XGd0R993OsjvTPWUq6WFqixIyn02S8.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            137 => 
            array (
                'id' => 638,
                'font_id' => 272,
                'variant' => '500italic',
                'link' => 'http://fonts.gstatic.com/s/firasanscondensed/v1/Z87ZCYzj43dcQd7C-kCjD4BZvKPjZWiSZqpadd3c-cI.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            138 => 
            array (
                'id' => 639,
                'font_id' => 272,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/firasanscondensed/v1/k1srRZ14gKpu4XGd0R993HI2_Em5SxSZLj3SINQVfR0.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            139 => 
            array (
                'id' => 640,
                'font_id' => 272,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/firasanscondensed/v1/Z87ZCYzj43dcQd7C-kCjD5AgRolq0CFuJyGMzcpUuqI.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            140 => 
            array (
                'id' => 641,
                'font_id' => 272,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/firasanscondensed/v1/k1srRZ14gKpu4XGd0R993BEM87DM3yorPOrvA-vB930.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            141 => 
            array (
                'id' => 642,
                'font_id' => 272,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/firasanscondensed/v1/Z87ZCYzj43dcQd7C-kCjDzkJmEiMQ4xM-o8FMi_9og4.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            142 => 
            array (
                'id' => 643,
                'font_id' => 272,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/firasanscondensed/v1/k1srRZ14gKpu4XGd0R993IakE3OFfI2LZ4c6GPO8Mzs.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            143 => 
            array (
                'id' => 644,
                'font_id' => 272,
                'variant' => '800italic',
                'link' => 'http://fonts.gstatic.com/s/firasanscondensed/v1/Z87ZCYzj43dcQd7C-kCjD07QUKmu2W_Ow4yNN8hZ1i8.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            144 => 
            array (
                'id' => 645,
                'font_id' => 272,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/firasanscondensed/v1/k1srRZ14gKpu4XGd0R993BL2AAruu1GYH8xAyPJJAg8.ttf',
                'created_at' => '2017-05-11 09:09:14',
                'updated_at' => '2017-05-11 09:09:14',
            ),
            145 => 
            array (
                'id' => 646,
                'font_id' => 272,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/firasanscondensed/v1/Z87ZCYzj43dcQd7C-kCjD8mJu-lqHNyZBDoYLJNH3Ks.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            146 => 
            array (
                'id' => 647,
                'font_id' => 273,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/firasansextracondensed/v1/_dPmaUiuUAWmL0ibePdArgFORyOzJNaQMfz6m4ejZbGglnMp3_3A8V8Ai8YosRtX.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            147 => 
            array (
                'id' => 648,
                'font_id' => 273,
                'variant' => '100italic',
                'link' => 'http://fonts.gstatic.com/s/firasansextracondensed/v1/G8VKhLxlTd0YOlG3i1R8CfHXjqTqiXVW6z8kDssMYPCAFsVxlmd8icOioVkuzMTp.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            148 => 
            array (
                'id' => 649,
                'font_id' => 273,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/firasansextracondensed/v1/34whiWDL4CxC1laOcj7OwW_7IC3ILXfeIVwvfWGu4Sgt1EgZ0r6ZKKUGlEftq-4l.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            149 => 
            array (
                'id' => 650,
                'font_id' => 273,
                'variant' => '200italic',
                'link' => 'http://fonts.gstatic.com/s/firasansextracondensed/v1/iGnuurQ1EqiOs_hlr82MCvHXjqTqiXVW6z8kDssMYPBJ88iJ4K8xoxodtsD2-nBj.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            150 => 
            array (
                'id' => 651,
                'font_id' => 273,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/firasansextracondensed/v1/34whiWDL4CxC1laOcj7OwW7O05EUNkkL_mPtCuekiV0t1EgZ0r6ZKKUGlEftq-4l.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            151 => 
            array (
                'id' => 652,
                'font_id' => 273,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/firasansextracondensed/v1/iGnuurQ1EqiOs_hlr82MCvHXjqTqiXVW6z8kDssMYPAvflpT0sW34iOPRrF6N6tI.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            152 => 
            array (
                'id' => 653,
                'font_id' => 273,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/firasansextracondensed/v1/wg_5XrW_o1_ZfuCbAkBfGRreEc6WSk_gssVJg3w2ARQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            153 => 
            array (
                'id' => 654,
                'font_id' => 273,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/firasansextracondensed/v1/_dPmaUiuUAWmL0ibePdArnKUexidEaHsf8DLYXbriUSglnMp3_3A8V8Ai8YosRtX.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            154 => 
            array (
                'id' => 655,
                'font_id' => 273,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/firasansextracondensed/v1/34whiWDL4CxC1laOcj7Owdd0GPYAHEVh0EvoffkRAuMt1EgZ0r6ZKKUGlEftq-4l.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            155 => 
            array (
                'id' => 656,
                'font_id' => 273,
                'variant' => '500italic',
                'link' => 'http://fonts.gstatic.com/s/firasansextracondensed/v1/iGnuurQ1EqiOs_hlr82MCvHXjqTqiXVW6z8kDssMYPDAjX6gmJQf3iMex9U1V3ut.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            156 => 
            array (
                'id' => 657,
                'font_id' => 273,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/firasansextracondensed/v1/34whiWDL4CxC1laOcj7OwW8v1dGG_WArVpDmblm5TDot1EgZ0r6ZKKUGlEftq-4l.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            157 => 
            array (
                'id' => 658,
                'font_id' => 273,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/firasansextracondensed/v1/iGnuurQ1EqiOs_hlr82MCvHXjqTqiXVW6z8kDssMYPCWe8ZvgY99AY9ijXVw80mY.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            158 => 
            array (
                'id' => 659,
                'font_id' => 273,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/firasansextracondensed/v1/34whiWDL4CxC1laOcj7OwdEjTMY3GGLBv_AxlS3Ww6ct1EgZ0r6ZKKUGlEftq-4l.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            159 => 
            array (
                'id' => 660,
                'font_id' => 273,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/firasansextracondensed/v1/iGnuurQ1EqiOs_hlr82MCvHXjqTqiXVW6z8kDssMYPB3tT3e-lZe80aROzSyUO11.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            160 => 
            array (
                'id' => 661,
                'font_id' => 273,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/firasansextracondensed/v1/34whiWDL4CxC1laOcj7OwZZWqFq9WyGGQ2ef9bXDKiQt1EgZ0r6ZKKUGlEftq-4l.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            161 => 
            array (
                'id' => 662,
                'font_id' => 273,
                'variant' => '800italic',
                'link' => 'http://fonts.gstatic.com/s/firasansextracondensed/v1/iGnuurQ1EqiOs_hlr82MCvHXjqTqiXVW6z8kDssMYPAPPT8D62C2kRSfhzQlPTWw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            162 => 
            array (
                'id' => 663,
                'font_id' => 273,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/firasansextracondensed/v1/34whiWDL4CxC1laOcj7OwRPaRBEe7-4iQsBL_zD1FQ8t1EgZ0r6ZKKUGlEftq-4l.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            163 => 
            array (
                'id' => 664,
                'font_id' => 273,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/firasansextracondensed/v1/iGnuurQ1EqiOs_hlr82MCvHXjqTqiXVW6z8kDssMYPAnp2qhLrn0wZPVzCpypoAw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            164 => 
            array (
                'id' => 665,
                'font_id' => 274,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/fjallaone/v4/3b7vWCfOZsU53vMa8LWsf_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            165 => 
            array (
                'id' => 666,
                'font_id' => 275,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/fjordone/v5/R_YHK8au2uFPw5tNu5N7zw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            166 => 
            array (
                'id' => 667,
                'font_id' => 276,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/flamenco/v6/x9iI5CogvuZVCGoRHwXuo6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            167 => 
            array (
                'id' => 668,
                'font_id' => 276,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/flamenco/v6/HC0ugfLLgt26I5_BWD1PZA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            168 => 
            array (
                'id' => 669,
                'font_id' => 277,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/flavors/v5/SPJi5QclATvon8ExcKGRvQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            169 => 
            array (
                'id' => 670,
                'font_id' => 278,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/fondamento/v6/6LWXcjT1B7bnWluAOSNfMPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            170 => 
            array (
                'id' => 671,
                'font_id' => 278,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/fondamento/v6/y6TmwhSbZ8rYq7OTFyo7OS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            171 => 
            array (
                'id' => 672,
                'font_id' => 279,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/fontdinerswanky/v6/8_GxIO5ixMtn5P6COsF3TlBjMPLzPAFJwRBn-s1U7kA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            172 => 
            array (
                'id' => 673,
                'font_id' => 280,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/forum/v7/MZUpsq1VfLrqv8eSDcbrrQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            173 => 
            array (
                'id' => 674,
                'font_id' => 281,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/francoisone/v10/bYbkq2nU2TSx4SwFbz5sCC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            174 => 
            array (
                'id' => 675,
                'font_id' => 282,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/frankruhllibre/v1/y8NWif61iD8Hg8bGAmxFPOo9jvbqtCEVUIntIHarXsc.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            175 => 
            array (
                'id' => 676,
                'font_id' => 282,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/frankruhllibre/v1/yDLloNqBpFmakCImLv4OJkfFI6QBbouvcOFcz81E3Ek.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            176 => 
            array (
                'id' => 677,
                'font_id' => 282,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/frankruhllibre/v1/y8NWif61iD8Hg8bGAmxFPC-WNtISbX_UO2d0wZPgXtk.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            177 => 
            array (
                'id' => 678,
                'font_id' => 282,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/frankruhllibre/v1/y8NWif61iD8Hg8bGAmxFPDPYiZEMiRRbPdIFMoTwDbo.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            178 => 
            array (
                'id' => 679,
                'font_id' => 282,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/frankruhllibre/v1/y8NWif61iD8Hg8bGAmxFPNRZIVFRjDx-6MOpcoWbVhA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            179 => 
            array (
                'id' => 680,
                'font_id' => 283,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/freckleface/v4/7-B8j9BPJgazdHIGqPNv8y3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            180 => 
            array (
                'id' => 681,
                'font_id' => 284,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/frederickathegreat/v5/7Es8Lxoku-e5eOZWpxw18nrnet6gXN1McwdQxS1dVrI.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            181 => 
            array (
                'id' => 682,
                'font_id' => 285,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/fredokaone/v4/QKfwXi-z-KtJAlnO2ethYqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            182 => 
            array (
                'id' => 683,
                'font_id' => 286,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/freehand/v8/uEBQxvA0lnn_BrD6krlxMw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            183 => 
            array (
                'id' => 684,
                'font_id' => 287,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/fresca/v5/2q7Qm9sCo1tWvVgSDVWNIw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            184 => 
            array (
                'id' => 685,
                'font_id' => 288,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/frijole/v5/L2MfZse-2gCascuD-nLhWg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            185 => 
            array (
                'id' => 686,
                'font_id' => 289,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/fruktur/v9/PnQvfEi1LssAvhJsCwH__w.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            186 => 
            array (
                'id' => 687,
                'font_id' => 290,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/fugazone/v6/5tteVDCwxsr8-5RuSiRWOw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            187 => 
            array (
                'id' => 688,
                'font_id' => 291,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/gfsdidot/v6/jQKxZy2RU-h9tkPZcRVluA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            188 => 
            array (
                'id' => 689,
                'font_id' => 292,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/gfsneohellenic/v7/B4xRqbn-tANVqVgamMsSDiayCZa0z7CpFzlkqoCHztc.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            189 => 
            array (
                'id' => 690,
                'font_id' => 292,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/gfsneohellenic/v7/KnaWrO4awITAqigQIIYXKkCTdomiyJpIzPbEbIES3rU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            190 => 
            array (
                'id' => 691,
                'font_id' => 292,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/gfsneohellenic/v7/7HwjPQa7qNiOsnUce2h4448_BwCLZY3eDSV6kppAwI8.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            191 => 
            array (
                'id' => 692,
                'font_id' => 292,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/gfsneohellenic/v7/FwWjoX6XqT-szJFyqsu_GYFF0fM4h-krcpQk7emtCpE.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            192 => 
            array (
                'id' => 693,
                'font_id' => 293,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/gabriela/v5/B-2ZfbAO3HDrxqV6lR5tdA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            193 => 
            array (
                'id' => 694,
                'font_id' => 294,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/gafata/v5/aTFqlki_3Dc3geo-FxHTvQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            194 => 
            array (
                'id' => 695,
                'font_id' => 295,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/galada/v1/xGkllHQb8OOCv9VJ6IObSA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            195 => 
            array (
                'id' => 696,
                'font_id' => 296,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/galdeano/v6/ZKFMQI6HxEG1jOT0UGSZUg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            196 => 
            array (
                'id' => 697,
                'font_id' => 297,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/galindo/v4/2lafAS_ZEfB33OJryhXDUg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            197 => 
            array (
                'id' => 698,
                'font_id' => 298,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/gentiumbasic/v8/KCktj43blvLkhOTolFn-MYtBLojGU5Qdl8-5NL4v70w.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            198 => 
            array (
                'id' => 699,
                'font_id' => 298,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/gentiumbasic/v8/qoFz4NSMaYC2UmsMAG3lyTj3mvXnCeAk09uTtmkJGRc.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            199 => 
            array (
                'id' => 700,
                'font_id' => 298,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/gentiumbasic/v8/2qL6yulgGf0wwgOp-UqGyLNuTeOOLg3nUymsEEGmdO0.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            200 => 
            array (
                'id' => 701,
                'font_id' => 298,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/gentiumbasic/v8/8N9-c_aQDJ8LbI1NGVMrwtswO1vWwP9exiF8s0wqW10.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            201 => 
            array (
                'id' => 702,
                'font_id' => 299,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/gentiumbookbasic/v7/IRFxB2matTxrjZt6a3FUnrWDjKAyldGEr6eEi2MBNeY.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            202 => 
            array (
                'id' => 703,
                'font_id' => 299,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/gentiumbookbasic/v7/qHqW2lwKO8-uTfIkh8FsUfXfjMwrYnmPVsQth2IcAPY.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            203 => 
            array (
                'id' => 704,
                'font_id' => 299,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/gentiumbookbasic/v7/T2vUYmWzlqUtgLYdlemGnaWESMHIjnSjm9UUxYtEOko.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            204 => 
            array (
                'id' => 705,
                'font_id' => 299,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/gentiumbookbasic/v7/632u7TMIoFDWQYUaHFUp5PA2A9KyRZEkn4TZVuhsWRM.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            205 => 
            array (
                'id' => 706,
                'font_id' => 300,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/geo/v8/mJuJYk5Pww84B4uHAQ1XaA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            206 => 
            array (
                'id' => 707,
                'font_id' => 300,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/geo/v8/8_r1wToF7nPdDuX1qxel6Q.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            207 => 
            array (
                'id' => 708,
                'font_id' => 301,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/geostar/v6/A8WQbhQbpYx3GWWaShJ9GA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            208 => 
            array (
                'id' => 709,
                'font_id' => 302,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/geostarfill/v6/Y5ovXPPOHYTfQzK2aM-hui3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            209 => 
            array (
                'id' => 710,
                'font_id' => 303,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/germaniaone/v4/3_6AyUql_-FbDi1e68jHdC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            210 => 
            array (
                'id' => 711,
                'font_id' => 304,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/gidugu/v3/Ey6Eq3hrT6MM58iFItFcgw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            211 => 
            array (
                'id' => 712,
                'font_id' => 305,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/gildadisplay/v4/8yAVUZLLZ3wb7dSsjix0CADHmap7fRWINAsw8-RaxNg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            212 => 
            array (
                'id' => 713,
                'font_id' => 306,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/giveyouglory/v6/DFEWZFgGmfseyIdGRJAxuBwwkpSPZdvjnMtysdqprfI.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            213 => 
            array (
                'id' => 714,
                'font_id' => 307,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/glassantiqua/v4/0yLrXKplgdUDIMz5TnCHNODcg5akpSnIcsPhLOFv7l8.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            214 => 
            array (
                'id' => 715,
                'font_id' => 308,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/glegoo/v5/2tf-h3n2A_SNYXEO0C8bKw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            215 => 
            array (
                'id' => 716,
                'font_id' => 308,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/glegoo/v5/TlLolbauH0-0Aiz1LUH5og.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            216 => 
            array (
                'id' => 717,
                'font_id' => 309,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/gloriahallelujah/v8/CA1k7SlXcY5kvI81M_R28Q3RdPdyebSUyJECJouPsvA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            217 => 
            array (
                'id' => 718,
                'font_id' => 310,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/goblinone/v6/331XtzoXgpVEvNTVcBJ_C_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            218 => 
            array (
                'id' => 719,
                'font_id' => 311,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/gochihand/v7/KT1-WxgHsittJ34_20IfAPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            219 => 
            array (
                'id' => 720,
                'font_id' => 312,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/gorditas/v4/uMgZhXUyH6qNGF3QsjQT5Q.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            220 => 
            array (
                'id' => 721,
                'font_id' => 312,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/gorditas/v4/6-XCeknmxaon8AUqVkMnHaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            221 => 
            array (
                'id' => 722,
                'font_id' => 313,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/goudybookletter1911/v6/l5lwlGTN3pEY5Bf-rQEuIIjNDsyURsIKu4GSfvSE4mA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            222 => 
            array (
                'id' => 723,
                'font_id' => 314,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/graduate/v4/JpAmYLHqcIh9_Ff35HHwiA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            223 => 
            array (
                'id' => 724,
                'font_id' => 315,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/grandhotel/v4/C_A8HiFZjXPpnMt38XnK7qCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            224 => 
            array (
                'id' => 725,
                'font_id' => 316,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/gravitasone/v6/nBHdBv6zVNU8MtP6w9FwTS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            225 => 
            array (
                'id' => 726,
                'font_id' => 317,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/greatvibes/v4/4Mi5RG_9LjQYrTU55GN_L6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            226 => 
            array (
                'id' => 727,
                'font_id' => 318,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/griffy/v4/vWkyYGBSyE5xjnShNtJtzw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            227 => 
            array (
                'id' => 728,
                'font_id' => 319,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/gruppo/v7/pS_JM0cK_piBZve-lfUq9w.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            228 => 
            array (
                'id' => 729,
                'font_id' => 320,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/gudea/v4/S-4QqBlkMPiiA3jNeCR5yw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            229 => 
            array (
                'id' => 730,
                'font_id' => 320,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/gudea/v4/7mNgsGw_vfS-uUgRVXNDSw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            230 => 
            array (
                'id' => 731,
                'font_id' => 320,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/gudea/v4/lsip4aiWhJ9bx172Y9FN_w.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            231 => 
            array (
                'id' => 732,
                'font_id' => 321,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/gurajada/v4/6Adfkl4PCRyq6XTENACEyA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            232 => 
            array (
                'id' => 733,
                'font_id' => 322,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/habibi/v5/YYyqXF6pWpL7kmKgS_2iUA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            233 => 
            array (
                'id' => 734,
                'font_id' => 323,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/halant/v2/dM3ItAOWNNod_Cf3MnLlEg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            234 => 
            array (
                'id' => 735,
                'font_id' => 323,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/halant/v2/rEs7Jk3SVyt3cTx6DoTu1w.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            235 => 
            array (
                'id' => 736,
                'font_id' => 323,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/halant/v2/tlsNj3K-hJKtiirTDtUbkQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            236 => 
            array (
                'id' => 737,
                'font_id' => 323,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/halant/v2/zNR2WvI_V8o652vIZp3X4Q.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            237 => 
            array (
                'id' => 738,
                'font_id' => 323,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/halant/v2/D9FN7OH89AuCmZDLHbPQfA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            238 => 
            array (
                'id' => 739,
                'font_id' => 324,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/hammersmithone/v7/FWNn6ITYqL6or7ZTmBxRhjjVlsJB_M_Q_LtZxsoxvlw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            239 => 
            array (
                'id' => 740,
                'font_id' => 325,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/hanalei/v6/Sx8vVMBnXSQyK6Cn0CBJ3A.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            240 => 
            array (
                'id' => 741,
                'font_id' => 326,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/hanaleifill/v5/5uPeWLnaDdtm4UBG26Ds6C3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            241 => 
            array (
                'id' => 742,
                'font_id' => 327,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/handlee/v5/6OfkXkyC0E5NZN80ED8u3A.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            242 => 
            array (
                'id' => 743,
                'font_id' => 328,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/hanuman/v9/hRhwOGGmElJSl6KSPvEnOQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            243 => 
            array (
                'id' => 744,
                'font_id' => 328,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/hanuman/v9/lzzXZ2l84x88giDrbfq76vesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            244 => 
            array (
                'id' => 745,
                'font_id' => 329,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/happymonkey/v5/c2o0ps8nkBmaOYctqBq1rS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            245 => 
            array (
                'id' => 746,
                'font_id' => 330,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/harmattan/v1/xNM1nDKzsLfoCLQtMRztGA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            246 => 
            array (
                'id' => 747,
                'font_id' => 331,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/headlandone/v4/iGmBeOvQGfq9DSbjJ8jDVy3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            247 => 
            array (
                'id' => 748,
                'font_id' => 332,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/heebo/v2/SoQODIucfpkiveZloUR6ag.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            248 => 
            array (
                'id' => 749,
                'font_id' => 332,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/heebo/v2/dg5T18yyjkKiU_9mmcbDSQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            249 => 
            array (
                'id' => 750,
                'font_id' => 332,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/heebo/v2/nyHCGMPliplPNqpssbDSIA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            250 => 
            array (
                'id' => 751,
                'font_id' => 332,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/heebo/v2/jDb70ZCwdD6JnmQU62ZQZA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            251 => 
            array (
                'id' => 752,
                'font_id' => 332,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/heebo/v2/NsBYEn6oWei8pPqytA07yA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            252 => 
            array (
                'id' => 753,
                'font_id' => 332,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/heebo/v2/h4CV2Qq56LKIinGGOStvsw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            253 => 
            array (
                'id' => 754,
                'font_id' => 332,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/heebo/v2/uDfzHw3R0Bfa6HyIIcj-ow.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            254 => 
            array (
                'id' => 755,
                'font_id' => 333,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/hennypenny/v4/XRgo3ogXyi3tpsFfjImRF6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            255 => 
            array (
                'id' => 756,
                'font_id' => 334,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/herrvonmuellerhoff/v6/mmy24EUmk4tjm4gAEjUd7NLGIYrUsBdh-JWHYgiDiMU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            256 => 
            array (
                'id' => 757,
                'font_id' => 335,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/hind/v6/qa346Adgv9kPDXoD1my4kA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            257 => 
            array (
                'id' => 758,
                'font_id' => 335,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/hind/v6/mktFHh5Z5P9YjGKSslSUtA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            258 => 
            array (
                'id' => 759,
                'font_id' => 335,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/hind/v6/2cs8RCVcYtiv4iNDH1UsQQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            259 => 
            array (
                'id' => 760,
                'font_id' => 335,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/hind/v6/TUKUmFMXSoxloBP1ni08oA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            260 => 
            array (
                'id' => 761,
                'font_id' => 335,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/hind/v6/cXJJavLdUbCfjxlsA6DqTw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            261 => 
            array (
                'id' => 762,
                'font_id' => 336,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/hindguntur/v1/Szg33M7ab5MTWe-PWAcNAi9-WlPSxbfiI49GsXo3q0g.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            262 => 
            array (
                'id' => 763,
                'font_id' => 336,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/hindguntur/v1/MXz-KyAeVZstlFz6v-5SC6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            263 => 
            array (
                'id' => 764,
                'font_id' => 336,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/hindguntur/v1/Szg33M7ab5MTWe-PWAcNAsCNfqCYlB_eIx7H1TVXe60.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            264 => 
            array (
                'id' => 765,
                'font_id' => 336,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/hindguntur/v1/Szg33M7ab5MTWe-PWAcNApZ7xm-Bj30Bj2KNdXDzSZg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            265 => 
            array (
                'id' => 766,
                'font_id' => 336,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/hindguntur/v1/Szg33M7ab5MTWe-PWAcNAne1Pd76Vl7zRpE7NLJQ7XU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            266 => 
            array (
                'id' => 767,
                'font_id' => 337,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/hindmadurai/v1/sdSJTZLdRXJhVTP92m2S66cQoVhARpoaILP7amxE_8g.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            267 => 
            array (
                'id' => 768,
                'font_id' => 337,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/hindmadurai/v1/pJpl47LatORZNWf8rgdiyS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            268 => 
            array (
                'id' => 769,
                'font_id' => 337,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/hindmadurai/v1/sdSJTZLdRXJhVTP92m2S65MQuUSAwdHsY8ov_6tk1oA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            269 => 
            array (
                'id' => 770,
                'font_id' => 337,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/hindmadurai/v1/sdSJTZLdRXJhVTP92m2S62v8CylhIUtwUiYO7Z2wXbE.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            270 => 
            array (
                'id' => 771,
                'font_id' => 337,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/hindmadurai/v1/sdSJTZLdRXJhVTP92m2S60D2ttfZwueP-QU272T9-k4.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            271 => 
            array (
                'id' => 772,
                'font_id' => 338,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/hindsiliguri/v2/fBpmjMpv5Rh6S25yVfWJnzoJ52uD-1fmXmi8u0n_zsc.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            272 => 
            array (
                'id' => 773,
                'font_id' => 338,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/hindsiliguri/v2/f2eEi2pbIa8eBfNwpUl0Am_MnNA9OgK8I1F23mNWOpE.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            273 => 
            array (
                'id' => 774,
                'font_id' => 338,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/hindsiliguri/v2/fBpmjMpv5Rh6S25yVfWJn__2zpxNHQ3utWt_82o9dAo.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            274 => 
            array (
                'id' => 775,
                'font_id' => 338,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/hindsiliguri/v2/fBpmjMpv5Rh6S25yVfWJn-x91FDzFvnud68bXrNkpDA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            275 => 
            array (
                'id' => 776,
                'font_id' => 338,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/hindsiliguri/v2/fBpmjMpv5Rh6S25yVfWJn6iiXuG_rGcOxkuidirlnJE.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            276 => 
            array (
                'id' => 777,
                'font_id' => 339,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/hindvadodara/v2/KrZ6f_YevRawHvh0qDBkTbDwfZ__Dotj_J8NiWv76DQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            277 => 
            array (
                'id' => 778,
                'font_id' => 339,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/hindvadodara/v2/9c6KKeibr6NtFqknnNxZB-Dcg5akpSnIcsPhLOFv7l8.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            278 => 
            array (
                'id' => 779,
                'font_id' => 339,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/hindvadodara/v2/KrZ6f_YevRawHvh0qDBkTZzEKvFIU9WyojfbAkhDb6c.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            279 => 
            array (
                'id' => 780,
                'font_id' => 339,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/hindvadodara/v2/KrZ6f_YevRawHvh0qDBkTfgXs2VXrZsRiQ1c96pXZKI.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            280 => 
            array (
                'id' => 781,
                'font_id' => 339,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/hindvadodara/v2/KrZ6f_YevRawHvh0qDBkTYGjoH95IEFGA7BjhXnx_eg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            281 => 
            array (
                'id' => 782,
                'font_id' => 340,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/holtwoodonesc/v7/sToOq3cIxbfnhbEkgYNuBbAgSRh1LpJXlLfl8IbsmHg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            282 => 
            array (
                'id' => 783,
                'font_id' => 341,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/homemadeapple/v6/yg3UMEsefgZ8IHz_ryz86BiPOmFWYV1WlrJkRafc4c0.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            283 => 
            array (
                'id' => 784,
                'font_id' => 342,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/homenaje/v6/v0YBU0iBRrGdVjDNQILxtA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            284 => 
            array (
                'id' => 785,
                'font_id' => 343,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/imfelldwpica/v6/W81bfaWiUicLSPbJhW-ATsA5qm663gJGVdtpamafG5A.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            285 => 
            array (
                'id' => 786,
                'font_id' => 343,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/imfelldwpica/v6/alQJ8SK5aSOZVaelYoyT4PL2asmh5DlYQYCosKo6yQs.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            286 => 
            array (
                'id' => 787,
                'font_id' => 344,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/imfelldwpicasc/v6/xBKKJV4z2KsrtQnmjGO17JZ9RBdEL0H9o5qzT1Rtof4.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            287 => 
            array (
                'id' => 788,
                'font_id' => 345,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/imfelldoublepica/v6/yN1wY_01BkQnO0LYAhXdUol14jEdVOhEmvtCMCVwYak.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            288 => 
            array (
                'id' => 789,
                'font_id' => 345,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/imfelldoublepica/v6/64odUh2hAw8D9dkFKTlWYq0AWwkgdQfsRHec8TYi4mI.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            289 => 
            array (
                'id' => 790,
                'font_id' => 346,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/imfelldoublepicasc/v6/jkrUtrLFpMw4ZazhfkKsGwc4LoC4OJUqLw9omnT3VOU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            290 => 
            array (
                'id' => 791,
                'font_id' => 347,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/imfellenglish/v6/xwIisCqGFi8pff-oa9uSVHGNmx1fDm-u2eBJHQkdrmk.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            291 => 
            array (
                'id' => 792,
                'font_id' => 347,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/imfellenglish/v6/Z3cnIAI_L3XTRfz4JuZKbuewladMPCWTthtMv9cPS-c.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            292 => 
            array (
                'id' => 793,
                'font_id' => 348,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/imfellenglishsc/v6/h3Tn6yWfw4b5qaLD1RWvz5ATixNthKRRR1XVH3rJNiw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            293 => 
            array (
                'id' => 794,
                'font_id' => 349,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/imfellfrenchcanon/v6/iKB0WL1BagSpNPz3NLMdsJ3V2FNpBrlLSvqUnERhBP8.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            294 => 
            array (
                'id' => 795,
                'font_id' => 349,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/imfellfrenchcanon/v6/owCuNQkLLFW7TBBPJbMnhRa-QL94KdW80H29tcyld2A.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            295 => 
            array (
                'id' => 796,
                'font_id' => 350,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/imfellfrenchcanonsc/v6/kA3bS19-tQbeT_iG32EZmaiyyzHwYrAbmNulTz423iM.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            296 => 
            array (
                'id' => 797,
                'font_id' => 351,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/imfellgreatprimer/v6/AL8ALGNthei20f9Cu3e93rgeX3ROgtTz44CitKAxzKI.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            297 => 
            array (
                'id' => 798,
                'font_id' => 351,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/imfellgreatprimer/v6/1a-artkXMVg682r7TTxVY1_YG2SFv8Ma7CxRl1S3o7g.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            298 => 
            array (
                'id' => 799,
                'font_id' => 352,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/imfellgreatprimersc/v6/A313vRj97hMMGFjt6rgSJtRg-ciw1Y27JeXb2Zv4lZQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            299 => 
            array (
                'id' => 800,
                'font_id' => 353,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/iceberg/v4/p2XVm4M-N0AOEEOymFKC5w.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            300 => 
            array (
                'id' => 801,
                'font_id' => 354,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/iceland/v5/kq3uTMGgvzWGNi39B_WxGA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            301 => 
            array (
                'id' => 802,
                'font_id' => 355,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/imprima/v4/eRjquWLjwLGnTEhLH7u3kA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            302 => 
            array (
                'id' => 803,
                'font_id' => 356,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/inconsolata/v15/7bMKuoy6Nh0ft0SHnIGMuaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            303 => 
            array (
                'id' => 804,
                'font_id' => 356,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/inconsolata/v15/AIed271kqQlcIRSOnQH0yXe1Pd76Vl7zRpE7NLJQ7XU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            304 => 
            array (
                'id' => 805,
                'font_id' => 357,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/inder/v5/C38TwecLTfKxIHDc_Adcrw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            305 => 
            array (
                'id' => 806,
                'font_id' => 358,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/indieflower/v8/10JVD_humAd5zP2yrFqw6i3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            306 => 
            array (
                'id' => 807,
                'font_id' => 359,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/inika/v4/eZCrULQGaIxkrRoGz_DjhQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            307 => 
            array (
                'id' => 808,
                'font_id' => 359,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/inika/v4/bl3ZoTyrWsFun2zYbsgJrA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            308 => 
            array (
                'id' => 809,
                'font_id' => 360,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/inknutantiqua/v1/CagoW52rBcslcXzHh6tVIg6hmPNSXwHGnJQCeQHKUMo.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            309 => 
            array (
                'id' => 810,
                'font_id' => 360,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/inknutantiqua/v1/VlmmTfOrxr3HfcnhMueX9arFJ4O13IHVxZbM6yoslpo.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            310 => 
            array (
                'id' => 811,
                'font_id' => 360,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/inknutantiqua/v1/CagoW52rBcslcXzHh6tVIiYCDvi1XFzRnTV7qUFsNgk.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            311 => 
            array (
                'id' => 812,
                'font_id' => 360,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/inknutantiqua/v1/CagoW52rBcslcXzHh6tVIjLEgY6PI0GrY6L00mykcEQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            312 => 
            array (
                'id' => 813,
                'font_id' => 360,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/inknutantiqua/v1/CagoW52rBcslcXzHh6tVIlRhfXn9P4_QueZ7VkUHUNc.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            313 => 
            array (
                'id' => 814,
                'font_id' => 360,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/inknutantiqua/v1/CagoW52rBcslcXzHh6tVInARjXVu2t2krcNTHiCb1qY.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            314 => 
            array (
                'id' => 815,
                'font_id' => 360,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/inknutantiqua/v1/CagoW52rBcslcXzHh6tVIrTsNy1JrFNT1qKy8j7W3CU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            315 => 
            array (
                'id' => 816,
                'font_id' => 361,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/irishgrover/v6/kUp7uUPooL-KsLGzeVJbBC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            316 => 
            array (
                'id' => 817,
                'font_id' => 362,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/istokweb/v10/RYLSjEXQ0nNtLLc4n7--dQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            317 => 
            array (
                'id' => 818,
                'font_id' => 362,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/istokweb/v10/kvcT2SlTjmGbC3YlZxmrl6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            318 => 
            array (
                'id' => 819,
                'font_id' => 362,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/istokweb/v10/2koEo4AKFSvK4B52O_Mwai3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            319 => 
            array (
                'id' => 820,
                'font_id' => 362,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/istokweb/v10/ycQ3g52ELrh3o_HYCNNUw3e1Pd76Vl7zRpE7NLJQ7XU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            320 => 
            array (
                'id' => 821,
                'font_id' => 363,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/italiana/v5/dt95fkCSTOF-c6QNjwSycA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            321 => 
            array (
                'id' => 822,
                'font_id' => 364,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/italianno/v6/HsyHnLpKf8uP7aMpDQHZmg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            322 => 
            array (
                'id' => 823,
                'font_id' => 365,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/itim/v1/HHV9WK2x5lUkc5bxMXG8Tw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            323 => 
            array (
                'id' => 824,
                'font_id' => 366,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/jacquesfrancois/v4/_-0XWPQIW6tOzTHg4KaJ_M13D_4KM32Q4UmTSjpuNGQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            324 => 
            array (
                'id' => 825,
                'font_id' => 367,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/jacquesfrancoisshadow/v4/V14y0H3vq56fY9SV4OL_FASt0D_oLVawA8L8b9iKjbs.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            325 => 
            array (
                'id' => 826,
                'font_id' => 368,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/jaldi/v2/x1vR-bPW9a1EB-BUVqttCw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            326 => 
            array (
                'id' => 827,
                'font_id' => 368,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/jaldi/v2/OIbtgjjEp3aVWtjF6WY8mA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            327 => 
            array (
                'id' => 828,
                'font_id' => 369,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/jimnightshade/v4/_n43lYHXVWNgXegdYRIK9CF1W_bo0EdycfH0kHciIic.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            328 => 
            array (
                'id' => 829,
                'font_id' => 370,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/jockeyone/v6/cAucnOZLvFo07w2AbufBCfesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            329 => 
            array (
                'id' => 830,
                'font_id' => 371,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/jollylodger/v4/RX8HnkBgaEKQSHQyP9itiS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            330 => 
            array (
                'id' => 831,
                'font_id' => 372,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/jomhuria/v2/hrvsccQpBliIgor15WxE6g.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            331 => 
            array (
                'id' => 832,
                'font_id' => 373,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/josefinsans/v9/q9w3H4aeBxj0hZ8Osfi3d8SVQ0giZ-l_NELu3lgGyYw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            332 => 
            array (
                'id' => 833,
                'font_id' => 373,
                'variant' => '100italic',
                'link' => 'http://fonts.gstatic.com/s/josefinsans/v9/s7-P1gqRNRNn-YWdOYnAOXXcj1rQwlNLIS625o-SrL0.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            333 => 
            array (
                'id' => 834,
                'font_id' => 373,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/josefinsans/v9/C6HYlRF50SGJq1XyXj04z6cQoVhARpoaILP7amxE_8g.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            334 => 
            array (
                'id' => 835,
                'font_id' => 373,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/josefinsans/v9/ppse0J9fKSaoxCIIJb33Gyna0FLWfcB-J_SAYmcAXaI.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            335 => 
            array (
                'id' => 836,
                'font_id' => 373,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/josefinsans/v9/xgzbb53t8j-Mo-vYa23n5i3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            336 => 
            array (
                'id' => 837,
                'font_id' => 373,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/josefinsans/v9/q9w3H4aeBxj0hZ8Osfi3d_MZXuCXbOrAvx5R0IT5Oyo.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            337 => 
            array (
                'id' => 838,
                'font_id' => 373,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/josefinsans/v9/C6HYlRF50SGJq1XyXj04z2v8CylhIUtwUiYO7Z2wXbE.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            338 => 
            array (
                'id' => 839,
                'font_id' => 373,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/josefinsans/v9/ppse0J9fKSaoxCIIJb33G4R-5-urNOGAobhAyctHvW8.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            339 => 
            array (
                'id' => 840,
                'font_id' => 373,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/josefinsans/v9/C6HYlRF50SGJq1XyXj04z0D2ttfZwueP-QU272T9-k4.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            340 => 
            array (
                'id' => 841,
                'font_id' => 373,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/josefinsans/v9/ppse0J9fKSaoxCIIJb33G_As9-1nE9qOqhChW0m4nDE.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            341 => 
            array (
                'id' => 842,
                'font_id' => 374,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/josefinslab/v6/etsUjZYO8lTLU85lDhZwUsSVQ0giZ-l_NELu3lgGyYw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            342 => 
            array (
                'id' => 843,
                'font_id' => 374,
                'variant' => '100italic',
                'link' => 'http://fonts.gstatic.com/s/josefinslab/v6/8BjDChqLgBF3RJKfwHIYh3Xcj1rQwlNLIS625o-SrL0.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            343 => 
            array (
                'id' => 844,
                'font_id' => 374,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/josefinslab/v6/NbE6ykYuM2IyEwxQxOIi2KcQoVhARpoaILP7amxE_8g.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            344 => 
            array (
                'id' => 845,
                'font_id' => 374,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/josefinslab/v6/af9sBoKGPbGO0r21xJulyyna0FLWfcB-J_SAYmcAXaI.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            345 => 
            array (
                'id' => 846,
                'font_id' => 374,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/josefinslab/v6/46aYWdgz-1oFX11flmyEfS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            346 => 
            array (
                'id' => 847,
                'font_id' => 374,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/josefinslab/v6/etsUjZYO8lTLU85lDhZwUvMZXuCXbOrAvx5R0IT5Oyo.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            347 => 
            array (
                'id' => 848,
                'font_id' => 374,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/josefinslab/v6/NbE6ykYuM2IyEwxQxOIi2Gv8CylhIUtwUiYO7Z2wXbE.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            348 => 
            array (
                'id' => 849,
                'font_id' => 374,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/josefinslab/v6/af9sBoKGPbGO0r21xJuly4R-5-urNOGAobhAyctHvW8.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            349 => 
            array (
                'id' => 850,
                'font_id' => 374,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/josefinslab/v6/NbE6ykYuM2IyEwxQxOIi2ED2ttfZwueP-QU272T9-k4.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            350 => 
            array (
                'id' => 851,
                'font_id' => 374,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/josefinslab/v6/af9sBoKGPbGO0r21xJuly_As9-1nE9qOqhChW0m4nDE.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            351 => 
            array (
                'id' => 852,
                'font_id' => 375,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/jotione/v4/P3r_Th0ESHJdzunsvWgUfQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            352 => 
            array (
                'id' => 853,
                'font_id' => 376,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/judson/v9/znM1AAs0eytUaJzf1CrYZQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            353 => 
            array (
                'id' => 854,
                'font_id' => 376,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/judson/v9/GVqQW9P52ygW-ySq-CLwAA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            354 => 
            array (
                'id' => 855,
                'font_id' => 376,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/judson/v9/he4a2LwiPJc7r8x0oKCKiA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            355 => 
            array (
                'id' => 856,
                'font_id' => 377,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/julee/v6/CAib-jsUsSO8SvVRnE9fHA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            356 => 
            array (
                'id' => 857,
                'font_id' => 378,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/juliussansone/v5/iU65JP9acQHPDLkdalCF7jjVlsJB_M_Q_LtZxsoxvlw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            357 => 
            array (
                'id' => 858,
                'font_id' => 379,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/junge/v4/j4IXCXtxrw9qIBheercp3A.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            358 => 
            array (
                'id' => 859,
                'font_id' => 380,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/jura/v7/Rqx_xy1UnN0C7wD3FUSyPQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            359 => 
            array (
                'id' => 860,
                'font_id' => 380,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/jura/v7/YAWMwF3sN0KCbynMq-Yr_Q.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            360 => 
            array (
                'id' => 861,
                'font_id' => 380,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/jura/v7/16xhfjHCiaLj3tsqqgmtGg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            361 => 
            array (
                'id' => 862,
                'font_id' => 380,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/jura/v7/iwseduOwJSdY8wQ1Y6CJdA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            362 => 
            array (
                'id' => 863,
                'font_id' => 381,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/justanotherhand/v7/fKV8XYuRNNagXr38eqbRf99BnJIEGrvoojniP57E51c.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            363 => 
            array (
                'id' => 864,
                'font_id' => 382,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/justmeagaindownhere/v8/sN06iTc9ITubLTgXoG-kc3M9eVLpVTSK6TqZTIgBrWQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            364 => 
            array (
                'id' => 865,
                'font_id' => 383,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/kadwa/v1/VwEN8oKGqaa0ug9kRpvSSg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            365 => 
            array (
                'id' => 866,
                'font_id' => 383,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/kadwa/v1/NFPZaBfekj_Io-7vUMz4Ww.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            366 => 
            array (
                'id' => 867,
                'font_id' => 384,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/kalam/v7/MgQQlk1SgPEHdlkWMNh7Jg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            367 => 
            array (
                'id' => 868,
                'font_id' => 384,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/kalam/v7/hNEJkp2K-aql7e5WQish4Q.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            368 => 
            array (
                'id' => 869,
                'font_id' => 384,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/kalam/v7/95nLItUGyWtNLZjSckluLQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            369 => 
            array (
                'id' => 870,
                'font_id' => 385,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/kameron/v7/9r8HYhqDSwcq9WMjupL82A.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            370 => 
            array (
                'id' => 871,
                'font_id' => 385,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/kameron/v7/rabVVbzlflqvmXJUFlKnu_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            371 => 
            array (
                'id' => 872,
                'font_id' => 386,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/kanit/v1/CYl4qOK-NWwZp3iTKW1eIA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            372 => 
            array (
                'id' => 873,
                'font_id' => 386,
                'variant' => '100italic',
                'link' => 'http://fonts.gstatic.com/s/kanit/v1/NLNtc56MpXmHl1yOrop8oQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            373 => 
            array (
                'id' => 874,
                'font_id' => 386,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/kanit/v1/wfLWkj1C4tYl7MoiFWS3bA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            374 => 
            array (
                'id' => 875,
                'font_id' => 386,
                'variant' => '200italic',
                'link' => 'http://fonts.gstatic.com/s/kanit/v1/D8gkrAAM2bvNJ-1i4ot-1_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            375 => 
            array (
                'id' => 876,
                'font_id' => 386,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/kanit/v1/SM5qHynYGdOmMKEwGUFIPA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            376 => 
            array (
                'id' => 877,
                'font_id' => 386,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/kanit/v1/IePislKOKy3Bqfpb9V5VM_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            377 => 
            array (
                'id' => 878,
                'font_id' => 386,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/kanit/v1/L6VKvM17ZmevDynOiw7H9w.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            378 => 
            array (
                'id' => 879,
                'font_id' => 386,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/kanit/v1/sHLq5U0-T0oSMTnwTKgv-A.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            379 => 
            array (
                'id' => 880,
                'font_id' => 386,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/kanit/v1/GxoU_USIJyIy8WIcYSUO2g.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            380 => 
            array (
                'id' => 881,
                'font_id' => 386,
                'variant' => '500italic',
                'link' => 'http://fonts.gstatic.com/s/kanit/v1/hrCiWCaNv9AaF0mDY1F2zPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            381 => 
            array (
                'id' => 882,
                'font_id' => 386,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/kanit/v1/n_qoIVxojeQY0D1pvoNDhA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            382 => 
            array (
                'id' => 883,
                'font_id' => 386,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/kanit/v1/9BkP85yRDoVayTWQwdGLqPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            383 => 
            array (
                'id' => 884,
                'font_id' => 386,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/kanit/v1/kEGmYvO8My36j5ILmbUPRg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            384 => 
            array (
                'id' => 885,
                'font_id' => 386,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/kanit/v1/WNo3ZZ9xtOZJknNlvHAFWfesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            385 => 
            array (
                'id' => 886,
                'font_id' => 386,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/kanit/v1/YTp-zAuKXxwnA1YnJIF1rg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            386 => 
            array (
                'id' => 887,
                'font_id' => 386,
                'variant' => '800italic',
                'link' => 'http://fonts.gstatic.com/s/kanit/v1/qiTGrW5sCa9UQp841fWjc_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            387 => 
            array (
                'id' => 888,
                'font_id' => 386,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/kanit/v1/1NIEkusi3bG3GgO9Hor3fQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            388 => 
            array (
                'id' => 889,
                'font_id' => 386,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/kanit/v1/ogN5dFD1r4BfxNV4Nb-TXfesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            389 => 
            array (
                'id' => 890,
                'font_id' => 387,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/kantumruy/v3/ERRwQE0WG5uanaZWmOFXNi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            390 => 
            array (
                'id' => 891,
                'font_id' => 387,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/kantumruy/v3/kQfXNYElQxr5dS8FyjD39Q.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            391 => 
            array (
                'id' => 892,
                'font_id' => 387,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/kantumruy/v3/gie_zErpGf_rNzs920C2Ji3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            392 => 
            array (
                'id' => 893,
                'font_id' => 388,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/karla/v5/78UgGRwJFkhqaoFimqoKpQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            393 => 
            array (
                'id' => 894,
                'font_id' => 388,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/karla/v5/51UBKly9RQOnOkj95ZwEFw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            394 => 
            array (
                'id' => 895,
                'font_id' => 388,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/karla/v5/JS501sZLxZ4zraLQdncOUA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            395 => 
            array (
                'id' => 896,
                'font_id' => 388,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/karla/v5/3YDyi09gQjCRh-5-SVhTTvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            396 => 
            array (
                'id' => 897,
                'font_id' => 389,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/karma/v5/lH6ijJnguWR2Sz7tEl6MQQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            397 => 
            array (
                'id' => 898,
                'font_id' => 389,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/karma/v5/wvqTxAGBUrTqU0urTEoPIw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            398 => 
            array (
                'id' => 899,
                'font_id' => 389,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/karma/v5/9YGjxi6Hcvz2Kh-rzO_cAw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            399 => 
            array (
                'id' => 900,
                'font_id' => 389,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/karma/v5/h_CVzXXtqSxjfS2sIwaejA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            400 => 
            array (
                'id' => 901,
                'font_id' => 389,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/karma/v5/smuSM08oApsQPPVYbHd1CA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            401 => 
            array (
                'id' => 902,
                'font_id' => 390,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/katibeh/v2/Q-SA43uWR2uu3wBIvedotA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            402 => 
            array (
                'id' => 903,
                'font_id' => 391,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/kaushanscript/v5/qx1LSqts-NtiKcLw4N03IBnpV0hQCek3EmWnCPrvGRM.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            403 => 
            array (
                'id' => 904,
                'font_id' => 392,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/kavivanar/v1/VLDrdUtF1irKFc8rFWgDaw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            404 => 
            array (
                'id' => 905,
                'font_id' => 393,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/kavoon/v5/382m-6baKXqJFQjEgobt6Q.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            405 => 
            array (
                'id' => 906,
                'font_id' => 394,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/kdamthmor/v3/otCdP6UU-VBIrBfVDWBQJ_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            406 => 
            array (
                'id' => 907,
                'font_id' => 395,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/keaniaone/v4/PACrDKZWngXzgo-ucl6buvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            407 => 
            array (
                'id' => 908,
                'font_id' => 396,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/kellyslab/v6/F_2oS1e9XdYx1MAi8XEVefesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            408 => 
            array (
                'id' => 909,
                'font_id' => 397,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/kenia/v8/OLM9-XfITK9PsTLKbGBrwg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            409 => 
            array (
                'id' => 910,
                'font_id' => 398,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/khand/v4/072zRl4OU9Pinjjkg174LA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            410 => 
            array (
                'id' => 911,
                'font_id' => 398,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/khand/v4/HdLdTNFqNIDGJZl1ZEj84w.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            411 => 
            array (
                'id' => 912,
                'font_id' => 398,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/khand/v4/46_p-SqtuMe56nxQdteWxg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            412 => 
            array (
                'id' => 913,
                'font_id' => 398,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/khand/v4/zggGWYIiPJyMTgkfxP_kaA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            413 => 
            array (
                'id' => 914,
                'font_id' => 398,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/khand/v4/0I0UWaN-X5QBmfexpXKhqg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            414 => 
            array (
                'id' => 915,
                'font_id' => 399,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/khmer/v9/vWaBJIbaQuBNz02ALIKJ3A.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            415 => 
            array (
                'id' => 916,
                'font_id' => 400,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/khula/v1/_1LySU5Upq-sc4OZ1b_GIw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            416 => 
            array (
                'id' => 917,
                'font_id' => 400,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/khula/v1/izcPIFyCSd16XI1Ak_Wk7Q.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            417 => 
            array (
                'id' => 918,
                'font_id' => 400,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/khula/v1/4ZH86Hce-aeFDaedTnbkbg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            418 => 
            array (
                'id' => 919,
                'font_id' => 400,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/khula/v1/UGVExGl-Jjs-YPpGv-MZ6w.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            419 => 
            array (
                'id' => 920,
                'font_id' => 400,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/khula/v1/Sccp_oOo8FWgbx5smie7xQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            420 => 
            array (
                'id' => 921,
                'font_id' => 401,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/kiteone/v4/8ojWmgUc97m0f_i6sTqLoQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            421 => 
            array (
                'id' => 922,
                'font_id' => 402,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/knewave/v5/KGHM4XWr4iKnBMqzZLkPBg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            422 => 
            array (
                'id' => 923,
                'font_id' => 403,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/kottaone/v4/AB2Q7hVw6niJYDgLvFXu5w.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            423 => 
            array (
                'id' => 924,
                'font_id' => 404,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/koulen/v10/AAYOK8RSRO7FTskTzFuzNw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            424 => 
            array (
                'id' => 925,
                'font_id' => 405,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/kranky/v6/C8dxxTS99-fZ84vWk8SDrg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            425 => 
            array (
                'id' => 926,
                'font_id' => 406,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/kreon/v9/HKtJRiq5C2zbq5N1IX32sA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            426 => 
            array (
                'id' => 927,
                'font_id' => 406,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/kreon/v9/zA_IZt0u0S3cvHJu-n1oEg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            427 => 
            array (
                'id' => 928,
                'font_id' => 406,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/kreon/v9/jh0dSmaPodjxISiblIUTkw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            428 => 
            array (
                'id' => 929,
                'font_id' => 407,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/kristi/v7/aRsgBQrkQkMlu4UPSnJyOQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            429 => 
            array (
                'id' => 930,
                'font_id' => 408,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/kronaone/v4/zcQj4ljqTo166AdourlF9w.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            430 => 
            array (
                'id' => 931,
                'font_id' => 409,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/kumarone/v1/YmcJD6Wky1clGYY5OD-BkQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            431 => 
            array (
                'id' => 932,
                'font_id' => 410,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/kumaroneoutline/v1/hnQF47H-55qiLAGgq7C3QyxhoCTLJoiJ-y-zew8F8j0.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            432 => 
            array (
                'id' => 933,
                'font_id' => 411,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/kurale/v2/rxeyIcvQlT4XAWwNbXFCfw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            433 => 
            array (
                'id' => 934,
                'font_id' => 412,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/labelleaurore/v7/Irdbc4ASuUoWDjd_Wc3md123K2iuuhwZgaKapkyRTY8.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            434 => 
            array (
                'id' => 935,
                'font_id' => 413,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/laila/v2/bLbIVEZF3IWSZ-in72GJvA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            435 => 
            array (
                'id' => 936,
                'font_id' => 413,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/laila/v2/6iYor3edprH7360qtBGoag.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            436 => 
            array (
                'id' => 937,
                'font_id' => 413,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/laila/v2/tkf8VtFvW9g3VsxQCA6WOQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            437 => 
            array (
                'id' => 938,
                'font_id' => 413,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/laila/v2/3EMP2L6JRQ4GaHIxCldCeA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            438 => 
            array (
                'id' => 939,
                'font_id' => 413,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/laila/v2/R7P4z1xjcjecmjZ9GyhqHQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            439 => 
            array (
                'id' => 940,
                'font_id' => 414,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/lakkireddy/v3/Q5EpFa91FjW37t0FCnedaKCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            440 => 
            array (
                'id' => 941,
                'font_id' => 415,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/lalezar/v1/k4_MPf09PGmL7oyGdPKwcg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            441 => 
            array (
                'id' => 942,
                'font_id' => 416,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/lancelot/v6/XMT7T_oo_MQUGAnU2v-sdA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            442 => 
            array (
                'id' => 943,
                'font_id' => 417,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/lateef/v10/PAsKCgi1qc7XPwvzo_I-DQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            443 => 
            array (
                'id' => 944,
                'font_id' => 418,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/lato/v13/Upp-ka9rLQmHYCsFgwL-eg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            444 => 
            array (
                'id' => 945,
                'font_id' => 418,
                'variant' => '100italic',
                'link' => 'http://fonts.gstatic.com/s/lato/v13/zLegi10uS_9-fnUDISl0KA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            445 => 
            array (
                'id' => 946,
                'font_id' => 418,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/lato/v13/Ja02qOppOVq9jeRjWekbHg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            446 => 
            array (
                'id' => 947,
                'font_id' => 418,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/lato/v13/dVebFcn7EV7wAKwgYestUg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            447 => 
            array (
                'id' => 948,
                'font_id' => 418,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/lato/v13/h7rISIcQapZBpei-sXwIwg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            448 => 
            array (
                'id' => 949,
                'font_id' => 418,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/lato/v13/P_dJOFJylV3A870UIOtr0w.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            449 => 
            array (
                'id' => 950,
                'font_id' => 418,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/lato/v13/iX_QxBBZLhNj5JHlTzHQzg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            450 => 
            array (
                'id' => 951,
                'font_id' => 418,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/lato/v13/WFcZakHrrCKeUJxHA4T_gw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            451 => 
            array (
                'id' => 952,
                'font_id' => 418,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/lato/v13/8TPEV6NbYWZlNsXjbYVv7w.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            452 => 
            array (
                'id' => 953,
                'font_id' => 418,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/lato/v13/draWperrI7n2xi35Cl08fA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            453 => 
            array (
                'id' => 954,
                'font_id' => 419,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/leaguescript/v7/wnRFLvfabWK_DauqppD6vSeUSrabuTpOsMEiRLtKwk0.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            454 => 
            array (
                'id' => 955,
                'font_id' => 420,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/leckerlione/v7/S2Y_iLrItTu8kIJTkS7DrC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            455 => 
            array (
                'id' => 956,
                'font_id' => 421,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ledger/v4/G432jp-tahOfWHbCYkI0jw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            456 => 
            array (
                'id' => 957,
                'font_id' => 422,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/lekton/v7/r483JYmxf5PjIm4jVAm8Yg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            457 => 
            array (
                'id' => 958,
                'font_id' => 422,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/lekton/v7/_UbDIPBA1wDqSbhp-OED7A.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            458 => 
            array (
                'id' => 959,
                'font_id' => 422,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/lekton/v7/WZw-uL8WTkx3SBVfTlevXQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            459 => 
            array (
                'id' => 960,
                'font_id' => 423,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/lemon/v5/wed1nNu4LNSu-3RoRVUhUw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            460 => 
            array (
                'id' => 961,
                'font_id' => 424,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/lemonada/v2/uM3MufQOcwGHuruj4TsXiqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            461 => 
            array (
                'id' => 962,
                'font_id' => 424,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/lemonada/v2/pkzws3AUXmaaAzOi7aydSQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            462 => 
            array (
                'id' => 963,
                'font_id' => 424,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/lemonada/v2/9Vd4MNKsOxNyLzlfTXdKLqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            463 => 
            array (
                'id' => 964,
                'font_id' => 424,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/lemonada/v2/9jKcm4hRI511-Dy7FFfQ3aCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            464 => 
            array (
                'id' => 965,
                'font_id' => 425,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/librebaskerville/v4/pR0sBQVcY0JZc_ciXjFsKyyZRYCSvpCzQKuMWnP5NDY.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            465 => 
            array (
                'id' => 966,
                'font_id' => 425,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/librebaskerville/v4/QHIOz1iKF3bIEzRdDFaf5QnhapNS5Oi8FPrBRDLbsW4.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            466 => 
            array (
                'id' => 967,
                'font_id' => 425,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/librebaskerville/v4/kH7K4InNTm7mmOXXjrA5v-xuswJKUVpBRfYFpz0W3Iw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            467 => 
            array (
                'id' => 968,
                'font_id' => 426,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/librefranklin/v1/zrsyK9EytLQ07oRM9IZIsX6Zf0VB_l-7q6pFtcZSRCs.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            468 => 
            array (
                'id' => 969,
                'font_id' => 426,
                'variant' => '100italic',
                'link' => 'http://fonts.gstatic.com/s/librefranklin/v1/LHzsuUmxr4UY-IoiG8pRK4gsWNE1DYiT_eIOcNe2Au4.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            469 => 
            array (
                'id' => 970,
                'font_id' => 426,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/librefranklin/v1/1_DGDtljMiPWFs5rl_p0yCwKTB4uIbnDXE2hyxZaFPY.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            470 => 
            array (
                'id' => 971,
                'font_id' => 426,
                'variant' => '200italic',
                'link' => 'http://fonts.gstatic.com/s/librefranklin/v1/7_V210XP3LBEtEwiCTqho0lu1sSkaQaYEjN61aJ3i1I.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            471 => 
            array (
                'id' => 972,
                'font_id' => 426,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/librefranklin/v1/1_DGDtljMiPWFs5rl_p0yMhKJW3W9-339CFS_Lie1us.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            472 => 
            array (
                'id' => 973,
                'font_id' => 426,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/librefranklin/v1/7_V210XP3LBEtEwiCTqho14je5cfhxzx5bEvSaoyQQI.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            473 => 
            array (
                'id' => 974,
                'font_id' => 426,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/librefranklin/v1/PFwjf3aDdAQPvNKUrT3U7_fSnedoLXQQjURyDxluu8g.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            474 => 
            array (
                'id' => 975,
                'font_id' => 426,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/librefranklin/v1/zrsyK9EytLQ07oRM9IZIsX5kKxjpQfTpnFf2SrDLxlg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            475 => 
            array (
                'id' => 976,
                'font_id' => 426,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/librefranklin/v1/1_DGDtljMiPWFs5rl_p0yMBjwrbmxH6gp8HgxjPD8qo.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            476 => 
            array (
                'id' => 977,
                'font_id' => 426,
                'variant' => '500italic',
                'link' => 'http://fonts.gstatic.com/s/librefranklin/v1/7_V210XP3LBEtEwiCTqho5VcuOW5XbZIr02vW37iuvg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            477 => 
            array (
                'id' => 978,
                'font_id' => 426,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/librefranklin/v1/1_DGDtljMiPWFs5rl_p0yORt4MKdIUjA60qLK3wI2m8.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            478 => 
            array (
                'id' => 979,
                'font_id' => 426,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/librefranklin/v1/7_V210XP3LBEtEwiCTqhowNPRgU5g4Xymf9hgRWrbNs.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            479 => 
            array (
                'id' => 980,
                'font_id' => 426,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/librefranklin/v1/1_DGDtljMiPWFs5rl_p0yEnStGWSv3WdwjmyyI8xc7Q.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            480 => 
            array (
                'id' => 981,
                'font_id' => 426,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/librefranklin/v1/7_V210XP3LBEtEwiCTqhow7kn3RFjf4gfwsdsBE-Rf4.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            481 => 
            array (
                'id' => 982,
                'font_id' => 426,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/librefranklin/v1/1_DGDtljMiPWFs5rl_p0yKltwG0cydF-uC1kFVv1hts.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            482 => 
            array (
                'id' => 983,
                'font_id' => 426,
                'variant' => '800italic',
                'link' => 'http://fonts.gstatic.com/s/librefranklin/v1/7_V210XP3LBEtEwiCTqho80d7u0uHUbaRkK-cNyim1w.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            483 => 
            array (
                'id' => 984,
                'font_id' => 426,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/librefranklin/v1/1_DGDtljMiPWFs5rl_p0yF7duMYIKwoQ5QsTL00fobw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            484 => 
            array (
                'id' => 985,
                'font_id' => 426,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/librefranklin/v1/7_V210XP3LBEtEwiCTqho0THpHUXJVnEwH4tSjkF0wg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            485 => 
            array (
                'id' => 986,
                'font_id' => 427,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/lifesavers/v6/g49cUDk4Y1P0G5NMkMAm7qCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            486 => 
            array (
                'id' => 987,
                'font_id' => 427,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/lifesavers/v6/THQKqChyYUm97rNPVFdGGXe1Pd76Vl7zRpE7NLJQ7XU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            487 => 
            array (
                'id' => 988,
                'font_id' => 428,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/lilitaone/v4/vTxJQjbNV6BCBHx8sGDCVvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            488 => 
            array (
                'id' => 989,
                'font_id' => 429,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/lilyscriptone/v4/uPWsLVW8uiXqIBnE8ZwGPDjVlsJB_M_Q_LtZxsoxvlw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            489 => 
            array (
                'id' => 990,
                'font_id' => 430,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/limelight/v7/5dTfN6igsXjLjOy8QQShcg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            490 => 
            array (
                'id' => 991,
                'font_id' => 431,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/lindenhill/v6/UgsC0txqd-E1yjvjutwm_KCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            491 => 
            array (
                'id' => 992,
                'font_id' => 431,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/lindenhill/v6/OcS3bZcu8vJvIDH8Zic83keOrDcLawS7-ssYqLr2Xp4.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            492 => 
            array (
                'id' => 993,
                'font_id' => 432,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/lobster/v18/9LpJGtNuM1D8FAZ2BkJH2Q.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            493 => 
            array (
                'id' => 994,
                'font_id' => 433,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/lobstertwo/v9/xb9aY4w9ceh8JRzobID1naCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            494 => 
            array (
                'id' => 995,
                'font_id' => 433,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/lobstertwo/v9/Ul_16MSbfayQv1I4QhLEoEeOrDcLawS7-ssYqLr2Xp4.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            495 => 
            array (
                'id' => 996,
                'font_id' => 433,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/lobstertwo/v9/bmdxOflBqMqjEC0-kGsIiHe1Pd76Vl7zRpE7NLJQ7XU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            496 => 
            array (
                'id' => 997,
                'font_id' => 433,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/lobstertwo/v9/LEkN2_no_6kFvRfiBZ8xpM_zJjSACmk0BRPxQqhnNLU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            497 => 
            array (
                'id' => 998,
                'font_id' => 434,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/londrinaoutline/v5/lls08GOa1eT74p072l1AWJmp8DTZ6iHear7UV05iykg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            498 => 
            array (
                'id' => 999,
                'font_id' => 435,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/londrinashadow/v4/dNYuzPS_7eYgXFJBzMoKdbw6Z3rVA5KDSi7aQxS92Nk.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            499 => 
            array (
                'id' => 1000,
                'font_id' => 436,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/londrinasketch/v4/p7Ai06aT1Ycp_D2fyE3z69d6z_uhFGnpCOifUY1fJQo.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
        ));
        \DB::table('font_variants')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'font_id' => 437,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/londrinasolid/v4/yysorIEiYSBb0ylZjg791MR125CwGqh8XBqkBzea0LA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            1 => 
            array (
                'id' => 1002,
                'font_id' => 438,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/lora/v10/aXJ7KVIGcejEy1abawZazg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            2 => 
            array (
                'id' => 1003,
                'font_id' => 438,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/lora/v10/AN2EZaj2tFRpyveuNn9BOg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            3 => 
            array (
                'id' => 1004,
                'font_id' => 438,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/lora/v10/enKND5SfzQKkggBA_VnT1A.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            4 => 
            array (
                'id' => 1005,
                'font_id' => 438,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/lora/v10/ivs9j3kYU65pR9QD9YFdzQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            5 => 
            array (
                'id' => 1006,
                'font_id' => 439,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/loveyalikeasister/v7/LzkxWS-af0Br2Sk_YgSJY-ad1xEP8DQfgfY8MH9aBUg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            6 => 
            array (
                'id' => 1007,
                'font_id' => 440,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/lovedbytheking/v6/wg03xD4cWigj4YDufLBSr8io2AFEwwMpu7y5KyiyAJc.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            7 => 
            array (
                'id' => 1008,
                'font_id' => 441,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/loversquarrel/v4/gipdZ8b7pKb89MzQLAtJHLHLxci2ElvNEmOB303HLk0.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            8 => 
            array (
                'id' => 1009,
                'font_id' => 442,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/luckiestguy/v6/5718gH8nDy3hFVihOpkY5C3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            9 => 
            array (
                'id' => 1010,
                'font_id' => 443,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/lusitana/v4/l1h9VDomkwbdzbPdmLcUIw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            10 => 
            array (
                'id' => 1011,
                'font_id' => 443,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/lusitana/v4/GWtZyUsONxgkdl3Mc1P7FKCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            11 => 
            array (
                'id' => 1012,
                'font_id' => 444,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/lustria/v4/gXAk0s4ai0X-TAOhYzZd1w.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            12 => 
            array (
                'id' => 1013,
                'font_id' => 445,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/macondo/v5/G6yPNUscRPQ8ufBXs_8yRQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            13 => 
            array (
                'id' => 1014,
                'font_id' => 446,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/macondoswashcaps/v4/SsSR706z-MlvEH7_LS6JAPkkgYRHs6GSG949m-K6x2k.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            14 => 
            array (
                'id' => 1015,
                'font_id' => 447,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/mada/v1/P46fye2TPh4fVwALgHSXCA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            15 => 
            array (
                'id' => 1016,
                'font_id' => 447,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/mada/v1/io_zUrt5o943T_q45OHLWQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            16 => 
            array (
                'id' => 1017,
                'font_id' => 447,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/mada/v1/PhhDsBi34sP0LptbpS9m6w.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            17 => 
            array (
                'id' => 1018,
                'font_id' => 447,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/mada/v1/aCyc9Kc3rOJLL6fV9VfptA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            18 => 
            array (
                'id' => 1019,
                'font_id' => 448,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/magra/v4/hoZ13bwCXBxuGZqAudgc5A.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            19 => 
            array (
                'id' => 1020,
                'font_id' => 448,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/magra/v4/6fOM5sq5cIn8D0RjX8Lztw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            20 => 
            array (
                'id' => 1021,
                'font_id' => 449,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/maidenorange/v6/ZhKIA2SPisEwdhW7g0RUWojjx0o0jr6fNXxPgYh_a8Q.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            21 => 
            array (
                'id' => 1022,
                'font_id' => 450,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/maitree/v1/JTlrRs3bVPV4i05cUIx_z_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            22 => 
            array (
                'id' => 1023,
                'font_id' => 450,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/maitree/v1/rEGdABAOaqCHggl37mkWjfesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            23 => 
            array (
                'id' => 1024,
                'font_id' => 450,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/maitree/v1/SpKVJkAjDAYOr1VkdSRspA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            24 => 
            array (
                'id' => 1025,
                'font_id' => 450,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/maitree/v1/2VHD7TXjRhN4Xu74SEPGdvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            25 => 
            array (
                'id' => 1026,
                'font_id' => 450,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/maitree/v1/uuazDnPwt30gW3cKsG-e0_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            26 => 
            array (
                'id' => 1027,
                'font_id' => 450,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/maitree/v1/cnHhc9fphsL3q-pistN3IPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            27 => 
            array (
                'id' => 1028,
                'font_id' => 451,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/mako/v7/z5zSLmfPlv1uTVAdmJBLXg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            28 => 
            array (
                'id' => 1029,
                'font_id' => 452,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/mallanna/v4/krCTa-CfMbtxqF0689CbuQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            29 => 
            array (
                'id' => 1030,
                'font_id' => 453,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/mandali/v4/0lF8yJ7fkyjXuqtSi5bWbQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            30 => 
            array (
                'id' => 1031,
                'font_id' => 454,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/marcellus/v4/UjiLZzumxWC9whJ86UtaYw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            31 => 
            array (
                'id' => 1032,
                'font_id' => 455,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/marcellussc/v4/_jugwxhkkynrvsfrxVx8gS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            32 => 
            array (
                'id' => 1033,
                'font_id' => 456,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/marckscript/v7/O_D1NAZVOFOobLbVtW3bci3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            33 => 
            array (
                'id' => 1034,
                'font_id' => 457,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/margarine/v5/DJnJwIrcO_cGkjSzY3MERw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            34 => 
            array (
                'id' => 1035,
                'font_id' => 458,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/markoone/v6/hpP7j861sOAco43iDc4n4w.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            35 => 
            array (
                'id' => 1036,
                'font_id' => 459,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/marmelad/v6/jI0_FBlSOIRLL0ePWOhOwQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            36 => 
            array (
                'id' => 1037,
                'font_id' => 460,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/martel/v1/_wfGdswZbat7P4tupHLA1w.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            37 => 
            array (
                'id' => 1038,
                'font_id' => 460,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/martel/v1/SghoV2F2VPdVU3P0a4fa9w.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            38 => 
            array (
                'id' => 1039,
                'font_id' => 460,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/martel/v1/9ALu5czkaaf5zsYk6GJEnQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            39 => 
            array (
                'id' => 1040,
                'font_id' => 460,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/martel/v1/Kt9uPhH1PvUwuZ5Y6zuAMQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            40 => 
            array (
                'id' => 1041,
                'font_id' => 460,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/martel/v1/4OzIiKB5wE36xXL2U0vzWQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            41 => 
            array (
                'id' => 1042,
                'font_id' => 460,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/martel/v1/RVF8drcQoRkRL7l_ZkpTlQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            42 => 
            array (
                'id' => 1043,
                'font_id' => 460,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/martel/v1/iS0YUpFJoiLRlnyl40rpEA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            43 => 
            array (
                'id' => 1044,
                'font_id' => 461,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/martelsans/v2/7ajme85aKKx_SCWF59ImQEnzyIngrzGjGh22wPb6cGM.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            44 => 
            array (
                'id' => 1045,
                'font_id' => 461,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/martelsans/v2/7ajme85aKKx_SCWF59ImQC9-WlPSxbfiI49GsXo3q0g.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            45 => 
            array (
                'id' => 1046,
                'font_id' => 461,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/martelsans/v2/91c8DPDZncMc0RFfhmc2RqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            46 => 
            array (
                'id' => 1047,
                'font_id' => 461,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/martelsans/v2/7ajme85aKKx_SCWF59ImQJZ7xm-Bj30Bj2KNdXDzSZg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            47 => 
            array (
                'id' => 1048,
                'font_id' => 461,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/martelsans/v2/7ajme85aKKx_SCWF59ImQHe1Pd76Vl7zRpE7NLJQ7XU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            48 => 
            array (
                'id' => 1049,
                'font_id' => 461,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/martelsans/v2/7ajme85aKKx_SCWF59ImQA89PwPrYLaRFJ-HNCU9NbA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            49 => 
            array (
                'id' => 1050,
                'font_id' => 461,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/martelsans/v2/7ajme85aKKx_SCWF59ImQCenaqEuufTBk9XMKnKmgDA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            50 => 
            array (
                'id' => 1051,
                'font_id' => 462,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/marvel/v6/Fg1dO8tWVb-MlyqhsbXEkg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            51 => 
            array (
                'id' => 1052,
                'font_id' => 462,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/marvel/v6/HzyjFB-oR5usrc7Lxz9g8w.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            52 => 
            array (
                'id' => 1053,
                'font_id' => 462,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/marvel/v6/WrHDBL1RupWGo2UcdgxB3Q.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            53 => 
            array (
                'id' => 1054,
                'font_id' => 462,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/marvel/v6/Gzf5NT09Y6xskdQRj2kz1qCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            54 => 
            array (
                'id' => 1055,
                'font_id' => 463,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/mate/v5/ooFviPcJ6hZP5bAE71Cawg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            55 => 
            array (
                'id' => 1056,
                'font_id' => 463,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/mate/v5/5XwW6_cbisGvCX5qmNiqfA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            56 => 
            array (
                'id' => 1057,
                'font_id' => 464,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/matesc/v5/-YkIT2TZoPZF6pawKzDpWw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            57 => 
            array (
                'id' => 1058,
                'font_id' => 465,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/mavenpro/v8/sqPJIFG4gqsjl-0q_46Gbw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            58 => 
            array (
                'id' => 1059,
                'font_id' => 465,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/mavenpro/v8/SQVfzoJBbj9t3aVcmbspRi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            59 => 
            array (
                'id' => 1060,
                'font_id' => 465,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/mavenpro/v8/uDssvmXgp7Nj3i336k_dSi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            60 => 
            array (
                'id' => 1061,
                'font_id' => 465,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/mavenpro/v8/-91TwiFzqeL1F7Kh91APwS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            61 => 
            array (
                'id' => 1062,
                'font_id' => 466,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/mclaren/v4/OprvTGxaiINBKW_1_U0eoQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            62 => 
            array (
                'id' => 1063,
                'font_id' => 467,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/meddon/v9/f8zJO98uu2EtSj9p7ci9RA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            63 => 
            array (
                'id' => 1064,
                'font_id' => 468,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/medievalsharp/v8/85X_PjV6tftJ0-rX7KYQkOe45sJkivqprK7VkUlzfg0.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            64 => 
            array (
                'id' => 1065,
                'font_id' => 469,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/medulaone/v6/AasPgDQak81dsTGQHc5zUPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            65 => 
            array (
                'id' => 1066,
                'font_id' => 470,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/meerainimai/v1/fWbdJc2ZVZnWCi06NRCxDy3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            66 => 
            array (
                'id' => 1067,
                'font_id' => 471,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/megrim/v7/e-9jVUC9lv1zxaFQARuftw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            67 => 
            array (
                'id' => 1068,
                'font_id' => 472,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/meiescript/v4/oTIWE5MmPye-rCyVp_6KEqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            68 => 
            array (
                'id' => 1069,
                'font_id' => 473,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/merienda/v4/MYY6Og1qZlOQtPW2G95Y3A.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            69 => 
            array (
                'id' => 1070,
                'font_id' => 473,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/merienda/v4/GlwcvRLlgiVE2MBFQ4r0sKCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            70 => 
            array (
                'id' => 1071,
                'font_id' => 474,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/meriendaone/v7/bCA-uDdUx6nTO8SjzCLXvS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            71 => 
            array (
                'id' => 1072,
                'font_id' => 475,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/merriweather/v15/ZvcMqxEwPfh2qDWBPxn6nqcQoVhARpoaILP7amxE_8g.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            72 => 
            array (
                'id' => 1073,
                'font_id' => 475,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/merriweather/v15/EYh7Vl4ywhowqULgRdYwICna0FLWfcB-J_SAYmcAXaI.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            73 => 
            array (
                'id' => 1074,
                'font_id' => 475,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/merriweather/v15/RFda8w1V0eDZheqfcyQ4EC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            74 => 
            array (
                'id' => 1075,
                'font_id' => 475,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/merriweather/v15/So5lHxHT37p2SS4-t60SlPMZXuCXbOrAvx5R0IT5Oyo.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            75 => 
            array (
                'id' => 1076,
                'font_id' => 475,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/merriweather/v15/ZvcMqxEwPfh2qDWBPxn6nkD2ttfZwueP-QU272T9-k4.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            76 => 
            array (
                'id' => 1077,
                'font_id' => 475,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/merriweather/v15/EYh7Vl4ywhowqULgRdYwIPAs9-1nE9qOqhChW0m4nDE.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            77 => 
            array (
                'id' => 1078,
                'font_id' => 475,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/merriweather/v15/ZvcMqxEwPfh2qDWBPxn6nqObDOjC3UL77puoeHsE3fw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            78 => 
            array (
                'id' => 1079,
                'font_id' => 475,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/merriweather/v15/EYh7Vl4ywhowqULgRdYwIBd0_s6jQr9r5s5OZYvtzBY.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            79 => 
            array (
                'id' => 1080,
                'font_id' => 476,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/merriweathersans/v8/6LmGj5dOJopQKEkt88Gowan5N8K-_DP0e9e_v51obXQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            80 => 
            array (
                'id' => 1081,
                'font_id' => 476,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/merriweathersans/v8/nAqt4hiqwq3tzCecpgPmVdytE4nGXk2hYD5nJ740tBw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            81 => 
            array (
                'id' => 1082,
                'font_id' => 476,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/merriweathersans/v8/AKu1CjQ4qnV8MUltkAX3sOAj_ty82iuwwDTNEYXGiyQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            82 => 
            array (
                'id' => 1083,
                'font_id' => 476,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/merriweathersans/v8/3Mz4hOHzs2npRMG3B1ascZ32VBCoA_HLsn85tSWZmdo.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            83 => 
            array (
                'id' => 1084,
                'font_id' => 476,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/merriweathersans/v8/6LmGj5dOJopQKEkt88GowbqxG25nQNOioCZSK4sU-CA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            84 => 
            array (
                'id' => 1085,
                'font_id' => 476,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/merriweathersans/v8/nAqt4hiqwq3tzCecpgPmVbuqAJxizi8Dk_SK5et7kMg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            85 => 
            array (
                'id' => 1086,
                'font_id' => 476,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/merriweathersans/v8/6LmGj5dOJopQKEkt88GowYufzO2zUYSj5LqoJ3UGkco.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            86 => 
            array (
                'id' => 1087,
                'font_id' => 476,
                'variant' => '800italic',
                'link' => 'http://fonts.gstatic.com/s/merriweathersans/v8/nAqt4hiqwq3tzCecpgPmVdDmPrYMy3aZO4LmnZsxTQw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            87 => 
            array (
                'id' => 1088,
                'font_id' => 477,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/metal/v9/zA3UOP13ooQcxjv04BZX5g.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            88 => 
            array (
                'id' => 1089,
                'font_id' => 478,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/metalmania/v6/isriV_rAUgj6bPWPN6l9QKCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            89 => 
            array (
                'id' => 1090,
                'font_id' => 479,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/metamorphous/v6/wGqUKXRinIYggz-BTRU9ei3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            90 => 
            array (
                'id' => 1091,
                'font_id' => 480,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/metrophobic/v9/SaglWZWCrrv_D17u1i4v_aCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            91 => 
            array (
                'id' => 1092,
                'font_id' => 481,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/michroma/v7/0c2XrW81_QsiKV8T9thumA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            92 => 
            array (
                'id' => 1093,
                'font_id' => 482,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/milonga/v4/dzNdIUSTGFmy2ahovDRcWg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            93 => 
            array (
                'id' => 1094,
                'font_id' => 483,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/miltonian/v10/Z4HrYZyqm0BnNNzcCUfzoQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            94 => 
            array (
                'id' => 1095,
                'font_id' => 484,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/miltoniantattoo/v11/1oU_8OGYwW46eh02YHydn2uk0YtI6thZkz1Hmh-odwg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            95 => 
            array (
                'id' => 1096,
                'font_id' => 485,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/miniver/v5/4yTQohOH_cWKRS5laRFhYg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            96 => 
            array (
                'id' => 1097,
                'font_id' => 486,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/miriamlibre/v1/Ljtpu8zR5iJWmlN3Faba5S3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            97 => 
            array (
                'id' => 1098,
                'font_id' => 486,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/miriamlibre/v1/FLc0J-Gdn8ynDWUkeeesAED2ttfZwueP-QU272T9-k4.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            98 => 
            array (
                'id' => 1099,
                'font_id' => 487,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/mirza/v1/8oe36Xbgj9BMSLJBaZ8VAQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            99 => 
            array (
                'id' => 1100,
                'font_id' => 487,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/mirza/v1/dT3HbZoBCx1xbU7PnFEFyQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            100 => 
            array (
                'id' => 1101,
                'font_id' => 487,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/mirza/v1/6T4uh2Zti9P6Eq_gbAYvVQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            101 => 
            array (
                'id' => 1102,
                'font_id' => 487,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/mirza/v1/b47CZDHoZdhnplmDpZymFw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            102 => 
            array (
                'id' => 1103,
                'font_id' => 488,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/missfajardose/v6/WcXjlQPKn6nBfr8LY3ktNu6rPKfVZo7L2bERcf0BDns.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            103 => 
            array (
                'id' => 1104,
                'font_id' => 489,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/mitr/v1/GCzZRAhweqJhxrmM0bPztg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            104 => 
            array (
                'id' => 1105,
                'font_id' => 489,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/mitr/v1/A61rQ_y9i8Ja__oFN7KxiQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            105 => 
            array (
                'id' => 1106,
                'font_id' => 489,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/mitr/v1/vKMd72X2iT4iBo5GvdCa_A.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            106 => 
            array (
                'id' => 1107,
                'font_id' => 489,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/mitr/v1/r_Z6yrJJ0zmkGAqxqjlLRg.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            107 => 
            array (
                'id' => 1108,
                'font_id' => 489,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/mitr/v1/42l66tb_XMxM97GKatU9Ng.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            108 => 
            array (
                'id' => 1109,
                'font_id' => 489,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/mitr/v1/V-V7Rul5HOZ651R4Tml2Lw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            109 => 
            array (
                'id' => 1110,
                'font_id' => 490,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/modak/v2/lMsN0QIKid-pCPvL0hH4nw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            110 => 
            array (
                'id' => 1111,
                'font_id' => 491,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/modernantiqua/v6/8qX_tr6Xzy4t9fvZDXPkh6rFJ4O13IHVxZbM6yoslpo.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            111 => 
            array (
                'id' => 1112,
                'font_id' => 492,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/mogra/v1/gIxQBn9PseDaI0D4FnOiBQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            112 => 
            array (
                'id' => 1113,
                'font_id' => 493,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/molengo/v7/jcjgeGuzv83I55AzOTpXNQ.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            113 => 
            array (
                'id' => 1114,
                'font_id' => 494,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/molle/v4/9XTdCsjPXifLqo5et-YoGA.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            114 => 
            array (
                'id' => 1115,
                'font_id' => 495,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/monda/v6/qFMHZ9zvR6B_gnoIgosPrw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            115 => 
            array (
                'id' => 1116,
                'font_id' => 495,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/monda/v6/EVOzZUyc_j1w2GuTgTAW1g.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            116 => 
            array (
                'id' => 1117,
                'font_id' => 496,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/monofett/v6/C6K5L799Rgxzg2brgOaqAw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            117 => 
            array (
                'id' => 1118,
                'font_id' => 497,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/monoton/v6/aCz8ja_bE4dg-7agSvExdw.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            118 => 
            array (
                'id' => 1119,
                'font_id' => 498,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/monsieurladoulaise/v5/IMAdMj6Eq9jZ46CPctFtMKP61oAqTJXlx5ZVOBmcPdM.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            119 => 
            array (
                'id' => 1120,
                'font_id' => 499,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/montaga/v4/PwTwUboiD-M4-mFjZfJs2A.ttf',
                'created_at' => '2017-05-11 09:09:15',
                'updated_at' => '2017-05-11 09:09:15',
            ),
            120 => 
            array (
                'id' => 1121,
                'font_id' => 500,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/montez/v6/kx58rLOWQQLGFM4pDHv5Ng.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            121 => 
            array (
                'id' => 1122,
                'font_id' => 501,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/montserrat/v10/CdKWaRAal2Bxq9mORLKRRS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            122 => 
            array (
                'id' => 1123,
                'font_id' => 501,
                'variant' => '100italic',
                'link' => 'http://fonts.gstatic.com/s/montserrat/v10/1809Y0aW9bpFOPXsQTFwf8SVQ0giZ-l_NELu3lgGyYw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            123 => 
            array (
                'id' => 1124,
                'font_id' => 501,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/montserrat/v10/eWRmKHdPNWGn_iFyeEYja2eudeTO44zf-ht3k-KNzwg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            124 => 
            array (
                'id' => 1125,
                'font_id' => 501,
                'variant' => '200italic',
                'link' => 'http://fonts.gstatic.com/s/montserrat/v10/zhwB3-BAdyKDf0geWr9FtwQm5IkIgNCodAfQb4ovl18.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            125 => 
            array (
                'id' => 1126,
                'font_id' => 501,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/montserrat/v10/IVeH6A3MiFyaSEiudUMXE0eOrDcLawS7-ssYqLr2Xp4.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            126 => 
            array (
                'id' => 1127,
                'font_id' => 501,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/montserrat/v10/zhwB3-BAdyKDf0geWr9Ft6cQoVhARpoaILP7amxE_8g.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            127 => 
            array (
                'id' => 1128,
                'font_id' => 501,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/montserrat/v10/Kqy6-utIpx_30Xzecmeo8_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            128 => 
            array (
                'id' => 1129,
                'font_id' => 501,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/montserrat/v10/-iqwlckIhsmvkx0N6rwPmi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            129 => 
            array (
                'id' => 1130,
                'font_id' => 501,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/montserrat/v10/BYPM-GE291ZjIXBWrtCwepp-63r6doWhTEbsfBIRJ7A.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            130 => 
            array (
                'id' => 1131,
                'font_id' => 501,
                'variant' => '500italic',
                'link' => 'http://fonts.gstatic.com/s/montserrat/v10/zhwB3-BAdyKDf0geWr9Ft5MQuUSAwdHsY8ov_6tk1oA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            131 => 
            array (
                'id' => 1132,
                'font_id' => 501,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/montserrat/v10/q2OIMsAtXEkOulLQVdSl0_pTEJqju4Hz1txDWij77d4.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            132 => 
            array (
                'id' => 1133,
                'font_id' => 501,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/montserrat/v10/zhwB3-BAdyKDf0geWr9Ft2v8CylhIUtwUiYO7Z2wXbE.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            133 => 
            array (
                'id' => 1134,
                'font_id' => 501,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/montserrat/v10/IQHow_FEYlDC4Gzy_m8fcgJKKGfqHaYFsRG-T3ceEVo.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            134 => 
            array (
                'id' => 1135,
                'font_id' => 501,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/montserrat/v10/zhwB3-BAdyKDf0geWr9Ft0D2ttfZwueP-QU272T9-k4.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            135 => 
            array (
                'id' => 1136,
                'font_id' => 501,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/montserrat/v10/H8_7oktkjVeeX06kbAvc0Kk3bhPBSBJ0bSJQ6acL-0g.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            136 => 
            array (
                'id' => 1137,
                'font_id' => 501,
                'variant' => '800italic',
                'link' => 'http://fonts.gstatic.com/s/montserrat/v10/zhwB3-BAdyKDf0geWr9Ft_qsay_1ZmRGmC8pVRdIfAg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            137 => 
            array (
                'id' => 1138,
                'font_id' => 501,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/montserrat/v10/aEu-9ATAroJ1iN4zmQ55Bp0EAVxt0G0biEntp43Qt6E.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            138 => 
            array (
                'id' => 1139,
                'font_id' => 501,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/montserrat/v10/zhwB3-BAdyKDf0geWr9Ft6ObDOjC3UL77puoeHsE3fw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            139 => 
            array (
                'id' => 1140,
                'font_id' => 502,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/montserratalternates/v7/oqQkJ7FUCF9bJw9oNhwpltmjtuu7N1WAenNR-bns1HU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            140 => 
            array (
                'id' => 1141,
                'font_id' => 502,
                'variant' => '100italic',
                'link' => 'http://fonts.gstatic.com/s/montserratalternates/v7/3-rFIqHz_U7TAmWg7RcpLzob9T7De5a9EmE7cInrugI.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            141 => 
            array (
                'id' => 1142,
                'font_id' => 502,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/montserratalternates/v7/YENqOGAVzwIHjYNjmKuAZrWzJnWnTj1NV2WEtcqW8F0.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            142 => 
            array (
                'id' => 1143,
                'font_id' => 502,
                'variant' => '200italic',
                'link' => 'http://fonts.gstatic.com/s/montserratalternates/v7/AXzeb8s80Wvg1Wkw1cVlATSYqyfLbk4Wyr4DDJHtpar3rGVtsTkPsbDajuO5ueQw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            143 => 
            array (
                'id' => 1144,
                'font_id' => 502,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/montserratalternates/v7/YENqOGAVzwIHjYNjmKuAZoE9JAqK0NEjKMCIBssy61I.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            144 => 
            array (
                'id' => 1145,
                'font_id' => 502,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/montserratalternates/v7/AXzeb8s80Wvg1Wkw1cVlAX0Ksah31OxOJpZejHsaXyX3rGVtsTkPsbDajuO5ueQw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            145 => 
            array (
                'id' => 1146,
                'font_id' => 502,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/montserratalternates/v7/z2n1Sjxk9souK3HCtdHuklPuEVRGaG9GCQnmM16YWq0.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            146 => 
            array (
                'id' => 1147,
                'font_id' => 502,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/montserratalternates/v7/oqQkJ7FUCF9bJw9oNhwpliKJhVBtn9MynHVBPiS2bkc.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            147 => 
            array (
                'id' => 1148,
                'font_id' => 502,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/montserratalternates/v7/YENqOGAVzwIHjYNjmKuAZkLT1bEhWimL9YDPt6og4ow.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            148 => 
            array (
                'id' => 1149,
                'font_id' => 502,
                'variant' => '500italic',
                'link' => 'http://fonts.gstatic.com/s/montserratalternates/v7/AXzeb8s80Wvg1Wkw1cVlAbq1yxDcj1rkVNifBkzxbjz3rGVtsTkPsbDajuO5ueQw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            149 => 
            array (
                'id' => 1150,
                'font_id' => 502,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/montserratalternates/v7/YENqOGAVzwIHjYNjmKuAZlzJBia8MVcXq42LmpYhWMY.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            150 => 
            array (
                'id' => 1151,
                'font_id' => 502,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/montserratalternates/v7/AXzeb8s80Wvg1Wkw1cVlAdzE96w6fJMDbKTKS-tt8C_3rGVtsTkPsbDajuO5ueQw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            151 => 
            array (
                'id' => 1152,
                'font_id' => 502,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/montserratalternates/v7/YENqOGAVzwIHjYNjmKuAZpeqBKvsAhm-s2I4RVSXFfc.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            152 => 
            array (
                'id' => 1153,
                'font_id' => 502,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/montserratalternates/v7/AXzeb8s80Wvg1Wkw1cVlAVeYZ2vsofSkgKvS_YtoH2b3rGVtsTkPsbDajuO5ueQw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            153 => 
            array (
                'id' => 1154,
                'font_id' => 502,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/montserratalternates/v7/YENqOGAVzwIHjYNjmKuAZkG2AOFTt9I0BIk1fL0aWvI.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            154 => 
            array (
                'id' => 1155,
                'font_id' => 502,
                'variant' => '800italic',
                'link' => 'http://fonts.gstatic.com/s/montserratalternates/v7/AXzeb8s80Wvg1Wkw1cVlAbM_h-OHjcDf1XWbHqSgRF73rGVtsTkPsbDajuO5ueQw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            155 => 
            array (
                'id' => 1156,
                'font_id' => 502,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/montserratalternates/v7/YENqOGAVzwIHjYNjmKuAZqjHT7NF_e7B-hWEBx2SqPI.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            156 => 
            array (
                'id' => 1157,
                'font_id' => 502,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/montserratalternates/v7/AXzeb8s80Wvg1Wkw1cVlAX18ggQg0KDcknRVFWguAv_3rGVtsTkPsbDajuO5ueQw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            157 => 
            array (
                'id' => 1158,
                'font_id' => 503,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/montserratsubrayada/v4/nzoCWCz0e9c7Mr2Gl8bbgrJymm6ilkk9f0nDA_sC_qk.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            158 => 
            array (
                'id' => 1159,
                'font_id' => 503,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/montserratsubrayada/v4/wf-IKpsHcfm0C9uaz9IeGJvEcF1LWArDbGWgKZSH9go.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            159 => 
            array (
                'id' => 1160,
                'font_id' => 504,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/moul/v8/Kb0ALQnfyXawP1a_P_gpTQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            160 => 
            array (
                'id' => 1161,
                'font_id' => 505,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/moulpali/v9/diD74BprGhmVkJoerKmrKA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            161 => 
            array (
                'id' => 1162,
                'font_id' => 506,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/mountainsofchristmas/v8/dVGBFPwd6G44IWDbQtPew2Auds3jz1Fxb61CgfaGDr4.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            162 => 
            array (
                'id' => 1163,
                'font_id' => 506,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/mountainsofchristmas/v8/PymufKtHszoLrY0uiAYKNM9cPTbSBTrQyTa5TWAe3vE.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            163 => 
            array (
                'id' => 1164,
                'font_id' => 507,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/mousememoirs/v4/NBFaaJFux_j0AQbAsW3QeH8f0n03UdmQgF_CLvNR2vg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            164 => 
            array (
                'id' => 1165,
                'font_id' => 508,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/mrbedfort/v5/81bGgHTRikLs_puEGshl7_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            165 => 
            array (
                'id' => 1166,
                'font_id' => 509,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/mrdafoe/v5/s32Q1S6ZkT7EaX53mUirvQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            166 => 
            array (
                'id' => 1167,
                'font_id' => 510,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/mrdehaviland/v5/fD8y4L6PJ4vqDk7z8Y8e27v4lrhng1lzu7-weKO6cw8.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            167 => 
            array (
                'id' => 1168,
                'font_id' => 511,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/mrssaintdelafield/v4/vuWagfFT7bj9lFtZOFBwmjHMBelqWf3tJeGyts2SmKU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            168 => 
            array (
                'id' => 1169,
                'font_id' => 512,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/mrssheppards/v5/2WFsWMV3VUeCz6UVH7UjCn8f0n03UdmQgF_CLvNR2vg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            169 => 
            array (
                'id' => 1170,
                'font_id' => 513,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/muktavaani/v1/X9qyC4rK_D9w1AvSv0mw_0nzyIngrzGjGh22wPb6cGM.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            170 => 
            array (
                'id' => 1171,
                'font_id' => 513,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/muktavaani/v1/X9qyC4rK_D9w1AvSv0mw_y9-WlPSxbfiI49GsXo3q0g.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            171 => 
            array (
                'id' => 1172,
                'font_id' => 513,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/muktavaani/v1/knS0wTOFNOwOD4CZrdHIxKCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            172 => 
            array (
                'id' => 1173,
                'font_id' => 513,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/muktavaani/v1/X9qyC4rK_D9w1AvSv0mw_8CNfqCYlB_eIx7H1TVXe60.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            173 => 
            array (
                'id' => 1174,
                'font_id' => 513,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/muktavaani/v1/X9qyC4rK_D9w1AvSv0mw_5Z7xm-Bj30Bj2KNdXDzSZg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            174 => 
            array (
                'id' => 1175,
                'font_id' => 513,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/muktavaani/v1/X9qyC4rK_D9w1AvSv0mw_3e1Pd76Vl7zRpE7NLJQ7XU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            175 => 
            array (
                'id' => 1176,
                'font_id' => 513,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/muktavaani/v1/X9qyC4rK_D9w1AvSv0mw_w89PwPrYLaRFJ-HNCU9NbA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            176 => 
            array (
                'id' => 1177,
                'font_id' => 514,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/muli/v10/59Vi0Dm-YSaaKxRiSKrm0w.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            177 => 
            array (
                'id' => 1178,
                'font_id' => 514,
                'variant' => '200italic',
                'link' => 'http://fonts.gstatic.com/s/muli/v10/ZV7FMcmPA9u6IXfXrqyybA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            178 => 
            array (
                'id' => 1179,
                'font_id' => 514,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/muli/v10/VJw4F3ZHRAZ7Hmg3nQu5YQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            179 => 
            array (
                'id' => 1180,
                'font_id' => 514,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/muli/v10/s-NKMCru8HiyjEt0ZDoBoA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            180 => 
            array (
                'id' => 1181,
                'font_id' => 514,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/muli/v10/KJiP6KznxbALQgfJcDdPAw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            181 => 
            array (
                'id' => 1182,
                'font_id' => 514,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/muli/v10/Cg0K_IWANs9xkNoxV7H1_w.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            182 => 
            array (
                'id' => 1183,
                'font_id' => 514,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/muli/v10/O4zVJyE-wzb2CQjcHkw-Xg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            183 => 
            array (
                'id' => 1184,
                'font_id' => 514,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/muli/v10/xasdEbMzFtnmERn70-CN-A.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            184 => 
            array (
                'id' => 1185,
                'font_id' => 514,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/muli/v10/n0UfHdYd8jlanPB1sJ0WYQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            185 => 
            array (
                'id' => 1186,
                'font_id' => 514,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/muli/v10/9vQS_qOVbbe4j6LkPjCG1g.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            186 => 
            array (
                'id' => 1187,
                'font_id' => 514,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/muli/v10/QdHPibssQgzNly7JkF7wdw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            187 => 
            array (
                'id' => 1188,
                'font_id' => 514,
                'variant' => '800italic',
                'link' => 'http://fonts.gstatic.com/s/muli/v10/jbD7XyPvLT1oJBLbEcQmmg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            188 => 
            array (
                'id' => 1189,
                'font_id' => 514,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/muli/v10/RcGfHFZUYLsFj9c3uAb4Gg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            189 => 
            array (
                'id' => 1190,
                'font_id' => 514,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/muli/v10/r4hqeWwjqEvTncJsq5KCSg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            190 => 
            array (
                'id' => 1191,
                'font_id' => 515,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/mysteryquest/v4/467jJvg0c7HgucvBB9PLDyeUSrabuTpOsMEiRLtKwk0.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            191 => 
            array (
                'id' => 1192,
                'font_id' => 516,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ntr/v4/e7H4ZLtGfVOYyOupo6T12g.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            192 => 
            array (
                'id' => 1193,
                'font_id' => 517,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/neucha/v8/bijdhB-TzQdtpl0ykhGh4Q.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            193 => 
            array (
                'id' => 1194,
                'font_id' => 518,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/neuton/v9/DA3Mkew3XqSkPpi1f4tJow.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            194 => 
            array (
                'id' => 1195,
                'font_id' => 518,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/neuton/v9/xrc_aZ2hx-gdeV0mlY8Vww.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            195 => 
            array (
                'id' => 1196,
                'font_id' => 518,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/neuton/v9/9R-MGIOQUdjAVeB6nE6PcQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            196 => 
            array (
                'id' => 1197,
                'font_id' => 518,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/neuton/v9/uVMT3JOB5BNFi3lgPp6kEg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            197 => 
            array (
                'id' => 1198,
                'font_id' => 518,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/neuton/v9/gnWpkWY7DirkKiovncYrfg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            198 => 
            array (
                'id' => 1199,
                'font_id' => 518,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/neuton/v9/XPzBQV4lY6enLxQG9cF1jw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            199 => 
            array (
                'id' => 1200,
                'font_id' => 519,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/newrocker/v5/EFUWzHJedEkpW399zYOHofesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            200 => 
            array (
                'id' => 1201,
                'font_id' => 520,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/newscycle/v13/xyMAr8VfiUzIOvS1abHJO_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            201 => 
            array (
                'id' => 1202,
                'font_id' => 520,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/newscycle/v13/G28Ny31cr5orMqEQy6ljtwJKKGfqHaYFsRG-T3ceEVo.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            202 => 
            array (
                'id' => 1203,
                'font_id' => 521,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/niconne/v6/ZA-mFw2QNXodx5y7kfELBg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            203 => 
            array (
                'id' => 1204,
                'font_id' => 522,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/nixieone/v7/h6kQfmzm0Shdnp3eswRaqQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            204 => 
            array (
                'id' => 1205,
                'font_id' => 523,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/nobile/v7/lC_lPi1ddtN38iXTCRh6ow.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            205 => 
            array (
                'id' => 1206,
                'font_id' => 523,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/nobile/v7/vGmrpKzWQQSrb-PR6FWBIA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            206 => 
            array (
                'id' => 1207,
                'font_id' => 523,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/nobile/v7/9p6M-Yrg_r_QPmSD1skrOg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            207 => 
            array (
                'id' => 1208,
                'font_id' => 523,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/nobile/v7/oQ1eYPaXV638N03KvsNvyKCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            208 => 
            array (
                'id' => 1209,
                'font_id' => 524,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/nokora/v9/dRyz1JfnyKPNaRcBNX9F9A.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            209 => 
            array (
                'id' => 1210,
                'font_id' => 524,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/nokora/v9/QMqqa4QEOhQpiig3cAPmbQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            210 => 
            array (
                'id' => 1211,
                'font_id' => 525,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/norican/v4/SHnSqhYAWG5sZTWcPzEHig.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            211 => 
            array (
                'id' => 1212,
                'font_id' => 526,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/nosifer/v5/7eJGoIuHRrtcG00j6CptSA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            212 => 
            array (
                'id' => 1213,
                'font_id' => 527,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/nothingyoucoulddo/v6/jpk1K3jbJoyoK0XKaSyQAf-TpkXjXYGWiJZAEtBRjPU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            213 => 
            array (
                'id' => 1214,
                'font_id' => 528,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/noticiatext/v6/wdyV6x3eKpdeUPQ7BJ5uUC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            214 => 
            array (
                'id' => 1215,
                'font_id' => 528,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/noticiatext/v6/dAuxVpkYE_Q_IwIm6elsKPMZXuCXbOrAvx5R0IT5Oyo.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            215 => 
            array (
                'id' => 1216,
                'font_id' => 528,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/noticiatext/v6/pEko-RqEtp45bE2P80AAKUD2ttfZwueP-QU272T9-k4.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            216 => 
            array (
                'id' => 1217,
                'font_id' => 528,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/noticiatext/v6/-rQ7V8ARjf28_b7kRa0JuvAs9-1nE9qOqhChW0m4nDE.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            217 => 
            array (
                'id' => 1218,
                'font_id' => 529,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/notosans/v6/0Ue9FiUJwVhi4NGfHJS5uA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            218 => 
            array (
                'id' => 1219,
                'font_id' => 529,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/notosans/v6/dLcNKMgJ1H5RVoZFraDz0qCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            219 => 
            array (
                'id' => 1220,
                'font_id' => 529,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/notosans/v6/PIbvSEyHEdL91QLOQRnZ1y3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            220 => 
            array (
                'id' => 1221,
                'font_id' => 529,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/notosans/v6/9Z3uUWMRR7crzm1TjRicDne1Pd76Vl7zRpE7NLJQ7XU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            221 => 
            array (
                'id' => 1222,
                'font_id' => 530,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/notoserif/v4/zW6mc7bC1CWw8dH0yxY8JfesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            222 => 
            array (
                'id' => 1223,
                'font_id' => 530,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/notoserif/v4/HQXBIwLHsOJCNEQeX9kNzy3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            223 => 
            array (
                'id' => 1224,
                'font_id' => 530,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/notoserif/v4/lJAvZoKA5NttpPc9yc6lPQJKKGfqHaYFsRG-T3ceEVo.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            224 => 
            array (
                'id' => 1225,
                'font_id' => 530,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/notoserif/v4/Wreg0Be4tcFGM2t6VWytvED2ttfZwueP-QU272T9-k4.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            225 => 
            array (
                'id' => 1226,
                'font_id' => 531,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/novacut/v8/6q12jWcBvj0KO2cMRP97tA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            226 => 
            array (
                'id' => 1227,
                'font_id' => 532,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/novaflat/v8/pK7a0CoGzI684qe_XSHBqQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            227 => 
            array (
                'id' => 1228,
                'font_id' => 533,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/novamono/v7/6-SChr5ZIaaasJFBkgrLNw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            228 => 
            array (
                'id' => 1229,
                'font_id' => 534,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/novaoval/v8/VuukVpKP8BwUf8o9W5LYQQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            229 => 
            array (
                'id' => 1230,
                'font_id' => 535,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/novaround/v8/7-cK3Ari_8XYYFgVMxVhDvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            230 => 
            array (
                'id' => 1231,
                'font_id' => 536,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/novascript/v8/dEvxQDLgx1M1TKY-NmBWYaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            231 => 
            array (
                'id' => 1232,
                'font_id' => 537,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/novaslim/v8/rPYXC81_VL2EW-4CzBX65g.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            232 => 
            array (
                'id' => 1233,
                'font_id' => 538,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/novasquare/v8/BcBzXoaDzYX78rquGXVuSqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            233 => 
            array (
                'id' => 1234,
                'font_id' => 539,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/numans/v6/g5snI2p6OEjjTNmTHyBdiQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            234 => 
            array (
                'id' => 1235,
                'font_id' => 540,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/nunito/v8/xtWPP_05UbsUNY9Kdgwt_w.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            235 => 
            array (
                'id' => 1236,
                'font_id' => 540,
                'variant' => '200italic',
                'link' => 'http://fonts.gstatic.com/s/nunito/v8/EbyHzRpZ3jx6yC2BjZCsQqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            236 => 
            array (
                'id' => 1237,
                'font_id' => 540,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/nunito/v8/zXQvrWBJqUooM7Xv98MrQw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            237 => 
            array (
                'id' => 1238,
                'font_id' => 540,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/nunito/v8/4BFBxBQCHZfUELdybShAwKCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            238 => 
            array (
                'id' => 1239,
                'font_id' => 540,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/nunito/v8/ySZTeT3IuzJj0GK6uGpbBg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            239 => 
            array (
                'id' => 1240,
                'font_id' => 540,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/nunito/v8/NZNWFpgsC6hUUE2c03CLoQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            240 => 
            array (
                'id' => 1241,
                'font_id' => 540,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/nunito/v8/B4-BGlpEzQ4WP-D3Zi0PRQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            241 => 
            array (
                'id' => 1242,
                'font_id' => 540,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/nunito/v8/7SyYp8NBEeMV4V7MAKJnZ6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            242 => 
            array (
                'id' => 1243,
                'font_id' => 540,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/nunito/v8/aEdlqgMuYbpe4U3TnqOQMA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            243 => 
            array (
                'id' => 1244,
                'font_id' => 540,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/nunito/v8/4cHctiCFYmTpv-a6b6vYsKCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            244 => 
            array (
                'id' => 1245,
                'font_id' => 540,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/nunito/v8/GtGHSZwowZF8a9-GAsh20A.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            245 => 
            array (
                'id' => 1246,
                'font_id' => 540,
                'variant' => '800italic',
                'link' => 'http://fonts.gstatic.com/s/nunito/v8/2TsLUs-EFIKsriUeVTl6nKCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            246 => 
            array (
                'id' => 1247,
                'font_id' => 540,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/nunito/v8/QVvFcvcPoFKH9Q71V4WsjQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            247 => 
            array (
                'id' => 1248,
                'font_id' => 540,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/nunito/v8/cIxOb6Vw6BqF9ZoAlenp3qCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            248 => 
            array (
                'id' => 1249,
                'font_id' => 541,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/nunitosans/v2/XvilrNtBQKRMeiqSPzEFHUnzyIngrzGjGh22wPb6cGM.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            249 => 
            array (
                'id' => 1250,
                'font_id' => 541,
                'variant' => '200italic',
                'link' => 'http://fonts.gstatic.com/s/nunitosans/v2/ORCQQ32ldzJ6bFTh_zXqV02YN_dW5g9CXH6iztHQiR4.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            250 => 
            array (
                'id' => 1251,
                'font_id' => 541,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/nunitosans/v2/XvilrNtBQKRMeiqSPzEFHS9-WlPSxbfiI49GsXo3q0g.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            251 => 
            array (
                'id' => 1252,
                'font_id' => 541,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/nunitosans/v2/ORCQQ32ldzJ6bFTh_zXqV2o9eWDfYYxG3A176Zl7aIg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            252 => 
            array (
                'id' => 1253,
                'font_id' => 541,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/nunitosans/v2/qDS9UelBO44ppiSawKNcIKCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            253 => 
            array (
                'id' => 1254,
                'font_id' => 541,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/nunitosans/v2/w9sy7IRyDFLWACdltghEwUeOrDcLawS7-ssYqLr2Xp4.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            254 => 
            array (
                'id' => 1255,
                'font_id' => 541,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/nunitosans/v2/XvilrNtBQKRMeiqSPzEFHZZ7xm-Bj30Bj2KNdXDzSZg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            255 => 
            array (
                'id' => 1256,
                'font_id' => 541,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/nunitosans/v2/ORCQQ32ldzJ6bFTh_zXqV5e6We3S5L6hKLscKpOkmlo.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            256 => 
            array (
                'id' => 1257,
                'font_id' => 541,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/nunitosans/v2/XvilrNtBQKRMeiqSPzEFHXe1Pd76Vl7zRpE7NLJQ7XU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            257 => 
            array (
                'id' => 1258,
                'font_id' => 541,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/nunitosans/v2/ORCQQ32ldzJ6bFTh_zXqV8_zJjSACmk0BRPxQqhnNLU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            258 => 
            array (
                'id' => 1259,
                'font_id' => 541,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/nunitosans/v2/XvilrNtBQKRMeiqSPzEFHQ89PwPrYLaRFJ-HNCU9NbA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            259 => 
            array (
                'id' => 1260,
                'font_id' => 541,
                'variant' => '800italic',
                'link' => 'http://fonts.gstatic.com/s/nunitosans/v2/ORCQQ32ldzJ6bFTh_zXqVyad_7rtf4IdDfsLVg-2OV4.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            260 => 
            array (
                'id' => 1261,
                'font_id' => 541,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/nunitosans/v2/XvilrNtBQKRMeiqSPzEFHSenaqEuufTBk9XMKnKmgDA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            261 => 
            array (
                'id' => 1262,
                'font_id' => 541,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/nunitosans/v2/ORCQQ32ldzJ6bFTh_zXqV0_yTOUGsoC54csJe1b-IRw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            262 => 
            array (
                'id' => 1263,
                'font_id' => 542,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/odormeanchey/v8/GK3E7EjPoBkeZhYshGFo0eVKG8sq4NyGgdteJLvqLDs.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            263 => 
            array (
                'id' => 1264,
                'font_id' => 543,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/offside/v4/v0C913SB8wqQUvcu1faUqw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            264 => 
            array (
                'id' => 1265,
                'font_id' => 544,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/oldstandardtt/v8/n6RTCDcIPWSE8UNBa4k-DLcB5jyhm1VsHs65c3QNDr0.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            265 => 
            array (
                'id' => 1266,
                'font_id' => 544,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/oldstandardtt/v8/QQT_AUSp4AV4dpJfIN7U5PWrQzeMtsHf8QsWQ2cZg3c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            266 => 
            array (
                'id' => 1267,
                'font_id' => 544,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/oldstandardtt/v8/5Ywdce7XEbTSbxs__4X1_HJqbZqK7TdZ58X80Q_Lw8Y.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            267 => 
            array (
                'id' => 1268,
                'font_id' => 545,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/oldenburg/v4/dqA_M_uoCVXZbCO-oKBTnQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            268 => 
            array (
                'id' => 1269,
                'font_id' => 546,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/oleoscript/v5/21stZcmPyzbQVXtmGegyqKCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            269 => 
            array (
                'id' => 1270,
                'font_id' => 546,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/oleoscript/v5/hudNQFKFl98JdNnlo363fne1Pd76Vl7zRpE7NLJQ7XU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            270 => 
            array (
                'id' => 1271,
                'font_id' => 547,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/oleoscriptswashcaps/v4/vdWhGqsBUAP-FF3NOYTe4iMF4kXAPemmyaDpMXQ31P0.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            271 => 
            array (
                'id' => 1272,
                'font_id' => 547,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/oleoscriptswashcaps/v4/HMO3ftxA9AU5floml9c755reFYaXZ4zuJXJ8fr8OO1g.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            272 => 
            array (
                'id' => 1273,
                'font_id' => 548,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            273 => 
            array (
                'id' => 1274,
                'font_id' => 548,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxi9-WlPSxbfiI49GsXo3q0g.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            274 => 
            array (
                'id' => 1275,
                'font_id' => 548,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/opensans/v13/IgZJs4-7SA1XX_edsoXWog.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            275 => 
            array (
                'id' => 1276,
                'font_id' => 548,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/opensans/v13/O4NhV7_qs9r9seTo7fnsVKCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            276 => 
            array (
                'id' => 1277,
                'font_id' => 548,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            277 => 
            array (
                'id' => 1278,
                'font_id' => 548,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxpZ7xm-Bj30Bj2KNdXDzSZg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            278 => 
            array (
                'id' => 1279,
                'font_id' => 548,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            279 => 
            array (
                'id' => 1280,
                'font_id' => 548,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxne1Pd76Vl7zRpE7NLJQ7XU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            280 => 
            array (
                'id' => 1281,
                'font_id' => 548,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/opensans/v13/EInbV5DfGHOiMmvb1Xr-hi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            281 => 
            array (
                'id' => 1282,
                'font_id' => 548,
                'variant' => '800italic',
                'link' => 'http://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxg89PwPrYLaRFJ-HNCU9NbA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            282 => 
            array (
                'id' => 1283,
                'font_id' => 549,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/opensanscondensed/v10/gk5FxslNkTTHtojXrkp-xEMwSSh38KQVJx4ABtsZTnA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            283 => 
            array (
                'id' => 1284,
                'font_id' => 549,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/opensanscondensed/v10/jIXlqT1WKafUSwj6s9AzV4_LkTZ_uhAwfmGJ084hlvM.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            284 => 
            array (
                'id' => 1285,
                'font_id' => 549,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/opensanscondensed/v10/gk5FxslNkTTHtojXrkp-xBEM87DM3yorPOrvA-vB930.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            285 => 
            array (
                'id' => 1286,
                'font_id' => 550,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/oranienbaum/v5/M98jYwCSn0PaFhXXgviCoaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            286 => 
            array (
                'id' => 1287,
                'font_id' => 551,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/orbitron/v7/DY8swouAZjR3RaUPRf0HDQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            287 => 
            array (
                'id' => 1288,
                'font_id' => 551,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/orbitron/v7/p-y_ffzMdo5JN_7ia0vYEqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            288 => 
            array (
                'id' => 1289,
                'font_id' => 551,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/orbitron/v7/PS9_6SLkY1Y6OgPO3APr6qCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            289 => 
            array (
                'id' => 1290,
                'font_id' => 551,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/orbitron/v7/2I3-8i9hT294TE_pyjy9SaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            290 => 
            array (
                'id' => 1291,
                'font_id' => 552,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/oregano/v4/UiLhqNixVv2EpjRoBG6axA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            291 => 
            array (
                'id' => 1292,
                'font_id' => 552,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/oregano/v4/_iwqGEht6XsAuEaCbYG64Q.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            292 => 
            array (
                'id' => 1293,
                'font_id' => 553,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/orienta/v4/_NKSk93mMs0xsqtfjCsB3Q.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            293 => 
            array (
                'id' => 1294,
                'font_id' => 554,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/originalsurfer/v5/gdHw6HpSIN4D6Xt7pi1-qIkEz33TDwAZczo_6fY7eg0.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            294 => 
            array (
                'id' => 1295,
                'font_id' => 555,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/oswald/v13/NFBt4e1rewQyDPftazXlBw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            295 => 
            array (
                'id' => 1296,
                'font_id' => 555,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/oswald/v13/y3tZpCdiRD4oNRRYFcAR5Q.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            296 => 
            array (
                'id' => 1297,
                'font_id' => 555,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/oswald/v13/uLEd2g2vJglLPfsBF91DCg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            297 => 
            array (
                'id' => 1298,
                'font_id' => 555,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/oswald/v13/wrHWShuZ7ELtrnx0cnkzXw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            298 => 
            array (
                'id' => 1299,
                'font_id' => 555,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/oswald/v13/JNlamLn5ALW8eKp46JLlQA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            299 => 
            array (
                'id' => 1300,
                'font_id' => 555,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/oswald/v13/7wj8ldV_5Ti37rHa0m1DDw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            300 => 
            array (
                'id' => 1301,
                'font_id' => 556,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/overtherainbow/v7/6gp-gkpI2kie2dHQQLM2jQBdxkZd83xOSx-PAQ2QmiI.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            301 => 
            array (
                'id' => 1302,
                'font_id' => 557,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/overlock/v5/Z8oYsGi88-E1cUB8YBFMAg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            302 => 
            array (
                'id' => 1303,
                'font_id' => 557,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/overlock/v5/rq6EacukHROOBrFrK_zF6_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            303 => 
            array (
                'id' => 1304,
                'font_id' => 557,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/overlock/v5/Fexr8SqXM8Bm_gEVUA7AKaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            304 => 
            array (
                'id' => 1305,
                'font_id' => 557,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/overlock/v5/wFWnYgeXKYBks6gEUwYnfAJKKGfqHaYFsRG-T3ceEVo.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            305 => 
            array (
                'id' => 1306,
                'font_id' => 557,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/overlock/v5/YPJCVTT8ZbG3899l_-KIGqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            306 => 
            array (
                'id' => 1307,
                'font_id' => 557,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/overlock/v5/iOZhxT2zlg7W5ij_lb-oDp0EAVxt0G0biEntp43Qt6E.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            307 => 
            array (
                'id' => 1308,
                'font_id' => 558,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/overlocksc/v5/8D7HYDsvS_g1GhBnlHzgzaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            308 => 
            array (
                'id' => 1309,
                'font_id' => 559,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/overpass/v1/ywiUWFAguOSxQn0FFeOdWPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            309 => 
            array (
                'id' => 1310,
                'font_id' => 559,
                'variant' => '100italic',
                'link' => 'http://fonts.gstatic.com/s/overpass/v1/thg-CA5nD5lyYWLwXbqXXi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            310 => 
            array (
                'id' => 1311,
                'font_id' => 559,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/overpass/v1/WrbWRQuVnXt_EslNm2vBt6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            311 => 
            array (
                'id' => 1312,
                'font_id' => 559,
                'variant' => '200italic',
                'link' => 'http://fonts.gstatic.com/s/overpass/v1/Eyj9nfhrJ71MmfPNEwqE02eudeTO44zf-ht3k-KNzwg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            312 => 
            array (
                'id' => 1313,
                'font_id' => 559,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/overpass/v1/nqDUqkXaOp0r1j0uaM5VUaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            313 => 
            array (
                'id' => 1314,
                'font_id' => 559,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/overpass/v1/R77XtXNe7WC4SXZBLWmy80eOrDcLawS7-ssYqLr2Xp4.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            314 => 
            array (
                'id' => 1315,
                'font_id' => 559,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/overpass/v1/1fNed5evrqtu4ZjkbTnCRw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            315 => 
            array (
                'id' => 1316,
                'font_id' => 559,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/overpass/v1/lG-Dpm66OH9lPHbYTnITSvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            316 => 
            array (
                'id' => 1317,
                'font_id' => 559,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/overpass/v1/-GUou309ST_HAHIhkHjkz6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            317 => 
            array (
                'id' => 1318,
                'font_id' => 559,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/overpass/v1/aPYi-s_WVz-zuU4TsgAEjvpTEJqju4Hz1txDWij77d4.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            318 => 
            array (
                'id' => 1319,
                'font_id' => 559,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/overpass/v1/sBTg-F6_A1NQLJPfW5I7Q6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            319 => 
            array (
                'id' => 1320,
                'font_id' => 559,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/overpass/v1/E5UsN4VY1e_Twk_bY6TpQAJKKGfqHaYFsRG-T3ceEVo.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            320 => 
            array (
                'id' => 1321,
                'font_id' => 559,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/overpass/v1/YeZIq305iGwGCyZbaiEbVqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            321 => 
            array (
                'id' => 1322,
                'font_id' => 559,
                'variant' => '800italic',
                'link' => 'http://fonts.gstatic.com/s/overpass/v1/j6xjlCEDoKw-D0Co-88A9Kk3bhPBSBJ0bSJQ6acL-0g.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            322 => 
            array (
                'id' => 1323,
                'font_id' => 559,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/overpass/v1/4lJ8BLdIYI_B9rFwoB4zO6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            323 => 
            array (
                'id' => 1324,
                'font_id' => 559,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/overpass/v1/SegM1mSQIRZG2pJwM_2Nm50EAVxt0G0biEntp43Qt6E.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            324 => 
            array (
                'id' => 1325,
                'font_id' => 560,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/overpassmono/v2/JEQ6tXkANEo2u0wZ-MTOPEW1P7_iUBn_wmH5B9p-CEw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            325 => 
            array (
                'id' => 1326,
                'font_id' => 560,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/overpassmono/v2/MarHoIqW2hy_po97b_wS9uV_5zh5b-_HiooIRUBwn1A.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            326 => 
            array (
                'id' => 1327,
                'font_id' => 560,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/overpassmono/v2/JEQ6tXkANEo2u0wZ-MTOPCvU6mrnWf1MVbTZ5LZwmOY.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            327 => 
            array (
                'id' => 1328,
                'font_id' => 560,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/overpassmono/v2/JEQ6tXkANEo2u0wZ-MTOPO-Cz_5MeePnXDAcLNWyBME.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            328 => 
            array (
                'id' => 1329,
                'font_id' => 561,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ovo/v7/mFg27dimu3s9t09qjCwB1g.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            329 => 
            array (
                'id' => 1330,
                'font_id' => 562,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/oxygen/v5/lZ31r0bR1Bzt_DfGZu1S8A.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            330 => 
            array (
                'id' => 1331,
                'font_id' => 562,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/oxygen/v5/uhoyAE7XlQL22abzQieHjw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            331 => 
            array (
                'id' => 1332,
                'font_id' => 562,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/oxygen/v5/yLqkmDwuNtt5pSqsJmhyrg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            332 => 
            array (
                'id' => 1333,
                'font_id' => 563,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/oxygenmono/v4/DigTu7k4b7OmM8ubt1Qza6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            333 => 
            array (
                'id' => 1334,
                'font_id' => 564,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ptmono/v4/QUbM8H9yJK5NhpQ0REO6Wg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            334 => 
            array (
                'id' => 1335,
                'font_id' => 565,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ptsans/v8/UFoEz2uiuMypUGZL1NKoeg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            335 => 
            array (
                'id' => 1336,
                'font_id' => 565,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/ptsans/v8/yls9EYWOd496wiu7qzfgNg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            336 => 
            array (
                'id' => 1337,
                'font_id' => 565,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/ptsans/v8/F51BEgHuR0tYHxF0bD4vwvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            337 => 
            array (
                'id' => 1338,
                'font_id' => 565,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/ptsans/v8/lILlYDvubYemzYzN7GbLkC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            338 => 
            array (
                'id' => 1339,
                'font_id' => 566,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ptsanscaption/v9/OXYTDOzBcXU8MTNBvBHeSW8by34Z3mUMtM-o4y-SHCY.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            339 => 
            array (
                'id' => 1340,
                'font_id' => 566,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/ptsanscaption/v9/Q-gJrFokeE7JydPpxASt25tc0eyfI4QDEsobEEpk_hA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            340 => 
            array (
                'id' => 1341,
                'font_id' => 567,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ptsansnarrow/v7/UyYrYy3ltEffJV9QueSi4ZTvAuddT2xDMbdz0mdLyZY.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            341 => 
            array (
                'id' => 1342,
                'font_id' => 567,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/ptsansnarrow/v7/Q_pTky3Sc3ubRibGToTAYsLtdzs3iyjn_YuT226ZsLU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            342 => 
            array (
                'id' => 1343,
                'font_id' => 568,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ptserif/v8/sAo427rn3-QL9sWCbMZXhA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            343 => 
            array (
                'id' => 1344,
                'font_id' => 568,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/ptserif/v8/9khWhKzhpkH0OkNnBKS3n_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            344 => 
            array (
                'id' => 1345,
                'font_id' => 568,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/ptserif/v8/kyZw18tqQ5if-_wpmxxOeKCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            345 => 
            array (
                'id' => 1346,
                'font_id' => 568,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/ptserif/v8/Foydq9xJp--nfYIx2TBz9QJKKGfqHaYFsRG-T3ceEVo.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            346 => 
            array (
                'id' => 1347,
                'font_id' => 569,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ptserifcaption/v8/7xkFOeTxxO1GMC1suOUYWVsRioCqs5fohhaYel24W3k.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            347 => 
            array (
                'id' => 1348,
                'font_id' => 569,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/ptserifcaption/v8/0kfPsmrmTSgiec7u_Wa0DB1mqvzPHelJwRcF_s_EUM0.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            348 => 
            array (
                'id' => 1349,
                'font_id' => 570,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/pacifico/v9/GIrpeRY1r5CzbfL8r182lw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            349 => 
            array (
                'id' => 1350,
                'font_id' => 571,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/padauk/v3/WdTk6igBu-qn4v8naF9hGQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            350 => 
            array (
                'id' => 1351,
                'font_id' => 571,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/padauk/v3/XUBO5k0emPIVnqCcQCcEpg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            351 => 
            array (
                'id' => 1352,
                'font_id' => 572,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/palanquin/v1/Hu0eGDVGK_g4saUFu6AK3KCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            352 => 
            array (
                'id' => 1353,
                'font_id' => 572,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/palanquin/v1/pqXYXD7-VI5ezTjeqQOcyC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            353 => 
            array (
                'id' => 1354,
                'font_id' => 572,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/palanquin/v1/c0-J5OCAagpFCKkKraz-Ey3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            354 => 
            array (
                'id' => 1355,
                'font_id' => 572,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/palanquin/v1/xCwBUoAEV0kzCDwerAZ0Aw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            355 => 
            array (
                'id' => 1356,
                'font_id' => 572,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/palanquin/v1/wLvvkEcZMKy95afLWh2EfC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            356 => 
            array (
                'id' => 1357,
                'font_id' => 572,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/palanquin/v1/405UIAv95_yZkCECrH6y-i3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            357 => 
            array (
                'id' => 1358,
                'font_id' => 572,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/palanquin/v1/-UtkePo3NFvxEN3rGCtTvi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            358 => 
            array (
                'id' => 1359,
                'font_id' => 573,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/palanquindark/v1/PamTqrrgbBh_M3702w39rOfChn3JSg5yz_Q_xmrKQN0.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            359 => 
            array (
                'id' => 1360,
                'font_id' => 573,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/palanquindark/v1/iXyBGf5UbFUu6BG8hOY-maMZTo-EwKMRQt3RWHocLi0.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            360 => 
            array (
                'id' => 1361,
                'font_id' => 573,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/palanquindark/v1/iXyBGf5UbFUu6BG8hOY-mVNxaunw8i4Gywrk2SigRnk.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            361 => 
            array (
                'id' => 1362,
                'font_id' => 573,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/palanquindark/v1/iXyBGf5UbFUu6BG8hOY-mWToair6W0TEE44XrlfKbiM.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            362 => 
            array (
                'id' => 1363,
                'font_id' => 574,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/pangolin/v1/i2W796ne6lveehHXs8AFGA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            363 => 
            array (
                'id' => 1364,
                'font_id' => 575,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/paprika/v4/b-VpyoRSieBdB5BPJVF8HQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            364 => 
            array (
                'id' => 1365,
                'font_id' => 576,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/parisienne/v4/TW74B5QISJNx9moxGlmJfvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            365 => 
            array (
                'id' => 1366,
                'font_id' => 577,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/passeroone/v8/Yc-7nH5deCCv9Ed0MMnAQqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            366 => 
            array (
                'id' => 1367,
                'font_id' => 578,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/passionone/v6/1UIK1tg3bKJ4J3o35M4heqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            367 => 
            array (
                'id' => 1368,
                'font_id' => 578,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/passionone/v6/feOcYDy2R-f3Ysy72PYJ2ne1Pd76Vl7zRpE7NLJQ7XU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            368 => 
            array (
                'id' => 1369,
                'font_id' => 578,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/passionone/v6/feOcYDy2R-f3Ysy72PYJ2ienaqEuufTBk9XMKnKmgDA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            369 => 
            array (
                'id' => 1370,
                'font_id' => 579,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/pathwaygothicone/v4/Lqv9ztoTUV8Q0FmQZzPqaA6A6xIYD7vYcYDop1i-K-c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            370 => 
            array (
                'id' => 1371,
                'font_id' => 580,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/patrickhand/v10/9BG3JJgt_HlF3NpEUehL0C3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            371 => 
            array (
                'id' => 1372,
                'font_id' => 581,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/patrickhandsc/v4/OYFWCgfCR-7uHIovjUZXsbAgSRh1LpJXlLfl8IbsmHg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            372 => 
            array (
                'id' => 1373,
                'font_id' => 582,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/pattaya/v1/sJEout1xdD7J8H-1H81pIQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            373 => 
            array (
                'id' => 1374,
                'font_id' => 583,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/patuaone/v6/njZwotTYjswR4qdhsW-kJw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            374 => 
            array (
                'id' => 1375,
                'font_id' => 584,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/pavanam/v1/C7yuEhNK5oftNLSL3I0bGw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            375 => 
            array (
                'id' => 1376,
                'font_id' => 585,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/paytoneone/v8/3WCxC7JAJjQHQVoIE0ZwvqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            376 => 
            array (
                'id' => 1377,
                'font_id' => 586,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/peddana/v4/zaSZuj_GhmC8AOTugOROnA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            377 => 
            array (
                'id' => 1378,
                'font_id' => 587,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/peralta/v4/cTJX5KEuc0GKRU9NXSm-8Q.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            378 => 
            array (
                'id' => 1379,
                'font_id' => 588,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/permanentmarker/v5/9vYsg5VgPHKK8SXYbf3sMol14xj5tdg9OHF8w4E7StQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            379 => 
            array (
                'id' => 1380,
                'font_id' => 589,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/petitformalscript/v4/OEZwr2-ovBsq2n3ACCKoEvVPl2Gjtxj0D6F7QLy1VQc.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            380 => 
            array (
                'id' => 1381,
                'font_id' => 590,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/petrona/v5/nnQwxlP6dhrGovYEFtemTg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            381 => 
            array (
                'id' => 1382,
                'font_id' => 591,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/philosopher/v8/oZLTrB9jmJsyV0u_T0TKEaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            382 => 
            array (
                'id' => 1383,
                'font_id' => 591,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/philosopher/v8/_9Hnc_gz9k7Qq6uKaeHKmUeOrDcLawS7-ssYqLr2Xp4.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            383 => 
            array (
                'id' => 1384,
                'font_id' => 591,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/philosopher/v8/napvkewXG9Gqby5vwGHICHe1Pd76Vl7zRpE7NLJQ7XU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            384 => 
            array (
                'id' => 1385,
                'font_id' => 591,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/philosopher/v8/PuKlryTcvTj7-qZWfLCFIM_zJjSACmk0BRPxQqhnNLU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            385 => 
            array (
                'id' => 1386,
                'font_id' => 592,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/piedra/v5/owf-AvEEyAj9LJ2tVZ_3Mw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            386 => 
            array (
                'id' => 1387,
                'font_id' => 593,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/pinyonscript/v6/TzghnhfCn7TuE73f-CBQ0CeUSrabuTpOsMEiRLtKwk0.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            387 => 
            array (
                'id' => 1388,
                'font_id' => 594,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/pirataone/v4/WnbD86B4vB2ckYcL7oxuhvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            388 => 
            array (
                'id' => 1389,
                'font_id' => 595,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/plaster/v8/O4QG9Z5116CXyfJdR9zxLw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            389 => 
            array (
                'id' => 1390,
                'font_id' => 596,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/play/v7/GWvfObW8LhtsOX333MCpBg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            390 => 
            array (
                'id' => 1391,
                'font_id' => 596,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/play/v7/crPhg6I0alLI-MpB3vW-zw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            391 => 
            array (
                'id' => 1392,
                'font_id' => 597,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/playball/v6/3hOFiQm_EUzycTpcN9uz4w.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            392 => 
            array (
                'id' => 1393,
                'font_id' => 598,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/playfairdisplay/v10/2NBgzUtEeyB-Xtpr9bm1CV6uyC_qD11hrFQ6EGgTJWI.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            393 => 
            array (
                'id' => 1394,
                'font_id' => 598,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/playfairdisplay/v10/9MkijrV-dEJ0-_NWV7E6NzMsbnvDNEBX25F5HWk9AhI.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            394 => 
            array (
                'id' => 1395,
                'font_id' => 598,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/playfairdisplay/v10/UC3ZEjagJi85gF9qFaBgICsv6SrURqJprbhH_C1Mw8w.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            395 => 
            array (
                'id' => 1396,
                'font_id' => 598,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/playfairdisplay/v10/n7G4PqJvFP2Kubl0VBLDECsYW3XoOVcYyYdp9NzzS9E.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            396 => 
            array (
                'id' => 1397,
                'font_id' => 598,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/playfairdisplay/v10/UC3ZEjagJi85gF9qFaBgIKqwMe2wjvZrAR44M0BJZ48.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            397 => 
            array (
                'id' => 1398,
                'font_id' => 598,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/playfairdisplay/v10/n7G4PqJvFP2Kubl0VBLDEC0JfJ4xmm7j1kL6D7mPxrA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            398 => 
            array (
                'id' => 1399,
                'font_id' => 599,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/playfairdisplaysc/v5/G0-tvBxd4eQRdwFKB8dRkcpjYTDWIvcAwAccqeW9uNM.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            399 => 
            array (
                'id' => 1400,
                'font_id' => 599,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/playfairdisplaysc/v5/myuYiFR-4NTrUT4w6TKls2klJsJYggW8rlNoTOTuau0.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            400 => 
            array (
                'id' => 1401,
                'font_id' => 599,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/playfairdisplaysc/v5/5ggqGkvWJU_TtW2W8cEubA-Amcyomnuy4WsCiPxGHjw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            401 => 
            array (
                'id' => 1402,
                'font_id' => 599,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/playfairdisplaysc/v5/6X0OQrQhEEnPo56RalREX4krgPi80XvBcbTwmz-rgmU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            402 => 
            array (
                'id' => 1403,
                'font_id' => 599,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/playfairdisplaysc/v5/5ggqGkvWJU_TtW2W8cEubKXL3C32k275YmX_AcBPZ7w.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            403 => 
            array (
                'id' => 1404,
                'font_id' => 599,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/playfairdisplaysc/v5/6X0OQrQhEEnPo56RalREX8Zag2q3ssKz8uH1RU4a9gs.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            404 => 
            array (
                'id' => 1405,
                'font_id' => 600,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/podkova/v10/eylljyGVfB8ZUQjYY3WZRQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            405 => 
            array (
                'id' => 1406,
                'font_id' => 600,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/podkova/v10/8MkhKmKhl0HgqBeKkV0pmvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            406 => 
            array (
                'id' => 1407,
                'font_id' => 600,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/podkova/v10/921xSzgq6uUBjPZXn2IH0PesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            407 => 
            array (
                'id' => 1408,
                'font_id' => 600,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/podkova/v10/SqW4aa8m_KVrOgYSydQ33vesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            408 => 
            array (
                'id' => 1409,
                'font_id' => 600,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/podkova/v10/ObfRYfRr58NtktZuAa1VhfesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            409 => 
            array (
                'id' => 1410,
                'font_id' => 601,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/poiretone/v4/dWcYed048E5gHGDIt8i1CPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            410 => 
            array (
                'id' => 1411,
                'font_id' => 602,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/pollerone/v6/dkctmDlTPcZ6boC8662RA_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            411 => 
            array (
                'id' => 1412,
                'font_id' => 603,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/poly/v7/bcMAuiacS2qkd54BcwW6_Q.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            412 => 
            array (
                'id' => 1413,
                'font_id' => 603,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/poly/v7/Zkx-eIlZSjKUrPGYhV5PeA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            413 => 
            array (
                'id' => 1414,
                'font_id' => 604,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/pompiere/v6/o_va2p9CD5JfmFohAkGZIA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            414 => 
            array (
                'id' => 1415,
                'font_id' => 605,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/pontanosans/v4/gTHiwyxi6S7iiHpqAoiE3C3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            415 => 
            array (
                'id' => 1416,
                'font_id' => 606,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/poppins/v1/VIeViZ2fPtYBt3B2fQZplvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            416 => 
            array (
                'id' => 1417,
                'font_id' => 606,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/poppins/v1/hlvAxH6aIdOjWlLzgm0jqg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            417 => 
            array (
                'id' => 1418,
                'font_id' => 606,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/poppins/v1/4WGKlFyjcmCFVl8pRsgZ9vesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            418 => 
            array (
                'id' => 1419,
                'font_id' => 606,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/poppins/v1/-zOABrCWORC3lyDh-ajNnPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            419 => 
            array (
                'id' => 1420,
                'font_id' => 606,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/poppins/v1/8JitanEsk5aDh7mDYs-fYfesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            420 => 
            array (
                'id' => 1421,
                'font_id' => 607,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/portlligatsans/v5/CUEdhRk7oC7up0p6t0g4P6mASEpx5X0ZpsuJOuvfOGA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            421 => 
            array (
                'id' => 1422,
                'font_id' => 608,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/portlligatslab/v5/CUEdhRk7oC7up0p6t0g4PxLSPACXvawUYCBEnHsOe30.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            422 => 
            array (
                'id' => 1423,
                'font_id' => 609,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/pragatinarrow/v2/HzG2TfC862qPNsZsV_djPpTvAuddT2xDMbdz0mdLyZY.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            423 => 
            array (
                'id' => 1424,
                'font_id' => 609,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/pragatinarrow/v2/DnSI1zRkc0CY-hI5SC3q3MLtdzs3iyjn_YuT226ZsLU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            424 => 
            array (
                'id' => 1425,
                'font_id' => 610,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/prata/v7/3gmx8r842loRRm9iQkCDGg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            425 => 
            array (
                'id' => 1426,
                'font_id' => 611,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/preahvihear/v8/82tDI-xTc53CxxOzEG4hDaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            426 => 
            array (
                'id' => 1427,
                'font_id' => 612,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/pressstart2p/v5/8Lg6LX8-ntOHUQnvQ0E7o1jfl3W46Sz5gOkEVhcFWF4.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            427 => 
            array (
                'id' => 1428,
                'font_id' => 613,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/pridi/v1/WvKJ-kflGuELyK4uQzpYIA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            428 => 
            array (
                'id' => 1429,
                'font_id' => 613,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/pridi/v1/Ihwk-OGVFS69PINILdqAjQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            429 => 
            array (
                'id' => 1430,
                'font_id' => 613,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/pridi/v1/Mau018Ghi7LJX7FkGYCZAQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            430 => 
            array (
                'id' => 1431,
                'font_id' => 613,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/pridi/v1/dPNOrMxU-HjLo-fvkFydsQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            431 => 
            array (
                'id' => 1432,
                'font_id' => 613,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/pridi/v1/J0i5OZxX07KC4mby5RjNbg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            432 => 
            array (
                'id' => 1433,
                'font_id' => 613,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/pridi/v1/UhCy4jDDJttTB8k8rtWadg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            433 => 
            array (
                'id' => 1434,
                'font_id' => 614,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/princesssofia/v4/8g5l8r9BM0t1QsXLTajDe-wjmA7ie-lFcByzHGRhCIg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            434 => 
            array (
                'id' => 1435,
                'font_id' => 615,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/prociono/v6/43ZYDHWogdFeNBWTl6ksmw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            435 => 
            array (
                'id' => 1436,
                'font_id' => 616,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/prompt/v1/ltjX-trOmfS-yKy_awt70g.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            436 => 
            array (
                'id' => 1437,
                'font_id' => 616,
                'variant' => '100italic',
                'link' => 'http://fonts.gstatic.com/s/prompt/v1/KvTeArBpVb-tA2mahV6Jk_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            437 => 
            array (
                'id' => 1438,
                'font_id' => 616,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/prompt/v1/MNB_CVkbfYHFMWX_UbDC2Q.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            438 => 
            array (
                'id' => 1439,
                'font_id' => 616,
                'variant' => '200italic',
                'link' => 'http://fonts.gstatic.com/s/prompt/v1/NR0JuXzzCDKpLNVhfyEAiaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            439 => 
            array (
                'id' => 1440,
                'font_id' => 616,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/prompt/v1/LzifakiWysr3N3OoAdbdpg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            440 => 
            array (
                'id' => 1441,
                'font_id' => 616,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/prompt/v1/ir8BhbeDHM-qnbo-tnpmt6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            441 => 
            array (
                'id' => 1442,
                'font_id' => 616,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/prompt/v1/nDo1rQFnTFNua4cp-OnD2A.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            442 => 
            array (
                'id' => 1443,
                'font_id' => 616,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/prompt/v1/ZD4khIP924SU2fRYOJkraQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            443 => 
            array (
                'id' => 1444,
                'font_id' => 616,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/prompt/v1/w31OY1otplAgr5iZ21K7Fg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            444 => 
            array (
                'id' => 1445,
                'font_id' => 616,
                'variant' => '500italic',
                'link' => 'http://fonts.gstatic.com/s/prompt/v1/dfaeaRx00u9arVHsaDjliaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            445 => 
            array (
                'id' => 1446,
                'font_id' => 616,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/prompt/v1/uUrJjg1BGaIb6CAOlUIp9g.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            446 => 
            array (
                'id' => 1447,
                'font_id' => 616,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/prompt/v1/CJUBMsoNNHMMdFRxm-n7p6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            447 => 
            array (
                'id' => 1448,
                'font_id' => 616,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/prompt/v1/HdM_epiStzshOr-49ubVyg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            448 => 
            array (
                'id' => 1449,
                'font_id' => 616,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/prompt/v1/GtXRH7QWy3aLCHoJuR5WIKCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            449 => 
            array (
                'id' => 1450,
                'font_id' => 616,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/prompt/v1/GF9cOamDd7mYPHNW1nZLKg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            450 => 
            array (
                'id' => 1451,
                'font_id' => 616,
                'variant' => '800italic',
                'link' => 'http://fonts.gstatic.com/s/prompt/v1/kBLgnnEB-VXkOLFCc0pzwqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            451 => 
            array (
                'id' => 1452,
                'font_id' => 616,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/prompt/v1/KFgmbwHbRBQb28VFhH3c8Q.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            452 => 
            array (
                'id' => 1453,
                'font_id' => 616,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/prompt/v1/qjrOe-lEPwDDeUu5g6q_DaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            453 => 
            array (
                'id' => 1454,
                'font_id' => 617,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/prostoone/v5/bsqnAElAqk9kX7eABTRFJPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            454 => 
            array (
                'id' => 1455,
                'font_id' => 618,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/prozalibre/v1/Hg11OrfE1P_U6mKmrZPknKCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            455 => 
            array (
                'id' => 1456,
                'font_id' => 618,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/prozalibre/v1/ClQTew5IUT7yKo8vyspLxEeOrDcLawS7-ssYqLr2Xp4.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            456 => 
            array (
                'id' => 1457,
                'font_id' => 618,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/prozalibre/v1/4gjxWDPA6RMWrIls_qgQBsCNfqCYlB_eIx7H1TVXe60.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            457 => 
            array (
                'id' => 1458,
                'font_id' => 618,
                'variant' => '500italic',
                'link' => 'http://fonts.gstatic.com/s/prozalibre/v1/rWq3Qp4ZlPGKduc1qkgLHGnWRcJAYo5PSCx8UfGMHCI.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            458 => 
            array (
                'id' => 1459,
                'font_id' => 618,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/prozalibre/v1/4gjxWDPA6RMWrIls_qgQBpZ7xm-Bj30Bj2KNdXDzSZg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            459 => 
            array (
                'id' => 1460,
                'font_id' => 618,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/prozalibre/v1/rWq3Qp4ZlPGKduc1qkgLHJe6We3S5L6hKLscKpOkmlo.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            460 => 
            array (
                'id' => 1461,
                'font_id' => 618,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/prozalibre/v1/4gjxWDPA6RMWrIls_qgQBne1Pd76Vl7zRpE7NLJQ7XU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            461 => 
            array (
                'id' => 1462,
                'font_id' => 618,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/prozalibre/v1/rWq3Qp4ZlPGKduc1qkgLHM_zJjSACmk0BRPxQqhnNLU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            462 => 
            array (
                'id' => 1463,
                'font_id' => 618,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/prozalibre/v1/4gjxWDPA6RMWrIls_qgQBg89PwPrYLaRFJ-HNCU9NbA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            463 => 
            array (
                'id' => 1464,
                'font_id' => 618,
                'variant' => '800italic',
                'link' => 'http://fonts.gstatic.com/s/prozalibre/v1/rWq3Qp4ZlPGKduc1qkgLHCad_7rtf4IdDfsLVg-2OV4.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            464 => 
            array (
                'id' => 1465,
                'font_id' => 619,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/puritan/v8/wv_RtgVBSCn-or2MC0n4Kg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            465 => 
            array (
                'id' => 1466,
                'font_id' => 619,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/puritan/v8/BqZX8Tp200LeMv1KlzXgLQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            466 => 
            array (
                'id' => 1467,
                'font_id' => 619,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/puritan/v8/pJS2SdwI0SCiVnO0iQSFT_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            467 => 
            array (
                'id' => 1468,
                'font_id' => 619,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/puritan/v8/rFG3XkMJL75nUNZwCEIJqC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            468 => 
            array (
                'id' => 1469,
                'font_id' => 620,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/purplepurse/v5/Q5heFUrdmei9axbMITxxxS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            469 => 
            array (
                'id' => 1470,
                'font_id' => 621,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/quando/v5/03nDiEZuO2-h3xvtG6UmHg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            470 => 
            array (
                'id' => 1471,
                'font_id' => 622,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/quantico/v5/pwSnP8Xpaix2rIz99HrSlQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            471 => 
            array (
                'id' => 1472,
                'font_id' => 622,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/quantico/v5/KQhDd2OsZi6HiITUeFQ2U_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            472 => 
            array (
                'id' => 1473,
                'font_id' => 622,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/quantico/v5/OVZZzjcZ3Hkq2ojVcUtDjaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            473 => 
            array (
                'id' => 1474,
                'font_id' => 622,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/quantico/v5/HeCYRcZbdRso3ZUu01ELbQJKKGfqHaYFsRG-T3ceEVo.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            474 => 
            array (
                'id' => 1475,
                'font_id' => 623,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/quattrocento/v8/WZDISdyil4HsmirlOdBRFC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            475 => 
            array (
                'id' => 1476,
                'font_id' => 623,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/quattrocento/v8/Uvi-cRwyvqFpl9j3oT2mqkD2ttfZwueP-QU272T9-k4.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            476 => 
            array (
                'id' => 1477,
                'font_id' => 624,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/quattrocentosans/v9/efd6FGWWGX5Z3ztwLBrG9eAj_ty82iuwwDTNEYXGiyQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            477 => 
            array (
                'id' => 1478,
                'font_id' => 624,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/quattrocentosans/v9/8PXYbvM__bjl0rBnKiByg532VBCoA_HLsn85tSWZmdo.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            478 => 
            array (
                'id' => 1479,
                'font_id' => 624,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/quattrocentosans/v9/tXSgPxDl7Lk8Zr_5qX8FIbqxG25nQNOioCZSK4sU-CA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            479 => 
            array (
                'id' => 1480,
                'font_id' => 624,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/quattrocentosans/v9/8N1PdXpbG6RtFvTjl-5E7buqAJxizi8Dk_SK5et7kMg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            480 => 
            array (
                'id' => 1481,
                'font_id' => 625,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/questrial/v6/MoHHaw_WwNs_hd9ob1zTVw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            481 => 
            array (
                'id' => 1482,
                'font_id' => 626,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/quicksand/v6/qhfoJiLu10kFjChCCTvGlC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            482 => 
            array (
                'id' => 1483,
                'font_id' => 626,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/quicksand/v6/Ngv3fIJjKB7sD-bTUGIFCA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            483 => 
            array (
                'id' => 1484,
                'font_id' => 626,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/quicksand/v6/FRGja7LlrG1Mypm0hCq0Di3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            484 => 
            array (
                'id' => 1485,
                'font_id' => 626,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/quicksand/v6/32nyIRHyCu6iqEka_hbKsi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            485 => 
            array (
                'id' => 1486,
                'font_id' => 627,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/quintessential/v4/mmk6ioesnTrEky_Zb92E5s02lXbtMOtZWfuxKeMZO8Q.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            486 => 
            array (
                'id' => 1487,
                'font_id' => 628,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/qwigley/v6/aDqxws-KubFID85TZHFouw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            487 => 
            array (
                'id' => 1488,
                'font_id' => 629,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/racingsansone/v4/1r3DpWaCiT7y3PD4KgkNyDjVlsJB_M_Q_LtZxsoxvlw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            488 => 
            array (
                'id' => 1489,
                'font_id' => 630,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/radley/v9/FgE9di09a-mXGzAIyI6Q9Q.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            489 => 
            array (
                'id' => 1490,
                'font_id' => 630,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/radley/v9/Z_JcACuPAOO2f9kzQcGRug.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            490 => 
            array (
                'id' => 1491,
                'font_id' => 631,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/rajdhani/v5/9pItuEhQZVGdq8spnHTku6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            491 => 
            array (
                'id' => 1492,
                'font_id' => 631,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/rajdhani/v5/Wfy5zp4PGFAFS7-Wetehzw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            492 => 
            array (
                'id' => 1493,
                'font_id' => 631,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/rajdhani/v5/nd_5ZpVwm710HcLual0fBqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            493 => 
            array (
                'id' => 1494,
                'font_id' => 631,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/rajdhani/v5/5fnmZahByDeTtgxIiqbJSaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            494 => 
            array (
                'id' => 1495,
                'font_id' => 631,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/rajdhani/v5/UBK6d2Hg7X7wYLlF92aXW6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            495 => 
            array (
                'id' => 1496,
                'font_id' => 632,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/rakkas/v1/XWSZpoSbAR4myQgKbSJM9A.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            496 => 
            array (
                'id' => 1497,
                'font_id' => 633,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/raleway/v11/UDfD6oxBaBnmFJwQ7XAFNw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            497 => 
            array (
                'id' => 1498,
                'font_id' => 633,
                'variant' => '100italic',
                'link' => 'http://fonts.gstatic.com/s/raleway/v11/hUpHtml6IPNuUR-FwVi2UKCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            498 => 
            array (
                'id' => 1499,
                'font_id' => 633,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/raleway/v11/LAQwev4hdCtYkOYX4Oc7nPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            499 => 
            array (
                'id' => 1500,
                'font_id' => 633,
                'variant' => '200italic',
                'link' => 'http://fonts.gstatic.com/s/raleway/v11/N2DIbZG4399cPGfifZUEQi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
        ));
        \DB::table('font_variants')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'font_id' => 633,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/raleway/v11/2VvSZU2kb4DZwFfRM4fLQPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            1 => 
            array (
                'id' => 1502,
                'font_id' => 633,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/raleway/v11/TVSB8ogXDKMcnAAJ5CqrUi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            2 => 
            array (
                'id' => 1503,
                'font_id' => 633,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/raleway/v11/_dCzxpXzIS3sL-gdJWAP8A.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            3 => 
            array (
                'id' => 1504,
                'font_id' => 633,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/raleway/v11/utU2m1gdZSfuQpArSy5Dbw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            4 => 
            array (
                'id' => 1505,
                'font_id' => 633,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/raleway/v11/348gn6PEmbLDWlHbbV15d_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            5 => 
            array (
                'id' => 1506,
                'font_id' => 633,
                'variant' => '500italic',
                'link' => 'http://fonts.gstatic.com/s/raleway/v11/S7vGLZZ40c85SJgiptJGVy3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            6 => 
            array (
                'id' => 1507,
                'font_id' => 633,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/raleway/v11/M7no6oPkwKYJkedjB1wqEvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            7 => 
            array (
                'id' => 1508,
                'font_id' => 633,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/raleway/v11/OY22yoG8EJ3IN_muVWm29C3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            8 => 
            array (
                'id' => 1509,
                'font_id' => 633,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/raleway/v11/VGEV9-DrblisWOWLbK-1XPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            9 => 
            array (
                'id' => 1510,
                'font_id' => 633,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/raleway/v11/lFxvRPuGFG5ktd7P0WRwKi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            10 => 
            array (
                'id' => 1511,
                'font_id' => 633,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/raleway/v11/mMh0JrsYMXcLO69jgJwpUvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            11 => 
            array (
                'id' => 1512,
                'font_id' => 633,
                'variant' => '800italic',
                'link' => 'http://fonts.gstatic.com/s/raleway/v11/us4LjTCmlYgh3W8CKujEJi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            12 => 
            array (
                'id' => 1513,
                'font_id' => 633,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/raleway/v11/ajQQGcDBLcyLpaUfD76UuPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            13 => 
            array (
                'id' => 1514,
                'font_id' => 633,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/raleway/v11/oY2RadnkHfshu5f0FLsgVS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            14 => 
            array (
                'id' => 1515,
                'font_id' => 634,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ralewaydots/v4/lhLgmWCRcyz-QXo8LCzTfC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            15 => 
            array (
                'id' => 1516,
                'font_id' => 635,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ramabhadra/v5/JyhxLXRVQChLDGADS_c5MPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            16 => 
            array (
                'id' => 1517,
                'font_id' => 636,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ramaraja/v1/XIqzxFapVczstBedHdQTiw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            17 => 
            array (
                'id' => 1518,
                'font_id' => 637,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/rambla/v4/YaTmpvm5gFg_ShJKTQmdzg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            18 => 
            array (
                'id' => 1519,
                'font_id' => 637,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/rambla/v4/mhUgsKmp0qw3uATdDDAuwA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            19 => 
            array (
                'id' => 1520,
                'font_id' => 637,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/rambla/v4/C5VZH8BxQKmnBuoC00UPpw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            20 => 
            array (
                'id' => 1521,
                'font_id' => 637,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/rambla/v4/ziMzUZya6QahrKONSI1TzqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            21 => 
            array (
                'id' => 1522,
                'font_id' => 638,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/rammettoone/v5/mh0uQ1tV8QgSx9v_KyEYPC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            22 => 
            array (
                'id' => 1523,
                'font_id' => 639,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ranchers/v4/9ya8CZYhqT66VERfjQ7eLA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            23 => 
            array (
                'id' => 1524,
                'font_id' => 640,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/rancho/v6/ekp3-4QykC4--6KaslRgHA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            24 => 
            array (
                'id' => 1525,
                'font_id' => 641,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ranga/v1/xpW6zFTNzY1JykoBIqE1Zg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            25 => 
            array (
                'id' => 1526,
                'font_id' => 641,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/ranga/v1/h8G_gEUH7vHKH-NkjAs34A.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            26 => 
            array (
                'id' => 1527,
                'font_id' => 642,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/rasa/v1/XQ1gDq2EqBtGcdadPyPbww.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            27 => 
            array (
                'id' => 1528,
                'font_id' => 642,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/rasa/v1/A5PoJUwX_PxTsywxlRB79g.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            28 => 
            array (
                'id' => 1529,
                'font_id' => 642,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/rasa/v1/HfsDi_Ls3NARO_YEODINGg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            29 => 
            array (
                'id' => 1530,
                'font_id' => 642,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/rasa/v1/f-fvbq-hWIQCdmT3QHGk3Q.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            30 => 
            array (
                'id' => 1531,
                'font_id' => 642,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/rasa/v1/TSF3CG-8Cn72jvaVdqtMMQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            31 => 
            array (
                'id' => 1532,
                'font_id' => 643,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/rationale/v7/7M2eN-di0NGLQse7HzJRfg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            32 => 
            array (
                'id' => 1533,
                'font_id' => 644,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/raviprakash/v3/8EzbM7Rymjk25jWeHxbO6C3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            33 => 
            array (
                'id' => 1534,
                'font_id' => 645,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/redressed/v6/3aZ5sTBppH3oSm5SabegtA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            34 => 
            array (
                'id' => 1535,
                'font_id' => 646,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/reemkufi/v1/xLwMbK_T1g-h9p-rp60A1Q.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            35 => 
            array (
                'id' => 1536,
                'font_id' => 647,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/reeniebeanie/v7/ljpKc6CdXusL1cnGUSamX4jjx0o0jr6fNXxPgYh_a8Q.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            36 => 
            array (
                'id' => 1537,
                'font_id' => 648,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/revalia/v4/1TKw66fF5_poiL0Ktgo4_A.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            37 => 
            array (
                'id' => 1538,
                'font_id' => 649,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/rhodiumlibre/v1/Vxr7A4-xE2zsBDDI8BcseIjjx0o0jr6fNXxPgYh_a8Q.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            38 => 
            array (
                'id' => 1539,
                'font_id' => 650,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ribeye/v5/e5w3VE8HnWBln4Ll6lUj3Q.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            39 => 
            array (
                'id' => 1540,
                'font_id' => 651,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ribeyemarrow/v6/q7cBSA-4ErAXBCDFPrhlY0cTNmV93fYG7UKgsLQNQWs.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            40 => 
            array (
                'id' => 1541,
                'font_id' => 652,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/righteous/v5/0nRRWM_gCGCt2S-BCfN8WQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            41 => 
            array (
                'id' => 1542,
                'font_id' => 653,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/risque/v4/92RnElGnl8yHP97-KV3Fyg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            42 => 
            array (
                'id' => 1543,
                'font_id' => 654,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/roboto/v16/7MygqTe2zs9YkP0adA9QQQ.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            43 => 
            array (
                'id' => 1544,
                'font_id' => 654,
                'variant' => '100italic',
                'link' => 'http://fonts.gstatic.com/s/roboto/v16/T1xnudodhcgwXCmZQ490TPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            44 => 
            array (
                'id' => 1545,
                'font_id' => 654,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/roboto/v16/dtpHsbgPEm2lVWciJZ0P-A.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            45 => 
            array (
                'id' => 1546,
                'font_id' => 654,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/roboto/v16/iE8HhaRzdhPxC93dOdA056CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            46 => 
            array (
                'id' => 1547,
                'font_id' => 654,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/roboto/v16/W5F8_SL0XFawnjxHGsZjJA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            47 => 
            array (
                'id' => 1548,
                'font_id' => 654,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/roboto/v16/hcKoSgxdnKlbH5dlTwKbow.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            48 => 
            array (
                'id' => 1549,
                'font_id' => 654,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/roboto/v16/Uxzkqj-MIMWle-XP2pDNAA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            49 => 
            array (
                'id' => 1550,
                'font_id' => 654,
                'variant' => '500italic',
                'link' => 'http://fonts.gstatic.com/s/roboto/v16/daIfzbEw-lbjMyv4rMUUTqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            50 => 
            array (
                'id' => 1551,
                'font_id' => 654,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/roboto/v16/bdHGHleUa-ndQCOrdpfxfw.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            51 => 
            array (
                'id' => 1552,
                'font_id' => 654,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/roboto/v16/owYYXKukxFDFjr0ZO8NXh6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            52 => 
            array (
                'id' => 1553,
                'font_id' => 654,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/roboto/v16/H1vB34nOKWXqzKotq25pcg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            53 => 
            array (
                'id' => 1554,
                'font_id' => 654,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/roboto/v16/b9PWBSMHrT2zM5FgUdtu0aCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            54 => 
            array (
                'id' => 1555,
                'font_id' => 655,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/robotocondensed/v14/b9QBgL0iMZfDSpmcXcE8nJRhFVcex_hajThhFkHyhYk.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            55 => 
            array (
                'id' => 1556,
                'font_id' => 655,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/robotocondensed/v14/mg0cGfGRUERshzBlvqxeAPYa9bgCHecWXGgisnodcS0.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            56 => 
            array (
                'id' => 1557,
                'font_id' => 655,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/robotocondensed/v14/Zd2E9abXLFGSr9G3YK2MsKDbm6fPDOZJsR8PmdG62gY.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            57 => 
            array (
                'id' => 1558,
                'font_id' => 655,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/robotocondensed/v14/BP5K8ZAJv9qEbmuFp8RpJY_eiqgTfYGaH0bJiUDZ5GA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            58 => 
            array (
                'id' => 1559,
                'font_id' => 655,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/robotocondensed/v14/b9QBgL0iMZfDSpmcXcE8nPOYkGiSOYDq_T7HbIOV1hA.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            59 => 
            array (
                'id' => 1560,
                'font_id' => 655,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/robotocondensed/v14/mg0cGfGRUERshzBlvqxeAE2zk2RGRC3SlyyLLQfjS_8.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            60 => 
            array (
                'id' => 1561,
                'font_id' => 656,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/robotomono/v4/aOIeRp72J9_Hp_8KwQ9M-YAWxXGWZ3yJw6KhWS7MxOk.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            61 => 
            array (
                'id' => 1562,
                'font_id' => 656,
                'variant' => '100italic',
                'link' => 'http://fonts.gstatic.com/s/robotomono/v4/rqQ1zSE-ZGCKVZgew-A9dgyDtfpXZi-8rXUZYR4dumU.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            62 => 
            array (
                'id' => 1563,
                'font_id' => 656,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/robotomono/v4/N4duVc9C58uwPiY8_59Fzy9-WlPSxbfiI49GsXo3q0g.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            63 => 
            array (
                'id' => 1564,
                'font_id' => 656,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/robotomono/v4/1OsMuiiO6FCF2x67vzDKA2o9eWDfYYxG3A176Zl7aIg.ttf',
                'created_at' => '2017-05-11 09:09:16',
                'updated_at' => '2017-05-11 09:09:16',
            ),
            64 => 
            array (
                'id' => 1565,
                'font_id' => 656,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/robotomono/v4/eJ4cxQe85Lo39t-LVoKa26CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            65 => 
            array (
                'id' => 1566,
                'font_id' => 656,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/robotomono/v4/mE0EPT_93c7f86_WQexR3EeOrDcLawS7-ssYqLr2Xp4.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            66 => 
            array (
                'id' => 1567,
                'font_id' => 656,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/robotomono/v4/N4duVc9C58uwPiY8_59Fz8CNfqCYlB_eIx7H1TVXe60.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            67 => 
            array (
                'id' => 1568,
                'font_id' => 656,
                'variant' => '500italic',
                'link' => 'http://fonts.gstatic.com/s/robotomono/v4/1OsMuiiO6FCF2x67vzDKA2nWRcJAYo5PSCx8UfGMHCI.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            68 => 
            array (
                'id' => 1569,
                'font_id' => 656,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/robotomono/v4/N4duVc9C58uwPiY8_59Fz3e1Pd76Vl7zRpE7NLJQ7XU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            69 => 
            array (
                'id' => 1570,
                'font_id' => 656,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/robotomono/v4/1OsMuiiO6FCF2x67vzDKA8_zJjSACmk0BRPxQqhnNLU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            70 => 
            array (
                'id' => 1571,
                'font_id' => 657,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/robotoslab/v6/MEz38VLIFL-t46JUtkIEgIAWxXGWZ3yJw6KhWS7MxOk.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            71 => 
            array (
                'id' => 1572,
                'font_id' => 657,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/robotoslab/v6/dazS1PrQQuCxC3iOAJFEJS9-WlPSxbfiI49GsXo3q0g.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            72 => 
            array (
                'id' => 1573,
                'font_id' => 657,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/robotoslab/v6/3__ulTNA7unv0UtplybPiqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            73 => 
            array (
                'id' => 1574,
                'font_id' => 657,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/robotoslab/v6/dazS1PrQQuCxC3iOAJFEJXe1Pd76Vl7zRpE7NLJQ7XU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            74 => 
            array (
                'id' => 1575,
                'font_id' => 658,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/rochester/v6/bnj8tmQBiOkdji_G_yvypg.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            75 => 
            array (
                'id' => 1576,
                'font_id' => 659,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/rocksalt/v6/Zy7JF9h9WbhD9V3SFMQ1UQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            76 => 
            array (
                'id' => 1577,
                'font_id' => 660,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/rokkitt/v11/_3YC6rPA1FdHK3T5HJAiKA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            77 => 
            array (
                'id' => 1578,
                'font_id' => 660,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/rokkitt/v11/YawjzRx4kAyF2FdhIXfg1_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            78 => 
            array (
                'id' => 1579,
                'font_id' => 660,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/rokkitt/v11/Cw0HfZi5axnl2GTVcAe4x_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            79 => 
            array (
                'id' => 1580,
                'font_id' => 660,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/rokkitt/v11/GMA7Z_ToF8uSvpZAgnp_VQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            80 => 
            array (
                'id' => 1581,
                'font_id' => 660,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/rokkitt/v11/jSxUaZL9JCo117IMemf-iPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            81 => 
            array (
                'id' => 1582,
                'font_id' => 660,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/rokkitt/v11/b4_SvUo9hy0bV60RoA1RKPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            82 => 
            array (
                'id' => 1583,
                'font_id' => 660,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/rokkitt/v11/gxlo-sr3rPmvgSixYog_ofesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            83 => 
            array (
                'id' => 1584,
                'font_id' => 660,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/rokkitt/v11/mCok2W9ZHFgB-LY6ITuapfesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            84 => 
            array (
                'id' => 1585,
                'font_id' => 660,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/rokkitt/v11/riY221k9xwvseUAhNXMjQPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            85 => 
            array (
                'id' => 1586,
                'font_id' => 661,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/romanesco/v5/2udIjUrpK_CPzYSxRVzD4Q.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            86 => 
            array (
                'id' => 1587,
                'font_id' => 662,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ropasans/v6/Gba7ZzVBuhg6nX_AoSwlkQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            87 => 
            array (
                'id' => 1588,
                'font_id' => 662,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/ropasans/v6/V1zbhZQscNrh63dy5Jk2nqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            88 => 
            array (
                'id' => 1589,
                'font_id' => 663,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/rosario/v11/bL-cEh8dXtDupB2WccA2LA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            89 => 
            array (
                'id' => 1590,
                'font_id' => 663,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/rosario/v11/pkflNy18HEuVVx4EOjeb_Q.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            90 => 
            array (
                'id' => 1591,
                'font_id' => 663,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/rosario/v11/nrS6PJvDWN42RP4TFWccd_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            91 => 
            array (
                'id' => 1592,
                'font_id' => 663,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/rosario/v11/EOgFX2Va5VGrkhn_eDpIRS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            92 => 
            array (
                'id' => 1593,
                'font_id' => 664,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/rosarivo/v4/EmPiINK0qyqc7KSsNjJamA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            93 => 
            array (
                'id' => 1594,
                'font_id' => 664,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/rosarivo/v4/u3VuWsWQlX1pDqsbz4paNPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            94 => 
            array (
                'id' => 1595,
                'font_id' => 665,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/rougescript/v5/AgXDSqZJmy12qS0ixjs6Vy3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            95 => 
            array (
                'id' => 1596,
                'font_id' => 666,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/rozhaone/v2/PyrMHQ6lucEIxwKmhqsX8A.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            96 => 
            array (
                'id' => 1597,
                'font_id' => 667,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/rubik/v4/o1vXYO8YwDpErHEAPAxpOg.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            97 => 
            array (
                'id' => 1598,
                'font_id' => 667,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/rubik/v4/NyXDvUhvZLSWiVfGa5KM-vesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            98 => 
            array (
                'id' => 1599,
                'font_id' => 667,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/rubik/v4/4sMyW_teKWHB3K8Hm-Il6A.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            99 => 
            array (
                'id' => 1600,
                'font_id' => 667,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/rubik/v4/elD65ddI0qvNcCh42b1Iqg.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            100 => 
            array (
                'id' => 1601,
                'font_id' => 667,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/rubik/v4/D4HihERG27s-BJrQ4dvkbw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            101 => 
            array (
                'id' => 1602,
                'font_id' => 667,
                'variant' => '500italic',
                'link' => 'http://fonts.gstatic.com/s/rubik/v4/0hcxMdoMbXtHiEM1ebdN6PesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            102 => 
            array (
                'id' => 1603,
                'font_id' => 667,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/rubik/v4/m1GGHcpLe6Mb0_sAyjXE4g.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            103 => 
            array (
                'id' => 1604,
                'font_id' => 667,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/rubik/v4/R4g_rs714cUXVZcdnRdHw_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            104 => 
            array (
                'id' => 1605,
                'font_id' => 667,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/rubik/v4/mOHfPRl5uP4vw7-5-dbnng.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            105 => 
            array (
                'id' => 1606,
                'font_id' => 667,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/rubik/v4/HH1b7kBbwInqlw8OQxRE5vesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            106 => 
            array (
                'id' => 1607,
                'font_id' => 668,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/rubikmonoone/v5/e_cupPtD4BrZzotubJD7UbAREgn5xbW23GEXXnhMQ5Y.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            107 => 
            array (
                'id' => 1608,
                'font_id' => 669,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ruda/v7/jPEIPB7DM2DNK_uBGv2HGw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            108 => 
            array (
                'id' => 1609,
                'font_id' => 669,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/ruda/v7/JABOu1SYOHcGXVejUq4w6g.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            109 => 
            array (
                'id' => 1610,
                'font_id' => 669,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/ruda/v7/Uzusv-enCjoIrznlJJaBRw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            110 => 
            array (
                'id' => 1611,
                'font_id' => 670,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/rufina/v4/s9IFr_fIemiohfZS-ZRDbQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            111 => 
            array (
                'id' => 1612,
                'font_id' => 670,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/rufina/v4/D0RUjXFr55y4MVZY2Ww_RA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            112 => 
            array (
                'id' => 1613,
                'font_id' => 671,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/rugeboogie/v7/U-TTmltL8aENLVIqYbI5QaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            113 => 
            array (
                'id' => 1614,
                'font_id' => 672,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ruluko/v4/lv4cMwJtrx_dzmlK5SDc1g.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            114 => 
            array (
                'id' => 1615,
                'font_id' => 673,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/rumraisin/v4/kDiL-ntDOEq26B7kYM7cx_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            115 => 
            array (
                'id' => 1616,
                'font_id' => 674,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ruslandisplay/v7/SREdhlyLNUfU1VssRBfs3rgH88D3l9N4auRNHrNS708.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            116 => 
            array (
                'id' => 1617,
                'font_id' => 675,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/russoone/v5/zfwxZ--UhUc7FVfgT21PRQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            117 => 
            array (
                'id' => 1618,
                'font_id' => 676,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ruthie/v6/vJ2LorukHSbWYoEs5juivg.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            118 => 
            array (
                'id' => 1619,
                'font_id' => 677,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/rye/v4/VUrJlpPpSZxspl3w_yNOrQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            119 => 
            array (
                'id' => 1620,
                'font_id' => 678,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sacramento/v4/_kv-qycSHMNdhjiv0Kj7BvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            120 => 
            array (
                'id' => 1621,
                'font_id' => 679,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sahitya/v1/wQWULcDbZqljdTfjOUtDvw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            121 => 
            array (
                'id' => 1622,
                'font_id' => 679,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/sahitya/v1/Zm5hNvMwUyN3tC4GMkH1l_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            122 => 
            array (
                'id' => 1623,
                'font_id' => 680,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sail/v7/iuEoG6kt-bePGvtdpL0GUQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            123 => 
            array (
                'id' => 1624,
                'font_id' => 681,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/salsa/v6/BnpUCBmYdvggScEPs5JbpA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            124 => 
            array (
                'id' => 1625,
                'font_id' => 682,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sanchez/v4/BEL8ao-E2LJ5eHPLB2UAiw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            125 => 
            array (
                'id' => 1626,
                'font_id' => 682,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/sanchez/v4/iSrhkWLexUZzDeNxNEHtzA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            126 => 
            array (
                'id' => 1627,
                'font_id' => 683,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sancreek/v7/8ZacBMraWMvHly4IJI3esw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            127 => 
            array (
                'id' => 1628,
                'font_id' => 684,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sansita/v1/ey9oYobmakEwtEciY0G5Mg.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            128 => 
            array (
                'id' => 1629,
                'font_id' => 684,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/sansita/v1/UkWzQlyaYvMqX8-kX9fI1A.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            129 => 
            array (
                'id' => 1630,
                'font_id' => 684,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/sansita/v1/q9hPUXq37zR3BVunMJi2HfesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            130 => 
            array (
                'id' => 1631,
                'font_id' => 684,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/sansita/v1/Izkki8H_L5Nxxk6vpKrxXS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            131 => 
            array (
                'id' => 1632,
                'font_id' => 684,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/sansita/v1/vOIsA3n-LuVE_PeoZ3aSFfesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            132 => 
            array (
                'id' => 1633,
                'font_id' => 684,
                'variant' => '800italic',
                'link' => 'http://fonts.gstatic.com/s/sansita/v1/4OvihNMj_b3nyu4KlgNNVS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            133 => 
            array (
                'id' => 1634,
                'font_id' => 684,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/sansita/v1/lwgTmJASMyrLsXnTfRSt7fesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            134 => 
            array (
                'id' => 1635,
                'font_id' => 684,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/sansita/v1/JTPHz0Wyy3AImmVqi8CQTy3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            135 => 
            array (
                'id' => 1636,
                'font_id' => 685,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sarala/v1/ohip9lixCHoBab7hTtgLnw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            136 => 
            array (
                'id' => 1637,
                'font_id' => 685,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/sarala/v1/hpc9cz8KYsazwq2In_oJYw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            137 => 
            array (
                'id' => 1638,
                'font_id' => 686,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sarina/v5/XYtRfaSknHIU3NHdfTdXoQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            138 => 
            array (
                'id' => 1639,
                'font_id' => 687,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sarpanch/v1/YMBZdT27b6O5a1DADbAGSg.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            139 => 
            array (
                'id' => 1640,
                'font_id' => 687,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/sarpanch/v1/Ov7BxSrFSZYrfuJxL1LzQaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            140 => 
            array (
                'id' => 1641,
                'font_id' => 687,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/sarpanch/v1/WTnP2wnc0qSbUaaDG-2OQ6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            141 => 
            array (
                'id' => 1642,
                'font_id' => 687,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/sarpanch/v1/57kYsSpovYmFaEt2hsZhv6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            142 => 
            array (
                'id' => 1643,
                'font_id' => 687,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/sarpanch/v1/OKyqPLjdnuVghR-1TV6RzaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            143 => 
            array (
                'id' => 1644,
                'font_id' => 687,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/sarpanch/v1/JhYc2cr6kqWTo_P0vfvJR6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            144 => 
            array (
                'id' => 1645,
                'font_id' => 688,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/satisfy/v6/PRlyepkd-JCGHiN8e9WV2w.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            145 => 
            array (
                'id' => 1646,
                'font_id' => 689,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/scada/v5/iZNC3ZEYwe3je6H-28d5Ug.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            146 => 
            array (
                'id' => 1647,
                'font_id' => 689,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/scada/v5/PCGyLT1qNawkOUQ3uHFhBw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            147 => 
            array (
                'id' => 1648,
                'font_id' => 689,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/scada/v5/t6XNWdMdVWUz93EuRVmifQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            148 => 
            array (
                'id' => 1649,
                'font_id' => 689,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/scada/v5/kLrBIf7V4mDMwcd_Yw7-D_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            149 => 
            array (
                'id' => 1650,
                'font_id' => 690,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/scheherazade/v12/AuKlqGWzUC-8XqMOmsqXiy3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            150 => 
            array (
                'id' => 1651,
                'font_id' => 690,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/scheherazade/v12/C1wtT46acJkQxc6mPHwvHED2ttfZwueP-QU272T9-k4.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            151 => 
            array (
                'id' => 1652,
                'font_id' => 691,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/schoolbell/v6/95-3djEuubb3cJx-6E7j4vesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            152 => 
            array (
                'id' => 1653,
                'font_id' => 692,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/scopeone/v2/ge7dY8Yht-n7_1cLHtoT3w.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            153 => 
            array (
                'id' => 1654,
                'font_id' => 693,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/seaweedscript/v4/eorWAPpOvvWrPw5IHwE60BnpV0hQCek3EmWnCPrvGRM.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            154 => 
            array (
                'id' => 1655,
                'font_id' => 694,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/secularone/v1/yW9qikjpt_X0fh5oQJcdo6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            155 => 
            array (
                'id' => 1656,
                'font_id' => 695,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sevillana/v4/6m1Nh35oP7YEt00U80Smiw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            156 => 
            array (
                'id' => 1657,
                'font_id' => 696,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/seymourone/v4/HrdG2AEG_870Xb7xBVv6C6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            157 => 
            array (
                'id' => 1658,
                'font_id' => 697,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/shadowsintolight/v6/clhLqOv7MXn459PTh0gXYAW_5bEze-iLRNvGrRpJsfM.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            158 => 
            array (
                'id' => 1659,
                'font_id' => 698,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/shadowsintolighttwo/v4/gDxHeefcXIo-lOuZFCn2xVQrZk-Pga5KeEE_oZjkQjQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            159 => 
            array (
                'id' => 1660,
                'font_id' => 699,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/shanti/v8/lc4nG_JG6Q-2FQSOMMhb_w.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            160 => 
            array (
                'id' => 1661,
                'font_id' => 700,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/share/v6/1ytD7zSb_-g9I2GG67vmVw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            161 => 
            array (
                'id' => 1662,
                'font_id' => 700,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/share/v6/a9YGdQWFRlNJ0zClJVaY3Q.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            162 => 
            array (
                'id' => 1663,
                'font_id' => 700,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/share/v6/XrU8e7a1YKurguyY2azk1Q.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            163 => 
            array (
                'id' => 1664,
                'font_id' => 700,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/share/v6/A992-bLVYwAflKu6iaznufesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            164 => 
            array (
                'id' => 1665,
                'font_id' => 701,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sharetech/v6/Dq3DuZ5_0SW3oEfAWFpen_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            165 => 
            array (
                'id' => 1666,
                'font_id' => 702,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sharetechmono/v6/RQxK-3RA0Lnf3gnnnNrAscwD6PD0c3_abh9zHKQtbGU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            166 => 
            array (
                'id' => 1667,
                'font_id' => 703,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/shojumaru/v4/WP8cxonzQQVAoI3RJQ2wug.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            167 => 
            array (
                'id' => 1668,
                'font_id' => 704,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/shortstack/v6/v4dXPI0Rm8XN9gk4SDdqlqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            168 => 
            array (
                'id' => 1669,
                'font_id' => 705,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/shrikhand/v1/45jwHiwIDTWCy3Ir85vvKA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            169 => 
            array (
                'id' => 1670,
                'font_id' => 706,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/siemreap/v9/JSK-mOIsXwxo-zE9XDDl_g.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            170 => 
            array (
                'id' => 1671,
                'font_id' => 707,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sigmarone/v7/oh_5NxD5JBZksdo2EntKefesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            171 => 
            array (
                'id' => 1672,
                'font_id' => 708,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/signika/v6/0wDPonOzsYeEo-1KO78w4fesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            172 => 
            array (
                'id' => 1673,
                'font_id' => 708,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/signika/v6/WvDswbww0oAtvBg2l1L-9w.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            173 => 
            array (
                'id' => 1674,
                'font_id' => 708,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/signika/v6/lQMOF6NUN2ooR7WvB7tADvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            174 => 
            array (
                'id' => 1675,
                'font_id' => 708,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/signika/v6/lEcnfPBICWJPv5BbVNnFJPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            175 => 
            array (
                'id' => 1676,
                'font_id' => 709,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/signikanegative/v5/q5TOjIw4CenPw6C-TW06FjYFXpUPtCmIEFDvjUnLLaI.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            176 => 
            array (
                'id' => 1677,
                'font_id' => 709,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/signikanegative/v5/Z-Q1hzbY8uAo3TpTyPFMXVM1lnCWMnren5_v6047e5A.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            177 => 
            array (
                'id' => 1678,
                'font_id' => 709,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/signikanegative/v5/q5TOjIw4CenPw6C-TW06FrKLaDJM01OezSVA2R_O3qI.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            178 => 
            array (
                'id' => 1679,
                'font_id' => 709,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/signikanegative/v5/q5TOjIw4CenPw6C-TW06FpYzPxtVvobH1w3hEppR8WI.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            179 => 
            array (
                'id' => 1680,
                'font_id' => 710,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/simonetta/v5/fN8puNuahBo4EYMQgp12Yg.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            180 => 
            array (
                'id' => 1681,
                'font_id' => 710,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/simonetta/v5/ynxQ3FqfF_Nziwy3T9ZwL6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            181 => 
            array (
                'id' => 1682,
                'font_id' => 710,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/simonetta/v5/22EwvvJ2r1VwVCxit5LcVi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            182 => 
            array (
                'id' => 1683,
                'font_id' => 710,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/simonetta/v5/WUXOpCgBZaRPrWtMCpeKoienaqEuufTBk9XMKnKmgDA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            183 => 
            array (
                'id' => 1684,
                'font_id' => 711,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sintony/v4/IDhCijoIMev2L6Lg5QsduQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            184 => 
            array (
                'id' => 1685,
                'font_id' => 711,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/sintony/v4/zVXQB1wqJn6PE4dWXoYpvPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            185 => 
            array (
                'id' => 1686,
                'font_id' => 712,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sirinstencil/v5/pRpLdo0SawzO7MoBpvowsImg74kgS1F7KeR8rWhYwkU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            186 => 
            array (
                'id' => 1687,
                'font_id' => 713,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sixcaps/v7/_XeDnO0HOV8Er9u97If1tQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            187 => 
            array (
                'id' => 1688,
                'font_id' => 714,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/skranji/v4/jnOLPS0iZmDL7dfWnW3nIw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            188 => 
            array (
                'id' => 1689,
                'font_id' => 714,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/skranji/v4/Lcrhg-fviVkxiEgoadsI1vesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            189 => 
            array (
                'id' => 1690,
                'font_id' => 715,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/slabo13px/v3/jPGWFTjRXfCSzy0qd1nqdvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            190 => 
            array (
                'id' => 1691,
                'font_id' => 716,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/slabo27px/v3/gC0o8B9eU21EafNkXlRAfPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            191 => 
            array (
                'id' => 1692,
                'font_id' => 717,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/slackey/v6/evRIMNhGVCRJvCPv4kteeA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            192 => 
            array (
                'id' => 1693,
                'font_id' => 718,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/smokum/v6/8YP4BuAcy97X8WfdKfxVRw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            193 => 
            array (
                'id' => 1694,
                'font_id' => 719,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/smythe/v7/yACD1gy_MpbB9Ft42fUvYw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            194 => 
            array (
                'id' => 1695,
                'font_id' => 720,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sniglet/v8/XWhyQLHH4SpCVsHRPRgu9w.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            195 => 
            array (
                'id' => 1696,
                'font_id' => 720,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/sniglet/v8/NLF91nBmcEfkBgcEWbHFa_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            196 => 
            array (
                'id' => 1697,
                'font_id' => 721,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/snippet/v6/eUcYMLq2GtHZovLlQH_9kA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            197 => 
            array (
                'id' => 1698,
                'font_id' => 722,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/snowburstone/v4/zSQzKOPukXRux2oTqfYJjIjjx0o0jr6fNXxPgYh_a8Q.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            198 => 
            array (
                'id' => 1699,
                'font_id' => 723,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sofadione/v4/nirf4G12IcJ6KI8Eoj119fesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            199 => 
            array (
                'id' => 1700,
                'font_id' => 724,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sofia/v5/Imnvx0Ag9r6iDBFUY5_RaQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            200 => 
            array (
                'id' => 1701,
                'font_id' => 725,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sonsieone/v5/KSP7xT1OSy0q2ob6RQOTWPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            201 => 
            array (
                'id' => 1702,
                'font_id' => 726,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sortsmillgoudy/v6/JzRrPKdwEnE8F1TDmDLMUlIL2Qjg-Xlsg_fhGbe2P5U.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            202 => 
            array (
                'id' => 1703,
                'font_id' => 726,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/sortsmillgoudy/v6/UUu1lKiy4hRmBWk599VL1TYNkCNSzLyoucKmbTguvr0.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            203 => 
            array (
                'id' => 1704,
                'font_id' => 727,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/sourcecodepro/v6/leqv3v-yTsJNC7nFznSMqaXvKVW_haheDNrHjziJZVk.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            204 => 
            array (
                'id' => 1705,
                'font_id' => 727,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/sourcecodepro/v6/leqv3v-yTsJNC7nFznSMqVP7R5lD_au4SZC6Ks_vyWs.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            205 => 
            array (
                'id' => 1706,
                'font_id' => 727,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sourcecodepro/v6/mrl8jkM18OlOQN8JLgasD9Rl0pGnog23EMYRrBmUzJQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            206 => 
            array (
                'id' => 1707,
                'font_id' => 727,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/sourcecodepro/v6/leqv3v-yTsJNC7nFznSMqX63uKwMO11Of4rJWV582wg.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            207 => 
            array (
                'id' => 1708,
                'font_id' => 727,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/sourcecodepro/v6/leqv3v-yTsJNC7nFznSMqeiMeWyi5E_-XkTgB5psiDg.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            208 => 
            array (
                'id' => 1709,
                'font_id' => 727,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/sourcecodepro/v6/leqv3v-yTsJNC7nFznSMqfgXsetDviZcdR5OzC1KPcw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            209 => 
            array (
                'id' => 1710,
                'font_id' => 727,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/sourcecodepro/v6/leqv3v-yTsJNC7nFznSMqRA_awHl7mXRjE_LQVochcU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            210 => 
            array (
                'id' => 1711,
                'font_id' => 728,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/sourcesanspro/v9/toadOcfmlt9b38dHJxOBGKXvKVW_haheDNrHjziJZVk.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            211 => 
            array (
                'id' => 1712,
                'font_id' => 728,
                'variant' => '200italic',
                'link' => 'http://fonts.gstatic.com/s/sourcesanspro/v9/fpTVHK8qsXbIeTHTrnQH6OptKU7UIBg2hLM7eMTU8bI.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            212 => 
            array (
                'id' => 1713,
                'font_id' => 728,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/sourcesanspro/v9/toadOcfmlt9b38dHJxOBGFP7R5lD_au4SZC6Ks_vyWs.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            213 => 
            array (
                'id' => 1714,
                'font_id' => 728,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/sourcesanspro/v9/fpTVHK8qsXbIeTHTrnQH6DUpNKoQAsDux-Todp8f29w.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            214 => 
            array (
                'id' => 1715,
                'font_id' => 728,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sourcesanspro/v9/ODelI1aHBYDBqgeIAH2zlNRl0pGnog23EMYRrBmUzJQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            215 => 
            array (
                'id' => 1716,
                'font_id' => 728,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/sourcesanspro/v9/M2Jd71oPJhLKp0zdtTvoMwRX4TIfMQQEXLu74GftruE.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            216 => 
            array (
                'id' => 1717,
                'font_id' => 728,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/sourcesanspro/v9/toadOcfmlt9b38dHJxOBGOiMeWyi5E_-XkTgB5psiDg.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            217 => 
            array (
                'id' => 1718,
                'font_id' => 728,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/sourcesanspro/v9/fpTVHK8qsXbIeTHTrnQH6Pp6lGoTTgjlW0sC4r900Co.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            218 => 
            array (
                'id' => 1719,
                'font_id' => 728,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/sourcesanspro/v9/toadOcfmlt9b38dHJxOBGPgXsetDviZcdR5OzC1KPcw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            219 => 
            array (
                'id' => 1720,
                'font_id' => 728,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/sourcesanspro/v9/fpTVHK8qsXbIeTHTrnQH6LVT4locI09aamSzFGQlDMY.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            220 => 
            array (
                'id' => 1721,
                'font_id' => 728,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/sourcesanspro/v9/toadOcfmlt9b38dHJxOBGBA_awHl7mXRjE_LQVochcU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            221 => 
            array (
                'id' => 1722,
                'font_id' => 728,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/sourcesanspro/v9/fpTVHK8qsXbIeTHTrnQH6A0NcF6HPGWR298uWIdxWv0.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            222 => 
            array (
                'id' => 1723,
                'font_id' => 729,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sourceserifpro/v4/CeUM4np2c42DV49nanp55YGL0S0YDpKs5GpLtZIQ0m4.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            223 => 
            array (
                'id' => 1724,
                'font_id' => 729,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/sourceserifpro/v4/yd5lDMt8Sva2PE17yiLarGi4cQnvCGV11m1KlXh97aQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            224 => 
            array (
                'id' => 1725,
                'font_id' => 729,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/sourceserifpro/v4/yd5lDMt8Sva2PE17yiLarEkpYHRvxGNSCrR82n_RDNk.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            225 => 
            array (
                'id' => 1726,
                'font_id' => 730,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/spacemono/v1/B_LOPq3uMVBqC_kmqwURBfesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            226 => 
            array (
                'id' => 1727,
                'font_id' => 730,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/spacemono/v1/7xgIgvUEl9Gvhtf7tXsRzC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            227 => 
            array (
                'id' => 1728,
                'font_id' => 730,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/spacemono/v1/vdpMRWfyjfCvDYTz00NEPAJKKGfqHaYFsRG-T3ceEVo.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            228 => 
            array (
                'id' => 1729,
                'font_id' => 730,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/spacemono/v1/y2NWQDXe2-qPj6a6rWkLc0D2ttfZwueP-QU272T9-k4.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            229 => 
            array (
                'id' => 1730,
                'font_id' => 731,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/specialelite/v6/9-wW4zu3WNoD5Fjka35Jm4jjx0o0jr6fNXxPgYh_a8Q.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            230 => 
            array (
                'id' => 1731,
                'font_id' => 732,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/spicyrice/v5/WGCtz7cLoggXARPi9OGD6_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            231 => 
            array (
                'id' => 1732,
                'font_id' => 733,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/spinnaker/v8/MQdIXivKITpjROUdiN6Jgg.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            232 => 
            array (
                'id' => 1733,
                'font_id' => 734,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/spirax/v5/IOKqhk-Ccl7y31yDsePPkw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            233 => 
            array (
                'id' => 1734,
                'font_id' => 735,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/squadaone/v5/3tzGuaJdD65cZVgfQzN8uvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            234 => 
            array (
                'id' => 1735,
                'font_id' => 736,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sreekrushnadevaraya/v4/CdsXmnHyEqVl1ahzOh5qnzjDZVem5Eb4d0dXjXa0F_Q.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            235 => 
            array (
                'id' => 1736,
                'font_id' => 737,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sriracha/v1/l-TXHmKwoHm6vtjy4oUz8Q.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            236 => 
            array (
                'id' => 1737,
                'font_id' => 738,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/stalemate/v4/wQLCnG0qB6mOu2Wit2dt_w.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            237 => 
            array (
                'id' => 1738,
                'font_id' => 739,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/stalinistone/v8/MQpS-WezM9W4Dd7D3B7I-UT7eZ8.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            238 => 
            array (
                'id' => 1739,
                'font_id' => 740,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/stardosstencil/v6/ygEOyTW9a6u4fi4OXEZeTFf2eT4jUldwg_9fgfY_tHc.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            239 => 
            array (
                'id' => 1740,
                'font_id' => 740,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/stardosstencil/v6/h4ExtgvoXhPtv9Ieqd-XC81wDCbBgmIo8UyjIhmkeSM.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            240 => 
            array (
                'id' => 1741,
                'font_id' => 741,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/stintultracondensed/v5/8DqLK6-YSClFZt3u3EgOUYelbRYnLTTQA1Z5cVLnsI4.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            241 => 
            array (
                'id' => 1742,
                'font_id' => 742,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/stintultraexpanded/v4/FeigX-wDDgHMCKuhekhedQ7dxr0N5HY0cZKknTIL6n4.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            242 => 
            array (
                'id' => 1743,
                'font_id' => 743,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/stoke/v6/Sell9475FOS8jUqQsfFsUQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            243 => 
            array (
                'id' => 1744,
                'font_id' => 743,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/stoke/v6/A7qJNoqOm2d6o1E6e0yUFg.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            244 => 
            array (
                'id' => 1745,
                'font_id' => 744,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/strait/v4/m4W73ViNmProETY2ybc-Bg.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            245 => 
            array (
                'id' => 1746,
                'font_id' => 745,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sueellenfrancisco/v7/TwHX4vSxMUnJUdEz1JIgrhzazJzPVbGl8jnf1tisRz4.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            246 => 
            array (
                'id' => 1747,
                'font_id' => 746,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/suezone/v1/xulpHtKbz3V8hoSLE2uKDw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            247 => 
            array (
                'id' => 1748,
                'font_id' => 747,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sumana/v1/wgdl__wAK7pzliiWs0Nlog.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            248 => 
            array (
                'id' => 1749,
                'font_id' => 747,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/sumana/v1/8AcM-KAproitONSBBHj3sQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            249 => 
            array (
                'id' => 1750,
                'font_id' => 748,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sunshiney/v6/kaWOb4pGbwNijM7CkxK1sQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            250 => 
            array (
                'id' => 1751,
                'font_id' => 749,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/supermercadoone/v6/kMGPVTNFiFEp1U274uBMb4mm5hmSKNFf3C5YoMa-lrM.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            251 => 
            array (
                'id' => 1752,
                'font_id' => 750,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/sura/v1/jznKrhTH5NezYxb0-Q5zzA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            252 => 
            array (
                'id' => 1753,
                'font_id' => 750,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/sura/v1/Z5bXQaFGmoWicN1WlcncxA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            253 => 
            array (
                'id' => 1754,
                'font_id' => 751,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/suranna/v4/PYmfr6TQeTqZ-r8HnPM-kA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            254 => 
            array (
                'id' => 1755,
                'font_id' => 752,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/suravaram/v3/G4dPee4pel_w2HqzavW4MA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            255 => 
            array (
                'id' => 1756,
                'font_id' => 753,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/suwannaphum/v9/1jIPOyXied3T79GCnSlCN6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            256 => 
            array (
                'id' => 1757,
                'font_id' => 754,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/swankyandmoomoo/v6/orVNZ9kDeE3lWp3U3YELu9DVLKqNC3_XMNHhr8S94FU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            257 => 
            array (
                'id' => 1758,
                'font_id' => 755,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/syncopate/v7/RQVwO52fAH6MI764EcaYtw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            258 => 
            array (
                'id' => 1759,
                'font_id' => 755,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/syncopate/v7/S5z8ixiOoC4WJ1im6jAlYC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            259 => 
            array (
                'id' => 1760,
                'font_id' => 756,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/tangerine/v7/DTPeM3IROhnkz7aYG2a9sA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            260 => 
            array (
                'id' => 1761,
                'font_id' => 756,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/tangerine/v7/UkFsr-RwJB_d2l9fIWsx3i3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            261 => 
            array (
                'id' => 1762,
                'font_id' => 757,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/taprom/v8/-KByU3BaUsyIvQs79qFObg.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            262 => 
            array (
                'id' => 1763,
                'font_id' => 758,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/tauri/v4/XIWeYJDXNqiVNej0zEqtGg.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            263 => 
            array (
                'id' => 1764,
                'font_id' => 759,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/taviraj/v1/7iDtujKEc7hwcT6D0zLx-A.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            264 => 
            array (
                'id' => 1765,
                'font_id' => 759,
                'variant' => '100italic',
                'link' => 'http://fonts.gstatic.com/s/taviraj/v1/ai0UdHXB1gi5etfpU0CZ6aCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            265 => 
            array (
                'id' => 1766,
                'font_id' => 759,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/taviraj/v1/fn3qCO_sC_zLuf2hqWE37fesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            266 => 
            array (
                'id' => 1767,
                'font_id' => 759,
                'variant' => '200italic',
                'link' => 'http://fonts.gstatic.com/s/taviraj/v1/eDMMTK5GhTdvvz3R-ZWvay3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            267 => 
            array (
                'id' => 1768,
                'font_id' => 759,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/taviraj/v1/1EIpbtG_cs5haG6Ba9wX8vesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            268 => 
            array (
                'id' => 1769,
                'font_id' => 759,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/taviraj/v1/IEBfc1xGgsBbdCeXKNAtfS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            269 => 
            array (
                'id' => 1770,
                'font_id' => 759,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/taviraj/v1/AH1eoWagKJhbVx4Poc3M1A.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            270 => 
            array (
                'id' => 1771,
                'font_id' => 759,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/taviraj/v1/hAS5RxygdSnG4626KdkXuQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            271 => 
            array (
                'id' => 1772,
                'font_id' => 759,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/taviraj/v1/s8BuqYm5ebG2N1R4JkTp_fesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            272 => 
            array (
                'id' => 1773,
                'font_id' => 759,
                'variant' => '500italic',
                'link' => 'http://fonts.gstatic.com/s/taviraj/v1/319qfe3yzAi9RNFu-dI9zy3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            273 => 
            array (
                'id' => 1774,
                'font_id' => 759,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/taviraj/v1/KscmiA6HGz7nCcHhaddQH_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            274 => 
            array (
                'id' => 1775,
                'font_id' => 759,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/taviraj/v1/ofRN6EMiboGiM2Ga3cG_yy3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            275 => 
            array (
                'id' => 1776,
                'font_id' => 759,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/taviraj/v1/TY91892tTFNYCeCXjQ1AEPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            276 => 
            array (
                'id' => 1777,
                'font_id' => 759,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/taviraj/v1/4Yzb6i1xtMRZn9oAQ484nS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            277 => 
            array (
                'id' => 1778,
                'font_id' => 759,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/taviraj/v1/oGWJbiDGcxlInLLnrLxTDvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            278 => 
            array (
                'id' => 1779,
                'font_id' => 759,
                'variant' => '800italic',
                'link' => 'http://fonts.gstatic.com/s/taviraj/v1/MPtY5Qs3hwV4f0LUH-vVmy3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            279 => 
            array (
                'id' => 1780,
                'font_id' => 759,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/taviraj/v1/RfIEodnN0NYWUdZHol5fdPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            280 => 
            array (
                'id' => 1781,
                'font_id' => 759,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/taviraj/v1/aDM2JaXSd_qo0nqKiBAq5C3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            281 => 
            array (
                'id' => 1782,
                'font_id' => 760,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/teko/v5/OobFGE9eo24rcBpN6zXDaQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            282 => 
            array (
                'id' => 1783,
                'font_id' => 760,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/teko/v5/UtekqODEqZXSN2L-njejpA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            283 => 
            array (
                'id' => 1784,
                'font_id' => 760,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/teko/v5/FQ0duU7gWM4cSaImOfAjBA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            284 => 
            array (
                'id' => 1785,
                'font_id' => 760,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/teko/v5/QDx_i8H-TZ1IK1JEVrqwEQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            285 => 
            array (
                'id' => 1786,
                'font_id' => 760,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/teko/v5/xKfTxe_SWpH4xU75vmvylA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            286 => 
            array (
                'id' => 1787,
                'font_id' => 761,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/telex/v5/24-3xP9ywYeHOcFU3iGk8A.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            287 => 
            array (
                'id' => 1788,
                'font_id' => 762,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/tenaliramakrishna/v3/M0nTmDqv2M7AGoGh-c946BZak5pSBHqWX6uyVMiMFoA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            288 => 
            array (
                'id' => 1789,
                'font_id' => 763,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/tenorsans/v7/dUBulmjNJJInvK5vL7O9yfesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            289 => 
            array (
                'id' => 1790,
                'font_id' => 764,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/textmeone/v4/9em_3ckd_P5PQkP4aDyDLqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            290 => 
            array (
                'id' => 1791,
                'font_id' => 765,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/thegirlnextdoor/v7/cWRA4JVGeEcHGcPl5hmX7kzo0nFFoM60ux_D9BUymX4.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            291 => 
            array (
                'id' => 1792,
                'font_id' => 766,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/tienne/v8/-IIfDl701C0z7-fy2kmGvA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            292 => 
            array (
                'id' => 1793,
                'font_id' => 766,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/tienne/v8/JvoCDOlyOSEyYGRwCyfs3g.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            293 => 
            array (
                'id' => 1794,
                'font_id' => 766,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/tienne/v8/FBano5T521OWexj2iRYLMw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            294 => 
            array (
                'id' => 1795,
                'font_id' => 767,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/tillana/v1/zN0D-jDPsr1HzU3VRFLY5g.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            295 => 
            array (
                'id' => 1796,
                'font_id' => 767,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/tillana/v1/gqdUngSIcY9tSla5eCZky_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            296 => 
            array (
                'id' => 1797,
                'font_id' => 767,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/tillana/v1/fqon6-r15hy8M1cyiYfQBvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            297 => 
            array (
                'id' => 1798,
                'font_id' => 767,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/tillana/v1/jGARMTxLrMerzTCpGBpMffesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            298 => 
            array (
                'id' => 1799,
                'font_id' => 767,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/tillana/v1/pmTtNH_Ibktj5Cyc1XrP6vesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            299 => 
            array (
                'id' => 1800,
                'font_id' => 768,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/timmana/v1/T25SicsJUJkc2s2sbBsDnA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            300 => 
            array (
                'id' => 1801,
                'font_id' => 769,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/tinos/v9/EqpUbkVmutfwZ0PjpoGwCg.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            301 => 
            array (
                'id' => 1802,
                'font_id' => 769,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/tinos/v9/slfyzlasCr9vTsaP4lUh9A.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            302 => 
            array (
                'id' => 1803,
                'font_id' => 769,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/tinos/v9/vHXfhX8jZuQruowfon93yQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            303 => 
            array (
                'id' => 1804,
                'font_id' => 769,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/tinos/v9/M6kfzvDMM0CdxdraoFpG6vesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            304 => 
            array (
                'id' => 1805,
                'font_id' => 770,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/titanone/v4/FbvpRvzfV_oipS0De3iAZg.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            305 => 
            array (
                'id' => 1806,
                'font_id' => 771,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/titilliumweb/v4/anMUvcNT0H1YN4FII8wprzOdCrLccoxq42eaxM802O0.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            306 => 
            array (
                'id' => 1807,
                'font_id' => 771,
                'variant' => '200italic',
                'link' => 'http://fonts.gstatic.com/s/titilliumweb/v4/RZunN20OBmkvrU7sA4GPPj4N98U-66ThNJvtgddRfBE.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            307 => 
            array (
                'id' => 1808,
                'font_id' => 771,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/titilliumweb/v4/anMUvcNT0H1YN4FII8wpr9ZAkYT8DuUZELiKLwMGWAo.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            308 => 
            array (
                'id' => 1809,
                'font_id' => 771,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/titilliumweb/v4/RZunN20OBmkvrU7sA4GPPrfzCkqg7ORZlRf2cc4mXu8.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            309 => 
            array (
                'id' => 1810,
                'font_id' => 771,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/titilliumweb/v4/7XUFZ5tgS-tD6QamInJTcTyagQBwYgYywpS70xNq8SQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            310 => 
            array (
                'id' => 1811,
                'font_id' => 771,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/titilliumweb/v4/r9OmwyQxrgzUAhaLET_KO-ixohbIP6lHkU-1Mgq95cY.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            311 => 
            array (
                'id' => 1812,
                'font_id' => 771,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/titilliumweb/v4/anMUvcNT0H1YN4FII8wpr28K9dEd5Ue-HTQrlA7E2xQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            312 => 
            array (
                'id' => 1813,
                'font_id' => 771,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/titilliumweb/v4/RZunN20OBmkvrU7sA4GPPgOhzTSndyK8UWja2yJjKLc.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            313 => 
            array (
                'id' => 1814,
                'font_id' => 771,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/titilliumweb/v4/anMUvcNT0H1YN4FII8wpr2-6tpSbB9YhmWtmd1_gi_U.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            314 => 
            array (
                'id' => 1815,
                'font_id' => 771,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/titilliumweb/v4/RZunN20OBmkvrU7sA4GPPio3LEw-4MM8Ao2j9wPOfpw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            315 => 
            array (
                'id' => 1816,
                'font_id' => 771,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/titilliumweb/v4/anMUvcNT0H1YN4FII8wpr7L0GmZLri-m-nfoo0Vul4Y.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            316 => 
            array (
                'id' => 1817,
                'font_id' => 772,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/tradewinds/v5/sDOCVgAxw6PEUi2xdMsoDaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            317 => 
            array (
                'id' => 1818,
                'font_id' => 773,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/trirong/v1/A4AP1moxqvtadq5CW3L17A.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            318 => 
            array (
                'id' => 1819,
                'font_id' => 773,
                'variant' => '100italic',
                'link' => 'http://fonts.gstatic.com/s/trirong/v1/ke-m75CXBPHlqwRHmCTBi6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            319 => 
            array (
                'id' => 1820,
                'font_id' => 773,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/trirong/v1/QD8N5qk-agpAEYCSSWullPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            320 => 
            array (
                'id' => 1821,
                'font_id' => 773,
                'variant' => '200italic',
                'link' => 'http://fonts.gstatic.com/s/trirong/v1/TLnptEEWKdIVHKJYBO592y3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            321 => 
            array (
                'id' => 1822,
                'font_id' => 773,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/trirong/v1/mfCfGz4GqprWJZ47PUMDGfesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            322 => 
            array (
                'id' => 1823,
                'font_id' => 773,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/trirong/v1/RnkK09k5OfEHFxd_smcYuC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            323 => 
            array (
                'id' => 1824,
                'font_id' => 773,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/trirong/v1/lYu4kez-Enlvh2X-itx6CA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            324 => 
            array (
                'id' => 1825,
                'font_id' => 773,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/trirong/v1/kV0MzmWPKkglEtJf--dQhQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            325 => 
            array (
                'id' => 1826,
                'font_id' => 773,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/trirong/v1/6CsQ6UR1e8rURaEPxqnGBvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            326 => 
            array (
                'id' => 1827,
                'font_id' => 773,
                'variant' => '500italic',
                'link' => 'http://fonts.gstatic.com/s/trirong/v1/I7H5Vf-5oH45BHkyxaUodS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            327 => 
            array (
                'id' => 1828,
                'font_id' => 773,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/trirong/v1/1FjmLIhPhB6Yc7RWqO27mfesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            328 => 
            array (
                'id' => 1829,
                'font_id' => 773,
                'variant' => '600italic',
                'link' => 'http://fonts.gstatic.com/s/trirong/v1/BXLhSV51vCWUiACSqyWe6i3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            329 => 
            array (
                'id' => 1830,
                'font_id' => 773,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/trirong/v1/ab8hG5CTSzMAobTnPgcDP_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            330 => 
            array (
                'id' => 1831,
                'font_id' => 773,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/trirong/v1/CEBv6IoZawJuRHdATx4LQi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            331 => 
            array (
                'id' => 1832,
                'font_id' => 773,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/trirong/v1/UBRQXGJvi5EHcyI5wwZew_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            332 => 
            array (
                'id' => 1833,
                'font_id' => 773,
                'variant' => '800italic',
                'link' => 'http://fonts.gstatic.com/s/trirong/v1/lGUgSzOvjUqrsrJfnROivC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            333 => 
            array (
                'id' => 1834,
                'font_id' => 773,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/trirong/v1/Lam1ewMdiP3O-bVYT-W6t_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            334 => 
            array (
                'id' => 1835,
                'font_id' => 773,
                'variant' => '900italic',
                'link' => 'http://fonts.gstatic.com/s/trirong/v1/EtuLHyx5DS9oX5NoKhYlkC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            335 => 
            array (
                'id' => 1836,
                'font_id' => 774,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/trocchi/v5/uldNPaKrUGVeGCVsmacLwA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            336 => 
            array (
                'id' => 1837,
                'font_id' => 775,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/trochut/v4/6Y65B0x-2JsnYt16OH5omw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            337 => 
            array (
                'id' => 1838,
                'font_id' => 775,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/trochut/v4/pczUwr4ZFvC79TgNO5cZng.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            338 => 
            array (
                'id' => 1839,
                'font_id' => 775,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/trochut/v4/lWqNOv6ISR8ehNzGLFLnJ_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            339 => 
            array (
                'id' => 1840,
                'font_id' => 776,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/trykker/v5/YiVrVJpBFN7I1l_CWk6yYQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            340 => 
            array (
                'id' => 1841,
                'font_id' => 777,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/tulpenone/v6/lwcTfVIEVxpZLZlWzR5baPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            341 => 
            array (
                'id' => 1842,
                'font_id' => 778,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/ubuntu/v9/7-wH0j2QCTHKgp7vLh9-sQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            342 => 
            array (
                'id' => 1843,
                'font_id' => 778,
                'variant' => '300italic',
                'link' => 'http://fonts.gstatic.com/s/ubuntu/v9/j-TYDdXcC_eQzhhp386SjaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            343 => 
            array (
                'id' => 1844,
                'font_id' => 778,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ubuntu/v9/lhhB5ZCwEkBRbHMSnYuKyA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            344 => 
            array (
                'id' => 1845,
                'font_id' => 778,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/ubuntu/v9/b9hP8wd30SygxZjGGk4DCQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            345 => 
            array (
                'id' => 1846,
                'font_id' => 778,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/ubuntu/v9/bMbHEMwSUmkzcK2x_74QbA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            346 => 
            array (
                'id' => 1847,
                'font_id' => 778,
                'variant' => '500italic',
                'link' => 'http://fonts.gstatic.com/s/ubuntu/v9/NWdMogIO7U6AtEM4dDdf_aCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            347 => 
            array (
                'id' => 1848,
                'font_id' => 778,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/ubuntu/v9/B7BtHjNYwAp3HgLNagENOQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            348 => 
            array (
                'id' => 1849,
                'font_id' => 778,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/ubuntu/v9/pqisLQoeO9YTDCNnlQ9bf6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            349 => 
            array (
                'id' => 1850,
                'font_id' => 779,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ubuntucondensed/v7/DBCt-NXN57MTAFjitYxdrKDbm6fPDOZJsR8PmdG62gY.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            350 => 
            array (
                'id' => 1851,
                'font_id' => 780,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ubuntumono/v6/EgeuS9OtEmA0y_JRo03MQaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            351 => 
            array (
                'id' => 1852,
                'font_id' => 780,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/ubuntumono/v6/KAKuHXAHZOeECOWAHsRKA0eOrDcLawS7-ssYqLr2Xp4.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            352 => 
            array (
                'id' => 1853,
                'font_id' => 780,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/ubuntumono/v6/ceqTZGKHipo8pJj4molytne1Pd76Vl7zRpE7NLJQ7XU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            353 => 
            array (
                'id' => 1854,
                'font_id' => 780,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/ubuntumono/v6/n_d8tv_JOIiYyMXR4eaV9c_zJjSACmk0BRPxQqhnNLU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            354 => 
            array (
                'id' => 1855,
                'font_id' => 781,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/ultra/v8/OW8uXkOstRADuhEmGOFQLA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            355 => 
            array (
                'id' => 1856,
                'font_id' => 782,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/uncialantiqua/v4/F-leefDiFwQXsyd6eaSllqrFJ4O13IHVxZbM6yoslpo.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            356 => 
            array (
                'id' => 1857,
                'font_id' => 783,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/underdog/v5/gBv9yjez_-5PnTprHWq0ig.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            357 => 
            array (
                'id' => 1858,
                'font_id' => 784,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/unicaone/v4/KbYKlhWMDpatWViqDkNQgA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            358 => 
            array (
                'id' => 1859,
                'font_id' => 785,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/unifrakturcook/v8/ASwh69ykD8iaoYijVEU6RrWZkcsCTHKV51zmcUsafQ0.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            359 => 
            array (
                'id' => 1860,
                'font_id' => 786,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/unifrakturmaguntia/v7/7KWy3ymCVR_xfAvvcIXm3-kdNg30GQauG_DE-tMYtWk.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            360 => 
            array (
                'id' => 1861,
                'font_id' => 787,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/unkempt/v7/NLLBeNSspr0RGs71R5LHWA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            361 => 
            array (
                'id' => 1862,
                'font_id' => 787,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/unkempt/v7/V7H-GCl9bgwGwqFqTTgDHvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            362 => 
            array (
                'id' => 1863,
                'font_id' => 788,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/unlock/v6/rXEQzK7uIAlhoyoAEiMy1w.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            363 => 
            array (
                'id' => 1864,
                'font_id' => 789,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/unna/v9/UAS0AM7AmbdCNY_80xyAZQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            364 => 
            array (
                'id' => 1865,
                'font_id' => 789,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/unna/v9/CB25jfOme9BL61pT4h1_0A.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            365 => 
            array (
                'id' => 1866,
                'font_id' => 789,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/unna/v9/V-r3KRrJqBWlu97fCUB8Nw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            366 => 
            array (
                'id' => 1867,
                'font_id' => 789,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/unna/v9/H7rJH2hD4wVI9bOhx98O8A.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            367 => 
            array (
                'id' => 1868,
                'font_id' => 790,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/vt323/v8/ITU2YQfM073o1iYK3nSOmQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            368 => 
            array (
                'id' => 1869,
                'font_id' => 791,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/vampiroone/v7/OVDs4gY4WpS5u3Qd1gXRW6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            369 => 
            array (
                'id' => 1870,
                'font_id' => 792,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/varela/v7/ON7qs0cKUUixhhDFXlZUjw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            370 => 
            array (
                'id' => 1871,
                'font_id' => 793,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/varelaround/v8/APH4jr0uSos5wiut5cpjri3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            371 => 
            array (
                'id' => 1872,
                'font_id' => 794,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/vastshadow/v6/io4hqKX3ibiqQQjYfW0-h6CWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            372 => 
            array (
                'id' => 1873,
                'font_id' => 795,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/vesperlibre/v8/Cg-TeZFsqV8BaOcoVwzu2C3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            373 => 
            array (
                'id' => 1874,
                'font_id' => 795,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/vesperlibre/v8/0liLgNkygqH6EOtsVjZDsZMQuUSAwdHsY8ov_6tk1oA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            374 => 
            array (
                'id' => 1875,
                'font_id' => 795,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/vesperlibre/v8/0liLgNkygqH6EOtsVjZDsUD2ttfZwueP-QU272T9-k4.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            375 => 
            array (
                'id' => 1876,
                'font_id' => 795,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/vesperlibre/v8/0liLgNkygqH6EOtsVjZDsaObDOjC3UL77puoeHsE3fw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            376 => 
            array (
                'id' => 1877,
                'font_id' => 796,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/vibur/v7/xB9aKsUbJo68XP0bAg2iLw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            377 => 
            array (
                'id' => 1878,
                'font_id' => 797,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/vidaloka/v8/C6Nul0ogKUWkx356rrt9RA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            378 => 
            array (
                'id' => 1879,
                'font_id' => 798,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/viga/v5/uD87gDbhS7frHLX4uL6agg.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            379 => 
            array (
                'id' => 1880,
                'font_id' => 799,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/voces/v5/QoBH6g6yKgNIgvL8A2aE2Q.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            380 => 
            array (
                'id' => 1881,
                'font_id' => 800,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/volkhov/v8/MDIZAofe1T_J3un5Kgo8zg.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            381 => 
            array (
                'id' => 1882,
                'font_id' => 800,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/volkhov/v8/1rTjmztKEpbkKH06JwF8Yw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            382 => 
            array (
                'id' => 1883,
                'font_id' => 800,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/volkhov/v8/L8PbKS-kEoLHm7nP--NCzPesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            383 => 
            array (
                'id' => 1884,
                'font_id' => 800,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/volkhov/v8/W6oG0QDDjCgj0gmsHE520C3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            384 => 
            array (
                'id' => 1885,
                'font_id' => 801,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/vollkorn/v6/IiexqYAeh8uII223thYx3w.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            385 => 
            array (
                'id' => 1886,
                'font_id' => 801,
                'variant' => 'italic',
                'link' => 'http://fonts.gstatic.com/s/vollkorn/v6/UuIzosgR1ovBhJFdwVp3fvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            386 => 
            array (
                'id' => 1887,
                'font_id' => 801,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/vollkorn/v6/gOwQjJVGXlDOONC12hVoBqCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            387 => 
            array (
                'id' => 1888,
                'font_id' => 801,
                'variant' => '700italic',
                'link' => 'http://fonts.gstatic.com/s/vollkorn/v6/KNiAlx6phRqXCwnZZG51JAJKKGfqHaYFsRG-T3ceEVo.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            388 => 
            array (
                'id' => 1889,
                'font_id' => 802,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/voltaire/v6/WvqBzaGEBbRV-hrahwO2cA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            389 => 
            array (
                'id' => 1890,
                'font_id' => 803,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/waitingforthesunrise/v7/eNfH7kLpF1PZWpsetF-ha9TChrNgrDiT3Zy6yGf3FnM.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            390 => 
            array (
                'id' => 1891,
                'font_id' => 804,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/wallpoet/v8/hmum4WuBN4A0Z_7367NDIg.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            391 => 
            array (
                'id' => 1892,
                'font_id' => 805,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/walterturncoat/v6/sG9su5g4GXy1KP73cU3hvQplL2YwNeota48DxFlGDUo.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            392 => 
            array (
                'id' => 1893,
                'font_id' => 806,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/warnes/v6/MXG7_Phj4YpzAXxKGItuBw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            393 => 
            array (
                'id' => 1894,
                'font_id' => 807,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/wellfleet/v4/J5tOx72iFRPgHYpbK9J4XQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            394 => 
            array (
                'id' => 1895,
                'font_id' => 808,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/wendyone/v4/R8CJT2oDXdMk_ZtuHTxoxw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            395 => 
            array (
                'id' => 1896,
                'font_id' => 809,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/wireone/v7/sRLhaQOQpWnvXwIx0CycQw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            396 => 
            array (
                'id' => 1897,
                'font_id' => 810,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/worksans/v2/ZAhtNqLaAViKjGLajtuwWaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            397 => 
            array (
                'id' => 1898,
                'font_id' => 810,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/worksans/v2/u_mYNr_qYP37m7vgvmIYZy3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            398 => 
            array (
                'id' => 1899,
                'font_id' => 810,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/worksans/v2/FD_Udbezj8EHXbdsqLUply3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            399 => 
            array (
                'id' => 1900,
                'font_id' => 810,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/worksans/v2/zVvigUiMvx7JVEnrJgc-5Q.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            400 => 
            array (
                'id' => 1901,
                'font_id' => 810,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/worksans/v2/Nbre-U_bp6Xktt8cpgwaJC3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            401 => 
            array (
                'id' => 1902,
                'font_id' => 810,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/worksans/v2/z9rX03Xuz9ZNHTMg1_ghGS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            402 => 
            array (
                'id' => 1903,
                'font_id' => 810,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/worksans/v2/4udXuXg54JlPEP5iKO5AmS3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            403 => 
            array (
                'id' => 1904,
                'font_id' => 810,
                'variant' => '800',
                'link' => 'http://fonts.gstatic.com/s/worksans/v2/IQh-ap2Uqs7kl1YINeeEGi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            404 => 
            array (
                'id' => 1905,
                'font_id' => 810,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/worksans/v2/Hjn0acvjHfjY_vAK9Uc6gi3USBnSvpkopQaUR-2r7iU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            405 => 
            array (
                'id' => 1906,
                'font_id' => 811,
                'variant' => '200',
                'link' => 'http://fonts.gstatic.com/s/yanonekaffeesatz/v8/We_iSDqttE3etzfdfhuPRbq92v6XxU4pSv06GI0NsGc.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            406 => 
            array (
                'id' => 1907,
                'font_id' => 811,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/yanonekaffeesatz/v8/We_iSDqttE3etzfdfhuPRZlIwXPiNoNT_wxzJ2t3mTE.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            407 => 
            array (
                'id' => 1908,
                'font_id' => 811,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/yanonekaffeesatz/v8/YDAoLskQQ5MOAgvHUQCcLdXn3cHbFGWU4T2HrSN6JF4.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            408 => 
            array (
                'id' => 1909,
                'font_id' => 811,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/yanonekaffeesatz/v8/We_iSDqttE3etzfdfhuPRf2R4S6PlKaGXWPfWpHpcl0.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            409 => 
            array (
                'id' => 1910,
                'font_id' => 812,
                'variant' => '100',
                'link' => 'http://fonts.gstatic.com/s/yantramanav/v1/Rs1I2PF4Z8GAb6qjgvr8wIAWxXGWZ3yJw6KhWS7MxOk.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            410 => 
            array (
                'id' => 1911,
                'font_id' => 812,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/yantramanav/v1/HSfbC4Z8I8BZ00wiXeA5bC9-WlPSxbfiI49GsXo3q0g.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            411 => 
            array (
                'id' => 1912,
                'font_id' => 812,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/yantramanav/v1/FwdziO-qWAO8pZg8e376kaCWcynf_cDxXwCLxiixG1c.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            412 => 
            array (
                'id' => 1913,
                'font_id' => 812,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/yantramanav/v1/HSfbC4Z8I8BZ00wiXeA5bMCNfqCYlB_eIx7H1TVXe60.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            413 => 
            array (
                'id' => 1914,
                'font_id' => 812,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/yantramanav/v1/HSfbC4Z8I8BZ00wiXeA5bHe1Pd76Vl7zRpE7NLJQ7XU.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            414 => 
            array (
                'id' => 1915,
                'font_id' => 812,
                'variant' => '900',
                'link' => 'http://fonts.gstatic.com/s/yantramanav/v1/HSfbC4Z8I8BZ00wiXeA5bCenaqEuufTBk9XMKnKmgDA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            415 => 
            array (
                'id' => 1916,
                'font_id' => 813,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/yatraone/v1/ApKQzWF7_vG0Lt5TDqgUvw.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            416 => 
            array (
                'id' => 1917,
                'font_id' => 814,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/yellowtail/v6/HLrU6lhCTjXfLZ7X60LcB_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            417 => 
            array (
                'id' => 1918,
                'font_id' => 815,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/yesevaone/v11/eenQQxvpzSA80JmisGcgX_esZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            418 => 
            array (
                'id' => 1919,
                'font_id' => 816,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/yesteryear/v5/dv09hP_ZrdjVOfZQXKXuZvesZW2xOQ-xsNqO47m55DA.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            419 => 
            array (
                'id' => 1920,
                'font_id' => 817,
                'variant' => '300',
                'link' => 'http://fonts.gstatic.com/s/yrsa/v1/YI0C1syzAYpkrPx27UnC2w.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            420 => 
            array (
                'id' => 1921,
                'font_id' => 817,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/yrsa/v1/JWX_dCK4_Jq-oqF7r9rFHg.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            421 => 
            array (
                'id' => 1922,
                'font_id' => 817,
                'variant' => '500',
                'link' => 'http://fonts.gstatic.com/s/yrsa/v1/rWuZmBLHIeKRbnfSvWCvYg.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            422 => 
            array (
                'id' => 1923,
                'font_id' => 817,
                'variant' => '600',
                'link' => 'http://fonts.gstatic.com/s/yrsa/v1/1413P-oEfrq-tBIdqnslDQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            423 => 
            array (
                'id' => 1924,
                'font_id' => 817,
                'variant' => '700',
                'link' => 'http://fonts.gstatic.com/s/yrsa/v1/iV49zaJV5wyo_4LgxE2yng.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
            424 => 
            array (
                'id' => 1925,
                'font_id' => 818,
                'variant' => 'regular',
                'link' => 'http://fonts.gstatic.com/s/zeyada/v6/hmonmGYYFwqTZQfG2nRswQ.ttf',
                'created_at' => '2017-05-11 09:09:17',
                'updated_at' => '2017-05-11 09:09:17',
            ),
        ));
        
        
    }
}