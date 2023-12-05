<?php
echo "hello world\n";
print "wellcome\n";
#okay this is a comment
$var = "name  ";
$_var = "abebe";
echo $var;
echo $_var;
#conditional assignment
$result = 9;
$res = ($result > 10)? $result: 5;
echo  $res;


#conditional statement
if ($res > 10){
    echo " the variable is greater than 10\n";
}
elseif ($res  == 5){
    echo " the variable is equal to five\n";

}
else {
    print "the variable is not equal to five and is greater than 10 ";
}
$userInput = 9;
switch($userInput){
    case "1":
        echo "one";
        break;
    case "2":
        echo "two";
        break;
    case "3":
        print "three";
        break;
    default:
        print "this is default for switch statement";
        break;
}
$i = 4;
# do while  will not check only the first iteration
do{
    print("you\n");
$i++;
}
while($i <5);
$j = 1;
# while statement
while ( $j < 5){
    print "k";
    $j++;
}
print "\n";
#for loop statement
for($i = 0; $i<4; $i++){
    print "hi";
}
#for each



$cars = array("bmw","v8","lambo");
for ($i = 0; $i < 3; $i++){
    print "\n";
   # print $cars[$i];
}
foreach ($cars as $car){
    print $car;
    print "\n";
}
$abb = array(array("hek","heo","how"),array("bele","hoel","how"));
print "\n";
print "two dimensional ___________";
for ($i = 0; $i < 2; $i++){
    for ($j = 0; $j <3; $j++){
        #print $abb[$i][$j];
        print " ";
    }
    print "\n";
}
foreach ($abb as $ab){
    foreach ($ab as $a){
        print $a;
        print "\n";
    }
}
function funname (){
    print "this is fun\n";
}
funname();
function funsum($a,$b){
    return $a +$b;
}
print funsum(7,9);
$f = "phpfile.txt";
if (file_exists($f)){
    if (is_readable($f)){
        $fo = fopen($f,"r");
        $s = fread($fo,filesize($f));
        print $s;
        fclose($fo);

    }
    else {
        print "is not readable";
    }

}

else{
    print "file not found";
}
if (is_writable($f)){
    $fw = fopen($f,"w");
    $w = fwrite($fw,"thanks to God");
    fclose($fw);
}
$fk = "phpfile.txt";
if (file_exists($fk)){
    if (is_readable($fk)){
        $fo = fopen($fk,"r");
        $s = fread($fo,filesize($fk));
        print $s;
        fclose($fo);

    }
    else {
        print "is not readable";
    }

}

else{
    print "file not found";
    print "end";
    print "ended";
}
print "fun php";
?>