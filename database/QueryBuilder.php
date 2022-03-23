<?php
declare(strict_types=1);

class QueryBuilder
{
//  constructor property promotion
    public function __construct(protected PDO $pdo)
    {
    }
    public function selectAll(string $table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
    }
}