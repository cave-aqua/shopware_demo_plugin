<?php

namespace SwagStartup\Services;

use Doctrine\DBAL\Connection;

class ProductNameService{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getProductNames(){
        $queryBuilder = $this->connection->createQueryBuilder();

        $result = $queryBuilder->select(['name'])->from('s_articles')->setMaxResults(20);

        return $result->execute()->fetchAll(\PDO::FETCH_COLUMN);
    }
}
