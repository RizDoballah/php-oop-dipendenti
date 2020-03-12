<?php
  require_once 'Employee.php';
  require_once 'traits/Autorizzazione.php';

  class Manager extends Empolyee {

    use Autorizzazione;
    private $salary;
    private $benefits;
    private $duties;
  }

  public function __construct($_autorizzazione, $_name, $_lastName, $_role, $_salary, $_benefits, $_duties)
  {

  parent::__construct($_salary, $_benefits, $_duties);
  setSalary($_salary);
  setBenefits($_benefits);
  setDuties($_duties);
  }

  public function setSalary($_salary) {
    if (empty($_salary)) {
      throw new Exception('No salary');
    } else {
      $this->salary = $_salary;
    }
   }
   public function getSalary() {
     return $this->salary;
   }
   public function setBenefits($_benefits) {
     if (empty($_benefits)) {
       throw new Exception('No benefits');
     } else {
       $this->benefits = $_benefits;
     }
    }
  public function getBenefits() {
    return $this->benefits;
  }
  public function setDuties($_duties) {
    if (empty($_duties)) {
      throw new Exception('No duties');
    } else {
      $this->duties = $_duties;
    }
   }
  public function getDuties() {
   return $this->duties;
  }
