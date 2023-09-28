<?php

namespace App\Http\Controllers;

use App\Models\Prioridad;
use Illuminate\Http\Request;

/**
 * Class PrioridadController
 * @package App\Http\Controllers
 */
class PrioridadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prioridads = Prioridad::paginate();

        return view('prioridad.index', compact('prioridads'))
            ->with('i', (request()->input('page', 1) - 1) * $prioridads->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prioridad = new Prioridad();
        return view('prioridad.create', compact('prioridad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Prioridad::$rules);

        $prioridad = Prioridad::create($request->all());

        return redirect()->route('prioridads.index')
            ->with('success', 'Prioridad created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prioridad = Prioridad::find($id);

        return view('prioridad.show', compact('prioridad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prioridad = Prioridad::find($id);

        return view('prioridad.edit', compact('prioridad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Prioridad $prioridad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prioridad $prioridad)
    {
        request()->validate(Prioridad::$rules);

        $prioridad->update($request->all());

        return redirect()->route('prioridads.index')
            ->with('success', 'Prioridad updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $prioridad = Prioridad::find($id)->delete();

        return redirect()->route('prioridads.index')
            ->with('success', 'Prioridad deleted successfully');
    }
}
