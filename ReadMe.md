## Using the `switch` Statement in PHP

The `switch` statement in PHP is a control structure used for multi-way branching. It provides a convenient way to execute different blocks of code based on the value of a variable or expression. 

### Syntax

```php
switch (variable) {
    case value1:
        // Code block to execute if variable equals value1
        break;
    case value2:
        // Code block to execute if variable equals value2
        break;
    // Additional cases...
    default:
        // Code block to execute if variable doesn't match any case
}
