<?php
include 'AES.php';
$imputText = "msg";
$imputKey = "ddd";
while(strlen($imputKey)<16){
	$imputKey .= "\0";
}
$blockSize = 256;
$aes = new AES($imputText, $imputKey, $blockSize);

// $enc = $aes->encrypt();
// $aes->setData($enc);
$dec=$aes->decrypt();
// echo "After encryption: ".$enc."<br/>";
echo "After decryption: ".$dec."<br/>";
?>