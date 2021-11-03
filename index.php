<?php

// Variante 1 : funktioniert NICHT!
// Lösung 1 oder 2 anschauen
//require_once "team_member_1/Test.php";
//require_once "team_member_2/Test.php";
/*

    Fatal error: 
    
    Cannot declare class Test, 
    because the name is already in use 
    in C:\xampp\htdocs\phpschulung\namespaces\team_member_2\Test.php on line 3

*/


// Lösung 1



require_once "team_member_1/TestOk.php";
require_once "team_member_2/TestOk.php";

// namespace vor dem Klassennamen beim instanzieren : team1\TestOK
$obj1 = new team1\TestOK();
$obj2 = new team2\TestOK();
$obj1->tueetwas();


// Lösung 2
require_once "team_member_1/TestOk.php";
require_once "team_member_2/TestOk.php";

// namespace NICHT vor dem Klassennamen beim instanzieren :,
// sondern mit use deklariert
use team1\TestOk;
use team2\TestOk as Team2TestOk; // hier mit Umbennenung, da der Klassenname schon benutzt wird!

$obj1 = new TestOk();
$obj2 = new Team2TestOk;
$obj1->tueetwas();