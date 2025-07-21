<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;


class TestController extends Controller
{
  
    public function index()
    {
        return response()->json([
            'message' => 'List of tests retrieved successfully.',
            'data' => Test::all(),
        ]);
    }

    
    public function show($id)
    {
        $test = Test::find($id);

        if (!$test) {
            return response()->json(['message' => 'Test not found.'], 404);
        }

        return response()->json([
            'message' => 'Test retrieved successfully.',
            'data' => $test,
        ]);
    }

   
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $test = Test::create($validated);

        return response()->json([
            'message' => 'Test created successfully.',
            'data' => $test,
        ], 201);
    }

    
    public function update(Request $request, $id)
    {
        $test = Test::find($id);

        if (!$test) {
            return response()->json(['message' => 'Test not found.'], 404);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $test->update($validated);

        return response()->json([
            'message' => 'Test updated successfully.',
            'data' => $test,
        ]);
    }

   
    public function destroy($id)
    {
        $test = Test::find($id);

        if (!$test) {
            return response()->json(['message' => 'Test not found.'], 404);
        }

        $test->delete();

        return response()->json(['message' => 'Test deleted successfully.']);
    }
}
