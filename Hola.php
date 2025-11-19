<?php
/**
 * Mini Proyecto PHP - Mensaje por Consola
 *
 * Este script muestra diferentes formas de imprimir
 * mensajes en la consola usando PHP
 */

// Mensaje simple
echo "¡Hola desde PHP!\n";

// Mensaje con variables
$nombre = "Usuario";
$fecha = date("d/m/Y H:i:s");

echo "\n";
echo "Bienvenido, $nombre\n";
echo "Fecha actual: $fecha\n";

// Mensaje con formato
echo "\n";
echo str_repeat("=", 40) . "\n";
echo "    SISTEMA DE MENSAJES PHP\n";
echo str_repeat("=", 40) . "\n";

// Colores en consola (compatible con terminales Linux/Mac)
echo "\n";
echo "\033[32m✓ Mensaje en verde (éxito)\033[0m\n";
echo "\033[33m⚠ Mensaje en amarillo (advertencia)\033[0m\n";
echo "\033[31m✗ Mensaje en rojo (error)\033[0m\n";

// Función personalizada para mensajes
function mostrarMensaje($texto, $tipo = "info") {
    $colores = [
        "info" => "\033[36m",    // Cyan
        "exito" => "\033[32m",   // Verde
        "error" => "\033[31m",   // Rojo
        "reset" => "\033[0m"     // Reset
    ];

    $color = isset($colores[$tipo]) ? $colores[$tipo] : $colores["info"];
    echo "\n{$color}[" . strtoupper($tipo) . "] $texto{$colores['reset']}\n";
}

// Usando la función
mostrarMensaje("El proyecto se ejecutó correctamente", "exito");
mostrarMensaje("Esta es una información importante", "info");
mostrarMensaje("Hubo un problema al procesar", "error");

echo "\n¡Proyecto finalizado!\n";
?>