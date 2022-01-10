<?php 
//dichiaaro la classe people
class People {
    public $name;
    public $age;
    public $code;
    public $bank;

    //rendo accessibili i dati al di fuori
    public function people(){

    }
//imposto la proprietà
    protected function setName($name){
        $this->name=$name;
    }
//visualizzo informazione
    public function getName() {
        return $this->name;
    }

    protected function setAge($age){
        $this->age=$age;
    }

    public function getAge(){
        return $this->age;
    }

    protected function setCode($code){
        $this->code=$code;
    }

    public function getCode(){
        return $this->code;
    }

    protected function setBank($bank){
        $this->bank=$bank;
    }

    public function getBank(){
        return $this->bank;
    }
}

//estendo la classe derivata con ereditarietà
class Cash extends people{

    //definisco un nuovo componente
    private $inheritance;

    public function cash($name, $age, $code, $inheritance, $bank) {
        parent::setName($name);
        parent::setage($age);
        parent::setCode($code);
        $this->setInheritance($inheritance);
        parent::setBank($bank);
    }

    private function setInheritance($inheritance){
        $this->inheritance=$inheritance;
    }

    public function getInheritance(){
        return $this->inheritance;
    }
}

//istanziamo la sottoclasse
$cash = new cash("Ale", 28, "A1L2", "Tantissimi Milioni", "Banca del soldo");

//visualizzo le informazioni
echo "<p>Ciao, sono: ". $cash->getName() . "</p>";
echo "<p>ho: ". $cash->getAge()." anni</p>";
echo "<p>e possiedo: ".$cash->getInheritance() . "</p>";
?>