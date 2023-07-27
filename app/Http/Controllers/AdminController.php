<?php

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        // Lấy danh sách sản phẩm từ cơ sở dữ liệu
        $products = Product::all();

        return view('admin.index', compact('products'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        // Xử lý lưu thông tin sản phẩm vào cơ sở dữ liệu
        $product = new Product;
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');

        // Xử lý tải ảnh lên và lưu đường dẫn vào cơ sở dữ liệu
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images');
            $product->image = $imagePath;
        }

        $product->save();

        return redirect()->route('admin.index')->with('success', 'Product added successfully.');
    }
}
