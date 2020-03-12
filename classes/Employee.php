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
   function __construct($_aurorizzazione, $_id, $_name, $_lastName, $_role)
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

    function setId($_id) {
     if (empty($_id)) {
       throw new Exception('No id');
     } else {
       $this->id = $_id;
     }
    }
   function getId() {
    return $this->id;
  }
   function setName($_name) {
    if (empty($_name)) {
      throw new Exception('No name');
    } else {
      $this->name = $_name;
    }
  }
   function getName() {
     return $this->name;
   }
   function setLastName($_lastName) {
     if (empty($_lastName)) {
       throw new Exception('No last name');
     } else {
       $this->lastName = $_lastName;
     }
   }
  function getlastName() {
    return $this->lastName;
  }
  function setRole($_role) {
    if (empty($_role)) {
      throw new Exception('No role');
    } else {
      $this->role= $_role;
    }
  }
  function getRole() {
    return $this->role;
  }
  function setCf($_cf) {
    if (empty($_cf)) {
      throw new Exception('No codice fiscale');
    } else {
      $this->cf = $_cf;
    }
  }
  function getCf() {
    return $this->cf;
  }
  function setEmail($_cf) {
    if (empty($_email)) {
      throw new Exception('No email');
    } else {
      $this->email= $_email;
    }
  }
  function getEmail() {
    return $this->email;
  }
  function setPhone($_phone) {
    if (empty($_phone)) {
      throw new Exception('No phone');
    } else {
      $this->phone = $_phone;
    }
  }
  function getPhone() {
    return $this->ohone;
  }
  function setAddress($_address) {
    if (empty($_address)) {
      throw new Exception('No address');
    } else {
      $this->address = $_address;
    }
  }
  function getAddress() {
    return $this->address;
  }
