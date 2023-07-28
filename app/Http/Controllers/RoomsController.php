<?php


namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class RoomController extends Controller
{
    public function create(Request $request)
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

