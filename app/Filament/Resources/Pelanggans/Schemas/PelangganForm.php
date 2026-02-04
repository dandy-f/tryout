<?php

namespace App\Filament\Resources\Pelanggans\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PelangganForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                // TextInput::make('id_pelanggan')->required(),
                TextInput::make('nama_pelanggan')->required()
                ->label('Nama Pelanggan'),
                TextInput::make('alamat')->required()
                ->label('Alamat'),
                TextInput::make('nomor_telepon')->required()
                ->label('Nomor Telepon'),
            ]);
    }
}
