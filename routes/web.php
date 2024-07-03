<?php
use App\Http\Controllers\addblogcontroller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\formController;


use Illuminate\Support\Facades\Route;


Route::get('/index', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/abouts', function () {
    return view('abouts');
});
Route::get('/sidebar', function () {    
    return view('sidebar');
});


Route::get('/home', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/aboutcrud', function () {
    return view('aboutcrud');
});
Route::get('frontend/contact', function () {
    return view('frontend.contact');
})->name('frontend.contact');

Route::resource('addblog', addblogController::class);
use App\Models\addblog;

Route::get('frontend/blogs', function () {
    $blogs = addblog::all();
    return view('frontend.blogs', compact('blogs'));
})->name('frontend.blogs');


Route::resource('contacts', ContactController::class);  

Route::resource('about', AboutController::class);

Route::get('frontend/abouts', function () {
    $abouts = App\Models\About::all();
    return view('frontend.abouts', compact('abouts'));
})->name('frontend.abouts');


Route::resource('faq', FaqController::class);

use App\Models\Faq; 

Route::get('frontend/faqs', function () {
    $faqs = Faq::all();
    return view('frontend.faqs', compact('faqs'));
})->name('frontend.faqs');




Route::get('faqs', [FaqController::class, 'index'])->name('faqs.index');
Route::get('faqs/create', [FaqController::class, 'create'])->name('faqs.create');
Route::post('faqs', [FaqController::class, 'store'])->name('faqs.store');
Route::get('faqs/{faq}', [FaqController::class, 'show'])->name('faqs.show');
Route::get('faqs/{faq}/edit', [FaqController::class, 'edit'])->name('faqs.edit');
Route::put('faqs/{faq}', [FaqController::class, 'update'])->name('faqs.update');
Route::delete('faqs/{faq}', [FaqController::class, 'destroy'])->name('faqs.destroy');



Route::get('/submit-email', [EmailController::class, 'showSubmitForm'])->name('email.form');
Route::post('/submit-email', [EmailController::class, 'submitEmail'])->name('submit.email');
Route::get('/emails', [EmailController::class, 'showEmails'])->name('emails');
Route::delete('/emails/{id}', [EmailController::class, 'deleteEmail'])->name('email.delete');;



Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('posts', [PostController::class, 'store'])->name('posts.store');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');


Route::resource('slides', SlideController::class);
Route::get('/slider', [SlideController::class, 'showSlider'])->name('slider.show');


Route::get('/form', function () {
    return view('form');
});
Route::get('form', [formController::class, 'index'])->name('form.index');
Route::get('ajax-form', [formController::class, 'ajaxlist'])->name('form.list');
Route::get('form/create', [formController::class, 'create'])->name('form.create');
Route::post('form/create', [formController::class, 'store'])->name('form.store');
Route::get('form/{form}', [formController::class, 'show'])->name('form.show');
Route::get('form/{id}/edit', [formController::class, 'edit'])->name('form.edit');
Route::put('/form/{id}', [FormController::class, 'update'])->name('form.update');
Route::delete('delete/{id}', [formController::class, 'destroy'])->name('form.destroy');
