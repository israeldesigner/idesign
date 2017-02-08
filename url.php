<?php

$url = (isset($_GET['url'])) ? $_GET['url'] : 'principal';
$urlE = explode('/', $url);
$arquivo = $urlE['0'];
$paginas = array('portfolio','outra','servicos','compras','faq','curriculum');
if(isset($arquivo) && in_array($arquivo, $paginas)) {
    include "$arquivo.php";
  }else {
    include "home.php";
  }

 ?>
