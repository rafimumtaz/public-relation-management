<?php

namespace App\Filament\Widgets;

use App\Models\BrandAsset;
use App\Models\CsrEvent;
use App\Models\CsrMediaGallery;
use App\Models\MediaCoverage;
use App\Models\PressRelease;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Brand Assets', BrandAsset::count())
                ->description('Total Brand Assets')
                ->descriptionIcon('heroicon-m-photo')
                ->color('primary'),
            Stat::make('CSR Events', CsrEvent::count())
                ->description('Total CSR Events')
                ->descriptionIcon('heroicon-m-calendar')
                ->color('success'),
            Stat::make('CSR Media Galleries', CsrMediaGallery::count())
                ->description('Total CSR Media Galleries')
                ->descriptionIcon('heroicon-m-film')
                ->color('warning'),
            Stat::make('Media Coverages', MediaCoverage::count())
                ->description('Total Media Coverages')
                ->descriptionIcon('heroicon-m-newspaper')
                ->color('danger'),
            Stat::make('Press Releases', PressRelease::count())
                ->description('Total Press Releases')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('info'),
        ];
    }
}
