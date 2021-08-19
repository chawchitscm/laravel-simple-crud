<?php
namespace App\Interfaces\Dao\Product;

interface ProductDaoInterface
{
    /**
     * Alpha version
     * Get Product data from table
     *
     * @return array
     */
    public function getProductList();

    /**
     * Alpha version
     * Store product data to table
     *
     * @return object
     */
    public function storeProduct($request);

    /**
     * Alpha version
     * Update product data to table
     *
     * @return object
     */
    public function updateProduct($request, $product);

    /**
     * Alpha version
     * Delete product data from table
     *
     * @return object
     */
    public function deleteProduct($product);
}
