<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coverage;
use App\Models\SalesComputation;

class CoverageController extends Controller
{
    public function salesComputation()
    {
        $salesComputations = SalesComputation::all();

        return view('coverages.salescomputation', ['salesComputations' => $salesComputations]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coverages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'own_damage_theft' => 'required|max:255',
            'bodilly_injured' => 'required|max:255',
            'property_damage' => 'required|max:255',
            'auto_pa_five_seats' => 'required|max:255',
            'aog' => 'required|max:255',
            'rate' => 'required|max:255',
            'sales_agent_id' => 'required|integer',
            'category_id' => 'required|integer',
            'provider_id' => 'required|integer',
        ]);

        $coverage = Coverage::create($validatedData);

        // After storing in coverage table, let's create sales_computation record
    $odtComputation = $coverage->own_damage_theft * ($coverage->rate/100);
    $aogComputation = $coverage->aog * 0.005; // Example calculation, adjust as per your needs
    $netPremium = $odtComputation + 420 + 1245 + $aogComputation;
    $dst = $netPremium * 0.125;
    $vat = $netPremium * 0.12;
    $lgt = $netPremium * 0.002;
    $grossPremium = ($netPremium + $dst + $vat + $lgt)- 100;

    // Create sales_computation record
    $salesComputation = SalesComputation::create([
        'sales_agent_id' => $coverage->sales_agent_id,
        'provider_id' => $coverage->provider_id,
        'service_category_id' => $coverage->category_id,
        'coverage_id' => $coverage->id,
        'odt_computation' => $odtComputation,
        'bi_computation' => 420,
        'pd_computation' => 1245,
        'apfs_computation' => 0,
        'aog_computation' => $aogComputation,
        'sa_rate' => $coverage->rate,
        'net_rate' => 0.85,
        'aog_net_rate' => 0.05,
        'aog_rate' => 0.005,
        'net_premium' => $netPremium,
        'dst' => $dst,
        'vat' => $vat,
        'lgt' => $lgt,
        'rap' => 0,
        'gross_premium' => $grossPremium,
    ]);

        // You can add a success message or redirect the user after storing the data
        return redirect()->route('coverages.salescomputation')->with('success', 'sales computation made successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
