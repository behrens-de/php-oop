<?
/**
 * - Jede Klasse wird im singular benannt
 * - Jede Klasse sollte eine eigene Datei verwenden
 * - Die Datei sollte wie follgt benannt werden Mensch.class.php
 * - Der erste Buchstabe einer Klasse sollte immer Gross geschrieben sein 
 */

class Mensch{

    // Eigenschaften
    // sichbarkeitsmodifizierer|datentyp|bezeichner
    private string $name; 
    private int $alter;
    private int $groesse;
    private float $gewicht;

    // Konstruktor
    public function __construct(string $lastname){
        $this->lastname = $lastname;
    }


    // Methoden 
    private function bewegen(float $geschwindigkeit) : float{
        return $geschwindigkeit;
    }

}


// Klasse instanzieren
$jan = new Mensch('Behrens');

print gettype($jan);
var_dump($jan);