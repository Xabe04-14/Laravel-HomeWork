<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    private $apiUrl = "https://656ca88ee1e03bfd572e9c16.mockapi.io/products";

    public function index()
    {
        $response = Http::get($this->apiUrl);

        if ($response->successful()) {
            $products = $response->json();

            return view('products.index', compact('products'));
        } else {
            return back()->withErrors(['message' => 'Không thể lấy dữ liệu từ API']);
        }
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();

        $response = Http::post($this->apiUrl, $data);

        if ($response->successful()) {
            return redirect()->route('products.index')->with('success', 'Sản phẩm đã được tạo!');
        }

        return back()->withErrors(['message' => 'Lỗi khi tạo sản phẩm']);
    }

    public function edit($id)
    {
        $response = Http::get("$this->apiUrl/$id");
        if ($response->successful()) {
            $product = $response->json();
            return view('products.edit', compact('product'));
        }
    }
    public function update(StoreProductRequest $request, $id)
    {
        $response = Http::put("$this->apiUrl/$id", $request->validated());
        if ($response->successful()) {
            return redirect()->route('products.index')->with('success', 'Sản phẩm đã được cập nhật!');
        }
        return back()->withErrors(['message' => 'Lỗi khi cập nhật sản phẩm']);
    }

    // Xóa sản phẩm
    public function destroy($id)
    {
        $response = Http::delete("$this->apiUrl/$id");
        if ($response->successful()) {
            return redirect()->route('products.index')->with('success', 'Sản phẩm đã được xóa!');
        }
        return back()->withErrors(['message' => 'Lỗi khi xóa sản phẩm']);
    }
}
