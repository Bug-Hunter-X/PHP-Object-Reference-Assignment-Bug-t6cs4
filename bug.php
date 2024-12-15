In PHP, a common yet subtle error arises when dealing with object references and assignments.  Consider this scenario:

```php
class MyClass {
    public $value = 0;
}

$obj1 = new MyClass();
$obj2 = $obj1; // Assignment, not a copy
$obj2->value = 10;

echo $obj1->value; // Outputs 10, unexpectedly!
```

The issue is that `$obj2 = $obj1;` doesn't create a copy of `$obj1`. Instead, `$obj2` becomes another reference to the *same* object in memory. Modifying `$obj2` directly affects `$obj1`, leading to unexpected behavior.  This can be particularly difficult to debug in larger applications.