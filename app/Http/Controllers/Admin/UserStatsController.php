<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserStatsController extends Controller
{
    public function index()
    {
        $days = collect(range(0, 29))->map(function ($i) {
            return Carbon::today()->subDays($i)->format('Y-m-d');
        })->reverse();

        $activeUsers = DB::table('login_activities')
            ->selectRaw('DATE(logged_in_at) as date, COUNT(DISTINCT user_id) as count')
            ->where('logged_in_at', '>=', Carbon::today()->subDays(29))
            ->groupBy('date')
            ->pluck('count', 'date');

        $totalUsers = DB::table('users')
            ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->where('created_at', '>=', Carbon::today()->subDays(29))
            ->groupBy('date')
            ->pluck('count', 'date');

        $labels = [];
        $activeData = [];
        $totalData = [];
        $cumulativeUsers = DB::table('users')->where('created_at', '<', Carbon::today()->subDays(29))->count();

        foreach ($days as $day) {
            $labels[] = Carbon::parse($day)->format('M d');
            $activeData[] = $activeUsers[$day] ?? 0;

            $cumulativeUsers += $totalUsers[$day] ?? 0;
            $totalData[] = $cumulativeUsers;
        }

        return response()->json([
            'labels' => $labels,
            'active_users' => $activeData,
            'total_users' => $totalData,
        ]);
    }
}
