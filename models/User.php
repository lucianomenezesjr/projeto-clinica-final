<?php

require_once '../config/database.php';

class User {
    private $conn;
    private $table_name = "users";


    public $name;
    public $birth_date;
    public $user_type;
    public $telephone;
    public $email;
    public $biological_sex;
    public $email_confirmation;
    public $street;
    public $password;
    public $number;
    public $password_confirmation;
    public $neighborhood;
    public $alergies;
    public $diseases;
    public $medicine;

    

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function save() {
        $query = "INSERT INTO " . $this->table_name . " (name, birth_date, user_type, telephone, email, biological_sex, email_confirmation, street, password, number, password_confirmation, neighborhood, alergies, diseases, medicine) VALUES (:name, :birth_date, :user_type, :telephone, :email, :biological_sex, :email_confirmation, :street, :password, :number, :password_confirmation, :neighborhood, :alergies, :diseases, :medicine)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':birth_date', $this->birth_date);
        $stmt->bindParam(':user_type', $this->user_type);
        $stmt->bindParam(':telephone', $this->telephone);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':biological_sex', $this->biological_sex);
        $stmt->bindParam(':email_confirmation', $this->email_confirmation);
        $stmt->bindParam(':street', $this->street);
        $stmt->bindParam(':password', $this->password);
        $stmt->bindParam(':number', $this->number);
        $stmt->bindParam(':password_confirmation', $this->password_confirmation);
        $stmt->bindParam(':neighborhood', $this->neighborhood);
        $stmt->bindParam(':alergies', $this->alergies);
        $stmt->bindParam(':diseases', $this->diseases);
        $stmt->bindParam(':medicine', $this->medicine);


        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
