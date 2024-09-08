<?php

namespace App\Repository\Interface;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

interface ProductRepositoryInterface
{
    public function getAllProduct(): Collection;
    public function getProductByID(int $id): ?Product;
    public function createProduct(array $productDetails): Product;
    public function updateProduct(Product $product,array $newDetails) :bool;
    public function deleteProduct(int $id): bool;
}
