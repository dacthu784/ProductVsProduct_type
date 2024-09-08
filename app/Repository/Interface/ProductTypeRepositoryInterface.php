<?php

namespace App\Repository\Interface;

use App\Models\ProductType;
use Illuminate\Database\Eloquent\Collection;

interface ProductTypeRepositoryInterface
{
    public function getAllProductTypes(): Collection;
    public function getProductTypeByID(int $id): ?ProductType;
    public function createProductType(array $productTypeDetails): ProductType;
    public function updateProductType(ProductType $product,array $newDetails) :bool;
    public function deleteProductType(int $id): bool;
}
