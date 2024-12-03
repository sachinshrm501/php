<?php
class BankAccount
{
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber, $balance)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }
    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "$amount credit and new balance is $this->balance";
        } else {
            echo "invalid";
        }
    }

    public function withdraw($amount)
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "new amount is $this->balance";
        } else {
            echo "invalid";
        }
    }
    public function getBalance()
    {
        return $this->balance;
    }
}

$account = new BankAccount('1111111', 2000);
$account->deposit(500);
$account->withdraw(1000);
