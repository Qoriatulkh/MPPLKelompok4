<?php

namespace App\Http\Controllers;

use App\DataTables\ParalegalCaseTypeDataTable;
use App\ParalegalCaseType;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ParalegalCaseTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ParalegalCaseTypeDataTable $paralegalCaseTypeDataTable)
    {
        return $paralegalCaseTypeDataTable->render('cases.types.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = ParalegalCaseType::create([
            'name' => $request->name
        ]);

        Alert::success('Berhasil', "Berhasil menambah jenis kasus " . $type->name);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ParalegalCaseType  $paralegalCaseType
     * @return \Illuminate\Http\Response
     */
    public function show(ParalegalCaseType $paralegalCaseType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ParalegalCaseType  $paralegalCaseType
     * @return \Illuminate\Http\Response
     */
    public function edit(ParalegalCaseType $paralegalCaseType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ParalegalCaseType  $paralegalCaseType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParalegalCaseType $paralegalCaseType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ParalegalCaseType  $paralegalCaseType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParalegalCaseType $paralegalCaseType)
    {
        $paralegalCaseType->delete();

        Alert::success("Berhasil", "Berhasil menghapus bidang kasus " . $paralegalCaseType->name);
        return redirect()->back();
    }
}
