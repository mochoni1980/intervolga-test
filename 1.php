<?
$a = 5;
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo "Было: ";
print_r($arr);
echo "</br>";
$len = count($arr);
for ($i = 0; $i < $len; $i++){
    if (strrpos($arr[$i], "2") !== false) {
        $len++;
        for ($j = $len - 1; $j > $i; $j--){
                $arr[$j] = $arr[$j-1];
        }        
        $i++;
        $arr[$i] = $a;
    }
}
echo "Стало: ";
print_r($arr);
echo "</br>";
?>
