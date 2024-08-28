<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
</head>
<body>
    

<?php


/*Write a PHP a class called "BankAccount" with properties like "accountNumber" and "balance",
 Implement methods to deposit and withdraw money from the account. */

class BankAccount {
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber) {
        $this->accountNumber = $accountNumber;
        $this->balance = 0;
    }

    public function getAccountNumber() {
        return $this->accountNumber;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
        echo "Deposited $amount $ into account $this->accountNumber. New balance: $this->balance $</br>";
    }

    public function withdraw($amount) {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            echo "Withdrawn $amount $ from account $this->accountNumber. New balance: $this->balance $</br>";
        }
        else
        { 
           echo "Want to withdrawn $amount $ ?</br>";
           echo "Your Balance is Insufficient in account $this->accountNumber. Current balance: $this->balance $</br>";
        }
    }
}

$account = new BankAccount("NBE-1352");
echo "Account Number: " . $account->getAccountNumber() . "</br>";
echo "Your Initial Balance: " . $account->getBalance(). "$" . "</br>";

$account->deposit(1000);
$account->withdraw(600);
$account->withdraw(700);

?>
</body>
</html>