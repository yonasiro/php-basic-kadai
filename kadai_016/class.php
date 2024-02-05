<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP課題</title>
</head>
<body>
    <p>
        <?php
        class Food {
            public $name;
            public $price;
            public function show_price(int $price) {
                $this->price = 250;
                echo $this->price . '<br>';
            }
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
        }
        $food = new Food('potato' ,250);
        print_r($food);
        echo '<br>';

        class Animal {
            public $name;
            public $height;
            public $weight;
            public function show_height(int $height) {
                $this->height = 60;
                echo $this->height . '<br>';
            }
            public function __construct(string $name, int $height, string $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }
        $animal = new Animal('dog' ,60, 5000);
        print_r($animal);
        echo '<br>';
        ?>
    </p>
</body>
</html>


