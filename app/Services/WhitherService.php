<?php

namespace App\Services;

use App\Models\Whither;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

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

    public function searchWhither(?string $name): array
    {
        if (! $name) {
            return Whither::select('name', 'price', 'photo')->get()->toArray();
        }

        $whithers = Whither::select('name', 'price', 'photo')
            ->where('name', 'like', '%' . $name . '%')->get()->toArray();

        return ! isNull($whithers) ? $whithers : ['mensagem' => 'Nenhum destino foi encontrado'];
    }
}
