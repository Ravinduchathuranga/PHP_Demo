## Using the `foreach` Loop in PHP

The `foreach` loop in PHP is a convenient way to iterate over arrays or objects. It allows you to execute a block of code for each element in an array or each property in an object.

### Syntax

```php
foreach ($array as $value) {
    // Code block to execute
}
```

- **`$array`**: The array or object to iterate over.
- **`$value`**: The value of the current element in the array or the property value in the object.

### Example

```php
$colors = array("red", "green", "blue");

foreach ($colors as $color) {
    echo "Color: $color <br>";
}
```

In this example, the `foreach` loop iterates over each element in the `$colors` array. In each iteration, the variable `$color` holds the value of the current element, and the loop body echoes it.

### Key Points

- The `foreach` loop is especially useful for iterating over arrays without worrying about array indexes.
- It automatically advances the internal array pointer, so modifying the array's elements during iteration does not affect the loop.
- You can use `break` and `continue` statements within a `foreach` loop for more control over the iteration process.
