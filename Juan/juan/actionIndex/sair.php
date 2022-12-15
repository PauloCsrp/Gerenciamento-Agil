<?php
session_start();
session_destroy();
//unset( $_SESSION['adm'],$_SESSION['usu']);

header('Location:../index.html');

 ?>