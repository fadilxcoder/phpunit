<?php

class Article
{
    public $title;

    public function getSlug()
    {
        $slug = $this->title;
        $slug = preg_replace('/\s+/','-', $slug);
        $slug = preg_replace('/[^\w]+/','-', $slug);
        $slug = trim($slug, '-');
        $slug = strtolower($slug);

        return $slug;
    }

    private function getUniqueIdentifier()
    {
        return rand() . '-' . uniqid(); # 293911606-62fd2399e7f77
    }

    private function getUniqueIdentifierByUser(string $prefix)
    {
        return uniqid($prefix) . '-' . rand(); # john62fd258f27938-784030554
    }
}