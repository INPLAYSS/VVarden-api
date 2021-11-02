<?php
require_once PROJECT_ROOT_PATH . "/Model/Database.php";

class UserModel extends Database
{
    public function getUsers($userid)
    {
        return $this->select('SELECT * FROM users WHERE userid = ?', ["s", $userid]);
    }
}