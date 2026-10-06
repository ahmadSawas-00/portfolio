<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class PortfolioController extends Controller
{
    public function index()
    {
        // جلب المشاريع ديناميكياً مع تخزين مؤقت لسرعة التحميل
        $repos = Cache::remember('github_repos_ahmadSawas-00', now()->addHours(6), function () {
            $response = Http::get('https://api.github.com/users/ahmadSawas-00/repos', [
                'sort' => 'updated',
                'per_page' => 6
            ]);

            return $response->successful() ? $response->json() : [];
        });

        return view('portfolio', compact('repos'));
    }

    public function switchLang($lang)
    {
        if (in_array($lang, ['ar', 'en'])) {
            session(['applocale' => $lang]);
        }
        return redirect()->back();
    }
}