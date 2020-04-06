<?php


class SortProduct
{
    protected $products;

    public function __construct()
    {
        $data = new Data();
        $this->products = $data->getData();
    }

    public function sort()
    {
        $sorted = self::sortProducts($this->products);

        return $sorted;
    }

    public static function sortProducts(array $products, $parentId = null)
    {
        $result = [];
        foreach ($products as $product) {
            if ($product['parent_id'] === $parentId) {
                if ($subcategory = self::sortProducts($products, $product['id'])) {
                    $product['subcategory'] = $subcategory;
                }
                $result[] = $product;
            }
        }
        return $result;
    }
}