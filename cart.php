<?php
session_start();
$connection=mysqli_connect('localhost','root','w4m9srGQY6nHK8Dm','cart');
if(!$connection)
{
  echo mysqli_error($connection);
}
$cart=explode(",",$_SESSION['cart']);
foreach ($cart as $key) {
  echo "$key";
  $query_for_displaying_book_title_and_price="SELECT * FROM books WHERE id='$key'";
  $result_for_displaying_books=mysqli_query($connection,$query_for_displaying_book_title_and_price);
  while($row=mysqli_fetch_assoc($result_for_displaying_books))
  {
    echo " ".$row['name'];
    echo " ".$row['price']."<br>";
  }
}
 ?>
