<?php

class UpdateBooks {

    const DB_HOST = 'localhost';
    const DB_NAME = 'biblioteka';
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
            $this->pdo = new PDO('mysql:host=localhost;dbname=biblioteka', self::DB_USER, self::DB_PASSWORD);
        } catch (PDOException $e) {
            echo "not workind demet";
            die($e->getMessage());
        }
        var_dump($pdo);
    }


    /*
    try {
    $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
    foreach($dbh->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
    $dbh = null;
    } catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
    }
    */

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


        $sql = 'UPDATE ksiazki_arkonska
                    SET tytul = :tytul,
                        autor = :autor,
                        data = :data,
                        wydawnictwo = :wydawnictwo,
                        isbn = :isbn,
                        gatunek = :gatunek,
                        lokalizacja = :lokalizacja
                  WHERE ID = :ID';

        $query = $this->pdo->prepare($sql);

        return $query->execute($ksiazka);
    }

    /**
     * close the database connection
     */
    public function __destruct() {
        // close the database connection
        $this->pdo = null;
    }

}
$obj = new UpdateBooks();

if ($obj->update(13, 'test04',
                    'test04',
                    'test04',
                    'test04',
                    'test04',
                    'test04',
                    'test04') !== false)
    echo 'The task has been updated successfully';
else
    echo 'Error updated the task';
