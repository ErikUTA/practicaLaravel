<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calificaciones;

class CalificacionesController extends Controller
{
    public function example()
    {
        try{
            $result = Calificaciones::select()->get();
            return $this->successResponse($result, 200);
        }catch(ModelNotFoundExeption $e){
            return $this->errorResponse('Algo salio mal', 422);
        }
    }
}
