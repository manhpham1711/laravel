<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    function index(){
        $book = DB::table('sach')->get();
        // var_dump($todos);
        return View("giaodien",["book"=> $book]); //chuyển data
        // return view('todo.index', ['todo' => $todos]);
    }
    function showAdd(){
        return View("add");
    }

    function add(Request $request){
        $name = $request->input("name");
        $price = $request->input("price");
        $author = $request->input("author");
        DB::table('sach')->insert(["NameBook" => $name, "PriceBook"=> $price, "BookPublisher"=> $author]); //thêm dữ liệu vào bảng
        echo "<script> alert('Them Thanh Cong');</script>";
        return redirect('/book');
    }

    function delete($id){
        DB::table('sach')->where ('BookID','=',$id)->delete();
        echo "<script> alert('Xoa Thanh Cong');</script>";
        return redirect('/book');
    }
}
