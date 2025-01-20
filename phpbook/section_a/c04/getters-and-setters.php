<?php
declare(strict_types= 1);

class Account   
{
    public int $number;
    public string $type;
    // the balance property will be protected this time
    protected float $balance;


    // our construct method will set our values based on the args
    // balance will have a default and be optional
    public function  __construct(int $number, string $type, float $balance=0.00)
    {
        $this->number = $number;
        $this->type = $type;
        $this->balance = $balance;
    }

    // deposit and withdraw methods will update the value of $balance
    // Since the type is float, receiving an int won't cause an error
    // vice versa would
    public function deposit(float $amount): float
    {
        $this->balance += $amount;
        return $this->balance;
    }
    public function withdraw(float $amount): float
    {
        $this->balance -= $amount;
        return $this->balance;
    }

    // A getter called get_balance is added to get the value of the
    // protected member.
    public function get_balance(): float
    {
        return $this->balance;
    }
}

$account = new Account(20148896,'Savings',80.00);
?>

<?php include 'includes/header.php'; ?>
<h2><?php  echo $account->type ;?> Account</h2>
<p>Previous balance: $<?php echo $account->get_balance(); ?></p>
<p>New balance: $<?php echo $account->deposit(35.00) ;?></p>
<p>New balance: $<?php echo $account->withdraw(50.00) ;?></p>
