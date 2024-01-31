<?php 
    // Definisco la classe prodotti
    class Prodotto{
        public $titolo;
        public $costo;
        public $foto;
        public $tipo;
        public $animale;

        function __construct($titolo, $costo , $foto, $tipo, $animale){
            $this->titolo = $titolo;
            $this->costo = $costo;
            $this->foto = $foto;
            $this->tipo = $tipo;
            $this->animale = $animale;
        }
    }

    // Consistenza del mangiare
    class Cibo extends Prodotto{
        public $consistenza;

        function __construct($titolo, $costo , $foto, $tipo, $animale, $consistenza){
            parent::__construct($titolo, $costo, $foto, $tipo, $animale);
            $this->consistenza = $consistenza;
        }
    }

    // Materiale e colore
    class MaterialeColore extends Prodotto{
        public $materiale;
        public $colore;

        function __construct($titolo, $costo , $foto, $tipo, $animale, $materiale, $colore){
            parent::__construct($titolo, $costo, $foto, $tipo, $animale);
            $this->materiale = $materiale;
            $this->colore = $colore;
        }
    }

    $Royal_canin =new Cibo ("Royal Canin Mini Adult", 40.99 , "https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000", "alimentare","cani","croccantini secchi" );
    $Almo_nature_holistic =new Cibo ("Almo Nature Holistic Maintenance Medium Large Tonno e Riso", 38.99 , "https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg", "alimentare","cani","croccantini secchi" );
    $Almo_nature_cat =new Cibo ("Almo Nature Cat Daily Lattina", 1.27 , "https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg", "alimentare","gatti","croccantini secchi" );
    $Mangime_per_pesci =new Cibo ("Mangime per Pesci Guppy in Fiocchi", 3.41 , "https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg", "alimentare","pesci","fiocchi" );
    $Voliera_wilma =new MaterialeColore ("Voliera Wilma in Legno", 346.00, "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg", "gabbia", "uccelli", "legno", "marrone chiaro");
    $Cartucce_filtranti =new Prodotto ("Cartucce Filtranti per Filtro EasyCrystal", 5.50, "https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg", "cartucce", "pesci");
    $Kong_classic =new MaterialeColore ("Kong Classic", 8.99, "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg", "gioco", "cani", "plastica", "rosso");
    $Topini_di_peluche =new MaterialeColore ("Topini di peluche Trixie", 5.00, "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg", "gioco", "gatti", "morbido peluche", "griggio");

    $prodotti = [
        $Royal_canin,
        $Almo_nature_holistic,
        $Almo_nature_cat,
        $Mangime_per_pesci,
        $Voliera_wilma,
        $Cartucce_filtranti,
        $Kong_classic,
        $Topini_di_peluche
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>OOP Shop</title>
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>OOP Shop</h1>
                </div>

                <div class="d-flex flex-wrap justify-content-center">
                    <?php  foreach ($prodotti as $prodotto) {?>
                    <div class="col-auto m-3">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo $prodotto->foto ?>" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title text-center"><?php echo $prodotto->titolo ?></h5>
                                <h6 class="text-center">(<?php echo $prodotto->tipo?>)</h6>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Adatto a: <?php echo $prodotto->animale?></li>
                                <li class="list-group-item">Il prezzo è di <?php echo $prodotto->costo?>€</li>
                                <!-- <li class="list-group-item"><?php echo $prodotto->consistenza?></li> -->

                              
                            </ul>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </div>
       
    </div>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="./js/script.js"></script>
</body>
</html>