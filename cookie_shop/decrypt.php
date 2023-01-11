<?php
error_reporting(E_ALL ^ E_DEPRECATED);

function decodeCipher($cipher, $key)
{
    $decoded = base64_decode($cipher);
    $iv = mb_substr($decoded, 0, 16, '8bit');
    $ciphertext = mb_substr($decoded, 16, null, '8bit');
    
    $decrypted = rtrim(
        mcrypt_decrypt(
            MCRYPT_RIJNDAEL_128,
            $key,
            $ciphertext,
            MCRYPT_MODE_CBC,
            $iv
        ),
        "\0"
    );
    
    return json_decode($decrypted, true);
}

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = str_replace("%2F", "/", $data);
    return $data;
}



$cipher = $_GET['cipher'];
$ciphertext = validate($cipher);
$key = $_GET['key'];

echo decodeCipher($ciphertext, $key);



?>