<?php
#1 클래스 만들기

// class : 클래스 -> 템플릿 -> 붕어빵틀(붕어빵 틀을 가지고 있으면)

// object : 객체 -> 인스턴스 -> 붕어빵(팥붕, 슈붕 여러가지 붕어빵 찍어낼 수 있음)

// 자동차 클래스가 있다면 -> 여러가지 k3, k5등등의 차를 만들어낼 수 있고  
// 가속, 브레이크 등등의 기능(메소드)을 인스턴스로 만들 수 있음

class Fruit {
    //속성(멤버변수) Properties
    private $name;
    public $color;

    //메소드(멤버함수) Methods
    function set_name($name) { 
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }

    function set_color($color) {
        $this->color = $color;
    }

    function get_color() {
        return $this->color;
    }
}

$apple = new Fruit();
$banana = new Fruit();

$apple ->set_name('Apple');
// Apple이 get_name에서 호출되었고 set_name으로 들어가서 
// public $name에 저장됨 그리고 저장되어 프러퍼티가 출력이 됨 
$banana -> set_name('Banana');

echo $apple->get_name();  // pirvate 일 때는 반드시 메소드를 통해서 접근해야 함  
echo '<br>';
echo $banana->get_name();

$appleColor = New Fruit();
$bananaColor = New Fruit();

$appleColor->set_color('Red');
$bananaColor->set_color('Yellow');

echo "<br>";
echo "<br>";

echo $appleColor->get_color();
echo "<br>";
echo $bananaColor->get_color();

echo "<br>";
echo "<br>";
// echo $banana->name; // 다이렉트로 접근 이거는 public이어야 가능 