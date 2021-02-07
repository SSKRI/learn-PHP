<?php
ini_set('error_reporting', E_ALL);

//echo $_POST["msg"];
if(isset($_POST)){
    $name=$_POST['msg'] ? $_POST['msg'] : null;
    $name = htmlspecialchars($name);
    $date = date("d M Y");
    //echo strip_tags("$name");
    echo strip_tags("Привет, $name! Сегодня $date.");
  }

/*echo "<br>";
$text = '<p>Параграф.</p><!-- Комментарий --> <a href="#fragment">Ещё текст</a>';
echo strip_tags($text);
echo "\n";*/


/*$a = 'Привет, <a href = "https://www.php.net/manual/ru/function.strip-tags.php">Света</a>!';
echo strip_tags($a);
echo $a;*/






?>