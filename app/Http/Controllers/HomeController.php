<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function admin()
    {
        $prueba=1234;
        $cantidadveh=DB::select('select VehiculosTotales() as vehiculos');
        return view('Dashboards.Dashboard_admin', compact('cantidadveh','prueba'));
    }

    public function secretaria()
    {
        return view('Dashboards.Dashboard_secretaria');
    }

    public function guarda()
    {
        return view('Dashboards.Dashboard_guarda');
    }

    public function redirecion()
    {
        if (auth()->user()->ID_TIPO_USUARIO  == 1) {
            return redirect('/admin');
        } elseif (auth()->user()->ID_TIPO_USUARIO  == 2) {
            return redirect('/secretatia');
        } elseif (auth()->user()->ID_TIPO_USUARIO  == 3) {
            return redirect('/guarda');
        } else {
            return redirect('/');
        }
    }
}
