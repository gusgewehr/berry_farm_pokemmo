<?php
require_once 'app\Entity\seed.php';
use \app\Entity\Seed;

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
}

$objSeed = Seed::getSeed($_GET['id']);

if(!$objSeed instanceof Seed){
    header('location: index.php?status=error');
    exit;
}

if(isset($_POST['nome'],$_POST['preco'],$_POST['imagem'],)){
    $objSeed->nome = $_POST['nome'];
    $objSeed->preco = $_POST['preco'];
    $objSeed->imagem = $_POST['imagem'];
    
    $objSeed->atualizar();

    header('location: index.php?status=success');
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/seed_forms.php';
include __DIR__ . '/includes/footer.php';

?>
