<?php

class ProductTemplate {
    
    public $category;

    public $brand;

    public $whichAnimal;

    public $price;

    public function __construct($_category, $_whichAnimal) {
        $this->category = $_category;
        $this->whichAnimal = $_whichAnimal;
    }

    public function getInfo() {
        return "Categoria: $this->category <br> 
                Marca: $this->brand <br> 
                Destinato a: $this->whichAnimal <br> 
                Prezzo: $this->price euro<br>
                <br>
                <br>";
    }
}
?>
        

    