<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class LikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('likes')->insert([
            'user_id' => DB::table('users')->orderBy('id', 'asc')->value('id'),
            'post_id' => DB::table('posts')->orderBy('id', 'asc')->value('id'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('likes')->insert([
            'user_id' => DB::table('users')->orderBy('id', 'desc')->value('id'),
            'post_id' => DB::table('posts')->orderBy('id', 'desc')->value('id'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
