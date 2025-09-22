<?php

require __DIR__.'/../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as DB;

// Database configuration
$config = [
    'driver'    => 'mysql',
    'host'      => '127.0.0.1',
    'database'  => 'brgy_web',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix'    => '',
];

try {
    $db = new DB;
    $db->addConnection($config);
    $db->setAsGlobal();
    $db->bootEloquent();

    // Test the connection
    $pdo = $db->connection()->getPdo();
    
    // Get tables in the database
    $tables = $db->select('SHOW TABLES');
    
    echo "✅ Successfully connected to the database.\n";
    echo "📊 Database: brgy_web\n";
    echo "📋 Tables:\n";
    
    if (empty($tables)) {
        echo "No tables found in the database.\n";
    } else {
        foreach ($tables as $table) {
            $tableName = reset($table);
            echo "- $tableName\n";
        }
    }
    
} catch (\Exception $e) {
    echo "❌ Connection failed: " . $e->getMessage() . "\n";
    echo "Error code: " . $e->getCode() . "\n";
}
