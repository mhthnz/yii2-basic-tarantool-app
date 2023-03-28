<?php
$host = getenv("TARANTOOL_HOST");
if (!$host) {
    $host = 'localhost:3301';
}
return [
    'class' => \mhthnz\tarantool\Connection::class,
    'dsn' => 'tcp://guest@'.$host.'/?connect_timeout=5&max_retries=3',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
