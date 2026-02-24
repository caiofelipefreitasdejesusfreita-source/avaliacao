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

    //dentro da cllasse
        public function marca(){
            $this -> marca = "Uno";
            echo "A marca do carro é: " . $this->marca . "<br>";
        }

        public function modelo(){
            $this -> modelo = 'Com escada';
            echo "O modelo do seu carro é: ". $this -> modelo . "<br>";
        }

        public function ano(){
            $this -> ano = '1988';
            echo "O ano do seu carro é: ". $this -> ano . "<br>";
        }

        public function cor(){
            $this -> cor = 'verde';
            echo "A cor do seu carro é: ". $this -> cor . "<br>";
        }
    }

    //fora da classe

    // objeto
    $meuCarro = new Carro();

    // metodos
    $meuCarro->acelerar();
    $meuCarro->acelerar();
    $meuCarro->frear();

    $meuCarro->marca();
    $meuCarro->modelo();
    $meuCarro->ano();
    $meuCarro->cor();

    ?>
</body>
</html>