<?php
/**
 * Created by PhpStorm.
 * User: Arvind
 * Date: 03-Oct-15
 * Time: 1:47 AM
 */

/**
 * Decrypting password
 * @param salt, password
 * returns hash string
 */
function checkhashSSHA($salt, $password) {

    $hash = base64_encode(sha1($password . $salt, true) . $salt);

    return $hash;
}


/**
 * Encrypting password
 * @param password
 * returns salt and encrypted password
 */
function hashSSHA($password) {

    $salt = sha1(rand());
    $salt = substr($salt, 0, 10);
    $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
    $hash = array("salt" => $salt, "encrypted" => $encrypted);
    return $hash;
}
function isUserExisted($email) {
    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"econvoy");
    $command = "SELECT email FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $command);
    $rowcount=mysqli_num_rows($result);
    if ($result){
        // user existed
        return true;
    } else {
        // user doesnot  existed
        return false;
    }
}

if (isset($_POST['register'])) {
    //Gathering all required data
    $conn= new mysqli('localhost','root','','econvoy');
    $email = $_POST['email'];
    $password = ($_POST['password']);
    $cpassword = ($_POST['cpassword']);
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn,$sql);
    $command = "SELECT email FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $command);
    $rowcount = mysqli_num_rows($result);
    if ($rowcount > 0){
        session_start();
        $_SESSION['name'] = "existed";
        header('Location:http://localhost:90/econvoy/');
    } elseif($password != $cpassword)
    {
        session_start();
        $_SESSION['name'] = "mismatch";
        header('Location:http://localhost:90/econvoy/registration.php');
    }
    else
    {
        $password = ($_POST['password']);
        $name = $_POST['name'];
        $type = ($_POST['group1']);
        $uuid = uniqid('', true);
        $hash = hashSSHA($password);
        $encrypted_password = $hash["encrypted"]; // encrypted password
        $salt = $hash["salt"]; // salt
        $query = "INSERT INTO users(unique_id, name, email, type, encrypt_paswd, salt, created_at) VALUES ('$uuid', '$name', '$email', '$type', '$encrypted_password' , '$salt', NOW())";
        $result = mysqli_query($conn, $query);
        // check for successful store
        if ($result) {
            // get user details
            $uid = mysqli_insert_id($conn); // last inserted id
            $query= "SELECT * FROM users WHERE uid = '$uid'";
            $result = mysqli_query($conn, $query);
            session_start();
            $_SESSION['name'] = $name;
            $_SESSION['mail'] = $email;
            $_SESSION['type'] = $type;
            header('Location:http://localhost:90/econvoy/userdashboard.php');
        }
    }
}
?>