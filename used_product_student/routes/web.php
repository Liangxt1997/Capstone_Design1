<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//前端路由
Route::prefix('/')
    ->namespace('Home')
    ->middleware('setLocale')
    ->group(function (){
        Route::get('/changeLocale/{locale}', 'HomeController@changeLocale');
        Route::get('/', 'IndexController@index')->name('/');
        Route::get('/index', 'IndexController@index')->name('index');
        Route::get('/detail/{id}', 'IndexController@detail')->name('detail');
        Route::get('/category/{category}', 'IndexController@category')->name('category');
        Route::get('/categories', 'IndexController@categories')->name('home_categories');
        Route::get('/collection', 'IndexController@collection')->name('collection');
        Route::get('/download', 'IndexController@download')->name('download');
        Route::get('/faceback', 'IndexController@faceback')->name('faceback');
        Route::get('/want/{product_id}', 'IndexController@want')->name('want');
        Route::get('/login', 'IndexController@login')->name('login');
        Route::get('/signup', 'IndexController@login')->name('signup');
        Route::get('/new', 'IndexController@new')->name('new');
        Route::get('/about_us', 'IndexController@aboutUs')->name('about_us');
        Route::get('/signup', 'IndexController@signup')->name('signup');
        Route::get('/login', 'IndexController@login')->name('home_login');
        Route::get('/logout', 'IndexController@logout')->name('logout');
        Route::post('/signup_post', 'HomeLoginController@signUp')->name('signup.post');

        Route::post('/home_login', 'HomeLoginController@login')->name('home_login.post');
        Route::post('/collection_post', 'IndexController@collectionsAction')->name('collection.post');
        //collection.delete
        Route::delete('/collection_delete', 'IndexController@collectionsDelete')->name('collection.delete');
        Route::get('/download_post/{id}', 'IndexController@downLoadAction')->name('download.post');
        Route::post('/feedback_post', 'IndexController@feedbackAction')->name('feedback.post');
        //评论模块
        Route::post('/comment_post', 'IndexController@commentsAction')->name('comment.post');
        Route::delete('/comment_delete', 'IndexController@commentsDelete')->name('comment.delete');
        Route::get('/comment', 'IndexController@comments')->name('home.comment');
        Route::get('/language', 'IndexController@setLanguage')->name('language.get');

    });


//后端路由
Route::prefix('admin')
    ->middleware(['auth:web', 'setLocale'])
