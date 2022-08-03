# NOTES

```
        \        FADILXCODER        /
         \                         /
          \                       /
           ]                     [    ,'|
           ]                     [   /  |
           ]___               ___[ ,'   |
           ]  ]\             /[  [ |:   |
           ]  ] \           / [  [ |:   |
           ]  ]  ]         [  [  [ |:   |
           ]  ]  ]__     __[  [  [ |:   |
           ]  ]  ] ]\ _ /[ [  [  [ |:   |
           ]  ]  ] ] (#) [ [  [  [ :===='
           ]  ]  ]_].nHn.[_[  [  [
           ]  ]  ]  HHHHH. [  [  [
           ]  ] /   `HH("N  \ [  [
           ]__]/     HHH  "  \[__[
           ]         NNN         [
           ]         N/"         [
           ]         N H         [
          /          N            \
         /           q,            \
        /                           \
```


- https://phpunit.de/getting-started/phpunit-9.html (PHPUnit 9)
- Install `composer require --dev phpunit/phpunit ^9`
- Check by `./vendor/bin/phpunit --version`
- Running PHPUnit and adding an alias (macOS, Linux) :
- - `./vendor/phpunit/phpunit/phpunit`
- - `alias phpunit="./vendor/phpunit/phpunit/phpunit"`
- - `./vendor/bin/phpunit`
- When methods are not prefix by `test`, they are not tested by phpunit, tag them with 
- Configure using `phpunit.xml`
```
/**
 * @test
 */
```
- Tests dependency : check `tests/QueueTest.php`
```
/**
 * @depends .....
 */
```

# Documentation

- https://phpunit.readthedocs.io/en/9.5/assertions.html (Assertions)
- https://phpunit.readthedocs.io/en/9.5/configuration.html (The XML Configuration File)

# Execute

- Run test by : 
- - `phpunit ./tests/ExampleTest.php` (By filename)
- - `phpunit ./tests/` (By repo)
- - `./vendor/bin/phpunit ./tests/ExampleTest.php`
- - `./vendor/bin/phpunit ./tests/ --filter=testReturnFullName` (Filter by method name)
- - `./vendor/bin/phpunit ./tests/ --filter=testReturnFullName --color` (Colorful output)
- - `./vendor/bin/phpunit` - Use after configuring `phpunit.xml`
- - `./vendor/bin/phpunit --filter=QueueTest`