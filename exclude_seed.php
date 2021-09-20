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

if(isset($_POST['excluir'])){  

    $objSeed->excluir();

    header('location: index.php?status=success');
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/confirm-exclusao_seed.php';
include __DIR__ . '/includes/footer.php';

?>
