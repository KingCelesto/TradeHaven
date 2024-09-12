<?php
    include('./templates/connect.php');
    include('./templates/header.php');
?>
<!-- <style>
        .row{
            width: 400px;
            border-radius: 20px;
        }
        img{
            width: 200px;
            margin-top: 40px;
        }
        #form{
            /* width: 350px; */
            padding: 110px;
        }
        .input-field input:focus {
            border-bottom: 1px solid #000000 !important;
            box-shadow: 0 1px 0 0 #000000 !important;
        }
        .input-field .prefix.active, label.active{
            color: #000000 !important;
        }
    </style> -->
<main>
    <div class="container">
        <center><img src="img/Logo.png" alt="" class="responsive-img center"></center>
        <div class="row grey darken-2">
            <form action="home.php" method="post" id="form">
                <div class="col s12 input-field">
                    <i class="material-icons prefix">mail</i>
                    <input type="email" name="email" id="email">
                    <label for="name">Enter your Email</label>
                </div>
                <div class="col s12 input-field">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" name="password" id="pass">
                    <label for="name">Password</label>
                </div>
                <div class="center-align">
                    <input class="btn black" type="submit" value="Submit">
                </div>
                <p>if you have <a href="home.php">logged-in</a>then continue</p>
            </form>    
        </div>
    </div>
</main>


<?php include('./templates/footer.php')?>