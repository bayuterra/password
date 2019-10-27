<?php
@system("clear");
@system("rm -rf password");
echo "
<=============xxx=============>\n
     Wellcome To RBS Terra\n
<======[Assalamu-Alaikum]======>\n";
echo "please choose your language\nsilahkan pilih bahasa anda\n";
echo "[ en / id ]\n";
$bhs=trim(fgets(STDIN));
@system("clear");
echo "
<=============xxx=============>\n
     Wellcome To RBS Terra\n
<======[Assalamu-Alaikum]======>\n";

if ($bhs == "en"){
echo "\nterms and conditions for RBS script users.\n";
sleep(2);
echo "\n1. It is forbidden to sell scripts to other users.\n";
sleep(2);
echo "\n2. It is prohibited to create multiple accounts or use accounts on multiple IPs\n";
sleep(2);
echo "\n3. Always give a good response for positive goals\n";
sleep(2);
echo "\n4. If you violate any of the above conditions, your account and IP will be banned, and the script will be deleted\n";
sleep(2);
echo "\n5. Prohibited Encode, Decode, Decomply, This script without permission, Please W.A for business purposes\n";
sleep(2);
echo "\nThank you, Please follow the existing regulations \n[ y / n ]\n";
$cuy=trim(fgets(STDIN));
}
if ($bhs == "id"){
echo "\nsyarat dan ketentuan untuk pengguna script RBS.\n";
sleep(2);
echo "\n1.Dilarang untuk memperjual belikan script kepada pengguna yang lain.\n";
sleep(2);
echo "\n2.Dilarang membuat banyak akun atau menggunakan akun di banyak ip.\n";
sleep(2);
echo "\n3.Selalu berikan respon yang baik untuk tujuan yang positip\n";
sleep(2);
echo "\n4.Jika Melanggar salah satu dari syarat di atas , akun dan ip akan di banned , dan script akan di hapus\n";
sleep(2);
echo "\n5.Dilarang Encode , Decode , Decomply, Script ini tanpa izin , Silahkan W.A untuk keperluan bisnis\n";
sleep(2);
echo "Terimakasih ,Dimohon untuk mengikuti peraturan yang ada \n[ y / n ]\n";
$cuy=trim(fgets(STDIN));
}else{
	echo "Bye Bye\n";
	exit();
}
if($cuy == y){
	echo "Menu Script..\n";
	sleep(3);
	}else{
		echo "Bye Bye\n";
		exit();
		}
?>
