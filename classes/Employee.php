<?php
  require_once 'traits/Autorizzazione.php';

  class Employee {

    use Autorizzazione;
    protected $id;
    protected $name;
    protected $lastName;
    protected $role;
    protected $cf;
    protected $email;
    protected $phone;
    protected $address;
  }
   public function __construct($_aurorizzazione, $_id, $_name, $_lastName, $_role)
   {
     if(!empty($_autorizzazione)) {
       $this->getAutorizzazione($_autorizzazione);
     }
     if($this->autorizzato==false) {
       throw new Exception('non hai l\'autorizzazione');
     }
     setId($_id);
     setName($_name);
     setLastName($_lastName);
     setRole($_role);
   }

   public function setId($_id) {
     if (empty($_id)) {
       throw new Exception('No id');
     } else {
       $this->id = $_id;
     }
    }
  public function getId() {
    return $this->id;
  }
  public function setName($_name) {
    if (empty($_name)) {
      throw new Exception('No name');
    } else {
      $this->name = $_name;
    }
  }
   public function getName() {
     return $this->name;
   }
   public function setLastName($_lastName) {
     if (empty($_lastName)) {
       throw new Exception('No last name');
     } else {
       $this->lastName = $_lastName;
     }
   }
  public function getlastName() {
    return $this->lastName;
  }
  public function setRole($_role) {
    if (empty($_role)) {
      throw new Exception('No role');
    } else {
      $this->role= $_role;
    }
  }
  public function getRole() {
    return $this->role;
  }
  public function setCf($_cf) {
    if (empty($_cf)) {
      throw new Exception('No codice fiscale');
    } else {
      $this->cf = $_cf;
    }
  }
  public function getCf() {
    return $this->cf;
  }
  public function setEmail($_cf) {
    if (empty($_email)) {
      throw new Exception('No email');
    } else {
      $this->email= $_email;
    }
  }
  public function getEmail() {
    return $this->email;
  }
  public function setPhone($_phone) {
    if (empty($_phone)) {
      throw new Exception('No phone');
    } else {
      $this->phone = $_phone;
    }
  }
  public function getPhone() {
    return $this->ohone;
  }
  public function setAddress($_address) {
    if (empty($_address)) {
      throw new Exception('No address');
    } else {
      $this->address = $_address;
    }
  }
  public function getAddress() {
    return $this->address;
  }
