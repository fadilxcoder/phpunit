<?php

use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
    protected $article;

    protected function setUp(): void
    {
        $this->article = new Article();
    }

    public function titleProvider()
    {
        return [
            'Slug Has Spaces Replaced By dash' => [
                "An example article", "an-example-article"
            ],
            'Slug Has Whitespace Replaced By Single dash' => [
                "An    example    \n    article", "an-example-article"
            ],
            'Slug Does Not Start Or End With An dash' => [
                " An example article ", "an-example-article"
            ],
            'Slug Does Not Have Any Non Word Characters' => [
                "Read! This! Now!", "read-this-now"
            ]
        ];
    }

    /**
     * @dataProvider titleProvider
     */    
    public function testSlug($title, $slug)
    {
        $this->article->title = $title;

        $this->assertEquals($this->article->getSlug(), $slug);
    }   

    public function testGetUniqueIdentifier()
    {
        $reflector = new ReflectionClass(Article::class);
        $method = $reflector->getMethod('getUniqueIdentifier');
        $method->setAccessible(true);
        $result = $method->invoke($this->article);

        $this->assertIsString($result);
    }

    public function testGetUniqueIdentifierByUser()
    {
        $reflector = new ReflectionClass(Article::class);
        $method = $reflector->getMethod('getUniqueIdentifierByUser');
        $method->setAccessible(true);
        $result = $method->invokeArgs($this->article, ['john']);

        $this->assertStringStartsWith('john', $result);
    }
}