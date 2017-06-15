<?PHP


// http://en.wikipedia.org/wiki/Devanagari_script#Devan.C4.81gar.C4.AB_in_Unicode
// http://en.wikibooks.org/wiki/Windows_Programming/Unicode/Character_reference/0000-0FFF


$v = "꣄"; // Virama

/* Main arrays */

$num['tra'] = array(
    60 => "0",
    61 => "1",
    62 => "2",
    63 => "3",
    64 => "4",
    65 => "5",
    66 => "6",
    67 => "7",
    68 => "8",
    69 => "9",
);

$main['tra'] = array(

    //20 => "t ", // t end

    40 => "'", // apostrophe (avagraha)
    41 => "`", // Latin apostrophe (’)
    42 => "#", // Abbreviation

    200 => "n2a",
    202 => "r2a",
    203 => "Za",

    205 => "*ga",
    //	206 => "jJa",
    207 => "*ja",
    208 => "*Da",
    209 => "*da",
    210 => "*ba",
    211 => "fa",

    212 => "qha",
    213 => "khha",
    214 => "ghha",
    215 => "xa",
    216 => "Dhha",
    217 => "rhha",

    116 => "kha",
    115 => "ka",
    118 => "gha",
    117 => "ga",
    119 => "Ga",

    121 => "cha",
    120 => "ca",
    123 => "jha",
    122 => "ja",
    124 => "Ja",

    126 => "Tha",
    125 => "Ta",
    128 => "Dha",
    127 => "Da",
    129 => "Na",

    131 => "tha",
    130 => "ta",
    133 => "dha",
    132 => "da",
    134 => "na",

    136 => "pha",
    135 => "pa",
    138 => "bha",
    137 => "ba",
    139 => "ma",

    141 => "Ya",
    140 => "ya",
    142 => "ra",
    143 => "la",
    144 => "va",

    145 => "za",
    146 => "Sa",
    147 => "sa",

    199 => "K",

    151 => "~",
    149 => "M",
    150 => "H",
    152 => "꣏", // ||
    153 => "꣎", // |
    154 => "Q", // Nukta
    155 => "@", // Abbreviation
    //	156 => ":", // Udatta
    //	157 => ";", // Anudatta (svarita)


    201 => "La",

    148 => "ha",
);

$vow['tra'] = array(

    269 => " aE",
    270 => " AE",
    271 => " aO",

    257 => " R",
    258 => " q",
    259 => " w",
    260 => " W",

    261 => " e",
    262 => " ai",
    263 => " o",
    264 => " au",

    251 => " a",
    252 => " A",
    253 => " i",
    254 => " I",
    255 => " u",
    256 => " U",

    265 => " E",
    266 => " O",

    267 => "oM",

);

$yukta['tra'] = array(

    317 => "aE",
    318 => "AE",
    319 => "aO",

    307 => "R", // joint
    308 => "q", // joint
    309 => "w", // joint
    310 => "W", // joint

    311 => "e", // joint
    312 => "ai", // joint
    313 => "o", // joint
    314 => "au", // joint

    301 => "a", // joint
    302 => "A", // joint
    303 => "i", // joint
    304 => "I", // joint
    305 => "u", // joint
    306 => "U", // joint

    315 => "E",
    316 => "O",
);

$num['scr'] = array(
    60 => "꣐", // 0
    61 => "꣑", // 1
    62 => "꣒", // 2
    63 => "꣓", // 3
    64 => "꣔", // 4
    65 => "꣕", // 5
    66 => "꣖", // 6
    67 => "꣗", // 7
    68 => "꣘", // 8
    69 => "꣙", // 9
);

$main['scr'] = array(

    //20 => "ৎ", // t end

    40 => "'", // apostrophe (avagraha)
    41 => "’", // Latin apostrophe (’)
    42 => "॰", // Abbreviation

    200 => "ꢥ·",

    202 => "ꢬ·",
    203 => "ꢳ·",

    205 => "ꣅˆꢔ",
    //	206 => "ज्ञ",
    207 => "ꣅˆꢙ",
    208 => "ꣅˆꢞ",
    209 => "ꣅˆꢣ",
    210 => "ꣅˆꢨ",
    211 => "ꢧ·",

    212 => "ꢒ·",
    213 => "ꢓ·",
    214 => "ꢔ·",
    215 => "ꢙ·",
    216 => "ꢞ·",
    217 => "ꢟ·",

    116 => "ꢓ", // kha
    115 => "ꢒ", // ka
    118 => "ꢕ", // gha
    117 => "ꢔ", // ga
    119 => "ꢖ", // Ga

    121 => "ꢘ", // cha
    120 => "ꢗ", // ca
    123 => "ꢚ", // jha
    122 => "ꢙ", // ja
    124 => "ꢛ", // Ja

    126 => "ꢝ", // Tha
    125 => "ꢜ", // Ta
    128 => "ꢟ", // Dha
    127 => "ꢞ", // Da
    129 => "ꢠ", // Na

    131 => "ꢢ", // tha
    130 => "ꢡ", // ta
    133 => "ꢤ", // dha
    132 => "ꢣ", // da
    134 => "ꢥ", // na

    136 => "ꢧ", // pha
    135 => "ꢦ", // pa
    138 => "ꢩ", // bha
    137 => "ꢨ", // ba
    139 => "ꢪ", // ma

    141 => "ꢫ·", // Ya
    140 => "ꢫ", // ya
    142 => "ꢬ", // ra
    143 => "ꢭ", // la
    144 => "ꢮ", // va

    145 => "ꢯ", // za
    146 => "ꢰ", // Sa
    147 => "ꢱ", // sa

    199 => "ꢁʼ",

    151 => "ꣅ", // ~
    149 => "ꢀ", // M
    150 => "ꢁ", // H
    152 => "꣏", // ||
    153 => "꣎", // |
    154 => "·", // . Nukta
    155 => "॰", // Abbreviation
    //	156 => "॑", // Udatta
    //	157 => "॒", // Anudatta (svarita)

    201 => "ꢳ",

    148 => "ꢲ", // ha
);

$vow['scr'] = array(

    269 => " ꢌʼ",
    270 => " ꢍʼ",
    271 => " ꢃʼ",

    257 => " ꢈ", // R
    258 => " ꢉ", // q
    259 => " ꢊ", // L
    260 => " ꢋ", // W

    261 => " ꢍ", // e
    262 => " ꢎ", // ai
    263 => " ꢐ", // o
    264 => " ꢑ", // au

    251 => " ꢂ", // a
    252 => " ꢃ", // A
    253 => " ꢄ", // i
    254 => " ꢅ", // I
    255 => " ꢆ", // u
    256 => " ꢇ", // U

    265 => " ꢌ",
    266 => " ꢏ",

    267 => "ꢐꢀ",

);

$yukta['scr'] = array(

    317 => "ꢾʼ",
    318 => "ꢿʼ",
    319 => "ꢵʼ",

    307 => "ꢺ", // R joint
    308 => "ꢻ", // q joint
    309 => "ꢼ", // L joint
    310 => "ꢽ", // W  joint

    311 => "ꢿ", // e joint
    312 => "ꣀ", // ai joint
    313 => "ꣂ", // o joint
    314 => "ꣃ", // au joint

    301 => "&#8205;", // a joint
    302 => "ꢵ", // A joint
    303 => "ꢶ", // i joint
    304 => "ꢷ", // I joint
    305 => "ꢸ", // u joint
    306 => "ꢹ", // U joint

    315 => "ꢾ",
    316 => "ꣁ",
);
