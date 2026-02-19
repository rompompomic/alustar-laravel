<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Models\Project;

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/buvnieciba', function () {
    $projects = Project::where('show_on_construction', true)->get();
    return view('buvnieciba', compact('projects'));
})->name('buvnieciba');

Route::get('/renovacija', function () {
    return view('renovacija');
})->name('renovacija');

Route::get('/stiklokonstrukcijas', function () {
    $projects = Project::where('show_on_glass', true)->get();
    return view('stiklokonstrukcijas', compact('projects'));
})->name('stiklokonstrukcijas');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('project.show');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

// Russian Routes
Route::prefix('ru')->name('ru.')->group(function () {
    Route::get('/', function () {
        return view('ru.home');
    })->name('home');

    Route::get('/about', function () {
        return view('ru.about');
    })->name('about');

    Route::get('/stroitelstvo', function () {
        $projects = Project::where('show_on_construction', true)->get();
        return view('ru.buvnieciba', compact('projects'));
    })->name('buvnieciba');

    Route::get('/renovacija', function () {
        return view('ru.renovacija');
    })->name('renovacija');

    Route::get('/stiklokonstrukcijas', function () {
        $projects = Project::where('show_on_glass', true)->get();
        return view('ru.stiklokonstrukcijas', compact('projects'));
    })->name('stiklokonstrukcijas');

    Route::get('/projects', function () {
        app()->setLocale('ru');
        return app(ProjectController::class)->index();
    })->name('projects');

    Route::get('/projects/{slug}', function ($slug) {
        app()->setLocale('ru');
        return app(ProjectController::class)->show($slug);
    })->name('project.show');

    Route::get('/privacy-policy', function () {
        return view('ru.privacy-policy');
    })->name('privacy-policy');
});

Route::get('/sitemap.xml', function () {
    $urls = [];
    $staticRoutes = [
        'home', 'about', 'buvnieciba', 'stiklokonstrukcijas', 'projects', 'privacy-policy',
        'ru.home', 'ru.about', 'ru.buvnieciba', 'ru.stiklokonstrukcijas', 'ru.projects', 'ru.privacy-policy'
    ];
    
    foreach ($staticRoutes as $route) {
        try {
            $urls[] = [
                'loc' => route($route),
                'lastmod' => date('Y-m-d'),
                'changefreq' => 'weekly',
                'priority' => ($route === 'home' || $route === 'ru.home') ? '1.0' : '0.8'
            ];
        } catch (\Exception $e) {}
    }

    // Dynamic Project Routes
    $projects = Project::all();
    foreach ($projects as $project) {
        // LV
        $urls[] = [
             'loc' => route('project.show', $project->slug),
             'lastmod' => $project->updated_at->format('Y-m-d'),
             'changefreq' => 'monthly',
             'priority' => '0.9'
        ];
        // RU
         $urls[] = [
             'loc' => route('ru.project.show', $project->slug),
             'lastmod' => $project->updated_at->format('Y-m-d'),
             'changefreq' => 'monthly',
             'priority' => '0.9'
        ];
    }

    return response()->view('sitemap', compact('urls'))->header('Content-Type', 'text/xml');
});

