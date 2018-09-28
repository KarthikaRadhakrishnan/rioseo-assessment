<?php
spl_autoload_register(function($className) {
  $file = str_replace('\\',DIRECTORY_SEPARATOR,$className);
  require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . '\Controllers' .$file . ".php";
});
?>