<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ShowDatabase extends Command
{
    protected $signature = 'db:show-info';
    protected $description = 'Show database information without using performance_schema';

    public function handle()
    {
        try {
            // Get database name
            $database = DB::connection()->getDatabaseName();
            $this->info("📊 Database: $database\n");

            // Get all tables
            $tables = DB::select('SHOW TABLES');
            
            if (empty($tables)) {
                $this->warn('No tables found in the database.');
                return;
            }

            // Display tables and their row counts
            $this->info("📋 Tables:");
            $tableData = [];
            
            foreach ($tables as $table) {
                $tableName = array_values((array)$table)[0];
                $rowCount = DB::table($tableName)->count();
                $tableData[] = [
                    'Table' => $tableName,
                    'Rows' => $rowCount,
                    'Size' => $this->getTableSize($tableName)
                ];
            }
            
            $this->table(['Table', 'Rows', 'Size'], $tableData);
            
        } catch (\Exception $e) {
            $this->error("Error: " . $e->getMessage());
        }
    }
    
    protected function getTableSize($tableName)
    {
        try {
            $result = DB::select("SELECT 
                ROUND(((data_length + index_length) / 1024 / 1024), 2) AS 'Size (MB)'
                FROM information_schema.TABLES 
                WHERE table_schema = ? 
                AND table_name = ?", 
                [DB::connection()->getDatabaseName(), $tableName]
            );
            
            return !empty($result) ? $result[0]->{'Size (MB)'} . ' MB' : 'N/A';
        } catch (\Exception $e) {
            return 'N/A';
        }
    }
}
