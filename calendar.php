<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>カレンダー</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
// 曜日をdate('w')の順番通りに設定
$week = array('日','月','火','水','木','金','土');
if(isset($_GET['year']) && isset($_GET['month'])){
    $year = $_GET['year'];
    $month = $_GET['month'];
    $firstDay = mktime(0,0,0,$_GET['month'],1,$_GET['year']);
} else {
    $year = date('Y',time());
    $month = date('n',time());
    $firstDay = mktime(0,0,0,$month,1,$year);
}

//今月を設定
$currentY = date('Y',time());
if(isset($_GET['month']) == true){
    $currentM = date('n',mktime(0,0,0,$_GET['month'],1,$currentY));
} else {
    $currentM = date('n',time());
}

//前月を設定
$prev = mktime(0,0,0,date('n',$firstDay),(int)date('t',$firstDay) - (int)date('t',$firstDay),date('Y',$firstDay));
//来月を設定
$next = mktime(0,0,0,date('n',$firstDay),(int)date('t',$firstDay) + 1,date('Y',$firstDay));
?>
<table border="1">
    <thead>
        <tr>
            <td colspan="2"><a href="/calendar.php?year=<?php echo date('Y',$prev);?>&month=<?php echo date('n',$prev);?>">Prev</a></td>
            <td colspan="3"><a href="/calendar.php">今月</a></td>
            <td colspan="2"><a href="/calendar.php?year=<?php echo date('Y',$next);?>&month=<?php echo date('n',$next);?>">Next</a></td>
        </tr>
<tr>
<th colspan="7"><?php echo $year.'年',$month.'月';?></th>
</tr>
        <tr><?php foreach($week as $weekday){ echo '<td>'.$weekday.'</td>';}?></tr>
    </thead>
    <tbody>
<?php
//表示月の1日の曜日
$prevSpace = date('w',mktime(0,0,0,$currentM,1,$currentY));
//表示月の末日の曜日
$backSpace = date('w',mktime(0,0,0,$currentM,date('t',$firstDay),$currentY));

if($prevSpace != 0){
    $sp = 0;
    echo '<tr>';
    while($sp < $prevSpace){
        echo '<td>&nbsp;</td>';
        $sp++;
    }
}
$i = 1;
while($i <= date('t',$firstDay)){
    if(date('w',mktime(0,0,0,$currentM,$i,$currentY)) == 0){
        echo '<tr>';
    }

    echo '<td>'.$i.'</td>';
    if(date('w',mktime(0,0,0,$currentM,$i,$currentY)) == 6){
        echo "</tr>\n";
    }
    $i++;
}

if($backSpace != 6) {
    while($backSpace < 6) {
        echo '<td>&nbsp;</td>';
        $backSpace++;
    }
    echo "</tr>\n";
}
?>
    </tbody>
</table>
<a href="/">戻る</a>
</body>
</html>
