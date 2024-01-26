<?php

namespace App\Http\Controllers;

use App\Http\Requests\BusinessPostRequest;
use App\Models\Business;
use App\Models\ThirdParty;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Session, DB;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $businesses = Business::latest()->paginate();

        return view('pages.business.index', [
            'businesses' => $businesses
        ]);
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
    {
        try {
            DB::transaction(function () use ($request) {
                $thirdParty = ThirdParty::create($request->only('prefix', 'firstname', 'lastname', 'username', 'email', 'password'));
                $input = $request->except('prefix', 'firstname', 'lastname', 'username', 'email', 'password');
                $thirdParty->business()->create($input);
            });
            Session::flash('success', 'Successfully Created');
        } catch (\Exception $e) {
            Session::flash('error', $e->getMessage());
        }
        return redirect('businesses');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $business = Business::with('thirdParty')->where('id', $id)->first();
        return view('pages.business.view', [
            'business' => $business
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $business = Business::with('thirdParty')->where('id', $id)->first();
        return view('pages.business.edit', [
            'business' => $business
        ]);
    }

    /**
     * @param BusinessPostRequest $request
     * @param string $id
     * @return Application|\Illuminate\Foundation\Application|RedirectResponse|Redirector
     */
    public function update(BusinessPostRequest $request, string $id)
    {
        try {
            DB::transaction(function () use ($request, $id) {
                $business = Business::find($id);
                ThirdParty::where('id', $business->third_party_id)->update($request->only('prefix', 'firstname', 'lastname', 'username', 'email'));
                $business->update($request->except('prefix', 'firstname', 'lastname', 'username', 'email'));
            });
            Session::flash('success', S_UPDATE_MSG);
        } catch (\Exception $e) {
            Session::flash('error', E_UPDATE_MSG);
        }
        return redirect('businesses');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            DB::transaction(function () use ($id) {
                $data = ThirdParty::find($id);
                $data->business()->delete();
                $data->delete();
            });
            Session::flash('success', S_DELETE_MSG);
        } catch (\Exception $e) {
            Session::flash('error', E_DELETE_MSG);
        }
        return redirect()->back();
    }
}
