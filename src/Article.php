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
        return rand() . '-' . uniqid();
    }
}