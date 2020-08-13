<?php

namespace App\Http\Controllers;

use App\WorkOrder;
use App\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Imports\WorkOrderImport;
use Maatwebsite\Excel\Facades\Excel;

class WorkOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(WorkOrder $work_order, DB $db)
    {
        //
        $count = count($work_order::All());
        $wo = $db::table('work_orders as a')
            ->join('employees as b', 'a.employee_id', '=', 'b.id')
            ->where('a.id', '=', $id)
            ->select('a.wo_number', 'a.wo_description', 'b.name as employee', 'a.price', 'status', 'a.created_at', 'b.updated_at')
            ->get();

        return view('work_order.index')->with(
            [
                'orden_trabajo' => $wo,
                'count' => $count
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Employee $employee)
    {
        //
        $trabajadores = array('' => '[Seleccione una opción]');
        foreach ($employee::all() as $value) {
            $trabajadores[$value->id] = $value->name;
        }
        return view('work_order.new')->with(
            [
                'trabajadores' => $trabajadores
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, WorkOrder $wo)
    {
        //
        $wo->wo_number = $request->numero_ot;
        $wo->wo_description = $request->descripcion;
        $wo->employee_id = $request->trabajador;
        $wo->price = $request->precio;
        $wo->status = $request->estado;

        if($wo->save()){
            $status = true;
            $message = "La orden de trabajo ".$wo->wo_number." se ha creado correctamente";
        } else {
            $status = false;
            $message = "Error al crear la orden de trabajo";
        }
        
        return response()->json([
            'status' => $status,
            'message' => $message
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WorkOrder  $workOrder
     * @return \Illuminate\Http\Response
     */
    public function show(DB $db, $id)
    {
        //
        $wo = $db::table('work_orders as a')
            ->join('employees as b', 'a.employee_id', '=', 'b.id')
            ->where('a.id', '=', $id)
            ->select('a.wo_number', 'a.wo_description', 'b.name as employee', 'a.price', 'status', 'a.created_at', 'b.updated_at')
            ->get();
        return view('work_order.view')->with(
            [
                'orden_trabajo' => $wo
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WorkOrder  $workOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee, DB $db, $id)
    {
        //
        $wo = $db::table('work_orders as a')
            ->join('employees as b', 'a.employee_id', '=', 'b.id')
            ->where('a.id', '=', $id)
            ->select('a.wo_number', 'a.wo_description', 'b.name as employee', 'a.price', 'status', 'a.created_at', 'b.updated_at')
            ->get();
        
        $trabajadores = array('' => '[Seleccione una opción]');
        foreach ($employee::all() as $value){
            $trabajadores[$value->id] = $value->name;
        }
        
        return view('work_order.edit')->with(
            [
                'orden_trabajo' => $wo,
                'trabajadores' => $trabajadores
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WorkOrder  $wo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WorkOrder $wo, $id)
    {
        //
        if(
            $wo::where('id', '=', $id)->update(
                array(
                    'wo_number' => $request->numero_ot,
                    'wo_description' => $request->descripcion,
                    'employee_id' => $request->trabajador,
                    'price' => $request->precio,
                    'status' => $request->estado
                )
            )
        ){
            $status = true;
            $menssage = "Order de trabajo actualizada correctamente";
        } else {
            $status = false;
            $menssage = "Orden de trabajo no pudo ser actualizada";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WorkOrder  $wo
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkOrder $wo, $id)
    {
        //
    }

    public function import()
    {
        return Excel::import(new WorkOrderImport, '');
    }
}
