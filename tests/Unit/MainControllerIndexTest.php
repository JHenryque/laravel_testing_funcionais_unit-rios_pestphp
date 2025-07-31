<?php

// vamos indocar que quereomos usar uma instancia do ManController
use App\Http\Controllers\MainController;

test('Estou a testar o MainController|index', function () {

    // vamos criar uma instância do MainController
    $mainConroller = new MainController();

    // vamos chamar o mento index
    $result = $mainConroller->index();

    // vamos veruficar se o resultado e uma string
    expect($result)->toBeString();

    // vamos verificar se o resultado -e igaul a "ola mundo"
    expect($result)->toEqual("Olá Mundo!");
});
