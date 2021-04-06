<?
session_start();
header('Cache-control: private, max-age=3600, must-revalidate, immutable'); // IE 6 FIX
if (isset($_GET['lang'])) {
 $lang = $_GET['lang'];
 // register the session and set the cookie
 $_SESSION['lang'] = $lang;
 setcookie("lang", $lang, time() + (3600));
} elseif (isset($_SESSION['lang'])) {
 $lang = $_SESSION['lang'];
} elseif (isset($_COOKIE['lang'])) {
 $lang = $_COOKIE['lang'];
} else {
 $lang = 'fr';
}
switch ($lang) {
 case 'en':
  //English
  $lang_file = 'lang.en.php';
  break;
 case 'de':
  //German
  $lang_file = 'lang.de.php';
  break;
 case 'fr':
  //French
  $lang_file = 'lang.fr.php';
  break;
 // Default french
 default:
  $lang_file = 'lang.fr.php';
}
include_once $lang_file;
