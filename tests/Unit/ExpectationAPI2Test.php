<?php

describe('Test Expectstion function (API2)', function () {

    it('tests the sequence() function', function () {

        $values = [1,3,5];

        // valida se a sequencia é de facto conjunto de 1
        expect($values)->sequence(
            fn($value)=> $value->toBeInt()->toBe(1),
            fn($value)=> $value->toBeInt()->toBe(3),
            fn($value)=> $value->toBeInt()->toBe(5)
        );
    });

});
