<?php

describe('Test Expectstion function (API)', function () {
    it('rtest the toBe() function', function () {
        $value = 10;

        // valsida se o valor -e 10
        expect($value)->toBe(10);

        // valida se o valor é inteiro e é igual a 10
        expect($value)->toBeInt()->toBe(10);
    });

    it('tests the toBeTrue() and toBeFalse() function', function () {
        $value1 = true;
        $value2 = false;

        // valida se o valor e true
        expect($value1)->toBeTrue();

        // valida se o valor e false
        expect($value2)->toBeFalse();
    });

    it('tests the toBeNUll() function', function () {
        $value1 = null;

        // valida se o valor e null
        expect($value1)->toBeNull();

    });

    it('tests the toBeEmpty() function', function () {
        $value1 = '';

        // valida se o valor e empty
        expect($value1)->toBeEmpty();
    });

    it('tests the toBeArray() function', function () {
        $value1 = [1, 2, 3];

        // valida se o valor e um array
        expect($value1)->toBeArray();
    });

    it('tests the toBeIn() function', function () {
        $value = 2;
        $values = [1, 2, 3];

        // valida se o valor existe dentro do array
        expect($value)->toBeIn($values);
    });

    it('tests the toBeJson() function', function () {
        $value1 = '{"name":"John Doe"}';

        // valida se o valor e um JSON valido
        expect($value1)->toBeJson();
    });

    it('tests the toMatch() function', function () {
        $value = 'Hello World!';

        // valida se o valor existe BATE CERTO COM A EXPRESSÃO REGULAR
        expect($value)->toMatch('/Hello/');
    });

    it('tests the toBeUppercase() function', function () {
        $value = 'HELLOWORLD';

        // valida se o valor esta todo em maiúsculas
        expect($value)->toBeUppercase();
    });

});
