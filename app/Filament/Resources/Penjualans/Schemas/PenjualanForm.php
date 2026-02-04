<?php

namespace App\Filament\Resources\Penjualans\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

use function Laravel\Prompts\text;

class PenjualanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('tanggal_penjualan')
                ->type('date')
                ->label('Tanggal Penjualan'),
                TextInput::make('total_harga')
                ->label('Total Harga'),
                Select::make('pelanggan_id')
                ->label('Nama Pelanggan')
                ->relationship('pelanggan', 'nama_pelanggan'),
            ]);
    }
}
