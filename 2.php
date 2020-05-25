<?php
// 表示由数据库返回的可能记录集的数组
$a = array(
    array(
        'id' => 5698,
        'first_name' => 'Bill',
        array('last_name' => 'Gates')
        
    ),
    array(
        'id' => 4767,
        'first_name' => 'Steve',
        array('last_name' => 'Jobs')
    ),
    array(
        'id' => 3809,
        'first_name' => 'Mark',
        array('last_name' => 'Zuckerberg')
    )
);

$last_names = array_column($a, 'last_name');
print_r($last_names);
