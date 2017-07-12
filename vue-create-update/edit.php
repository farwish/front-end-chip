<?php
/**
 * 模拟已选择的 json 数据.
 *
 * 更改数组元素的值，生成json；
 * 用于 edit.html 的 server_data 变量.
 *
 * @farwish
 */

$server_data = [
    'source_id' => 1,
    'section' => [
        [
            'package_id' => 1,
            'materials' => [
                [
                    'id' => 1,
                    'name' => 'JiaShiYou',
                    'upgrade_price' => 11,
                ],
                [
                    'id' => 2,
                    'name' => 'NaKe',
                    'upgrade_price' => 22,
                ],
            ],
        ],
        [
            'package_id' => 2,
            'materials' => [
                [
                    'id' => 3,
                    'name' => 'HuangXiLi',
                    'upgrade_price' => 333,
                ],
                [
                    'id' => 4,
                    'name' => 'LanXiLi',
                    'upgrade_price' => 444,
                ],
            ],
        ],
    ],
];

var_export(json_encode( $server_data ));
