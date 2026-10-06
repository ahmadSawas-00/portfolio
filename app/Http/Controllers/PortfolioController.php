<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class PortfolioController extends Controller
{
    public function index()
    {
        // تم تغيير اسم مفتاح الكاش (أضفنا v2) لإجبار النظام على تجاهل الكاش القديم وجلب البيانات من جديد
        $repos = Cache::remember('github_repos_ahmadSawas_v2', now()->addHours(6), function () {
            
            // تمرير التوكن مع الطلب
            $response = Http::withToken(env('GITHUB_TOKEN'))->get('https://api.github.com/users/ahmadSawas-00/repos', [
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