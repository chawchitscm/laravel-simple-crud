<?php

namespace App\Services\Product;

use App\Interfaces\Services\Product\ProductServiceInterface;
use App\Interfaces\Dao\Product\ProductDaoInterface;

class ProductService implements ProductServiceInterface
{
    private $productDao;

    /**
     * Alpha version
     * Class Constructor
     * 
     * @param ProductDaoInterface $productDao
     */
    public function __construct(ProductDaoInterface $productDao)
    {
        $this->productDao = $productDao;
    }

    /**
     * Alpha version
     * Get product data from table
     *
     * @return array
     */
    public function getProductList()
    {   
        $products = $this->productDao->getProductList();
        return $products;
    }

    /**
     * Alpha version
     * Store product data to table
     *
     * @return object
     */
    public function storeProduct($request)
    {
        $result = $this->productDao->storeProduct($request);
        
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    /**
     * Alpha version
     * Update product data to table
     *
     * @return object
     */
    public function updateProduct($request, $product)
    {
        $result = $this->productDao->updateProduct($request, $product);
        
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    /**
     * Alpha version
     * Delete product data from table
     *
     * @return object
     */
    public function deleteProduct($product)
    {
        $result = $this->productDao->deleteProduct($product);
        
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
}
