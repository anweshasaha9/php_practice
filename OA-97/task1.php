<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP Task:1</title>
</head>
<body>
  <?php
    class bankAccount {
      private $balance;

      // Initial balance is set
      public function __construct($initialBalance = 0) {
        $this->balance = $initialBalance;
      }

      // Getting current balance
      public function getBalance() {
          return $this->balance;
      }

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

    // Sample Amount
    // Initial amount
    $amount = new BankAccount(100);
    echo "Initial Balance: " . $account->getBalance() . "<br>";
    // Deposit amount
    $amount->depositMoney(50);
    echo "Amount after deposit: " . $amount->getBalance() . "<br>";
    // Withdraw amount
    $amount->withdrawMoney(30);
    echo "Amount after withdraw: " . $amount->getBalance() . "<br>";
    // Insufficient amount withdraw for error
    $amount->withdrawMoney(200);
    echo "Amount after withdraw: " . $amount->getBalance() . "<br>";
  ?>
</body>
</html>
