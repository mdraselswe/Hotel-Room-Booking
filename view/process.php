<?php

 $name =$_POST['name'];
 $pass =$_POST['pass'];

  if($name==("Rasel") & $pass ==("141")){
   session_register('name');
   session_register('pass');
   header("localhost:/view/admin-search-form.php");
}
   else echo 'something went wrong! Try Again.';





 ?>
