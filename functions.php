<?php
session_start();

    $lettersLowercase = 'abcdefghijklmnopqrstuvwxyz';
    $lettersUppercase ='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $symbols = '!@#$%&?';

    $validChars = $lettersLowercase . $lettersUppercase . $numbers . $symbols;
    // $newPass = '';
    $_SESSION['newPassword'] = '';

    // General function waiting to be called with the right parameters
    function generatePassword($characters, $length){
        $pass= '';
        $charLength = strlen($characters); 
        for($i = 0; $i < $length; $i++){
            $pass .= $characters[rand(0, $charLength - 1)];
        }   
        return $pass;
    }

    if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['password_length'])){
        $passwordLength = $_GET['password_length'];
        $_SESSION['newPassword'] = generatePassword($validChars, $passwordLength);
    }
?>