var chandrabinduThai = "ัํ";
var chandrabinduRoman = "̐";
var anusvaraThai = "ํ";
var consonantRoman = 'k kh g gh ṅ c ch j jh ñ ṭ ṭh ḍ ḍh ṇ t th d dh n p ph b bh m y r l v ś ṣ s h ḻ'.split(' ');
var consonantThaiBindu = 'กฺ ขฺ คฺ ฆฺ งฺ จฺ ฉฺ ชฺ ฌฺ ญฺ ฏฺ ฐฺ ฑฺ ฒฺ ณฺ ตฺ ถฺ ทฺ ธฺ นฺ ปฺ ผฺ พฺ ภฺ มฺ ยฺ รฺ ลฺ วฺ ศฺ ษฺ สฺ หฺ ฬฺ'.split(' ');
var consonantThai = 'ก ข ค ฆ ง จ ฉ ช ฌ ญ ฏ ฐ ฑ ฒ ณ ต ถ ท ธ น ป ผ พ ภ ม ย ร ล ว ศ ษ ส ห ฬ'.split(' ');

var backVowelRoman = "i ī u ū ṛ ṝ ḷ ḹ ṃ m̐ ḥ".split(' '); //except ā because au
var backVowelThai = "ิ ี ุ ู ฤ ฤๅ ฦ ฦๅ ํ ̐ ะ".split(' ');//except า because เา

var frontVowelThai = "โ ไ".split(' '); //except เ because เา
var frontVowelRoman = "o ai".split(' ');//except e because au
var leaveFrontVowelThai = "า เ".split(' ');
var leaveFrontVowelRoman = "ā e".split(' ');

var thaiVowelInFist = "อา อิ อี อุ อู เอ โอ ไอ เอา".split(' ');
var romanVowelInFist = "ā i ī u ū e o ai au".split(' ');

var vowelBackconsonantRoman = 'a ā i ī u ū ṛ ṝ ḷ ḹ e o'.split(' ');

var thaiSymbol = "๐ ๑ ๒ ๓ ๔ ๕ ๖ ๗ ๘ ๙ ' ฯ ๚".split(' ');
var romanSymbol = "0 1 2 3 4 5 6 7 8 9 ' । ॥".split(' ');

function thaisanscript(txt) {
    var lineSplit = txt.split(/\r\n|\r|\n/);
    var result = new Array();
    for (var i = 0; i < lineSplit.length; i++) {
        result.push(thaiToIAST(lineSplit[i]).trim());
    }
    return result.join("\n");
}
function thaiToIAST(txt) {
    txt = convertSymbol(txt);
    txt = convertChandrabindu(txt);
    txt = swapAnusvaraAndChandrabindu(txt);
    txt = convertVowelInFist(txt);
    txt = convertAInFist(txt);
    txt = swapFrontVowel(txt);
    txt = convertFrontVowel(txt);
    txt = convertBackVowel(txt);
    txt = convertAUVowel(txt);
    txt = convertLeaveFrontVowel(txt);
    txt = convertConsonant(txt);
    return txt;
}
function  convertSymbol(txt) {
    return  txt.replaceArray(thaiSymbol, romanSymbol);
}
function  convertChandrabindu(txt) {
    return txt.replace(/ัํ/g, chandrabinduRoman);
}
function  swapAnusvaraAndChandrabindu(txt) {
    txt = txt.replace(/̐า/g, 'า' + chandrabinduRoman);
    txt = txt.replace(/ํา/g, 'า' + anusvaraThai);
    return txt;
}

function convertBackVowel(txt) {
    return txt.replaceArray(backVowelThai, backVowelRoman);
}
function convertVowelInFist(txt) {
    return txt.replaceArray(thaiVowelInFist, romanVowelInFist);
}
function  convertAInFist(txt) {
    return txt.replace(/อ/g, 'a');
}
function swapFrontVowel(txt) {

    txt = " " + txt + "  "; //prevent index out of bound
    var charList = txt.split('');
    for (var i = charList.length - 1; i >= 0; i--) { // backward loop prevent infinity loop
        if (isMoveFrontVowel(charList, i)) {
            if (charList[i + 2] === "ฺ" && charList[i + 3] === "ร") {
                swapArray(charList, i);
                swapArray(charList, i + 1);
                swapArray(charList, i + 2);
            } else {
                swapArray(charList, i);
            }
        }
    }
    return  charList.join("");
}
function convertFrontVowel(txt) {
    return txt.replaceArray(frontVowelThai, frontVowelRoman);
}
function convertLeaveFrontVowel(txt) {
    return txt.replaceArray(leaveFrontVowelThai, leaveFrontVowelRoman);
}

function convertAUVowel(txt) {
    return txt.replace(/เา/g, 'au');
}


//-------------convertConsonant--------------------------------------------------
function convertConsonant(txt) {
    txt = convertBinduConsonant(txt);
    txt = convertConsonantWithVowel(txt);
    return txt;
}
function convertBinduConsonant(txt) {
    return txt.replaceArray(consonantThaiBindu, consonantRoman);
}
function convertConsonantWithVowel(txt) {
    txt = txt + "  "; //prevent index out of bound
    var charList = txt.split('');
    for (var i = 0; i < charList.length; i++) {
        charList[i] = convertConsonantWithoutA(charList, i);
        charList[i] = convertConsonantWithA(charList, i);
    }
    return charList.join("");

}
function convertConsonantWithoutA(charList, i) {
    if (isConsonantWithVowel(charList, i)) {
        charList[i] = charList[i].replaceArray(consonantThai, consonantRoman);
    }
    return charList[i];
}

function convertConsonantWithA(charList, i) {
    if (contains(consonantThai,charList[i])) {
        var result = charList[i].replaceArray(consonantThai, consonantRoman);
        charList[i] = result + 'a';
    }
    return charList[i];
}


//-----------------------------------------------------------------------------
function isConsonantWithVowel(charList, i) {
    return  contains(consonantThai,charList[i]) && contains(vowelBackconsonantRoman ,charList[i + 1]);
}
function isMoveFrontVowel(charList, i) {
    return isFrontVowel(charList[i]) && contains(consonantThai,charList[i + 1]);
}
function isFrontVowel(char) {
    return char === 'โ' || char === 'เ' || char === 'ไ';
}
function swapArray(charList, index) {

    if (charList.length > 2) {
        var tmp = charList[index + 1];
        charList[index + 1] = charList[index];
        charList[index] = tmp;
    }
    return charList;
}
String.prototype.replaceArray = function (find, replace) {
    var replaceString = this;
    var regex;
    for (var i = 0; i < find.length; i++) {
        regex = new RegExp(find[i], "g");
        replaceString = replaceString.replace(regex, replace[i]);
    }
    return replaceString;
};
function contains(a, obj) {
    var i = a.length;
    while (i--) {
        
       if (a[i] === obj) {
           return true;
       }
    }
    return false;
}




