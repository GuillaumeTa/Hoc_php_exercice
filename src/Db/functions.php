<?php
require_once __DIR__ . '/../../config/db.php';

/**
 * Undocumented function
 *
 * @param string $dsn
 * @param string $user
 * @param string $pass
 * @return PDO
 * @throws PDOException thrown if connection failed
 */
function getPdoInstance(string $dsn = DSN, string $user = USER, string $pass = PASS): PDO {
    try {
        $pdo = new PDO($dsn, $user, $pass);
    } catch (PDOException $e) {
        throw $e;
    }
    return $pdo;
}