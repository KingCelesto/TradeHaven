<?php 
include('./templates/connect.php');
include('./templates/header.php');

//Create blank variables
$name = $email = $password = $gender = $phone = "";

//Check if the submit btn has been pressed
if(isset($_POST['submit'])) {
  // Store form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['$gender'];
    $phone = $_POST['$phone'];

  // Write Insert Query
    $save_query = "INSERT INTO `trade_tb`(`name`, `email`, `password`, `gender`, `phone`) VALUES ('$name','$email','$password','$gender','$phone')";

  //Send query to server
    $send_save_query = mysqli_query($db_con, $save_query);

  //Check if data is aved successfully
    if($send_save_query){
        header('Location: index.php');
    } else {
        echo 'could not save' . mysqli_error($db_con);
    }

}

?>

<main>
    <div class="container">
        <center><img src="img/Logo.png" alt="" class="responsive-img center"></center>
        <div class="row grey darken-2">
            <form action="home.php" method="post" id="form">
                <div class="col s12 input-field">
                    <i class="material-icons prefix">person</i>
                    <input type="text" name="name" id="name">
                    <label for="name">Enter your name</label>
                </div>
                <div class="col s12 input-field">
                    <i class="material-icons prefix">mail</i>
                    <input type="email" name="email" id="email">
                    <label for="email">Enter your Email</label>
                </div>
                <div class="col s12 input-field">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" name="password" id="pass">
                    <label for="pass">Password</label>
                </div>
                <div class="col s12 input-field">
                    <i class="material-icons prefix">lock</i>
                    <input type="number" name="num" id="num">
                    <label for="num">Phone no</label>
                </div>
                <div class="center-align">
                    <input class="btn black" type="submit" value="Submit">
                </div>
                <p>Already have an account, <a href="login.php">sign-up</a>here</p>
            </form>    
        </div>
    </div>
</main>

<?php include('./templates/footer.php');?>