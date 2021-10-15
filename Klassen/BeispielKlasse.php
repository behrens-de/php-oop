<?
/**
 * - Jede Klasse wird im singular benannt
 * - Jede Klasse sollte eine eigene Datei verwenden
 * - Die Datei sollte wie follgt benannt werden Mensch.class.php
 * - Der erste Buchstabe einer Klasse sollte immer Gross geschrieben sein 
 */

class Mensch{

    // Eigenschaften
    private $name; 
    private $alter;
    private $groesse;
    private $gewicht;

    // Konstruktor
    public function __construct(string $lastname){
        $this->lastname = $lastname;
    }


    // Methoden 
    private function bewegen(float $geschwindigkeit) : float{
        return $geschwindigkeit;
    }

}