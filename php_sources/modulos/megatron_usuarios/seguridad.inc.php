<?php
$jerarquia=$_COOKIE["jerarquia"];
#jrarquia 0 coresponde a Megatron
if($jerarquia!="0"){
	header('Location: ../../login/login_nologin.php?nologin=6');
	exit;
}

?>