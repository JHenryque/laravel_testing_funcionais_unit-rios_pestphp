<?php

test('o meu segundo test', function () {
    $name = 'Henrique';

    expect($name)->toBeString();
});
