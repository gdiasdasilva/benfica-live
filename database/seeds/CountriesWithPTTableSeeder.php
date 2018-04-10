<?php

use Illuminate\Database\Seeder;

class CountriesWithPTTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('countries')->insert(array (
            0 =>
            array (
                'id' => 1,
                'continent_id' => 3,
                'name' => 'Cameroon',
                'name_pt' => 'Camarões',
                'full_name' => 'the Republic of Cameroon',
                'code' => 'cm',
                'emoji' => '🇨🇲',
            ),
            1 =>
            array (
                'id' => 2,
                'continent_id' => 3,
                'name' => 'Benin',
                'name_pt' => 'Benim',
                'full_name' => 'the Republic of Benin ',
                'code' => 'bj',
                'emoji' => '🇧🇯',
            ),
            2 =>
            array (
                'id' => 3,
                'continent_id' => 3,
                'name' => 'Madagascar',
                'name_pt' => 'Madagascar',
                'full_name' => 'the Republic of Madagascar ',
                'code' => 'mg',
                'emoji' => '🇲🇬',
            ),
            3 =>
            array (
                'id' => 4,
                'continent_id' => 3,
                'name' => 'Rwanda',
                'name_pt' => 'Ruanda',
                'full_name' => 'the Republic of Rwanda',
                'code' => 'rw',
                'emoji' => '🇷🇼',
            ),
            4 =>
            array (
                'id' => 5,
                'continent_id' => 3,
                'name' => 'Seychelles',
                'name_pt' => 'Seicheles',
                'full_name' => 'the Republic of Seychelles',
                'code' => 'sc',
                'emoji' => '🇸🇨',
            ),
            5 =>
            array (
                'id' => 6,
                'continent_id' => 3,
                'name' => 'Cote d\'lvoire',
                'name_pt' => 'Costa do Marfim',
                'full_name' => 'the Republic of Cote d\'ivoire',
                'code' => 'ci',
                'emoji' => '🇨🇮',
            ),
            6 =>
            array (
                'id' => 7,
                'continent_id' => 3,
                'name' => 'Egypt',
                'name_pt' => 'Egipto',
                'full_name' => 'the Arab Republic of Egypt ',
                'code' => 'eg',
                'emoji' => '🇪🇬',
            ),
            7 =>
            array (
                'id' => 8,
                'continent_id' => 3,
                'name' => 'Mauritius',
                'name_pt' => 'Maurícia',
                'full_name' => 'the Republic of Mauritius',
                'code' => 'mu',
                'emoji' => '🇲🇺',
            ),
            8 =>
            array (
                'id' => 9,
                'continent_id' => 3,
                'name' => 'Burkina Faso',
                'name_pt' => 'Burkina Faso',
                'full_name' => 'Burkina Faso',
                'code' => 'bf',
                'emoji' => '🇧🇫',
            ),
            9 =>
            array (
                'id' => 10,
                'continent_id' => 3,
                'name' => 'Eritrea',
                'name_pt' => 'Eritreia',
                'full_name' => 'the Commonwealth of Eritrea',
                'code' => 'er',
                'emoji' => '🇪🇷',
            ),
            10 =>
            array (
                'id' => 11,
                'continent_id' => 3,
                'name' => 'Sao Tome and Principe',
                'name_pt' => 'São Tomé e Príncipe',
                'full_name' => 'the Democratic Republic Sao Tome and Principe',
                'code' => 'st',
                'emoji' => '🇸🇹',
            ),
            11 =>
            array (
                'id' => 12,
                'continent_id' => 3,
                'name' => 'Angola',
                'name_pt' => 'Angola',
                'full_name' => 'the Republic of Angola',
                'code' => 'ao',
                'emoji' => '🇦🇴',
            ),
            12 =>
            array (
                'id' => 13,
                'continent_id' => 3,
                'name' => 'Libyan Arab Jm',
                'name_pt' => 'Líbia',
                'full_name' => 'State of Libya',
                'code' => 'ly',
                'emoji' => '🇱🇾',
            ),
            13 =>
            array (
                'id' => 14,
                'continent_id' => 3,
                'name' => 'Zimbabwe',
                'name_pt' => 'Zimbabwe',
                'full_name' => 'the Republic of Zimbabwe',
                'code' => 'zw',
                'emoji' => '🇿🇼',
            ),
            14 =>
            array (
                'id' => 15,
                'continent_id' => 3,
                'name' => 'Guinea',
                'name_pt' => 'Guiné',
                'full_name' => 'The Republic of Guinea',
                'code' => 'gn',
                'emoji' => '🇬🇳',
            ),
            15 =>
            array (
                'id' => 16,
                'continent_id' => 3,
                'name' => 'Sierra Leone',
                'name_pt' => 'Serra Leoa',
                'full_name' => 'The Republic of Sierra Leone',
                'code' => 'sl',
                'emoji' => '🇸🇱',
            ),
            16 =>
            array (
                'id' => 17,
                'continent_id' => 3,
                'name' => 'Reunion',
                'name_pt' => 'Reunião',
                'full_name' => 'Reunion Island',
                'code' => 're',
                'emoji' => '🇷🇪',
            ),
            17 =>
            array (
                'id' => 18,
                'continent_id' => 3,
                'name' => 'Gabon',
                'name_pt' => 'Gabão',
                'full_name' => 'The Gabonese Republic',
                'code' => 'ga',
                'emoji' => '🇬🇦',
            ),
            18 =>
            array (
                'id' => 19,
                'continent_id' => 3,
                'name' => 'Ghana',
                'name_pt' => 'Gana',
                'full_name' => 'The Republic of Ghana',
                'code' => 'gh',
                'emoji' => '🇬🇭',
            ),
            19 =>
            array (
                'id' => 20,
                'continent_id' => 3,
                'name' => 'Tanzania',
                'name_pt' => 'Tanzânia',
                'full_name' => 'The United Republic of Tanzania',
                'code' => 'tz',
                'emoji' => '🇹🇿',
            ),
            20 =>
            array (
                'id' => 21,
                'continent_id' => 3,
                'name' => 'Mali',
                'name_pt' => 'Mali',
                'full_name' => 'The Republic of Mali',
                'code' => 'ml',
                'emoji' => '🇲🇱',
            ),
            21 =>
            array (
                'id' => 22,
                'continent_id' => 3,
                'name' => 'Somalia',
                'name_pt' => 'Somália',
                'full_name' => 'The Somalia Democratic Republic',
                'code' => 'so',
                'emoji' => '🇸🇴',
            ),
            22 =>
            array (
                'id' => 23,
                'continent_id' => 3,
                'name' => 'Mauritania',
                'name_pt' => 'Mauritânia',
                'full_name' => 'The Islamic Republic of Mauritania',
                'code' => 'mr',
                'emoji' => '🇲🇷',
            ),
            23 =>
            array (
                'id' => 24,
                'continent_id' => 3,
                'name' => 'Uganda',
                'name_pt' => 'Uganda',
                'full_name' => 'The Republic of Uganda',
                'code' => 'ug',
                'emoji' => '🇺🇬',
            ),
            24 =>
            array (
                'id' => 25,
                'continent_id' => 3,
                'name' => 'Chad',
                'name_pt' => 'Chade',
                'full_name' => 'The Republic of Chad',
                'code' => 'td',
                'emoji' => '🇹🇩',
            ),
            25 =>
            array (
                'id' => 26,
                'continent_id' => 3,
                'name' => 'Mayotte',
                'name_pt' => 'Maiote',
                'full_name' => 'Territorial Collectivity of Mayotte',
                'code' => 'yt',
                'emoji' => '🇾🇹',
            ),
            26 =>
            array (
                'id' => 27,
                'continent_id' => 3,
                'name' => 'Comoros',
                'name_pt' => 'Comores',
                'full_name' => 'Union of Comoros',
                'code' => 'km',
                'emoji' => '🇰🇲',
            ),
            27 =>
            array (
                'id' => 28,
                'continent_id' => 3,
                'name' => 'Botswana',
                'name_pt' => 'Botswana',
                'full_name' => 'The Republic of Botswana',
                'code' => 'bw',
                'emoji' => '🇧🇼',
            ),
            28 =>
            array (
                'id' => 29,
                'continent_id' => 3,
                'name' => 'Senegal',
                'name_pt' => 'Senegal',
                'full_name' => 'the Republic of Senegal',
                'code' => 'sn',
                'emoji' => '🇸🇳',
            ),
            29 =>
            array (
                'id' => 30,
                'continent_id' => 3,
                'name' => 'Swaziland',
                'name_pt' => 'Suazilândia',
                'full_name' => 'The Kingdom of Swaziland',
                'code' => 'sz',
                'emoji' => '🇸🇿',
            ),
            30 =>
            array (
                'id' => 31,
                'continent_id' => 3,
                'name' => 'Guinea Bissau',
                'name_pt' => 'Guiné Bissau',
                'full_name' => 'The Republic of Guinea-Bissau',
                'code' => 'gw',
                'emoji' => '🇬🇼',
            ),
            31 =>
            array (
                'id' => 32,
                'continent_id' => 3,
                'name' => 'DR Congo',
                'name_pt' => 'RD Congo',
                'full_name' => 'Democratic Republic of the Congo',
                'code' => 'cd',
                'emoji' => '🇨🇩',
            ),
            32 =>
            array (
                'id' => 33,
                'continent_id' => 3,
                'name' => 'Central African',
                'name_pt' => 'África Central',
                'full_name' => 'The Central African Republic',
                'code' => 'cf',
                'emoji' => '🇨🇫',
            ),
            33 =>
            array (
                'id' => 34,
                'continent_id' => 3,
                'name' => 'Lesotho',
                'name_pt' => 'Lesoto',
                'full_name' => 'The Kingdom of Lesotho',
                'code' => 'ls',
                'emoji' => '🇱🇸',
            ),
            34 =>
            array (
                'id' => 35,
                'continent_id' => 3,
                'name' => 'Congo',
                'name_pt' => 'Congo',
                'full_name' => 'Republic of the Congo',
                'code' => 'cg',
                'emoji' => '🇨🇬',
            ),
            35 =>
            array (
                'id' => 36,
                'continent_id' => 3,
                'name' => 'South Africa',
                'name_pt' => 'África do Sul',
                'full_name' => 'The Republic of South Africa',
                'code' => 'za',
                'emoji' => '🇿🇦',
            ),
            36 =>
            array (
                'id' => 37,
                'continent_id' => 3,
                'name' => 'Liberia',
                'name_pt' => 'Libéria',
                'full_name' => 'The Republic of Liberia',
                'code' => 'lr',
                'emoji' => '🇱🇷',
            ),
            37 =>
            array (
                'id' => 38,
                'continent_id' => 3,
                'name' => 'Tunisia',
                'name_pt' => 'Tunísia',
                'full_name' => 'The Republic of Tunisia',
                'code' => 'tn',
                'emoji' => '🇹🇳',
            ),
            38 =>
            array (
                'id' => 39,
                'continent_id' => 3,
                'name' => 'Zambia',
                'name_pt' => 'Zâmbia',
                'full_name' => 'The Republic of Zambia',
                'code' => 'zm',
                'emoji' => '🇿🇲',
            ),
            39 =>
            array (
                'id' => 40,
                'continent_id' => 3,
                'name' => 'Niger',
                'name_pt' => 'Nigéria',
                'full_name' => 'The Republic of Niger',
                'code' => 'ne',
                'emoji' => '🇳🇪',
            ),
            40 =>
            array (
                'id' => 41,
                'continent_id' => 3,
                'name' => 'Western Sahara',
                'name_pt' => 'Sahara Ocidental',
                'full_name' => 'the Sahrawi Arab Democratic Republic Western Sahara',
                'code' => 'eh',
                'emoji' => '🇪🇭',
            ),
            41 =>
            array (
                'id' => 42,
                'continent_id' => 3,
                'name' => 'Togo',
                'name_pt' => 'Togo',
                'full_name' => 'The Republic of Togo',
                'code' => 'tg',
                'emoji' => '🇹🇬',
            ),
            42 =>
            array (
                'id' => 43,
                'continent_id' => 3,
                'name' => 'Namibia',
                'name_pt' => 'Namíbia',
                'full_name' => 'The Republic of Namibia',
                'code' => 'na',
                'emoji' => '🇳🇦',
            ),
            43 =>
            array (
                'id' => 44,
                'continent_id' => 3,
                'name' => 'Mozambique',
                'name_pt' => 'Moçambique',
                'full_name' => 'The Republic of Mozambique',
                'code' => 'mz',
                'emoji' => '🇲🇿',
            ),
            44 =>
            array (
                'id' => 45,
                'continent_id' => 3,
                'name' => 'Ethiopia',
                'name_pt' => 'Etiópia',
                'full_name' => 'The Federal Democratic Republic of Ethiopia',
                'code' => 'et',
                'emoji' => '🇪🇹',
            ),
            45 =>
            array (
                'id' => 46,
                'continent_id' => 3,
                'name' => 'Morocco',
                'name_pt' => 'Marrocos',
                'full_name' => 'The Kingdom of Morocco',
                'code' => 'ma',
                'emoji' => '🇲🇦',
            ),
            46 =>
            array (
                'id' => 47,
                'continent_id' => 3,
                'name' => 'Malawi',
                'name_pt' => 'Malawi',
                'full_name' => 'The Republic of Malawi',
                'code' => 'mw',
                'emoji' => '🇲🇼',
            ),
            47 =>
            array (
                'id' => 48,
                'continent_id' => 3,
                'name' => 'Nigeria',
                'name_pt' => 'Nigéria',
                'full_name' => 'Federal Republic of Nigeria',
                'code' => 'ng',
                'emoji' => '🇳🇬',
            ),
            48 =>
            array (
                'id' => 49,
                'continent_id' => 3,
                'name' => 'Cape Verde',
                'name_pt' => 'Cabo Verde',
                'full_name' => 'The Republic of Cape Verde',
                'code' => 'cv',
                'emoji' => '🇨🇻',
            ),
            49 =>
            array (
                'id' => 50,
                'continent_id' => 3,
                'name' => 'Burundi',
                'name_pt' => 'Burundi',
                'full_name' => 'The Republic of Burundi',
                'code' => 'bi',
                'emoji' => '🇧🇮',
            ),
            50 =>
            array (
                'id' => 51,
                'continent_id' => 3,
                'name' => 'Algeria',
                'name_pt' => 'Argélia',
                'full_name' => 'People\'s Democratic Republic of Algeria',
                'code' => 'dz',
                'emoji' => '🇩🇿',
            ),
            51 =>
            array (
                'id' => 52,
                'continent_id' => 3,
                'name' => 'Djibouti',
                'name_pt' => 'Djibouti',
                'full_name' => 'The Republic of Djibouti',
                'code' => 'dj',
                'emoji' => '🇩🇯',
            ),
            52 =>
            array (
                'id' => 53,
                'continent_id' => 3,
                'name' => 'Gambia',
                'name_pt' => 'Gâmbia',
                'full_name' => 'Islamic Republic of Gambia',
                'code' => 'gp',
                'emoji' => '🇬🇵',
            ),
            53 =>
            array (
                'id' => 54,
                'continent_id' => 3,
                'name' => 'Eq.Guinea',
                'name_pt' => 'Guiné Equatorial',
                'full_name' => 'The Republic of Equatorial Guinea',
                'code' => 'gq',
                'emoji' => '🇬🇶',
            ),
            54 =>
            array (
                'id' => 55,
                'continent_id' => 3,
                'name' => 'Sudan',
                'name_pt' => 'Sudão',
                'full_name' => 'The Republic of Sudan',
                'code' => 'sd',
                'emoji' => '🇸🇩',
            ),
            55 =>
            array (
                'id' => 56,
                'continent_id' => 3,
                'name' => 'Kenya',
                'name_pt' => 'Quénia',
                'full_name' => 'The Republic of Kenya',
                'code' => 'ke',
                'emoji' => '🇰🇪',
            ),
            56 =>
            array (
                'id' => 57,
                'continent_id' => 1,
                'name' => 'Singapore',
                'name_pt' => 'Singapura',
                'full_name' => 'Republic of Singapore',
                'code' => 'sg',
                'emoji' => '🇸🇬',
            ),
            57 =>
            array (
                'id' => 58,
                'continent_id' => 1,
                'name' => 'Korea',
                'name_pt' => 'Coreia do Sul',
                'full_name' => 'Republic of Korea',
                'code' => 'kr',
                'emoji' => '🇰🇷',
            ),
            58 =>
            array (
                'id' => 59,
                'continent_id' => 1,
                'name' => 'Syrian',
                'name_pt' => 'Síria',
                'full_name' => 'The Syrian Arab Republic',
                'code' => 'sy',
                'emoji' => '🇸🇾',
            ),
            59 =>
            array (
                'id' => 60,
                'continent_id' => 1,
                'name' => 'Uzbekstan',
                'name_pt' => 'Uzbequistão',
                'full_name' => 'The Republic of Uzbekistan',
                'code' => 'uz',
                'emoji' => '🇺🇿',
            ),
            60 =>
            array (
                'id' => 61,
                'continent_id' => 1,
                'name' => 'Bahrain',
                'name_pt' => 'Bahrain',
                'full_name' => 'The Kingdom of Bahrain',
                'code' => 'bh',
                'emoji' => '🇧🇭',
            ),
            61 =>
            array (
                'id' => 62,
                'continent_id' => 1,
                'name' => 'Japan',
                'name_pt' => 'Japão',
                'full_name' => 'Japan',
                'code' => 'jp',
                'emoji' => '🇯🇵',
            ),
            62 =>
            array (
                'id' => 63,
                'continent_id' => 1,
                'name' => 'Jordan',
                'name_pt' => 'Jordânia',
                'full_name' => 'The Hashemite Kingdom of Jordan',
                'code' => 'jo',
                'emoji' => '🇯🇴',
            ),
            63 =>
            array (
                'id' => 64,
                'continent_id' => 1,
                'name' => 'Vietnam',
                'name_pt' => 'Vietname',
                'full_name' => 'Socialist Republic of Vietnam',
                'code' => 'vn',
                'emoji' => '🇻🇳',
            ),
            64 =>
            array (
                'id' => 65,
                'continent_id' => 1,
                'name' => 'Kirghizia',
                'name_pt' => 'Quirguistão',
                'full_name' => 'The Kyrgyz Republic',
                'code' => 'kg',
                'emoji' => '🇰🇬',
            ),
            65 =>
            array (
                'id' => 66,
                'continent_id' => 1,
                'name' => 'Thailand',
                'name_pt' => 'Tailândia',
                'full_name' => 'Kingdom of Thailand',
                'code' => 'th',
                'emoji' => '🇹🇭',
            ),
            66 =>
            array (
                'id' => 67,
                'continent_id' => 1,
                'name' => 'Sri Lanka',
                'name_pt' => 'Sri Lanka',
                'full_name' => 'The Democratic Socialist Republic of Sri Lanka',
                'code' => 'lk',
                'emoji' => '🇱🇰',
            ),
            67 =>
            array (
                'id' => 68,
                'continent_id' => 1,
                'name' => 'United Arab Emirates',
                'name_pt' => 'Emirados Árabes Unidos',
                'full_name' => 'The United Arab Emirates',
                'code' => 'ae',
                'emoji' => '🇦🇪',
            ),
            68 =>
            array (
                'id' => 69,
                'continent_id' => 1,
                'name' => 'Laos',
                'name_pt' => 'Laos',
                'full_name' => 'Lao People\'s Democratic Republic',
                'code' => 'la',
                'emoji' => '🇱🇦',
            ),
            69 =>
            array (
                'id' => 70,
                'continent_id' => 1,
                'name' => 'Afghanistan',
                'name_pt' => 'Afeganistão',
                'full_name' => 'the Islamic Republic of Afghanistan',
                'code' => 'af',
                'emoji' => '🇦🇫',
            ),
            70 =>
            array (
                'id' => 71,
                'continent_id' => 1,
                'name' => 'Macau',
                'name_pt' => 'Macau',
                'full_name' => 'Macau Macao',
                'code' => 'mo',
                'emoji' => '🇲🇴',
            ),
            71 =>
            array (
                'id' => 72,
                'continent_id' => 1,
                'name' => 'Tajikistan',
                'name_pt' => 'Tajiquistão',
                'full_name' => 'The Republic of Tajikistan',
                'code' => 'tj',
                'emoji' => '🇹🇯',
            ),
            72 =>
            array (
                'id' => 73,
                'continent_id' => 1,
                'name' => 'Korea, DPR',
                'name_pt' => 'Coreia do Norte',
                'full_name' => 'Democratic People\'s Republic of Korea',
                'code' => 'kp',
                'emoji' => '🇰🇵',
            ),
            73 =>
            array (
                'id' => 74,
                'continent_id' => 1,
                'name' => 'Palestine',
                'name_pt' => 'Palestina',
                'full_name' => 'The State of Palestine',
                'code' => 'ps',
                'emoji' => '🇵🇸',
            ),
            74 =>
            array (
                'id' => 75,
                'continent_id' => 1,
                'name' => 'Hong Kong',
                'name_pt' => 'Hong Kong',
                'full_name' => 'Hong Kong',
                'code' => 'hk',
                'emoji' => '🇭🇰',
            ),
            75 =>
            array (
                'id' => 76,
                'continent_id' => 1,
                'name' => 'Iraq',
                'name_pt' => 'Iraque',
                'full_name' => 'Republic Of Iraq',
                'code' => 'iq',
                'emoji' => '🇮🇶',
            ),
            76 =>
            array (
                'id' => 77,
                'continent_id' => 1,
                'name' => 'Lebanon',
                'name_pt' => 'Líbano',
                'full_name' => 'The Republic of Lebanon',
                'code' => 'lb',
                'emoji' => '🇱🇧',
            ),
            77 =>
            array (
                'id' => 78,
                'continent_id' => 1,
                'name' => 'Kuwait',
                'name_pt' => 'Kuwait',
                'full_name' => 'The State of Kuwait',
                'code' => 'kw',
                'emoji' => '🇰🇼',
            ),
            78 =>
            array (
                'id' => 79,
                'continent_id' => 1,
                'name' => 'Brunei',
                'name_pt' => 'Brunei',
                'full_name' => 'Brunei Darussalam',
                'code' => 'bn',
                'emoji' => '🇧🇳',
            ),
            79 =>
            array (
                'id' => 80,
                'continent_id' => 1,
                'name' => 'Maldives',
                'name_pt' => 'Maldivas',
                'full_name' => 'The Republic of Maldives',
                'code' => 'mv',
                'emoji' => '🇲🇻',
            ),
            80 =>
            array (
                'id' => 81,
                'continent_id' => 1,
                'name' => 'Indonesia',
                'name_pt' => 'Indonésia',
                'full_name' => 'The Republic of Indonesia',
                'code' => 'id',
                'emoji' => '🇮🇩',
            ),
            81 =>
            array (
                'id' => 82,
                'continent_id' => 1,
                'name' => 'Israel',
                'name_pt' => 'Israel',
                'full_name' => 'The State of Israel',
                'code' => 'il',
                'emoji' => '🇮🇱',
            ),
            82 =>
            array (
                'id' => 83,
                'continent_id' => 1,
                'name' => 'Mongolia',
                'name_pt' => 'Mongólia',
                'full_name' => 'Mongolia',
                'code' => 'mn',
                'emoji' => '🇲🇳',
            ),
            83 =>
            array (
                'id' => 84,
                'continent_id' => 1,
                'name' => 'Oman',
                'name_pt' => 'Omã',
                'full_name' => 'Sultanate of Oman',
                'code' => 'om',
                'emoji' => '🇴🇲',
            ),
            84 =>
            array (
                'id' => 85,
                'continent_id' => 1,
                'name' => 'India',
                'name_pt' => 'Índia',
                'full_name' => 'The Republic of India',
                'code' => 'in',
                'emoji' => '🇮🇳',
            ),
            85 =>
            array (
                'id' => 86,
                'continent_id' => 1,
                'name' => 'Myanmar',
                'name_pt' => 'Myanmar',
                'full_name' => 'Republic Of The Union Of Myanmar',
                'code' => 'mm',
                'emoji' => '🇲🇲',
            ),
            86 =>
            array (
                'id' => 87,
                'continent_id' => 1,
                'name' => 'Malaysia',
                'name_pt' => 'Malásia',
                'full_name' => 'Malaysia',
                'code' => 'my',
                'emoji' => '🇲🇾',
            ),
            87 =>
            array (
                'id' => 88,
                'continent_id' => 1,
                'name' => 'East Timor',
                'name_pt' => 'Timor Leste',
                'full_name' => 'Democratic Republic of East Timor',
                'code' => 'tl',
                'emoji' => '🇹🇱',
            ),
            88 =>
            array (
                'id' => 89,
                'continent_id' => 1,
                'name' => 'Yemen',
                'name_pt' => 'Iémen',
                'full_name' => 'The Republic of Yemen',
                'code' => 'ye',
                'emoji' => '🇾🇪',
            ),
            89 =>
            array (
                'id' => 90,
                'continent_id' => 1,
                'name' => 'Bhutan',
                'name_pt' => 'Butão',
                'full_name' => 'Kingdom of Bhutan',
                'code' => 'bt',
                'emoji' => '🇧🇹',
            ),
            90 =>
            array (
                'id' => 91,
                'continent_id' => 1,
                'name' => 'Cambodia',
                'name_pt' => 'Camboja',
                'full_name' => 'Kingdom of Cambodia',
                'code' => 'kh',
                'emoji' => '🇰🇭',
            ),
            91 =>
            array (
                'id' => 92,
                'continent_id' => 1,
                'name' => 'Pakistan',
                'name_pt' => 'Paquistão',
                'full_name' => 'the Islamic Republic of Pakistan',
                'code' => 'pk',
                'emoji' => '🇵🇰',
            ),
            92 =>
            array (
                'id' => 93,
                'continent_id' => 1,
                'name' => 'Bangladesh',
                'name_pt' => 'Bangladesh',
                'full_name' => 'People\'s Republic of Bangladesh',
                'code' => 'bd',
                'emoji' => '🇧🇩',
            ),
            93 =>
            array (
                'id' => 94,
                'continent_id' => 1,
                'name' => 'Saudi Arabia',
                'name_pt' => 'Arábia Saudita',
                'full_name' => 'Kingdom of Saudi Arabia',
                'code' => 'sa',
                'emoji' => '🇸🇦',
            ),
            94 =>
            array (
                'id' => 95,
                'continent_id' => 1,
                'name' => 'Turkmenistan',
                'name_pt' => 'Turquemenistão',
                'full_name' => 'Turkmenistan',
                'code' => 'tm',
                'emoji' => '🇹🇲',
            ),
            95 =>
            array (
                'id' => 96,
                'continent_id' => 1,
                'name' => 'Qatar',
                'name_pt' => 'Qatar',
                'full_name' => 'The State of Qatar',
                'code' => 'qa',
                'emoji' => '🇶🇦',
            ),
            96 =>
            array (
                'id' => 97,
                'continent_id' => 1,
                'name' => 'Nepal',
                'name_pt' => 'Nepal',
                'full_name' => 'Federal Democratic Republic of Nepal',
                'code' => 'np',
                'emoji' => '🇳🇵',
            ),
            97 =>
            array (
                'id' => 98,
                'continent_id' => 1,
                'name' => 'Kazakhstan',
                'name_pt' => 'Cazaquistão',
                'full_name' => 'The Republic of Kazakhstan',
                'code' => 'kz',
                'emoji' => '🇰🇿',
            ),
            98 =>
            array (
                'id' => 99,
                'continent_id' => 1,
                'name' => 'Philippines',
                'name_pt' => 'Filipinas',
                'full_name' => 'Republic of the Philippines',
                'code' => 'ph',
                'emoji' => '🇵🇭',
            ),
            99 =>
            array (
                'id' => 100,
                'continent_id' => 1,
                'name' => 'Taiwan',
                'name_pt' => 'Taiwan',
                'full_name' => 'Taiwan',
                'code' => 'tw',
                'emoji' => '🇹🇼',
            ),
            100 =>
            array (
                'id' => 101,
                'continent_id' => 1,
                'name' => 'China',
                'name_pt' => 'China',
                'full_name' => 'People\'s Republic of China',
                'code' => 'cn',
                'emoji' => '🇨🇳',
            ),
            101 =>
            array (
                'id' => 102,
                'continent_id' => 1,
                'name' => 'Iran',
                'name_pt' => 'Irão',
                'full_name' => 'The Islamic Republic of Iran',
                'code' => 'ir',
                'emoji' => '🇮🇷',
            ),
            102 =>
            array (
                'id' => 103,
                'continent_id' => 6,
                'name' => 'Costa Rica',
                'name_pt' => 'Costa Rica',
                'full_name' => 'Republic of Costa Rica',
                'code' => 'cr',
                'emoji' => '🇨🇷',
            ),
            103 =>
            array (
                'id' => 104,
                'continent_id' => 6,
                'name' => 'Cuba',
                'name_pt' => 'Cuba',
                'full_name' => 'The Republic of Cuba',
                'code' => 'cu',
                'emoji' => '🇨🇺',
            ),
            104 =>
            array (
                'id' => 105,
                'continent_id' => 6,
                'name' => 'Dominican',
                'name_pt' => 'República Dominicana',
                'full_name' => 'The Dominican Republic',
                'code' => 'do',
                'emoji' => '🇩🇴',
            ),
            105 =>
            array (
                'id' => 106,
                'continent_id' => 6,
                'name' => 'Mexico',
                'name_pt' => 'México',
                'full_name' => 'The United States of Mexico',
                'code' => 'mx',
                'emoji' => '🇲🇽',
            ),
            106 =>
            array (
                'id' => 107,
                'continent_id' => 6,
                'name' => 'Nicaragua',
                'name_pt' => 'Nicarágua',
                'full_name' => 'The Republic of Nicaragua',
                'code' => 'ni',
                'emoji' => '🇳🇮',
            ),
            107 =>
            array (
                'id' => 108,
                'continent_id' => 6,
                'name' => 'Panama',
                'name_pt' => 'Panamá',
                'full_name' => 'The Republic of Panama',
                'code' => 'pa',
                'emoji' => '🇵🇦',
            ),
            108 =>
            array (
                'id' => 109,
                'continent_id' => 7,
                'name' => 'Netherlands Antilles',
                'name_pt' => 'Antilhas',
                'full_name' => 'Netherlands Antilles',
                'code' => 'an',
                'emoji' => NULL,
            ),
            109 =>
            array (
                'id' => 110,
                'continent_id' => 6,
                'name' => 'El Salvador',
                'name_pt' => 'El Salvador',
                'full_name' => 'The Republic of El Salvador',
                'code' => 'sv',
                'emoji' => '🇸🇻',
            ),
            110 =>
            array (
                'id' => 111,
                'continent_id' => 6,
                'name' => 'Puerto Rico',
                'name_pt' => 'Puerto Rico',
                'full_name' => 'The Commonwealth of Puerto Rico',
                'code' => 'pr',
                'emoji' => '🇵🇷',
            ),
            111 =>
            array (
                'id' => 112,
                'continent_id' => 6,
                'name' => 'Saint Vincent and the Grenadines',
                'name_pt' => 'São Vicente e Granadinas',
                'full_name' => 'Saint Vincent and the Grenadines',
                'code' => 'vc',
                'emoji' => '🇻🇨',
            ),
            112 =>
            array (
                'id' => 113,
                'continent_id' => 6,
                'name' => 'Honduras',
                'name_pt' => 'Honduras',
                'full_name' => 'Republic of Honduras',
                'code' => 'hn',
                'emoji' => '🇭🇳',
            ),
            113 =>
            array (
                'id' => 114,
                'continent_id' => 6,
                'name' => 'Guatemala',
                'name_pt' => 'Guatemala',
                'full_name' => 'The Republic of Guatemala',
                'code' => 'gt',
                'emoji' => '🇬🇹',
            ),
            114 =>
            array (
                'id' => 115,
                'continent_id' => 2,
                'name' => 'Georgia',
                'name_pt' => 'Geórgia',
                'full_name' => 'Georgia',
                'code' => 'ge',
                'emoji' => '🇬🇪',
            ),
            115 =>
            array (
                'id' => 116,
                'continent_id' => 2,
                'name' => 'Armenia',
                'name_pt' => 'Arménia',
                'full_name' => 'The Republic of Armenia',
                'code' => 'am',
                'emoji' => '🇦🇲',
            ),
            116 =>
            array (
                'id' => 117,
                'continent_id' => 2,
                'name' => 'Azerbaijan',
                'name_pt' => 'Azerbaijão',
                'full_name' => 'The Republic of Azerbaijan',
                'code' => 'az',
                'emoji' => '🇦🇿',
            ),
            117 =>
            array (
                'id' => 118,
                'continent_id' => 2,
                'name' => 'Belarus',
                'name_pt' => 'Bielorrússia',
                'full_name' => 'The Republic of Belarus',
                'code' => 'by',
                'emoji' => '🇧🇾',
            ),
            118 =>
            array (
                'id' => 119,
                'continent_id' => 2,
                'name' => 'Russia',
                'name_pt' => 'Rússia',
                'full_name' => 'Russian Federation',
                'code' => 'ru',
                'emoji' => '🇷🇺',
            ),
            119 =>
            array (
                'id' => 120,
                'continent_id' => 2,
                'name' => 'Ukraine',
                'name_pt' => 'Ucrânia',
                'full_name' => 'Ukraine',
                'code' => 'ua',
                'emoji' => '🇺🇦',
            ),
            120 =>
            array (
                'id' => 121,
                'continent_id' => 2,
                'name' => 'Hungary',
                'name_pt' => 'Hungria',
                'full_name' => 'Hungary',
                'code' => 'hu',
                'emoji' => '🇭🇺',
            ),
            121 =>
            array (
                'id' => 122,
                'continent_id' => 2,
                'name' => 'Iceland',
                'name_pt' => 'Islândia',
                'full_name' => 'The Republic of Iceland',
                'code' => 'is',
                'emoji' => '🇮🇸',
            ),
            122 =>
            array (
                'id' => 123,
                'continent_id' => 2,
                'name' => 'Malta',
                'name_pt' => 'Malta',
                'full_name' => 'Republic of Malta',
                'code' => 'mt',
                'emoji' => '🇲🇹',
            ),
            123 =>
            array (
                'id' => 124,
                'continent_id' => 2,
                'name' => 'Monaco',
                'name_pt' => 'Mónaco',
                'full_name' => 'The Principality of Monaco',
                'code' => 'mc',
                'emoji' => '🇲🇨',
            ),
            124 =>
            array (
                'id' => 125,
                'continent_id' => 2,
                'name' => 'Norway',
                'name_pt' => 'Noruega',
                'full_name' => 'The Kingdom of Norway',
                'code' => 'no',
                'emoji' => '🇳🇴',
            ),
            125 =>
            array (
                'id' => 126,
                'continent_id' => 2,
                'name' => 'Romania',
                'name_pt' => 'Roménia',
                'full_name' => 'Romania',
                'code' => 'ro',
                'emoji' => '🇷🇴',
            ),
            126 =>
            array (
                'id' => 127,
                'continent_id' => 2,
                'name' => 'San Marino',
                'name_pt' => 'São Marinho',
                'full_name' => 'The Republic of San Marino',
                'code' => 'sm',
                'emoji' => '🇸🇲',
            ),
            127 =>
            array (
                'id' => 128,
                'continent_id' => 2,
                'name' => 'Sweden',
                'name_pt' => 'Suécia',
                'full_name' => 'The Kingdom of Sweden',
                'code' => 'se',
                'emoji' => '🇸🇪',
            ),
            128 =>
            array (
                'id' => 129,
                'continent_id' => 2,
                'name' => 'Switzerland',
                'name_pt' => 'Suíça',
                'full_name' => 'Swiss Confederation',
                'code' => 'ch',
                'emoji' => '🇨🇭',
            ),
            129 =>
            array (
                'id' => 130,
                'continent_id' => 2,
                'name' => 'Estonia',
                'name_pt' => 'Estónia',
                'full_name' => 'Republic of Estonia',
                'code' => 'ee',
                'emoji' => '🇪🇪',
            ),
            130 =>
            array (
                'id' => 131,
                'continent_id' => 2,
                'name' => 'Latvia',
                'name_pt' => 'Letónia',
                'full_name' => 'Republic of Latvia',
                'code' => 'lv',
                'emoji' => '🇱🇻',
            ),
            131 =>
            array (
                'id' => 132,
                'continent_id' => 2,
                'name' => 'Lithuania',
                'name_pt' => 'Lituânia',
                'full_name' => 'The Republic of Lithuania',
                'code' => 'lt',
                'emoji' => '🇱🇹',
            ),
            132 =>
            array (
                'id' => 133,
                'continent_id' => 2,
                'name' => 'Moldavia',
                'name_pt' => 'Moldávia',
                'full_name' => 'The Republic of Moldova',
                'code' => 'md',
                'emoji' => '🇲🇩',
            ),
            133 =>
            array (
                'id' => 134,
                'continent_id' => 1,
                'name' => 'Turkey',
                'name_pt' => 'Turquia',
                'full_name' => 'The Republic of Turkey',
                'code' => 'tr',
                'emoji' => '🇹🇷',
            ),
            134 =>
            array (
                'id' => 135,
                'continent_id' => 2,
                'name' => 'Slovenia',
                'name_pt' => 'Eslovénia',
                'full_name' => 'The Republic of Slovenia',
                'code' => 'si',
                'emoji' => '🇸🇮',
            ),
            135 =>
            array (
                'id' => 136,
                'continent_id' => 2,
                'name' => 'Czech',
                'name_pt' => 'República Checa',
                'full_name' => 'The Czech Republic',
                'code' => 'cz',
                'emoji' => '🇨🇿',
            ),
            136 =>
            array (
                'id' => 137,
                'continent_id' => 2,
                'name' => 'Slovak',
                'name_pt' => 'Eslováquia',
                'full_name' => 'The Slovak Republic',
                'code' => 'sk',
                'emoji' => '🇸🇰',
            ),
            137 =>
            array (
                'id' => 138,
                'continent_id' => 2,
                'name' => 'Macedonia',
                'name_pt' => 'Macedónia',
                'full_name' => 'The Republic of Macedonia',
                'code' => 'mk',
                'emoji' => '🇲🇰',
            ),
            138 =>
            array (
                'id' => 139,
                'continent_id' => 2,
                'name' => 'Bosnia Hercegovina',
                'name_pt' => 'Bósnia Herzegovina',
                'full_name' => 'Bosnia and Herzegovina',
                'code' => 'ba',
                'emoji' => '🇧🇦',
            ),
            139 =>
            array (
                'id' => 140,
                'continent_id' => 2,
                'name' => 'Vatican City State',
                'name_pt' => 'Vaticano',
                'full_name' => 'Vatican City State',
                'code' => 'va',
                'emoji' => '🇻🇦',
            ),
            140 =>
            array (
                'id' => 141,
                'continent_id' => 2,
                'name' => 'Netherlands',
                'name_pt' => 'Países Baixos',
                'full_name' => 'The Kingdom of Netherlands',
                'code' => 'nl',
                'emoji' => '🇳🇱',
            ),
            141 =>
            array (
                'id' => 142,
                'continent_id' => 2,
                'name' => 'Croatia',
                'name_pt' => 'Croácia',
                'full_name' => 'The Republic of Croatia',
                'code' => 'hr',
                'emoji' => '🇭🇷',
            ),
            142 =>
            array (
                'id' => 143,
                'continent_id' => 2,
                'name' => 'Greece',
                'name_pt' => 'Grécia',
                'full_name' => 'The Hellenic Republic',
                'code' => 'gr',
                'emoji' => '🇬🇷',
            ),
            143 =>
            array (
                'id' => 144,
                'continent_id' => 2,
                'name' => 'Ireland',
                'name_pt' => 'Irlanda',
                'full_name' => 'The Republic of Ireland',
                'code' => 'ie',
                'emoji' => '🇮🇪',
            ),
            144 =>
            array (
                'id' => 145,
                'continent_id' => 2,
                'name' => 'Belgium',
                'name_pt' => 'Bélgica',
                'full_name' => 'The Kingdom Of Belgium',
                'code' => 'be',
                'emoji' => '🇧🇪',
            ),
            145 =>
            array (
                'id' => 146,
                'continent_id' => 2,
                'name' => 'Cyprus',
                'name_pt' => 'Chipre',
                'full_name' => 'the Republic of Cyprus',
                'code' => 'cy',
                'emoji' => '🇨🇾',
            ),
            146 =>
            array (
                'id' => 147,
                'continent_id' => 2,
                'name' => 'Denmark',
                'name_pt' => 'Dinamarca',
                'full_name' => 'The Kingdom of Denmark',
                'code' => 'dk',
                'emoji' => '🇩🇰',
            ),
            147 =>
            array (
                'id' => 148,
                'continent_id' => 2,
                'name' => 'United Kingdom',
                'name_pt' => 'Reino Unido',
                'full_name' => 'The United Kingdom of Great Britain and Northern Ireland',
                'code' => 'gb',
                'emoji' => '🇬🇧',
            ),
            148 =>
            array (
                'id' => 149,
                'continent_id' => 2,
                'name' => 'Germany',
                'name_pt' => 'Alemanha',
                'full_name' => 'The Federal Republic of Germany',
                'code' => 'de',
                'emoji' => '🇩🇪',
            ),
            149 =>
            array (
                'id' => 150,
                'continent_id' => 2,
                'name' => 'France',
                'name_pt' => 'França',
                'full_name' => 'The French Republic',
                'code' => 'fr',
                'emoji' => '🇫🇷',
            ),
            150 =>
            array (
                'id' => 151,
                'continent_id' => 2,
                'name' => 'Italy',
                'name_pt' => 'Itália',
                'full_name' => 'The Republic of Italy',
                'code' => 'it',
                'emoji' => '🇮🇹',
            ),
            151 =>
            array (
                'id' => 152,
                'continent_id' => 2,
                'name' => 'Luxembourg',
                'name_pt' => 'Luxemburgo',
                'full_name' => 'The Grand Duchy of Luxembourg',
                'code' => 'lu',
                'emoji' => '🇱🇺',
            ),
            152 =>
            array (
                'id' => 153,
                'continent_id' => 2,
                'name' => 'Portugal',
                'name_pt' => 'Portugal',
                'full_name' => 'Portugal,the Portuguese Republic',
                'code' => 'pt',
                'emoji' => '🇵🇹',
            ),
            153 =>
            array (
                'id' => 154,
                'continent_id' => 2,
                'name' => 'Poland',
                'name_pt' => 'Polónia',
                'full_name' => 'The Republic of Poland',
                'code' => 'pl',
                'emoji' => '🇵🇱',
            ),
            154 =>
            array (
                'id' => 155,
                'continent_id' => 2,
                'name' => 'Spain',
                'name_pt' => 'Espanha',
                'full_name' => 'The Kingdom of Spain',
                'code' => 'es',
                'emoji' => '🇪🇸',
            ),
            155 =>
            array (
                'id' => 156,
                'continent_id' => 2,
                'name' => 'Albania',
                'name_pt' => 'Albânia',
                'full_name' => 'The Republic of Albania',
                'code' => 'al',
                'emoji' => '🇦🇱',
            ),
            156 =>
            array (
                'id' => 157,
                'continent_id' => 2,
                'name' => 'Andorra',
                'name_pt' => 'Andorra',
                'full_name' => 'The Principality of Andorra',
                'code' => 'ad',
                'emoji' => '🇦🇩',
            ),
            157 =>
            array (
                'id' => 158,
                'continent_id' => 2,
                'name' => 'Liechtenstein',
                'name_pt' => 'Liechtenstein',
                'full_name' => 'Principality of Liechtenstein',
                'code' => 'li',
                'emoji' => '🇱🇮',
            ),
            158 =>
            array (
                'id' => 159,
                'continent_id' => 2,
                'name' => 'Serbia and Montenegro',
                'name_pt' => 'Sérvia Montenegro',
                'full_name' => 'Serbia and Montenegro',
                'code' => 'rs',
                'emoji' => '🇷🇸',
            ),
            159 =>
            array (
                'id' => 160,
                'continent_id' => 2,
                'name' => 'Austria',
                'name_pt' => 'Áustria',
                'full_name' => 'The Republic Of Austria',
                'code' => 'at',
                'emoji' => '🇦🇹',
            ),
            160 =>
            array (
                'id' => 161,
                'continent_id' => 2,
                'name' => 'Bulgaria',
                'name_pt' => 'Bulgária',
                'full_name' => 'The Republic of Bulgaria',
                'code' => 'bg',
                'emoji' => '🇧🇬',
            ),
            161 =>
            array (
                'id' => 162,
                'continent_id' => 2,
                'name' => 'Finland',
                'name_pt' => 'Finlândia',
                'full_name' => 'The Republic of Finland',
                'code' => 'fi',
                'emoji' => '🇫🇮',
            ),
            162 =>
            array (
                'id' => 163,
                'continent_id' => 2,
                'name' => 'Gibraltar',
                'name_pt' => 'Gibraltar',
                'full_name' => 'Gibraltar',
                'code' => 'gi',
                'emoji' => '🇬🇮',
            ),
            163 =>
            array (
                'id' => 164,
                'continent_id' => 6,
                'name' => 'Dominica',
                'name_pt' => 'Dominica',
                'full_name' => 'The Commonwealth of Dominica',
                'code' => 'dm',
                'emoji' => '🇩🇲',
            ),
            164 =>
            array (
                'id' => 165,
                'continent_id' => 6,
                'name' => 'Bermuda',
                'name_pt' => 'Bermuda',
                'full_name' => 'Bermuda',
                'code' => 'bm',
                'emoji' => '🇧🇲',
            ),
            165 =>
            array (
                'id' => 166,
                'continent_id' => 6,
                'name' => 'Canada',
                'name_pt' => 'Canadá',
                'full_name' => 'Canada',
                'code' => 'ca',
                'emoji' => '🇨🇦',
            ),
            166 =>
            array (
                'id' => 167,
                'continent_id' => 6,
                'name' => 'United States',
                'name_pt' => 'Estados Unidos da América',
                'full_name' => 'The United States of America',
                'code' => 'us',
                'emoji' => '🇺🇸',
            ),
            167 =>
            array (
                'id' => 168,
                'continent_id' => 6,
                'name' => 'Greenland',
                'name_pt' => 'Gronelândia',
                'full_name' => 'Greenland',
                'code' => 'gl',
                'emoji' => '🇬🇱',
            ),
            168 =>
            array (
                'id' => 169,
                'continent_id' => 4,
                'name' => 'Tonga',
                'name_pt' => 'Tonga',
                'full_name' => 'The Kingdom of Tonga',
                'code' => 'to',
                'emoji' => '🇹🇴',
            ),
            169 =>
            array (
                'id' => 170,
                'continent_id' => 4,
                'name' => 'Australia',
                'name_pt' => 'Austrália',
                'full_name' => 'The Commonwealth of Australia',
                'code' => 'au',
                'emoji' => '🇦🇺',
            ),
            170 =>
            array (
                'id' => 171,
                'continent_id' => 4,
                'name' => 'Cook Islands',
                'name_pt' => 'Ilhas Cook',
                'full_name' => 'The Cook Islands',
                'code' => 'ck',
                'emoji' => '🇨🇰',
            ),
            171 =>
            array (
                'id' => 172,
                'continent_id' => 4,
                'name' => 'Nauru',
                'name_pt' => 'Nauru',
                'full_name' => 'The Republic of Nauru',
                'code' => 'nr',
                'emoji' => '🇳🇷',
            ),
            172 =>
            array (
                'id' => 173,
                'continent_id' => 4,
                'name' => 'New Caledonia',
                'name_pt' => 'Nova Caledónia',
                'full_name' => 'New Caledonia',
                'code' => 'nc',
                'emoji' => '🇳🇨',
            ),
            173 =>
            array (
                'id' => 174,
                'continent_id' => 4,
                'name' => 'Vanuatu',
                'name_pt' => 'Vanuatu',
                'full_name' => 'Republic of Vanuatu',
                'code' => 'vu',
                'emoji' => '🇻🇺',
            ),
            174 =>
            array (
                'id' => 175,
                'continent_id' => 4,
                'name' => 'Solomon Islands',
                'name_pt' => 'Ilhas Salomão',
                'full_name' => 'Solomon Islands',
                'code' => 'sb',
                'emoji' => '🇸🇧',
            ),
            175 =>
            array (
                'id' => 176,
                'continent_id' => 4,
                'name' => 'Samoa',
                'name_pt' => 'Samoa',
                'full_name' => 'The Independent State of Samoa',
                'code' => 'ws',
                'emoji' => '🇼🇸',
            ),
            176 =>
            array (
                'id' => 177,
                'continent_id' => 4,
                'name' => 'Tuvalu',
                'name_pt' => 'Tuvalu',
                'full_name' => 'Tuvalu',
                'code' => 'tv',
                'emoji' => '🇹🇻',
            ),
            177 =>
            array (
                'id' => 178,
                'continent_id' => 4,
                'name' => 'Micronesia',
                'name_pt' => 'Micronésia',
                'full_name' => 'Federated States of Micronesia',
                'code' => 'fm',
                'emoji' => '🇫🇲',
            ),
            178 =>
            array (
                'id' => 179,
                'continent_id' => 4,
                'name' => 'Marshall Islands',
                'name_pt' => 'Ilhas Marshall',
                'full_name' => 'The Republic of Marshall Island ',
                'code' => 'mh',
                'emoji' => '🇲🇭',
            ),
            179 =>
            array (
                'id' => 180,
                'continent_id' => 4,
                'name' => 'Kiribati',
                'name_pt' => 'Kiribati',
                'full_name' => 'The Republic of Kiribati',
                'code' => 'ki',
                'emoji' => '🇰🇮',
            ),
            180 =>
            array (
                'id' => 181,
                'continent_id' => 4,
                'name' => 'French Polynesia',
                'name_pt' => 'Polinésia Francesa',
                'full_name' => 'French Polynesia',
                'code' => 'pf',
                'emoji' => '🇵🇫',
            ),
            181 =>
            array (
                'id' => 182,
                'continent_id' => 4,
                'name' => 'New Zealand',
                'name_pt' => 'Nova Zelândia',
                'full_name' => 'New Zealand',
                'code' => 'nz',
                'emoji' => '🇳🇿',
            ),
            182 =>
            array (
                'id' => 183,
                'continent_id' => 4,
                'name' => 'Fiji',
                'name_pt' => 'Fiji',
                'full_name' => 'The Republic of Fiji',
                'code' => 'fj',
                'emoji' => '🇫🇯',
            ),
            183 =>
            array (
                'id' => 184,
                'continent_id' => 4,
                'name' => 'Papua New Guinea',
                'name_pt' => 'Papua Nova Guiné',
                'full_name' => 'The Independent State of Papua New Guinea',
                'code' => 'pg',
                'emoji' => '🇵🇬',
            ),
            184 =>
            array (
                'id' => 185,
                'continent_id' => 4,
                'name' => 'Palau',
                'name_pt' => 'Palau',
                'full_name' => 'The Republic of Palau',
                'code' => 'pw',
                'emoji' => '🇵🇼',
            ),
            185 =>
            array (
                'id' => 186,
                'continent_id' => 7,
                'name' => 'Chile',
                'name_pt' => 'Chile',
                'full_name' => 'Republic of Chile',
                'code' => 'cl',
                'emoji' => '🇨🇱',
            ),
            186 =>
            array (
                'id' => 187,
                'continent_id' => 7,
                'name' => 'Colombia',
                'name_pt' => 'Colômbia',
                'full_name' => 'The Republic of Colombia',
                'code' => 'co',
                'emoji' => '🇨🇴',
            ),
            187 =>
            array (
                'id' => 188,
                'continent_id' => 7,
                'name' => 'Guyana',
                'name_pt' => 'Guyana',
                'full_name' => 'The Republic of Guyana',
                'code' => 'gy',
                'emoji' => '🇬🇾',
            ),
            188 =>
            array (
                'id' => 189,
                'continent_id' => 7,
                'name' => 'Paraguay',
                'name_pt' => 'Paraguai',
                'full_name' => 'The Republic of Paraguay',
                'code' => 'py',
                'emoji' => '🇵🇾',
            ),
            189 =>
            array (
                'id' => 190,
                'continent_id' => 7,
                'name' => 'Peru',
                'name_pt' => 'Peru',
                'full_name' => 'The Republic of Peru',
                'code' => 'pe',
                'emoji' => '🇵🇪',
            ),
            190 =>
            array (
                'id' => 191,
                'continent_id' => 7,
                'name' => 'Suriname',
                'name_pt' => 'Suriname',
                'full_name' => 'The Republic of Suriname',
                'code' => 'sr',
                'emoji' => '🇸🇷',
            ),
            191 =>
            array (
                'id' => 192,
                'continent_id' => 7,
                'name' => 'Venezuela',
                'name_pt' => 'Venezuela',
                'full_name' => 'Bolivarian Republic of Venezuela',
                'code' => 've',
                'emoji' => '🇻🇪',
            ),
            192 =>
            array (
                'id' => 193,
                'continent_id' => 7,
                'name' => 'Uruguay',
                'name_pt' => 'Uruguai',
                'full_name' => 'The Oriental Republic of Uruguay',
                'code' => 'uy',
                'emoji' => '🇺🇾',
            ),
            193 =>
            array (
                'id' => 194,
                'continent_id' => 7,
                'name' => 'Ecuador',
                'name_pt' => 'Equador',
                'full_name' => 'The Republic of Ecuador',
                'code' => 'ec',
                'emoji' => '🇪🇨',
            ),
            194 =>
            array (
                'id' => 195,
                'continent_id' => 7,
                'name' => 'Antigua and Barbuda',
                'name_pt' => 'Antígua e Barbuda',
                'full_name' => 'Antigua and Barbuda',
                'code' => 'ag',
                'emoji' => '🇦🇬',
            ),
            195 =>
            array (
                'id' => 196,
                'continent_id' => 7,
                'name' => 'Aruba',
                'name_pt' => 'Aruba',
                'full_name' => 'Aruba',
                'code' => 'aw',
                'emoji' => '🇦🇼',
            ),
            196 =>
            array (
                'id' => 197,
                'continent_id' => 7,
                'name' => 'Bahamas',
                'name_pt' => 'Bahamas',
                'full_name' => 'The Commonwealth of The Bahamas',
                'code' => 'bs',
                'emoji' => '🇧🇸',
            ),
            197 =>
            array (
                'id' => 198,
                'continent_id' => 7,
                'name' => 'Barbados',
                'name_pt' => 'Barbados',
                'full_name' => 'Barbados',
                'code' => 'bb',
                'emoji' => '🇧🇧',
            ),
            198 =>
            array (
                'id' => 199,
                'continent_id' => 7,
                'name' => 'Cayman Islands',
                'name_pt' => 'Ilhas Caimão',
                'full_name' => 'Cayman Islands',
                'code' => 'ky',
                'emoji' => '🇰🇾',
            ),
            199 =>
            array (
                'id' => 200,
                'continent_id' => 7,
                'name' => 'Grenada',
                'name_pt' => 'Granada',
                'full_name' => 'Grenada',
                'code' => 'gd',
                'emoji' => '🇬🇩',
            ),
            200 =>
            array (
                'id' => 201,
                'continent_id' => 7,
                'name' => 'Haiti',
                'name_pt' => 'Haití',
                'full_name' => 'The Republic of Haiti',
                'code' => 'ht',
                'emoji' => '🇭🇹',
            ),
            201 =>
            array (
                'id' => 202,
                'continent_id' => 7,
                'name' => 'Jamaica',
                'name_pt' => 'Jamaica',
                'full_name' => 'Jamaica',
                'code' => 'jm',
                'emoji' => '🇯🇲',
            ),
            202 =>
            array (
                'id' => 203,
                'continent_id' => 7,
                'name' => 'Martinique',
                'name_pt' => 'Martinica',
                'full_name' => 'Martinique',
                'code' => 'mq',
                'emoji' => '🇲🇶',
            ),
            203 =>
            array (
                'id' => 204,
                'continent_id' => 7,
                'name' => 'Montserrat',
                'name_pt' => 'Montserrat',
                'full_name' => 'Montserrat',
                'code' => 'ms',
                'emoji' => '🇲🇸',
            ),
            204 =>
            array (
                'id' => 205,
                'continent_id' => 7,
                'name' => 'Trinidad and Tobago',
                'name_pt' => 'Trinidade e Tobago',
                'full_name' => 'Republic of Trinidad and Tobago',
                'code' => 'tt',
                'emoji' => '🇹🇹',
            ),
            205 =>
            array (
                'id' => 206,
                'continent_id' => 7,
                'name' => 'St Kitts-Nevis',
                'name_pt' => 'São Cristóvão e Nevis',
                'full_name' => 'The Federation of Saint Kitts and Nevis',
                'code' => 'kn',
                'emoji' => '🇰🇳',
            ),
            206 =>
            array (
                'id' => 207,
                'continent_id' => 7,
                'name' => 'St. Pierre and Miquelon',
                'name_pt' => 'Saint-Pierre e Miquelon',
                'full_name' => 'The Islands of st pierre and miquelon',
                'code' => 'pm',
                'emoji' => '🇵🇲',
            ),
            207 =>
            array (
                'id' => 208,
                'continent_id' => 7,
                'name' => 'Argentina',
                'name_pt' => 'Argentina',
                'full_name' => 'The Republic of Argentina',
                'code' => 'ar',
                'emoji' => '🇦🇷',
            ),
            208 =>
            array (
                'id' => 209,
                'continent_id' => 7,
                'name' => 'Belize',
                'name_pt' => 'Belize',
                'full_name' => 'Belize',
                'code' => 'bz',
                'emoji' => '🇧🇿',
            ),
            209 =>
            array (
                'id' => 210,
                'continent_id' => 7,
                'name' => 'Bolivia',
                'name_pt' => 'Bolívia',
                'full_name' => 'The Republic of Bolivia',
                'code' => 'bo',
                'emoji' => '🇧🇴',
            ),
            210 =>
            array (
                'id' => 211,
                'continent_id' => 7,
                'name' => 'Brazil',
                'name_pt' => 'Brasil',
                'full_name' => 'The Federative Republic of Brazil',
                'code' => 'br',
                'emoji' => '🇧🇷',
            ),
            211 =>
            array (
                'id' => 212,
                'continent_id' => 6,
                'name' => 'American Samoa',
                'name_pt' => 'Samoa Americana',
                'full_name' => 'American Samoa',
                'code' => 'as',
                'emoji' => '🇦🇸',
            ),
            212 =>
            array (
                'id' => 213,
                'continent_id' => 2,
                'name' => 'Aland Islands',
                'name_pt' => 'Ilhas Aland',
                'full_name' => 'Aland Island,Ahvenanmaa',
                'code' => 'ax',
                'emoji' => '🇦🇽',
            ),
            213 =>
            array (
                'id' => 214,
                'continent_id' => 2,
                'name' => 'Saint Barthélemy',
                'name_pt' => 'São Bartolomeu',
                'full_name' => 'Collectivitéde Saint-Barthélemy',
                'code' => 'bl',
                'emoji' => '🇧🇱',
            ),
            214 =>
            array (
                'id' => 215,
                'continent_id' => 2,
                'name' => 'Bonaire, Sint Eustatius and Saba',
                'name_pt' => 'Países Baixos Caribenhos',
                'full_name' => 'Bonaire, Sint Eustatius and Saba',
                'code' => 'bq',
                'emoji' => '🇧🇶',
            ),
            215 =>
            array (
                'id' => 216,
                'continent_id' => 2,
                'name' => 'Bouvet Island',
                'name_pt' => 'Ilha Bouvet',
                'full_name' => 'Bouvet Island',
                'code' => 'bv',
                'emoji' => '🇧🇻',
            ),
            216 =>
            array (
                'id' => 217,
                'continent_id' => 4,
                'name' => 'Cocos (Keeling) Islands',
                'name_pt' => 'Ilhas Cocos',
                'full_name' => 'Cocos (Keeling) Islands',
                'code' => 'cc',
                'emoji' => '🇨🇨',
            ),
            217 =>
            array (
                'id' => 218,
                'continent_id' => 2,
                'name' => 'Curaçao',
                'name_pt' => 'Curaçao',
                'full_name' => 'Curaçao',
                'code' => 'cw',
                'emoji' => '🇨🇼',
            ),
            218 =>
            array (
                'id' => 219,
                'continent_id' => 4,
                'name' => 'Christmas Island',
                'name_pt' => 'Ilha Christmas',
                'full_name' => 'Christmas Island',
                'code' => 'cx',
                'emoji' => '🇨🇽',
            ),
            219 =>
            array (
                'id' => 220,
                'continent_id' => 2,
                'name' => 'Falkland Islands (Malvinas)',
                'name_pt' => 'Malvinas',
                'full_name' => 'Falkland Islands (Malvinas)',
                'code' => 'fk',
                'emoji' => '🇫🇰',
            ),
            220 =>
            array (
                'id' => 221,
                'continent_id' => 2,
                'name' => 'Faroe Islands',
                'name_pt' => 'Ilhas Faróe',
                'full_name' => 'Faroe Islands',
                'code' => 'fo',
                'emoji' => '🇫🇴',
            ),
            221 =>
            array (
                'id' => 222,
                'continent_id' => 2,
                'name' => 'French Guiana',
                'name_pt' => 'Guiana Francesa',
                'full_name' => 'French Guiana',
                'code' => 'gf',
                'emoji' => '🇬🇫',
            ),
            222 =>
            array (
                'id' => 223,
                'continent_id' => 2,
                'name' => 'Guernsey',
                'name_pt' => 'Guernsey',
                'full_name' => 'Bailiwick of Guernsey',
                'code' => 'gg',
                'emoji' => '🇬🇬',
            ),
            223 =>
            array (
                'id' => 224,
                'continent_id' => 2,
                'name' => 'South Georgia and The South Sandwich Islands',
                'name_pt' => 'Ilhas Geórgia do Sul e Sandwich do Sul',
                'full_name' => 'South Georgia and The South Sandwich Islands',
                'code' => 'gs',
                'emoji' => '🇬🇸',
            ),
            224 =>
            array (
                'id' => 225,
                'continent_id' => 6,
                'name' => 'Guam',
                'name_pt' => 'Guam',
                'full_name' => 'The Territory of Guahan, Guam',
                'code' => 'gu',
                'emoji' => '🇬🇺',
            ),
            225 =>
            array (
                'id' => 226,
                'continent_id' => 4,
                'name' => 'Heard Island and McDonald Islands',
                'name_pt' => 'Ilha Heard e Ilhas McDonald',
                'full_name' => 'Heard Island and McDonald Islands',
                'code' => 'hm',
                'emoji' => '🇭🇲',
            ),
            226 =>
            array (
                'id' => 227,
                'continent_id' => 2,
                'name' => 'Isle Of Man',
                'name_pt' => 'Ilha de Man',
                'full_name' => 'Isle Of Man',
                'code' => 'im',
                'emoji' => '🇮🇲',
            ),
            227 =>
            array (
                'id' => 228,
                'continent_id' => 2,
                'name' => 'British Indian Ocean Territory',
                'name_pt' => 'Território Britânico do Oceano Índico',
                'full_name' => 'British Indian Ocean Territory',
                'code' => 'io',
                'emoji' => '🇮🇴',
            ),
            228 =>
            array (
                'id' => 229,
                'continent_id' => 2,
                'name' => 'Jersey',
                'name_pt' => 'Jersey',
                'full_name' => 'Jersey',
                'code' => 'je',
                'emoji' => '🇯🇪',
            ),
            229 =>
            array (
                'id' => 230,
                'continent_id' => 2,
                'name' => 'Saint Lucia',
                'name_pt' => 'Santa Lúcia',
                'full_name' => 'Saint Lucia , St. Lucia',
                'code' => 'lc',
                'emoji' => '🇱🇨',
            ),
            230 =>
            array (
                'id' => 231,
                'continent_id' => 2,
                'name' => 'Saint Martin',
                'name_pt' => 'Ilha de São Martinho',
                'full_name' => 'Saint Martin',
                'code' => 'mf',
                'emoji' => '🇲🇫',
            )
        ));
    }
}
