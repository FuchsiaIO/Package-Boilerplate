<?php
  
/**
 * Enigma Autoloader
 *
 * Autoloads all Classes within the application/src directory
 *
 * @author Benjamin J. Anderson <andeb2804@gmail.com>
 * @package Global
 * @since 1.0.0
 * @version v1.0.0
 */
   
require_once 'config.php';

spl_autoload_register(function($class){
  $file = PACKAGE_PATH .
    implode( '', 
      array_map( 
        function($fragment) use ($class){
          return "/$fragment";
        }, explode( '\\', $class )
      )
    ).'.php';
    
    if(file_exists($file))
    {
      require_once $file;
    }
});