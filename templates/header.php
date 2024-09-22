<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradeHaven</title>
    <link rel="stylesheet" href="./assets/css/materialize.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        /* Nav coloring & alignment */
        #nav-align{
            margin-top: -30px;
        }
        /* .nav_col{
            background-color: red;
        } */


        /* Change color of search bar on focus */
        .input:not([type]), input[type=text]:not(.browser-default), input[type=password]:not(.browser-default), input[type=email]:not(.browser-default), input[type=url]:not(.browser-default), input[type=time]:not(.browser-default), input[type=date]:not(.browser-default), input[type=datetime]:not(.browser-default), input[type=datetime-local]:not(.browser-default), input[type=tel]:not(.browser-default), input[type=number]:not(.browser-default), input[type=search]:not(.browser-default), textarea.materialize-textarea {
            background-color: white;
            border: 1px solid black !important;
            border-radius: 10px !important; 
            box-shadow: 0 1px 0 0 black !important;
        }
        .input-field .prefix.active, label.active{
            color: black !important;
        }


        /* For the done button on the help */
        .modal .modal-close{
            color: goldenrod;
        }


        /* Sticky footer */
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
        main {
            flex: 1 0 auto;
        }



        .bold-text{
            font-weight: bold;
        }

        /* changing color of input fields on forms when focused */
        .input-field input:focus{
            border-bottom: 1px solid #4a148c !important;
            box-shadow: 0 1px 0 0 #4a148c !important;
        }
        .input-field .prefix.active, label.active{
            color: #4a148c !important;
        }
        span.red-text.text-darken-4::after{
            background-color: #4a148c;
            border: none;
        }
        .dropdown-content li > a, .dropdown-content li > span{
            color: #4a148c !important;
        }
        .select-wrapper input.select-dropdown{
            color: #4a148c !important;
        }
    </style>
</head>
<body>
    <header>
        <!-- Navbar -->
        <div class="navbar-fixed">
            <nav class="nav_col green darken-2">
                <div class="container center-on-small-only">
                    <div class="row valign-wrapper" id="nav-align">
                        <a href="#sidenav" class="sidenav-trigger right">
                            <i class="material-icons black-text left">menu</i>
                        </a>
                        <div class="col s8 l2 left">
                            <img src="./assets/img/logo.png" alt="" class="responsive-img left" style="max-width: 120px;">
                        </div>
                        <div class="col l7 hide-on-small-and-down black-text" id="log">
                            <input type="search" name="search-bar" placeholder="Search products and, brands and categories" id="search">
                        </div>
                        <div class="col l3 hide-on-small-and-down">
                            <ul class="right">
                                <li><a href="./auth/login.php" class="right">
                                    <span class="black-text">Account</span>
                                </a></li>
                                <li><a href="#help" class="right modal-trigger">
                                    <span class="black-text">Help</span>
                                </a></li>
                                <li><a href="settings.php" class="right">
                                    <span class="black-text">Settings</span>
                                </a></li>
                                <li><a href="cart.php" class="right">
                                    <span class="black-text">Cart</span>
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Alert for help -->
        <div class="modal" id="help">
            <div class="modal-content">
                <h4>Guide through the page</h4>
                <p>I can't really help right now</p>
                <div class="modal-footer"><a href="#!" class="modal-close">Done</a></div>
            </div>
        </div>
    </header>
        <!-- Sidenav for mobile view -->
    <ul class="grey sidenav" id="sidenav">
        <li><a href="index.html" class="right">
        <span>Account</span>
        </a></li>
        <li><a href="index.html" class="right">
        <span>Help</span>
        </a></li>
        <li><a href="index.html" class="right">
        <span>Settings</span>
        </a></li>
        <li><a href="index.html" class="right">
        <span>Cart</span>
        </a></li>
    </ul>