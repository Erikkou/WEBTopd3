<?php

include_once 'Dbh.class.php';
class Shares extends Dbh
{
    public function getAllShares()
    {
        $sql = "SELECT * FROM shares ORDER BY create_date DESC";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createShare($userId, $title, $body, $link)
    {
        $sql = "INSERT INTO shares (user_id, title, body, link, create_date) VALUES (?, ?, ?, ?, NOW())";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$userId, $title, $body, $link]);
    }
}
