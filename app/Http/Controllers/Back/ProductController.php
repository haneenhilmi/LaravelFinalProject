<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Models\Product;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProductRequest;




class ProductController extends Controller
{
    use SoftDeletes;
   
    public function index()
    {


        $products = Product::with('store')->paginate(5);

        foreach ($products as $product) {
            $img_link = Storage::url($product->image);
            $product->image = $img_link;
        }
        return view('Admin.Product.index')->with('products', $products);
    }


    public function create()
    {
        $stores = Store::select()->get();
        return view('Admin.Product.create')->with('stores', $stores);
    }


    public function store(ProductRequest $request)
    {
        $name = $request['name'];
        $Store_id = $request['Store_id'];
        $description = $request['description'];
        $base_price = $request['base_price'];
        $discount_price = $request['discount_price'];
        $flag = $request['flag'];
        $image = $request->file('image');
        $path = "uploads/img/";
        $imagename = time() + rand(1, 10000000) . '.' . $image->getClientOriginalExtension();
        Storage::disk('local')->put($path . $imagename, file_get_contents($image));

        $product = new Product();
        $product->name = $name;
        $product->store_id = $Store_id;
        $product->description = $description;
        $product->base_price = $base_price;
        $product->discount_price = $discount_price;
        $product->flag = $flag;
        $product->image = $path . $imagename;


        $result = $product->save();

        return redirect()->back()->with('message', 'Product Added Successfully');
    }


    public function show(Store $store)
    {
    }


    public function edit($id)
    {
        $product = Product::find($id);
        $stores = Store::select()->get();

        $img_link = Storage::url($product->image);
        $product->image = $img_link;

        return view('Admin.Product.edit')->with('product', $product)->with('stores', $stores);
    }


    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $input = $request->all();
        if ($request->has('image')) {
            $image = $request->file('image');
            $path = "uploads/img/";
            $imgname = time() + rand(1, 10000000) . '.' . $image->getClientOriginalExtension();
            Storage::put($path . $imgname, file_get_contents($image));
            $input['image'] = $path . $imgname;
        }

        $product = $product->update($input);

        if ($request->has('image')) {
            $image = $request->file('image');
            $path = "uploads/img/";
            $imagename = time() + rand(1, 10000000) . '.' . $image->getClientOriginalExtension();
            Storage::disk('local')->put($path . $imagename, file_get_contents($image));
            $product = Product::find($id);
            $product->image = $path . $imagename;
            $result = $product->save();
        }

        $name = $request->name;
        $Store_id = $request->Store_id;
        $description = $request->description;
        $base_price = $request->base_price;
        $discount_price = $request->discount_price;
        $flag = $request->flag;

        $product = Product::find($id);

        $product->name = $name;
        $product->store_id = $Store_id;
        $product->description = $description;
        $product->base_price = $base_price;
        $product->discount_price = $discount_price;
        $product->flag = $flag;
        $result = $product->save();

        return redirect()->route('products.index')->with('message', 'Product Updated Successfully');
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('message', 'Product Deleted Successfully');
    }
}
