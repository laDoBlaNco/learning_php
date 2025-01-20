<?php

class Account   
{
    // In this example the $number will be an assoc array with account
    // and routing numbers
    public array $number;
    public string $type;
    protected float $balance;


    // our construct method will set our values based on the args
    // balance will have a default and be optional
    public function  __construct(array $number, string $type, float $balance=0.00)
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

// let's create the array for our class
$numbers = [
    'account_number' => 87654321,
    'routing_number' => 123456789,
];

$account = new Account($numbers, 'Savings', 10.00);
?>

<?php include 'includes/header.php'; ?>
<h2><?php echo $account->type; ?></h2>
Account <?php echo $account->number['account_number']; ?> <br>
Routing <?php echo $account->number['routing_number']; ?> 
<?php include 'includes/footer.php'; ?>