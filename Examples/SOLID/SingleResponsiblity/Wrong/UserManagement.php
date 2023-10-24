<?php

namespace Examples\SOLID\SingleResponsibility\Wrong;

class UserManagement
{
    public function isRegistered($userName, $password)
    {
        $db = mysql_connect();
        $result = mysql_query("SELECT COUNT(*) FROM `user` WHERE `user.name` = $userName AND `user.password` = $password ", $db);
        $user = mysql_fetch_array($result);
        mysql_close($db);

        if (!$user) {
            file_put_contents("dev.log", "User not registered", FILE_APPEND);
            return false;
        }

        return true;
    }
}
