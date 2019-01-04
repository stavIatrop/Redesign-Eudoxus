<?php  
class User {    

    private $userId;
    private $username;    
    private $email;
    private $password;
    private $category;
    private $categoryId;
    private $uniName;
    private $uniDepartment;

    function __construct($userId) {
        $this->userId = $userId;
    }

    public function getUserId() {

        return $this->userId;
    }


    public function setUserId($userId) {
        $this->userId = $userId;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getEmail() {

        return $this->email;
    }

    public function setEmail($email) {

        $this->email = $email;
    }

    public function getPassword() {

        return $this->password;
    }

    public function setPassword($password) {

        $this->password = $password;
        
    }

    public function getCategory() {

        return $this->category;
    }

    public function setCategory($category) {

        $this->category = $category;
        
    }

    public function getCategoryId() {

        return $this->categoryId;
        
    }

    public function setCategoryId($categoryId) {

        $this->categoryId = $categoryId;
        
    }

    public function getUniName() {

        return $this->uniName;
       
    }

    public function setUniName($uniName) {

        $this->uniName = $uniName;
        
    }

    public function getUniDepartment() {

        return $this->uniDepartment;
        
    }

    public function setUniDepartment($uniDepartment) {
        
        $this->uniDepartment = $uniDepartment;
    }
}

?> 