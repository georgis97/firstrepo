<?php

class Clovek
{
    public function __construct($firstname,$lastname,$pohlavi)
    {
        $this->jmeno = $firstname;
        $this->prijmeni = $lastname;
        $this->pohlavi = $pohlavi;

        $this->pozdrav($firstname,$lastname,$pohlavi);

    }

    public function pozdrav($firstname,$lastname,$pohlavi)
    {
        echo("tvoje jmeno: $firstname");
        echo('<br>');
        echo("tvoje prijmeni: $lastname");
        echo('<br>');
        echo("tvpje pohlavi: $pohlavi");
    }

}
