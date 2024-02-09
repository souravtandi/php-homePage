<!-- categories.php -->

<section class="categories mt-4">
    <div class="container">
        <div class="categoriesHeader py-3">
            <hr />
            <h3>Our Categories</h3>
            <hr />
        </div>
        <div class="categories-item-container">
    <?php
    $categories_1 = [
        [
            "image" => "https://new.caterninja.com/home/categories/cate1%20(1).webp",
            "title" => "Bulk Food Delivery"
        ],
        [
            "image" => "https://new.caterninja.com/home/categories/cate2.webp",
            "title" => "Corporate Catering"
        ],
        [
            "image" => "https://new.caterninja.com/home/categories/cate3.webp",
            "title" => "Box Meal Services"
        ],
        [
            "image" => "https://new.caterninja.com/home/categories/cate4.webp",
            "title" => "Gourmate Catering"
        ]
    ];

    foreach ($categories_1 as $index => $item) {
        echo '<div class="categories-item">';
        echo '<a href="/checkprice" target="_blank"><img async src="' . $item['image'] . '" alt="" class="img-fluid" /></a>';
        echo '<a href="/checkprice"><p>' . $item['title'] . '</p></a>';
        echo '</div>';
    }

    $categories_2 = [
        [
            "link" => "/checkprice",
            "image" => "https://new.caterninja.com/home/categories/cate5.webp",
            "title" => "Great Buffet Catering"
        ],
        [
            "link" => "/checkprice",
            "image" => "https://new.caterninja.com/home/categories/cate6.webp",
            "title" => "House Party Catering"
        ],
        [
            "link" => "/checkprice",
            "image" => "https://new.caterninja.com/home/categories/cate7.webp",
            "title" => "Wedding Catering"
        ],
        [
            "link" => "/checkprice",
            "image" => "https://new.caterninja.com/home/categories/cate8.webp",
            "title" => "Birthday Party Catering"
        ]
    ];

    foreach ($categories_2 as $index => $item) {
        echo '<div class="categories-item">';
        echo '<a href="' . $item['link'] . '" target="_blank"><img async src="' . $item['image'] . '" alt="" class="img-fluid" /></a>';
        echo '<a href="' . $item['link'] . '"><p>' . $item['title'] . '</p></a>';
        echo '</div>';
    }
    ?>
</div>

    </div>
</section>