<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('countries')->insert(array (
            0 =>
            array (
                'id' => 1,
                'continent_id' => 3,
                'name' => 'Cameroon',
                'full_name' => 'the Republic of Cameroon',
                'code' => 'cm',
                'emoji' => '🇨🇲',
            ),
            1 =>
            array (
                'id' => 2,
                'continent_id' => 3,
                'name' => 'Benin',
                'full_name' => 'the Republic of Benin ',
                'code' => 'bj',
                'emoji' => '🇧🇯',
            ),
            2 =>
            array (
                'id' => 3,
                'continent_id' => 3,
                'name' => 'Madagascar',
                'full_name' => 'the Republic of Madagascar ',
                'code' => 'mg',
                'emoji' => '🇲🇬',
            ),
            3 =>
            array (
                'id' => 4,
                'continent_id' => 3,
                'name' => 'Rwanda',
                'full_name' => 'the Republic of Rwanda',
                'code' => 'rw',
                'emoji' => '🇷🇼',
            ),
            4 =>
            array (
                'id' => 5,
                'continent_id' => 3,
                'name' => 'Seychelles',
                'full_name' => 'the Republic of Seychelles',
                'code' => 'sc',
                'emoji' => '🇸🇨',
            ),
            5 =>
            array (
                'id' => 6,
                'continent_id' => 3,
                'name' => 'Cote d\'lvoire',
                'full_name' => 'the Republic of Cote d\'ivoire',
                'code' => 'ci',
                'emoji' => '🇨🇮',
            ),
            6 =>
            array (
                'id' => 7,
                'continent_id' => 3,
                'name' => 'Egypt',
                'full_name' => 'the Arab Republic of Egypt ',
                'code' => 'eg',
                'emoji' => '🇪🇬',
            ),
            7 =>
            array (
                'id' => 8,
                'continent_id' => 3,
                'name' => 'Mauritius',
                'full_name' => 'the Republic of Mauritius',
                'code' => 'mu',
                'emoji' => '🇲🇺',
            ),
            8 =>
            array (
                'id' => 9,
                'continent_id' => 3,
                'name' => 'Burkina Faso',
                'full_name' => 'Burkina Faso',
                'code' => 'bf',
                'emoji' => '🇧🇫',
            ),
            9 =>
            array (
                'id' => 10,
                'continent_id' => 3,
                'name' => 'Eritrea',
                'full_name' => 'the Commonwealth of Eritrea',
                'code' => 'er',
                'emoji' => '🇪🇷',
            ),
            10 =>
            array (
                'id' => 11,
                'continent_id' => 3,
                'name' => 'Sao Tome and Principe',
                'full_name' => 'the Democratic Republic Sao Tome and Principe',
                'code' => 'st',
                'emoji' => '🇸🇹',
            ),
            11 =>
            array (
                'id' => 12,
                'continent_id' => 3,
                'name' => 'Angola',
                'full_name' => 'the Republic of Angola',
                'code' => 'ao',
                'emoji' => '🇦🇴',
            ),
            12 =>
            array (
                'id' => 13,
                'continent_id' => 3,
                'name' => 'Libyan Arab Jm',
                'full_name' => 'State of Libya',
                'code' => 'ly',
                'emoji' => '🇱🇾',
            ),
            13 =>
            array (
                'id' => 14,
                'continent_id' => 3,
                'name' => 'Zimbabwe',
                'full_name' => 'the Republic of Zimbabwe',
                'code' => 'zw',
                'emoji' => '🇿🇼',
            ),
            14 =>
            array (
                'id' => 15,
                'continent_id' => 3,
                'name' => 'Guinea',
                'full_name' => 'The Republic of Guinea',
                'code' => 'gn',
                'emoji' => '🇬🇳',
            ),
            15 =>
            array (
                'id' => 16,
                'continent_id' => 3,
                'name' => 'Sierra Leone',
                'full_name' => 'The Republic of Sierra Leone',
                'code' => 'sl',
                'emoji' => '🇸🇱',
            ),
            16 =>
            array (
                'id' => 17,
                'continent_id' => 3,
                'name' => 'Reunion',
                'full_name' => 'Reunion Island',
                'code' => 're',
                'emoji' => '🇷🇪',
            ),
            17 =>
            array (
                'id' => 18,
                'continent_id' => 3,
                'name' => 'Gabon',
                'full_name' => 'The Gabonese Republic',
                'code' => 'ga',
                'emoji' => '🇬🇦',
            ),
            18 =>
            array (
                'id' => 19,
                'continent_id' => 3,
                'name' => 'Ghana',
                'full_name' => 'The Republic of Ghana',
                'code' => 'gh',
                'emoji' => '🇬🇭',
            ),
            19 =>
            array (
                'id' => 20,
                'continent_id' => 3,
                'name' => 'Tanzania',
                'full_name' => 'The United Republic of Tanzania',
                'code' => 'tz',
                'emoji' => '🇹🇿',
            ),
            20 =>
            array (
                'id' => 21,
                'continent_id' => 3,
                'name' => 'Mali',
                'full_name' => 'The Republic of Mali',
                'code' => 'ml',
                'emoji' => '🇲🇱',
            ),
            21 =>
            array (
                'id' => 22,
                'continent_id' => 3,
                'name' => 'Somalia',
                'full_name' => 'The Somalia Democratic Republic',
                'code' => 'so',
                'emoji' => '🇸🇴',
            ),
            22 =>
            array (
                'id' => 23,
                'continent_id' => 3,
                'name' => 'Mauritania',
                'full_name' => 'The Islamic Republic of Mauritania',
                'code' => 'mr',
                'emoji' => '🇲🇷',
            ),
            23 =>
            array (
                'id' => 24,
                'continent_id' => 3,
                'name' => 'Uganda',
                'full_name' => 'The Republic of Uganda',
                'code' => 'ug',
                'emoji' => '🇺🇬',
            ),
            24 =>
            array (
                'id' => 25,
                'continent_id' => 3,
                'name' => 'Chad',
                'full_name' => 'The Republic of Chad',
                'code' => 'td',
                'emoji' => '🇹🇩',
            ),
            25 =>
            array (
                'id' => 26,
                'continent_id' => 3,
                'name' => 'Mayotte',
                'full_name' => 'Territorial Collectivity of Mayotte',
                'code' => 'yt',
                'emoji' => '🇾🇹',
            ),
            26 =>
            array (
                'id' => 27,
                'continent_id' => 3,
                'name' => 'Comoros',
                'full_name' => 'Union of Comoros',
                'code' => 'km',
                'emoji' => '🇰🇲',
            ),
            27 =>
            array (
                'id' => 28,
                'continent_id' => 3,
                'name' => 'Botswana',
                'full_name' => 'The Republic of Botswana',
                'code' => 'bw',
                'emoji' => '🇧🇼',
            ),
            28 =>
            array (
                'id' => 29,
                'continent_id' => 3,
                'name' => 'Senegal',
                'full_name' => 'the Republic of Senegal',
                'code' => 'sn',
                'emoji' => '🇸🇳',
            ),
            29 =>
            array (
                'id' => 30,
                'continent_id' => 3,
                'name' => 'Swaziland',
                'full_name' => 'The Kingdom of Swaziland',
                'code' => 'sz',
                'emoji' => '🇸🇿',
            ),
            30 =>
            array (
                'id' => 31,
                'continent_id' => 3,
                'name' => 'Guinea Bissau',
                'full_name' => 'The Republic of Guinea-Bissau',
                'code' => 'gw',
                'emoji' => '🇬🇼',
            ),
            31 =>
            array (
                'id' => 32,
                'continent_id' => 3,
                'name' => 'DR Congo',
                'full_name' => 'Democratic Republic of the Congo',
                'code' => 'cd',
                'emoji' => '🇨🇩',
            ),
            32 =>
            array (
                'id' => 33,
                'continent_id' => 3,
                'name' => 'Central African',
                'full_name' => 'The Central African Republic',
                'code' => 'cf',
                'emoji' => '🇨🇫',
            ),
            33 =>
            array (
                'id' => 34,
                'continent_id' => 3,
                'name' => 'Lesotho',
                'full_name' => 'The Kingdom of Lesotho',
                'code' => 'ls',
                'emoji' => '🇱🇸',
            ),
            34 =>
            array (
                'id' => 35,
                'continent_id' => 3,
                'name' => 'Congo',
                'full_name' => 'Republic of the Congo',
                'code' => 'cg',
                'emoji' => '🇨🇬',
            ),
            35 =>
            array (
                'id' => 36,
                'continent_id' => 3,
                'name' => 'South Africa',
                'full_name' => 'The Republic of South Africa',
                'code' => 'za',
                'emoji' => '🇿🇦',
            ),
            36 =>
            array (
                'id' => 37,
                'continent_id' => 3,
                'name' => 'Liberia',
                'full_name' => 'The Republic of Liberia',
                'code' => 'lr',
                'emoji' => '🇱🇷',
            ),
            37 =>
            array (
                'id' => 38,
                'continent_id' => 3,
                'name' => 'Tunisia',
                'full_name' => 'The Republic of Tunisia',
                'code' => 'tn',
                'emoji' => '🇹🇳',
            ),
            38 =>
            array (
                'id' => 39,
                'continent_id' => 3,
                'name' => 'Zambia',
                'full_name' => 'The Republic of Zambia',
                'code' => 'zm',
                'emoji' => '🇿🇲',
            ),
            39 =>
            array (
                'id' => 40,
                'continent_id' => 3,
                'name' => 'Niger',
                'full_name' => 'The Republic of Niger',
                'code' => 'ne',
                'emoji' => '🇳🇪',
            ),
            40 =>
            array (
                'id' => 41,
                'continent_id' => 3,
                'name' => 'Western Sahara',
                'full_name' => 'the Sahrawi Arab Democratic Republic Western Sahara',
                'code' => 'eh',
                'emoji' => '🇪🇭',
            ),
            41 =>
            array (
                'id' => 42,
                'continent_id' => 3,
                'name' => 'Togo',
                'full_name' => 'The Republic of Togo',
                'code' => 'tg',
                'emoji' => '🇹🇬',
            ),
            42 =>
            array (
                'id' => 43,
                'continent_id' => 3,
                'name' => 'Namibia',
                'full_name' => 'The Republic of Namibia',
                'code' => 'na',
                'emoji' => '🇳🇦',
            ),
            43 =>
            array (
                'id' => 44,
                'continent_id' => 3,
                'name' => 'Mozambique',
                'full_name' => 'The Republic of Mozambique',
                'code' => 'mz',
                'emoji' => '🇲🇿',
            ),
            44 =>
            array (
                'id' => 45,
                'continent_id' => 3,
                'name' => 'Ethiopia',
                'full_name' => 'The Federal Democratic Republic of Ethiopia',
                'code' => 'et',
                'emoji' => '🇪🇹',
            ),
            45 =>
            array (
                'id' => 46,
                'continent_id' => 3,
                'name' => 'Morocco',
                'full_name' => 'The Kingdom of Morocco',
                'code' => 'ma',
                'emoji' => '🇲🇦',
            ),
            46 =>
            array (
                'id' => 47,
                'continent_id' => 3,
                'name' => 'Malawi',
                'full_name' => 'The Republic of Malawi',
                'code' => 'mw',
                'emoji' => '🇲🇼',
            ),
            47 =>
            array (
                'id' => 48,
                'continent_id' => 3,
                'name' => 'Nigeria',
                'full_name' => 'Federal Republic of Nigeria',
                'code' => 'ng',
                'emoji' => '🇳🇬',
            ),
            48 =>
            array (
                'id' => 49,
                'continent_id' => 3,
                'name' => 'Cape Verde',
                'full_name' => 'The Republic of Cape Verde',
                'code' => 'cv',
                'emoji' => '🇨🇻',
            ),
            49 =>
            array (
                'id' => 50,
                'continent_id' => 3,
                'name' => 'Burundi',
                'full_name' => 'The Republic of Burundi',
                'code' => 'bi',
                'emoji' => '🇧🇮',
            ),
            50 =>
            array (
                'id' => 51,
                'continent_id' => 3,
                'name' => 'Algeria',
                'full_name' => 'People\'s Democratic Republic of Algeria',
                'code' => 'dz',
                'emoji' => '🇩🇿',
            ),
            51 =>
            array (
                'id' => 52,
                'continent_id' => 3,
                'name' => 'Djibouti',
                'full_name' => 'The Republic of Djibouti',
                'code' => 'dj',
                'emoji' => '🇩🇯',
            ),
            52 =>
            array (
                'id' => 53,
                'continent_id' => 3,
                'name' => 'Gambia',
                'full_name' => 'Islamic Republic of Gambia',
                'code' => 'gp',
                'emoji' => '🇬🇵',
            ),
            53 =>
            array (
                'id' => 54,
                'continent_id' => 3,
                'name' => 'Eq.Guinea',
                'full_name' => 'The Republic of Equatorial Guinea',
                'code' => 'gq',
                'emoji' => '🇬🇶',
            ),
            54 =>
            array (
                'id' => 55,
                'continent_id' => 3,
                'name' => 'Sudan',
                'full_name' => 'The Republic of Sudan',
                'code' => 'sd',
                'emoji' => '🇸🇩',
            ),
            55 =>
            array (
                'id' => 56,
                'continent_id' => 3,
                'name' => 'Kenya',
                'full_name' => 'The Republic of Kenya',
                'code' => 'ke',
                'emoji' => '🇰🇪',
            ),
            56 =>
            array (
                'id' => 57,
                'continent_id' => 1,
                'name' => 'Singapore',
                'full_name' => 'Republic of Singapore',
                'code' => 'sg',
                'emoji' => '🇸🇬',
            ),
            57 =>
            array (
                'id' => 58,
                'continent_id' => 1,
                'name' => 'Korea',
                'full_name' => 'Republic of Korea',
                'code' => 'kr',
                'emoji' => '🇰🇷',
            ),
            58 =>
            array (
                'id' => 59,
                'continent_id' => 1,
                'name' => 'Syrian',
                'full_name' => 'The Syrian Arab Republic',
                'code' => 'sy',
                'emoji' => '🇸🇾',
            ),
            59 =>
            array (
                'id' => 60,
                'continent_id' => 1,
                'name' => 'Uzbekstan',
                'full_name' => 'The Republic of Uzbekistan',
                'code' => 'uz',
                'emoji' => '🇺🇿',
            ),
            60 =>
            array (
                'id' => 61,
                'continent_id' => 1,
                'name' => 'Bahrian',
                'full_name' => 'The Kingdom of Bahrain',
                'code' => 'bh',
                'emoji' => '🇧🇭',
            ),
            61 =>
            array (
                'id' => 62,
                'continent_id' => 1,
                'name' => 'Japan',
                'full_name' => 'Japan',
                'code' => 'jp',
                'emoji' => '🇯🇵',
            ),
            62 =>
            array (
                'id' => 63,
                'continent_id' => 1,
                'name' => 'Jordan',
                'full_name' => 'The Hashemite Kingdom of Jordan',
                'code' => 'jo',
                'emoji' => '🇯🇴',
            ),
            63 =>
            array (
                'id' => 64,
                'continent_id' => 1,
                'name' => 'Vietnam',
                'full_name' => 'Socialist Republic of Vietnam',
                'code' => 'vn',
                'emoji' => '🇻🇳',
            ),
            64 =>
            array (
                'id' => 65,
                'continent_id' => 1,
                'name' => 'Kirghizia',
                'full_name' => 'The Kyrgyz Republic',
                'code' => 'kg',
                'emoji' => '🇰🇬',
            ),
            65 =>
            array (
                'id' => 66,
                'continent_id' => 1,
                'name' => 'Thailand',
                'full_name' => 'Kingdom of Thailand',
                'code' => 'th',
                'emoji' => '🇹🇭',
            ),
            66 =>
            array (
                'id' => 67,
                'continent_id' => 1,
                'name' => 'Sri Lanka',
                'full_name' => 'The Democratic Socialist Republic of Sri Lanka',
                'code' => 'lk',
                'emoji' => '🇱🇰',
            ),
            67 =>
            array (
                'id' => 68,
                'continent_id' => 1,
                'name' => 'United Arab Emirates',
                'full_name' => 'The United Arab Emirates',
                'code' => 'ae',
                'emoji' => '🇦🇪',
            ),
            68 =>
            array (
                'id' => 69,
                'continent_id' => 1,
                'name' => 'Laos',
                'full_name' => 'Lao People\'s Democratic Republic',
                'code' => 'la',
                'emoji' => '🇱🇦',
            ),
            69 =>
            array (
                'id' => 70,
                'continent_id' => 1,
                'name' => 'Afghanistan',
                'full_name' => 'the Islamic Republic of Afghanistan',
                'code' => 'af',
                'emoji' => '🇦🇫',
            ),
            70 =>
            array (
                'id' => 71,
                'continent_id' => 1,
                'name' => 'Macau',
                'full_name' => 'Macau Macao',
                'code' => 'mo',
                'emoji' => '🇲🇴',
            ),
            71 =>
            array (
                'id' => 72,
                'continent_id' => 1,
                'name' => 'Tajikistan',
                'full_name' => 'The Republic of Tajikistan',
                'code' => 'tj',
                'emoji' => '🇹🇯',
            ),
            72 =>
            array (
                'id' => 73,
                'continent_id' => 1,
                'name' => 'Korea,DPR',
                'full_name' => 'Democratic People\'s Republic of Korea',
                'code' => 'kp',
                'emoji' => '🇰🇵',
            ),
            73 =>
            array (
                'id' => 74,
                'continent_id' => 1,
                'name' => 'Palestine',
                'full_name' => 'The State of Palestine',
                'code' => 'ps',
                'emoji' => '🇵🇸',
            ),
            74 =>
            array (
                'id' => 75,
                'continent_id' => 1,
                'name' => 'Hong Kong',
                'full_name' => 'Hong Kong',
                'code' => 'hk',
                'emoji' => '🇭🇰',
            ),
            75 =>
            array (
                'id' => 76,
                'continent_id' => 1,
                'name' => 'Iraq',
                'full_name' => 'Republic Of Iraq',
                'code' => 'iq',
                'emoji' => '🇮🇶',
            ),
            76 =>
            array (
                'id' => 77,
                'continent_id' => 1,
                'name' => 'Lebanon',
                'full_name' => 'The Republic of Lebanon',
                'code' => 'lb',
                'emoji' => '🇱🇧',
            ),
            77 =>
            array (
                'id' => 78,
                'continent_id' => 1,
                'name' => 'Kuwait',
                'full_name' => 'The State of Kuwait',
                'code' => 'kw',
                'emoji' => '🇰🇼',
            ),
            78 =>
            array (
                'id' => 79,
                'continent_id' => 1,
                'name' => 'Brunei',
                'full_name' => 'Brunei Darussalam',
                'code' => 'bn',
                'emoji' => '🇧🇳',
            ),
            79 =>
            array (
                'id' => 80,
                'continent_id' => 1,
                'name' => 'Maldives',
                'full_name' => 'The Republic of Maldives',
                'code' => 'mv',
                'emoji' => '🇲🇻',
            ),
            80 =>
            array (
                'id' => 81,
                'continent_id' => 1,
                'name' => 'Indonesia',
                'full_name' => 'The Republic of Indonesia',
                'code' => 'id',
                'emoji' => '🇮🇩',
            ),
            81 =>
            array (
                'id' => 82,
                'continent_id' => 1,
                'name' => 'Israel',
                'full_name' => 'The State of Israel',
                'code' => 'il',
                'emoji' => '🇮🇱',
            ),
            82 =>
            array (
                'id' => 83,
                'continent_id' => 1,
                'name' => 'Mongolia',
                'full_name' => 'Mongolia',
                'code' => 'mn',
                'emoji' => '🇲🇳',
            ),
            83 =>
            array (
                'id' => 84,
                'continent_id' => 1,
                'name' => 'Oman',
                'full_name' => 'Sultanate of Oman',
                'code' => 'om',
                'emoji' => '🇴🇲',
            ),
            84 =>
            array (
                'id' => 85,
                'continent_id' => 1,
                'name' => 'India',
                'full_name' => 'The Republic of India',
                'code' => 'in',
                'emoji' => '🇮🇳',
            ),
            85 =>
            array (
                'id' => 86,
                'continent_id' => 1,
                'name' => 'Myanmar',
                'full_name' => 'Republic Of The Union Of Myanmar',
                'code' => 'mm',
                'emoji' => '🇲🇲',
            ),
            86 =>
            array (
                'id' => 87,
                'continent_id' => 1,
                'name' => 'Malaysia',
                'full_name' => 'Malaysia',
                'code' => 'my',
                'emoji' => '🇲🇾',
            ),
            87 =>
            array (
                'id' => 88,
                'continent_id' => 1,
                'name' => 'East Timor',
                'full_name' => 'Democratic Republic of East Timor',
                'code' => 'tl',
                'emoji' => '🇹🇱',
            ),
            88 =>
            array (
                'id' => 89,
                'continent_id' => 1,
                'name' => 'Yemen',
                'full_name' => 'The Republic of Yemen',
                'code' => 'ye',
                'emoji' => '🇾🇪',
            ),
            89 =>
            array (
                'id' => 90,
                'continent_id' => 1,
                'name' => 'Bhutan',
                'full_name' => 'Kingdom of Bhutan',
                'code' => 'bt',
                'emoji' => '🇧🇹',
            ),
            90 =>
            array (
                'id' => 91,
                'continent_id' => 1,
                'name' => 'Cambodia',
                'full_name' => 'Kingdom of Cambodia',
                'code' => 'kh',
                'emoji' => '🇰🇭',
            ),
            91 =>
            array (
                'id' => 92,
                'continent_id' => 1,
                'name' => 'Pakistan',
                'full_name' => 'the Islamic Republic of Pakistan',
                'code' => 'pk',
                'emoji' => '🇵🇰',
            ),
            92 =>
            array (
                'id' => 93,
                'continent_id' => 1,
                'name' => 'Bangladesh',
                'full_name' => 'People\'s Republic of Bangladesh',
                'code' => 'bd',
                'emoji' => '🇧🇩',
            ),
            93 =>
            array (
                'id' => 94,
                'continent_id' => 1,
                'name' => 'Saudi Arabia',
                'full_name' => 'Kingdom of Saudi Arabia',
                'code' => 'sa',
                'emoji' => '🇸🇦',
            ),
            94 =>
            array (
                'id' => 95,
                'continent_id' => 1,
                'name' => 'Turkmenistan',
                'full_name' => 'Turkmenistan',
                'code' => 'tm',
                'emoji' => '🇹🇲',
            ),
            95 =>
            array (
                'id' => 96,
                'continent_id' => 1,
                'name' => 'Qatar',
                'full_name' => 'The State of Qatar',
                'code' => 'qa',
                'emoji' => '🇶🇦',
            ),
            96 =>
            array (
                'id' => 97,
                'continent_id' => 1,
                'name' => 'Nepal',
                'full_name' => 'Federal Democratic Republic of Nepal',
                'code' => 'np',
                'emoji' => '🇳🇵',
            ),
            97 =>
            array (
                'id' => 98,
                'continent_id' => 1,
                'name' => 'Kazakhstan',
                'full_name' => 'The Republic of Kazakhstan',
                'code' => 'kz',
                'emoji' => '🇰🇿',
            ),
            98 =>
            array (
                'id' => 99,
                'continent_id' => 1,
                'name' => 'Philippines',
                'full_name' => 'Republic of the Philippines',
                'code' => 'ph',
                'emoji' => '🇵🇭',
            ),
            99 =>
            array (
                'id' => 100,
                'continent_id' => 1,
                'name' => 'Taiwan',
                'full_name' => 'Taiwan',
                'code' => 'tw',
                'emoji' => '🇹🇼',
            ),
            100 =>
            array (
                'id' => 101,
                'continent_id' => 1,
                'name' => 'China',
                'full_name' => 'People\'s Republic of China',
                'code' => 'cn',
                'emoji' => '🇨🇳',
            ),
            101 =>
            array (
                'id' => 102,
                'continent_id' => 1,
                'name' => 'Iran',
                'full_name' => 'The Islamic Republic of Iran',
                'code' => 'ir',
                'emoji' => '🇮🇷',
            ),
            102 =>
            array (
                'id' => 103,
                'continent_id' => 6,
                'name' => 'Costa Rica',
                'full_name' => 'Republic of Costa Rica',
                'code' => 'cr',
                'emoji' => '🇨🇷',
            ),
            103 =>
            array (
                'id' => 104,
                'continent_id' => 6,
                'name' => 'Cuba',
                'full_name' => 'The Republic of Cuba',
                'code' => 'cu',
                'emoji' => '🇨🇺',
            ),
            104 =>
            array (
                'id' => 105,
                'continent_id' => 6,
                'name' => 'Dominican',
                'full_name' => 'The Dominican Republic',
                'code' => 'do',
                'emoji' => '🇩🇴',
            ),
            105 =>
            array (
                'id' => 106,
                'continent_id' => 6,
                'name' => 'Mexico',
                'full_name' => 'The United States of Mexico',
                'code' => 'mx',
                'emoji' => '🇲🇽',
            ),
            106 =>
            array (
                'id' => 107,
                'continent_id' => 6,
                'name' => 'Nicaragua',
                'full_name' => 'The Republic of Nicaragua',
                'code' => 'ni',
                'emoji' => '🇳🇮',
            ),
            107 =>
            array (
                'id' => 108,
                'continent_id' => 6,
                'name' => 'Panama',
                'full_name' => 'The Republic of Panama',
                'code' => 'pa',
                'emoji' => '🇵🇦',
            ),
            108 =>
            array (
                'id' => 109,
                'continent_id' => 7,
                'name' => 'Netherlands Antilles',
                'full_name' => 'Netherlands Antilles',
                'code' => 'an',
                'emoji' => NULL,
            ),
            109 =>
            array (
                'id' => 110,
                'continent_id' => 6,
                'name' => 'El Salvador',
                'full_name' => 'The Republic of El Salvador',
                'code' => 'sv',
                'emoji' => '🇸🇻',
            ),
            110 =>
            array (
                'id' => 111,
                'continent_id' => 6,
                'name' => 'Puerto Rico',
                'full_name' => 'The Commonwealth of Puerto Rico',
                'code' => 'pr',
                'emoji' => '🇵🇷',
            ),
            111 =>
            array (
                'id' => 112,
                'continent_id' => 6,
                'name' => 'Saint Vincent and the Grenadines',
                'full_name' => 'Saint Vincent and the Grenadines',
                'code' => 'vc',
                'emoji' => '🇻🇨',
            ),
            112 =>
            array (
                'id' => 113,
                'continent_id' => 6,
                'name' => 'Honduras',
                'full_name' => 'Republic of Honduras',
                'code' => 'hn',
                'emoji' => '🇭🇳',
            ),
            113 =>
            array (
                'id' => 114,
                'continent_id' => 6,
                'name' => 'Guatemala',
                'full_name' => 'The Republic of Guatemala',
                'code' => 'gt',
                'emoji' => '🇬🇹',
            ),
            114 =>
            array (
                'id' => 115,
                'continent_id' => 2,
                'name' => 'Georgia',
                'full_name' => 'Georgia',
                'code' => 'ge',
                'emoji' => '🇬🇪',
            ),
            115 =>
            array (
                'id' => 116,
                'continent_id' => 2,
                'name' => 'Armenia',
                'full_name' => 'The Republic of Armenia',
                'code' => 'am',
                'emoji' => '🇦🇲',
            ),
            116 =>
            array (
                'id' => 117,
                'continent_id' => 2,
                'name' => 'Azerbaijan',
                'full_name' => 'The Republic of Azerbaijan',
                'code' => 'az',
                'emoji' => '🇦🇿',
            ),
            117 =>
            array (
                'id' => 118,
                'continent_id' => 2,
                'name' => 'Belarus',
                'full_name' => 'The Republic of Belarus',
                'code' => 'by',
                'emoji' => '🇧🇾',
            ),
            118 =>
            array (
                'id' => 119,
                'continent_id' => 2,
                'name' => 'Russia',
                'full_name' => 'Russian Federation',
                'code' => 'ru',
                'emoji' => '🇷🇺',
            ),
            119 =>
            array (
                'id' => 120,
                'continent_id' => 2,
                'name' => 'Ukraine',
                'full_name' => 'Ukraine',
                'code' => 'ua',
                'emoji' => '🇺🇦',
            ),
            120 =>
            array (
                'id' => 121,
                'continent_id' => 2,
                'name' => 'Hungary',
                'full_name' => 'Hungary',
                'code' => 'hu',
                'emoji' => '🇭🇺',
            ),
            121 =>
            array (
                'id' => 122,
                'continent_id' => 2,
                'name' => 'Iceland',
                'full_name' => 'The Republic of Iceland',
                'code' => 'is',
                'emoji' => '🇮🇸',
            ),
            122 =>
            array (
                'id' => 123,
                'continent_id' => 2,
                'name' => 'Malta',
                'full_name' => 'Republic of Malta',
                'code' => 'mt',
                'emoji' => '🇲🇹',
            ),
            123 =>
            array (
                'id' => 124,
                'continent_id' => 2,
                'name' => 'Monaco',
                'full_name' => 'The Principality of Monaco',
                'code' => 'mc',
                'emoji' => '🇲🇨',
            ),
            124 =>
            array (
                'id' => 125,
                'continent_id' => 2,
                'name' => 'Norway',
                'full_name' => 'The Kingdom of Norway',
                'code' => 'no',
                'emoji' => '🇳🇴',
            ),
            125 =>
            array (
                'id' => 126,
                'continent_id' => 2,
                'name' => 'Romania',
                'full_name' => 'Romania',
                'code' => 'ro',
                'emoji' => '🇷🇴',
            ),
            126 =>
            array (
                'id' => 127,
                'continent_id' => 2,
                'name' => 'San Marino',
                'full_name' => 'The Republic of San Marino',
                'code' => 'sm',
                'emoji' => '🇸🇲',
            ),
            127 =>
            array (
                'id' => 128,
                'continent_id' => 2,
                'name' => 'Sweden',
                'full_name' => 'The Kingdom of Sweden',
                'code' => 'se',
                'emoji' => '🇸🇪',
            ),
            128 =>
            array (
                'id' => 129,
                'continent_id' => 2,
                'name' => 'Switzerland',
                'full_name' => 'Swiss Confederation',
                'code' => 'ch',
                'emoji' => '🇨🇭',
            ),
            129 =>
            array (
                'id' => 130,
                'continent_id' => 2,
                'name' => 'Estonia',
                'full_name' => 'Republic of Estonia',
                'code' => 'ee',
                'emoji' => '🇪🇪',
            ),
            130 =>
            array (
                'id' => 131,
                'continent_id' => 2,
                'name' => 'Latvia',
                'full_name' => 'Republic of Latvia',
                'code' => 'lv',
                'emoji' => '🇱🇻',
            ),
            131 =>
            array (
                'id' => 132,
                'continent_id' => 2,
                'name' => 'Lithuania',
                'full_name' => 'The Republic of Lithuania',
                'code' => 'lt',
                'emoji' => '🇱🇹',
            ),
            132 =>
            array (
                'id' => 133,
                'continent_id' => 2,
                'name' => 'Moldavia',
                'full_name' => 'The Republic of Moldova',
                'code' => 'md',
                'emoji' => '🇲🇩',
            ),
            133 =>
            array (
                'id' => 134,
                'continent_id' => 1,
                'name' => 'Turkey',
                'full_name' => 'The Republic of Turkey',
                'code' => 'tr',
                'emoji' => '🇹🇷',
            ),
            134 =>
            array (
                'id' => 135,
                'continent_id' => 2,
                'name' => 'Slovenia',
                'full_name' => 'The Republic of Slovenia',
                'code' => 'si',
                'emoji' => '🇸🇮',
            ),
            135 =>
            array (
                'id' => 136,
                'continent_id' => 2,
                'name' => 'Czech',
                'full_name' => 'The Czech Republic',
                'code' => 'cz',
                'emoji' => '🇨🇿',
            ),
            136 =>
            array (
                'id' => 137,
                'continent_id' => 2,
                'name' => 'Slovak',
                'full_name' => 'The Slovak Republic',
                'code' => 'sk',
                'emoji' => '🇸🇰',
            ),
            137 =>
            array (
                'id' => 138,
                'continent_id' => 2,
                'name' => 'Macedonia',
                'full_name' => 'The Republic of Macedonia',
                'code' => 'mk',
                'emoji' => '🇲🇰',
            ),
            138 =>
            array (
                'id' => 139,
                'continent_id' => 2,
                'name' => 'Bosnia Hercegovina',
                'full_name' => 'Bosnia and Herzegovina',
                'code' => 'ba',
                'emoji' => '🇧🇦',
            ),
            139 =>
            array (
                'id' => 140,
                'continent_id' => 2,
                'name' => 'Vatican City State',
                'full_name' => 'Vatican City State',
                'code' => 'va',
                'emoji' => '🇻🇦',
            ),
            140 =>
            array (
                'id' => 141,
                'continent_id' => 2,
                'name' => 'Netherlands',
                'full_name' => 'The Kingdom of Netherlands',
                'code' => 'nl',
                'emoji' => '🇳🇱',
            ),
            141 =>
            array (
                'id' => 142,
                'continent_id' => 2,
                'name' => 'Croatia',
                'full_name' => 'The Republic of Croatia',
                'code' => 'hr',
                'emoji' => '🇭🇷',
            ),
            142 =>
            array (
                'id' => 143,
                'continent_id' => 2,
                'name' => 'Greece',
                'full_name' => 'The Hellenic Republic',
                'code' => 'gr',
                'emoji' => '🇬🇷',
            ),
            143 =>
            array (
                'id' => 144,
                'continent_id' => 2,
                'name' => 'Ireland',
                'full_name' => 'The Republic of Ireland',
                'code' => 'ie',
                'emoji' => '🇮🇪',
            ),
            144 =>
            array (
                'id' => 145,
                'continent_id' => 2,
                'name' => 'Belgium',
                'full_name' => 'The Kingdom Of Belgium',
                'code' => 'be',
                'emoji' => '🇧🇪',
            ),
            145 =>
            array (
                'id' => 146,
                'continent_id' => 2,
                'name' => 'Cyprus',
                'full_name' => 'the Republic of Cyprus',
                'code' => 'cy',
                'emoji' => '🇨🇾',
            ),
            146 =>
            array (
                'id' => 147,
                'continent_id' => 2,
                'name' => 'Denmark',
                'full_name' => 'The Kingdom of Denmark',
                'code' => 'dk',
                'emoji' => '🇩🇰',
            ),
            147 =>
            array (
                'id' => 148,
                'continent_id' => 2,
                'name' => 'United Kingdom',
                'full_name' => 'The United Kingdom of Great Britain and Northern Ireland',
                'code' => 'gb',
                'emoji' => '🇬🇧',
            ),
            148 =>
            array (
                'id' => 149,
                'continent_id' => 2,
                'name' => 'Germany',
                'full_name' => 'The Federal Republic of Germany',
                'code' => 'de',
                'emoji' => '🇩🇪',
            ),
            149 =>
            array (
                'id' => 150,
                'continent_id' => 2,
                'name' => 'France',
                'full_name' => 'The French Republic',
                'code' => 'fr',
                'emoji' => '🇫🇷',
            ),
            150 =>
            array (
                'id' => 151,
                'continent_id' => 2,
                'name' => 'Italy',
                'full_name' => 'The Republic of Italy',
                'code' => 'it',
                'emoji' => '🇮🇹',
            ),
            151 =>
            array (
                'id' => 152,
                'continent_id' => 2,
                'name' => 'Luxembourg',
                'full_name' => 'The Grand Duchy of Luxembourg',
                'code' => 'lu',
                'emoji' => '🇱🇺',
            ),
            152 =>
            array (
                'id' => 153,
                'continent_id' => 2,
                'name' => 'Portugal',
                'full_name' => 'Portugal,the Portuguese Republic',
                'code' => 'pt',
                'emoji' => '🇵🇹',
            ),
            153 =>
            array (
                'id' => 154,
                'continent_id' => 2,
                'name' => 'Poland',
                'full_name' => 'The Republic of Poland',
                'code' => 'pl',
                'emoji' => '🇵🇱',
            ),
            154 =>
            array (
                'id' => 155,
                'continent_id' => 2,
                'name' => 'Spain',
                'full_name' => 'The Kingdom of Spain',
                'code' => 'es',
                'emoji' => '🇪🇸',
            ),
            155 =>
            array (
                'id' => 156,
                'continent_id' => 2,
                'name' => 'Albania',
                'full_name' => 'The Republic of Albania',
                'code' => 'al',
                'emoji' => '🇦🇱',
            ),
            156 =>
            array (
                'id' => 157,
                'continent_id' => 2,
                'name' => 'Andorra',
                'full_name' => 'The Principality of Andorra',
                'code' => 'ad',
                'emoji' => '🇦🇩',
            ),
            157 =>
            array (
                'id' => 158,
                'continent_id' => 2,
                'name' => 'Liechtenstein',
                'full_name' => 'Principality of Liechtenstein',
                'code' => 'li',
                'emoji' => '🇱🇮',
            ),
            158 =>
            array (
                'id' => 159,
                'continent_id' => 2,
                'name' => 'Serbia and Montenegro',
                'full_name' => 'Serbia and Montenegro',
                'code' => 'rs',
                'emoji' => '🇷🇸',
            ),
            159 =>
            array (
                'id' => 160,
                'continent_id' => 2,
                'name' => 'Austria',
                'full_name' => 'The Republic Of Austria',
                'code' => 'at',
                'emoji' => '🇦🇹',
            ),
            160 =>
            array (
                'id' => 161,
                'continent_id' => 2,
                'name' => 'Bulgaria',
                'full_name' => 'The Republic of Bulgaria',
                'code' => 'bg',
                'emoji' => '🇧🇬',
            ),
            161 =>
            array (
                'id' => 162,
                'continent_id' => 2,
                'name' => 'Finland',
                'full_name' => 'The Republic of Finland',
                'code' => 'fi',
                'emoji' => '🇫🇮',
            ),
            162 =>
            array (
                'id' => 163,
                'continent_id' => 2,
                'name' => 'Gibraltar',
                'full_name' => 'Gibraltar',
                'code' => 'gi',
                'emoji' => '🇬🇮',
            ),
            163 =>
            array (
                'id' => 164,
                'continent_id' => 6,
                'name' => 'Dominica',
                'full_name' => 'The Commonwealth of Dominica',
                'code' => 'dm',
                'emoji' => '🇩🇲',
            ),
            164 =>
            array (
                'id' => 165,
                'continent_id' => 6,
                'name' => 'Bermuda',
                'full_name' => 'Bermuda',
                'code' => 'bm',
                'emoji' => '🇧🇲',
            ),
            165 =>
            array (
                'id' => 166,
                'continent_id' => 6,
                'name' => 'Canada',
                'full_name' => 'Canada',
                'code' => 'ca',
                'emoji' => '🇨🇦',
            ),
            166 =>
            array (
                'id' => 167,
                'continent_id' => 6,
                'name' => 'United States',
                'full_name' => 'The United States of America',
                'code' => 'us',
                'emoji' => '🇺🇸',
            ),
            167 =>
            array (
                'id' => 168,
                'continent_id' => 6,
                'name' => 'Greenland',
                'full_name' => 'Greenland',
                'code' => 'gl',
                'emoji' => '🇬🇱',
            ),
            168 =>
            array (
                'id' => 169,
                'continent_id' => 4,
                'name' => 'Tonga',
                'full_name' => 'The Kingdom of Tonga',
                'code' => 'to',
                'emoji' => '🇹🇴',
            ),
            169 =>
            array (
                'id' => 170,
                'continent_id' => 4,
                'name' => 'Australia',
                'full_name' => 'The Commonwealth of Australia',
                'code' => 'au',
                'emoji' => '🇦🇺',
            ),
            170 =>
            array (
                'id' => 171,
                'continent_id' => 4,
                'name' => 'Cook Is',
                'full_name' => 'The Cook Islands',
                'code' => 'ck',
                'emoji' => '🇨🇰',
            ),
            171 =>
            array (
                'id' => 172,
                'continent_id' => 4,
                'name' => 'Nauru',
                'full_name' => 'The Republic of Nauru',
                'code' => 'nr',
                'emoji' => '🇳🇷',
            ),
            172 =>
            array (
                'id' => 173,
                'continent_id' => 4,
                'name' => 'New Caledonia',
                'full_name' => 'New Caledonia',
                'code' => 'nc',
                'emoji' => '🇳🇨',
            ),
            173 =>
            array (
                'id' => 174,
                'continent_id' => 4,
                'name' => 'Vanuatu',
                'full_name' => 'Republic of Vanuatu',
                'code' => 'vu',
                'emoji' => '🇻🇺',
            ),
            174 =>
            array (
                'id' => 175,
                'continent_id' => 4,
                'name' => 'Solomon Is',
                'full_name' => 'Solomon Islands',
                'code' => 'sb',
                'emoji' => '🇸🇧',
            ),
            175 =>
            array (
                'id' => 176,
                'continent_id' => 4,
                'name' => 'Samoa',
                'full_name' => 'The Independent State of Samoa',
                'code' => 'ws',
                'emoji' => '🇼🇸',
            ),
            176 =>
            array (
                'id' => 177,
                'continent_id' => 4,
                'name' => 'Tuvalu',
                'full_name' => 'Tuvalu',
                'code' => 'tv',
                'emoji' => '🇹🇻',
            ),
            177 =>
            array (
                'id' => 178,
                'continent_id' => 4,
                'name' => 'Micronesia',
                'full_name' => 'Federated States of Micronesia',
                'code' => 'fm',
                'emoji' => '🇫🇲',
            ),
            178 =>
            array (
                'id' => 179,
                'continent_id' => 4,
                'name' => 'Marshall Is Rep',
                'full_name' => 'The Republic of Marshall Island ',
                'code' => 'mh',
                'emoji' => '🇲🇭',
            ),
            179 =>
            array (
                'id' => 180,
                'continent_id' => 4,
                'name' => 'Kiribati',
                'full_name' => 'The Republic of Kiribati',
                'code' => 'ki',
                'emoji' => '🇰🇮',
            ),
            180 =>
            array (
                'id' => 181,
                'continent_id' => 4,
                'name' => 'French Polynesia',
                'full_name' => 'French Polynesia',
                'code' => 'pf',
                'emoji' => '🇵🇫',
            ),
            181 =>
            array (
                'id' => 182,
                'continent_id' => 4,
                'name' => 'New Zealand',
                'full_name' => 'New Zealand',
                'code' => 'nz',
                'emoji' => '🇳🇿',
            ),
            182 =>
            array (
                'id' => 183,
                'continent_id' => 4,
                'name' => 'Fiji',
                'full_name' => 'The Republic of Fiji',
                'code' => 'fj',
                'emoji' => '🇫🇯',
            ),
            183 =>
            array (
                'id' => 184,
                'continent_id' => 4,
                'name' => 'Papua New Guinea',
                'full_name' => 'The Independent State of Papua New Guinea',
                'code' => 'pg',
                'emoji' => '🇵🇬',
            ),
            184 =>
            array (
                'id' => 185,
                'continent_id' => 4,
                'name' => 'Palau',
                'full_name' => 'The Republic of Palau',
                'code' => 'pw',
                'emoji' => '🇵🇼',
            ),
            185 =>
            array (
                'id' => 186,
                'continent_id' => 7,
                'name' => 'Chile',
                'full_name' => 'Republic of Chile',
                'code' => 'cl',
                'emoji' => '🇨🇱',
            ),
            186 =>
            array (
                'id' => 187,
                'continent_id' => 7,
                'name' => 'Colombia',
                'full_name' => 'The Republic of Colombia',
                'code' => 'co',
                'emoji' => '🇨🇴',
            ),
            187 =>
            array (
                'id' => 188,
                'continent_id' => 7,
                'name' => 'Guyana',
                'full_name' => 'The Republic of Guyana',
                'code' => 'gy',
                'emoji' => '🇬🇾',
            ),
            188 =>
            array (
                'id' => 189,
                'continent_id' => 7,
                'name' => 'Paraguay',
                'full_name' => 'The Republic of Paraguay',
                'code' => 'py',
                'emoji' => '🇵🇾',
            ),
            189 =>
            array (
                'id' => 190,
                'continent_id' => 7,
                'name' => 'Peru',
                'full_name' => 'The Republic of Peru',
                'code' => 'pe',
                'emoji' => '🇵🇪',
            ),
            190 =>
            array (
                'id' => 191,
                'continent_id' => 7,
                'name' => 'Suriname',
                'full_name' => 'The Republic of Suriname',
                'code' => 'sr',
                'emoji' => '🇸🇷',
            ),
            191 =>
            array (
                'id' => 192,
                'continent_id' => 7,
                'name' => 'Venezuela',
                'full_name' => 'Bolivarian Republic of Venezuela',
                'code' => 've',
                'emoji' => '🇻🇪',
            ),
            192 =>
            array (
                'id' => 193,
                'continent_id' => 7,
                'name' => 'Uruguay',
                'full_name' => 'The Oriental Republic of Uruguay',
                'code' => 'uy',
                'emoji' => '🇺🇾',
            ),
            193 =>
            array (
                'id' => 194,
                'continent_id' => 7,
                'name' => 'Ecuador',
                'full_name' => 'The Republic of Ecuador',
                'code' => 'ec',
                'emoji' => '🇪🇨',
            ),
            194 =>
            array (
                'id' => 195,
                'continent_id' => 7,
                'name' => 'Antigua and Barbuda',
                'full_name' => 'Antigua and Barbuda',
                'code' => 'ag',
                'emoji' => '🇦🇬',
            ),
            195 =>
            array (
                'id' => 196,
                'continent_id' => 7,
                'name' => 'Aruba',
                'full_name' => 'Aruba',
                'code' => 'aw',
                'emoji' => '🇦🇼',
            ),
            196 =>
            array (
                'id' => 197,
                'continent_id' => 7,
                'name' => 'Bahamas',
                'full_name' => 'The Commonwealth of The Bahamas',
                'code' => 'bs',
                'emoji' => '🇧🇸',
            ),
            197 =>
            array (
                'id' => 198,
                'continent_id' => 7,
                'name' => 'Barbados',
                'full_name' => 'Barbados',
                'code' => 'bb',
                'emoji' => '🇧🇧',
            ),
            198 =>
            array (
                'id' => 199,
                'continent_id' => 7,
                'name' => 'Cayman Is',
                'full_name' => 'Cayman Islands',
                'code' => 'ky',
                'emoji' => '🇰🇾',
            ),
            199 =>
            array (
                'id' => 200,
                'continent_id' => 7,
                'name' => 'Grenada',
                'full_name' => 'Grenada',
                'code' => 'gd',
                'emoji' => '🇬🇩',
            ),
            200 =>
            array (
                'id' => 201,
                'continent_id' => 7,
                'name' => 'Haiti',
                'full_name' => 'The Republic of Haiti',
                'code' => 'ht',
                'emoji' => '🇭🇹',
            ),
            201 =>
            array (
                'id' => 202,
                'continent_id' => 7,
                'name' => 'Jamaica',
                'full_name' => 'Jamaica',
                'code' => 'jm',
                'emoji' => '🇯🇲',
            ),
            202 =>
            array (
                'id' => 203,
                'continent_id' => 7,
                'name' => 'Martinique',
                'full_name' => 'Martinique',
                'code' => 'mq',
                'emoji' => '🇲🇶',
            ),
            203 =>
            array (
                'id' => 204,
                'continent_id' => 7,
                'name' => 'Montserrat',
                'full_name' => 'Montserrat',
                'code' => 'ms',
                'emoji' => '🇲🇸',
            ),
            204 =>
            array (
                'id' => 205,
                'continent_id' => 7,
                'name' => 'Trinidad and Tobago',
                'full_name' => 'Republic of Trinidad and Tobago',
                'code' => 'tt',
                'emoji' => '🇹🇹',
            ),
            205 =>
            array (
                'id' => 206,
                'continent_id' => 7,
                'name' => 'St Kitts-Nevis',
                'full_name' => 'The Federation of Saint Kitts and Nevis',
                'code' => 'kn',
                'emoji' => '🇰🇳',
            ),
            206 =>
            array (
                'id' => 207,
                'continent_id' => 7,
                'name' => 'St.Pierre and Miquelon',
                'full_name' => 'The Islands of st pierre and miquelon',
                'code' => 'pm',
                'emoji' => '🇵🇲',
            ),
            207 =>
            array (
                'id' => 208,
                'continent_id' => 7,
                'name' => 'Argentina',
                'full_name' => 'The Republic of Argentina',
                'code' => 'ar',
                'emoji' => '🇦🇷',
            ),
            208 =>
            array (
                'id' => 209,
                'continent_id' => 7,
                'name' => 'Belize',
                'full_name' => 'Belize',
                'code' => 'bz',
                'emoji' => '🇧🇿',
            ),
            209 =>
            array (
                'id' => 210,
                'continent_id' => 7,
                'name' => 'Bolivia',
                'full_name' => 'The Republic of Bolivia',
                'code' => 'bo',
                'emoji' => '🇧🇴',
            ),
            210 =>
            array (
                'id' => 211,
                'continent_id' => 7,
                'name' => 'Brazil',
                'full_name' => 'The Federative Republic of Brazil',
                'code' => 'br',
                'emoji' => '🇧🇷',
            ),
            211 =>
            array (
                'id' => 212,
                'continent_id' => 6,
                'name' => 'American Samoa',
                'full_name' => 'American Samoa',
                'code' => 'as',
                'emoji' => '🇦🇸',
            ),
            212 =>
            array (
                'id' => 213,
                'continent_id' => 2,
                'name' => 'Aland Islands',
                'full_name' => 'Aland Island,Ahvenanmaa',
                'code' => 'ax',
                'emoji' => '🇦🇽',
            ),
            213 =>
            array (
                'id' => 214,
                'continent_id' => 2,
                'name' => 'Saint Barthélemy',
                'full_name' => 'Collectivitéde Saint-Barthélemy',
                'code' => 'bl',
                'emoji' => '🇧🇱',
            ),
            214 =>
            array (
                'id' => 215,
                'continent_id' => 2,
                'name' => 'Bonaire, Sint Eustatius and Saba',
                'full_name' => 'Bonaire, Sint Eustatius and Saba',
                'code' => 'bq',
                'emoji' => '🇧🇶',
            ),
            215 =>
            array (
                'id' => 216,
                'continent_id' => 2,
                'name' => 'Bouvet Island',
                'full_name' => 'Bouvet Island',
                'code' => 'bv',
                'emoji' => '🇧🇻',
            ),
            216 =>
            array (
                'id' => 217,
                'continent_id' => 4,
            'name' => 'Cocos (Keeling) Islands',
            'full_name' => 'Cocos (Keeling) Islands',
                'code' => 'cc',
                'emoji' => '🇨🇨',
            ),
            217 =>
            array (
                'id' => 218,
                'continent_id' => 2,
                'name' => 'Curaçao',
                'full_name' => 'Curaçao',
                'code' => 'cw',
                'emoji' => '🇨🇼',
            ),
            218 =>
            array (
                'id' => 219,
                'continent_id' => 4,
                'name' => 'Christmas Island',
                'full_name' => 'Christmas Island',
                'code' => 'cx',
                'emoji' => '🇨🇽',
            ),
            219 =>
            array (
                'id' => 220,
                'continent_id' => 2,
            'name' => 'Falkland Islands (Malvinas)',
            'full_name' => 'Falkland Islands (Malvinas)',
                'code' => 'fk',
                'emoji' => '🇫🇰',
            ),
            220 =>
            array (
                'id' => 221,
                'continent_id' => 2,
                'name' => 'Faroe Islands',
                'full_name' => 'Faroe Islands',
                'code' => 'fo',
                'emoji' => '🇫🇴',
            ),
            221 =>
            array (
                'id' => 222,
                'continent_id' => 2,
                'name' => 'French Guiana',
                'full_name' => 'French Guiana',
                'code' => 'gf',
                'emoji' => '🇬🇫',
            ),
            222 =>
            array (
                'id' => 223,
                'continent_id' => 2,
                'name' => 'Guernsey',
                'full_name' => 'Bailiwick of Guernsey',
                'code' => 'gg',
                'emoji' => '🇬🇬',
            ),
            223 =>
            array (
                'id' => 224,
                'continent_id' => 2,
                'name' => 'South Georgia and The South Sandwich Islands',
                'full_name' => 'South Georgia and The South Sandwich Islands',
                'code' => 'gs',
                'emoji' => '🇬🇸',
            ),
            224 =>
            array (
                'id' => 225,
                'continent_id' => 6,
                'name' => 'Guam',
                'full_name' => 'The Territory of Guahan,Guam',
                'code' => 'gu',
                'emoji' => '🇬🇺',
            ),
            225 =>
            array (
                'id' => 226,
                'continent_id' => 4,
                'name' => 'Heard Island and McDonald Islands',
                'full_name' => 'Heard Island and McDonald Islands',
                'code' => 'hm',
                'emoji' => '🇭🇲',
            ),
            226 =>
            array (
                'id' => 227,
                'continent_id' => 2,
                'name' => 'Isle Of Man',
                'full_name' => 'Isle Of Man',
                'code' => 'im',
                'emoji' => '🇮🇲',
            ),
            227 =>
            array (
                'id' => 228,
                'continent_id' => 2,
                'name' => 'British Indian Ocean Territory',
                'full_name' => 'British Indian Ocean Territory',
                'code' => 'io',
                'emoji' => '🇮🇴',
            ),
            228 =>
            array (
                'id' => 229,
                'continent_id' => 2,
                'name' => 'Jersey',
                'full_name' => 'Jersey',
                'code' => 'je',
                'emoji' => '🇯🇪',
            ),
            229 =>
            array (
                'id' => 230,
                'continent_id' => 2,
                'name' => 'Saint Lucia',
                'full_name' => 'Saint Lucia , St. Lucia',
                'code' => 'lc',
                'emoji' => '🇱🇨',
            ),
            230 =>
            array (
                'id' => 231,
                'continent_id' => 2,
                'name' => 'Saint Martin',
                'full_name' => 'Saint Martin',
                'code' => 'mf',
                'emoji' => '🇲🇫',
            ),
            231 =>
            array (
                'id' => 232,
                'continent_id' => 6,
                'name' => 'Northern Mariana Islands',
                'full_name' => 'Northern Mariana Islands',
                'code' => 'mp',
                'emoji' => '🇲🇵',
            ),
            232 =>
            array (
                'id' => 233,
                'continent_id' => 4,
                'name' => 'Norfolk Island',
                'full_name' => 'Norfolk Island',
                'code' => 'nf',
                'emoji' => '🇳🇫',
            ),
            233 =>
            array (
                'id' => 234,
                'continent_id' => 4,
                'name' => 'Niue',
                'full_name' => 'Niue',
                'code' => 'nu',
                'emoji' => '🇳🇺',
            ),
            234 =>
            array (
                'id' => 235,
                'continent_id' => 2,
                'name' => 'Saint Pierre and Miquelon',
                'full_name' => 'Saint Pierre and Miquelon',
                'code' => 'pm',
                'emoji' => '🇵🇲',
            ),
            235 =>
            array (
                'id' => 236,
                'continent_id' => 2,
                'name' => 'Pitcairn Islands',
                'full_name' => 'Pitcairn Islands',
                'code' => 'pn',
                'emoji' => '🇵🇳',
            ),
            236 =>
            array (
                'id' => 237,
                'continent_id' => 2,
                'name' => 'Saint Helena',
                'full_name' => 'Saint Helena',
                'code' => 'sh',
                'emoji' => '🇸🇭',
            ),
            237 =>
            array (
                'id' => 238,
                'continent_id' => 2,
                'name' => 'Svalbard and Jan Mayen Islands',
                'full_name' => 'Svalbard and Jan Mayen Islands',
                'code' => 'sj',
                'emoji' => '🇸🇯',
            ),
            238 =>
            array (
                'id' => 239,
                'continent_id' => 2,
                'name' => 'Sint Maarten',
                'full_name' => 'Sint Maarten',
                'code' => 'sx',
                'emoji' => '🇸🇽',
            ),
            239 =>
            array (
                'id' => 240,
                'continent_id' => 2,
                'name' => 'Turks and Caicos Islands',
                'full_name' => 'Turks and Caicos Islands',
                'code' => 'tc',
                'emoji' => '🇹🇨',
            ),
            240 =>
            array (
                'id' => 241,
                'continent_id' => 2,
                'name' => 'French Southern Territories',
                'full_name' => 'French Southern Territories',
                'code' => 'tf',
                'emoji' => '🇹🇫',
            ),
            241 =>
            array (
                'id' => 242,
                'continent_id' => 4,
                'name' => 'Tokelau',
                'full_name' => 'Tokelau',
                'code' => 'tk',
                'emoji' => '🇹🇰',
            ),
            242 =>
            array (
                'id' => 243,
                'continent_id' => 6,
                'name' => 'United States Minor Outlying Islands',
                'full_name' => 'United States Minor Outlying Islands',
                'code' => 'um',
                'emoji' => '🇺🇲',
            ),
            243 =>
            array (
                'id' => 244,
                'continent_id' => 2,
                'name' => 'The British Virgin Islands',
                'full_name' => 'The British Virgin Islands',
                'code' => 'vg',
                'emoji' => '🇻🇬',
            ),
            244 =>
            array (
                'id' => 245,
                'continent_id' => 6,
                'name' => 'The United States Virgin Islands',
                'full_name' => 'The United States Virgin Islands',
                'code' => 'vi',
                'emoji' => '🇻🇮',
            ),
            245 =>
            array (
                'id' => 246,
                'continent_id' => 2,
                'name' => 'Wallis and Futuna Islands',
                'full_name' => 'Wallis and Futuna Islands',
                'code' => 'wf',
                'emoji' => '🇼🇫',
            ),
            246 =>
            array (
                'id' => 247,
                'continent_id' => 2,
                'name' => 'Kosovo',
                'full_name' => 'The Republic of Kosovo',
                'code' => 'xk',
                'emoji' => NULL,
            ),
        ));


    }
}
