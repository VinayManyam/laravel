<?php
Route::get('/', function () {
    echo "<div align='center'><h1 style='color:green'>Routing Concept</h1></div><br>","valid routings in laravel:<br>";
    echo "1. user/id<br>2.posts/{post}/comments/{comment} <br>3.user1/ optional paramenter with defult value<br>3.user2/[a-zA-Z0-9] regular expretion"
    . "<br>4.user3/profile certain call<br>5./redirect redirect to other url<br>6.user/id/name step1+step4";
    
    
});

Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    echo $postId,$commentId;
});

Route::get('user1/{name?}', function ($name='vinay') {
    return $name;
});


Route::get('user2/{name}', function ($name) {
   echo $name;
})->where('name', '[A-Za-z0-9]+');

Route::get('user3/profile', function () {
    echo "its profile page";
})->name('profile');

//Route::get('user/profile', 'UserController@showProfile')->name('profile');
Route::get('redirect', function () {
    return redirect()->route('profile');
});


Route::get('user/{id}/profile', function ($id) {
   echo "id:",$id,"<br>";
   $route = Route::current();

$name = Route::currentRouteName();

$action = Route::currentRouteAction();
print_r($name);
echo $action ;
})->name('profile1');

?>
