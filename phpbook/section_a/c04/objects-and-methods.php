<?php
// define the Account class and its properties
class Account 
{
    public int $number;
    public string $type;
    public float $balance;


    // add the deposit() method. The $amount param is the amount to add to
    // the balance

    public function deposit(float $amount): float
    {
        // The amount passed into the function is added to the value stored
        // in the $balance property (NOTE the use of $this->)
        $this->balance += $amount;
        // the new value stored in the balance property will be returned by our 
        // method
        return $this->balance;
    }
    // withdraw() does the same as deposit(), but subtracts the $amount
    public function withdraw(float $amount): float
    {
        $this->balance -= $amount;
        return $this->balance;
    }
}

// an object is created using the Account class and stored in a var
// call $account
$account = new Account();
// The balance propert of the object set to 100.00
$account->balance = 100.00;
$account->type = 'Savings';
$account->number = 12345678;
?>
<?php include 'includes/header.php'; ?>
<p>$<?php echo $account->deposit(50.00); ?></p>
<!-- Let's try to withdraw 75.00 now -->
 <p>$<?php echo $account->withdraw(75.00); ?></p>
<?php include 'includes/footer.php'; ?>
