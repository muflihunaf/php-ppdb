<?php session_start();
session_destroy();

echo '<script language="javascript">alert("Anda berhasil Logout!");</script>';
  redirect(base_url());
 ?>
