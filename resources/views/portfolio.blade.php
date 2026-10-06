@php
    $locale = session('applocale', app()->getLocale());
    if(!in_array($locale, ['ar', 'en'])) { $locale = 'ar'; }

    $t = [
        'ar' => [
            'dir' => 'rtl',
            'nav_about' => 'عني',
            'nav_skills' => 'المهارات',
            'nav_cpc' => 'مسابقات البرمجة',
            'nav_projects' => 'المشاريع',
            'nav_contact' => 'تواصل معي',
            'switch_lang' => 'English 🌐',
            'target_lang' => 'en',
            'hero_edu' => 'طالب سنة خامسة - هندسة المعلوماتية في جامعة إيبلا الخاصة',
            'hero_title' => 'أحمد سواس',
            'hero_sub' => 'مهندس برمجيات ومطور ويب',
            'btn_projects' => 'استكشف مشاريعي',
            'btn_contact' => 'تواصل معي',
            'stat_years' => 'سنوات دراسة وبناء',
            'stat_cpc' => 'مسابقات برمجة تنافسية',
            'stat_api' => 'مشاريع متزامنة لحظياً',
            'stat_stack' => 'Laravel & Modern Web',
            'skills_title' => 'المنظومة البرمجية والمهارات',
            'skills_backend' => 'Backend Engineering',
            'skills_db' => 'Databases & Admin Tools',
            'skills_problem' => 'Problem Solving & CS',
            'cpc_title' => 'المشاركات والمسابقات التنافسية',
            'cpc_desc' => 'مشارك فعال في مسابقة البرمجة الجامعية بحلب (Aleppo CPC)، متمرس في حل المشكلات المتقدمة باستخدام C++ و Python.',
            'projects_title' => 'أحدث المشاريع المستوردة تلقائياً من GitHub',
            'projects_sub' => 'مستوردة ومحدثة تلقائياً عبر GitHub REST API',
            'projects_view_all' => 'عرض كل المستودعات',
            'projects_view_repo' => 'عرض المستودع',
            'projects_default_desc' => 'مشروع برمجيات متميز مبني ومتطور على منصة GitHub.',
            'projects_loading' => 'جاري جلب المشاريع ديناميكياً من GitHub...',
            'footer_bio' => 'مهندس برمجيات ومطور | طالب سنة خامسة بكلية الهندسة المعلوماتية - جامعة إيبلا الخاصة.',
            'footer_rights' => 'جميع الحقوق محفوظة - المهندس أحمد سواس',
        ],
        'en' => [
            'dir' => 'ltr',
            'nav_about' => 'About',
            'nav_skills' => 'Skills',
            'nav_cpc' => 'Competitive Programming',
            'nav_projects' => 'Projects',
            'nav_contact' => 'Contact',
            'switch_lang' => 'عربي 🌐',
            'target_lang' => 'ar',
            'hero_edu' => '5th Year Software Engineering Student at Ebla Private University',
            'hero_title' => 'Ahmad Sawas',
            'hero_sub' => 'Software Engineer & Full-Stack Web Developer',
            'btn_projects' => 'Explore My Projects',
            'btn_contact' => 'Get In Touch',
            'stat_years' => 'Years of Study & Building',
            'stat_cpc' => 'Competitive Contests',
            'stat_api' => 'Real-time Synced Projects',
            'stat_stack' => 'Laravel & Modern Web',
            'skills_title' => 'Tech Stack & Core Skills',
            'skills_backend' => 'Backend Engineering',
            'skills_db' => 'Databases & Admin Tools',
            'skills_problem' => 'Problem Solving & CS',
            'cpc_title' => 'Competitive Programming & Contests',
            'cpc_desc' => 'Active participant in Aleppo CPC (Competitive Programming Contest). Passionate about advanced problem solving using C++ and Python.',
            'projects_title' => 'Latest Dynamic Projects from GitHub',
            'projects_sub' => 'Fetched and updated automatically via GitHub REST API',
            'projects_view_all' => 'View All Repositories',
            'projects_view_repo' => 'View Repository',
            'projects_default_desc' => 'A featured software project built and developed on GitHub.',
            'projects_loading' => 'Fetching dynamic projects from GitHub...',
            'footer_bio' => 'Software Engineer & Full-Stack Developer | 5th Year Student at Faculty of Software Engineering - Ebla Private University.',
            'footer_rights' => 'All rights reserved - Engineer Ahmad Sawas',
        ]
    ];

    $lang = $t[$locale];
