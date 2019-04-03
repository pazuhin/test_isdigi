<?php

class Data
{
    public function getData()
    {
        $pdo = BaseModel::setConnection();

        $collections = [];
        $collectionsQuery = $pdo->query("SELECT id, name from collections");

        while ($collection = $collectionsQuery->fetch(PDO::FETCH_ASSOC)) {
            $collections[ $collection['id'] ] = [
                'id' => $collection['id'],
                'name' => $collection['name']
            ];
        }

        $productsQuery = $pdo->query("SELECT id, name, price, collection_id
            from products");
        while ($product = $productsQuery->fetch(PDO::FETCH_ASSOC)) {
            $collections[ $product['collection_id'] ]['products'][ $product['id'] ] = [
                'id' => $product['id'],
                'name' => $product['name'],
                'price' => $product['price'],
            ];
        }
        return $collections;
    }
}
