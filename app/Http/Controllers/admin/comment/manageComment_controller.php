<?php

namespace App\Http\Controllers\admin\comment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\accountModel;
use App\Models\productsModel;
use App\Models\commentModel;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Facades\Validator;

class manageComment_controller extends Controller
{
    public function index(){
        $accounts = accountModel::all();
        $products = productsModel::all();
        $comment = commentModel::all();
        return view('pages/admin/comment/manageComment', compact('accounts', 'products', 'comment'));
    }

    public function addCommentView(){
        return view('pages/admin/comment/add');
    }
}
