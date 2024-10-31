
  <?php

  class Person{
    public $fullname = false;
    public $givenname = false;
    public $familyname = false;
    public $room = false;

    function get_name(){
      if($this->fullname !== false) return $this->fullname;
      // note that var use in method doesn't have a $
      if($this->familyname !== false && $this->givenname !== false){
        return $this->givenname . ' ' . $this->familyname;
      }
      return false;
    }
  }

  $kevin = new Person();
  $kevin->fullname = 'Kevin Anthony Whiteside';
  $kevin->room = '4429NQ';

  $odalis = new Person();
  $odalis->familyname = 'Lorenzo';
  $odalis->givenname = 'Juana';
  $odalis->room = '3439NQ';

  print $kevin->get_name() . "<br>";
  print $odalis->get_name() . "<br>";

  // just a quick example using static vs dynamic or :: vs ->
  echo DateTime::RFC2822;


