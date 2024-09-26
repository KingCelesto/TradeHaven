<?php 
    include('../templates/connect.php');
    
    //Create blank variables
    $name = $email = $password = $gender = $phone = "";

    $error_msg = "";
    if(isset($_POST['submit'])) {
        // if ($login_details[$username] === $username) {
        //     echo $error_msg = "Username already exists";
        // } else{
            if ($_POST['password'] === $_POST['confirm_password']) {
                // Store form data
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $confirm_password = $_POST['confirm_password'];
                $gender = $_POST['gender'];
                $phone = $_POST['phone'];
        
                // Write Insert Query
                $save_query = "INSERT INTO `trade_tb`(`name`, `email`, `password`, `gender`, `phone`) VALUES ('$name','$email','$password','$gender','$phone')";
        
                //Send query to server
                $send_save_query = mysqli_query($db_cont, $save_query);
        
                //Check if data is aved successfully
                if($send_save_query){
                    session_start();
                    $_SESSION['name']= $name;
                    header('Location: ../index.php');
                } else {
                    echo 'could not save' . mysqli_error($db_cont);
                }
        
                } else{
                    $error_msg = "password does not match";
                }
        // }
        
        
    }

?>

<head>
    <link rel="stylesheet" href="../assets/css/materialize.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+DE+Grund:wght@100..400&display=swap" rel="stylesheet">
    <style>
        *{
            color: white !important;
            font-family: "Playwitr+DE+Grund";
        }
        .row{
            height: 80%;
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
        div .center{
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
            <h1 class="center-align"><b>Signup with us at TechHaven</b></h1>
            <!-- <div class="container"> -->
                <p><?php echo $error_msg ?></p>
                <div class="row brown lighten-2">
                    <div class="slider col s6 left-align">
                        <ul class="slides">
                            <li><img src="../assets/img/ec-slider2.webp" alt="" class="sl-img" style="width: 100%; height: 100%; "></li>
                            <li><img src="../assets/img/ec-slider6.webp" alt="" class="sl-img" style="width: 100%; height: 100%; "></li>
                            <li><img src="../assets/img/ec-slider1.jpg" alt="" class="sl-img" style="width: 100%; height: 100%; "></li>
                            <li><img src="../assets/img/ec-slider5.webp" alt="" class="sl-img" style="width: 100%; height: 100%; "></li>
                            <!-- <li><img src="../assets/img/ec-slider" alt="" class="responsive-img"></li> -->
                        </ul>
                    </div>
                    <div class="col s6 right-align">
                        <div class="center"><img src="../assets/img/logo-black.png" alt="" class="responsive-img center-align" style="width: 40%; height: 40%;"></div>
                        <form action="signup.php" method="post" id="form">
                            <div class="col s12 input-field">
                                <i class="material-icons prefix">person</i>
                                <input type="text" name="name" id="name">
                                <label class="white-text" for="name">Enter your name</label>
                            </div>
                            <div class="col s12 input-field">
                                <i class="material-icons prefix">mail</i>
                                <input type="email" name="email" id="email">
                                <label class="white-text"  for="email">Enter your Email</label>
                            </div>
                            <div class="col s6 input-field">
                                <i class="material-icons prefix">lock</i>
                                <input type="password" name="password" id="password">
                                <label class="white-text" for="password">Password</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">lock</i>
                                <input type="password" name="confirm_password" id="confirm_password">
                                <label class="white-text" for="confirm_password">Confirm Password</label>
                            </div>
                            <div class="col s12 input-field">
                                <select name="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="rather_not_say">Rather not say</option>
                                </select>
                                <label class="white-text">Gender</label>
                            </div>
                            <div class="col s12 input-field">
                                <i class="material-icons prefix">phone</i>
                                <input type="text" name="phone" id="phone">
                                <label class="white-text" for="phone">Phone no</label>
                            </div>
                            <div class="center-align">
                                <input class="btn black" name="submit" type="submit" value="Sign-up">
                            </div>
                            <p class="center-align">Already have an account, <a href="login.php">log-in</a> here</p>
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
    $('select').formSelect();
    $('.slider').slider({
        indicators: false,
        height: 731,
    });
</script>