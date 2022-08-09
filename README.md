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

- `protected function setUp()` and `protected function tearDown()` are called before/after **each method** is tested.
- `public static function setUpBeforeClass()` and `public static function tearDownAfterClass()` are called before/after **a class** is tested.
- `$this->createMock` and `$this->getMockBuilder` in `UserTest.php`

# Documentation

- https://phpunit.readthedocs.io/en/9.5/assertions.html (Assertions)
- https://phpunit.readthedocs.io/en/9.5/configuration.html (The XML Configuration File)
- https://phpunit.readthedocs.io/en/9.5/test-doubles.html (Test Doubles / Mock)
- https://github.com/sebastianbergmann/phpunit/blob/main/src/Framework/Assert.php (Mock `$this->equalTo` list of other similar available methods)

# Execute

Run test by : 
- `phpunit ./tests/ExampleTest.php` (By filename)
- `phpunit ./tests/` (By repo)
- `./vendor/bin/phpunit ./tests/ExampleTest.php`
- `./vendor/bin/phpunit ./tests/ --filter=testReturnFullName` (Filter by method name)
- `./vendor/bin/phpunit ./tests/ --filter=testReturnFullName --color` (Colorful output)
- `./vendor/bin/phpunit` - Use after configuring `phpunit.xml`
- `./vendor/bin/phpunit --filter=QueueTest` (Test dependency among methods)
- `php bin/phpunit --filter=QueueRefactoTest` (No test dependency / Individual test each method)

# CLI

```bash

$ php bin/phpunit

--------------------------------------------------------------------

PHPUnit 9.5.13 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.1.2
Configuration: /var/www/html/phpunit/phpunit.xml

...................                                               19 / 19 (100%)

Time: 00:00.009, Memory: 6.00 MB

OK (19 tests, 25 assertions)

--------------------------------------------------------------------

```