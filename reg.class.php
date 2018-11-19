<?php
class regisration{
    private $name;
    private $email;
    private $password;
    private $confirPassword; //этап проверки формы совпадения паролей
    
    public function __construct(Array $data)
    {
//        $this->name = isset($data['name']) ? $data['name']) : null;
//        $this->email = isset($data['email']) ? $data['email']) : null;
//        $this->password = isset($data['password']) ? $data['password']) : null;
//        $this->confirPassword = isset($data['confirPassword']) ? $data['confirPassword']) : null;
          $this->name = $data['name'];
          $this->email = $data['email'];
          $this->password = $data['password'];
          $this->confirPassword = $data['confirPassword'];
    }
    public function passwordMatch(){
        return $this->password == $this->confirPassword;
    }
    public function validate(){
        return !empty($this->name) && !empty($this->email) && !empty($this->password) && !empty($this->confirPassword) && $this->passwordMatch();
    }
    //Возвращает name
    public function getName()
    {
        return $this->name;
    }
    //Установить name
    public function setName($name)
    {
        $this->name = $name;
    }
    
    
    public function getEmail()
    {
        return $this->email;
    }
    //Установить name
    public function setEmail($email)
    {
        $this->email = $email;
    }

    
    public function getPassword()
    {
        return $this->password;
    }
    //Установить name
    public function setPassword($password)
    {
        $this->password = $password;
    }
}
?>