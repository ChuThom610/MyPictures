<?php
// kết nối csdl
$dbc=mysqli_connect('localhost','root','','thietkeweb'); //or die ('Không thể kết nối đến database');
if (!$dbc)
  {
  echo "Kết nối không thành công";
  }
else
{
    mysqli_set_charset($dbc,'utf8');
}
?>