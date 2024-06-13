<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Tag;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total category', Category::count())
                ->description('Increase in categories')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success')
                ->chart([7, 9, 5, 3, 4, 15]),
            Stat::make('Total articles', Article::count())
                ->description('Increase in articles')
                ->descriptionIcon('heroicon-o-document-chart-bar')
                ->color('danger')
                ->chart([7, 9, 5, 3, 4, 15]),
            Stat::make('Total comment', Comment::count())
                ->color('danger')
                ->description('Article commit')
                ->descriptionIcon('heroicon-o-pencil')
                ->color('warning')
                ->chart([7, 9, 5, 3, 4, 15]),
        ];
    }
}
