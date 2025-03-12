<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php

    class Food
    {
        private $name;
        private $price;

        public function __construct($name, $price)
        {
            $this->name = $name;
            $this->price = $price;
        }

        public function show_price()
        {
            echo $this->price . PHP_EOL;
        }
    }

    class Animal
    {
        private $name;
        private $height;
        private $weight;

        public function __construct($name, $height, $weight)
        {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }

        public function show_height()
        {
            echo $this->height . PHP_EOL;
        }
    }

    // インスタンスの作成とメソッドの呼び出し
    $food = new Food("potato", 250);
    $food->show_price(); // 250

    $animal = new Animal("dog", 60, 5000);
    $animal->show_height(); // 60

    ?>
</body>

</html>