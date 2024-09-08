<?php

namespace App\Http\Controllers;

use App\Services\ProductTypeService;
use Illuminate\Http\Request;
use App\Http\Controllers\JsonResponse;
use App\Models\ProductType;
use Psr\Http\Message\ResponseInterface;

class ProductTypeController extends Controller
{
    protected $productTypeService;

    public function __construct(ProductTypeService $productTypeService)
    {
        $this->$productTypeService = $productTypeService;

    }

    public function index()
    {
        return response()->json($this->productTypeService->getAllProduct());
    }

    public function show($id)
    {
        return response()->json($this->productTypeService->getProductById($id));
    }

    public function store(Request $request)
    {
        $productType = $this->productTypeService->createProduct($request->all());
        return response()->json($productType,201);
    }

    public function update(ProductType $productType, Request $request)
    {
        $productType= $this->productTypeService->updateProduct($productType, $request->all());
        return response()->json($productType,200);
    }

    public function destroy($id)
    {
        $this->productTypeService->deleteProduct($id);
        return response()->json(null,204);
    }

}

