<?php

namespace App;

class Authenticate
{

    public function isAuth()
    //check the key you have in session
    {
        return isset($_SESSION['userID']);
    }

    //2 methods depend on isAuth:
    public function redirectIfNotAuth()
    {
        if (!$this->isAuth())
            header('location: SignIn.php');
    }

    public function redirectIfAuth()
    {
        // Used in page SignIn & SignUp
        if ($this->isAuth())
            header('location: Product_View.php');
    }





    public function signUp()
    {
       //Sign Up
       if (isset($_POST['signUpBtn'])){
          $username=$_POST['name'];
          $email=$_POST['email'];
          $password=$_POST['password'];
          $confirmPassword=$_POST['cpassword'];
          if($password!=$confirmPassword)
          \App\Alert::PrintMessage("Confirm Password not matched", 'Danger');
          else{
            $myDatabaseObj= new DB;
            $insertStatement="INSERT INTO user VALUES (NULL,?,?,?)";
            $queryObj= $myDatabaseObj->Connection->prepare($insertStatement);
            $hashedPassword=password_hash($password,PASSWORD_DEFAULT);
            $queryObj->bind_param('sss', $username, $email,$hashedPassword);
            $queryStatus=$queryObj->execute();
            if($queryStatus){
                 header('Location:SignIn.php?doneSignUp=1');
                
            }
            else{
            \App\Alert::PrintMessage("Confirm Password not matched", 'Danger');}
              
           }

        }

    }

    
    public function signIn()
    {
            // myDBObject -> DB
            // Connection -> mysqli
            // queryStmtObject -> mysqli_stmt
            // resultObject -> mysqli_result

        if (isset($_POST['SignInBtn'])) {
            //Catching the inputs
            $email = $_POST['email'];
            $password = $_POST['password'];
            //Connect to DB
            $myDBObject = new DB();
            //Check the email is stored then check if the pass matches with the stored one
            $selectStatement = 'SELECT * FROM `user` WHERE email = ?';
            $queryStmtObject = $myDBObject->Connection->prepare($selectStatement);
            $queryStmtObject->bind_param('s', $email);
            $queryStatus = $queryStmtObject->execute();
            if (!$queryStatus)
                Alert::PrintMessage('Something went wrong', 'Danger');
            else
            {
                //To catch result "fetch"
                //هترجع obj من نوع mysqli_result
                $resultObject = $queryStmtObject->get_result();
                //فعلا في email موجود
                if ($resultObject -> num_rows == 1) {
                    $rowArr = $resultObject->fetch_assoc();
                    //Fetch the next row of a result set as an associative array 
                    if (password_verify($password, $rowArr["Password"])) {
                        // Method check if pass match the stored
                        // Authenticated
                        $_SESSION['userID'] = $rowArr["ID"];
                        $_SESSION['userName'] = $rowArr["Username"];
                        Alert::PrintMessage("Welcome Back, " . $rowArr['Username'], 'Normal');
                    } 
                    else 
                    {
                        Alert::PrintMessage('Wrong password', 'Danger');
                    }
                } 
                else {
                    Alert::PrintMessage('Email is not valid', 'Danger');
                }
            }
        }
    }

    public function logOut()
    {
        if (isset($_GET['logout'])) {
            session_unset();
            session_destroy();
            // delete key of the session
            header("location: SignIn.php");
        }
    }
}

?>