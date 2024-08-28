<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="class">
    <h1>classについて</h1>
    <p>http://localhost/php-study/class.php</p>
<?php

echo "classについて<br>";

class Human {
    public $name;
    public $age;
    public $adress;

    public function __construct($name, $age, $adress) {
        $this->name = $name;
        $this->age = $age;
        $this->adress = $adress;
    }

    public function introduce() {
        echo "私は " . $this->name . " です " . $this->age . " 歳です<br>";
    }
}

$hyoga = new Human("hyoga", 25, "1000番地");
$hyoga->introduce();

class HumanOld extends Human {
    public $job;

    public function __construct($name, $age, $adress, $job) {
        // 親クラスのコンストラクタを呼び出す
        parent::__construct($name, $age, $adress);
        $this->job = $job;
    }

    public function introduceJob() {
        echo "仕事は " . $this->job . " です<br>";
    }
}

$ojisan = new HumanOld("Ojisan", 45, "2000番地", "プログラマー");
$ojisan->introduce(); // 親クラスのintroduceメソッドを呼び出す
$ojisan->introduceJob(); // 自分の仕事を紹介するメソッドを呼び出す
// 継承は親のクラスで定義した関数を実行することができるもの
?>


<?php
/* 商品インターフェース */
interface Product {
    function getSalePrice();
}

/* 食べ物クラス */
class Food implements Product {
    private $price = 100;
    public function getSalePrice() {
        // 3割引
        return $this->price * 0.7;
    }
}

/* 飲み物クラス */
class Drink implements Product {
    private $price = 180;
    public function getSalePrice() {
        // 2割引
        return $this->price * 0.8;
    }
}

$food = new Food();
$drink = new Drink();
//それぞれのインスタンスを配列要素に入れる
$products = array($food, $drink);
//それぞれの価格を表示する
foreach($products as $product) {
    echo "セール価格は".$product->getSalePrice()."円です。\n";
}
?>
</section>
</body>
</html>
