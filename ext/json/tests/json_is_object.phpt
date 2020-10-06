--TEST--
json_is_object: test is object function
--FILE--
<?php

$values = [
    null,
    'foo',
    [],
    [1, 2, 3],
    ['foo' => 'bar'],
    (object) ['foo' => 'bar'],
    new \stdClass(),
];

foreach ($values as $value) {
    var_dump(json_is_object($value));
}

?>
--EXPECT--
bool(false)
bool(false)
bool(false)
bool(false)
bool(true)
bool(true)
bool(true)
