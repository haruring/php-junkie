<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>掛け算九九</title>
<style>
table { border-collapse: collapse;}
th,td {
    text-align: center;
    vertical-align: center;
    padding: .5em;
    border: 1px solid #666;
}
.container {
    display: flex;
}
.inner {
    padding: 1em;
}
.even {
    background: rgba(0,255,255,.2);
}
</style>
</head>
<body>
   <h1>掛け算九九</h1>
    <section>
        <h2>forで九九</h2>
        <div class="container">
            <div class="inner">
                <table>
                    <tr>
                        <th>&nbsp;</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                    </tr>
<?php
for($i = 1;$i < 10;$i++){
    if(0 < $i) {
        echo "<tr>\n";
        echo "<th>".$i."</th>\n";
        for($l = 1;$l <= 9;$l++) {
            if($i * $l % 2 == 0){
                echo '<td class="even">'.$i * $l."</td>\n";
            } else {
                echo "<td>".$i * $l."</td>\n";
            }
        }
    }
    echo "</tr>\n";
}
?>
                </table>
            </div>
            <div class="inner">
                <pre>
                    <code>
                    &lt;table&gt;
                        &lt;tr&gt;
                            &lt;th&gt;&nbsp;&lt;/th&gt;
                            &lt;th&gt;1&lt;/th&gt;
                            &lt;th&gt;2&lt;/th&gt;
                            &lt;th&gt;3&lt;/th&gt;
                            &lt;th&gt;4&lt;/th&gt;
                            &lt;th&gt;5&lt;/th&gt;
                            &lt;th&gt;6&lt;/th&gt;
                            &lt;th&gt;7&lt;/th&gt;
                            &lt;th&gt;8&lt;/th&gt;
                            &lt;th&gt;9&lt;/th&gt;
                        &lt;/tr&gt;
    &lt;?php
    for($i = 1;$i &lt; 10;$i++){
        if(0 &lt; $i) {
            echo "&lt;tr&gt;\n";
            echo "&lt;th&gt;".$i."&lt;/th&gt;\n";
            for($l = 1;$l &lt;= 9;$l++) {
                if($i * $l % 2 == 0){
                    echo '&lt;td class="even"&gt;'.$i * $l."&lt;/td&gt;\n";
                } else {
                    echo "&lt;td&gt;".$i * $l."&lt;/td&gt;\n";
                }
            }
        }
        echo "&lt;/tr&gt;\n";
    }
    ?&gt;
                    &lt;/table&gt;
                    </code>
                </pre>
            </div>
        </div>
    </section>
<a href="/">戻る</a>
</body>
</html>
