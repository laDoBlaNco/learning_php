<?php
// 1. the custoemr class and its properties are defined
class Customer
{
  public string $forename;
  public string $surname;
  public string $email;
  public string $password;

}

// The account class and its properties are defined
class Account 
{
  public int $number;
  public string $type;
  public float $balance;
}

//////////////////////////////////////////////////////////////
// 3. An instance of the Customer class is created and stored in the
// $customer var
$customer = new Customer();
// 4. An instance of the account class is created and that object is 
// stored in the $account var
$account = new Account();
// 5. The emaill property of the customer is given
$customer->email = 'ivy@eg.link';
// 6. The balance property of the Account object is given a value
$account->balance = 1000.00; // Note how we don't use '$' when using the propety
// or method names. 

// Setting the missing properties
$customer->forename = 'Ivy';
$customer->surname = 'Stone';
$customer->password = 'password';
$account->type = 'Savings';
$account->number = 123456789;
?>

<!-- An include  file adds a header to the page -->
 <?php include 'includes/header.php'; ?>
 <!-- 8. The two properties that have been set are displayed -->
 <p>Name: <?php echo $customer->forename,' ',$customer->surname; ?></p>
 <p>Email: <?php echo $customer->email; ?></p>
 <p>Balance: <?php echo $account->balance; ?></p>
 <!-- 9. An include file adds the HTML tags needed to close the page -->

 <!-- Now  Try setting the other items and displaying name
  before the email address -->