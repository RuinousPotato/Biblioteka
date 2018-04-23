<?php

class UpdateDataDemo {

    const DB_HOST = 'localhost';
    const DB_NAME = 'Biblioteka';
    const DB_USER = 'root';
    const DB_PASSWORD = 'root123';

    /**
     * PDO instance
     * @var PDO
     */
    private $pdo = null;

    /**
     * Open the database connection
     */
    public function __construct() {
        // open database connection
        $connStr = sprintf("mysql:host=%s;dbname=%s", self::DB_HOST, self::DB_NAME);
        try {
            $this->pdo = new PDO($connStr, self::DB_USER, self::DB_PASSWORD);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    /**
     * Update an existing task in the tasks table
     * @param string $subject
     * @param string $description
     * @param string $startDate
     * @param string $endDate
     * @return bool return true on success or false on failure
     */

    public function update($ID, $tytul, $autor, $data, $wydawnictwo, $isbn, $gatunek, $lokalizacja) {
        $ksiazka = [
            ':ID' => $ID,
            ':tytul' => $tytul,
            ':autor' => $autor,
            ':data' => $data,
            ':wydawnictwo' => $wydawnictwo,
            ':isbn' => $isbn,
            ':gatunek' => $gatunek,
            ':lokalizacja' => $lokalizacja];


        $sql = 'UPDATE tasks
                    SET tytul = :tytul,
                         autor  = :autor,
                         data    = :data,
                         wydawnictwo    = :wydawnictwo,
                         isbn    = :isbn,
                         gatunek    = :gatunek,
                         lokalizacja = :lokalizacja
                  WHERE ID = :ID';

        $q = $this->pdo->prepare($sql);

        return $q->execute($task);
    }

    /**
     * close the database connection
     */
    public function __destruct() {
        // close the database connection
        $this->pdo = null;
    }

}

$obj = new UpdateDataDemo();

if ($obj->update(2, 'MySQL PHP Update Tutorial',
                    'MySQL PHP Update using prepared statement',
                    '2013-01-01',
                    '2013-01-01') !== false)
    echo 'The task has been updated successfully';
else
    echo 'Error updated the task';
