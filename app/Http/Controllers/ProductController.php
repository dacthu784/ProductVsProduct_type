<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\Request;
use App\Http\Controllers\JsonResponse;
use App\Models\Product;
use Psr\Http\Message\ResponseInterface;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;

    }

    public function index()
    {
        return response()->json($this->productService->getAllProduct());
    }

    public function show($id)
    {
        return response()->json($this->productService->getProductById($id));
    }

    public function store(Request $request)
    {
        $product = $this->productService->createProduct($request->all());
        return response()->json($product,201);
    }

    public function update(Product $product, Request $request)
    {
        $product= $this->productService->updateProduct($product, $request->all());
        return response()->json($product,200);
    }

    public function destroy($id)
    {
        $this->productService->deleteProduct($id);
        return response()->json(null,204);
    }

}
