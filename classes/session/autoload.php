<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
spl_autoload_register(
   function($class) {
      static $classes = null;
      if ($classes === null) {
         $classes = array(
            'spriebsch\\session\\abstractsession' => '/AbstractSession.php',
            'spriebsch\\session\\phpsessionbackend' => '/PHPSessionBackend.php',
            'spriebsch\\session\\phpmysqlsessionbackend' => '/PHPMysqlSessionBackend.php',
            'spriebsch\\session\\sessionbackendinterface' => '/interfaces/SessionBackendInterface.php',
            'spriebsch\\session\\sessionbackendstub' => '/SessionBackendStub.php',
            'spriebsch\\session\\sessionexception' => '/exceptions/SessionException.php',
            'spriebsch\\session\\sessioninterface' => '/interfaces/SessionInterface.php'
          );
      }
      $cn = strtolower($class);
      if (isset($classes[$cn])) {
         require __DIR__ . $classes[$cn];
      }
   }
);
// @codeCoverageIgnoreEnd
