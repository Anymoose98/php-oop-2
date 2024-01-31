<?php 
    // Definisco la classe prodotti
    class prodotto{
        public $titolo;
        public $costo;
        public $foto;

        function __construct($titolo, $costo , $foto){
            $this->titolo = $titolo;
            $this->costo = $costo;
            $this->foto = $foto;
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