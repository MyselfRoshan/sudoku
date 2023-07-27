<?php

namespace Database;

use PDO;
use PDOException;
use Exception;

class Database
{
    protected $con = null;
    /**
     * Contructor that establishes connection with database
     */
    public function __construct()
    {
        try {
            $dsn = "mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME;
            $dsn = "mysql:host=172.23.0.5;dbname=sudoku_db";
            // $dsn = "mysql:host=172.23.0.5;port=9906;dbname=sudoku_db";
            // dd($dsn);
            $options =
                [
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ];

            $this->con = new PDO($dsn, DB_USERNAME, DB_PASSWORD, $options);
            // dd(new PDO($dsn, DB_USERNAME, DB_PASSWORD, $options));
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }
    }

    /**
     * Method to select row/s from database
     */
    static public function select($query = "", $params = [])
    {
        try {
            $stmt = Database::prepareBindAndExecute($query, $params);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $stmt = null;

            return $result;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Method to insert a new row in database
     */
    static public function insert($query = "", $params = [])
    {
        try {
            $stmt = Database::prepareBindAndExecute($query, $params);
            $result = $stmt->rowCount();
            $stmt = null;

            return $result;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Method to update a row in database
     */
    static public function update($query = "", $params = [])
    {
        try {
            $stmt = Database::prepareBindAndExecute($query, $params);
            // $result = $stmt->rowCount();
            $stmt = null;

            return true;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Method to delete a row from database
     */
    static public function delete($query = "", $params = [])
    {
        try {
            $stmt = Database::prepareBindAndExecute($query, $params);
            $result = $stmt->rowCount();
            $stmt = null;

            return $result;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Method to prepare, bind and execute the query
     */
    private function prepareBindAndExecute($query = "", $params = [])
    {
        try {
            $stmt = $this->con->prepare($query);

            if ($stmt === false) {
                throw new PDOException("Unable to prepare the statement.");
            }

            if (count($params) > 0) {
                foreach ($params as $key => $value) {
                    $stmt->bindParam($key, $value[0], $value[1]);
                }
            }

            $stmt->execute();
            return $stmt;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }
    }
}
