<?php
declare(strict_types=1);

class Account
{
    public AccountNumber $numbers;
    public string $type;
    protected float $balance;

    public function __construct(AccountNumber $numbers, string $type, float $balance = 0.00)
    {
        $this->number = $numbers;
        $this->type = $type;
        $this->balance = $balance;
    }

    public function deposit(float $amount):float
    {
        $this->balance += $amount;
        return $this->balance;
    }

    public function widthdraw(float $amount): float
    {
        $this->balance -= $amount;
        return $this->balance;
    }

    public function get_balance(): float
    {
        return $this->balance;
    }
}


class AccountNumber
{
    public int $account_number;
    public int $routing_number;

    public function __construct(int $account_number, int $routing_number)
    {
        $this->account_number = $account_number;
        $this->routing_number =  $routing_number;
    }
}

$numbers = new AccountNumber(12345678,987654321);
$account = new Account($numbers,'Savings',10.00);
?>

<?php include 'includes/header.php' ?>

<h2><?php echo $account->type; ?> Account</h2>
Account <?php echo $account->number->account_number; ?> <br><br>
Routing <?php echo $account->number->routing_number; ?>
<?php include 'includes/footer.php'; ?>



