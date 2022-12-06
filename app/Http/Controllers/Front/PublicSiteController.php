<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\PurshaseTransaction;


class PublicSiteController extends Controller
{
    public function showStores()
    {

        $stores = Store::paginate(10);
        foreach ($stores as $store) {
            $img_link = Storage::url($store->logo);
            $store->logo = $img_link;
        }
        return view('publicSite.pages.Stores')->with('stores', $stores);
    }

    public function showStore($id)
    {
    
        $store = Store::find($id);
        
          
        
        $products=Product::where('store_id',$id)->paginate(3);
        foreach ($products as $product) {
            $img_link = Storage::url($product->image);
            $product->image = $img_link;
        }
        return view('publicSite.pages.ShowStore')->with('store', $store)->with('products',$products);
    }

    public function showProduct($id)
    {
    
        $product = Product::find($id);
    
            $img_link = Storage::url($product->image);
            $product->image = $img_link;
       
        return view('publicSite.pages.ShowProduct')->with('product',$product);
    }

    public function AddToCart($id)
    {
    
        $product = Product::find($id);
        $flag= $product->flag;
        $storeId = $product->store_id;
        $purshase_transaction= new PurshaseTransaction;
        $purshase_transaction->product_id= $id;
    
        if ($flag==0) {
            $purshase_transaction->price= $product->base_price;

        }else{
            $purshase_transaction->price=$product->discount_price;
        }
        
        $purshase_transaction->save();
        return redirect(route('home'));
    }
    public function SearchProduct(Request $request)
    {
        $search= $request->search;
        $products=Product::where('name','LIKE',"%{$search}%")->get();
        foreach ($products as $product) {
            $img_link = Storage::url($product->image);
            $product->image = $img_link;
        }
        return view('publicSite.pages.SearchProduct')->with('products',$products);
    }
}
