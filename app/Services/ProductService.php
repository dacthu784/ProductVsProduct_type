<?php

namespace App\Services;

use App\Models\Product;
use App\Repository\Interface\ProductRepositoryInterface;

class ProductService
{
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAllProduct()
    {
        return $this->productRepository->getAllProduct();
    }

    public function getProductById($id)
    {
        return $this->productRepository->getProductById($id);
    }

    public function deleteProduct($id)
    {
        $this->productRepository->deleteProduct($id);
    }

    public function createProduct(array $productTypeDetails)
    {
        return $this->productRepository->createProduct($productTypeDetails);
    }

    public function updateProduct(Product $product, array $newDetails)
    {
        return $this->productRepository->updateProduct($product, $newDetails);
    }
}
