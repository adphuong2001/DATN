const callApiGet = async (url) => {
    return await fetch(url, {
        method: 'GET'
    }).then(res => {
        return res.json();
    });
}

callApiPost = async (url, formData) => {
    return await fetch(url, {
        method: 'POST', body: formData,
    }).then(res => {
        return res.json()
    });
}
function removeAccents(text) {
    text = text.normalize("NFD").replace(/[\u0300-\u036f]/g, ""); // Loại bỏ dấu từ văn bản
    text = text.replace(/[^\w\s]/g, ""); // Loại bỏ ký tự không phải là chữ cái và số
    return text;
}

function isCharacter(character) {
    return ! (/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/.test(character));
}
function isCharacterVowel(character) {
    return character == 'A' ||  character == 'E' || character == 'I' || character == 'O' || character == 'U';
}

function convertToUpperCase(text) {
    return text.toUpperCase();
}

function textApperCaseAndremoveAccents(text){
    return convertToUpperCase(removeAccents(text));
}
function getNumberCharOfNumerology(char){
    if (char == 'A' || char == 'J' || char == 'S') return 1;
    else   if (char == 'B' || char == 'K' || char == 'T') return 2;
    else   if (char == 'C' || char == 'L' || char == 'U') return 3;
    else   if (char == 'D' || char == 'M' || char == 'V') return 4;
    else   if (char == 'E' || char == 'N' || char == 'W') return 5;
    else   if (char == 'F' || char == 'O' || char == 'X') return 6;
    else   if (char == 'G' || char == 'P' || char == 'Y') return 7;
    else   if (char == 'H' || char == 'Q' || char == 'Z') return 8;
    else   if (char == 'I' || char == 'R') return 9;

    return 0;
}

function digitSum(number) {
    return number.toString().split('').reduce((acc, digit) => acc + parseInt(digit), 0);
}



//Hàm tính Thần số học
function numerologyNumber(num) {
    num = digitSum(num);

    if (num != 22 && !num != 11 && num != 33 && num > 10){
        num = digitSum(num);
    }

    return num;
}

function calculateNumerologyBHDD(year, month, day){
    year = numerologyNumber(year);
    month = numerologyNumber(month);
    day = numerologyNumber(day);

    let numerology = year + month + day;

    if (numerology != 22 && !numerology != 11 && numerology != 33 && numerology > 9){
        numerology = digitSum(numerology);
    }

    return numerology;
}

function calculateNumerologyNLTN(full_name){
    full_name = textApperCaseAndremoveAccents(full_name);
    let len = full_name.length;
    let numerology = 0;

    let ho ="";
    let tenDem ="";
    let ten ="";

    let check = 0;
    for (let i = 0; i < len; i++){
        if (check == 0){
            ho += full_name[i];
        }else if (check == 1){
            tenDem += full_name[i];
        }else{
            ten += full_name[i];
        }

        if (full_name[i] == ' ' &&  isCharacter(full_name[i+1])){
            check++;
        }
    }

    let n_ho = 0;
    let n_tenDem = 0;
    let n_ten = 0;

    len = ho.length;
    for (let i = 0; i < len; i++){
        n_ho += getNumberCharOfNumerology(ho[i]);
    }

    len = tenDem.length;
    for (let i = 0; i < len; i++){
        n_tenDem += getNumberCharOfNumerology(tenDem[i]);
    }

    len = ten.length;
    for (let i = 0; i < len; i++){
        n_ten += getNumberCharOfNumerology(ten[i]);
    }

    numerology = n_ho + n_tenDem + n_ten;
    while (numerology != 22 && numerology != 11 && numerology != 33 && numerology > 9){
        numerology = digitSum(numerology);
    }

    return numerology;
}

function calculateNumerologyDLBT(full_name){
    full_name = textApperCaseAndremoveAccents(full_name);
    let len = full_name.length;
    let numerology = 0;

    let ho ="";
    let tenDem ="";
    let ten ="";

    let check = 0;
    for (let i = 0; i < len; i++){
        if (check == 0){
            ho += full_name[i];
        }else if (check == 1){
            tenDem += full_name[i];
        }else{
            ten += full_name[i];
        }

        if (full_name[i] == ' ' &&  isCharacter(full_name[i+1])){
            check++;
        }
    }

    let n_ho = 0;
    let n_tenDem = 0;
    let n_ten = 0;

    len = ho.length;
    for (let i = 0; i < len; i++){
        if (isCharacterVowel(ho[i])){
            n_ho += getNumberCharOfNumerology(ho[i]);
        }
    }

    len = tenDem.length;
    for (let i = 0; i < len; i++){
        if (isCharacterVowel(ho[i])) {
            n_tenDem += getNumberCharOfNumerology(tenDem[i]);
        }
    }

    len = ten.length;
    for (let i = 0; i < len; i++){
        if (isCharacterVowel(ho[i])){
            n_ten += getNumberCharOfNumerology(ten[i]);
        }
    }

    numerology = n_ho + n_tenDem + n_ten;
    while (numerology != 22 && numerology != 11 && numerology != 33 && numerology > 9){
        numerology = digitSum(numerology);
    }

    return numerology;
}

function calculateNumerologyNC(full_name){
    full_name = textApperCaseAndremoveAccents(full_name);
    let len = full_name.length;
    let numerology = 0;

    let ho ="";
    let tenDem ="";
    let ten ="";

    let check = 0;
    for (let i = 0; i < len; i++){
        if (check == 0){
            ho += full_name[i];
        }else if (check == 1){
            tenDem += full_name[i];
        }else{
            ten += full_name[i];
        }

        if (full_name[i] == ' ' &&  isCharacter(full_name[i+1])){
            check++;
        }
    }

    let n_ho = 0;
    let n_tenDem = 0;
    let n_ten = 0;

    len = ho.length;
    for (let i = 0; i < len; i++){
        if (!isCharacterVowel(ho[i])) {
            n_ho += getNumberCharOfNumerology(ho[i]);
        }
    }

    len = tenDem.length;
    for (let i = 0; i < len; i++){
        if (!isCharacterVowel(ho[i])) {
            n_tenDem += getNumberCharOfNumerology(tenDem[i]);
        }
    }

    len = ten.length;
    for (let i = 0; i < len; i++){
        if (!isCharacterVowel(ho[i])) {
            n_ten += getNumberCharOfNumerology(ten[i]);
        }
    }

    numerology = n_ho + n_tenDem + n_ten;
    while (numerology != 22 && numerology != 11 && numerology != 33 && numerology > 9){
        numerology = digitSum(numerology);
    }

    return numerology;
}