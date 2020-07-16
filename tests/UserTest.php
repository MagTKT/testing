<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use App\User;


class UserTest extends TestCase
{
    // validation d'email
    public function testEmailValid() {
        $user = new User();
        $email = $user->email->add('test@gmail.com');
        $this->assertNotEmpty('test@gmail.com',$email);
    }

    public function testEmailNotValid() {
        $user = new User();
        $email = $user->email->add('test');
        $this->assertNotEmpty(200,$email);
    }

    // validation name
    public function testnomValid() {
        $user = new User();
        $nom = $user->$nom->add('titi');
        $this->assertNotEmpty('titi',$nom);
    }

    public function testnomNotValid() {
        $user = new User();
        $nom = $user->$nom->add('titi');
        $this->assertNotEmpty('toto',$nom);
    }

    // Validation prénom
    public function testPrenomValid() {
        $user = new User();
        $prenom = $user->$prenom->prenom('test');
        $this->assertNotEmpty('test',$prenom);
    }

    public function testPrenomNotValid() {
        $user = new User();
        $prenom = $user->$prenom->prenom('test');
        $this->assertNotEmpty('toto',$prenom);
    }

}