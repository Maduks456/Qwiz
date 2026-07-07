<?php
   header('Content-Type: text/plain');
   echo "PHP Version: " . PHP_VERSION . "\n";
   echo "Loaded extensions: " . implode(', ', get_loaded_extensions());