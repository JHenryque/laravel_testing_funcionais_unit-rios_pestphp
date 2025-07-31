<?php

test('Verificar se a welcome page está disponivel', function () {

    $response = $this->get('/');
    //$response->assertStatus(200);
    expect($response->status())->toBe(200);
});
