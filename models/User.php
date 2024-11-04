<?php

require_once '../config/database.php';

class User
{
    private $conn;
    private $table_name = "users";

    public $id;
    public $name;
    public $birth_date;
    public $user_type;
    public $telephone;
    public $email;
    public $health_care;
    public $biological_sex;
    public $email_confirmation;
    public $street;
    public $password;
    public $number;
    public $password_confirmation;
    public $neighborhood;
    public $allergies;
    public $diseases;
    public $medicine;



    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function save()
    {
        $query = "INSERT INTO " . $this->table_name . " (name, birth_date, user_type, telephone, email, health_care, biological_sex, email_confirmation, street, password, number, password_confirmation, neighborhood, allergies, diseases, medicine) VALUES (:name, :birth_date, :user_type, :telephone, :email, :health_care, :biological_sex, :email_confirmation, :street, :password, :number, :password_confirmation, :neighborhood, :allergies, :diseases, :medicine)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':birth_date', $this->birth_date);
        $stmt->bindParam(':user_type', $this->user_type);
        $stmt->bindParam(':telephone', $this->telephone);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':health_care', $this->health_care);
        $stmt->bindParam(':biological_sex', $this->biological_sex);
        $stmt->bindParam(':email_confirmation', $this->email_confirmation);
        $stmt->bindParam(':street', $this->street);
        $stmt->bindParam(':password', $this->password);
        $stmt->bindParam(':number', $this->number);
        $stmt->bindParam(':password_confirmation', $this->password_confirmation);
        $stmt->bindParam(':neighborhood', $this->neighborhood);
        $stmt->bindParam(':allergies', $this->allergies);
        $stmt->bindParam(':diseases', $this->diseases);
        $stmt->bindParam(':medicine', $this->medicine);


        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function getAll()
    {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getEmailAndPasswordUser($email, $password){

        $query = "SELECT user_type FROM " . $this->table_name . " WHERE email = :email AND password = :password";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Retorna o tipo de usuário ou null se não encontrado
        return $result ? $result['user_type'] : null;
    }

    // Método para buscar um usuário pelo ID
    public function getById($id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Método para atualizar um usuário
    public function update() {
        $query = "UPDATE " . $this->table_name . " SET name = :name, birth_date = :birth_date, user_type = :user_type, telephone = :telephone, email = :email, health_care = :health_care, biological_sex = :biological_sex, email_confirmation = :email_confirmation, street = :street, password = :password, number = :number, password_confirmation = :password_confirmation, neighborhood = :neighborhood, allergies = :allergies, diseases = :diseases, medicine = :medicine, WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':birth_date', $this->birth_date);
        $stmt->bindParam(':user_type', $this->user_type);
        $stmt->bindParam(':telephone', $this->telephone);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':health_care', $this->health_care);
        $stmt->bindParam(':biological_sex', $this->biological_sex);
        $stmt->bindParam(':email_confirmation', $this->email_confirmation);
        $stmt->bindParam(':street', $this->street);
        $stmt->bindParam(':password', $this->password);
        $stmt->bindParam(':number', $this->number);
        $stmt->bindParam(':password_confirmation', $this->password_confirmation);
        $stmt->bindParam(':neighborhood', $this->neighborhood);
        $stmt->bindParam(':allergies', $this->allergies);
        $stmt->bindParam(':diseases', $this->diseases);
        $stmt->bindParam(':medicine', $this->medicine);

        return $stmt->execute();
    }
}
