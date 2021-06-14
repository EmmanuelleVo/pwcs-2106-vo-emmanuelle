<?php
namespace Models;

class Model
{
    protected $pdo = null;
    protected $table;
    protected $findKey;
    protected $column;

    public function __construct()
    {
        try {
            $connection = new \PDO('sqlite:' . DB_PATH);
            $connection->setAttribute(\PDO::ATTR_ERRMODE,
                \PDO::ERRMODE_EXCEPTION);
            $connection->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE,
                \PDO::FETCH_OBJ);
        } catch (\PDOException $e) {
            die($e->getMessage());
        }

        $this->pdo = $connection;
    }

   /* public function find(string $key): \stdClass
    {
        $request = 'SELECT * FROM ' . $this->table . ' WHERE ' . $this->findKey . ' = :' . $this->findKey;
        $pdoSt = $this->pdo->prepare($request);
        $pdoSt->execute([':' . $this->findKey => $key]);

        return $pdoSt->fetch();
    }*/

    /*public function all(): array
    {
        $request = 'SELECT * FROM ' . $this->table . ' ORDER BY ' . $this->column;
        $pdoSt = $this->pdo->query($request);

        return $pdoSt->fetchAll();

    }*/

}