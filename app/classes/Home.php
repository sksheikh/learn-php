<?php


namespace App\classes;


class Home
{
    public $home;



    public function info()
    {
        $this->home = header('Location: action.php?page=home');
        return $this->home;
    }

}