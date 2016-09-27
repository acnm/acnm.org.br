<?php

namespace Application\Core;

/**
 * Class Config
 * @package Application
 */
class Config
{
    public static $site_url = '';
    public static $db_host = "104.236.170.225";
    public static $db_name = "acnm";
    public static $db_user = "acnm";
    public static $db_pwrd = "V7ag)#%MYa";
    public static $encryption_cost = 11;
    public static $encryption_salt = "marcelomadeira_niguacu";
    public static $default_controller = "home";
    public static $default_action = "index";
    public static $htaccess_param = "p";
    public static $log_directory = "/var/www/html/acnm.org.br/Application/logs";
    public static $upload_directory = "/var/www/html/acnm.org.br/uploads";
    public static $upload_max_file_size = 5 * (1024 * 1024);

    public static function getEnvironmentValues()
    {
        Config::$site_url = getenv('SITE_URL');
        Config::$db_host = getenv('DB_HOST');
        Config::$db_name = getenv('DB_NAME');
        Config::$db_user = getenv('DB_USER');
        Config::$db_pwrd = getenv('DB_PASS');
        Config::$encryption_cost = getenv('ENC_COST');
        Config::$encryption_salt = getenv('ENC_SALT');

    }
}