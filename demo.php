<?php
$price_prefix = 'R';

$products = array(

    array(
        'id' => '1',
        'title' => 'Product 1',
        'sku' => 'code-2',
        'price' => '95.00',
        'category' => 'Shirts',
        'image' => 'https://via.placeholder.com/500x300.png',

    ),

    array(
        'id' => '2',
        'title' => 'Product 2',
        'sku' => 'code-2',
        'price' => '145.00',
        'category' => 'Pants',
        'image' => 'https://via.placeholder.com/500x300.png',
    ),

    array(
        'id' => '3',
        'title' => 'Product 3',
        'sku' => 'code-3',
        'price' => '895.00',
        'category' => 'Shirts',
        'image' => 'https://via.placeholder.com/500x300.png',

    ),

    array(

        'id' => '4',
        'title' => 'Product 4',
        'sku' => 'code-4',
        'price' => '295.00',
        'category' => 'Pants',
        'image' => 'https://via.placeholder.com/500x300.png',
    ),

    array(

        'id' => '5',
        'title' => 'Product 5',
        'sku' => 'code-5',
        'price' => '215.00',
        'category' => 'Caps',
        'image' => 'https://via.placeholder.com/500x300.png',

    ),

    array(

        'id' => '6',
        'title' => 'Product 6',
        'sku' => 'code-6',
        'price' => '365.00',
        'category' => 'Shirts',
        'image' => 'https://via.placeholder.com/500x300.png',

    ),

    array(

        'id' => '7',
        'title' => 'Product 7',
        'sku' => 'code-7',
        'price' => '95.00',
        'category' => 'Caps',
        'image' => 'https://via.placeholder.com/500x300.png',

    ),

    array(

        'id' => '8',
        'title' => 'Product 8',
        'sku' => 'code-8',
        'price' => '495.00',
        'category' => 'Caps',
        'image' => 'https://via.placeholder.com/500x300.png',

    ),

    array(
        'id' => '9',
        'title' => 'Product 9',
        'sku' => 'code-9',
        'price' => '95.00',
        'category' => 'Caps',
        'image' => 'https://via.placeholder.com/500x300.png',

    ),

    array(
        'id' => '10',
        'title' => 'Product 10',
        'sku' => 'code-10',
        'price' => '95.00',
        'category' => 'Caps',
        'image' => 'https://via.placeholder.com/500x300.png',
    ),

    array(
        'id' => '11',
        'title' => 'Product 11',
        'sku' => 'code-2',
        'price' => '95.00',
        'category' => 'Shirts',
        'image' => 'https://via.placeholder.com/500x300.png',

    ),

    array(
        'id' => '12',
        'title' => 'Product 12',
        'sku' => 'code-2',
        'price' => '145.00',
        'category' => 'Pants',
        'image' => 'https://via.placeholder.com/500x300.png',
    ),

    array(
        'id' => '13',
        'title' => 'Product 13',
        'sku' => 'code-3',
        'price' => '895.00',
        'category' => 'Shirts',
        'image' => 'https://via.placeholder.com/500x300.png',

    ),

    array(

        'id' => '14',
        'title' => 'Product 14',
        'sku' => 'code-4',
        'price' => '295.00',
        'category' => 'Pants',
        'image' => 'https://via.placeholder.com/500x300.png',
    ),

    array(

        'id' => '15',
        'title' => 'Product 15',
        'sku' => 'code-5',
        'price' => '215.00',
        'category' => 'Caps',
        'image' => 'https://via.placeholder.com/500x300.png',

    ),

    array(

        'id' => '16',
        'title' => 'Product 16',
        'sku' => 'code-6',
        'price' => '365.00',
        'category' => 'Shirts',
        'image' => 'https://via.placeholder.com/500x300.png',

    ),

    array(

        'id' => '17',
        'title' => 'Product 17',
        'sku' => 'code-7',
        'price' => '95.00',
        'category' => 'Caps',
        'image' => 'https://via.placeholder.com/500x300.png',

    ),

    array(

        'id' => '18',
        'title' => 'Product 18',
        'sku' => 'code-8',
        'price' => '495.00',
        'category' => 'Caps',
        'image' => 'https://via.placeholder.com/500x300.png',

    ),

    array(
        'id' => '19',
        'title' => 'Product 19',
        'sku' => 'code-9',
        'price' => '95.00',
        'category' => 'Caps',
        'image' => 'https://via.placeholder.com/500x300.png',

    ),

    array(
        'id' => '20',
        'title' => 'Product 20',
        'sku' => 'code-10',
        'price' => '95.00',
        'category' => 'Caps',
        'image' => 'https://via.placeholder.com/500x300.png',
    ),
);

$total_products = count($products);
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 10;

if (!empty($current_page) && $current_page > 1) {
    $offset = ($current_page * $limit) - $limit;
} else {
    $offset = 0;
}

$total_pages = ceil($total_products / $limit);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Product Listing</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        body {
            background-color: #eee;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .container {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
        }

        .product {
            padding: 20px;
        }

        .column-inner {
            border: 1px solid #ddd;
        }

        .img-fluid {
            width: 100%;
            height: auto;

        }

        .pagination {
            border-top: 1px solid #ddd;
            padding-top: 10px;
            margin-top: 20px;
            width: 100%;
            text-align: center;
            justify-content: center;
        }

        .product-title,
        .product-price,
        .product-cat {
            text-align: center;
        }

        .product-title {
            padding-top: 10px;
            font-size: 24px;
            color: #454545;

        }

        .product-price {
            font-size: 20px;
            color: #0062cc;
        }

        .product-cat {
            font-size: 16px;
            color: #767676;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="products row">
            <?php
                $products = array_slice($products, $offset, $limit);
                // Loop through $products array
                foreach ($products as $product) {?>
                    <div class="col-md-3 product">
                        <div class="column-inner">
                            <img src="<?php echo $product['image']; ?>" class="img-fluid" />
                            <h2 class="product-title"><?php echo $product['title']; ?></h2>
                            <h3 class="product-price"><?php echo $price_prefix . $product['price']; ?></h3>
                            <p class="product-cat">Category: <?php echo $product['category']; ?></p>
                        </div>
                    </div>
                <?php } // End Products foreach ?>
        </div><!-- Products -->

        <?php if ($total_pages > 1) {?>
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <?php for ($page_in_loop = 1; $page_in_loop <= $total_pages; $page_in_loop++) {?>
                        <li class="page-item">
                            <a class="page-link" href="<?php echo '?page=' . $page_in_loop; ?> "><?php echo $page_in_loop; ?></a>
                        </li>
                    <?php } // end for loop?>
                </ul>
            </nav>
        <?php } // End if total pages more than 1 ?>

    </div> <!-- Container -->
</body>

</html>