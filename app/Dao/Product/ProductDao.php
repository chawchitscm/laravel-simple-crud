<?php

namespace App\Dao\Product;

use App\Interfaces\Dao\Product\ProductDaoInterface;
use App\Models\Product;

class ProductDao implements ProductDaoInterface
{
    /**
     * Alpha version
     * Get product data from table
     *
     * @return array
     */
    public function getProductList()
    {
        $products = Product::latest()->paginate(5);

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
        $result = Product::create($request->all());
        return $result;
    }

    /**
     * Alpha version
     * Update product data to table
     *
     * @return object
     */
    public function updateProduct($request, $product)
    {
        $result = $product->update($request->all());
        return $result;
    }

    /**
     * Alpha version
     * Delete product data from table
     *
     * @return object
     */
    public function deleteProduct($product)
    {
        $result =  $product->delete();
        return $result;
    }
}
