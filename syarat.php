<?php
@system("clear");
@system("rm -rf password");
echo "
<=============xxx=============>\n
     Wellcome To RBS Terra\n
<======[Assalamu-Alaikum]======>\n";
echo "please choose your language\nsilahkan pilih bahasa anda";
echo "\nen/id :";
$bhs=trim(fgets(STDIN));
@system("clear");
@error_reporting(0);
echo "
<=============xxx=============>\n
     Wellcome To RBS Terra\n
<======[Assalamu-Alaikum]======>\n";
if ($bhs == "en"){
echo "terms and conditions for RBS script users.\n\n";
echo "1. It is forbidden to sell scripts to other users.\n\n";
echo "2. It is prohibited to create multiple accounts or use accounts on multiple IPs\n\n";
echo "3. Always give a good response for positive goals\n\n";
echo "4. If you violate any of the above conditions, your account and IP will be banned, and the script will be deleted\n\n";
echo "Thank you, Please follow the existing regulations\n";
echo"[ y / n ] : \n";
$cuy=trim(fgets(STDIN));
if($cuy == y){
	echo "Wait To Menu Script..\n";
	sleep(3);
	}else{
		echo "Good Bye\n";
		exit();
		}
}
if ($bhs == "id"){
echo "syarat dan ketentuan untuk pengguna script RBS.\n";
echo "1.Dilarang untuk memperjual belikan script kepada pengguna yang lain.\n";
echo "2.Dilarang membuat banyak akun atau menggunakan akun di banyak ip.\n";
echo "3.Selalu berikan respon yang baik untuk tujuan yang positip\n";
echo "4.Jika Melanggar salah satu dari syarat di atas , akun dan ip akan di banned , dan script akan di hapus\n";
echo "Terimakasih ,Dimohon untuk mengikuti peraturan yang ada\n";
echo"[ y / n ] : \n";
$cuy=trim(fgets(STDIN));
if($cuy == y){
	echo "Menunggu Ke Menu Script..\n";
	sleep(3);
	}else{
		echo "Selamat Tinggal\n";
		exit();
		}
}
?>
