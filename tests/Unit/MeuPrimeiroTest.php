<?php

test('example', function () {
    // primeira versão
     $value = true;

    // segunda versao
    //$value = false;
    expect($value)->toBeTrue();
});
