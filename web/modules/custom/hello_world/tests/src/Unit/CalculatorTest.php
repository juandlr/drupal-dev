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
    $calculator = new Calculator(10, 5);
    $this->assertEquals(15, $calculator->add());
    $calculator = new Calculator(10, 6);
    $this->assertEquals(16, $calculator->add());
  }

  /**
   * Tests the Calculator::subtract() method.
   */
  public function testSubtract() {
    $calculator = new Calculator(10, 5);
    $this->assertEquals(5, $calculator->subtract());
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
