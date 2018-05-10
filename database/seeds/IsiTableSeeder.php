<?php

use Illuminate\Database\Seeder;

class IsiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // isi Type
        \App\Type::truncate();
        $type = new \App\Type();
        $type->code = 'low';
        $type->name = 'low priority';
        $type->save();

        $type2 = new \App\Type();
        $type2->code = 'high';
        $type2->name = 'high priority';
        $type2->save();


        // isi post
        \App\Post::truncate();
        $post = new \App\Post();
        $post->title = 'lorem ipsum';
        $post->content = 'lorem ipsum dolor sit amet';
        $post->type_code = 'low';
        $post->save();

        // isi mail
        \App\Mail::truncate();
        $mail = new \App\Mail();
        $mail->subject = 'hello world';
        $mail->body = 'this is mail body';
        $mail->type_code = 'high';
        $mail->save();
    }
}
