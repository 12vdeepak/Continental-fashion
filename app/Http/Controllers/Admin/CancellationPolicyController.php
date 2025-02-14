<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CacellationRequest;
use App\Models\CancellationPolicy;

class CancellationPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cancellation = CancellationPolicy::first();
        return view('admin.cancellation-policy.index', compact('cancellation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  CancellationPolicy $cancellation_policy
     * @return \Illuminate\Http\Response
     */
    public function edit(CancellationPolicy $cancellation_policy)
    {
        return view('admin.cancellation-policy.edit', compact('cancellation_policy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CancellationRequest  $request
     * @param  CancellationPolicy  $cancellation_policy
     * @return \Illuminate\Http\Response
     */
    public function update(CacellationRequest $request, CancellationPolicy $cancellation_policy)
    {
        $cancellation_policy->description = $request->description;
        $cancellation_policy->save();

        return redirect()->route('cancellation-policy.index')->with('message', 'Cancellation Policy updated successfully!');
    }
}
