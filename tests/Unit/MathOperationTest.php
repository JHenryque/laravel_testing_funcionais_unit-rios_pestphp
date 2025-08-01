<?php

use App\Services\MainOperations;

describe('MainOpations', function () {

    it('tests the addition', function() {
        $a = 10;
        $b = 5;
        $operation = 'add';

        $result = MainOperations::mathOperation($a, $b, $operation);
        expect($result)->toEqual(15);
    });

    it('tests the subtraction', function() {
        $a = 10;
        $b = 5;
        $operation = 'subtract';

        $result = MainOperations::mathOperation($a, $b, $operation);
        expect($result)->toEqual(5);
    });

    it('tests the multiply', function() {
        $a = 10;
        $b = 5;
        $operation = 'multiply';

        $result = MainOperations::mathOperation($a, $b, $operation);
        expect($result)->toEqual(50);
    });

    it('tests the divide', function() {
        $a = 10;
        $b = 5;
        $operation = 'divide';

        $result = MainOperations::mathOperation($a, $b, $operation);
        expect($result)->toEqual(2);
    });
});
