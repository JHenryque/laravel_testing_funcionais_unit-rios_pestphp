<?php

namespace App\Services;

class MainOperations
{
     public static function generateHash($numchars = 32): string
     {
         // gera uma hash de 32 caracteres - letras e algarismos
         return bin2hex(random_bytes((int)$numchars / 2));
     }
}
