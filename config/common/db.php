<?php
declare(strict_types=1);

use Yiisoft\Db\Connection\ConnectionInterface;
use Yiisoft\Db\Pgsql\Connection as PgsqlConnection;

/**
 * @var array $params view file params.php
 */

return [
    ConnectionInterface::class => [
        '__class' => PgsqlConnection::class,
        '__construct()' => [
            'dsn' => $params['yiisoft/db-pgsql']['dsn']
        ],
        'setUsername()' => [$params['yiisoft/db-pgsql']['username']],
        'setPassword()' => [$params['yiisoft/db-pgsql']['password']],
    ]
];
