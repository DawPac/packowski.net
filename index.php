<html>
    <body style="background-color: black; color: white;">
        <pre>
<?php
$width = 157;
echo '<span> ';
for($i = 0; $i < $width; $i += 1){
    echo '-';
}
echo '</span><br>|';
for($i = 0; $i < $width; $i += 1){
    echo " ";
}
echo "|<br>";
require("asciiart.php");
$asciiart = asciiart(" ffffffffff                              fff      fffff    fffffffffff               fff   fffff                                       fffff       fff xhhfffhhhhfff                            hhh      hhfff    hhfffhhhhhfff             hhh   hhfff                                       hhfff       hhh  x hfff   hhfff  ffffff   fffff fff fffff ffff   fffffff     hfff    hfff  ffffff    ffffff  hfff fffff  ffffff  fffff fff fffff  fffff  hfff fffff ffff x hfff    hfff hhhhhfff hhfff hfffhhfff hhfff  fffhhfff     hffffffffff  hhhhhfff  fffhhfff hfffhhfff  fffhhfffhhfff hfffhhfff  fffhh   hfffhhfff hhfff x hfff    hfff  fffffff  hfff hfff hfff  hfff hfff hfff     hfffhhhhhh    fffffff hfff hhh  hffffffh  hfff hfff hfff hfff hfff hhfffff  hffffffh   hfff x hfff    fff  fffhhfff  hhfffffffffff   hfff hfff hfff     hfff         fffhhfff hfff  fff hfffhhfff hfff hfff hhfffffffffff   hhhhfff hfffhhfff  hfff x ffffffffff  hhffffffff  hhffffhffff    fffffhhffffffff    fffff       hhffffffffhhffffff  ffff fffffhhffffff   hhffffhffff    ffffff  ffff fffff fffffxhhhhhhhhhh    hhhhhhhh    hhhh hhhh    hhhhh  hhhhhhhh    hhhhh         hhhhhhhh  hhhhhh  hhhh hhhhh  hhhhhh     hhhh hhhh    hhhhhh  hhhh hhhhh hhhhh ");
for($i = 0; $i < 8; $i += 1){
    echo "|   ".$asciiart[$i]."   |<br>";
}
echo "|";
for($i = 0; $i < $width; $i += 1){
    echo " ";
}
echo "|<br> ";
for($i = 0; $i < $width; $i += 1){
    echo "-";
}
echo "<br>|";
$offset = 126;
for($i = 0; $i < $width-$offset; $i += 1){
    echo " ";
}
echo "|";
$offset = 103;
for($i = 0; $i < $width-$offset; $i += 1){
    echo " ";
}
echo "|";
for($i = 0; $i < $offset; $i += 1){
    echo " ";
}
echo "|<br>";
require("freespeach.php");
$flag = freespeach();
$home = asciiart(' fffff   fffff                                  xhhfff   hhfff                                   x hfff    hfff   ffffff  fffffffffffff    ffffff x hfffffffffff  fffhhfffhhfffhhfffhhfff  fffhhfffx hfffhhhhhfff hfff hfff hfff hfff hfff hfffffff x hfff    hfff hfff hfff hfff hfff hfff hfffhhh  x fffff   fffffhhffffff  fffffhfff fffffhhffffff xhhhhh   hhhhh  hhhhhh  hhhhh hhh hhhhh  hhhhhh  ');
for($i = 0; $i < 7; $i += 1){
    echo '|   '.$flag[$i].'   |   '.$home[$i].'   |<br>';
}
echo '|    09 F9 11 02 9D 74 E3 5B    |   '.$home[7].'   |<br>';
?>|    D8 41 56 C5 63 56 88 C0    |
|                               |

</pre>
    </body>
</html>
