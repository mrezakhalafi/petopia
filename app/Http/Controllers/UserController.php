<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;
use Illuminate\Http\Request;
use Hash;
use Session;

class UserController extends Controller
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
    public function store(Request $request)
    {

        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required|email',
            'password' => 'min:6|required_with:konfirmasi_password|same:konfirmasi_password',
            'konfirmasi_password' => 'required|min:6',
            'telepon' => 'required'
          ]);

        $user = new User;
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->telepon = $request->telepon;
        $user->role = "2";

        $user->save();

        return redirect('/login')->with('success','Registrasi berhasil! Silahkan login.');
    }

    public function login(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
          ]);

          $email = $request->email;
          $password = $request->password;
  
          $data = User::where('email',$email)->first();
          if($data){ 
              if(Hash::check($password,$data->password)){
                    $request->session()->put('name', $data->nama);
                    $request->session()->put('email', $data->email);
                    return redirect('/');
              }
              else{
                  return redirect('/login')->with('alert','Password yang anda masukan salah!');
              }
          }
          else{
              return redirect('/login')->with('alert','Email yang anda masukan belum terdaftar!');
          }
    }

    public function home(Product $product)
    {
        $hewan = Product::all()->where('id_kategori',1);
        $makanan = Product::all()->where('id_kategori',2);
        $aksesoris = Product::all()->where('id_kategori',3);

        $bestseller = Product::all()->where('id_kategori',9);
        $flashsale = Product::all()->where('id_kategori',8);
        

        return view('home',['hewan' => $hewan, 'makanan'=> $makanan, 'aksesoris' => $aksesoris, 'bestseller' => $bestseller, 'flashsale' => $flashsale]);
    }

    public function logout(Request $request)
    {
        Session::flush();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $data = User::all();
        return $user->nama;
        // if($user->email==$data[0]['email']){
        //     return "Hehe";
        // }else{
        //     return "Hoho";
        // }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
