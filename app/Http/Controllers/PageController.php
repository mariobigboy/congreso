<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    /**
     * Display icons page
     *
     * @return \Illuminate\View\View
     */
    public function icons()
    {
        return view('pages.icons');
    }


    /**
     * Display maps page
     *
     * @return \Illuminate\View\View
     */
    public function maps()
    {
        return view('pages.maps');
    }

    /**
     * Display tables page
     *
     * @return \Illuminate\View\View
     */
    public function tables()
    {
        return view('pages.tables');
    }

    /**
     * Display notifications page
     *
     * @return \Illuminate\View\View
     */
    public function notifications()
    {
        return view('pages.notifications');
    }

    /**
     * Display rtl page
     *
     * @return \Illuminate\View\View
     */
    public function rtl()
    {
        return view('pages.rtl');
    }

    /**
     * Display typography page
     *
     * @return \Illuminate\View\View
     */
    public function typography()
    {
        return view('pages.typography');
    }

    /**
     * Display upgrade page
     *
     * @return \Illuminate\View\View
     */
    public function upgrade()
    {
        return view('pages.upgrade');
    }

    /**
    * Display disertantes page
    *
    * @return \Illuminate\View\View
    */
    public function disertantes()
    {
        return view('pages.disertantes');
    }
    
    /**
    * Display disertantes page
    *
    * @return \Illuminate\View\View
    */
    public function programas()
    {
        return view('pages.programas');
    }
    
    /**
    * Display disertantes page
    *
    * @return \Illuminate\View\View
    */
    public function noticias()
    {
        return view('pages.noticias');
    }

    /**
    * Display disertantes page
    *
    * @return \Illuminate\View\View
    */
    public function cursos()
    {
        return view('pages.cursos');
    }

    /**
    * Display disertantes page
    *
    * @return \Illuminate\View\View
    */
    public function galerias()
    {
        return view('pages.galerias');
    }
}
