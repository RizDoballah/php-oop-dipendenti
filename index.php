<?php
  require_once 'classes/Employee.php';
  require_once 'classes/Manager.php';

  $employee = new Employee('', 4,'Johon','Doh', 'receptionist');

  var_dump($employee); die();


  try {
    $employee = new Employee('', 4,'Johon','Doh', 'receptionist');
      var_dump($employee);

  } catch (Exception $e) {
    echo "hai un errore:". $e->getMessage();
  }
 
