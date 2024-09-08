<?php
namespace App\Repository;

use App\Models\ProductType;
use App\Repository\Interface\ProductTypeRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ProductTypeRepository implements ProductTypeRepositoryInterface
{
    public function getAllProductTypes(): Collection
    {
        return ProductType:: all();
    }

    public function getProductTypeById($id): ?ProductType
    {
        return ProductType:: findOrFail($id);
    }

    public function createProductType(array $productTypeDetails): ProductType
    {
        return ProductType:: create($productTypeDetails);
    }

    public function updateProductType(ProductType $productType,array $newDetails) :bool
    {
        $productType->fill($newDetails);
        return $productType->save();
    }

    public function deleteProductType(int $id): bool
    {
        return ProductType:: destroy($id);
    }

}

?>
