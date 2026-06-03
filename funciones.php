<?php

/**
 * Obtiene publicaciones desde una API REST externa.
 *
 * Esta función utiliza file_get_contents() para realizar una petición
 * HTTP GET a la API pública JSONPlaceholder. Después convierte la
 * respuesta JSON en un array asociativo de PHP.
 *
 * @param int $limite Número máximo de publicaciones que se quieren obtener.
 * @return array Lista de publicaciones obtenidas desde la API externa.
 */
function obtenerPublicaciones($limite = 8)
{
    $url = "https://jsonplaceholder.typicode.com/posts?_limit=" . $limite;

    $respuesta = file_get_contents($url);

    if ($respuesta === false) {
        return [];
    }

    $datos = json_decode($respuesta, true);

    if (!is_array($datos)) {
        return [];
    }

    return $datos;
}

/**
 * Limpia un texto para mostrarlo de forma segura en HTML.
 *
 * Esta función evita que se impriman caracteres peligrosos en la página,
 * convirtiendo caracteres especiales en entidades HTML.
 *
 * @param string $texto Texto que se quiere limpiar.
 * @return string Texto preparado para mostrarse en HTML.
 */
function limpiarTexto($texto)
{
    return htmlspecialchars($texto, ENT_QUOTES, 'UTF-8');
}

/**
 * Recorta un texto a una longitud máxima.
 *
 * Si el texto supera la longitud indicada, se corta y se añaden puntos
 * suspensivos al final.
 *
 * @param string $texto Texto original.
 * @param int $longitud Longitud máxima permitida.
 * @return string Texto recortado.
 */
function recortarTexto($texto, $longitud = 120)
{
    if (strlen($texto) <= $longitud) {
        return $texto;
    }

    return substr($texto, 0, $longitud) . "...";
}

?>