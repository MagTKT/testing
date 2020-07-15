<?php


class Calculer
{
    public $nombre1;
    public $nombre2;

    public function __construct($nombre1, $nombre2)
    {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }

    public function addMethod()
    {
        return $this->nombre1 + $this->nombre2;
    }
    public function mulMethod()
    {
        return $this->nombre1 * $this->nombre2;
    }
    public function subMethod()
    {
        return $this->nombre1 - $this->nombre2;
    }
    public function divMethod()
    {
        return $this->nombre1 / $this->nombre2;
    }

}