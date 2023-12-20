<?php
$pageTitle = 'Капибары';
$infotable = array(
    array('Капибара 1', 'Капибара 2'),
    array('Большая', 'Маленькая'),
    array('Плавает', 'Не плавает'),
);
?>

<!DOCTYPE html>
<html>

<head>
<link href="css/stylePage1.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Martian+Mono&display=swap" rel="stylesheet">
</head>


<body>
	<header>
  <h2><?php echo $pageTitle; ?></h2>
    <nav>
      <a href="#">Главная</a>
      <a href="#">О капибарах</a>
      <a href="<?php  
            $name='Аутентификация';
            $link='phps/auth.php';
            $current_page=true;
            echo $link;
            ?>"<?php
            if ($current_page) echo 'class="selected-menu"'; 
            ?>><?php
            echo $name;
            ?></a>
      <a href="<?php  
            $name='Обратная связь';
            $link='phps/back.php';
            $current_page=true;
            echo $link;
            ?>"<?php
            if ($current_page) echo 'class="selected-menu"'; 
            ?>><?php
            echo $name;
            ?></a>
    </nav>
  </header>
  <div> 
    <p>Капиба́ра, или водосви́нка, — полуводное травоядное млекопитающее из подсемейства водосвинковых, один из двух ныне существующих видов рода водосвинки. Капибара — самый крупный среди современных грызунов.</p>
    <?php   ///<img src="https://cs12.pikabu.ru/post_img/2020/12/19/1/16083293701519737.jpg" alt="изображение">
$seconds = date('s');
if( date('s') % 2 === 0 ) 
$name='1';	
else	
$name='2';	
echo '<img src="photos/capycapy'.$name.'.jpg" alt="Меняющаяся фотография">';
?>


<table>  
  <?php foreach ($infotable as $option) :?>
    <tr>
      <?php foreach ($option as $cell) :?>
        <td><?php echo $cell; ?></td>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
  </table>
   
  </div>
  <footer>
    <f>КОНТАКТНЫЕ ДАННЫЕ <br>
        электронная почта: alexander.shapovalov17@gmail.com</a> <br>
        телефон: +7 (910) 608 86 11<br> </f>

        <?php
            date_default_timezone_set('Europe/Moscow');
            $currentDate = date('d.m.Y в H:i:s');
            echo 'Сформировано ' . $currentDate;
            ?>
  </footer>
</body>

</html>