//    ->middleware('adminVerisfy')
    ->namespace('Admin')
    ->group(function () {
        Route::get('/language', 'ConfigsController@setLanguage')->name('language.admin_get');
        Route::get('/', function () {
            return view('admin.index');
        });
        Route::get('/welcome', function () {
            return view('admin.welcome');
        });

        // 二手商品管理
        Route::get('/products', 'ProductsController@index')->name('products');
        Route::get('/products_add', 'ProductsController@create')->name('products.add');
        Route::get('/products/{id}', 'ProductsController@show')->name('products.edit');
        Route::post('/products', 'ProductsController@store')->name('products.store');
        Route::post('/products/{id}', 'ProductsController@update')->name('products.update');
        Route::delete('/products/{id}', 'ProductsController@destroy')->name('products.delete');
        //优惠活动管理
        Route::get('/activities', 'ActivitiesController@index')->name('activities');
        Route::get('/activities_add', 'ActivitiesController@create')->name('activities.add');
        Route::delete('/activities/{id}', 'ActivitiesController@destroy')->name('activities.delete');
        Route::post('/activities', 'ActivitiesController@store')->name('activities.store');
        Route::get('/activities/{id}', 'ActivitiesController@show')->name('activities.edit');
        Route::post('/activities/{id}', 'ActivitiesController@update')->name('activities.update');
        // 二手商品分类
        Route::get('/categories', 'CategoriesController@index')->name('categories');
        Route::get('/categories_add', 'CategoriesController@create')->name('categories.add');
        Route::post('/categories', 'CategoriesController@store')->name('categories.store');
        Route::get('/categories/{id}', 'CategoriesController@show')->name('categories.edit');
        Route::post('/categories/{id}', 'CategoriesController@update')->name('categories.update');
        Route::delete('/categories/{id}', 'CategoriesController@destroy')->name('categories.delete');
        //标签路由
        Route::get('/tags', 'TagsController@index')->name('tags');
        Route::get('/tags_add', 'TagsController@create')->name('tags.add');
        Route::post('/tags', 'TagsController@store')->name('tags.store');
        Route::get('/tags/{id}', 'TagsController@show')->name('tags.edit');
        Route::post('/tags/{id}', 'TagsController@update')->name('tags.update');
        Route::delete('/tags/{id}', 'TagsController@destroy')->name('tags.delete');

        // 用户管理
        Route::get('/members', 'MembersController@index')->name('members');
        Route::post('/members', 'MembersController@store')->name('members.store');
        Route::get('/members/{id}', 'MembersController@show')->name('members.edit');
        Route::post('/members/{id}', 'MembersController@update')->name('members.update');
        Route::delete('/members/{id}', 'MembersController@destroy')->name('members.delete');

        //用户反馈
        Route::get('/feedbacks', 'FeedbacksController@index')->name('feedbacks');
        Route::delete('/feedbacks/{id}', 'FeedbacksController@destroy')->name('feedbacks.delete');
        Route::post('/feedbacks', 'FeedbacksController@store')->name('feedbacks.store');
        Route::post('/feedbacks/{id}', 'FeedbacksController@update')->name('feedbacks.update');

        // 新闻管理
        Route::get('/news', 'NewsController@index')->name('news');
        Route::post('/news', 'NewsController@store')->name('news.store');
        Route::get('/news_add', 'NewsController@create')->name('news.add');
        Route::get('/news/{id}', 'NewsController@show')->name('news.edit');
        Route::post('/news/{id}', 'NewsController@update')->name('news.update');
        Route::delete('/news/{id}', 'NewsController@destory')->name('news.delete');
        // 用户收藏管理
        Route::get('/collections', 'CollectionsController@index')->name('collections');
        Route::post('/collections', 'CollectionsController@store')->name('collections.store');
        Route::get('/collections/{id}', 'CollectionsController@show')->name('collections.edit');
        Route::post('/collections/{id}', 'CollectionsController@update')->name('collections.update');
        Route::delete('/collections/{id}', 'CollectionsController@destroy')->name('collections.delete');
        Route::get('/collections_add', function () {
            return view('admin.collections.add');
        })->name('collections.add');

        // 商品评论
        Route::get('comments', 'CommentsController@index')->name('products.comments');
        Route::post('comments/{id}/replymembers.delete', 'CommentsController@reply')->name('products.comments.reply');
        Route::delete('comments/{id}', 'CommentsController@destroy')->name('comments.delete');
        //Route::post('/orders/{id}', 'OrdersController@wancheng')->name('orders.filish');

        // 管理员/卖家管理
        Route::get('/users', 'UsersController@index')->name('users');
        Route::post('/users', 'UsersController@store')->name('users.store');
        Route::get('/users_add', 'UsersController@create')->name('users.add');
        Route::get('/users/{id}', 'UsersController@show')->name('users.edit');
        Route::post('/users/{id}', 'UsersController@update')->name('users.update');
        Route::delete('/users/{id}', 'UsersController@destory')->name('users.delete');
        //users.information
        Route::get('/users_information/{id}', 'UsersController@showInformation')->name('users.information');

        // 设置
        Route::get('/setting', 'ConfigsController@index')->name('configs');
        Route::post('/setting/{key}', 'ConfigsController@setValue')->name('configs.set');
        Route::post('/setting', 'ConfigsController@set')->name('configs.post');

        // 文件上传
        Route::post('/file/upload','UploadController@upload')->name('file.upload');

        // 通用操作
        Route::get('/actions/{id}', function (\Illuminate\Http\Request $request, $id) {
            $modelClass = str_replace('.', '\\', $request->input('model'));
            $key = $request->input('key');
            $model = new $modelClass();
            return view('admin.action', [
                'id' => $id,
                'fields' => $model->getExtensionFields($key),
                'route' => $request->input('route')
            ]);
        })->name('actions.open');
    });

Route::middleware('auth:web')->get('/admin/logout', 'Auth\LoginController@logout')->name('admin/logout');

// 登录
Route::middleware('setLocale')->get('/admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login.post');
//注册
Route::middleware('setLocale')->get('/admin/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register')->name('register.post');