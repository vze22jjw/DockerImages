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
        $sql = "
            create table couples (
                id serial primary key,
                man varchar(50),
                woman varchar(50)
            );
            insert into couples (man, woman) values ('nick', 'chanie');
            insert into couples (man, woman) values ('pixel', 'cookie');
        ";
        $db->beginTransaction();
        $db->exec($sql);
        $db->commit();
        die('application installed');
    }
    die('application already installed');
} catch (Exception $e) {
    echo $e->getMessage();
}