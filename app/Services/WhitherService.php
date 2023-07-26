<?php

namespace App\Services;

use App\Models\Whither;

class WhitherService
{
    public function store(array $whitherData): Whither
    {
        return Whither::create([
            'name' => $whitherData['name'],
            'price' => $whitherData['price'],
            'photo' => $whitherData['photo'],
        ]);
    }

    public function update(Whither $whither, array $whitherData): bool
    {
        return $whither->update($whitherData);
    }
}
