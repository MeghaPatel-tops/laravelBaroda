<?php
  include('one.php');
  include('two.php');


  $obj = new Admin\Model();
  $obj->index();

  $userObj = new User\Model();
  $userObj->index();


?>