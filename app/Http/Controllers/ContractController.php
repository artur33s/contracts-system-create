<?php

namespace App\Http\Controllers;

use App\Contract;
use Carbon\Carbon;
use Illuminate\Http\Request;
use \Mpdf\Mpdf;
class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ALL CONTRACT PAGINATE 12
        $objects = Contract::orderByDesc('created_at')->paginate(12);

        // RETURN CONTRACT INDEX.BLADE + $objects variable
        return view('landing.contracts.index', compact('objects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('landing.contracts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // VALIDATE
        $request->validate([
            'contract_number' => 'required',
            'place' => 'required',
            'date' => 'required',
            'seller_full_name' => 'required',
            'seller_place_of_residence' => 'required',
            'seller_date_of_birth' => 'required',
            'seller_phone_number' => 'required',
            'buyer_full_name' => 'required',
            'buyer_company_name' => 'required',
            'buyer_personal_code' => 'required',
            'buyer_place_of_residence' => 'required',
            'buyer_phone_number' => 'required',
            'plot_goal' => 'required',
            'cadastral_number' => 'required',
            'address' => 'required',
            'plot_area' => 'required',
            'sum' => 'required',
            'bank_name' => 'required',
            'invoice_number' => 'required',
            'fine_sum' => 'required',
        ]);

        // NEW OBJECT
        $object = new Contract();

        // FILL ALL COLUMNS
        $object->fill($request->all());

        // OBJECT SAVE
        $object->save();

        return redirect()->route('contracts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // FIND CONTRACT
       $object = Contract::findOrFail($id);

       // Get year
       $year = Carbon::createFromFormat('Y-m-d', $object->date)->year;

       // Get month
       $month = Carbon::createFromFormat('Y-m-d', $object->date)->month;

       // Get day
       $day = Carbon::createFromFormat('Y-m-d', $object->date)->day;

       // RETURN CONTRACT SHOW BLADE + $OBJECTS VARIABLE
       return view('landing.contracts.show', compact('object', 'year', 'month', 'day'));
    }

    public function pdfDownload($id){
        // FIND CONTRACT
        $object = Contract::findOrFail($id);

        // Get year
        $year = Carbon::createFromFormat('Y-m-d', $object->date)->year;

        // Get month
        $month = Carbon::createFromFormat('Y-m-d', $object->date)->month;

        // Get day
        $day = Carbon::createFromFormat('Y-m-d', $object->date)->day;

        // hTML CODE
        $html = view('landing.contracts.contract_text', compact('object', 'year', 'month', 'day'))->toHtml();

        // new pdf
        $pdf = new Mpdf();

        // html convert to pdf
        $pdf->WriteHTML($html);

        // download
        $pdf->Output('prielimnari_sutartis.pdf', 'D');

        return view('landing.contracts.show');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // FIND THIS CONTRACT WITH ID
        $object = Contract::findOrFail($id);

        // RETURN CONTRACTS.EDIT BLADE + $object variable
        return view('landing.contracts.edit', compact('object'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // VALIDATE
        $request->validate([
            'contract_number' => 'required',
            'place' => 'required',
            'date' => 'required',
            'seller_full_name' => 'required',
            'seller_place_of_residence' => 'required',
            'seller_date_of_birth' => 'required',
            'seller_phone_number' => 'required',
            'buyer_full_name' => 'required',
            'buyer_company_name' => 'required',
            'buyer_personal_code' => 'required',
            'buyer_place_of_residence' => 'required',
            'buyer_phone_number' => 'required',
            'plot_goal' => 'required',
            'cadastral_number' => 'required',
            'address' => 'required',
            'plot_area' => 'required',
            'sum' => 'required',
            'bank_name' => 'required',
            'invoice_number' => 'required',
            'fine_sum' => 'required',
        ]);

        // FIND contract with id
        $object = Contract::findOrFail($id);

        // FILL ALL COLUMNS
        $object->fill($request->all());

        // SAVE
        $object->save();

        // REDIRECT INDEX page
        return redirect()->route('contracts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // FIND OBJECT (contract with id)
        $object = Contract::findOrFail($id);

        // DELETE OBJECT(contract)
        $object->delete();

        // REDIRECT INDEX PAGE
        return redirect()->route('contracts.index');
    }
}
