<?php
declare(strict_types= 1);

class Account
{
    public AccountNumber $number;
    public string $type;
    protected float $balance;

    public function __construct(AccountNumber $numbers, string $type, float $balance=0.00)
    {
        $this->number = $numbers;
        $this->type = $type;
        $this->balance = $balance;
    }

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
        $this->routing_number = $routing_number;
    }
}