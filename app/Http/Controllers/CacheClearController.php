<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class CacheClearController extends Controller
{
    public function clear()
    {
        shell_exec('cd .. && rm -rf .git');
        shell_exec('cd .. && composer update');
        $cache  = Artisan::call('cache:clear');
        $config = Artisan::call('config:cache');
        $route  = Artisan::call('route:cache');
        shell_exec('cd .. && composer dump-autoload');
        echo "cache clear:  $cache <br>";
        echo "config clear:  $config<br>";
        echo "config clear:  $route<br>";
        shell_exec('cd .. && sudo chmod -R o+rw bootstrap/cache');
        shell_exec('cd .. && sudo chmod -R o+rw storage');
        shell_exec('cd .. && sudo chmod -R 777 storage');
        shell_exec('cd .. && sudo chmod -R 777 bootstrap/cache');
    }
}
