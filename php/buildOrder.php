<!DOCTYPE html>
<html>

<head>
  <title>Build Your Order</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Roboto:wght@700,500,300&display=swap" rel="stylesheet">
  <link href="../css/nav-bar.css" rel="stylesheet">
  <link href="../css/general.css" rel="stylesheet">
  <link href="../css/build-order.css" rel="stylesheet">
</head>

<body>
  <!-- Navigation Bar-->
  <div class="nav-bar-container nav-bar-container-order">

    <div class="nav-sign-in">
      <img class="img-chipotle" src="../imgs/chipotle-logo.svg">
      <img class="img-user-icon" src="../imgs/user-outline.svg">
      <div>SIGN IN</div>
      <h3><a href="./index.html">RETURN TO MENU</a></h3>
    </div>

    <div class="nav-order-icon">
      <a href="#" class="find-a-chipotle">
        <img class="chipotle-pepper" src="../imgs/chipotle-pepper.svg">
        <div>| FIND A CHIPOTLE</div>
      </a>
      <img class="bag-icon" src="../imgs/bag.svg">
    </div>
  </div>
  <!-- End Navigation Bar-->

  <?php
  require_once(__DIR__ . '/orders/OrderSingleton.php');
  require_once(__DIR__ . '/orders/OrderFactory.php');
  require_once(__DIR__ . '/orders/OrderOptions.php');

  $orderType = $_GET['orderType'];
  $orderData = OrderFactory::createOrder($orderType);

  // $orderSingleton = OrderSingleton::getInstance();
  

  // Start Menu Item Description Section
  echo "<div class='order-build-description'>";
  echo    "<img src='../imgs/" . strtolower($orderData->getName()) . ".png'>";
  echo    "<div class='order-build-details'>";
  echo        "<h4>BUILD YOUR</h4>";
  echo        "<h1>{$orderData->getName()}</h1>";
  echo        "<p>{$orderData->getDescription()}</p>";
  echo    "</div>";
  echo "</div>";
  // End Menu Item Description Section

  // Start Options Selection
  $options = $orderData->getOptions();
  foreach ($options as $header => $choices) {
    echo "<div>";
    echo "    <div class='food-selection'>";
    echo "      <div class='item-grid'>";
    echo "          <div class='item-grid-titles'>";
    echo "              <h1>{$header}</h1>";
    echo "          </div>";
    foreach ($choices as $choice) {
      echo "          <div class='item'>";
      echo "              <img src='../imgs/". OrderOptions::getOptionImgName($choice) . ".png'>";
      echo "              <div class='item-details'>";
      echo "                  <p class='item-name'>{$choice}</p>";
      echo "                  <p class='item-price'>\$" . OrderOptions::getOptionPrice($choice) . "<span>" .  OrderOptions::getOptionCalories($choice) . "cal</span></p>";
      echo "              </div>";
      echo "          </div>";
    }
    echo "      </div>";
    echo "</div>";
  }

  ?>

      <!--Start footer selection-->
      <div class="order-footer">
        <div class="user-meal-selection">
            <h4>YOUR MEAL</h4>
            <p>Chicken Burrito</p>
        </div>

        <div class="add-to-bag">
            <button>Add to Bag</button> <!-- This is where we add the order to the global scope. $orderSingleton->addOrder($orderData); -->
        </div>
    </div>
    <!--End footer selection-->

</body>

</html>

<!-- // The Order Types that use name, description, and price are: 
  // * Burrito
  // * Burrito bowl
  // * Quesadilla
  // * Salad
  // * Tacos (need to include section for quantity)
  // * Sides and Drinks.
  // Need to create if statement for Tacos, LifeStyle Bowl and Kids meal. -->