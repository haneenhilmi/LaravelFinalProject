<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreRequest;

class StoreController extends Controller
{
    use SoftDeletes;
   
    public function index()
    {
        
        $stores = Store::paginate(5);
        foreach ($stores as $store) {
            $img_link = Storage::url($store->logo);
            $store->logo = $img_link;
        }
        return view('Admin.Store.index')->with('stores', $stores);
    }

  
    public function create()
    {
        return view('Admin.Store.create');
    }

   
    public function store(StoreRequest $request)
    {
        $name = $request['name'];
        $address = $request['address'];
        $logo = $request->file('logo');
        $path = "uploads/img/";
        $logoname = time() + rand(1, 10000000) . '.' . $logo->getClientOriginalExtension();
        Storage::disk('local')->put($path . $logoname, file_get_contents($logo));

        $store = new Store();
        $store->name = $name;
        $store->address = $address;
        $store->logo = $path . $logoname;

        $result = $store->save();

        return redirect()->back()->with('message', 'Store Added Successfully');
    }

  
    

    public function edit($id)
    {
        $store = Store::find($id);

        $logo_link = Storage::url($store->image);
        $store->logo = $logo_link;

        return view('Admin.Store.edit')->with('store', $store);
    }

    
    public function update(Request $request, $id)
    {
        if ($request->has('logo')) {
            $logo = $request->file('logo');
            $path = "uploads/img/";
            $logoname = time() + rand(1, 10000000) . '.' . $logo->getClientOriginalExtension();
            Storage::disk('local')->put($path . $logoname, file_get_contents($logo));
            $store = Store::find($id);
            $store->logo = $path . $logoname;
            $result = $store->save();
        }
        $name = $request->name;
        $address = $request->address;
        $store = Store::find($id);
        $store->name = $name;
        $store->address = $address;
        $result = $store->save();

        return redirect()->route('stores.index')->with('message', 'Store Updated Successfully');;
    }

    public function destroy($id)
    {
        $store = Store::find($id);
        $store->delete();
        return redirect()->back()->with('message', 'Store Deleted Successfully');;
    }
}
