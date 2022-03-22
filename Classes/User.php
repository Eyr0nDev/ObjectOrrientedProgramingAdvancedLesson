<?php
require_once 'Classes/Tooltipable.php';

class User implements  Tooltipable
{
    public string $username;
    public string $email;

    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function getDisplayName(): string
    {
        return $this->username.' - '.$this->email;
    }

    public function getTitle(): string
    {
        return  $this->getDisplayName();
    }

    public function getDescription(): string
    {
        return 'Je m\'apelle '.$this->username.', mon email est : '.$this->email;
    }
}