<?php

require_once '../config/database.php';

class Consulta {
    private $conn;
    private $table_name = "consultas";

    public $id;
    public $medico_escolhido;
    public $unidades_clinicas;
    public $data;
    public $horario;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    // Método para salvar um livro
    public function save() {
        $query = "INSERT INTO " . $this->table_name . " (medico_escolhido, unidades_clinicas, data, horario) VALUES (:medico_escolhido, :unidades_clinicas, :data, :horario)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':medico_escolhido', $this->medico_escolhido);
        $stmt->bindParam(':unidades_clinicas', $this->unidades_clinicas);
        $stmt->bindParam(':data', $this->data);
        $stmt->bindParam(':horario', $this->horario);

        return $stmt->execute();
    }

    public function getAll()
    {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    

    
}
