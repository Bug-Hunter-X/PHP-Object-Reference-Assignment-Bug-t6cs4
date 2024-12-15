To solve this, use cloning to create a separate copy of the object:

```php
class MyClass {
    public $value = 0;
}

$obj1 = new MyClass();
$obj2 = clone $obj1; // Create a copy
$obj2->value = 10;

echo $obj1->value; // Outputs 0, as expected
echo $obj2->value; // Outputs 10
```

By using `clone`, `$obj2` now holds a completely independent copy of the object's data, preventing unintended modifications to `$obj1`.