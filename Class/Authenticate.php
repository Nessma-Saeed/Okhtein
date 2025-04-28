<?php

namespace App;

class Authenticate
{
    public function signUp()
    {
       //Sign Up
       if (isset($_POST['signUpBtn'])){
          $username=$_POST['name'];
          $email=$_POST['email'];
          $password=$_POST['password'];
          $confirmPassword=$_POST['cpassword'];
          if($password!=$confirmPassword)
          echo '<div style="width: 100%; background-color: #BF3131; color: #7D0A0A; text-align: center; padding: 15px; font-weight: bold;">Passwords does not match</div>';
          else{
            $myDatabaseObj= new DB;
            $insertStatement="INSERT INTO user VALUES (NULL,?,?,?)";
            $queryObj= $myDatabaseObj->Connection->prepare($insertStatement);
            $hashedPassword=password_hash($password,PASSWORD_DEFAULT);
            $queryObj->bind_param('sss', $username, $email,$hashedPassword);
            $queryStatus=$queryObj->execute();
            if($queryStatus)
            echo '<div style="width: 100%; background-color: #B4EBE6; color: #80CBC4; text-align: center; padding: 15px; font-weight: bold;">Your account has been created Successfully!</div>';
            else
            echo '<div style="width: 100%; background-color: #BF3131; color: #7D0A0A; text-align: center; padding: 15px; font-weight: bold;">Error occurred while creating account</div>';
    }

}

    }
}

?>