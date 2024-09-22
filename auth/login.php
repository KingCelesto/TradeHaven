<?php
    include('../templates/connect.php');

    $email="";
    $password="";
    $error_msg="";

    if (isset($_POST['login'])) {
        $email= $_POST['email'];
        $password= $_POST['password'];

        $fetch_query = "SELECT * FROM `trade_tb` WHERE `email` = '$email'";
        $get_fetch_query = mysqli_query( $db_cont, $fetch_query);

        if (mysqli_num_rows($get_fetch_query)>0){
            $login_details = mysqli_fetch_assoc($get_fetch_query);
            
            if ($login_details['password'] === $password) {
                session_start();
                $_SESSION['name']= $name;
                header('Location: ../index.php');
                } else {
                    $error_msg= "incorrect password";
                }
        } else {
            $error_msg= "incorrect details" ;
        }
        // print_r($login_details);
    
    }
?>
    
<head>
    <link rel="stylesheet" href="../assets/css/materialize.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        #form{
            margin-top: 40px;
        }
        .input-field input:focus {
            border-bottom: 1px solid black !important;
            box-shadow: 0 1px 0 0 black !important;
        }
        .input-field .prefix.active, label.active{
            color: black !important;
        }
        .input-field .prefix ~ input, .input-field .prefix ~ textarea, .input-field .prefix ~ label, .input-field .prefix ~ .validate ~ label, .input-field .prefix ~ .helper-text, .input-field .prefix ~ .autocomplete-content{
            background-color: #4CAF50;
        }
    </style>
</head>
<main>
    <div class="container">
        <div class="container">
            <h1 class="center"><i><b class="">Login to your account</b></i></h1>
            <span class="red-text"><?php echo $error_msg; ?></span>
            <center><div class="row green darken 2" style="border-radius: 20px; padding: 50px 70px;">
                <div class="col s6 left "><img src="../assets/img/Logo.png" alt="" class="responsive-img center"></div>
                <div class="col s6">
                    <form action="login.php" method="post" id="form">
                    <div class="col s12 input-field">
                        <i class="material-icons prefix">mail</i>
                        <input type="email" name="email" id="email">
                        <label class="white-text"  for="email">Enter your Email</label>
                    </div>
                    <div class="col s12 input-field">
                        <i class="material-icons prefix">lock</i>
                        <input type="password" name="password" id="password">
                        <label class="white-text" for="password">Password</label>
                    </div>
                    <div class="center-align">
                        <input class="btn black" name="login" type="submit" value="login">
                    </div>
                    <p>Don't have an account? <a href="signup.php">sign-up</a> here</p>
                </form> 
                </div>
            </div></center>
        </div>
    </div>
</main>
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/materialize.js"></script>