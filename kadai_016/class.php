<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="discription"content="クラスを2つ作ってそれぞれのインスタンスを出力しよう">
     <title>課題16</title>
 </head>

 <body>
    <p>
        <?php

        class Food{
            private $name;
            private $price;
        
        public function show_price(){
            echo $this->price.'<br>';
        }

        public function __construct(string $name,int $price){
            $this->name = $name;
            $this->price = $price;
        }
        }
        $Food = new Food('potato',250);

        
        class Animal{
            private $name;
            private $height;
            private $weight;

        public function show_height(){
            echo $this->height.'<br>';
        }

        public function __construct(string $name,int $height,int $weight){
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }
        }

        $Animal = new Animal('dog',60,5000);

        print_r($Food);

        print_r($Animal);

        $Food->show_price();

        $Animal->show_height();

        ?>
    </p>
 </body>
    </html>