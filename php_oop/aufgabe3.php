<?php

/*Erstellen Sie eine Klasse namens "Person" mit den folgenden Eigenschaften
 $name
 $age
 $gender
Erstellen Sie eine Unterklasse namens "Student", die die Klasse Person erweitert und
die folgenden Eigenschaften hinzufügt:
 $studentID
 $course
Erstellen Sie eine weitere untergeordnete Klasse mit dem Namen "Teacher", die die
Klasse Person erweitert und die folgenden Eigenschaften hinzufügt:
 $teacherID
 $subject
Erstellen Sie Konstruktoren für alle Klassen, die ihre jeweiligen Eigenschaften
initialisieren.
Erstellen Sie in jeder Klasse eine Methode namens "displayInfo", die die Eigenschaften
des Objekts in einer formatierten Zeichenkette anzeigt.
Erstellen Sie ein Objekt der Klasse Person, ein Objekt der Klasse Student und ein
Objekt der Klasse Teacher. Werte für die Eigenschaften können Sie sich ausdenken.
Rufen Sie die Methode displayInfo() für alle Objekte auf.*/

class Person {
    protected $name;
    protected $age;
    protected $gender;

    public function __construct($name, $age, $gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function displayInfo() {
        echo "Name: " . $this->name . ", Alter: " . $this->age . ", Geschlecht: " . $this->gender . "<br>";
    }
}

class Student extends Person {
    protected $studentID;
    protected $course;

    public function __construct($name, $age, $gender, $studentID, $course) {
        parent::__construct($name, $age, $gender);
        $this->studentID = $studentID;
        $this->course = $course;
    }

    public function displayInfo() {
        parent::displayInfo();
        echo "Studenten-ID: " . $this->studentID . ", Kurs: " . $this->course . "<br>";
    }
}

class Teacher extends Person {
    protected $teacherID;
    protected $subject;

    public function __construct($name, $age, $gender, $teacherID, $subject) {
        parent::__construct($name, $age, $gender);
        $this->teacherID = $teacherID;
        $this->subject = $subject;
    }

    public function displayInfo() {
        parent::displayInfo();
        echo "Lehrer-ID: " . $this->teacherID . ", Fach: " . $this->subject . "<br>";
    }
}

// Erstelle Objekte und rufe displayInfo() auf
$person = new Person("Max", 30, "männlich");
$person->displayInfo();

$student = new Student("Anna", 20, "weiblich", 12345, "Informatik");
$student->displayInfo();

$teacher = new Teacher("Henry", 40, "männlich", 54321, "Mathematik");
$teacher->displayInfo();
?>
