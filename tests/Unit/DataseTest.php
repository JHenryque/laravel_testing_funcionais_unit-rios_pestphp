<?php

describe('Testes com dataset', function () {
    // coleçao de dados
    $clients = [
        ['Joao', 18],
        ['Jose', 22],
        ['Ana', 48],
    ];

    it('verifies if all clients have names', function ($name, $age) {
       expect($name)->toBeString();
    })->with($clients);

    it('verifies if all clients are adults', function ($name, $age) {
        expect($age)->toBeGreaterThanOrEqual(18)->toBeInt();
    })->with($clients);
});
