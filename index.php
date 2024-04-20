<?php


function checkFirst($password){
    if(strlen($password) >= 8){
        return true;
    } 
    echo "x La password deve avere almeno 8 caratteri \n";
    return false;
}

function checkSecond($password){
    for($i = 0; $i < strlen($password); $i++){
        if(is_numeric($password[$i])){
            return true;
        } 
    }
    echo "x La password deve contenere almeno un numero\n";
    return false;
}

function checkThird($password){
    for($i = 0; $i < strlen($password); $i++){
        if(ctype_upper($password[$i])){
            return true;
        }
    }
    echo "x La password deve avere almeno un carattere in maiuscolo\n";
    return false;
}

function checkFourth($password){
    $specialChars = ['!', '#', '+'. '%', '?', '@'];
    for($i = 0; $i < strlen($password); $i++){
        if(in_array($password[$i], $specialChars)){
            return true;
        }
    }
    echo "x La password deve contenere almeno un carattere speciale\n";
    return false;
}

function checkPass(){
    $password = readline('Inserisci una password: ');
    $firstRule = checkFirst($password);
    $secondRule = checkSecond($password);
    $thirdRule = checkThird($password);
    $fourthRule = checkFourth($password);

    if($firstRule && $secondRule && $thirdRule && $fourthRule){
        echo "La password inserita è valida \n";
    } else {
        echo "La password inserita non è valida \n";
        return checkPass();
    }
}
checkPass();