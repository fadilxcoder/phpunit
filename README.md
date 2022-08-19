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
- Mockery PHPUnit framework
- - Install `composer req mockery/mockery --dev`


# Documentation

- https://phpunit.readthedocs.io/en/9.5/assertions.html (Assertions)
- https://phpunit.readthedocs.io/en/9.5/configuration.html (The XML Configuration File)
- https://phpunit.readthedocs.io/en/9.5/test-doubles.html (Test Doubles / Mock)
- https://github.com/sebastianbergmann/phpunit/blob/main/src/Framework/Assert.php (Mock `$this->equalTo` list of other similar available methods)
- http://docs.mockery.io/en/latest/index.html (PHP mock object framework testing with PHPUnit)
- http://docs.mockery.io/en/latest/reference/phpunit_integration.html (Mockery - PHPUnit Integration)
- http://docs.mockery.io/en/latest/reference/expectations.html (Declaring Method Call Expectations)
- https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html#data-providers (Dataproviders for test)

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
- `php bin/phpunit --filter=OrderTest` (Mockery usage)

# Code coverage

- URL : http://localhost/phpunit/_coverage/dashboard.html
- CMD : `php bin/phpunit --coverage-html html` - Generate report to specific directory
- CMD : `php bin/phpunit` - Generate report into **_coverage**

# CLI

```bash

$ php bin/phpunit

--------------------------------------------------------------------
PHPUnit 9.5.21 #StandWithUkraine

Runtime:       PHP 7.4.9 with Xdebug 2.9.6
Configuration: C:\wamp64\www\phpunit\phpunit.xml

.........
 Mail dispatch using connector : EDM::aM7Kj
 FROM : fadil@xcoder.dvlpr
 MSG : Alpha Tango Foxtrot Sierra Lima
.....................                                    30 / 30 (100%)

Time: 00:03.358, Memory: 16.00 MB

OK (30 tests, 37 assertions)

Generating code coverage report in HTML format ... done [00:00.082]
--------------------------------------------------------------------

```

# Github Action test

- https://github.com/nanasess/shivammathur-setup-php (Setup PHP in GitHub Actions)
- https://github.com/shivammathur/setup-php (Setup PHP in GitHub Actions - Main)
- https://github.com/marketplace/actions/setup-php-action (Setup PHP Action)
- https://github.com/nanasess/setup-php (nanasess/setup-php)