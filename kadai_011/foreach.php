<!DOCTYPE html>
<html lang1="ja">
   <head>
    <meta charset=utf-8>
    <title>php基礎編</title>
   </head> 
   <body>
    <p>
        <?php
        $user_names=[
            '名前'=>'たまねぎ',
            '値段'=>'200',
            '産地'=>'北海道'
        ];
        foreach($user_names as $key=>$value){
            echo"{$key}:{$value}<br>";
        }
        ?>
    </p>
   </body>
</html>