<?php
class Users {
  // Properties
  public $name;
  public $id;
 public $Emial;
public $phoneNumber;
public $password;

  // Methods
    function __construct($name) {
    $this->name = $name;
  }
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }

     function __construct($id) {
    $this->id = $id;
  }
  function set_id($id) {
    $this->id = $id;
  }
  function get_id() {
    return $this->id;
  }
    
        function __construct($Emial) {
    $this->Emial = $Emial;
  }
  function set_Emial($Emial) {
    $this->Emial = $Emial;
  }
  function get_Emial() {
    return $this->Emial;
  }
    
            function __construct($phoneNumber) {
    $this->phoneNumber = $phoneNumber;
  }
  function set_phoneNumber($phoneNumber) {
    $this->phoneNumber = $phoneNumber;
  }
  function get_phoneNumber() {
    return $this->phoneNumber;
  }
    
                function __construct($password) {
    $this->password = $password;
  }
  function set_password($password) {
    $this->password = $passwordr;
  }
  function get_password() {
    return $this->password;
  }
              public function PrintInfo() {
  echo "The name is {$this->name} and the id is {$this->id} The Emial is {$this->Emial} and the phoneNumber is {$this->phoneNumber}  .";  
  }
  
    
}

    class Admin extends Users {
 
          public function PrintInfo() {
  echo "The name is {$this->name} and the id is {$this->id} .";  
  }
  }
 class  Customr extends Users {
      public $Addres;
      public $CardType;
      public $CardNumber;
     
            function __construct($Addres) {
    $this->Addres = $Addres;
  }
  function set_Addres($Addresr) {
    $this->Addres = $Addres;
  }
  function get_Addres() {
    return $this->Addresr;
  }
                 function __construct($CardType) {
    $this->CardType = $CardType;
  }
  function set_CardType($CardType) {
    $this->CardType = $CardType;
  }
  function get_CardType() {
    return $this->CardType;
  }
                   function __construct($CardNumber) {
    $this->CardNumber = $CardNumber;
  }
  function set_CardNumber($CardNumber) {
    $this->CardNumber = $CardNumber;
  }
  function get_CardNumber() {
    return $this->CardNumber;
  }
 
 
          public function PrintInfo() {
  echo "The Adders is {$this->Addres} and the CardType is {$this->CardType} and the CardNumbe {$this->CardNumbe}.";  
  }
  }

class  Marchet extends Users {
         public function PrintInfo() {
  echo "The name is {$this->name} and the id is {$this->id} .";  
  }
}
class Products {
  public $name;
  public $id;
 public $Group;
  public $SubGroup;
     public $price;
     function __construct($name) {
    $this->name = $name;
  }
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }

     function __construct($id) {
    $this->id = $id;
  }
  function set_id($id) {
    $this->id = $id;
  }
  function get_id() {
    return $this->id;
  }
    
     function __construct($Group) {
    $this->Group= $Group;
  }
  function set_Group($Group) {
    $this->Group = $Group;
  }
  function get_Group() {
    return $this->Group;
  }
         function __construct($SubGroup) {
    $this->SubGroup= $SubGroup;
  }
  function set_Group($SubGroup) {
    $this->SubGroup= $SubGroup;
  }
  function get_SubGroup() {
    return $this->SubGroup;
  }
            function __construct($price) {
    $this->price= $price;
  }
  function set_price($price) {
    $this->price= $price;
  }
  function get_price() {
    return $this->price;
  }
    
            public function PrintInfo() {
  echo "The name is {$this->name} and the id is {$this->id} and the Group {$this->Group}  and the SubGroup {$this->SubGroup} and the price  {$this->price}.";  
  }  
 
}
class cart{
     public $nameOfProducts;
     public $id;
    public $price;
    public $total;
    
      function __construct($id) {
    $this->id = $id;
  }
  function set_id($id) {
    $this->id = $id;
  }
  function get_id() {
    return $this->id;
  }
      function __construct($nameOfProducts) {
    $this->nameOfProducts = $nameOfProducts;
  }
  function set_nameOfProducts($nameOfProducts) {
    $this->nameOfProducts = $nameOfProducts;
  }
  function get_nameOfProducts() {
    return $this->nameOfProducts;
  }
                function __construct($price) {
    $this->price= $price;
  }
  function set_price($price) {
    $this->price= $price;
  }
  function get_price() {
    return $this->price;
  }
                function __construct($total) {
    $this->total= $total;
  }
  function set_total($total) {
    $this->total= $total;
  }
  function get_total() {
    return $this->total;
  }
             public function PrintInfo() {
  echo "The nameOfProducts is {$this->nameOfProducts} and the id is {$this->id} and the price {$this->price}.and the total {$this->total} ";  
  }
    
    
}

class store{
  public $nameOfStore;  
    public $state;
    public $city;
    public $TypeOfstore;
    public $CompnyRigstr;
    public $NumberofBranches;
        function __construct($nameOfStore) {
    $this->nameOfStore= $nameOfStore;
  }
  function set_nameOfStore($nameOfStore) {
    $this->nameOfStore= $nameOfStore;
  }
  function get_nameOfStore() {
    return $this->nameOfStore;
  }
    
            function __construct($state) {
    $this->state= $state;
  }
  function set_state($state) {
    $this->state= $state;
  }
  function get_state() {
    return $this->state;
  }
               function __construct($city) {
    $this->city= $city;
  }
  function set_city($city) {
    $this->state= $state;
  }
  function get_city() {
    return $this->city;
  }
                   function __construct($CompnyRigstr) {
    $this->CompnyRigstr= $CompnyRigstr;
  }
  function set_CompnyRigstr($CompnyRigstr) {
    $this->CompnyRigstr= $CompnyRigstr;
  }
  function get_CompnyRigstry() {
    return $this->CompnyRigstr;
  }
                    function __construct($NumberofBranches) {
    $this->NumberofBranches= $NumberofBranches;
  }
  function set_NumberofBranches($NumberofBranches) {
    $this->NumberofBranches= $NumberofBranches;
  }
  function get_NumberofBranches() {
    return $this->NumberofBranches;
  }
      public function PrintInfo() {
  echo "The nameOfStore is {$this->nameOfStore} and the state is {$this->state} and the city {$this->city}.and the CompnyRigstr {$this->CompnyRigstr}and the state is {$this->state} ";  
  }
    
}
    
?>