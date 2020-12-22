<?php


namespace App\Http\Controllers;


use App\Models\Agency;
use App\Http\Requests\CreateRequest;
use App\Http\Requests\EditRequest;
use Illuminate\Http\Request;

class AgencyManager extends Controller
{
    public function index()
    {
        $agencies = Agency::all();
        return view('index', compact('agencies'));
    }

    public function create()
    {
        return view('add');
    }

    public function store(CreateRequest $request)
    {
        $agency = new Agency();
        $agency->fill($request->all());
        $agency->save();
        return redirect()->route('agency.index');
    }

    public function edit($id)
    {
        $agency = Agency::findOrFail($id);
        return view('edit', compact('agency'));
    }

    public function update(EditRequest $request, $id)
    {
        $agency = Agency::findOrFail($id);
        $agency->fill($request->all());
        $agency->save();
        return redirect()->route('agency.index');
    }

    public function destroy($id)
    {
        $agency = Agency::findOrFail($id);
        $agency->delete();
        return redirect()->route('agency.index');
    }

    public function search(Request $request)
    {
        $agencies = Agency::where('name', 'LIKE', '%' . $request->keyword . '%')->get();
        return view('index', compact('agencies'));
    }
}
