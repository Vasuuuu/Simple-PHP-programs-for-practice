<?php
$a=$_POST['a'] ?? "";
$b=$_POST['b'] ?? "";
?>
<h1>GCD Calculator</h1>
<form action="gcd.php"method="POST">
Enter first number:<input type ="number" name="a" value="<?php echo $a ;?>"><br>
Enter second number:<input type ="number" name="b" value="<?php echo $b ;?>"><br>
 <input type ="submit" name="cal" value="calculator"><br>
</form>
<?php
if(isset($_POST['cal'])){
    while($a!=$b){
        if($a>$b)
           $a=$a-$b;
           else
           $b=$b-$a;
    }
    echo "GCD is $a\n";
}
?>
