<?php
return [
    'module' => [
        [
            'title' => 'QL Người dùng',
            'icon' => 'fe fe-users',
            'subModule' => [
                [
                    'title' => 'Tất cả người dùng',
                    'route' => 'admin.user',
                ],
                [
                    'title' => 'Thêm người dùng',
                    'route' => 'admin.user.create',
                ],
            ],
        ],
        [
            'title' => 'QL Bài viết',
            'icon' => 'fe fe-edit',
            'subModule' => [
                [
                    'title' => 'Tất cả bài viết',
                    'route' => 'admin.post',
                ],
                [
                    'title' => 'Thêm bài viết',
                    'route' => 'admin.post.create',
                ],
                [
                    'title' => 'Danh mục bài viết',
                    'route' => 'admin.post-category',
                ],
            ],
        ],
        // [
        //     'title' => 'QL Sản phẩm',
        //     'icon' => 'fe fe-shopping-cart',
        //     'subModule' => [
        //         [
        //             'title' => 'Tất cả sản phẩm',
        //             'route' => 'admin.product',
        //         ],
        //         [
        //             'title' => 'Thêm sản phẩm',
        //             'route' => 'admin.product.create',
        //         ],
        //         [
        //             'title' => 'Danh mục sản phẩm',
        //             'route' => 'admin.product-category',
        //         ],
        //     ],
        // ]

    ],
];
?>
