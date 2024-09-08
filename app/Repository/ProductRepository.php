<?php
namespace App\Repository;

use App\Models\Product;
use App\Repository\Interface\ProductRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ProductRepository implements ProductRepositoryInterface
{
    public function getAllProduct(): Collection
    {
        return Product:: all();
    }

    public function getProductById($id): ?Product
    {
        return Product:: findOrFail($id);
    }

    public function createProduct(array $productDetails): Product
    {
        return Product:: create($productDetails);
    }

    public function updateProduct(Product $product,array $newDetails) :bool
    {
        $product->fill($newDetails);
        return $product->save();
    }

    public function deleteProduct(int $id): bool
    {
        return Product:: destroy($id);
    }

}

?>
