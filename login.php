<?php
  //modifies the header and sets charset to UTF-8 (I/O)
  header('Content-type: text/html; charset=utf-8');

  if(isset($_SESSION['user']))
  {
    header('Location: terminal.php');
  }

  if(!empty($_POST))
  {
    
  }
