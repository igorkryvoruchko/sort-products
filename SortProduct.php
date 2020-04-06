<?php


class SortProduct
{
    /**
     * @var array
     */
    protected $products;

    /**
     * SortProduct constructor.
     */
    public function __construct()
    {
        $data = new Data();
        $this->products = $data->getData();
    }

    /**
     * @return array
     */
    public function sort()
    {
        $sorted = self::sortProducts($this->products);

        return $sorted;
    }

    /**
     * @param array $products
     * @param null $parentId
     * @return array
     */
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