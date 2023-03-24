<?php

namespace App\Tests;

use App\Entity\Category;
use App\Entity\Project;
use App\Entity\User;
use DateTime;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class ProjectUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $pro = new Project;
        $dateImmutable = new DateTimeImmutable();
        $date = new DateTime();
        $user = new User;
        $cat = new Category;

        $pro->setName('nom')
            ->setDescription('description')
            ->setDate($date)
            ->setSlug('slug')
            ->setCreatedAt($dateImmutable)
            ->setFile('fichier')
            ->addCategory($cat)
            ->setUser($user);
    
        $this->assertTrue($pro->getName() === 'nom');
        $this->assertTrue($pro->getDescription() === 'description');
        $this->assertTrue($pro->getDate() === $date);
        $this->assertTrue($pro->getSlug() === 'slug');
        $this->assertTrue($pro->getCreatedAt() === $dateImmutable);
        $this->assertTrue($pro->getFile() === 'fichier');
        $this->assertContains($cat, $pro->getCategory());
        $this->assertTrue($pro->getUser() === $user);
    }

    public function testIsFasle()
    {
        $pro = new Project;
        $user = new User;
        $cat = new Category;

        $pro->setName('nom')
            ->setDescription('descritpion')
            ->setDate(new DateTime())
            ->setSlug('slug')
            ->setCreatedAt(new DateTimeImmutable())
            ->setFile('fichier')
            ->addCategory($cat)
            ->setUser($user);
    
        $this->assertFalse($pro->getName() === 'false');
        $this->assertFalse($pro->getDescription() === 'false');
        $this->assertFalse($pro->getDate() === new DateTime());
        $this->assertFalse($pro->getSlug() === 'false');
        $this->assertFalse($pro->getCreatedAt() === new DateTimeImmutable());
        $this->assertFalse($pro->getFile() === 'false');
        $this->assertNotContains(new Category, $pro->getCategory());
        $this->assertFalse($pro->getUser() === new User);
    }

    public function testIsEmpty()
    {
        $pro = new Project();

        $this->assertEmpty($pro->getName());
        $this->assertEmpty($pro->getDescription());
        $this->assertEmpty($pro->getDate());
        $this->assertEmpty($pro->getCreatedAt());
        $this->assertEmpty($pro->getSlug());
        $this->assertEmpty($pro->getFile());
        $this->assertEmpty($pro->getCategory());
        $this->assertEmpty($pro->getUser());
    }
}
