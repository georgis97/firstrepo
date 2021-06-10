<?php

echo('<h1>Hello</h1>');

require_once "Clovek.php";

$firstname = $_GET["firstname"];
$lastname = $_GET["lastname"];
$sex = $_GET["sex"];

$karel = new Clovek($firstname,$lastname,$sex);
