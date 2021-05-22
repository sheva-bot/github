Route::get('/', function () {
    return view('index0265');
}); 

Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/contactus', function () {
    return view('contactus');
});