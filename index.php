<?php
//列举出所有10以内加减法的组合
for($i=0;$i<11;$i++){
    for($j=0;$j<11;$j++){
        $a = $i+$j;
        if($a<11) $arr[] = "$i+$j=";
        $b = $i-$j;
        if($b>-1) $arr[] = "$i-$j=";
    }
}
//随机取出100个,且不重复的组合
for($i=0;$i<100;$i++){
    $num = array_rand($arr);
    $arr1[] = $arr[$num];
    unset($arr[$num]);
}
//时间
$time = date("Y-m-d H:i:s");
?>
<!DOCTYPE html>
<html>
<style>
    table{
        border-collapse: collapse;
    }
    td{
        width: 25%;
        height: calc(100vh/29);
        text-align: left;
        font-size: 20px;
        border: 0;
    }
</style>
<head>
    <title>天天口算 <?php echo $time;?></title>
</head>
<body>
    <h2>
        <span>【10以内加减法100题】</span>
        <span style="float: right;">姓名: _____ 分数: _____  </span>
    </h2>
    <table width="100%">
        <tr>
            <?php
            $i = 0;
            foreach($arr1 as $v){
                $i++;
                echo "<td>$v</td>";
                if($i%4==0)  echo "</tr><tr>";
            }
            ?>
        </tr>
    </table>
</body>
</html>