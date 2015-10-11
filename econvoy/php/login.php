<?php
/**
 * Created by PhpStorm.
 * User: Arvind
 * Date: 18-Sep-15
 * Time: 8:34 AM
 */
/**
 * Decrypting password
 * @param salt, password
 * returns hash string
 */
?>
<?php

function checkhashSSHA($salt, $password) {

  $hash = base64_encode(sha1($password . $salt, true) . $salt);
  return $hash;
}


/**
 * Encrypting password
 * @param password
 * returns salt and encrypted password
 */

if(isset($_POST['login']))
{
   $DB_HOST = 'localhost';
   $DB_USER = 'root';
   $DB_PASS = '';
   $DB_NAME = 'econvoy';
   $mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
  # check connection
  if ($mysqli->connect_errno)
  {
    echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
    exit();
  }
  $email = $_POST['username'];
  $password = ($_POST['password']);
  if ($password == "arvind" && $email == "admin")
    {
      session_start();
      $_SESSION['name'] = "arvind";
      // user authentication details are correct
      header('Location:http://localhost:90/econvoy/dashboard.php');
    }
  elseif ($password == "isha" && $email == "admin")
    {
      session_start();
      $_SESSION['name']= "isha";
      // user authentication details are correct
      header('Location:http://localhost:90/econvoy/dashboard.php');
    }
  elseif ($password == "unnit" && $email == "admin")
    {
      session_start();
      $_SESSION['name']='unnit';
      // user authentication details are correct
      header('Location:http://localhost:90/econvoy/dashboard.php');
    }
  elseif ($password == "manthan" && $email == "admin")
    {
      session_start();
      $_SESSION['name']='manthan';
      // user authentication details are correct
      header('Location:http://localhost:90/econvoy/dashboard.php');
    }
  elseif ($password == "police" && $email == "admin")
  {
    session_start();
    $_SESSION['name']='police';
    // user authentication details are correct
    header('Location:http://localhost:90/econvoy/policedashboard.php');
  }
  elseif ($email != "admin")
    {
      // actual user
      $conn= new mysqli('localhost','root','','econvoy');
      $sql = "SELECT * FROM users WHERE email = '$email'";
      $result = mysqli_query($conn,$sql);
      if ( mysqli_query($conn,$sql) ) {
        $result = mysqli_fetch_array($result);
        $salt = $result['salt'];
        $encrypted_password = $result['encrypt_paswd'];
        $hash = base64_encode(sha1($password . $salt, true) . $salt);
        // check for password equality
        if ( $encrypted_password == $hash && $result['Status'] == "yes" ) {
          // user authentication details are correct
          session_start();
          $_SESSION['name'] = $result['name'];
          $_SESSION['email'] = $result['email'] ;

          header('Location:http://localhost:90/econvoy/userdashboard.php');
          mysqli_close($conn);
        }
        else{
          // user authentication are incorrect
          session_start();
          $_SESSION['name'] = "error";
          header('Location:http://localhost:90/econvoy');
          mysqli_close($conn);
        }
      }
    }
    else
    {
      session_start();
      $_SESSION['name'] = "notexisted";
      header('Location:http://localhost:90/econvoy/');
    }
}
?>