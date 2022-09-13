<?php 
$a=array(10,true,2.5,'three',100);
//echo $a[0],"<br>";
//echo $a[1];
//if($a[1])
//echo "true";
//else
//echo "false";
//for ($i=0;$i<5;$i++)
//echo $a[$i],"<br>";
//foreach($a as $i)
//echo $i,"<br>";
////$a[1]=30  ;
////$a[0]=10;
////$a[2]="test"  ;
////$a[3]= 12.25 ;
////$a[4]='a'  ;
////var_dump($a);
//echo "<br>";
//for ($i=0;$i<5;$i++)
//echo $a[$i],"<br>";
//foreach($a as $i)
//echo $i,"<br>";
$a=array("raj"=>20,5=>80,"amit"=>60,"ashis"=>75,15=>82);
//var_dump($a);
//echo "<br>";
//for ($i=0;$i<5;$i++)
//echo $a[$i],"<br>";
echo"<pre>";
print_r($a);
//echo"<pre>";
//echo"<br>";
//foreach($a as $i)
//echo $i,"<br>";
//$a["Hira"]=90;
//$a["Raj"]=95;
//foreach($a as $i=>$j)
//echo $i," : score is ",$j,"<br>";
$a=array(
  array(10,20,30),
  array(22,44,77)
);
for($i=0;$i<2;$i++){
    for($j=0;$j<3;$j++){
        echo $a[$i][$j]," ";
    }
    echo "<br>";
}


















