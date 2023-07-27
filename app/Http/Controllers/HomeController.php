<?php
// HomeController.php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Lấy danh sách sản phẩm từ cơ sở dữ liệu
        $products = Product::all();

        return view('home', compact('products'));
    }

    public function service()
    {
        return view('service');
    }

    public function booking()
    {
        return view('booking');
    }
}
