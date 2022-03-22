<?php
require_once 'Classes/Tooltipable.php';

class Company implements Tooltipable
{
    public  string $name;
    public string $adress;

    public function __construct(string $name, string $adress)
    {
        $this->name = $name;
        $this->adress = $adress;
    }


    public function getTitle(): string
    {
       return $this->name;
    }

    public function getDescription(): string
    {
        return 'Entreprise '.$this->name.', siège social : '.$this->adress;
    }
}