<?php

namespace App\Http\Controllers;

class ParesController extends Controller
{
    public function isEven($num): string
    {
        if (!is_numeric($num) || intval($num) != $num) {
            return 'Solo se permiten números enteros';
        }

        if (($num % 2) == 0) {
            return 'Es un número par';
        } else {
            return 'Es un número impar';
        }
    }
}