<?php

namespace Drupal\Tests\hello_world\Unit;

use Drupal\Tests\UnitTestCase;
use Drupal\hello_world\Calculator;

/**
 * Tests the Calculator class methods.
 *
 * @group hello_world
 */
class CalculatorTest extends UnitTestCase {

  /**
   * @var \Drupal\hello_world\Calculator
   */
  protected $calculatorOne;
  /**
   * @var \Drupal\hello_world\Calculator
   */
  protected $calculatorTwo;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();
    $this->calculatorOne = new Calculator(10, 5);
    $this->calculatorTwo = new Calculator(10, 2);
  }

  /**
   * Tests the Calculator::add() method.
   */
  public function testAdd() {
    $this->assertEquals(15, $this->calculatorOne->add());
    $this->assertEquals(16, $this->calculatorTwo->add());
  }

  /**
   * Tests the Calculator::subtract() method.
   */
  public function testSubtract() {
    $this->assertEquals(5, $this->calculatorOne->subtract());
  }

  /**
   * Tests the Calculator::multiply() method.
   */
  public function testMultiply() {
    $calculator = new Calculator(10, 5);
    $this->assertEquals(50, $calculator->multiply());
  }

  /**
   * Tests the Calculator::divide() method.
   */
  public function testDivide() {
    $calculator = new Calculator(10, 5);
    $this->assertEquals(2, $calculator->divide());
  }

}
