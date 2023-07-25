<?php

namespace App\Services;

use App\Models\Review;

class ReviewService
{
    public function store(array $reviewData): Review
    {
        return Review::create([
            'userName' => $reviewData['userName'],
            'review' => $reviewData['review'],
            'photo' => $reviewData['photo'],
        ]);
    }

    public function update(Review $deposition, array $reviewData): bool
    {
        return $deposition->update($reviewData);
    }

    public function returnReviews(): array
    {
        return  Review::get()->unique('id')->random(3)->toArray();
    }
}
