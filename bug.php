In PHP, a common yet subtle error arises when dealing with variable-length strings within loops or string manipulations.  Consider this scenario: 
```php
for ($i = 0; $i < strlen($myString); $i++) {
  // Manipulate $myString[$i]
  $myString .= "a"; // Append to string
}
```
This code intends to iterate through each character of `$myString`. However, appending to `$myString` inside the loop modifies its length during iteration. `strlen($myString)` is recalculated on each iteration, leading to unexpected behavior and potentially an infinite loop.  The loop counter `$i` gets out of sync with the string's actual length, causing some characters to be skipped or processed multiple times.

Another similar issue involves modifying array elements while iterating using `foreach`.  The internal pointer's behavior may change unexpectedly if you remove or add elements within the loop.
