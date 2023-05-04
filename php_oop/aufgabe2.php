<?php

/*Erstellen Sie eine Klasse namens "Person" mit den folgenden privaten Eigenschaften:
 $name
 $age
Erstellen Sie öffentliche Getter- und Setter-Methoden für die Eigenschaften.
Erstellen Sie ein Objekt der Klasse Person und setzen Sie die Werte der Eigenschaften
mit Hilfe der Setter-Methoden. Verwenden Sie dann echo, um den Namen und das
Alter der Person mithilfe der Getter-Methoden anzuzeigen.*/

class Person {
    private $name;
    private $age;
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function setAge($age) {
        $this->age = $age;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getAge() {
        return $this->age;
    }
}

// Erstelle ein Objekt der Klasse Person und setze die Werte der Eigenschaften mit Hilfe der Setter-Methoden
$myPerson = new Person();
$myPerson->setName("Max");
$myPerson->setAge(30);

// Gib den Namen und das Alter der Person mithilfe der Getter-Methoden aus
echo "Name: " . $myPerson->getName() . ", Alter: " . $myPerson->getAge();
?>
