<?php

namespace SquareConnect;

class TestAccounts
{
    private static $accounts;

    public function __get($name)
    {
        if (is_null(self::$accounts))
        {
            $json = file_get_contents('./travis-ci/accounts.json', FILE_USE_INCLUDE_PATH);
            $json = utf8_encode($json);
            self::$accounts = json_decode($json);
        }
        return self::$accounts->{$name};
    } 
}