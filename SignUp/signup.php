
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ummm Grocery | Sign Up </title>
   <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <script src="https://kit.fontawesome.com/a10dc5d5d5.js" crossorigin="anonymous"></script>
    <!-- BOOTSRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
    function myFunction() {
      document.getElementById("myForm").reset();
    }

    function myFunction() {
      var x = document.getElementById("myInput");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
    }
    </script>
</head>

<body>


<!---  Header  ------------------------------------>
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
<div class = "img-banner"><p class="logo">UMMM GROCERY</p></div>



<!---   MAIN SECTION   ------------------------------------>
<div class ="row mx-auto">
    <!-- SIDE MENU (from an aisle/aisle product) -->
    <div class="sidemenu column side">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Aisles</a>
            <ul>
	            <li><a href="../FruitsAisle/GroceryFruitAisle.html">Fruits</a></li>
	            <li><a href="../VegetablesAisle/Vegetables-Aisle.html">Vegetables</a></li>
		          <li><a href="../MeatAisle/Meat_Aisle.html">Meat</a></li>
	            <li><a href="../DrinksAisle/DrinksAisle.html">Drinks</a></li>
		          <li><a href="../SnackAisle/snacks-aisle.html">Snacks</a></li>
		          <li><a href="../Aisles_Seafood/Seafood_Aisle.html">Seafood</a></li>
            </ul>
          </li>
        </ul>
    </div>

    <!-- USER INFORNATION -->
    <div class="user_information column visual">
      <form action="submit_form.php" method="post">
        <h2> Sign Up for Ummm!</h2>
        <br>
          <fieldset>
            <legend><span class="section">1</span>Create User Account</legend>

              <label for="Id">ID</label>
              <input type ="text" name = "id"><br>

              <label for="pass">PASSWORD</label>
              <input type ="password" name = "password">

              <label for="confirm_pass">CONFIRM PASSWORD</label>
              <input type ="password" name = "confirmpassword" id="myInput">
              <input type="checkbox" onclick="myFunction()">Show Password

        </fieldset>
        <br>

        <fieldset>
          <legend><span class="section">2</span>Personal Information</legend>

        <label for="frame">TITLE</label>
        <br>
        <select id="title" name="title">
          <option value="select">Select your title</option>
          <option value="Mr">Mr.</option>
          <option value="Mrs">Mrs.</option>
          <option value="Miss">Miss</option>
          <option value="Ms">Ms.</option>
        </select><br>

        <label for="firstname">NAME</label>
        <input type ="text" name = "name">

        <label for="date">DATE OF BIRTH</label>
        <input type="date" name="birthday">

      </fieldset>
      <br>

      <fieldset>
        <legend><span class="section">3</span>Contact information</legend>

      <label for="address">ADRESS</label>
      <input type ="text" name = "address">

      <label for="postal">POSTAL CODE</label>
      <input type ="text" name = "postal"><br>
      
      <label for="email">EMAIL</label>
      <input type ="email" name = "email">

      <label for="mobile">MOBILE NUMBER</label>
      <input type ="text" name = "mobile" placeholder="000-000-0000">

    </fieldset>
    <br>

    <fieldset>
      <legend><span class="section">4</span>Membership</legend>

      <h3>Do you want to register a Ummm Rewards?</h3>
      Register for Ummm Rewards to earn points every time you buy online or make an in-store purchase.
      <br>
      <img src="img/pointcard.png" alt="Ummm_Membership Card"  class="pointcard">
      <br>
      <div>
      <input type="radio" name="membership" value="option1">Yes, I want one<br>
      <input type="radio" name="membership" value="option2">No<br>
      <br>
      </div>

    </fieldset>
    <br>

    <div class= "button">
     <input type="reset" onclick="myFunction()" class="reset" name="resetuserinfo">
     <input type="submit" class="submit" name ="submituserinfo"><br>
    </div>


    </form>
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