@endphp

<!DOCTYPE html>
<html lang="{{ $locale }}" 
      dir="{{ $lang['dir'] }}"
      x-data="{ darkMode: localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) }"
      :class="{ 'dark': darkMode }">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ahmad Sawas | Software Engineer & Web Developer</title>
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        darkBg: '#090d16',
                        darkCard: '#111827',
                        lightBg: '#f8fafc',
                    }
                }
            }
        }
    </script>
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Readex Pro', sans-serif; }
        .glass-card {
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(226, 232, 240, 0.8);
        }
        .dark .glass-card {
            background: rgba(17, 24, 39, 0.6);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }
        .text-ltr {
            direction: ltr !important;
            display: inline-block;
        }
    </style>
</head>
<body class="bg-lightBg text-slate-800 dark:bg-darkBg dark:text-slate-100 transition-colors duration-300 min-h-screen relative overflow-x-hidden">

    <!-- خلفية نيون -->
    <div class="fixed inset-0 -z-10 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-[500px] h-[500px] bg-cyan-500/15 dark:bg-cyan-500/10 rounded-full blur-[120px]"></div>
        <div class="absolute top-1/2 -left-40 w-[500px] h-[500px] bg-blue-600/15 dark:bg-indigo-600/10 rounded-full blur-[120px]"></div>
    </div>

    <!-- NAV BAR -->
    <nav class="fixed top-4 left-1/2 -translate-x-1/2 w-[92%] max-w-6xl z-50 glass-card rounded-2xl px-6 py-3.5 shadow-xl flex justify-between items-center transition-all">
        <a href="#" class="font-extrabold text-xl tracking-wide bg-gradient-to-r from-cyan-500 to-blue-600 dark:from-cyan-400 dark:to-blue-400 bg-clip-text text-transparent flex items-center gap-2">
            <span>{{ $lang['hero_title'] }}</span>
            <span class="text-xs px-2 py-0.5 rounded-full bg-cyan-500/10 text-cyan-600 dark:text-cyan-400 font-medium hidden sm:inline">5th Year SE</span>
        </a>

        <div class="hidden md:flex items-center gap-7 font-medium text-sm">
            <a href="#about" class="hover:text-cyan-500 dark:hover:text-cyan-400 transition">{{ $lang['nav_about'] }}</a>
            <a href="#skills" class="hover:text-cyan-500 dark:hover:text-cyan-400 transition">{{ $lang['nav_skills'] }}</a>
            <a href="#cpc" class="hover:text-cyan-500 dark:hover:text-cyan-400 transition">{{ $lang['nav_cpc'] }}</a>
            <a href="#projects" class="hover:text-cyan-500 dark:hover:text-cyan-400 transition">{{ $lang['nav_projects'] }}</a>
            <a href="#contact" class="hover:text-cyan-500 dark:hover:text-cyan-400 transition">{{ $lang['nav_contact'] }}</a>
        </div>

        <div class="flex items-center gap-3">
            <a href="{{ route('lang.switch', $lang['target_lang']) }}" 
               class="px-3 py-1.5 text-xs rounded-xl border border-slate-300 dark:border-slate-700 font-bold hover:bg-slate-100 dark:hover:bg-slate-800 transition">
                {{ $lang['switch_lang'] }}
            </a>

            <button @click="darkMode = !darkMode; localStorage.setItem('theme', darkMode ? 'dark' : 'light')" 
                    class="p-2 rounded-xl border border-slate-300 dark:border-slate-700 hover:bg-slate-100 dark:hover:bg-slate-800 transition text-sm">
                <span x-show="!darkMode">🌙</span>
                <span x-show="darkMode">☀️</span>
            </button>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section id="about" class="pt-40 pb-16 px-6 max-w-6xl mx-auto flex flex-col items-center text-center">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 mb-6 text-xs font-semibold rounded-full border border-cyan-500/30 bg-cyan-500/10 text-cyan-600 dark:text-cyan-400 shadow-sm">
            <span class="w-2 h-2 rounded-full bg-cyan-500 animate-pulse"></span>
            {{ $lang['hero_edu'] }}
        </div>
        
        <h1 class="text-4xl sm:text-6xl font-black mb-6 tracking-tight leading-tight">
            {{ $lang['hero_title'] }}
        </h1>
        
        <p class="text-lg md:text-xl text-slate-600 dark:text-slate-400 max-w-3xl mb-10 leading-relaxed">
            {{ $lang['hero_sub'] }}
        </p>

        <div class="flex flex-wrap justify-center gap-4 mb-16">
            <a href="#projects" class="px-7 py-3.5 rounded-2xl bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 text-white font-bold text-sm shadow-lg shadow-cyan-500/20 transition duration-300 transform hover:-translate-y-0.5">
                <i class="fa-solid fa-code-branch mx-1"></i> {{ $lang['btn_projects'] }}
            </a>
            <a href="#contact" class="px-7 py-3.5 rounded-2xl glass-card font-bold text-sm hover:border-cyan-500/50 transition duration-300 transform hover:-translate-y-0.5">
                <i class="fa-regular fa-envelope mx-1"></i> {{ $lang['btn_contact'] }}
            </a>
        </div>

        <!-- STATS BANNER -->
        <div class="w-full grid grid-cols-2 md:grid-cols-4 gap-4 p-6 rounded-3xl glass-card shadow-lg">
            <div class="p-4 text-center border-r border-slate-200 dark:border-slate-800 last:border-0">
                <div class="text-2xl sm:text-3xl font-extrabold text-cyan-500">5+</div>
                <div class="text-xs text-slate-500 mt-1 font-medium">{{ $lang['stat_years'] }}</div>
            </div>
            <div class="p-4 text-center border-r border-slate-200 dark:border-slate-800 last:border-0">
                <div class="text-2xl sm:text-3xl font-extrabold text-blue-500">Aleppo CPC</div>
                <div class="text-xs text-slate-500 mt-1 font-medium">{{ $lang['stat_cpc'] }}</div>
            </div>
            <div class="p-4 text-center border-r border-slate-200 dark:border-slate-800 last:border-0">
                <div class="text-2xl sm:text-3xl font-extrabold text-indigo-500 text-ltr">GitHub REST API</div>
                <div class="text-xs text-slate-500 mt-1 font-medium">{{ $lang['stat_api'] }}</div>
            </div>
            <div class="p-4 text-center">
                <div class="text-2xl sm:text-3xl font-extrabold text-purple-500 text-ltr">Full-Stack</div>
                <div class="text-xs text-slate-500 mt-1 font-medium">{{ $lang['stat_stack'] }}</div>
            </div>
        </div>
    </section>

    <!-- SKILLS MATRIX -->
    <section id="skills" class="py-16 px-6 max-w-6xl mx-auto">
        <h2 class="text-3xl font-extrabold text-center mb-12 bg-gradient-to-r from-cyan-500 to-blue-600 dark:from-cyan-400 dark:to-blue-400 bg-clip-text text-transparent">
            {{ $lang['skills_title'] }}
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-6 rounded-3xl glass-card">
                <div class="flex items-center gap-3 mb-6">
                    <div class="p-3 rounded-2xl bg-cyan-500/10 text-cyan-500"><i class="fa-solid fa-server text-xl"></i></div>
                    <h3 class="font-bold text-lg">{{ $lang['skills_backend'] }}</h3>
                </div>
                <div class="space-y-3">
                    <span class="inline-block px-3 py-1.5 text-xs font-semibold rounded-xl bg-slate-200/70 dark:bg-slate-800 border border-slate-300 dark:border-slate-700 text-ltr">PHP / Laravel 13</span>
                    <span class="inline-block px-3 py-1.5 text-xs font-semibold rounded-xl bg-slate-200/70 dark:bg-slate-800 border border-slate-300 dark:border-slate-700 text-ltr">Python</span>
                    <span class="inline-block px-3 py-1.5 text-xs font-semibold rounded-xl bg-slate-200/70 dark:bg-slate-800 border border-slate-300 dark:border-slate-700 text-ltr">RESTful APIs</span>
                </div>
            </div>

            <div class="p-6 rounded-3xl glass-card">
                <div class="flex items-center gap-3 mb-6">
                    <div class="p-3 rounded-2xl bg-blue-500/10 text-blue-500"><i class="fa-solid fa-database text-xl"></i></div>
                    <h3 class="font-bold text-lg">{{ $lang['skills_db'] }}</h3>
                </div>
                <div class="space-y-3">
                    <span class="inline-block px-3 py-1.5 text-xs font-semibold rounded-xl bg-slate-200/70 dark:bg-slate-800 border border-slate-300 dark:border-slate-700 text-ltr">MySQL</span>
                    <span class="inline-block px-3 py-1.5 text-xs font-semibold rounded-xl bg-slate-200/70 dark:bg-slate-800 border border-slate-300 dark:border-slate-700 text-ltr">DBeaver CE</span>
                    <span class="inline-block px-3 py-1.5 text-xs font-semibold rounded-xl bg-slate-200/70 dark:bg-slate-800 border border-slate-300 dark:border-slate-700 text-ltr">MongoDB</span>
                </div>
            </div>

            <div class="p-6 rounded-3xl glass-card">
                <div class="flex items-center gap-3 mb-6">
                    <div class="p-3 rounded-2xl bg-purple-500/10 text-purple-500"><i class="fa-solid fa-brain text-xl"></i></div>
                    <h3 class="font-bold text-lg">{{ $lang['skills_problem'] }}</h3>
                </div>
                <div class="space-y-3">
                    <span class="inline-block px-3 py-1.5 text-xs font-bold rounded-xl bg-purple-500/10 text-purple-600 dark:text-purple-400 border border-purple-500/30 text-ltr">C++</span>
                    <span class="inline-block px-3 py-1.5 text-xs font-semibold rounded-xl bg-slate-200/70 dark:bg-slate-800 border border-slate-300 dark:border-slate-700 text-ltr">Algorithms & Data Structures</span>
                    <span class="inline-block px-3 py-1.5 text-xs font-semibold rounded-xl bg-slate-200/70 dark:bg-slate-800 border border-slate-300 dark:border-slate-700 text-ltr">Competitive Programming</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CPC SECTION -->
    <section id="cpc" class="py-16 px-6 max-w-6xl mx-auto">
        <div class="p-8 sm:p-12 rounded-3xl glass-card shadow-lg relative overflow-hidden">
            <div class="absolute -right-10 -bottom-10 opacity-10 text-9xl font-black">CPC</div>
            <div class="relative z-10">
                <span class="px-3 py-1 rounded-lg text-xs font-bold bg-purple-500/10 text-purple-500 border border-purple-500/20 mb-4 inline-block">Aleppo CPC</span>
                <h2 class="text-3xl font-extrabold mb-4 bg-gradient-to-r from-purple-500 to-indigo-500 bg-clip-text text-transparent">
                    🏆 {{ $lang['cpc_title'] }}
                </h2>
                <p class="text-slate-600 dark:text-slate-300 leading-relaxed max-w-3xl text-base">
                    {{ $lang['cpc_desc'] }}
                </p>
            </div>
        </div>
    </section>

    <!-- PROJECTS SECTION -->
    <section id="projects" class="py-16 px-6 max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-center mb-12">
            <div>
                <h2 class="text-3xl font-extrabold bg-gradient-to-r from-cyan-500 to-blue-600 dark:from-cyan-400 dark:to-blue-400 bg-clip-text text-transparent">
                    {{ $lang['projects_title'] }}
                </h2>
                <p class="text-xs text-slate-500 mt-1">{{ $lang['projects_sub'] }}</p>
            </div>
            <a href="https://github.com/ahmadSawas-00" target="_blank" class="mt-4 md:mt-0 text-xs font-bold text-cyan-500 hover:underline flex items-center gap-2">
                {{ $lang['projects_view_all'] }} <i class="fa-solid fa-arrow-up-right-from-square"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($repos as $repo)
                <div class="p-6 rounded-3xl glass-card hover:border-cyan-500/50 transition duration-300 flex flex-col justify-between shadow-sm group">
                    <div>
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="font-bold text-lg text-cyan-600 dark:text-cyan-400 group-hover:text-cyan-500 transition text-ltr">{{ $repo['name'] }}</h3>
                            <span class="text-xs px-2.5 py-1 rounded-lg bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 font-medium text-ltr">
                                {{ $repo['language'] ?? 'Code' }}
                            </span>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 mb-6 line-clamp-3 leading-relaxed">
                            {{ $repo['description'] ?? $lang['projects_default_desc'] }}
                        </p>
                    </div>

                    <div class="flex justify-between items-center pt-4 border-t border-slate-200 dark:border-slate-800/80 text-xs text-slate-500">
                        <div class="flex gap-4 font-semibold">
                            <span><i class="fa-regular fa-star text-amber-500 mx-1"></i> {{ $repo['stargazers_count'] }}</span>
                            <span><i class="fa-solid fa-code-fork text-blue-500 mx-1"></i> {{ $repo['forks_count'] }}</span>
                        </div>
                        <a href="{{ $repo['html_url'] }}" target="_blank" class="text-cyan-600 dark:text-cyan-400 hover:underline font-bold flex items-center gap-1">
                            {{ $lang['projects_view_repo'] }} &rarr;
                        </a>
                    </div>
                </div>
            @empty
                <p class="text-center text-slate-500 col-span-3 py-10">{{ $lang['projects_loading'] }}</p>
            @endforelse
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="contact" class="border-t border-slate-200 dark:border-slate-800/80 bg-slate-100/80 dark:bg-slate-950 py-16 px-6 mt-20">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center gap-10">
            
            <div class="text-center md:text-start max-w-md">
                <h3 class="text-2xl font-extrabold mb-2">{{ $lang['hero_title'] }}</h3>
                <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                    {{ $lang['footer_bio'] }}
                </p>
            </div>

            <div class="flex flex-wrap justify-center items-center gap-4">
                <a href="https://github.com/ahmadSawas-00" target="_blank" 
                   class="flex items-center gap-2.5 px-5 py-3 rounded-2xl glass-card hover:text-cyan-500 dark:hover:text-cyan-400 transition shadow-sm hover:scale-105 duration-200">
                    <i class="fa-brands fa-github text-2xl"></i>
                    <span class="font-bold text-sm text-ltr">GitHub</span>
                </a>

                <a href="https://linkedin.com/in/ahmad-sawas-67549743a" target="_blank" 
                   class="flex items-center gap-2.5 px-5 py-3 rounded-2xl glass-card hover:text-blue-500 transition shadow-sm hover:scale-105 duration-200">
                    <i class="fa-brands fa-linkedin text-2xl text-blue-500"></i>
                    <span class="font-bold text-sm text-ltr">LinkedIn</span>
                </a>

                <a href="https://wa.me/963954418095" target="_blank" 
                   class="flex items-center gap-2.5 px-5 py-3 rounded-2xl glass-card hover:text-emerald-500 transition shadow-sm hover:scale-105 duration-200">
                    <i class="fa-brands fa-whatsapp text-2xl text-emerald-500"></i>
                    <span class="font-bold text-sm text-ltr">WhatsApp</span>
                </a>
            </div>

        </div>

        <div class="text-center text-xs text-slate-500 mt-14 border-t border-slate-200 dark:border-slate-900 pt-8 font-medium">
            © 2026 {{ $lang['footer_rights'] }}
        </div>
    </footer>

</body>
</html>