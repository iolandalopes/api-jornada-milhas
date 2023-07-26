<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Services\ReviewService;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\ReviewRequest;

class ReviewController extends Controller
{
    public function __construct(protected readonly ReviewService $service)
    {
    }

    public function store(ReviewRequest $request): JsonResponse
    {
        return response()->json($this->service->store($request->validated()));
    }

    public function update(ReviewRequest $request, Review $review): JsonResponse
    {
        return response()->json($this->service->update($review, $request->validated()));
    }

    public function destroy(Review $review): JsonResponse
    {
        return response()->json($review->delete());
    }

    public function returnReviews(): JsonResponse
    {
        return response()->json($this->service->returnReviews());
    }
}
