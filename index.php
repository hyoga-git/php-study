<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-studyy</title>
</head>
<body>
    <header>
    <h2>PHP-Study</h2>
    </header>
    <main>

<section id="one">
    <h3>ONE</h3>
   <p><?php echo "hello-PHP"; ?></p>
    <!-- 文字を出力する console.logと同じ -->
    
    <p><?php echo PHP_INT_MAX; ?></p>
    

    <?php
    // 一次元配列
    $Hairetu=array($String="文字です",$Int=30,$Boolean="日本語");
    var_dump($Hairetu); 
    // var_dumpの出力結果はarray(3) { [0]=> string(12) "文字です" [1]=> int(30) [2]=> string(9) "日本語" } 型から構造まで求めれる
    // これら数字は一つ3バイトなので　文字です＝4文字×3で12となる
    // これが一次元配列:配列の中に配列が入っている場合多次元配列となる
    ?>

    <?php
    // 多次元配列
        $class1=array("a","b","c");
        $class2=array("d","e","f","g");
        $student=array($class1,$class2);
        var_dump($student);
        echo "<br>";
        echo "<p>ここからはclass2の1番目なのでdが出力される</p>";
        var_dump($class2[0]);
        // HTMLを書く時はechoで出力することを宣言すること　また.は文字列結合演算子
    ?>
    <?php
    //連想配列

    $result=array
    (
        'jp'=>60,
        'math'=>100,
    );

    $result2=
    [
        "jp2"=>65,
        "math2"=>105,
    ];
    echo "<br>";
    var_dump($result2["jp2"]);
    //連想配列は値のキーを自分で決める事が出来る　なので連想しやすい　また任意で決めたキーに代入なので=>を使って代入する
    // $result1はarrayの書き方　$result2は[]での書き方での配列の格納方法なだけ 
    ?>
</section>

<section id=two>
    <h3>TWO</h3>
<form method="post" action="index.php">
    <input type="number" name="value" placeholder="Enter a number">
    <input type="submit" value="Submit">
    <!-- phpでformタグの中でbuttonのsubmitを選択するとそれは送信ボタンになるので送信する為発火することとなる -->
</form>

<?php
if (isset($_POST['value'])) {
    $value = intval($_POST['value']); 
    if ($value >= 10) {
        echo "10以上";
    } else if ($value >= 5) {
        echo "5以上";
    } else {
        echo "5以下";
    }
}
// issetは引数に対して変数の値が設定されている且つnullではない場合trueとなる
?>
<?php

for($i=0; $i<=5; $i++){
    echo "現在の値は".$i."<br>";
}
// forについては5を超えるまでなので注意　しっかりと詳細を決めれるのでよく使われる
?>

<?php

$k=0;
while($k<=5){
    echo $k ."<br>";
    $k++;
    // whileは特定の条件であればずっと行うので使い勝手が悪い
}
?>
</section>

<section class="three">
<h3>THREE</h3>
<?php

function aiueo($a){
    return $a + 10;
}
$rrr = aiueo(2); 
echo $rrr."<br>"; 
echo aiueo(4);
// 関数を発火させても表示がされないことがあるのでechoで呼び出してあげること
?>

<?php
$number = array(1, 2, 3, 4);
foreach ($number as &$value) {
    $value = $value*2;
    echo $value."<br>";
    // foreachについて配列をそれぞれ別の変数に格納するもの　ひとつひとつ取り出して行っていく　これは参照渡しと言われるやり方　
    //  &をつけることでnumber配列の中身を更新させる　1234が2468になる　このように更新したい時に&をしようする
    // $numberをas $valueでvalue変数へそれぞれひとつづつ格納する　つまり一回目のvalueは1で2回目は上書きされて2...となる
}
print_r($number);
unset($value); 
// print_rは配列をechoするもの
// unsetは変数を消去する関数である
?>

<?php

$name=[
    'hi'=>100,
    'hu'=>90,
    'he'=>80,
];
foreach ($name as $key=>$namelist){
    $name[$key]*=0.9;
}
echo "hello0".print_r($name)."<br>";

// foreachは元々の配列　as 次の変数って覚える
?>
</section>

<section class="five">
    <h3>five</h3>
    <?php
    class Human {
        // public等はアクセス修飾子name等はオブジェクト
        // publicは外からでもアクセス可能だがprivateはアクセス不可　基本的にprivate
         public $name;
         private $birthday;
         private $gender;

        public function __construct($name,$birthday,$genter)
        {
            $this->name=$name;
            $this->birthday=$birthday;
            $this->gender=$genter;
            // コンストラクターは初期化でclassで定義したobjを使える様に初期化する
            // this　genterで引数で使える様にしてconstructの引数部分を代入する事で引数として使用することが可能になる

        }

        public function walk(){
            echo '歩く'."</br>";
            echo "{$this->name}は歩きます";
        }


        public function eat(){
            echo '食べる'."</br>";
        }
    };
    $human =new Human('hyoga',1999,01);
    $human ->eat();
    $human ->walk();

    $human1 =new Human('iiiii',1999,01);
    $human1 ->eat();
    $human1->walk();


    ?>

</section>











    </main>
    <footer></footer>












</body>
</html>