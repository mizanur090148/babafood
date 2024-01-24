<?php

namespace App\Http\Controllers;

use App\Http\Requests\BusinessPostRequest;
use App\Models\ThirdParty;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.business.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.business.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BusinessPostRequest $request)
    {dd($request->all());
        try {
            $user = ThirdParty::create($request->only('prefix','firstname','lastname','username','email','password'));
            if ($user) {
                ThirdParty::create($request->except('prefix','firstname','lastname','username','email','password'));
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        return redirect('businesses');
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
