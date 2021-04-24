

<!doctype html>
<html>

  <head>
    <title>Edit Order List</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <script src="https://kit.fontawesome.com/a10dc5d5d5.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="OrderStyle.css">
    <script src="order.js"></script>
  </head>

  <!--Container-->

  <body>
    <div class="container">
      <!--header-->
      <!-- Black User banner -->
      <div class="userbanner">
        <img id="tiny-logo" src="img/logo.png" />
        <ul>
          <li><a href="../Shopping%20Cart/ShoppingCart.html"><i class="fas fa-shopping-cart"></i> Shopping Cart</a></li>
          <li><a href="../SnackAisle/login.html"><i class="fas fa-user"></i> Login</a></li>
          <li><a href="../SignUp/signup.html"><i class="fas fa-user-plus"></i> Sign up</a></li>

        </ul>
      </div>

      <!-- Logo Banner -->
      <div class="img-banner">
        <p class="logo">UMM GROCERY</p>
      </div>

      <!-- Road Map Banner-->
      <div class="page-header"> ORDER LIST &gt; EDIT ORDER LIST</div>

      <section class="main">
        <div class="sidemenu">
          <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="../index.html">Aisles</a></li>
            <li><a href="../BackstoreIndex.html">Backstore</a>
              <ul class="insideside">
                <li><a href="../BackstoreP7P8/Backstore-ProductList.html">Products List</a></li>
                <li><a href="../BackstoreP9P10/UserList.html">Users List</a></li>
                <li><a href="../Backstore_Order_List/Order_List.php">Orders List</a>
                  <ul>
                    <li class="active"> Edit Order List</li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div>

        <!--content-->
        <section class="edit-order-list">
          <div class="list">
            <!--sections-->
            <div style="background-image: url('img/fruits.png'); background-size: cover;">
              <p class="section-name">Fruits</p>
              <div>
                <table>
                  <tbody>
                    <tr>
                      <td style="text-align: left;">Apples</td>
                      <td style="width: 164px;">$4.00 / 0.7kg</td>
                      <td style="width: 164px;">
                        <div class="quantity">
                          <input name="item1" type="number" id="item1" value="0" size="3" data-price=4.00 onclick="CalculateSubTotal()" onkeydown="CalculateSubTotal()" onchange="setAllCookies()" min="0" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: left;">Bananas</td>
                      <td style="width: 164px;">$2.60 per 3</td>
                      <td style="width: 164px;">
                        <div class="quantity">
                          <input name="item2" type="number" id="item2" value="0" size="3" data-price=2.60 onclick="CalculateSubTotal()" onkeydown="CalculateSubTotal()" onchange="setAllCookies()" min="0" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: left;">Peaches</td>
                      <td style="width: 164px;">$6.99 ea</td>
                      <td style="width: 164px;">
                        <div class="quantity">
                          <input name="item3" type="number" id="item3" value="0" size="3" data-price=6.99 onclick="CalculateSubTotal()" onkeydown="CalculateSubTotal()" onchange="setAllCookies()" min="0" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: left;">Strawberries</td>
                      <td style="width: 164px;">$6.00 ea</td>
                      <td style="width: 164px;">
                        <div class="quantity">
                          <input name="item4" type="number" id="item4" value="0" size="3" data-price=6.00 onclick="CalculateSubTotal()" onkeydown="CalculateSubTotal()" onchange="setAllCookies()" min="0" />
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div style="background-image: url('img/vegetables.png'); background-size: cover;">
              <p class="section-name">Vegetables</p>
              <div>
                <table>
                  <tbody>
                    <tr>
                      <td style="text-align: left;">Carrots</td>
                      <td style="width: 164px;">$2.99 ea</td>
                      <td style="width: 164px;">
                        <div class="quantity">
                          <input name="item5" type="number" id="item5" value="0" size="3" data-price=2.99 onclick="CalculateSubTotal()" onkeydown="CalculateSubTotal()" onchange="setAllCookies()" min="0" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: left;">Eggplant</td>
                      <td style="width: 164px;">$6.59/kg</td>
                      <td style="width: 164px;">
                        <div class="quantity">
                          <input name="item6" type="number" id="item6" value="0" size="3" data-price=6.59 onclick="CalculateSubTotal()" onkeydown="CalculateSubTotal()" onchange="setAllCookies()" min="0" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: left;">Tomatoes</td>
                      <td style="width: 164px;">$11.00/kg</td>
                      <td style="width: 164px;">
                        <div class="quantity">
                          <input name="item7" type="number" id="item7" value="0" size="3" data-price=11.00 onclick="CalculateSubTotal()" onkeydown="CalculateSubTotal()" onchange="setAllCookies()" min="0" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: left;">Zucchini</td>
                      <td style="width: 164px;">$5.93/kg</td>
                      <td style="width: 164px;">
                        <div class="quantity">
                          <input name="item8" type="number" id="item8" value="0" size="3" data-price=5.93 onclick="CalculateSubTotal()" onkeydown="CalculateSubTotal()" onchange="setAllCookies()" min="0" />
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div style="background-image: url('img/meats.png'); background-size: cover;">
              <p class="section-name">Meats</p>
              <div>
                <table>
                  <tbody>
                    <tr>
                      <td style="text-align: left;">Bacon</td>
                      <td style="width: 164px;">$8.99 ea</td>
                      <td style="width: 164px;">
                        <div class="quantity">
                          <input name="item9" type="number" id="item9" value="0" size="3" data-price=8.99 onclick="CalculateSubTotal()" onkeydown="CalculateSubTotal()" onchange="setAllCookies()" min="0" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: left;">Mergues sausages</td>
                      <td style="width: 164px;">$5.49 ea</td>
                      <td style="width: 164px;">
                        <div class="quantity">
                          <input name="item10" type="number" id="item10" value="0" size="3" data-price=5.49 onclick="CalculateSubTotal()" onkeydown="CalculateSubTotal()" onchange="setAllCookies()" min="0" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: left;">SPAM Luncheon Meat</td>
                      <td style="width: 164px;">$11.89 ea</td>
                      <td style="width: 164px;">
                        <div class="quantity">
                          <input name="item11" type="number" id="item11" value="0" size="3" data-price=11.89 onclick="CalculateSubTotal()" onkeydown="CalculateSubTotal()" onchange="setAllCookies()" min="0" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: left;">Beef Tenderloin Steak</td>
                      <td style="width: 164px;">$8.99 ea</td>
                      <td style="width: 164px;">
                        <div class="quantity">
                          <input name="item12" type="number" id="item12" value="0" size="3" data-price=8.99 onclick="CalculateSubTotal()" onkeydown="CalculateSubTotal()" onchange="setAllCookies()" min="0" />
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div style="background-image: url('img/seafoods.png'); background-size: cover;">
              <p class="section-name">Seafoods</p>
              <div>
                <table>
                  <tbody>
                    <tr>
                      <td style="text-align: left;">Salmon</td>
                      <td style="width: 164px;">$7.45 / unit</td>
                      <td style="width: 164px;">
                        <div class="quantity">
                          <input name="item13" type="number" id="item13" value="0" size="3" data-price=7.45 onclick="CalculateSubTotal()" onkeydown="CalculateSubTotal()" onchange="setAllCookies()" min="0" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: left;">Tuna</td>
                      <td style="width: 164px;">$21.10 / unit</td>
                      <td style="width: 164px;">
                        <div class="quantity">
                          <input name="item14" type="number" id="item14" value="0" size="3" data-price=21.10 onclick="CalculateSubTotal()" onkeydown="CalculateSubTotal()" onchange="setAllCookies()" min="0" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: left;">Shrimp</td>
                      <td style="width: 164px;">$7.14 / pack</td>
                      <td style="width: 164px;">
                        <div class="quantity">
                          <input name="item15" type="number" id="item15" value="0" size="3" data-price=7.14 onclick="CalculateSubTotal()" onkeydown="CalculateSubTotal()" onchange="setAllCookies()" min="0" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: left;">Crab</td>
                      <td style="width: 164px;">$8.99 / 450g</td>
                      <td style="width: 164px;">
                        <div class="quantity">
                          <input name="item16" type="number" id="item16" value="0" size="3" data-price=8.99 onclick="CalculateSubTotal()" onkeydown="CalculateSubTotal()" onchange="setAllCookies()" min="0" />
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div style="background-image: url('img/drinks.png'); background-size: cover;">
              <p class="section-name">Drinks</p>
              <div>
                <table>
                  <tbody>
                    <tr>
                      <td style="text-align: left;">Absolut Apeach</td>
                      <td style="width: 164px;">$30.25 ea</td>
                      <td style="width: 164px;">
                        <div class="quantity">
                          <input name="item17" type="number" id="item17" value="0" size="3" data-price=30.25 onclick="CalculateSubTotal()" onkeydown="CalculateSubTotal()" onchange="setAllCookies()" min="0" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: left;">Bacardi Superior White Rum</td>
                      <td style="width: 164px;">$28.95 ea</td>
                      <td style="width: 164px;">
                        <div class="quantity">
                          <input name="item18" type="number" id="item18" value="0" size="3" data-price=28.95 onclick="CalculateSubTotal()" onkeydown="CalculateSubTotal()" onchange="setAllCookies()" min="0" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: left;">Kopke Fine Ruby Port</td>
                      <td style="width: 164px;">$19.50 ea</td>
                      <td style="width: 164px;">
                        <div class="quantity">
                          <input name="item19" type="number" id="item19" value="0" size="3" data-price=19.50 onclick="CalculateSubTotal()" onkeydown="CalculateSubTotal()" onchange="setAllCookies()" min="0" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: left;">Moët & Chandon Brut Rosé Champagne</td>
                      <td style="width: 164px;">$100.25 ea</td>
                      <td style="width: 164px;">
                        <div class="quantity">
                          <input name="item20" type="number" id="item20" value="0" size="3" data-price=100.25 onclick="CalculateSubTotal()" onkeydown="CalculateSubTotal()" onchange="setAllCookies()" min="0" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: left;">Stella Artois</td>
                      <td style="width: 164px;">$3.50 ea</td>
                      <td style="width: 164px;">
                        <div class="quantity">
                          <input name="item21" type="number" id="item21" value="0" size="3" data-price=3.50 onclick="CalculateSubTotal()" onkeydown="CalculateSubTotal()" onchange="setAllCookies()" min="0" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: left;">Heineken</td>
                      <td style="width: 164px;">$3.25 ea</td>
                      <td style="width: 164px;">
                        <div class="quantity">
                          <input name="item22" type="number" id="item22" value="0" size="3" data-price=3.25 onclick="CalculateSubTotal()" onkeydown="CalculateSubTotal()" onchange="setAllCookies()" min="0" />
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div style="background-image: url('img/snacks.png'); background-size: cover;">
              <p class="section-name">Snacks</p>
              <div>
                <table>
                  <tbody>
                    <tr>
                      <td style="text-align: left;">Rippled Regular Chips</td>
                      <td style="width: 164px;">$2.29 ea</td>
                      <td style="width: 164px;">
                        <div class="quantity">
                          <input name="item23" type="number" id="item23" value="0" size="3" data-price=2.29 onclick="CalculateSubTotal()" onkeydown="CalculateSubTotal()" onchange="setAllCookies()" min="0" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: left;">Jalapeno Flavoured Chips, Miss Vickie's</td>
                      <td style="width: 164px;">$4.29 ea</td>
                      <td style="width: 164px;">
                        <div class="quantity">
                          <input name="item24" type="number" id="item24" value="0" size="3" data-price=4.29 onclick="CalculateSubTotal()" onkeydown="CalculateSubTotal()" onchange="setAllCookies()" min="0" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: left;">Mini butter cookies with real milk chocolate, Célébration</td>
                      <td style="width: 164px;">$3.00 ea</td>
                      <td style="width: 164px;">
                        <div class="quantity">
                          <input name="item25" type="number" id="item25" value="0" size="3" data-price=3.00 onclick="CalculateSubTotal()" onkeydown="CalculateSubTotal()" onchange="setAllCookies()" min="0" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: left;">Cheese flavoured puffs snacks</td>
                      <td style="width: 164px;">$3.99 ea</td>
                      <td style="width: 164px;">
                        <div class="quantity">
                          <input name="item26" type="number" id="item26" value="0" size="3" data-price=3.99 onclick="CalculateSubTotal()" onkeydown="CalculateSubTotal()" onchange="setAllCookies()" min="0" />
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!--total value-->
            <div>
              <table>
                <tbody>
                  <tr>
                    <td>subtotal</td>
                    <td>total</td>
                  </tr>
                  <tr>
                    <td id="subtotal"></td>
                    <td id="total"></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <!--button-->
            <div class="button_box">
              <div class="flex">
                <a onclick="save()" href="../Backstore_Order_List/Order_List.php"><button class="button">Save</button></a>
              </div>
            </div>
          </div>
        </section>
      </section>
      <!--footer-->
      <div class="footer">
        <ul>
          <li><a href="../index.html">Home</a></li>
          <li><a href="../index.html">Aisles</a></li>
          <li><a href="../SnackAisle/login.html"> Login</a></li>
          <li><a href="../SignUp/signup.html"> Sign up</a></li>
          <li><a href="../BackstoreIndex.html">Backstore</a></li>
        </ul>
      </div>
    </div>
  </body>
</html>
