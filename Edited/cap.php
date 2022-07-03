<?php
$c=rand(00,99);
$c1=rand(0,9);

$sum = $c+$c1;

if(isset($_POST['sub']))
{
 if($_POST['t1']==$_POST['t2'])
 {
  echo"Captcha Correct";
 }else{
  echo"Captch Invalid";
 }
}

function repeat()
{
 $c=rand(00,99);
 $c1=rand(0,9);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
 <script src="https://kit.fontawesome.com/cc52cf7965.js" crossorigin="anonymous"></script>
 <title>Document</title>
</head>
<body>
 <form class="form" method="POST">
 <div class="capu">
  <?php
    echo $c." + ".$c1;
  ?>
  </div>
   <input class="capuMargin" type="text" name="t1">
   <input class="capuMargin" type="hidden" name="t2" value="<?php echo $sum; ?>"><button class="btn" onclick="repeat()" ><i class="fa-solid fa-arrow-rotate-right "></i></button><br>
   <input class="login-button" type="submit" name="sub" value="submit">
  </form>
 
</body>
</html>