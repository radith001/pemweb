<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;
use App\Helper\EncryptionHelper;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();

        $responseData = [
            'message' => 'success',
            'data' => $data,
        ];

        $encryptResponse = EncryptionHelper::encrypt(json_encode($responseData));

        return response()->json([
            'data' => $encryptResponse,
        ]);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        try {
            $product = Product::create([
                'name' => $validated['name'],
                'price' => $validated['price'],
            ]);

            $responseData = [
                'message' => 'Product created successfully',
                'data' => $product,
            ];

            $encryptedResponse = EncryptionHelper::encrypt(json_encode($responseData));

            return response()->json(['data' => $encryptedResponse]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error storing product: ' . $e->getMessage(),
            ], 500);
        }
    }


    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $responseData = [
            'message' => 'success',
            'data' => $product,
        ];

        $encrypted = EncryptionHelper::encrypt(json_encode($responseData));

        return response()->json(['data' => $encrypted]);
    }


    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'price' => 'sometimes|numeric',
        ]);

        $product->update($validated);

        $responseData = [
            'message' => 'Product updated successfully',
            'data' => $product,
        ];

        $encrypted = EncryptionHelper::encrypt(json_encode($responseData));

        return response()->json(['data' => $encrypted]);
    }

  
    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product->delete();

        $responseData = [
            'message' => 'Product deleted successfully',
            'data' => ['id' => $id],
        ];

        $encrypted = EncryptionHelper::encrypt(json_encode($responseData));

        return response()->json(['data' => $encrypted]);
    }


    public function decryptResponse(Request $request)
    {
        $encryptData = $request->input('data');

        try {
            $decryptedJson = EncryptionHelper::decrypt($encryptData);
            $decoded = json_decode($decryptedJson, true);

            return response()->json($decoded);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Decrypt Failed',
                'error' => $e->getMessage(),
            ], 400);
        }
    }
}
