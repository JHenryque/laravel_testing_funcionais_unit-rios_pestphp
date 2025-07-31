<?php

namespace App\Services;

class MainOperations
{
     public static function generateHash(): string
     {
         // gera uma hash de 32 caracteres - letras e algarismos
         return bin2hex(random_bytes(16));
     }
}
