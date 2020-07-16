<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use App\User;


class UserTest extends TestCase
{

    // validation d'email
    public function testEmailValid() {
        $user = new User('test@gmail.com');
        $mail = $user->mail;
        $this->assertNotEmpty($mail);
    }

    // public function testEmailNotValid() {
    public function testEmailNotValid() {
        $user = new User('');
        $mail = $user->mail;
        $this->assertNotEmpty($mail);
    }

    // // validation name
    public function testNomValid() {
        $user = new User('test');
        $nom = $user->nom;
        $this->assertNotEmpty($nom);
    }

    public function testNomNotValid() {
        $user = new User('');
        $nom = $user->nom;
        $this->assertNotEmpty($nom);
    }

    // // Validation prénom
    public function testPrenomValid() {
        $user = new User('toto');
        $prenom = $user->prenom;
        $this->assertNotEmpty($prenom);
    }

    public function testPrenomNotValid() {
        $user = new User('');
        $prenom = $user->prenom;
        $this->assertNotEmpty($prenom);
    }

}