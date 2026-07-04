<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Public Portfolio Pages
|--------------------------------------------------------------------------
*/

Route::view('/', 'pages.home')->name('home');
Route::view('/home', 'pages.home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/skills', 'pages.skills')->name('skills');
Route::view('/projects', 'pages.projects')->name('projects');
Route::view('/contact', 'pages.contact')->name('contact');

/*
|--------------------------------------------------------------------------
| Contact Form
|--------------------------------------------------------------------------
*/

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');

/*
|--------------------------------------------------------------------------
| Project Details (Dynamic)
|--------------------------------------------------------------------------
*/

Route::get('/projects/{slug}', function ($slug) {

    $projects = [

        'weather' => [
            'title' => 'Weather App',
            'category' => 'Laravel • API • JavaScript',
            'banner' => 'images/projects/weather/banner.jpg',
            'description' => 'Real-time weather app with API integration and responsive UI.',
            'features' => [
                'Current Weather',
                '7 Days Forecast',
                'Favorite Cities',
                'Responsive UI'
            ],
            'gallery' => [
                'images/projects/weather/home.jpg',
                'images/projects/weather/forecast.jpg',
                'images/projects/weather/favorites.jpg'
            ],
            'technologies' => [
                'Laravel',
                'PHP',
                'JavaScript',
                'Weather API',
                'Tailwind CSS'
            ],
        ],

        'ecommerce' => [
            'title' => 'Ecommerce Website',
            'category' => 'Laravel • PHP • MySQL',
            'banner' => 'images/projects/ecommerce/banner.jpg',
            'description' => 'Full ecommerce system with admin panel and order management.',
            'features' => [
                'Admin Dashboard',
                'Products CRUD',
                'Categories',
                'Orders Management'
            ],
            'gallery' => [
                'images/projects/ecommerce/dashboard.jpg',
                'images/projects/ecommerce/products.jpg',
                'images/projects/ecommerce/orders.jpg'
            ],
            'technologies' => [
                'Laravel',
                'PHP',
                'MySQL',
                'Blade',
                'Tailwind CSS'
            ],
        ],

        'blog' => [
            'title' => 'Blog Management System',
            'category' => 'Laravel • CMS',
            'banner' => 'images/projects/blog/banner.jpg',
            'description' => 'Simple blog CMS with authentication and admin panel.',
            'features' => [
                'Posts CRUD',
                'Categories',
                'Authentication',
                'Admin Dashboard'
            ],
            'gallery' => [
                'images/projects/blog/dashboard.jpg',
                'images/projects/blog/posts.jpg',
                'images/projects/blog/categories.jpg'
            ],
            'technologies' => [
                'Laravel',
                'PHP',
                'MySQL',
                'Blade',
                'Tailwind CSS'
            ],
        ],

    ];

    abort_unless(isset($projects[$slug]), 404);

    return view('project-details', $projects[$slug]);

})->name('project.details');

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Dashboard Redirect (optional)
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->name('dashboard');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::middleware('admin')->group(function () {

    Route::view('/admin/dashboard', 'admin.dashboard')
        ->name('admin.dashboard');

});
Route::middleware('admin')->group(function () {

    Route::view('/admin/dashboard', 'admin.dashboard')
        ->name('admin.dashboard');

    Route::delete('/admin/messages/{id}', [ContactController::class, 'destroy'])
        ->name('messages.destroy');

});