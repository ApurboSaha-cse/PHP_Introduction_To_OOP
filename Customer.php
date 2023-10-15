<?php
class Customer{

    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;

    // Constructor
    public function __construct(int $id, string $firstName, string $lastName, string $email){
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    //The getter methods
    public function getId(): int{
        return $this->id;
    }

    public function getFirstName(): string{
        return $this->firstName;
    }

    public function getLastName(): string{
        return $this->lastName;
    }

    public function getEmail(): string{
        return $this->email;
    }

    //The setter methods
    public function setId($id){
        $this->id = $id;
    }

    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }

    public function setLastName($lastName){
        $this->lastName = $lastName;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    // Implement the magic method: __toString()
    public function __toString(){
        $details=
        "</br>ID: ".$this->id.
        "</br>First Name: ".$this->firstName.
        "</br>Last Name: ".$this->lastName.
        "</br>Email: ".$this ->email;

        return $details;
    }

    // Implement the method: __call()
    public function __call($method, $value){
        return "This method doesn't exits.";
    }

    // Implement the method: __get()
    public function __get($var_name){
        if(property_exists(__CLASS__, $var_name)){
            return $this->{$var_name};
        }
        return "\nThis property doesn't exist.";
    }

    // Implement the method: __set()
    public function __set($var_name, $value){
        if(property_exists(__CLASS__, $var_name)){
            $this->{$var_name} = $value;
        }
        return "\nThis property doesn't exist.";
    }
}

