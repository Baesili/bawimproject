<?php 
error_reporting(E_ALL ^ E_DEPRECATED);

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

function ASCIIToHexadecimal($str)
{
	$hex = "";
	$strLen = strLen($str);
	for ($i = 0; $i < $strLen; $i++)
	{
		$chex = DecimalToHexadecimal(ord($str[$i]));
		if (strlen($chex) == 1)
			$chex = substr_replace($chex, "0", 0, 0);
		$hex .= $chex;
	}
	return $hex;
}


function DecimalToHexadecimal($dec)
{
	if ($dec < 1) return "0";
	$hex = $dec;
	$hexStr = "";
	while ($dec > 0)
	{
		$hex = $dec % 16;
		if ($hex < 10)
			$hexStr = substr_replace($hexStr, chr($hex + 48), 0, 0);
		else
			$hexStr = substr_replace($hexStr, chr($hex + 55), 0, 0);
		$dec = floor($dec / 16);
	}
	return $hexStr;
}

$id=session_id();
$key=mb_substr($id,0,8,'8bit');
$hexkey=ASCIIToHexadecimal($key);

setUnsafeCookie("mystery", "bawimCTF{cr7p5o_i3_c00l}", $hexkey);
if(!isset($_COOKIE['cookie']))
    setcookie("cookie", "-1");
else
{
    if($_COOKIE['cookie'] == 7)
    {
        print_r("bawimCTF{3v3ry1_l0v3s_c00k135}");
    }
}

?>