<?php

namespace App\Tests;

use App\Entity\Category;
use PHPUnit\Framework\TestCase;

class CategoryUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $cat = new Category();
        $cat->setName('nom')
            ->setDescription('description')
            ->setSlug('slug');
        
        $this->assertTrue($cat->getName() === 'nom');
        $this->assertTrue($cat->getDescription() === 'description');
        $this->assertTrue($cat->getSlug() === 'slug');

    }

    public function testIsFalse(): void
    {
        $cat = new Category();
        $cat->setName('nom')
            ->setDescription('description')
            ->setSlug('slug');
        
        $this->assertFalse($cat->getName() === 'false');
        $this->assertFalse($cat->getDescription() === 'false');
        $this->assertFalse($cat->getSlug() === 'false');

    }

    public function testIsEmpty(): void
    {
        $cat = new Category();
        $this->assertEmpty($cat->getName() === 'false');
        $this->assertEmpty($cat->getDescription() === 'false');
        $this->assertEmpty($cat->getSlug() === 'false');

    }
}

