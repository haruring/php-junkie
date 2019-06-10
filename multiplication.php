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
</style>
</head>
<body>
   <h1>掛け算九九</h1>
    <section>
        <h2>forで九九</h2>
<div class="container">
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
for($i = 0;$i < 10;$i++):
    if(0 < $i):?>
<tr>
            <th><?php echo $i;?></th>
<?php
        for($l = 1;$l <= 9;$l++):?>
            <td><?php echo $i * $l;?></td>
<?php endfor;endif;?>
</tr>
<?php endfor;?>
</table>
<div class="inner">
<pre>
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
for($i = 0;$i &lt; 10;$i++):
    if(0 &lt; $i):?&gt;
&lt;tr&gt;
            &lt;th&gt;&lt;?php echo $i;?&gt;&lt;/th&gt;
&lt;?php
        for($l = 1;$l &lt;= 9;$l++):?&gt;
            &lt;td&gt;&lt;?php echo $i * $l;?&gt;&lt;/td&gt;
&lt;?php endfor;endif;?&gt;
&lt;/tr&gt;
&lt;?php endfor;?&gt;
&lt;/table&gt;
</pre>
</div>
        </div>
    </section>
<a href="/">戻る</a>
</body>
</html>
