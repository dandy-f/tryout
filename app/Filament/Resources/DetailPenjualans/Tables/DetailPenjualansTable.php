<?php

namespace App\Filament\Resources\DetailPenjualans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DetailPenjualansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('penjualan_id')
                    ->numeric()
                    ->sortable()
                    ->label('Penjualan ID'),
                TextColumn::make('produk.nama_produk')
                    ->sortable()
                    ->label('Produk')
                    ->label('Nama Produk'),
                TextColumn::make('jumlah_produk')
                    ->numeric()
                    ->sortable()
                    ->label('Jumlah Produk'),
                TextColumn::make('subtotal')
                    ->numeric()
                    ->sortable()
                    ->label('SubTotal'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
