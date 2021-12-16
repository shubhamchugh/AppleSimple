<?php

namespace App\Http\Controllers;

use App\Models\FakeUser;
use Faker\Factory as Faker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class FakeDataInsert extends Controller
{
    public function insert(Request $request)
    {
        if (!is_numeric($request->userCount)) {
            dd("Please enter numerical Value or Please Add User Count Like http://example.com/insert?userCount=1000");
        }
        Schema::disableForeignKeyConstraints();
        FakeUser::truncate();
        Schema::enableForeignKeyConstraints();
        $faker     = Faker::create();
        $userCount = (!empty($request->userCount)) ? $request->userCount : null;

        if (!empty($userCount)) {
            for ($i = 1; $i <= $userCount; $i++) {

                FakeUser::create([
                    'name' => $faker->name,
                ]);
            }
        } else {
            dd("Please Add User Count Like http://example.com/insert?userCount=1000");
        }

    }
}
