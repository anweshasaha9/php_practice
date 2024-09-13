<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP Task:2-4</title>
</head>
<body>
  <?php

  // Traits
  trait transactionMethod {
    // Depositing money to increase balance
    public function depositMoney($amount) {
      if ($amount > 0) {
        $this->balance += $amount;
        return true;
      } else {
        echo "Please deposit correct amount.";
        return false;
      }
    }

    // Withdrawing money to decrease balance
    public function withdrawMoney($amount) {
      if ($amount > 0) {
        if ($this->balance >= $amount) {
          $this->balance -= $amount;
          return true;
        } else {
          echo "Insufficient balance.";
          return false;
        }
      } else {
        echo "Please withdraw correct amount.";
        return false;
      }
    }
  }
  // Interface
    interface account {
      public function getBalance();
    }

    class bankAccount implements account {
      use transactionMethod;
      protected $balance;

      // Initializing Balance
      public function __construct($initialBalance = 0) {
        $this->balance = $initialBalance;
      }

      // Getting Balance
      public function getBalance() {
          return $this->balance;
      }
    }

    // Inheritance
    class savingsAccount extends bankAccount {
      private $interestRate;

      // Initializing interest rate
      public function __construct ($initialBalance = 0, $interestRate = 0.01) {
        parent::__construct ($initialBalance);
        $this->interestRate = $interestRate;
      }

      // Method to add interest
      public function addInterest() {
        $interest = $this->balance * $this->interestRate;
        $this->depositMoney($interest);
      }
    }

    // Sample script for savingsAccount
    $savingsAmount = new savingsAccount(200, 0.05);
    echo "Initial Balance: " . $savingsAmount->getBalance() . "\n";
    // Depositing amount
    $savingsAmount->depositMoney(100);
    echo "Balance after deposit: " . $savingsAmount->getBalance() . "\n";
    // Adding interest rate
    $savingsAmount->addInterest();
    echo "Balance after adding interest: " . $savingsAmount->getBalance() . "\n";
  ?>
</body>
</html>
