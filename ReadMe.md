## Using Functions in PHP

Functions in PHP are blocks of code that can be reused throughout your program. They allow you to encapsulate code into modular units, making it easier to manage and maintain your codebase.

### Syntax

```php
function functionName($parameter1, $parameter2, ...) {
    // Code block to execute
    return $result;
}
```

- **`functionName`**: The name of the function.
- **`$parameter1, $parameter2, ...`**: Parameters are variables that are used to pass values into the function.
- **`return`**: Specifies the value that the function should return.

### Example

```php
function greet($name) {
    return "Hello, $name!";
}

echo greet("John"); // Outputs: Hello, John!
```

In this example, the `greet` function takes one parameter `$name` and returns a greeting message with the provided name.

### Key Points

- Functions help in organizing code and promoting reusability.
- They can accept parameters and return values.
- PHP supports both user-defined functions and built-in functions.
- You can define functions anywhere in your PHP code, but it's a good practice to define them before calling them.
