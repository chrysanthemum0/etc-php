<?php

//OOP 

// Access Modifiers 

//public : 기본 값 언제든지 어디서든 접근 가능 
// protected : 외부 접근은 차단, 내부에서 접근, 파생된 클래스 혹은 상속 받은 클래스에서 접근 가능 
// private : 제한적인 형태 / 외부, 파생클래스 접근 불가 *오로지 자체 클래스에서만 접근 가능 

class Fruit {
    
    protected $name;
    protected $color;
    protected $weight;


    public function set_name ($name) {
        $this->name = $name;
        $this->color = "노랑 "; // 오류 안남
    }

    protected function set_color($color) {
        $this->color = $color;
    }

    private function set_weight ($weight) {
        $this->weight = $weight;
    }
}

$mango = new Fruit();

$mango->set_name("망고");
//$mango->set_color("Yellow"); // 오류 
//$mango->set_weight(30); // 오류 