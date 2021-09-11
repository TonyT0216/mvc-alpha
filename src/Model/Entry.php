<?php

namespace App\Model;

use PDO;
use PDOException;

class Entry extends Model
{
    public static function getAll()
    {
        try {
            $db = static::getDb();
            $stmt = $db->query('SELECT id, title, content FROM entries ORDER BY created_at');
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}