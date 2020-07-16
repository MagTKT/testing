<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use App\User;


class UserTest extends TestCase
{

    // validation d'email
    public function testEmailValid() {
        $user = new User('test@gmail.com','test','test', 15);
        $mail = $user->mail;
        $this->assertNotEmpty($mail);
    }

    // test not email
    public function testEmailNotValid() {
        $user = new User('test@gmail.com','test','test', 15);
        $mail = $user->mail;
        $this->assertNotEmpty($mail);
    }

    // validation nom
    public function testNomValid() {
        $user = new User('test@gmail.com','test','test', 15);
        $nom = $user->nom;
        $this->assertNotEmpty($nom);
    }

    public function testNomNotValid() {
        $user = new User('test@gmail.com','test','test', 15);
        $nom = $user->nom;
        $this->assertNotEmpty($nom);
    }

    // Validation prénom
    public function testPrenomValid() {
        $user = new User('test@gmail.com','test','test', 15);
        $prenom = $user->prenom;
        $this->assertNotEmpty($prenom);
    }

    public function testPrenomNotValid() {
        $user = new User('test@gmail.com','test','test', 15);
        $prenom = $user->prenom;
        $this->assertNotEmpty($prenom);
    }

}