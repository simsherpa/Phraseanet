<?php

/*
 * This file is part of Phraseanet
 *
 * (c) 2005-2016 Alchemy
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 *
 * @license     http://opensource.org/licenses/gpl-3.0 GPLv3
 * @link        www.phraseanet.com
 */
function getCountries($lng = 'fr')
{
    $countries['en'] = array(
        'AF' => 'AFGHANISTAN',
        'AX' => 'ÅLAND ISLANDS',
        'AL' => 'ALBANIA',
        'DZ' => 'ALGERIA',
        'AS' => 'AMERICAN SAMOA',
        'AD' => 'ANDORRA',
        'AO' => 'ANGOLA',
        'AI' => 'ANGUILLA',
        'AQ' => 'ANTARCTICA',
        'AG' => 'ANTIGUA AND BARBUDA',
        'AR' => 'ARGENTINA',
        'AM' => 'ARMENIA',
        'AW' => 'ARUBA',
        'AU' => 'AUSTRALIA',
        'AT' => 'AUSTRIA',
        'AZ' => 'AZERBAIJAN',
        'BS' => 'BAHAMAS',
        'BH' => 'BAHRAIN',
        'BD' => 'BANGLADESH',
        'BB' => 'BARBADOS',
        'BY' => 'BELARUS',
        'BE' => 'BELGIUM',
        'BZ' => 'BELIZE',
        'BJ' => 'BENIN',
        'BM' => 'BERMUDA',
        'BT' => 'BHUTAN',
        'BO' => 'BOLIVIA',
        'BA' => 'BOSNIA AND HERZEGOVINA',
        'BW' => 'BOTSWANA',
        'BV' => 'BOUVET ISLAND',
        'BR' => 'BRAZIL',
        'IO' => 'BRITISH INDIAN OCEAN TERRITORY',
        'BN' => 'BRUNEI DARUSSALAM',
        'BG' => 'BULGARIA',
        'BF' => 'BURKINA FASO',
        'BI' => 'BURUNDI',
        'KH' => 'CAMBODIA',
        'CM' => 'CAMEROON',
        'CA' => 'CANADA',
        'CV' => 'CAPE VERDE',
        'KY' => 'CAYMAN ISLANDS',
        'CF' => 'CENTRAL AFRICAN REPUBLIC',
        'TD' => 'CHAD',
        'CL' => 'CHILE',
        'CN' => 'CHINA',
        'CX' => 'CHRISTMAS ISLAND',
        'CC' => 'COCOS (KEELING) ISLANDS',
        'CO' => 'COLOMBIA',
        'KM' => 'COMOROS',
        'CG' => 'CONGO',
        'CD' => 'CONGO, THE DEMOCRATIC REPUBLIC OF THE',
        'CK' => 'COOK ISLANDS',
        'CR' => 'COSTA RICA',
        'CI' => 'CÔTE D\'IVOIRE',
        'HR' => 'CROATIA',
        'CU' => 'CUBA',
        'CY' => 'CYPRUS',
        'CZ' => 'CZECH REPUBLIC',
        'DK' => 'DENMARK',
        'DJ' => 'DJIBOUTI',
        'DM' => 'DOMINICA',
        'DO' => 'DOMINICAN REPUBLIC',
        'EC' => 'ECUADOR',
        'EG' => 'EGYPT',
        'SV' => 'EL SALVADOR',
        'GQ' => 'EQUATORIAL GUINEA',
        'ER' => 'ERITREA',
        'EE' => 'ESTONIA',
        'ET' => 'ETHIOPIA',
        'FK' => 'FALKLAND ISLANDS (MALVINAS)',
        'FO' => 'FAROE ISLANDS',
        'FJ' => 'FIJI',
        'FI' => 'FINLAND',
        'FR' => 'FRANCE',
        'GF' => 'FRENCH GUIANA',
        'PF' => 'FRENCH POLYNESIA',
        'TF' => 'FRENCH SOUTHERN TERRITORIES',
        'GA' => 'GABON',
        'GM' => 'GAMBIA',
        'GE' => 'GEORGIA',
        'DE' => 'GERMANY',
        'GH' => 'GHANA',
        'GI' => 'GIBRALTAR',
        'GR' => 'GREECE',
        'GL' => 'GREENLAND',
        'GD' => 'GRENADA',
        'GP' => 'GUADELOUPE',
        'GU' => 'GUAM',
        'GT' => 'GUATEMALA',
        'GG' => 'GUERNSEY',
        'GN' => 'GUINEA',
        'GW' => 'GUINEA-BISSAU',
        'GY' => 'GUYANA',
        'HT' => 'HAITI',
        'HM' => 'HEARD ISLAND AND MCDONALD ISLANDS',
        'VA' => 'HOLY SEE (VATICAN CITY STATE)',
        'HN' => 'HONDURAS',
        'HK' => 'HONG KONG',
        'HU' => 'HUNGARY',
        'IS' => 'ICELAND',
        'IN' => 'INDIA',
        'ID' => 'INDONESIA',
        'IR' => 'IRAN, ISLAMIC REPUBLIC OF',
        'IQ' => 'IRAQ',
        'IE' => 'IRELAND',
        'IM' => 'ISLE OF MAN',
        'IL' => 'ISRAEL',
        'IT' => 'ITALY',
        'JM' => 'JAMAICA',
        'JP' => 'JAPAN',
        'JE' => 'JERSEY',
        'JO' => 'JORDAN',
        'KZ' => 'KAZAKHSTAN',
        'KE' => 'KENYA',
        'KI' => 'KIRIBATI',
        'KP' => 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF',
        'KR' => 'KOREA, REPUBLIC OF',
        'KW' => 'KUWAIT',
        'KG' => 'KYRGYZSTAN',
        'LA' => 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC',
        'LV' => 'LATVIA',
        'LB' => 'LEBANON',
        'LS' => 'LESOTHO',
        'LR' => 'LIBERIA',
        'LY' => 'LIBYAN ARAB JAMAHIRIYA',
        'LI' => 'LIECHTENSTEIN',
        'LT' => 'LITHUANIA',
        'LU' => 'LUXEMBOURG',
        'MO' => 'MACAO',
        'MK' => 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF',
        'MG' => 'MADAGASCAR',
        'MW' => 'MALAWI',
        'MY' => 'MALAYSIA',
        'MV' => 'MALDIVES',
        'ML' => 'MALI',
        'MT' => 'MALTA',
        'MH' => 'MARSHALL ISLANDS',
        'MQ' => 'MARTINIQUE',
        'MR' => 'MAURITANIA',
        'MU' => 'MAURITIUS',
        'YT' => 'MAYOTTE',
        'MX' => 'MEXICO',
        'FM' => 'MICRONESIA, FEDERATED STATES OF',
        'MD' => 'MOLDOVA, REPUBLIC OF',
        'MC' => 'MONACO',
        'MN' => 'MONGOLIA',
        'ME' => 'MONTENEGRO',
        'MS' => 'MONTSERRAT',
        'MA' => 'MOROCCO',
        'MZ' => 'MOZAMBIQUE',
        'MM' => 'MYANMAR',
        'NA' => 'NAMIBIA',
        'NR' => 'NAURU',
        'NP' => 'NEPAL',
        'NL' => 'NETHERLANDS',
        'AN' => 'NETHERLANDS ANTILLES',
        'NC' => 'NEW CALEDONIA',
        'NZ' => 'NEW ZEALAND',
        'NI' => 'NICARAGUA',
        'NE' => 'NIGER',
        'NG' => 'NIGERIA',
        'NU' => 'NIUE',
        'NF' => 'NORFOLK ISLAND',
        'MP' => 'NORTHERN MARIANA ISLANDS',
        'NO' => 'NORWAY',
        'OM' => 'OMAN',
        'PK' => 'PAKISTAN',
        'PW' => 'PALAU',
        'PS' => 'PALESTINIAN TERRITORY, OCCUPIED',
        'PA' => 'PANAMA',
        'PG' => 'PAPUA NEW GUINEA',
        'PY' => 'PARAGUAY',
        'PE' => 'PERU',
        'PH' => 'PHILIPPINES',
        'PN' => 'PITCAIRN',
        'PL' => 'POLAND',
        'PT' => 'PORTUGAL',
        'PR' => 'PUERTO RICO',
        'QA' => 'QATAR',
        'RE' => 'REUNION',
        'RO' => 'ROMANIA',
        'RU' => 'RUSSIAN FEDERATION',
        'RW' => 'RWANDA',
        'BL' => 'SAINT BARTHÉLEMY',
        'SH' => 'SAINT HELENA',
        'KN' => 'SAINT KITTS AND NEVIS',
        'LC' => 'SAINT LUCIA',
        'MF' => 'SAINT MARTIN',
        'PM' => 'SAINT PIERRE AND MIQUELON',
        'VC' => 'SAINT VINCENT AND THE GRENADINES',
        'WS' => 'SAMOA',
        'SM' => 'SAN MARINO',
        'ST' => 'SAO TOME AND PRINCIPE',
        'SA' => 'SAUDI ARABIA',
        'SN' => 'SENEGAL',
        'RS' => 'SERBIA',
        'SC' => 'SEYCHELLES',
        'SL' => 'SIERRA LEONE',
        'SG' => 'SINGAPORE',
        'SK' => 'SLOVAKIA',
        'SI' => 'SLOVENIA',
        'SB' => 'SOLOMON ISLANDS',
        'SO' => 'SOMALIA',
        'ZA' => 'SOUTH AFRICA',
        'GS' => 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS',
        'ES' => 'SPAIN',
        'LK' => 'SRI LANKA',
        'SD' => 'SUDAN',
        'SR' => 'SURINAME',
        'SJ' => 'SVALBARD AND JAN MAYEN',
        'SZ' => 'SWAZILAND',
        'SE' => 'SWEDEN',
        'CH' => 'SWITZERLAND',
        'SY' => 'SYRIAN ARAB REPUBLIC',
        'TW' => 'TAIWAN, PROVINCE OF CHINA',
        'TJ' => 'TAJIKISTAN',
        'TZ' => 'TANZANIA, UNITED REPUBLIC OF',
        'TH' => 'THAILAND',
        'TL' => 'TIMOR-LESTE',
        'TG' => 'TOGO',
        'TK' => 'TOKELAU',
        'TO' => 'TONGA',
        'TT' => 'TRINIDAD AND TOBAGO',
        'TN' => 'TUNISIA',
        'TR' => 'TURKEY',
        'TM' => 'TURKMENISTAN',
        'TC' => 'TURKS AND CAICOS ISLANDS',
        'TV' => 'TUVALU',
        'UG' => 'UGANDA',
        'UA' => 'UKRAINE',
        'AE' => 'UNITED ARAB EMIRATES',
        'GB' => 'UNITED KINGDOM',
        'US' => 'UNITED STATES',
        'UM' => 'UNITED STATES MINOR OUTLYING ISLANDS',
        'UY' => 'URUGUAY',
        'UZ' => 'UZBEKISTAN',
        'VU' => 'VANUATU',
        'VE' => 'VENEZUELA',
        'VN' => 'VIET NAM',
        'VG' => 'VIRGIN ISLANDS, BRITISH',
        'VI' => 'VIRGIN ISLANDS, U.S.',
        'WF' => 'WALLIS AND FUTUNA',
        'EH' => 'WESTERN SAHARA',
        'YE' => 'YEMEN',
        'ZM' => 'ZAMBIA',
        'ZW' => 'ZIMBABWE',
    );

    $countries['us'] = $countries['en'];

    $countries['fr'] = array(
        'AF'                 => 'AFGHANISTAN',
        'ZA'                 => 'AFRIQUE DU SUD',
        'AX'                 => 'ÅLAND, ÎLES',
        'AL'                 => 'ALBANIE',
        'DZ'                 => 'ALGÉRIE',
        'DE'                 => 'ALLEMAGNE',
        'AD'                 => 'ANDORRE',
        'AO'                 => 'ANGOLA',
        'AI'                 => 'ANGUILLA',
        'AQ'                 => 'ANTARCTIQUE',
        'AG'                 => 'ANTIGUA-ET-BARBUDA',
        'AN'                 => 'ANTILLES NÉERLANDAISES',
        'SA'                 => 'ARABIE SAOUDITE',
        'AR'                 => 'ARGENTINE',
        'AM'                 => 'ARMÉNIE',
        'AW'                 => 'ARUBA',
        'AU'                 => 'AUSTRALIE',
        'AT'                 => 'AUTRICHE',
        'AZ'                 => 'AZERBAÏDJAN',
        'BS'                 => 'BAHAMAS',
        'BH'                 => 'BAHREÏN',
        'BD'                 => 'BANGLADESH',
        'BB'                 => 'BARBADE',
        'BY'                 => 'BÉLARUS',
        'BE'                 => 'BELGIQUE',
        'BZ'                 => 'BELIZE',
        'BJ'                 => 'BÉNIN',
        'BM'                 => 'BERMUDES',
        'BT'                 => 'BHOUTAN',
        'BO'                 => 'BOLIVIE',
        'BA'                 => 'BOSNIE-HERZÉGOVINE',
        'BW'                 => 'BOTSWANA',
        'BV'                 => 'BOUVET, ÎLE',
        'BR'                 => 'BRÉSIL',
        'BN'                 => 'BRUNÉI DARUSSALAM',
        'BG'                 => 'BULGARIE',
        'BF'                 => 'BURKINA FASO',
        'BI'                 => 'BURUNDI',
        'KY'                 => 'CAÏMANES, ÎLES',
        'KH'                 => 'CAMBODGE',
        'CM'                 => 'CAMEROUN',
        'CA'                 => 'CANADA',
        'CV'                 => 'CAP-VERT',
        'CF'                 => 'CENTRAFRICAINE, RÉPUBLIQUE',
        'CL'                 => 'CHILI',
        'CN'                 => 'CHINE',
        'CX'                 => 'CHRISTMAS, ÎLE',
        'CY'                 => 'CHYPRE',
        'CC'                 => 'COCOS (KEELING), ÎLES',
        'CO'                 => 'COLOMBIE',
        'KM'                 => 'COMORES',
        'CG'                 => 'CONGO',
        'CD'                 => 'CONGO, LA RÉPUBLIQUE DÉMOCRATIQUE DU',
        'CK'                 => 'COOK, ÎLES',
        'KR'                 => 'CORÉE, RÉPUBLIQUE DE',
        'KP'                 => 'CORÉE, RÉPUBLIQUE POPULAIRE DÉMOCRATIQUE DE',
        'CR'                 => 'COSTA RICA',
        'CI'                 => 'CÔTE D\'IVOIRE',
        'HR'                 => 'CROATIE',
        'CU'                 => 'CUBA',
        'DK'                 => 'DANEMARK',
        'DJ'                 => 'DJIBOUTI',
        'DO'                 => 'DOMINICAINE, RÉPUBLIQUE',
        'DM'                 => 'DOMINIQUE',
        'EG'                 => 'ÉGYPTE',
        'SV'                 => 'EL SALVADOR',
        'AE'                 => 'ÉMIRATS ARABES UNIS',
        'EC'                 => 'ÉQUATEUR',
        'ER'                 => 'ÉRYTHRÉE',
        'ES'                 => 'ESPAGNE',
        'EE'                 => 'ESTONIE',
        'US'                 => 'ÉTATS-UNIS',
        'ET'                 => 'ÉTHIOPIE',
        'FK'                 => 'FALKLAND, ÎLES (MALVINAS)',
        'FO'                 => 'FÉROÉ, ÎLES',
        'FJ'                 => 'FIDJI',
        'FI'                 => 'FINLANDE',
        'FR'                 => 'FRANCE',
        'GA'                 => 'GABON',
        'GM'                 => 'GAMBIE',
        'GE'                 => 'GÉORGIE',
        'GS'                 => 'GÉORGIE DU SUD ET LES ÎLES SANDWICH DU SUD',
        'GH'                 => 'GHANA',
        'GI'                 => 'GIBRALTAR',
        'GR'                 => 'GRÈCE',
        'GD'                 => 'GRENADE',
        'GL'                 => 'GROENLAND',
        'GP'                 => 'GUADELOUPE',
        'GU'                 => 'GUAM',
        'GT'                 => 'GUATEMALA',
        'GG'                 => 'GUERNESEY',
        'GN'                 => 'GUINÉE',
        'GW'                 => 'GUINÉE-BISSAU',
        'GQ'                 => 'GUINÉE ÉQUATORIALE',
        'GY'                 => 'GUYANA',
        'GF'                 => 'GUYANE FRANÇAISE',
        'HT'                 => 'HAÏTI',
        'HM'                 => 'HEARD, ÎLE ET MCDONALD, ÎLES',
        'HN'                 => 'HONDURAS',
        'HK'                 => 'HONG-KONG',
        'HU'                 => 'HONGRIE',
        'IM'                 => 'ÎLE DE MAN',
        'UM'                 => 'ÎLES MINEURES ÉLOIGNÉES DES ÉTATS-UNIS',
        'VG'                 => 'ÎLES VIERGES BRITANNIQUES',
        'VI'                 => 'ÎLES VIERGES DES ÉTATS-UNIS',
        'IN'                 => 'INDE',
        'ID'                 => 'INDONÉSIE',
        'IR'                 => 'IRAN, RÉPUBLIQUE ISLAMIQUE D\'',
        'IQ'                 => 'IRAQ',
        'IE'                 => 'IRLANDE',
        'IS'                 => 'ISLANDE',
        'IL'                 => 'ISRAËL',
        'IT'                 => 'ITALIE',
        'JM'                 => 'JAMAÏQUE',
        'JP'                 => 'JAPON',
        'JE'                 => 'JERSEY',
        'JO'                 => 'JORDANIE',
        'KZ'                 => 'KAZAKHSTAN',
        'KE'                 => 'KENYA',
        'KG'                 => 'KIRGHIZISTAN',
        'KI'                 => 'KIRIBATI',
        'KW'                 => 'KOWEÏT',
        'LA'                 => 'LAO, RÉPUBLIQUE DÉMOCRATIQUE POPULAIRE',
        'LS'                 => 'LESOTHO',
        'LV'                 => 'LETTONIE',
        'LB'                 => 'LIBAN',
        'LR'                 => 'LIBÉRIA',
        'LY'                 => 'LIBYENNE, JAMAHIRIYA ARABE',
        'LI'                 => 'LIECHTENSTEIN',
        'LT'                 => 'LITUANIE',
        'LU'                 => 'LUXEMBOURG',
        'MO'                 => 'MACAO',
        'MK'                 => 'MACÉDOINE, L\'EX-RÉPUBLIQUE YOUGOSLAVE DE',
        'MG'                 => 'MADAGASCAR',
        'MY'                 => 'MALAISIE',
        'MW'                 => 'MALAWI',
        'MV'                 => 'MALDIVES',
        'ML'                 => 'MALI',
        'MT'                 => 'MALTE',
        'MP'                 => 'MARIANNES DU NORD, ÎLES',
        'MA'                 => 'MAROC',
        'MH'                 => 'MARSHALL, ÎLES',
        'MQ'                 => 'MARTINIQUE',
        'MU'                 => 'MAURICE',
        'MR'                 => 'MAURITANIE',
        'YT'                 => 'MAYOTTE',
        'MX'                 => 'MEXIQUE',
        'FM'                 => 'MICRONÉSIE, ÉTATS FÉDÉRÉS DE',
        'MD'                 => 'MOLDOVA, RÉPUBLIQUE DE',
        'MC'                 => 'MONACO',
        'MN'                 => 'MONGOLIE',
        'ME'                 => 'MONTÉNÉGRO',
        'MS'                 => 'MONTSERRAT',
        'MZ'                 => 'MOZAMBIQUE',
        'MM'                 => 'MYANMAR',
        'NA'                 => 'NAMIBIE',
        'NR'                 => 'NAURU',
        'NP'                 => 'NÉPAL',
        'NI'                 => 'NICARAGUA',
        'NE'                 => 'NIGER',
        'NG'                 => 'NIGÉRIA',
        'NU'                 => 'NIUÉ',
        'NF'                 => 'NORFOLK, ÎLE',
        'NO'                 => 'NORVÈGE',
        'NC'                 => 'NOUVELLE-CALÉDONIE',
        'NZ'                 => 'NOUVELLE-ZÉLANDE',
        'IO'                 => 'OCÉAN INDIEN, TERRITOIRE BRITANNIQUE DE L\'',
        'OM'                 => 'OMAN',
        'UG'                 => 'OUGANDA',
        'UZ'                 => 'OUZBÉKISTAN',
        'PK'                 => 'PAKISTAN',
        'PW'                 => 'PALAOS',
        'PS'                 => 'PALESTINIEN OCCUPÉ, TERRITOIRE',
        'PA'                 => 'PANAMA',
        'PG'                 => 'PAPOUASIE-NOUVELLE-GUINÉE',
        'PY'                 => 'PARAGUAY',
        'NL'                 => 'PAYS-BAS',
        'PE'                 => 'PÉROU',
        'PH'                 => 'PHILIPPINES',
        'PN'                 => 'PITCAIRN',
        'PL'                 => 'POLOGNE',
        'PF'                 => 'POLYNÉSIE FRANÇAISE',
        'PR'                 => 'PORTO RICO',
        'PT'                 => 'PORTUGAL',
        'QA'                 => 'QATAR',
        'RE'                 => 'RÉUNION',
        'RO'                 => 'ROUMANIE',
        'GB'                 => 'ROYAUME-UNI',
        'RU'                 => 'RUSSIE, FÉDÉRATION DE',
        'RW'                 => 'RWANDA',
        'EH'                 => 'SAHARA OCCIDENTAL',
        'BL'                 => 'SAINT-BARTHÉLEMY',
        'SH'                 => 'SAINTE-HÉLÈNE',
        'LC'                 => 'SAINTE-LUCIE',
        'KN'                 => 'SAINT-KITTS-ET-NEVIS',
        'SM'                 => 'SAINT-MARIN',
        'MF'                 => 'SAINT-MARTIN',
        'PM'                 => 'SAINT-PIERRE-ET-MIQUELON',
        'VA'                 => 'SAINT-SIÈGE (ÉTAT DE LA CITÉ DU VATICAN)',
        'VC'                 => 'SAINT-VINCENT-ET-LES GRENADINES',
        'SB'                 => 'SALOMON, ÎLES',
        'WS'                 => 'SAMOA',
        'AS'                 => 'SAMOA AMÉRICAINES',
        'ST'                 => 'SAO TOMÉ-ET-PRINCIPE',
        'SN'                 => 'SÉNÉGAL',
        'RS'                 => 'SERBIE',
        'SC'                 => 'SEYCHELLES',
        'SL'                 => 'SIERRA LEONE',
        'SG'                 => 'SINGAPOUR',
        'SK'                 => 'SLOVAQUIE',
        'SI'                 => 'SLOVÉNIE',
        'SO'                 => 'SOMALIE',
        'SD'                 => 'SOUDAN',
        'LK'                 => 'SRI LANKA',
        'SE'                 => 'SUÈDE',
        'CH'                 => 'SUISSE',
        'SR'                 => 'SURINAME',
        'SJ'                 => 'SVALBARD ET ÎLE JAN MAYEN',
        'SZ'                 => 'SWAZILAND',
        'SY'                 => 'SYRIENNE, RÉPUBLIQUE ARABE',
        'TJ'                 => 'TADJIKISTAN',
        'TW'                 => 'TAÏWAN, PROVINCE DE CHINE',
        'TZ'                 => 'TANZANIE, RÉPUBLIQUE-UNIE DE',
        'TD'                 => 'TCHAD',
        'CZ'                 => 'TCHÈQUE, RÉPUBLIQUE',
        'TF'                 => 'TERRES AUSTRALES FRANÇAISES',
        'TH'                 => 'THAÏLANDE',
        'TL'                 => 'TIMOR-LESTE',
        'TG'                 => 'TOGO',
        'TK'                 => 'TOKELAU',
        'TO'                 => 'TONGA',
        'TT'                 => 'TRINITÉ-ET-TOBAGO',
        'TN'                 => 'TUNISIE',
        'TM'                 => 'TURKMÉNISTAN',
        'TC'                 => 'TURKS ET CAÏQUES, ÎLES',
        'TR'                 => 'TURQUIE',
        'TV'                 => 'TUVALU',
        'UA'                 => 'UKRAINE',
        'UY'                 => 'URUGUAY',
        'VU'                 => 'VANUATU',
        'VE'                 => 'VENEZUELA',
        'VN'                 => 'VIET NAM',
        'WF'                 => 'WALLIS ET FUTUNA',
        'YE'                 => 'YÉMEN',
        'ZM'                 => 'ZAMBIE',
        'ZW'                 => 'ZIMBABWE'
    );
    if ( ! isset($countries[$lng]))
        $lng = 'us';
    foreach ($countries[$lng] as $k => $country)
        $countries[$lng][$k] = mb_strtolower($country);

    return $countries[$lng];
}
