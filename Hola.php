<?php
/**
 * Mini Proyecto PHP - Mensaje por Consola
 *
 * Este script muestra diferentes formas de imprimir
 * mensajes en la consola usando PHP
 */



// Función personalizada para mensajesaaaaaaaaaaaaaaaaaaaaa
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
mostrarMensaje("Hubo un problema al procesar", "errorsssssss");

echo "\n¡Proyecto finalizado!\n";
?>