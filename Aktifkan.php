<?php
/*
Mau Recode Lu ? mikir makan nya ajg:v??
*/
echo "

\033[1;32m@@@@@@@@@@@@@@@@@@@@@@@@@@@@
\033[1;32m@ TOMBOL-AJAIB-X290X       @
\033[1;32m@ AUTHOR BY : TN.PLI-PLI   @
\033[1;32m@ MY TEAM : GCA X290X      @
\033[1;32m@@@@@@@@@@@@@@@@@@@@@@@@@@@@
";



echo "\e[0;36m TEKAN ENTER UNTUK MENGAKTIFKAN PROGRAM\n MEMULAI : ";
$gaada = trim(fgets(STDIN));
$dir = "/data/data/com.termux/files/home/.termux";
$file_to_write = 'termux.properties';
$content_to_write = "extra-keys = [['ESC','/','-','HOME','UP','END','PGUP'],['TAB','CTRL','ALT','LEFT','DOWN','RIGHT','PGDN']]";
if( is_dir($dir) === false )
{
    mkdir($dir);
}
$file = fopen($dir . '/' . $file_to_write,"w");
fwrite($file, $content_to_write);
fclose($file);
include $dir . '/' . $file_to_write;
system('termux-reload-settings');
system("clear");
echo "\e[0;41m  //////////////////////////
 // [+] BERHASIL 100% [+] //
////////////////////////////\e[0;36m

  SILAHKAN LOGIN ULANG TERMUX ANDA ^_^
  \033[1;32m@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
  @ \033[1;32mAUTHOR BY: TN.PLI-PLI       @
  @ \033[1;32mMY TEAM  : GCA TEAM X290X   @
  @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
\033[1;31mTHANKS TO : GALAXI CYBER ANONYMOUS
\033[1;31m AND THANKS TO : MADA/MR.PHANTOM
";
?>
