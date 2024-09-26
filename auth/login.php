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
            $error_msg= "incorrect details";
        }
        // print_r($login_details);
    
    }
?>
    
<head>
    <link rel="stylesheet" href="../assets/css/materialize.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+DE+Grund:wght@100..400&display=swap" rel="stylesheet">
    <style>
        /* body{
            background-color: black;
        } */
        *{
            color: white !important;
            font-family: "Playwitr+DE+Grund";
        }
        .row{
            height: 60%;
            width: 100%;
            margin-top: 10%;
            border-radius: 20px;
            /* padding: 50px 40px; */
        }
        ul {
            background-color: transparent !important;
            border-radius: 20px !important;
        }
        li img{
            border-radius: 20px !important;

        }
        div .center img{
        margin: -40px -20px;
        }

        .input-field input:focus {
            border-bottom: 1px solid black !important;
            box-shadow: 0 1px 0 0 black !important;
        }
        .input-field .prefix.active, label.active{
            color: black !important;
        }
        .input-field .prefix ~ input, .input-field .prefix ~ textarea, .input-field .prefix ~ label, .input-field .prefix ~ .validate ~ label, .input-field .prefix ~ .helper-text, .input-field .prefix ~ .autocomplete-content{
            background-color: #A1887F;
        }
    </style>
</head>
<main>
    <div class="container">
        <!-- <div class="container"> -->
            <h1 class="center"><i><b>Login to your Account</b></i></h1>
            <!-- <div class="container"> -->
                <div class="row brown lighten-2">
                    <div class="slider col s6 left-align">
                        <ul class="slides">
                            <li><img src="../assets/img/ec-slider2.webp" alt="" class=""></li>
                            <li><img src="../assets/img/ec-slider6.webp" alt="" class=""></li>
                            <li><img src="../assets/img/ec-slider1.jpg" alt="" class=""></li>
                            <li><img src="../assets/img/ec-slider5.webp" alt="" class=""></li>
                        </ul>
                    </div>
                    <div class="col s6 right-align">
                        <div class="center"><img src="../assets/img/logo-black.png" alt="" class="responsive-img center-align" style="width: 40%; height: 60%;"></div>
                        <form action="login.php" method="post" id="form">
                            <div class="col s12 input-field">
                                <i class="material-icons prefix">mail</i>
                                <input type="email" name="email" id="email">
                                <label class="white-text" for="email">Enter your Email</label>
                            </div>
                            <div class="col s12 input-field">
                                <i class="material-icons prefix">lock</i>
                                <input type="password" name="password" id="password">
                                <label class="white-text" for="password">Password</label>
                            </div>
                            <div class="center-align">
                                <input class="btn black" name="login" type="submit" value="login">
                            </div>
                            <p class="center-align">Don't have an account? <a href="signup.php">sign-up</a> here</p>
                        </form>
                    </div>
                </div>
            <!-- </div> -->
        <!-- </div> -->
    </div>
</main>
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/materialize.js"></script>
<script>
    $('.slider').slider({
        indicators: false,
        height: 550,
    });
</script>