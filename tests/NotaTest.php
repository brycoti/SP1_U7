<?php
namespace Bryan\Nivel1;

require 'src/notas.php';

use PHPUnit\Framework\TestCase;

final class NotaTest extends TestCase {
    public function testVerificarNota_PrimeraDivision() {
        $this->assertEquals("Primera división", verificarNota(60));
        $this->assertEquals("Primera división", verificarNota(71));
        $this->assertEquals("Primera división", verificarNota(84));
        $this->assertEquals("Primera división", verificarNota(100));
    }

    public function testVerificarNota_SegundaDivision() {
        $this->assertEquals("Segunda división", verificarNota(46));
        $this->assertEquals("Segunda división", verificarNota(50));
        $this->assertEquals("Segunda división", verificarNota(59));
    }

    public function testVerificarNota_TerceraDivision() {
        $this->assertEquals("Tercera división", verificarNota(33));
        $this->assertEquals("Tercera división", verificarNota(39));
        $this->assertEquals("Tercera división", verificarNota(44));
    }

    public function testVerificarNota_Suspenso(){
        $this->assertEquals("suspenso", verificarNota(25));
        $this->assertEquals("suspenso", verificarNota(2));
        $this->assertEquals("suspenso", verificarNota(0));
    }
}

?>