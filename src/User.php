<?php
namespace App;

class User
{
    private $mail;
    private $prenom;
    private $nom;
    private $age;

    public function __construct(string $mail, string $prenom, string $nom, int $age)
    {
        $this->mail = $mail;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->age = $age;
    }

    public function isValid(){
        if(!empty($this->mail) && !empty($this->prenom) && !empty($this->nom) && !empty($this->age)){
            if(filter_var($this->mail, FILTER_VALIDATE_mail) === false){
                throw new InvalidArgumentException('mail invalid');
            }
            if($this->age < 13){
                throw new InvalidArgumentException('Too young');
            }
        }else{
            throw new InvalidArgumentException('Empty value');
        }
        return true;
    }

    public function getmail(): string
    {
        return $this->mail;
    }

    public function getprenom(): string
    {
        return $this->prenom;
    }

    public function getnom(): string
    {
        return $this->nom;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}