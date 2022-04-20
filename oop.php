<?php
//classes
class Auto
{
    //PROPERTIES binnen CLASS / VALUES buiten CLASS
    public $titel = "auto";
    public $merk;
    public $type;
    public $brandstof;
    public $kleur;
    public $bouwjaar;

    //METHODS binnen CLASS / FUNCTIONS buiten CLASS (apart oproepen)
    function desc()
    {
        echo "Deze " . $this -> titel . " is een " . $this -> merk . " " . $this -> type . " uit " . $this -> bouwjaar . '<br>';
        echo "- Kleur: " . $this->kleur . "<br>";
        echo "- brandstof: " . $this->brandstof . "<br>";
    }
    //CONSTRUCT METHODS hebben geen naam en worden AUTOMATISCH uitgevoerd (hoeven niet apart opgeroepen te worden)
    function __construct($merk, $type, $brandstof, $kleur, $bouwjaar)
    {
        $this -> merk = $merk;
        $this -> type = $type;
        $this -> brandstof = $brandstof;
        $this -> kleur = $kleur;
        $this -> bouwjaar = $bouwjaar;
    }
    //DESTRUCT METHODS hebben ook geen naam
    function ___destruct()
    {
        echo 'De brandstof is ' . $this -> brandstof . '<br>';
        echo 'De kleur is ' . $this -> kleur . '<br>';
    }
}

class oudeAuto extends Auto //uitbreiding op 'Autos' CLASS en gebruikt zelfde PROPERTIES en METHODS
{
    //PROPERTIES (overschrijven de properties van PARENT)
    public $titel = "oude auto";

    //METHODS
    function descOud()
    {
        parent::desc();
    }
}

$auto1 = new Auto("Toyota", "Aygo", "Benzine", "Grijs", "2011");
$auto1 -> desc();
echo '<br>';
$auto2 = new Auto("Opel", "Mokka", "Benzine", "Wit", "2014");
$auto2 -> desc();
echo '<br>';
$auto3 = new oudeAuto("Seat", "Ibiza", "Diesel", "Blauw", "2011");
$auto3 -> descOud();
echo '<br>';
?>
<!doctype html>
<html>

<head>
    <title>Cursus PHP/MySQL - OOP</title>
    <style>
    </style>
    <script>
    </script>
</head>

<body>
</body>

</html>