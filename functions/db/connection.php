<?php
  /**
   *Creates a MySQL connection
   */

  $db_info = [ "servername" => "localhost",
               "username" => "pepe",
               "password" => "11",
               "database" => "ark-cms" ];

function connection($db_info)
{
  $conn = mysqli_connect ( $db_info["servername"],
                           $db_info["username"],
                           $db_info["password"],
                           $db_info["database"]  );
  //If an error was found, log it.
  if(!$conn)
  {
    error_log(mysqli_connect_error()."\n");
    header("Location: ../../404.php");
    die();
  }

  //Sets MySQL charset to UTF-8
  mysqli_set_charset($conn,"utf8");

  //returns connection
  return $conn;
}

 $ok = connection($db_info);
