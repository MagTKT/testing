<?php
namespace App;

class User
{
  public $mail;
  public $prenom;
  public $nom;
  public $age;
  
  public function __construct(string $mail = '', string $nom = '', string $prenom = '', int $age = 0)
    {
        $this->mail = $mail;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->age = $age;
    }


    public function isValid(){
        if(!empty($this->$mail) && !empty($this->$prenom) && !empty($this->$nom) && !empty($this->$age)){
            if(filter_var($this->$mail, FILTER_VALIDATE_mail) === false){
                throw new InvalidArgumentException('mail invalid');
            }
            if($this->$age < 13){
                throw new InvalidArgumentException('Too young');
            }
        }else{
            throw new InvalidArgumentException('Empty value');
        }
        return true;
    }

}