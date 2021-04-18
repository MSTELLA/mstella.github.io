<!DOCTYPE html>
<html lang en>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ummm Grocery User List</title>
    <link rel="shortcut icon" type="image/png" href="img/logo.png">
    <script src="https://kit.fontawesome.com/a10dc5d5d5.js" crossorigin="anonymous"></script>
    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="backend.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
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
    <div class="title">BACKSTORE > USER LIST</div>
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
    <!--main list-->
    <div class="edbutton">
    <a href="../BackstoreP9P10/UserEdit.html">
        <button type="button" class="button_box">Add User</button>
    </a>
    <table border="border">
        <tr>
            <th colspan="6"> User Information</th>
            <th> Edit User Information</th>
        </tr>
        <tr>
            <th>
                Name</th>
            <th>
                Date Joined</th>
            <th>
                Email</th>
            <th>
                Phone Number</th>
            <th>
                Birthday</th>
            <th>
                Ummm Grocery Card</th>
            <th>
            </th>
        </tr>
        <?php //load xml file
        $file = simplexlm_load_file('users.xml');
        foreach($file->user as $row){
        ?>
        <tr>
            <td><?php echo $row->firstName; ?></td>
            <td><?php echo $row->lastName; ?></td>
            <td><?php echo $row->email; ?></td>
            <td><?php echo $row->phoneNumber; ?></td>
            <td><?php echo $row->birthday; ?></td>
            <td><?php echo $row->cardNumber; ?></td>
            <td><a href="UserEdit.html"><button style = "border:none; background: rgba(1, 1, 1, 0.0);" class="fa fa-cog  fa-lg" aria-hidden="true"></button></a> <br> <a href="#"><button style = "border:none; background: rgba(1, 1, 1, 0.0);" class="fa fa-window-close  fa-lg" aria-hidden="true"></button></a></td>
        </tr>
        <?php
        } 
        ?>
    </table>
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