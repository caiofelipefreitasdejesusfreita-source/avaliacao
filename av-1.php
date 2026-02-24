<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
 
Class Carro {

    public $marca;
    public $modelo;
    public $ano;
    public $cor;
    public $velocidade = 0;

    public function acelerar(){
        $this->velocidade += 10;
        echo "O carro acelerpu. Veloidade: "
        . $this->velocidade . "km/h <br>";
    }
    
    public function frear(){
        if($this->velocidade >= 10){
            $this->velocidade -= 10;
        }
        echo "O carro freou. Velocidade: "
        . $this->velocidade . "km/h <br>";
    }
    
}
    // objeto
    $meuCarro = new Carro();

    // metodos
    $meuCarro->acelerar();
    $meuCarro->acelerar();
    $meuCarro->frear();

    ?>
</body>
</html>