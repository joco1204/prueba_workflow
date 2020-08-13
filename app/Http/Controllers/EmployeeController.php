<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Employee $employee)
    {
        //
        $employees = $employee::All();
        $count = count($employees);
        return view('employee.index')->with(
            [
                'trabajadores' => $employees::paginate(10),
                'count' => $count
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('employee.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Employee $employee)
    {
        //
        $employee->name = $request->nombre_trabajador;
        $employee->identification = $request->identificacion;

        if($employee->save()){
            $status = true;
            $message = "El trabajador ".$employee->name." se ha creado correctamente";
        } else {
            $status = false;
            $message = "Error al crear el trabajador";
        }

        return response()->json([
            'status' => $status,
            'message' => $message
        ]);

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee, $id)
    {
        //
        return view('employee.view')->with(
            [
                'trabajador' => $employee::where('id', $id)->first()
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee, $id)
    {
        //
        return view('employee.edit')->with(
            [
                'trabajador' => $employee::where('id', $id)->first()
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee, $id)
    {
        //
        if($employee::where('id', '=', $id)->update(array('name' => $request->nombre_trabajador,'identification' => $request->identificacion))){
            $status = true;
            $menssage = "Trabajador actualizado correctamente";
        } else {
            $status = false;
            $menssage = "Trabajador no pudo ser actualizado";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee, $id)
    {
        //
    }
}
