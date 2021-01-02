<?php
declare(strict_types=1);

use Yiisoft\Db\Connection\ConnectionInterface;
use Yiisoft\Db\Mysql\Connection as MySqlConnection;

/**
 * @var array $params view file params.php
 */

return [
    ConnectionInterface::class => [
        '__class' => MySqlConnection::class,
        '__construct()' => [
            'dsn' => $params['yiisoft/db-mysql']['dsn'],
        ],
        'setUsername()' => [$params['yiisoft/db-mysql']['username']],
        'setPassword()' => [$params['yiisoft/db-mysql']['password']],
    ]
];
