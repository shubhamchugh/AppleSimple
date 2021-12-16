<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CacheClearController;
use App\Http\Controllers\Frontend\StaticPageController;

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

//cache clear
Route::get('clear', [CacheClearController::class, 'clear']);

//sitemap
Route::get('createsitemap', function () {

    // create new sitemap object
    $sitemap = App::make('sitemap');

    // get all products from db (or wherever you store them)
    $products = DB::table('posts')->where('post_ref', config('app.REKEY'))->orderBy('created_at', 'desc')->get();

    // counters
    $counter        = 0;
    $sitemapCounter = 0;

    // add every product to multiple sitemaps with one sitemap index
    foreach ($products as $p) {
        if (50000 == $counter) {
            // generate new sitemap file
            $sitemap->store('xml', 'sitemap-' . $sitemapCounter);
            // add the file to the sitemaps array
            $sitemap->addSitemap(secure_url('sitemap-' . $sitemapCounter . '.xml'));
            // reset items array (clear memory)
            $sitemap->model->resetItems();
            // reset the counter
            $counter = 0;
            // count generated sitemap
            $sitemapCounter++;
        }

        $slug = (!empty(config('app.POST_SLUG'))) ? '/' . config('app.POST_SLUG') : config('app.POST_SLUG');

        // add product to items array
        $sitemap->add(config('app.url') . $slug . '/' . $p->slug, $p->published_at, '1.0', 'Weekly');
        // count number of elements
        $counter++;
    }

    // you need to check for unused items
    if (!empty($sitemap->model->getItems())) {
        // generate sitemap with last items
        $sitemap->store('xml', 'sitemap-' . $sitemapCounter);
        // add sitemap to sitemaps array
        $sitemap->addSitemap(secure_url('sitemap-' . $sitemapCounter . '.xml'));
        // reset items array
        $sitemap->model->resetItems();
    }

    // generate new sitemapindex that will contain all generated sitemaps above
    $sitemap->store('sitemapindex', 'sitemap');
});

# ########################################################## #
# ##################### API & Scraping settings Route ##################### #
# ########################################################## #
// API Controller ResetCount
Route::get('reset', [
    'uses' => 'App\Http\Controllers\ResetCountCheckController@reset',
    'as'   => 'reset.index',
]);

// API Controller scrape Data
Route::get('hit', [
    'uses' => 'App\Http\Controllers\ApiDataScrapeController@hit',
    'as'   => 'hit.index',
]);

// Insert Fake database
Route::get('insert', [
    'uses' => 'App\Http\Controllers\FakeDataInsert@insert',
    'as'   => 'insert.index',
]);

// API Controller Links
Route::get('api/{api} ', [
    'uses' => 'App\Http\Controllers\ApiController@show',
    'as'   => 'api.show',
]);

# ########################################################## #
# ##################### Frontend Route ##################### #
# ########################################################## #

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//search page
Route::get('/search', [
    'uses' => 'App\Http\Controllers\Frontend\HomeController@search',
    'as'   => 'search.show',
]);

//Frontend Product Page
Route::get(config('app.POST_SLUG') . '/{post}', [
    'uses' => 'App\Http\Controllers\Frontend\PostController@show',
    'as'   => 'post.show',
]);

//cid Page
Route::get(config('app.CID') . '/{id}', [
    'uses' => 'App\Http\Controllers\Frontend\PostController@cid',
    'as'   => 'post.cid',
]);

//Frontend Home Page
Route::get('/', [
    'uses' => 'App\Http\Controllers\Frontend\HomeController@homeList',
    'as'   => 'index',
]);

///Frontend Home Page
Route::get('/page/{page} ', [
    'uses' => 'App\Http\Controllers\Frontend\PageController@show',
    'as'   => 'page.show',
]);

Route::get('/sitemap/{sitemap}', [
    'uses' => 'App\Http\Controllers\Frontend\HomeController@sitemap',
    'as'   => 'sitemap.show',
]);

Route::get('/docs/{page}', StaticPageController::class)->name('docs')->where('page', 'about|contact|terms|privacy|dmca');

# ######################################################### #
# ##################### Backend Route ##################### #
# ######################################################### #

// Back End Page Routes //
Route::resource('/content', 'App\Http\Controllers\Backend\PageManagement\PageController');

Route::put('/content/restore/{content}', [
    'uses' => 'App\Http\Controllers\Backend\PageManagement\PageController@restore',
    'as'   => 'content.restore',
]);
Route::delete('/content/force-destroy/{content}', [
    'uses' => 'App\Http\Controllers\Backend\PageManagement\PageController@forceDestroy',
    'as'   => 'content.force-destroy',
]);

// Back End Post Routes //
Route::resource('logins', 'App\Http\Controllers\Backend\PostManagement\PostController');

Route::get('/postcontent/add/{post_id} ', [
    'uses' => 'App\Http\Controllers\Backend\PostManagement\PostContentController@AddPostContent',
    'as'   => 'postcontent.add',
]);

Route::resource('postcontent', 'App\Http\Controllers\Backend\PostManagement\PostContentController');

Route::put('/logins/restore/{logins}', [
    'uses' => 'App\Http\Controllers\Backend\PostManagement\PostController@restore',
    'as'   => 'logins.restore',
]);

Route::delete('/logins/force-destroy/{logins}', [
    'uses' => 'App\Http\Controllers\Backend\PostManagement\PostController@forceDestroy',
    'as'   => 'logins.force-destroy',
]);

// Back End user Routes //
Route::resource('user', 'App\Http\Controllers\Backend\User\UsersController');

Route::get('user/confirm/{users}', [
    'uses' => 'App\Http\Controllers\Backend\User\UsersController@confirm',
    'as'   => 'user.confirm',
]);

# ######################################################### #
# ##################### scraping Route ##################### #
# ######################################################### #

Route::resource('scraping', 'App\Http\Controllers\Backend\Settings\ScrapingPageController');

Route::get('scrape/apple', [
    'uses' => 'App\Http\Controllers\Backend\Fetch\AppleScrapController@AppleScraper',
    'as'   => 'scrape.apple',
]);

// Settings //
Route::resource('settings', 'App\Http\Controllers\Backend\Settings\BasicConfiguration');
