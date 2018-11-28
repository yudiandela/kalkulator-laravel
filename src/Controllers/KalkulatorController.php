<?php

namespace YudiAndela\Kalkulator\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KalkulatorController extends Controller
{
    /**
     * Show index kalkulator
     *
     * @return void
     */
    public function index()
    {
        return view('vendor.kalkulator.index');
    }

    /**
     * Show value from $a + $b
     *
     * @param [type] $a
     * @param [type] $b
     * @return void
     */
    public function tambah($a, $b)
    {
        $title = 'Penjumlahan';
        $hasil = $a + $b;
        return view('vendor.kalkulator.show', compact(['a', 'b', 'title', 'hasil']));
    }

    /**
     * Show value from $a - $b
     *
     * @param [type] $a
     * @param [type] $b
     * @return void
     */
    public function kurang($a, $b)
    {
        $title = 'Pengurangan';
        $hasil = $a - $b;
        return view('vendor.kalkulator.show', compact(['a', 'b', 'title', 'hasil']));
    }

    /**
     * Show value from $a / $b
     *
     * @param [type] $a
     * @param [type] $b
     * @return void
     */
    public function bagi($a, $b)
    {
        $title = 'Pembagian';
        $hasil = $a / $b;
        return view('vendor.kalkulator.show', compact(['a', 'b', 'title', 'hasil']));
    }

    /**
     * Show value from $a * $b
     *
     * @param [type] $a
     * @param [type] $b
     * @return void
     */
    public function kali($a, $b)
    {
        $title = 'Perkalian';
        $hasil = $a * $b;
        return view('vendor.kalkulator.show', compact(['a', 'b', 'title', 'hasil']));
    }
}
