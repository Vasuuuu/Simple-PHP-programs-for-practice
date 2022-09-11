<?php
if(isset($_POST['num1']))
{
    $a=$_POST['num1'];
    $b=$_POST['num2'];
    $c=$_POST['num3'];
}else {
    $a="";
    $b="";
    $c="";
}
?>
<form method="post">
1st number: <input type="text" name="num1" value="<?php echo $a; ?>"<br>
2nd number: <input type="text" name="num2" value="<?php echo $b; ?>"<br>
3rd number: <input type="text" name="num3" value="<?php echo $c; ?>"<br>
<input type="submit" name="sum" value="Sum">
<input type="submit" name="maxmin" value="Max & Min"> <br>
</form>
<?php
if(isset($_POST['sum']))
{
    $s=$a+$b+$c;
    echo "Sum is $s";
}
if(isset($_POST['maxmin']))
{
    $mx=$a>$b? ($a>$c? $a : $c) : ($b>$c? $b:$c);
    $mn=$a<$b? ($a<$c? $a : $c) : ($b<$c? $b : $c);
    echo "Max is $mx and Min is $mn";
}
?>
