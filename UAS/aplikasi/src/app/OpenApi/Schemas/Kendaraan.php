<?php

namespace App\OpenApi\Schemas;

/**
 * @OA\Schema(
 *     schema="Kendaraan",
 *     type="object",
 *     title="Kendaraan",
 *     required={"id", "brand", "model", "year", "color", "price"},
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="brand", type="string", example="Yamaha"),
 *     @OA\Property(property="model", type="string", example="NMAX"),
 *     @OA\Property(property="year", type="string", example="2023"),
 *     @OA\Property(property="color", type="string", example="Hitam"),
 *     @OA\Property(property="price", type="integer", example=25000000),
 *     @OA\Property(property="created_at", type="string", format="date-time", example="2025-01-01T12:00:00Z"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", example="2025-01-01T12:00:00Z")
 * )
 */
class Kendaraan {}