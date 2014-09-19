<?php

try {

    $dns = sprintf(
        'pgsql:host=%s;port=%d;dbname=%s;user=%s;password=%s',
        (getenv(POSTGRES_PORT_5432_TCP_ADDR) ? getenv(POSTGRES_PORT_5432_TCP_ADDR) : 'localhost'),
        5432,
        'nickdb',
        'nick',
        '1234'
    );

    $db = new PDO($dns);
    $couples = $db->query('SELECT * FROM couples');
    if (!$couples) {
        throw new Exception('no couples table');
    }
    ?>

    <?php foreach ($db->query('SELECT * FROM couples') as $row): ?>
        <div>
            male: <span><?= $row['man'] ?></span>
            woman: <span><?= $row['woman'] ?></span>
        </div>
    <?php endforeach; ?>

<?php
} catch (Exception $e) {
    echo $e->getMessage();
}