<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calificaciones;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ExampleController extends Controller
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
