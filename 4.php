<?php
echo "Normal array<br>";
$value = array("shuba","abhi","subi");
echo $value[0].",".$value[1].",".$value[2]."<br>";

echo "<br>Array pop<br>";
array_pop($value);
print_r($value);
echo "<br>";

echo "<br>array push<br>";
array_push($value,"anit","kris");
foreach ($value as $key) {
	echo $key."<br>";
}
echo "<br>array merge<br>";
$car=["sister","daughter"];
$model=[12,57];
print_r(array_merge($sister,$family));
echo "<br>array sum<br>";
$n1=array(12,8,10);
$n2=array_sum($n1);
echo $n2;
echo "<br>array slice<br>";

$name=array("ramu","saun","reset","their","hari");
print_r(array_slice($name, 3));

echo "<h1>string function</h1>";
echo "the substr of the string is:".substr("Roshni",1);
echo "<br>";
echo "the length of the string is:".strlen("heruin");
echo "<br>";
echo "the replace form of the string is:".str_replace
("love","am a bad","i love boy");
echo "<br>";
$name="roshni";
echo trim($name,"tauko");
echo "<br>";
echo strpos("hello how are you,hello how are you there","you");
echo "<br>";
echo strtolower("Hancy roshni");
echo "<br>";
echo strtoupper("very butiful girl and kaamnagalni");
?>