

<?php
 use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

Route::get('/', function () {
    $users = DB::table('users')->get();
    return view('welcome', compact('users'));
});

Route::get('/register', function () {
    return view('auth.register'); // Assuming you have a registration form at resources/views/auth/register.blade.php
})->name('register');

Route::post('/register', function (Request $request) {
    // Validate the request...
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    // Create the user...
    DB::table('users')->insert([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    // Redirect to a desired page, maybe the home page...
    return redirect('/')->with('success', 'Registration successful!');
})->name('register');
