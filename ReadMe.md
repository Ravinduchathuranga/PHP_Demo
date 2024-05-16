## Using the `for` Loop in PHP

The `for` loop in PHP is a control structure used for iterating over a range of values. It allows you to execute a block of code repeatedly until a specified condition is met.

### Syntax

```php
for (initialization; condition; increment/decrement) {
    // Code block to execute
}
```

- **`initialization`**: Specifies the initial value of the loop control variable.
- **`condition`**: Defines the condition for continuing the loop. If the condition evaluates to true, the loop continues; otherwise, it terminates.
- **`increment/decrement`**: Specifies how the loop control variable is updated after each iteration.

### Example

```php
for ($i = 0; $i < 5; $i++) {
    echo "The value of i is: $i <br>";
}
```

In this example, the loop starts with `$i` set to 0. It continues as long as `$i` is less than 5, and after each iteration, `$i` is incremented by 1. The loop will output the value of `$i` in each iteration until `$i` becomes equal to 5.

### Key Points

- The `for` loop is commonly used when you know how many times you want to execute a block of code.
- It's composed of three parts: initialization, condition, and increment/decrement.
- You can use `break` and `continue` statements within a `for` loop for more control over the iteration process.
