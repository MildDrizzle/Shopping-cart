<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="cart_add.php" method="post">

    <?php
      session_start();
      $connection=mysqli_connect('localhost','root','w4m9srGQY6nHK8Dm','cart');
      if(!$connection)
      {
        echo mysqli_error($connection);
      }

      $query_for_displaying_books="SELECT * FROM books";
      $result_for_displaying_books=mysqli_query($connection,$query_for_displaying_books);
      while($row=mysqli_fetch_assoc($result_for_displaying_books))
      {
        ?>

        <label><?php echo $row['name'] ?></label><input type="submit" name="add" value="<?php echo $row['id'] ?>"><br>

      <?php
    }

if (isset($_SESSION['cart'])) {
  if ($_SESSION['cart']=="") {
    echo "The cart is Empty";
  }
  else {
    echo $_SESSION['cart'];
  }
}
else {
  $_SESSION['cart']="";
}


    ?>

 </form>
 <a href="cart.php">View My Cart</a>

  </body>
</html>
