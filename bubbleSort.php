<?php
/**
 * Created by PhpStorm.
 *
 * describe:  index.php
 * User: hongwenwu
 * Date: 2019/10/16
 * Time: 10:15
 */

/**
 * @param array $data
 */
function bubbling(array $data)
{
    $len = count($data);
    for ($i = 0; $i < $len; $i++) { // 取出第一个数据
        for ($j = $i + 1; $j < $len; $j++) { // 取出第一个相邻的数据
            if ($data[$i] < $data[$j]) { // 比较两个数据
                $tmp      = $data[$i]; // 暂存
                $data[$i] = $data[$j]; // 交换
                $data[$j] = $tmp; // 交换暂存
            }
        }
    }

    print_r($data);
}

function bubbleSort($numbers)
{
    $cnt  = count($numbers);
    for ($i = 0; $i < $cnt - 1; $i++) {
        for ($j = 0; $j < $cnt - $i - 1; $j++) {
            if ($numbers[$j] > $numbers[$j + 1]) {
                $temp            = $numbers[$j];
                $numbers[$j]     = $numbers[$j + 1];
                $numbers[$j + 1] = $temp;
            }
        }
    }

    print_r($numbers);
}

$data  = [23, 15, 43, 25, 54, 2, 6, 82, 11, 65, 5, 21, 32];
$data1 = [23, 15, 2, 6];
bubbling($data);
bubbleSort($data1);