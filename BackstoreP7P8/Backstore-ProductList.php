
<!doctype html>
<html>

<head>
   <title>Backstore-ProductList</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="BackstoreStyle.css">
    <script src="https://kit.fontawesome.com/a10dc5d5d5.js" crossorigin="anonymous"></script>
    <link rel="icon" href="img/logo.png">
    <!-- BOOTSRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<div class="container-fluid">

<!-- Black User banner -->
<div class="userbanner"> 
    <img id="tiny-logo" src="img/logo.png"/>
    <ul>
        <li><a href="../Shopping%20Cart/ShoppingCart.html"><i class="fas fa-shopping-cart"></i></i> Shopping Cart</a></li>
        <li><a href="../SnackAisle/login.html"><i class="fas fa-user"></i> Login</a></li>
        <li><a href="../SignUp/signup.html"><i class="fas fa-user-plus"></i> Sign up</a></li>
        
    </ul>
</div>

<!-- Logo Banner -->
<div class = "img-banner"><p class="logo">UMM GROCERY</p></div>

<!-- Road Map Banner-->
<div class="page-header"> BACKSTORE &gt; PRODUCTS LIST</div>
<div class = "content">
<section class="main">

<!-- Side Menu-->
    <div class="sidemenu">
        <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="../index.html">Aisles</a></li>
            <li><a href="../BackstoreIndex.html">Backstore</a>
            <ul>
                <li><a class="active" href="Backstore-ProductList.html">Products List</a></li>
                <li><a href="../BackstoreUser/UserList.html">Users List</a></li>
                <li><a href="../Backstore_Order_List/Order_List.html">Orders List</a></li>
            </ul></li>
        </ul>
    </div>

    <!-- Main part-->

    <section class="Products-List"> 
        <div> <h1>Products</h1></div>
        <div class="product-btns">
            <div class="backstore-btns"><a href="Backstore-AddorEditProduct.html"><button type="button" class="button_box">Add Product</button></a></div> 
            <div class="backstore-btns"><a href="Backstore-AddorEditProduct.html"><button type="button" class="button_box">Edit Product</button></a></div>
           <div class="backstore-btns"><a href="Backstore-AddorEditProduct.html"><button type="button" class="button_box">Delete Product</button></a></div>
        </div>


        <table class="Products-table">  
                <?php
                include('MYDB.php'); /* MAYBE MYDB?*/
                
                $sqlget = "SELECT * FROM products"; /*NAME OF TABLE is products, add it in the command line instructions*/
                $sqldata = mysqli_query($dbcon,$sqlget) or die('error getting information');
                
                echo "<table>";
                echo "<tr> 
                    <th>Select</th>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Brand/Origin</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th> </th>
                    </tr>";

                while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
                    echo "<tr> <td>";
                    echo $row['productName'];
                    echo "</td><td>";
                    echo $row['brand'];
                    echo "</td><td>";
                    echo $row['price'];
                    echo "</td><td>";
                    echo $row['price'];
                    echo "</td><td>";
                    echo $row['priceQuantity'];
                    echo "</td><td>";
                    echo $row['description'];
                    echo "</td></tr>";
                }
                ?>

        </table>
    </section>

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
