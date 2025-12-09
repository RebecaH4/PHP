<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Students::all();
        if($students->isEmpty()){
            return response()->json([
                "status"=> "error",
                "message"=> "No se encontraron estudiantes"
            ], 200);
        }
        return response()->json($students, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'name'=> 'required',
            'phone'=> 'required',
            'language'=> 'required'
        ]);
        
        if($validator->fails()){
            return response()->json([
                'message' => 'Datos incorrectos',
                'error' => $validator ->errors()
            ], 400);
        }
        $student = Students::create([
            'name'=> $request->name,
            'phone'=> $request->phone,
            'language'=> $request->language,
        ]);
        if(!$student){
            return response()->json([
                'status'=> 'error',
                'message'=> 'Error al crear estudiante'
            ], 500);
        }
        return response()->json($student,200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $student = Students::find($id);
        if(!$student){
            return response()->json([
                'status'=>'error',
                'message'=>'Estudiante no encontrado'
            ], 404);
        }
        return response()->json($student,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $student = Students::find($id);
        if(!$student){
            return response()->json([
                'status'=>'error',
                'message'=>'Estudiante no encontrado'
            ],404);
        }
        $validator = Validator::make($request->all(), [
            'name'=> 'required',
            'phone'=> 'required',
            'language'=> 'required'
        ]);
        
        if($validator->fails()){
            return response()->json([
                'status'=>'error',
                'message' => 'Error al validar datos',
                'error' => $validator ->errors()
            ], 400);
        }
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->language = $request->language;

        $student->save();
        return response()->json([
            'status'=>'success',
            'message' => 'Estudiante actualizado con exito',
            'data'=> $student
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $student = Students::find($id);
        if(!$student){
            return response()->json([
                'status'=>'error',
                'message'=>'Estudiante no encontrado'
            ], 404);
        }
        $student->delete();
        return response()->json([
            'status'=>'success',
            'message'=>'Estudiante eliminado'
        ], 200);
    }

    public function updatePart(Request $request, $id)
    {
        $student = Students::find($id);
        if(!$student){
            return response()->json([
                'status'=>'error',
                'message' => 'Estudiante no encontrado'
            ], 404);
        }
        $validator = Validator::make($request->all(), [
            'name'=> '',
            'phone'=> '',
            'language'=> ''
        ]);
        
        if($validator->fails()){
            return response()->json([
                'status'=>'error',
                'message' => 'Error al validar datos',
                'error' => $validator ->errors()
            ], 400);
        }
        if($request->has('name')){
            $student->name = $request->name;
        }
        if($request->has('phone')){
            $student->phone = $request->phone;
        }
        if($request->has('language')){
            $student->language = $request->language;
        }

        $student->save();
        return response()->json([
            'status'=>'success',
            'message' => 'Estudiante actualizado parcialmemte con exito',
            'data'=> $student
        ], 200);
    }
}