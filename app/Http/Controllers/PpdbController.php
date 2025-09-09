<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePpdbRequest;
use App\Models\Ppdb;
use App\Models\Setting;
class PpdbController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $is_ppdb_open = Setting::get('ppdb_status', 'true') === 'true';
        
        if (!$is_ppdb_open) {
            return view('ppdb.closed');
        }
        
        return view('ppdb.create', compact('is_ppdb_open'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePpdbRequest $request)
    {
        $is_ppdb_open = Setting::get('ppdb_status', 'true') === 'true';
        
        if (!$is_ppdb_open) {
            return redirect()->route('ppdb.create')
                ->with('error', 'Pendaftaran PPDB sedang ditutup.');
        }
        
        $ppdb = Ppdb::create($request->validated());

        return view('ppdb.success');
    }
}