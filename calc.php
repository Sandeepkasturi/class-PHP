class Calculator {
  private $num1;
  private $num2;

  public function __construct($num1, $num2) {
    $this->num1 = $num1;
    $this->num2 = $num2;
  }

  public function add() {
    return $this->num1 + $this->num2;
  }

  public function subtract() {
    return $this->num1 - $this->num2;
  }

  public function multiply() {
    return $this->num1 * $this->num2;
  }

  public function divide() {
    if ($this->num2 == 0) {
      return "Error: Division by zero";
    }
    return $this->num1 / $this->num2;
  }
}

// Example usage:
$calc = new Calculator(2, 3);
echo "2 + 3 = " . $calc->add() . "<br>"; // Output: 2 + 3 = 5
echo "2 - 3 = " . $calc->subtract() . "<br>"; // Output: 2 - 3 = -1
echo "2 * 3 = " . $calc->multiply() . "<br>"; // Output: 2 * 3 = 6
echo "2 / 3 = " . $calc->divide() . "<br>"; // Output: 2 / 3 
