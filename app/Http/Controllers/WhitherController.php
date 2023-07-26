<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWhitherRequest;
use App\Http\Requests\UpdateWhitherRequest;
use App\Models\Whither;
use App\Services\WhitherService;
use Illuminate\Http\JsonResponse;

class WhitherController extends Controller
{
    public function __construct(protected readonly WhitherService $service)
    {
    }

    public function store(StoreWhitherRequest $request): JsonResponse
    {
        return response()->json($this->service->store($request->validated()));
    }

    public function update(Whither $whither, UpdateWhitherRequest $request): JsonResponse
    {
        return response()->json($this->service->update($whither, $request->validated()));
    }

    public function destroy(Whither $whither): JsonResponse
    {
        return response()->json($whither->delete());
    }
}
