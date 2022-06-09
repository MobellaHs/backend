<?php

namespace App\Http\Controllers;

use App\Models\Chips;
use Illuminate\Http\JsonResponse;

class ChipsController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(
            Chips::all()
        );
    }

    public function store(Request $request): JsonResponse
    {
        $dados = $request->except('_token');

        $insumo = Chips::create($dados);

        return response()->json($insumo);
    }
}
