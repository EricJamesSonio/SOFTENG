<?php

require_once(__DIR__ . '/../db.php');
require_once(__DIR__ . '/../scripts/function.php');

createTable($con, 'supplier', "
    CREATE TABLE supplier (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        info TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )
");

?>
