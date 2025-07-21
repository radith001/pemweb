<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Annotations as OA;
use App\Helper\EncryptionHelper;
class Kendaraan extends Controller
{
        /**
         * @OA\Get(
         *     path="/api/kendaraans",
         *     operationId="getKendaraans",
         *     tags={"Kendaraans"},
         *     summary="Get all kendaraan",
         *     description="Returns a list of all kendaraan.",
         *     security={{"ApiKeyAuth":{}}},
         *     @OA\Response(
         *         response=200,
         *         description="Successful operation",
         *         @OA\JsonContent(
         *             type="object",
         *             @OA\Property(property="message", type="string", example="success"),
         *             @OA\Property(
         *                 property="data",
         *                 type="array",
         *                 @OA\Items(ref="#/components/schemas/Kendaraan")
         *             )
         *         )
         *     ),
         *     @OA\Response(
         *         response=401,
         *         description="Unauthorized - Invalid API Key"
         *     )
         * )
         */
        public function index()
        {
            $data = \App\Models\Kendaraan::all();    
            $responseData = [
                'message' => 'success',
                'data' => $data,
            ];
    
            $encryptResponse = EncryptionHelper::encrypt(json_encode($responseData));
    
            return response()->json([
                'data' => $encryptResponse,
            ]);
        }

        /**
 * @OA\Post(
 *     path="/api/kendaraans",
 *     operationId="createKendaraan",
 *     tags={"Kendaraans"},
 *     summary="Create a new kendaraan",
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"brand","model","year","color","price"},
 *             @OA\Property(property="brand", type="string", example="Honda"),
 *             @OA\Property(property="model", type="string", example="Beat"),
 *             @OA\Property(property="year", type="string", example="2022"),
 *             @OA\Property(property="color", type="string", example="Hitam"),
 *             @OA\Property(property="price", type="integer", example=18000000)
 *         )
 *     ),
 *     @OA\Response(
 *         response=201,
 *         description="Created successfully",
 *     ),
 *     @OA\Response(response=400, description="Bad Request")
 * )
 */
public function store(Request $request)
{
    $request->validate([
        'brand' => 'required',
        'model' => 'required',
        'year' => 'required',
        'color' => 'required',
        'price' => 'required|numeric',
    ]);

    $kendaraan = \App\Models\Kendaraan::create($request->all());

    $responseData = [
        'message' => 'created',
        'data' => $kendaraan,
    ];

    return response()->json([
        'data' => EncryptionHelper::encrypt(json_encode($responseData)),
    ], 201);
}

/**
 * @OA\Put(
 *     path="/api/kendaraans/{id}",
 *     operationId="updateKendaraan",
 *     tags={"Kendaraans"},
 *     summary="Update kendaraan by ID",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             @OA\Property(property="brand", type="string", example="Honda"),
 *             @OA\Property(property="model", type="string", example="Beat"),
 *             @OA\Property(property="year", type="string", example="2022"),
 *             @OA\Property(property="color", type="string", example="Hitam"),
 *             @OA\Property(property="price", type="integer", example=18000000)
 *         )
 *     ),
 *     @OA\Response(response=200, description="Updated successfully"),
 *     @OA\Response(response=404, description="Data not found")
 * )
 */
public function update(Request $request, $id)
{
    $kendaraan = \App\Models\Kendaraan::find($id);
    if (!$kendaraan) {
        return response()->json(['data' => EncryptionHelper::encrypt(json_encode([
            'message' => 'not found'
        ]))], 404);
    }

    $kendaraan->update($request->all());

    $responseData = [
        'message' => 'updated',
        'data' => $kendaraan,
    ];

    return response()->json([
        'data' => EncryptionHelper::encrypt(json_encode($responseData)),
    ]);
}

/**
 * @OA\Delete(
 *     path="/api/kendaraans/{id}",
 *     operationId="deleteKendaraan",
 *     tags={"Kendaraans"},
 *     summary="Delete kendaraan by ID",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=200, description="Deleted successfully"),
 *     @OA\Response(response=404, description="Data not found")
 * )
 */
public function destroy($id)
{
    $kendaraan = \App\Models\Kendaraan::find($id);
    if (!$kendaraan) {
        return response()->json(['data' => EncryptionHelper::encrypt(json_encode([
            'message' => 'not found'
        ]))], 404);
    }

    $kendaraan->delete();

    return response()->json([
        'data' => EncryptionHelper::encrypt(json_encode([
            'message' => 'deleted',
        ]))
    ]);
}

}


