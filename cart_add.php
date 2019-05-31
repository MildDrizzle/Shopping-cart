<?php
session_start();
if (isset($_POST['add'])) {
  if ($_SESSION['cart']=="") {
    $_SESSION['cart'].=$_POST['add'];
  }
  else {
    $_SESSION['cart'].=",".$_POST['add'];
  }
  echo "This is Post Value = ". $_POST['add'];
  echo "This is Session Value = ". $_SESSION['cart'];
  unset($_POST['add']);
  header("Location:../cart");
}
 ?>
