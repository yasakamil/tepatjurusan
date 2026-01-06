<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Models\AccountRegistration;
use App\Models\Payment;
use App\Models\Event; // Pastikan model ini ada
use App\Models\Article; // Pastikan model ini ada
use BackedEnum;
use Illuminate\Support\Facades\DB;

class Dashboard extends Page
{
    protected string $view = 'filament.pages.dashboard';
    protected static ?string $title = 'Dashboard';
    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-home';
    protected static ?int $navigationSort = 1;

    // Statistik card summary
    public function getStats(): array
    {
        return [
            'total_registrations' => AccountRegistration::count(),
            'pending_payments' => Payment::where('transaction_status', 'pending')->count(),
            'settlement_payments' => Payment::where('transaction_status', 'settlement')->count(),
            'total_revenue' => Payment::where('transaction_status', 'settlement')->sum('gross_amount'),
            'total_events' => Event::where('status', 'published')->count(),
            'total_articles' => Article::count(),
        ];
    }

    // Chart data settlement payments per month
    public function getSettlementChartData(): array
    {
        $year = now()->year;

        $data = Payment::selectRaw('MONTH(updated_at) as month, COUNT(*) as total')
            ->whereYear('updated_at', $year)
            ->where('transaction_status', 'settlement') 
            ->groupBy(DB::raw('MONTH(updated_at)')) 
            ->pluck('total', 'month')
            ->toArray();

        // Logic mengisi bulan kosong dengan 0
        $result = [];
        for ($i = 1; $i <= 12; $i++) {
            $result[$i] = $data[$i] ?? 0;
        }

        return $result;
    }

    // Chart data registrations per month
    public function getRegistrationChartData(): array
    {
        $year = now()->year;

        $data = AccountRegistration::selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->whereYear('created_at', $year)
            ->groupBy('month')
            ->pluck('total', 'month')
            ->toArray();

        $result = [];
        for ($i = 1; $i <= 12; $i++) {
            $result[$i] = $data[$i] ?? 0;
        }

        return $result;
    }

    // Chart data revenue (gross_amount) per month
    public function getRevenueChartData(): array
    {
        $year = now()->year;

        $data = Payment::selectRaw('MONTH(updated_at) as month, SUM(gross_amount) as total')
            ->whereYear('updated_at', $year)
            ->where('transaction_status', 'settlement')
            ->groupBy(DB::raw('MONTH(updated_at)'))
            ->pluck('total', 'month')
            ->toArray();

        $result = [];
        for ($i = 1; $i <= 12; $i++) {
            $result[$i] = $data[$i] ?? 0;
        }

        return $result;
    }

    // Chart data events per month
    public function getEventChartData(): array
    {
        $year = now()->year;

        $data = Event::selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->whereYear('created_at', $year)
            ->groupBy('month')
            ->pluck('total', 'month')
            ->toArray();

        $result = [];
        for ($i = 1; $i <= 12; $i++) {
            $result[$i] = $data[$i] ?? 0;
        }

        return $result;
    }

}