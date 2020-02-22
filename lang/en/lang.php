<?php return [
    'plugin' => [
        'name' => 'Point of Sale',
        'description' => 'Point of Sale',
    ],
    'permission' => [
        'access_products' => 'Access Products',
        'access_product_categories' => 'Access Product Categories',
        'access_inventory_data_trackings' => 'Access Inventory Data Trackings',
    ],
    'menu_item' => [
        'products' => 'Products',
        'product' => 'Product',
        'product_categories' => 'Product Categories',
        'inventory_data_trackings' => 'Inventory Data Trackings',
        'product_category' => 'Product Category',
        'master_data' => 'Master Data',
        'inventory_data_tracking' => 'Inventory Data Tracking',
    ],
    'product' => [
        'product_id' => 'Product Id',
        'barcode' => 'Barcode',
        'product_name' => 'Product Name',
        'wholesale_price' => 'Wholesale Price',
        'retail_price' => 'Retail Price',
        'quantity' => 'Quantity',
        'reorder_level' => 'Reorder Level',
        'description' => 'Description',
        'product_category' => 'Category',
        'price' => 'Price',
        'inventory' => 'Inventory',
        'photos' => 'Photos',
    ],
    'product_category' => [
        'id' => 'Product Category Id',
        'name' => 'Product Category Name'

    ],
    'inventory_data_tracking' => [
        'id' => 'Id',
        'remarks' => 'Remarks',
        'user' => 'User',
        'in_out_quantity' => 'In/Out Quantity',
        'product' => 'Product',
        'created_at' => 'Created At',
        'find_product'=> 'Click the Find button to find a product',
        'in_out_quantity_comment'=>'Inventory to add or subtract.'
    ],
    'stock' => [
        'reorder_stock' => 'Reorder Stock'
    ]
];