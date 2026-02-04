<?php

namespace App\Filament\Resources\DetailPenjualans\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DetailPenjualanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('penjualan_id')
                    ->required()
                    ->relationship('penjualan', 'tanggal_penjualan'),
                Select::make('produk_id')
                    ->required()
                    ->relationship('produk', 'nama_produk'),
                TextInput::make('jumlah_produk')
                    ->required()
                    ->numeric(),
                TextInput::make('subtotal')
                    ->required()
                    ->numeric(),
            ]);
    }
}
