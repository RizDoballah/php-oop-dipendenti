<?php
  require_once 'Employee.php';
  require_once 'traits/Autorizzazione.php';

  class Manager extends Empolyee {

    use Autorizzazione;
    private $salary;
    private $benefits;
    private $duties;
  }

  function __construct($_autorizzazione, $_id, $_name, $_lastName, $_role, $_salary, $_benefits, $_duties)
  
  {

    parent::__construct($_autorizzazione, $_id, $_name, $lastName, $_role);

    setSalary($_salary);
    setBenefits($_benefits);
    setDuties($_duties);
    }

  function setSalary($_salary) {
    if (empty($_salary)) {
      throw new Exception('No salary');
    } else {
      $this->salary = $_salary;
    }
   }
   function getSalary() {
     return $this->salary;
   }
   function setBenefits($_benefits) {
     if (empty($_benefits)) {
       throw new Exception('No benefits');
     } else {
       $this->benefits = $_benefits;
     }
    }
  function getBenefits() {
    return $this->benefits;
  }
  function setDuties($_duties) {
    if (empty($_duties)) {
      throw new Exception('No duties');
    } else {
      $this->duties = $_duties;
    }
   }
  function getDuties() {
   return $this->duties;
  }
