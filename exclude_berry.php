<?php
    require_once 'app\Entity\berry.php';
    use \app\Entity\Berry;

    require_once 'app/Entity/seed.php';
    use \app\Entity\Seed;

    $seeds = Seed::getSeeds();
    
    if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
        header('location: index.php?status=error');
        exit;
    }
    
    $objBerry = Berry::getBerry($_GET['id']);
    
    if(!$objBerry instanceof Berry){
        header('location: index.php?status=error');
        exit;
    }

    if(isset($_POST['excluir'])){
        
        $objBerry->excluir();

        header('location: index.php?status=success');
    }

    include __DIR__ . '/includes/header.php';
    include __DIR__ . '/includes/confirm-exclusao_berry.php';
    include __DIR__ . '/includes/footer.php';

?>
