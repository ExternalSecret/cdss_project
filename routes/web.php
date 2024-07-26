<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DecisionSupportToolsController;
use App\Http\Controllers\UserSettingsController;
use App\Http\Controllers\HelpSupportController;
use App\Http\Controllers\SystemSettingsController;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\PatientController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome.blade.php');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/welcome', [AuthController::class, 'welcome'])->name('welcome');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/decision-support-tools', [DecisionSupportToolsController::class, 'index']);

Route::get('/user-settings/profile-info', [UserSettingsController::class, 'showProfileInfo']);

Route::get('/user-settings/notification-settings', [UserSettingsController::class, 'showNotificationSettings']);

Route::get('/user-settings/preferences', [UserSettingsController::class, 'showPreferences']);

Route::get('/about', function () {
    return view('about');
});

Route::prefix('help_support')->group(function () {
    Route::get('/help_support/index', [HelpSupportController::class, 'index'])->name('help_support.index.blade.php');
    Route::get('/faqs', [HelpSupportController::class, 'showFaqs'])->name('help_support.faqs');
    Route::get('/user-manuals', [HelpSupportController::class, 'showUserManuals'])->name('help_support.user-manuals');
    Route::get('/help-documentation', [HelpSupportController::class, 'showHelpDocumentation'])->name('help_support.help-documentation');

});

Route::get('/reminders/index', [ReminderController::class, 'index'])->name('reminders.index.blade.php');
Route::post('/reminders', [ReminderController::class, 'store'])->name('reminders.store');

Route::get('/help_support/index', [HelpSupportController::class, 'index'])->name('help_support.index.blade.php');
Route::get('/help_support/faqs', [HelpSupportController::class, 'showFaqs'])->name('help_support.faqs');
Route::get('/help_support/help_documentation', [HelpSupportController::class, 'help_documentation'])->name('help_support.help_documentation');
Route::get('/help_support/support_contact', [HelpSupportController::class, 'support_contact'])->name('help_support.support_contact');

Route::resource('patients', PatientController::class);