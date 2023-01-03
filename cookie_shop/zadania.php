<?php 
error_reporting(E_ALL ^ E_DEPRECATED);

define('ENCRYPTION_KEY', 'd0a7e7997b6d5fcd55f4b5c32611b87cd923e88837b63bf2941ef819dc8ca282');

function setUnsafeCookie($name, $cookieData, $key)
{
    $iv = mcrypt_create_iv(16, MCRYPT_DEV_URANDOM);
    return setcookie(
        $name, 
        base64_encode(
            $iv.
            mcrypt_encrypt(
                MCRYPT_RIJNDAEL_128,
                $key,
                json_encode($cookieData),
                MCRYPT_MODE_CBC,
                $iv
            )
        )
    );
}
function getUnsafeCookie($name, $key)
{
    if (!isset($_COOKIE[$name])) {
        return null;
    }
    $decoded = base64_decode($_COOKIE[$name]);
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

setUnsafeCookie("mystery", "bawimCTF{cr7p5o_i3_c00l}", "1234567891234567");
if(!isset($_COOKIE['cookie']))
    setcookie("cookie", "-1");
else
{
    if($_COOKIE['cookie'] == 7)
    {
        print_r("bawimCTF{3v3ry1_l0v3s_c00k135}");
    }
}

//print_r(getUnsafeCookie("test", "000102030405060708090a0b0c0d0e0f"));

//$key = "1234567891234567"; // must be 16, 24 or 32 length

/*$crypt = new Encryption($key);
$encrypted_string = $crypt->encrypt('this is a test');
$decrypted_string = $crypt->decrypt($encrypted_string);

setcookie("Encrypted",$encrypted_string);
setcookie("Decrypted",$decrypted_string);
*/


?>