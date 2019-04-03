<div class="block">
    <?php
    $indexNum = 1;
    foreach ($collections as $collectionId => $collection) {
        if ($indexNum % 3 == 0) {
            $indexNum = 1;
            echo '<div class="elem">';
            echo '</div>';
        }
        echo '<div class="elem">';
        echo $collection['name'];
        echo '</div>';
        $indexNum++;

        foreach ($collection['products'] as $productId => $product) {
            echo '<div class="elem">';
            echo $product['name'] . '<br>';
            echo $product['price'] . '<br>';
            echo $collection['name'] . '<br>';
            echo '</div>';
            $indexNum++;
        }
    }
    ?>
</div>

<style>
    .block {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        width: 400px;
    }

    .elem {
        display: flex;
        width: 100px;
        height: 100px;
        align-items: center;
        justify-content: center;
        border: 1px solid grey;
        margin: 10px;
    }
</style>
