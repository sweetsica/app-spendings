<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Category;
use App\Models\Log;
use App\Models\Source;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['sources'] = Source::where('user_id','=',session('user_id'))->get();
//        $data['categories'] = Category::where('user_id','=',session('user_id'))->orWhere('user_id','=',null);
        $data['categories'] = Category::where('user_id', session('user_id'))->orWhereNull('user_id')->get();
        $data['transactions'] = Log::where('user_id','=',session('user_id'))->orderBy('id', 'DESC')->take(30)->get();
        $data['banks'] = Bank::all();

        return view('front-end.index',compact('data'));
    }

    public function logInCheck(Request $request)
    {
//        dd($request);
        $user = User::where('name','=',$request->name)->first();
        if($user){
            $user['password'] = Hash::check($user->password,$request->password);
            if($user['password']){
                Session::put('user_name',$user['name']);
                Session::put('user_id',$user['id']);
                if($user['name']=='sweetsica'){
                    Session::put('user_role','admin');
                }
                return redirect()->route('home')->with(['message' => 'Đăng nhập thành công!']);
            }else{
                return redirect()->route('home')->with(['message' => 'Sai tài khoản hoặc mật khẩu!']);
            }
        }else{
            return redirect()->route('home')->with(['message' => 'Sai tài khoản hoặc mật khẩu!']);
        }
    }

    public function logOut()
    {
        Session::flush();
        return redirect()->route('login')->with(['message' => 'Đăng xuất thành công!']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
