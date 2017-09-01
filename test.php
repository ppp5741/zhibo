<?php
   $a=new PDO('mysql:host=127.0.0.1;dbname=test','root','root');
   $b=$a->query('show databases')->fetchAll();
   var_dump($b);
