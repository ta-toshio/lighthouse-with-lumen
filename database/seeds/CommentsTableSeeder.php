<?php

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status_ids = ['1','2','3'];
        $faker = app(Faker\Generator::class);

        $comments = factory(Comment::class)->times(100)->make()->each(
            function ($comment) use ($faker, $status_ids) {
                $comment->status_id = $faker->randomElement($status_ids);
            }
        );

        Comment::insert($comments->toArray());
    }
}
