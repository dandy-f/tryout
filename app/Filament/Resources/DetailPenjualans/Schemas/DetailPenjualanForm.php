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
                    ->label('Penjualan ID')
                    ->required()
                    ->relationship('penjualan', 'tanggal_penjualan'),
                Select::make('produk_id')
                    ->label('Nama Produk')
                    ->required()
                    ->relationship('produk', 'nama_produk'),
                TextInput::make('jumlah_produk')
                ->label('Jumlah Produk')
                    ->required()
                    ->numeric(),
                TextInput::make('subtotal')
                ->label('SubTotal')
                    ->required()
                    ->numeric(),
            ]);
    }
}
