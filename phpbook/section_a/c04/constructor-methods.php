<?php
// we first enable strict_types. This must be the first thing on the
// script
declare(strict_types=1);

// then we define the class and its props
class Account   
{
    public int $number;
    public string $type;
    public float $balance;


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
}

class HighAccount
{
    // using the new php 8 syntax and putting the visiblity right in the
    // param list instead of initializing all the vars first outside as
    // we did above.
    public function __construct(
        public int $number, 
        public string $type, 
        public float $balance=0.00, 
        public float $interest = 0.10,
        )
    {
        $this->number = $number;
        $this->type = $type;
        $this->balance = $balance;
        $this->interest = $interest;
    }
    // my stupid model will just be adding interest on deposits
    // and charging interest on withdrawals
    public function deposit(float $amount): float
    {
        $this->balance += $amount + $amount * $this->interest;
        return $this->balance;
    }
    public function withdraw(float $amount): float
    {
        $this->balance -= $amount + $amount * ($this->interest*2);
        return $this->balance;
    }
}

// now we create our two instances of this class
$checking = new Account(43161176, 'Checking', 32.00);
$savings = new Account(20148896, 'Savings', 756.00);
$hi_savings = new HighAccount(98754321,'High Interest Savings',15000.00,0.15);
?>

<?php include 'includes/header.php'; ?>
<h2>Account Balances</h2>
<table>
    <!-- Table headers  for our account balances view -->
    <tr>
        <th>Date</th>
        <th><?php echo $checking->type; ?></th>
        <th><?php echo $savings->type; ?></th>
        <th><?php echo $hi_savings->type; ?></th>
    </tr>
    <tr>
        <td>23 June</td>
        <!-- tables rows of bank balances -->
        <td>$<?php echo $checking->balance; ?></td>
        <td>$<?php echo $savings->balance; ?></td>
        <td>$<?php echo $savings->balance; ?></td>
    </tr>
    <tr>
        <td>24 June</td>
        <!-- here a deposit and withdraw -->
        <td>$<?php echo $checking->deposit(12.00); ?></td>
        <td>$<?php echo $savings->withdraw(100.00); ?></td>
        <td>$<?php echo $hi_savings->withdraw(100.00); ?></td>
    </tr>
    <tr>
        <td>25 June</td>
        <!-- Here a withdraw and a deposit -->
        <td>$<?php echo $checking->withdraw(5.00); ?></td>
        <td>$<?php echo $savings->deposit(300.00); ?></td>
        <td>$<?php echo $hi_savings->deposit(300.00); ?></td>
    </tr>
</table>
<?php include 'includes/footer.php'; ?>