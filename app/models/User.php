<?php
/**
 * Created by PhpStorm.
 * User: Mustafa
 * Date: 16.10.2018 г.
 * Time: 15:45
 */

namespace app\models;

use database\BasicDb;

class User extends BasicDb
{
    protected static $table = "Users";
}