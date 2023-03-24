<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $user = new User();
        $user->setEmail('true@test.com')
            ->setFirstname('prenom')
            ->setName('nom')
            ->setPassword('password')
            ->setAbout('a propos')
            ->setPhoneNumber('numero tel');
        
        $this->assertTrue($user->getEmail() === 'true@test.com');
        $this->assertTrue($user->getFirstname() === 'prenom');
        $this->assertTrue($user->getName() === 'nom');
        $this->assertTrue($user->getPassword() === 'password');
        $this->assertTrue($user->getAbout() === 'a propos');
        $this->assertTrue($user->getPhoneNumber() === 'numero tel');
    }

    public function testIsFalse(): void
    {
        $user = new User();
        $user->setEmail('true@test.com')
            ->setFirstname('prenom')
            ->setName('nom')
            ->setPassword('password')
            ->setAbout('a propos')
            ->setPhoneNumber('numero tel');
        
        $this->assertFalse($user->getEmail() === 'false@test.com');
        $this->assertFalse($user->getFirstname() === 'false');
        $this->assertFalse($user->getName() === 'false');
        $this->assertFalse($user->getPassword() === 'false');
        $this->assertFalse($user->getAbout() === 'false');
        $this->assertFalse($user->getPhoneNumber() === 'false');
    }

    public function testIsEmpty(): void
    {
        $user = new User();

        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getFirstname());
        $this->assertEmpty($user->getName());
        $this->assertEmpty($user->getPassword());
        $this->assertEmpty($user->getAbout());
        $this->assertEmpty($user->getPhoneNumber());
    }
}

