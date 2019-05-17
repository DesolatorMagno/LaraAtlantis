<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ThemeRequest;

class ThemeController extends Controller
{
    private $themes;

    public function __construct()
    {
        //$this->middleware('auth');
        $this->themes = collect([
            (object) ['id' => 1, 'name' => 'Light', 'age' => '15', 'location' => 'Far Away'],
            (object) ['id' => 2, 'name' => 'Blue', 'age' => '19', 'location' => 'Very Close'],
            (object) ['id' => 3, 'name' => 'Dark', 'age' => '23', 'location' => 'Very Very Close'],
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $salida = [
            //'themes' => Theme::all(),
            'themes' => $this->themes,
        ];
        return view('theme.example01.index', $salida);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return "Create";
        $salida = [
            'type'    => 'store',
            'theme' => "",
        ];
        return view('theme.example01.actions', $salida);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ThemeRequest $request)
    {
        //return "Store";
        return \redirect()->route('theme.index')->with('message', trans("msg.created", ['model' => trans('theme.theme')]))->with('message_type', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return "show";
        $salida = [
            'type'    => 'show',
            'theme' => $this->themes[$id - 1],
        ];
        return view('theme.example01.actions', $salida);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return "Edit";
        $salida = [
            'type'    => 'update',
            'theme' => $this->themes[$id - 1],
        ];
        return view('theme.example01.actions', $salida);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ThemeRequest $request, $id)
    {
        //return "Update";
        return redirect()->route('theme.index')->with('message', trans("msg.updated", ['model' => trans('theme.theme')]))->with('message_type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //return "Destroy!!!";
        return \redirect()->route('theme.index')->with('message', \trans("msg.deleted", ['model' => trans('theme.theme')]))->with('message_type', 'warning');
    }
}
