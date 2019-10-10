<?php
@system("clear");


echo "
_________________________________
Jangan Lupa Feedback Yang Baik\n
  Tahap Trial Atau Uji Coba\n
   Hub WA : +6288276608200\n
=================================
";

echo "Password: ";
$test123=trim(fgets(STDIN));
if ($test123 == "rbs123")
{
echo "sukses";
@system("rm -rf password");
@system("clear");
}
else
{
echo"fail";
@system("rm -rf password");
exit();
}
?>
