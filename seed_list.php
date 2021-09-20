<?php
    require_once 'app/Entity/seed.php';
    use \app\Entity\Seed;

    $seeds = Seed::getSeeds();

    include __DIR__ . '/includes/header.php';
    include __DIR__ . '/includes/seed_list.php';
    include __DIR__ . '/includes/footer.php';
?>