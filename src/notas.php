<?php

namespace Bryan\Nivel1;

// use InvalidArgumentException;


// Ejercicio 5
echo "<h2>Ejercicio 5</h2>";
?>

<form   method="post" action="">
    <label for="nota">Introduzca la nota del estudiente entre 0 y 100:</label>
    <input type="text" name="nota" id="nota"><br><br>
    <button type="submit" name="enviar">Enviar notas</button>
</form>

<?php
if (isset($_POST['enviar'])) {
    $nota = $_POST['nota'];
  echo  "La nota es de $nota, así que tu categoria es " . verificarNota($nota);
 }


function verificarNota($nota) {
    if ($nota >= 60 &&  $nota <= 100) {
            $resultado = "Primera división";
        } elseif ($nota >= 45) {
            $resultado = "Segunda división";
        } elseif ($nota >= 33) {
            $resultado = "Tercera división";
        } else {
            $resultado = "suspenso";
        }

        return $resultado;
}
?>