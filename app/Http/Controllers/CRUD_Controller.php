<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\new_model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
class CRUD_Controller extends Controller
{
    public function index(){
        // lấy ra toàn bộ bảng
        $new = new_model :: all();
       
        // trả về view hiển thị danh sách user
        return view('show', compact('new'));
    }
    public function Delete($id){
        $new = new_model::find($id);
        $new->delete();
        return redirect(route('show'));
        
    }
    public function create(){
        return view('add');
    }

    public function store(Request $request){
        // gán dữ liệu gửi lên vào biến data
        // $data = $request->all();
        $arr = [
            'title' => $request->input('tit'),
            'image' => $request->input('img'),
            'description' => $request->input('des'),
            'date' => $request->input('date'),
            'author' => $request->input('au')
        ];
        
        DB::table('new')->insert($arr);
        // Tạo mới new với các dữ liệu tương ứng với dữ liệu được gán trong $data
        return redirect(route('show'));
    }

    public function edit($id)
    {
        $new =  new_model::find($id);
        return view('edit',compact('new'));
    }

    public function update(Request $request, $id)
    {
        $arr = [
            'title' => $request->input('tit'),
            'image' => $request->input('img'),
            'description' => $request->input('des'),
            'date' => $request->input('date'),
            'author' => $request->input('au')
        ];
        
        DB::table('new')->where("id", $id)->update($arr);
        return redirect(route('show'));
    }
}
