<?php

namespace App\Filament\Resources\BerandaResource\Pages;

use App\Filament\Resources\BerandaResource;
use Filament\Resources\Pages\Page;

class Beranda extends Page
{
    protected static string $resource = BerandaResource::class;

    protected static string $view = 'filament.resources.beranda-resource.pages.beranda';
}
