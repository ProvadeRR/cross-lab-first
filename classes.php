<?php
class User
{
    protected $name;
    protected $surname;
    public function __construct($name , $surname) {
        $this->name = $name;
        $this->surname = $surname;
    }
    public function Hello(){
        $hello = [
            "ru" => "Здравствуйте",
        ];
        return $hello;
    }
}
class Client extends User
{
    public function Hello(){
        $hello = [
           "ru" => parent::Hello()['ru']. " Клиент " . $this->name . " " . $this->surname .",вы можете на сайте просматривать информацию доступную пользователям",
        ];
        return $hello;
    }
 }
 class Manager extends User
{
    public function Hello(){
        $hello = [
           "ru" => parent::Hello()['ru']. " Менеджер " . $this->name . " " . $this->surname .",вы можете на сайте изменять,удалять и создавать клиентов",
        ];
        return $hello;
    }

}
 class Admin extends User
 {
      public function Hello(){
         $hello = [
            "ru" => parent::Hello()['ru']. " Администратор " . $this->name . " " . $this->surname .",вы можете на сайте делать все",
         ];
         return $hello;
     }
    
 }

