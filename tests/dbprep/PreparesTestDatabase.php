<?php
trait PreparesTestDatabase
{
    /**
     * Used for caching the master database migration state.
     *
     * @var boolean
     */
    protected static $masterDbMigrated = false;

    /**
     * Creates and migrates the master database if needed, and copies it to the active database.
     *
     * @return null
     */
    public function prepareDb()
    {
        $masterDbPath        = $this->getDbPath('DB_MASTER_CONNECTION');
        $activeDbPath        = $this->getDbPath('DB_CONNECTION');

        if ( ! static::$masterDbMigrated)
        {
            if ( ! File::exists($masterDbPath))
            {
                touch($masterDbPath);
            }

            $this->migrateDb('DB_MASTER_CONNECTION');

            static::$masterDbMigrated = true;
        }

        File::copy($masterDbPath, $activeDbPath);
    }

    /**
     * Retrieves the file path of a SQLite database from its configuration.
     *
     * @param  string $envKey
     * @return string
     */
    protected function getDbPath($envKey)
    {
        $connectionKey = env($envKey);

        return config("database.connections.{$connectionKey}.database");
    }

    /**
     * Migrates a database.
     *
     * @param  string $envKey
     * @return null
     */
    protected function migrateDb($envKey)
    {
        $connectionKey = env($envKey);

        shell_exec("php artisan migrate --database={$connectionKey}");
    }
}