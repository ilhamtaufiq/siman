<?php

namespace App\Filament\Resources\MakamResource\Widgets;

use App\Models\Makam;
use Carbon\CarbonImmutable;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Illuminate\Database\Eloquent\Builder;

class MakamOverview extends StatsOverviewWidget
{
    use InteractsWithPageFilters;

    public function getStats(): array
    {
        $tpu = $this->filters['tpu_id'] ?? null;

        return [
            StatsOverviewWidget\Stat::make(
                label: 'Total Makam',
                value: Makam::query()
                    ->when($tpu, fn (Builder $query) => $query->where('tpu_id', '=', $tpu))
                    ->count(),
            ),
            // ...
        ];
    }
}
