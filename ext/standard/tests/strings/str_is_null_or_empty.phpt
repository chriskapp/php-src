--TEST--
str_is_null_or_empty() function - unit tests for str_is_null_or_empty()
--FILE--
<?php
var_dump(str_is_null_or_empty(null));
var_dump(str_is_null_or_empty(''));
var_dump(str_is_null_or_empty('foo'));
?>
--EXPECT--
bool(true)
bool(true)
bool(false)
