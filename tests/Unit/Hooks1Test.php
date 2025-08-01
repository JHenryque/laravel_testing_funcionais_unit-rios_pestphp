<?php

beforeEach(function () {
   $this->number1 = 10;
   $this->number2 = 5;
});

describe('Tests com Hooks', function () {

    it('Test 1', function () {
       expect($this->number1)->toBe(10);
    });

    it('Test 2', function () {
        expect($this->number2)->toBe(5);
    });
});

afterEach(function () {
    unset($this->number1);
    unset($this->number2);
});
