<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Source;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['sources'] = Source::where('user_id','=',session('user_id'))->get();
        $data['banks'] = Bank::all();
        return view('front-end.source.index',compact('data'));
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
        if($request['name_custom']){
            $name_source = $request['name_custom'];
        }else{
            $name_source = Bank::find($request['bank_id'])->shortName;
        }
        $source = Source::create([
            'user_id' => $request['user_id'],
            'name'=> $name_source,
            'total'=> $request['total'],
        ]);
        $source->save();
        return redirect()->back();
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
