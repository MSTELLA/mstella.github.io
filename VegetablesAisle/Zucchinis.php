
<!doctype html>
<html>

<head>
   <title>Zucchini</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a10dc5d5d5.js" crossorigin="anonymous"></script>
    <link rel="icon" href="img/logo.png">

   <script>
      function myFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("myBtn");

      if (dots.style.display === "none") {
         dots.style.display = "inline";
         btnText.innerHTML = "More Description";
         moreText.style.display = "none";
       } 
         else {
         dots.style.display = "none";
         btnText.innerHTML = "Less Description";
         moreText.style.display = "inline";}
      }
      
   function CalculateSubTotal() {
       var subtotal = 0;
       itemID = document.getElementById("qnt");
       subtotal = subtotal + itemID.value * itemID.getAttribute("data-price");
       document.getElementById("ItemsTotal").innerHTML = "Subtotal of Item: $" + subtotal.toFixed(2);
      }
      
      window.onload = function (){
        if (document.cookie.length != 0){
            var nameValueArray = document.cookie.split("=");
            document.getElementById("qnt").value = nameValueArray[1];
            CalculateSubTotal()
          }  
      }

    function setAllCookies(){
       var selectedQuantity = document.getElementById("qnt").value;
       document.cookie = "quantity=" + selectedQuantity +";expires= Fri, 31 Dec 2030 01:00:00 UTC;";
    }

</script>
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
<div class="page-header"> AISLES &gt; VEGETABLES &gt; ZUCCHINIS</div>
<div class = "content">
<section class="main">

<!-- Side Menu-->
    <div class="sidemenu">
        <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="../index.html">Aisles</a>
                <ul class = "insideside">
                    <li><a href="../FruitsAisle/GroceryFruitAisle.html">Fruits</a></li>
                    <li><a href="Vegetables-Aisle.html">Vegetables</a>
                        <ul class = "insideside">
                            <li><a href="Carrots.html">Carrots</a></li>
                            <li><a href="Eggplant.html">Eggplants</a>
                            <li><a href="Tomatoes.html">Tomatoes</a></li>
                            <li><a class="active" href="Zucchinis.html">Zucchinis</a></li>
                        </ul>
                    </li>
                    <li><a href="../MeatAisle/Meat_Aisle.html">Meat</a></li>
                    <li><a href="../DrinksAisle/DrinksAisle.html">Drinks</a></li>
                    <li><a href="../SnackAisle/snacks-aisle.html">Snacks</a></li>
                    <li><a href="../Aisles_Seafood/Seafood_Aisle.html">Seafood</a></li>
                    
                </ul>
            </li>
        </ul>
    </div>

    <!-- Main part-->
    <section class="product-grid">
         <div class="oneProduct"> 
            <div class="product-img"> <a href="#"><img src="img/ZUCCHINI.png" alt="Zucchini"/>  </a>  </div> 
         </div>
         
         <div class=" oneProduct">
           <!-- <div class="product-description"> 
            <span class="text-uppercase">Lufa Farms</span>
            <h3>Zucchini</h3>   
            <p class="price">$1.45 avg. each (245g avg.)</p>
            <p> $5.93/kg $2.69/lb.</p>
            <div class="d-flex flex-row"> -->
              <input name="qnt" type="number" id="qnt" value="0" size="3" data-price=1.45 onclick="CalculateSubTotal()" onkeydown="CalculateSubTotal()" onchange="setAllCookies()" min="0"/>
            </div>
            <div id="ItemsTotal">Subtotal of Item: $0.00</div>

            <?php
            include('MYDB.php');
            
            $sqlget = "SELECT * FROM products WHERE productName = 'zucchini'"; 
            $sqldata = mysqli_query($dbcon,$sqlget) or die('error getting information');
            
            echo "<div class='product-description'> ";
            echo "<span class='text-uppercase'>";
            echo  $row['brand'];
            echo"</span><h3>";
            echo $row['productName'];
            echo "</h3> <p class='price'>";
            echo $row['price'];
            echo "</p><p>";
            echo $row['priceQuantity'];

            ?> 

            </div>            
            <button type="button" class="button_box">Add to Cart</button>
            <br><button onclick="myFunction()" id="myBtn" class="button_box"> More Description </button>
            <div id="myDIV">
            <p><span id="dots">...</span><span id="more"> The zucchini is a green squash. It is best consumed cooked. It is perfect for ratatouille and other types of stews. </span></p>
          </div>
        </div>


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
