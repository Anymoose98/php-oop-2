<?php 
    // Definisco la classe prodotti
    class Prodotto{
        public $titolo;
        public $costo;
        public $foto;
        public $tipo;
        public $animale;

        function __construct($titolo, $costo , $foto){
            $this->titolo = $titolo;
            $this->costo = $costo;
            $this->foto = $foto;
            $this->tipo = $tipo;
            $this->animale = $animale;
        }
    }

    // Consistenza del mangiare
    class Consistenza extends Prodotto{
        public $consistenza;

        function __construct($titolo, $costo , $foto, $tipo, $animale, $consistenza){
            $this->consistenza = $consistenza;
        }
    }

    // Materiale e colore
    class MaterialeColore extends Prodotto{
        public $materiale;
        public $colore;

        function __construct($titolo, $costo , $foto, $tipo, $animale, $materiale, $colore){
            $this->materiale = $materiale;
            $this->colore = $colore;
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>OOP Shop</title>
</head>
<body>
    <h1>Prova</h1>
</body>
</html>