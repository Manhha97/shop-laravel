<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        return view('DemoUpload');
    }

    public function doUpload(Request $request)
    {
        $file = $request->filesTest;
        
        $file->move('upload', $file->getClientOriginalName());
        if ($request->hasFile('fileTest')) {
        	echo 'Đường dẫn tạm: ' . $file->getRealPath();
        }
        //hàm sẽ trả về đường dẫn mới của file trên server
    }
}
