<?php 
    echo "<--------String functions------->";
    echo "<br>";
    $str ="My name is Anushka";
    $str1="I am Anushka";
    echo $str;
    echo "<br>";
    echo $str1;
    echo "<br>";

    $arr1=str_split($str,2);
    print_r($arr1);
    
    foreach (count_chars($str, 1) as $i => $val) {
        echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
        echo "<br>";
    }
    echo "<br>";

    $pieces = explode(" ", $str1);
    echo $pieces[0];
    echo "<br>";
    echo $pieces[1];
    echo "<br>";
    echo $pieces[2];
    echo "<br>";

    echo str_shuffle($str1);
    echo "<br>";

    echo strrev($str1);
    echo "<br>";

    echo strtoupper($str);
    echo "<br>";

    echo "<--------Math functions------->";
    echo "<br>";
    echo sprintf("%'.12d\n",123);
    echo "<br>";
    $sim=similar_text($str,$str1, $perc);
    echo "Similarity between string 1 and 2: $sim($perc %)\n";
    echo "<br>";

    echo abs(-4.2)."\n";
    echo abs(-5)."\n"; 
    echo "<br>";
    
    echo bindec('111')."\n";
    echo bindec('1011')."\n";
    echo "<br>";

    echo ceil(4.3)."\n";
    echo ceil(-4.4)."\n";
    echo "<br>";

    echo decbin(12)."\n";
    echo decbin(24)."\n";
    echo "<br>";

    echo dechex(12)."\n";
    echo "<br>";

    echo decoct(12)."\n";
    echo "<br>";

    echo "<--------Calender Function------->";
    echo "<br>";
    $info = cal_info(0);
    print_r($info);
    echo "<br>";
    echo "<br>";
    echo jddayofweek(0, 1);
    echo "<br>";
    echo easter_days(1999);
    echo "<br>";
    echo date("M-d-Y", easter_date(1999));
    echo "<br>";
    echo frenchtojd(3,12,2000);
    echo "<br>";

    echo "<--------Date and time Function------->";
    echo "<br>";
    echo date("H:i:s");
    echo "<br>";
    echo date('Y-m-d');
    echo "<br>";
    echo date("Y-m-d H:i:s");
    echo "<br>";
    echo date("D M d Y"). ', sunrise time : ' .date_sunrise(time(), SUNFUNCS_RET_STRING, 38.4, -9, 90, 1);
    echo "<br>";
    echo date("D M d Y"). ', sunset time : ' .date_sunset(time(), SUNFUNCS_RET_STRING, 38.4, -9, 90, 1);
    echo "<br>";

    $lt= localtime();
    print_r($lt);
    echo "<br>";
?>


<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<body style="background-color:powderblue;">
<center>
<?php
    $_SESSION["name"]="Anushka Darade";
    $_SESSION["rollno"]="1814012";
    $_SESSION["branch"]="IT";
    $_SESSION["sem"]="5";
    echo "<h1>Hi there!</h1><br>";
    echo "<h1>Session has been initiated.....</h1><br><br>";
    echo "<h2>click on this button</h2>";
?>
<form action='proxy1.php'>
    <button type="submit">
        Check here!
    </button>
</form>
</center>
</body>
</html>