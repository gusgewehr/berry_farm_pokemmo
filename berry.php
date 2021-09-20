<?php
    require_once 'app\Entity\berry.php';
    use \app\Entity\Berry;

    require_once 'app/Entity/seed.php';
    use \app\Entity\Seed;

    $seeds = Seed::getSeeds();
    

    $objBerry = new Berry;

    if(isset($_POST['nome'],$_POST['preco'],$_POST['imagem'],$_POST['seed1'],$_POST['seed2'],$_POST['seed3'], )){
        $objBerry->nome = $_POST['nome'];
        $objBerry->preco = $_POST['preco'];
        $objBerry->imagem = $_POST['imagem'];
        $objBerry->seed1 = $_POST['seed1'];
        $objBerry->seed2 = $_POST['seed2'];
        $objBerry->seed3 = $_POST['seed3'];

        $objBerry->cadastrar();

        header('location: index.php?status=success');
    }

    include __DIR__ . '/includes/header.php';
    include __DIR__ . '/includes/berry_forms.php';
    include __DIR__ . '/includes/footer.php';

?>
