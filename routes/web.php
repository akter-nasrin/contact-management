<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

// Route to list all contacts
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

// Route to show the form to create a new contact
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');

// Route to store a new contact
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');

// Route to show a specific contact
Route::get('/contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show');

// Route to show the form to edit an existing contact
Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit');

// Route to update a contact
Route::put('/contacts/{contact}', [ContactController::class, 'update'])->name('contacts.update');

// Route to delete a contact
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');

