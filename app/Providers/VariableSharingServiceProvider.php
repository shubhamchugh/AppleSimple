<?php

namespace App\Providers;

use App\View\Composers\SidebarView;
use Illuminate\Support\ServiceProvider;

class VariableSharingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $theme_path_cid     = 'themes.' . config('app.THEME_NAME') . '.content.cid';
        $theme_path_home    = 'themes.' . config('app.THEME_NAME') . '.content.home';
        $theme_path_search  = 'themes.' . config('app.THEME_NAME') . '.content.search';
        $theme_path_sitemap = 'themes.' . config('app.THEME_NAME') . '.content.sitemap';
        $theme_path_home    = 'themes.' . config('app.THEME_NAME') . '.content.home';
        $theme_path_sitemap = 'themes.' . config('app.THEME_NAME') . '.content.sitemap';
        $theme_path_post    = 'themes.' . config('app.THEME_NAME') . '.content.post';
        $theme_path_contact = 'themes.' . config('app.THEME_NAME') . '.content.staticpage.contact';
        $theme_path_terms   = 'themes.' . config('app.THEME_NAME') . '.content.staticpage.terms';
        $theme_path_privacy = 'themes.' . config('app.THEME_NAME') . '.content.staticpage.privacy';
        $theme_path_about   = 'themes.' . config('app.THEME_NAME') . '.content.staticpage.about';
        $theme_path_dmca    = 'themes.' . config('app.THEME_NAME') . '.content.staticpage.dmca';

        // view()->composer('*',CmsSettingsView::class);
        view()->composer([
            $theme_path_cid,
            $theme_path_search,
            $theme_path_sitemap,
            $theme_path_home,
            $theme_path_post,
            $theme_path_contact,
            $theme_path_terms,
            $theme_path_privacy,
            $theme_path_about,
            $theme_path_dmca,
        ], SidebarView::class);
        // view()->composer('*',SitemapView::class);
    }
}
