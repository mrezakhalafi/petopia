<?php

namespace App\Http\Controllers;

use App\Product;
use App\Store;
use App\Comment;
use Illuminate\Http\Request;

class ProductController extends Controller
{
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Product $product)
    {
        $produk = Product::all()->where('id_kategori')->take(20);
        $count = Product::all()->where('id_kategori')->count();

        return view('store', ['product' => $produk, 'count' => $count]);
    }

    public function category($category)
    {

           
        if($category=='hewan'){
            $produk = Product::all()->where('id_kategori',1)->take(20);
            $count = Product::all()->where('id_kategori',1)->count();
        }
        elseif($category=='konsumsi'){
            $produk = Product::all()->where('id_kategori',2)->take(20);
            $count = Product::all()->where('id_kategori',2)->count();
        }
        elseif($category=='aksesoris'){
            $produk = Product::all()->where('id_kategori',3)->take(20);
            $count = Product::all()->where('id_kategori',3)->count();
        }
        elseif($category=='market'){
            $produk = Product::all()->where('id_kategori',4)->take(20);
            $count = Product::all()->where('id_kategori',4)->count();
        }elseif($category=='dogfood'){
            $produk = Product::all()->where('id_kategori',5)->take(20);
            $count = Product::all()->where('id_kategori',5)->count();
        }elseif($category=='catfood'){
            $produk = Product::all()->where('id_kategori',10)->take(20);
            $count = Product::all()->where('id_kategori',10)->count();
        }elseif($category=='fishfood'){
            $produk = Product::all()->where('id_kategori',10)->take(20);
            $count = Product::all()->where('id_kategori',10)->count();
        }elseif($category=='birdfood'){
            $produk = Product::all()->where('id_kategori',10)->take(20);
            $count = Product::all()->where('id_kategori',10)->count();
        }elseif($category=='reptilfood'){
            $produk = Product::all()->where('id_kategori',10)->take(20);
            $count = Product::all()->where('id_kategori',10)->count();
        }elseif($category=='smallfood'){
            $produk = Product::all()->where('id_kategori',10)->take(20);
            $count = Product::all()->where('id_kategori',10)->count();
        }else{
            if(is_numeric($category) && $category<35 && $category > 0){
                $produk = Product::all()->where('id_sub_kategori',$category)->take(20);
                $count = Product::all()->where('id_sub_kategori',$category)->count();
            }else{
                return view('404');
            }
        }

        return view('store', ['product' => $produk, 'count' => $count]);
    }

    public function detail(Product $product)
    {
        $rekomendasi = Product::all()->where('id_kategori',1);
    
        $store = Store::where('id', $product['id_toko'])->first();
        
        $comment_count = Comment::where('id_products',$product['id'])->count();

        $comment = Comment::join('users', 'users.id', '=', 'comments.id_users')->where('id_products',$product['id'])->first();

        return view('detail', ['product' => $product, 'rekomendasi' => $rekomendasi, 'store' => $store, 'comment_count' => $comment_count, 'comment' => $comment ]);
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $produk = Product::where('nama', 'LIKE', '%'.$search.'%')->get();
        $count = Product::where('nama', 'LIKE', '%'.$search.'%')->count();

        return view('search', ['product' => $produk, 'count' => $count]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
