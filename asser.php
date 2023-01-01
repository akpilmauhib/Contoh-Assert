<?php
function variableTypes($x, $y){
    assert(is_int($x), '$x must be an integer value');
    assert(is_int($y), '$y must be an integer value');
    assert($x === 0, 'The value of $x cannot be zero');
    return $x / $y;
}
variableTypes(1, 0);
