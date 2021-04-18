<!DOCTYPE html>
<html lang en>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ummm Grocery Edit User</title>
    <link rel="shortcut icon" type="image/png" href="img/logo.png">
    <script src="https://kit.fontawesome.com/a10dc5d5d5.js" crossorigin="anonymous"></script>
    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="backend.css">
</head>
<body>
<?php include(addUser.php) ?>
<div class="container-fluid">
    <!--black banner-->
    <div class="userbanner"> 
    <img id="tiny-logo" src="img/logo.png"/>
    <ul>
        <li><a href="../Shopping%20Cart/ShoppingCart.html"><i class="fas fa-shopping-cart"></i> Shopping Cart</a></li>
        <li><a href="../SnackAisle/login.html"><i class="fas fa-user"></i> Login</a></li>
        <li><a href="../SignUp/signup.html"><i class="fas fa-user-plus"></i> Sign up</a></li>
        
        </ul>
    </div>
    <!--header-->
    <div class = "img-banner"><p class="logo">UMM GROCERY</p></div>
    <!--title-->
    <div class="title">Profile Settings</div>
    <!--side menu-->
    <div class = "content">
    <section class="main">
    <div class="sidemenu">
        <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="../index.html">Aisles</a></li>
            <li><a href="../BackstoreIndex.html">Backstore</a>
                <ul>
                    <li><a href="../BackstoreP7P8/Backstore-ProductList.html">Product List</a></li>
                    <li><a class = "active" href="../BackstoreP9P10/UserList.html">User List</a></li>
                    <li><a href="../Backstore_Order_List/Order_List.html">Order List</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="size">
        <div class="row mt-2">
            <div class="col-md-6"><label class="labels">First Name</label><input name="fName" type="text" class="form-control" placeholder="first name" value=""></div>
            <div class="col-md-6"><label class="labels">Last Name</label><input name="lName" type="text" class="form-control" value="" placeholder="last name"></div>
            </div>
        <div class="row mt-3">
            <div class="col-md-12"><label class="labels">Email</label><input name="email" type="text" class="form-control" placeholder="enter email adress" value=""></div>
            <div class="col-md-12"><label class="labels">Phone Number</label><input name="phoneNum" type="text" class="form-control" placeholder="enter phone number" value=""></div>
            <div class="col-md-12"><label class="labels">Birthday</label><input name="bDay" type="text" class="form-control" placeholder="enter birthday in form DD/MM/YYYY" value=""></div>
            <div class="col-md-12"><label class="labels">Ummm Card Number</label><input name="card" type="text" class="form-control" placeholder="enter ummm card number" value=""></div>
        </div>
        <br>
        <input type="submit" value="Save">
    </div>
    </section>
    </div>
</div>
<!-- Footer -->
<div class="footer"> 
    <ul>
        <li><a href="../index.html">Home</a></li>
        <li><a href="../index.html">Aisles</a></li>
        <li><a href="../SnackAisle/login.html"> Login</a></li>
        <li><a href="../SignUp/signup.html"> Sign up</a></li>
        <li><a href="../BackstoreIndex.html">Backstore</a></li>
    </ul>
</div>

</body>
</html>