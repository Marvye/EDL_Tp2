<?php

//hello
require 'GumballMachine.php';

class GumballMachineTest extends PHPUnit_Framework_TestCase
{
    public $gumballMachineInstance;
    //prof
    private $nom="XXX1"; // a changer
    private $prenom="yyy1"; // a changer
    private $date_naissance="29-09-1980"; // a changer
    private $lieu_naissance="ZZZ1"; // a changer


    //prof
    private $nom2="XXX2"; // a changer
    private $prenom2="yyy2"; // a changer
    private $date_naissance2="30-10-1981"; // a changer
    private $lieu_naissance2="ZZZ2"; // a changer



    // cours
    private $intitule="***"; //a remplir
    private $duree="***";    //a remplir

    // cours
        private $intitule1="IOT"; //a remplir
        private $duree1="10";    //a remplir

    
        
    public function setUp()
    {
        $this->gumballMachineInstance = new GumballMachine();
    }
    
    public function testAffichageProfAVI()
    {
        $this->assertEquals(true,$this->gumballMachineInstance->AffichageProf("Before Insertion of Professors"));
    }
    public function testInsertP()
    {
        $max__id1=$this->gumballMachineInstance->GetLastIDP();
        $this->assertEquals(true,$this->gumballMachineInstance->InsertP($this->gumballMachineInstance->getDB(),$this->nom,$this->prenom,$this->date_naissance,$this->lieu_naissance));
        //his->assertEquals(true,$this->gumballMachineInstance->InsertP($this->gumballMachineInstance->getDB(),$this->nom2,$this->prenom2,$this->date_naissance2,$this->lieu_naissance2));
        $max__id2=$this->gumballMachineInstance->GetLastIDP();
        $this->assertEquals($max__id1+1,$max__id2);
    }
    public function testAffichageProfAPI()
    {
        /*� completer*/
    }
     
    
    public function testAffichageCoursAVI()
    {
        /*� completer*/
    }
    public function testInsertC()
    {
       
$max__id1=$this->gumballMachineInstance->GetLastIDP();
        $this->assertEquals(true,$this->gumballMachineInstance->InsertP($this->gumballMachineInstance->getDB(),$this->nom,$this->prenom,$this->date_naissance,$this->lieu_naissance));
        //his->assertEquals(true,$this->gumballMachineInstance->InsertP($this->gumballMachineInstance->getDB(),$this->nom2,$this->prenom2,$this->date_naissance2,$this->lieu_naissance2));
        $max__id2=$this->gumballMachineInstance->GetLastIDP();
        $this->assertEquals($max__id1+1,max__id2);
    }
    public function testAffichageCoursAPI()
    {
        /*� completer*/
    }

   
}
