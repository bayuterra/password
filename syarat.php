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
if ($bhs == "en"){
echo "\nterms and conditions for RBS script users.\n";
sleep(1.5);
echo "1. It is forbidden to sell scripts to other users.\n";
sleep(1.5);
echo "2. It is prohibited to create multiple accounts or use accounts on multiple IPs\n";
sleep(1.5);
echo "3. Always give a good response for positive goals\n";
sleep(1.5);
echo "4. If you violate any of the above conditions, your account and IP will be banned, and the script will be deleted\n";
sleep(1.5);
echo "5. Prohibited Encode, Decode, Decomply, This script without permission, Please W.A for business purposes\n";
sleep(1.5);
echo "Thank you, Please follow the existing regulations \n[ y / n ]\n";
$cuy=trim(fgets(STDIN));
}
if ($bhs == "id"){
echo "\nsyarat dan ketentuan untuk pengguna script RBS.\n";
sleep(1.5);
echo "1.Dilarang untuk memperjual belikan script kepada pengguna yang lain.\n";
sleep(1.5);
echo "2.Dilarang membuat banyak akun atau menggunakan akun di banyak ip.\n";
sleep(1.5);
echo "3.Selalu berikan respon yang baik untuk tujuan yang positip\n";
sleep(1.5);
echo "4.Jika Melanggar salah satu dari syarat di atas , akun dan ip akan di banned , dan script akan di hapus\n";
sleep(1.5);
echo "5.Dilarang Encode , Decode , Decomply, Script ini tanpa izin , Silahkan W.A untuk keperluan bisnis\n";
sleep(1.5);
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
