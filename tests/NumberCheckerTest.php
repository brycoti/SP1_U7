<?php

namespace Bryan\Nivel1;

use PHPUnit\Framework\TestCase;

final class NumberCheckerTest extends TestCase {

    public function testIsEven(): void {
        $checker1 = new NumberChecker(6);
        $checker2 = new NumberChecker(9);
        $checker3 = new NumberChecker(0);
        //0 se considera numero par porque dividido por 0 de devuelve 0
        $this->assertTrue($checker1->isEven());
        $this->assertFalse($checker2->isEven());
        $this->assertTrue($checker3->isEven());
    }

    public function testIsPositive(): void {
        $checker1 = new NumberChecker(10);
        $checker2 = new NumberChecker(-5);
        $checker3 = new NumberChecker(0);
        // 0 no se considera positivo
        $this->assertTrue($checker1->isPositive());
        $this->assertFalse($checker2->isPositive());
        $this->assertFalse($checker3->isPositive());
    }
}
?>