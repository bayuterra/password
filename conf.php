<?php
@system("rm -rf test123.php");
$banner ="{$purple2}
<=============xxx=============>\n
     Wellcome To RBS Terra\n
<======[Assalamu-Alaikum]======>\n
{$yellow2}	 Bot Multi Akun \n";

echo $banner;
echo "\n\nCapture CryptoWord\n\n\n";
echo "ObjectID: ";
$obj=trim(fgets(STDIN));
echo "\nCred: ";
$crd=trim(fgets(STDIN));
sleep(1);
$ad=$js1["d"]["b"]["p"];
$uid1=str_replace("coinbaseUsers/","",$ad);
$js2=json_decode($crd,true);
$cred1=$js2["d"]["b"]["cred"];
$version = "44";
echo "\nWithdraw To Email : ";
$email_coinbase1 =trim(fgets(STDIN));
@system("clear");

echo $banner;

echo "Capture PopStellar\n\n\n";
echo "ObjectID: ";
$obj=trim(fgets(STDIN));
echo "\nCred: ";
$crd=trim(fgets(STDIN));
sleep(1);
$ad=$js1["d"]["b"]["p"];
$uid2=str_replace("coinbaseUsers/","",$ad);
$js2=json_decode($crd,true);
$cred2=$js2["d"]["b"]["cred"];
$version = "44";
echo "\nWithdraw To Email : ";
$email_coinbase2 =trim(fgets(STDIN));
@system("clear");

echo $banner;

echo "Capture CryptoPoP\n\n\n";
echo "ObjectID: ";
$obj=trim(fgets(STDIN));
echo "\nCred: ";
$crd=trim(fgets(STDIN));
sleep(1);
$ad=$js1["d"]["b"]["p"];
$uid3=str_replace("coinbaseUsers/","",$ad);
$js2=json_decode($crd,true);
$cred3=$js2["d"]["b"]["cred"];
$version = "44";
echo "\nWithdraw To Email : ";
$email_coinbase3 =trim(fgets(STDIN));
@system("clear");
?>
