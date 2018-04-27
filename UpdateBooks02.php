<?php

namespace App;

/**
 * PHP SQLite Update Demo
 */
class BooksUpdate {

    /**
     * PDO object
     * @var \PDO
     */
    private $pdo;

    /**
     * Initialize the object with a specified PDO object
     */
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    /**
     * Mark a task specified by the task_id completed
     * @param type $taskId
     * @param type $completedDate
     * @return bool true if success and falase on failure
     */
    public function updateBook($ID, $tytul, $autor) {
        // SQL statement to update status of a task to completed
        $sql = "UPDATE ksiazki_arkonska "
                . "SET tytul = :tytul, "
                . "autor = :autor, "
                . "WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);

        // passing values to the parameters
        $stmt->bindValue(':id', $id);
        $stmt->bindValue(':tytul', $tytul);
        $stmt->bindValue(':autor', $autor);

        // execute the update statement
        return $stmt->execute();
    }
}

class MySQLConnection {
    /**
     * PDO instance
     * @var type
     */
    private $pdo;

    /**
     * return in instance of the PDO object that connects to the SQLite database
     * @return \PDO
     */
    public function connect() {
        if ($this->pdo == null) {
            $this->pdo = new \PDO('mysql:host=localhost;dbname=test', $user, $pass);
        }
        return $this->pdo;
    }
}


$pdo = (new MySQLConnection())->connect();
$sqlite = new BooksUpdate($pdo);

// mark task #2 as completed
$taskId = 2;
$result = $sqlite->completeTask($taskId, '2016-05-02');

if ($result)
    echo 'Task #$taskId has been completed';
else
    echo 'Whoops, something wrong happened.';

?>
