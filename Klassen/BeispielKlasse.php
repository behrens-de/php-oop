<?

/**
 * - Jede Klasse wird im singular benannt
 * - Jede Klasse sollte eine eigene Datei verwenden
 * - Die Datei sollte wie follgt benannt werden Mensch.class.php
 * - Der erste Buchstabe einer Klasse sollte immer Gross geschrieben sein 
 */

class Mensch
{

    // Eigenschaften
    // sichbarkeitsmodifizierer|{?datentyp}|bezeichner
    private $name;
    private $alter;
    private $groesse;
    private $gewicht;

    // Konstruktor
    public function __construct(string $firstname , string $lastname, int $alter)
    {
        // Instanzvariablen inizalisieren
        $this -> alter = $alter;  // Option 1
        $this -> setName($firstname, $lastname); // Option 2
    }

    // Getter und Setter

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $firstname , string $lastname): void
    {
        $this->name = "${firstname} ${lastname}";
    }


    // Methoden 
    private function bewegen(float $geschwindigkeit): float
    {
        return $geschwindigkeit;
    }
}


// Klasse instanzieren
$jan = new Mensch('Jan','Behrens', 37);

echo $jan->getName();
