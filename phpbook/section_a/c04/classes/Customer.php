<?php
declare(strict_types=1);

class Customer
{
    public string $forename;
    public string $surname;
    public string $email;
    private string $password;
    // building on the class on p.157 This property will hold an array
    // objects, each object being a customer's account.
    public array $accounts;

    public function __construct(string $forename, string $surname, string $email,
        string $password, array $accounts)
    {
        $this->forename = $forename;
        $this->surname = $surname;
        $this->email = $email;
        $this->password = $password;
        $this->accounts = $accounts;
    }

    public function get_fullname()
    {
        return $this->forename . ' ' . $this->surname;
    }
}