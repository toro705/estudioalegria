<?php
  if (!isset($_SESSION)) {
    session_start();
  }
if(array_key_exists('lang', $_POST)){
    if ($_POST['lang'] == 'es') {
        $_SESSION['lang'] = 'es';
        include("index_es.php");//include check session DE
        
    } else {
        $_SESSION['lang'] = 'en';
        include("index_en.php");//include check session DE
        // include("index_en.php");//include check session DE
    }
} else {
    $supportedLangs = array('es', 'en-US');

    $languages = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
    $languages = $languages[0];
    if ($languages == 'es') {
        $_SESSION['lang'] = 'es';
        include("index_es.php");//include check session DE
    } else {
        $_SESSION['lang'] = 'en';
         include("index_en.php");//include check session DE
        // include("index_en.php");//include check session DE

    }
}
?>