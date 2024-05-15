<?php

//Class constuctor 생성자 

// Fruit 클래스는 두 개의 속성(name과 color)과 
// 두 개의 메소드(get_name과 get_color)를 가지고 있음. 생성자는 객체가 생성될 때 호출되며, 
// 전달된 매개변수를 사용하여 속성을 초기화. 객체 생성 시 new Fruit("사과", "빨강색")와 같이 생성자를 호출하고, 
// 해당 객체의 속성을 설정.
// 이와 같은 방식으로 생성자를 사용하면, 
// 객체 생성과 동시에 필요한 초기화 작업을 간편하게 처리할 수 있음.
class Fruit{

    public $name;
    public $color;

    //생성자 constuctor
    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }   

    function get_name(){
         return $this->name;
    }

    function get_color(){
        return $this->color;
    }
}

$apple = new Fruit("사과" , "빨강색");
$banana = new Fruit("바나나", "노란색");

echo "이 과일의 이름은 " . $apple->get_name() . "이며" . " 색깔은 ". $apple->get_color() . "입니다.";
echo "<br>";
echo "이 과일의 이름은 " . $banana->get_name() . "이며" . " 색깔은 " . $banana->get_color() ."입니다";