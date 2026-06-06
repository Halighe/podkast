<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Models\ActivityBlock;
use App\Http\Resources\ActivityBlockResource;

class ActivityBlockController extends Controller
{
     public function index(): JsonResponse
    {
        $blocks = ActivityBlock::with('documents')
            ->orderBy('sort_order')
            ->get();
        
        return response()->json(ActivityBlockResource::collection($blocks));
    }
    
    public function getByType(string $type): JsonResponse
    {
        $validTypes = ['study', 'extracurricular', 'additional'];
        
        if (!in_array($type, $validTypes)) {
            return response()->json([
                'error' => 'Неверный тип деятельности',
                'allowed_types' => $validTypes
            ], 400);
        }
        
        $blocks = ActivityBlock::where('type', $type)
            ->with('documents')
            ->orderBy('sort_order')
            ->get();
        
        return response()->json(ActivityBlockResource::collection($blocks));
    }
}