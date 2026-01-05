<?php

namespace App\Filament\Resources\Registrations\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Actions\Action;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RegistrationsExport;

class RegistrationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_lengkap')->searchable()->sortable(),
                TextColumn::make('email')->searchable(),
                TextColumn::make('asal_sekolah'),
                TextColumn::make('kelas_jenjang'),
                TextColumn::make('created_at')->dateTime()->sortable(),
            ])
            ->defaultSort('created_at', 'desc')

            ->headerActions([
                Action::make('export_excel')
                    ->label('Export Excel')
                    ->icon('heroicon-o-document')
                    ->action(function () {
                        return Excel::download(new RegistrationsExport, 'registrations.xlsx');
                    }),
            ]);
    }
}
