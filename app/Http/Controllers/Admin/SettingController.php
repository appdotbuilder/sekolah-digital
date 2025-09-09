<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display the settings management page.
     */
    public function index()
    {
        $settings = Setting::all()->keyBy('key');
        
        return view('admin.settings.index', compact('settings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'ppdb_status' => 'required|in:true,false'
        ]);

        Setting::set('ppdb_status', $request->ppdb_status);

        $status = $request->ppdb_status === 'true' ? 'dibuka' : 'ditutup';
        
        return redirect()->route('admin.settings.index')
            ->with('success', "Pendaftaran PPDB berhasil {$status}.");
    }
}