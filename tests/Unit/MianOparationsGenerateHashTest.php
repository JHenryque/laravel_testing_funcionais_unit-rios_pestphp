<?php

use App\Services\MainOperations;


test('Testar se é gerada uma hash com 32 caracteres', function () {

    $hash = MainOperations::generateHash();

    expect(strlen($hash))->toBe(32);
});
