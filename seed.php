<?php
require_once 'app\Entity\seed.php';
use \app\Entity\Seed;


$objSeed = new Seed;

if(isset($_POST['nome'],$_POST['preco'],$_POST['imagem'],)){
    $objSeed->nome = $_POST['nome'];
    $objSeed->preco = $_POST['preco'];
    $objSeed->imagem = $_POST['imagem'];
    
    $objSeed->cadastrar();

    header('location: index.php?status=success');
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/seed_forms.php';
include __DIR__ . '/includes/footer.php';

?>
