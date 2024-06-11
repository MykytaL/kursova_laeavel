<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    /** @noinspection PhpUnreachableStatementInspection
     * @noinspection PhpUnreachableStatementInspection
     */
    public function Submit(PostRequest $req)
    {
        $newComment = [
            'user_name' => $req->user_name,
            'email' => $req->email,
            'comment' => $req->comment
        ];
        return DB::table('post')->insert($newComment);
    }
    public function Output()
    {
        $posts = DB::table('post')-> select('*')->get();
        return view('/HarryPotter', compact('posts'));
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->back();
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('edit-post', compact('post'));
    }

    public function update(PostRequest $request, $id)
    {
        $post = Post::findOrFail($id);

        $post->update([
            'user_name' => $request->user_name,
            'email' => $request->email,
            'comment' => $request->comment
        ]);

        return redirect()->back()->with('success', 'Пост успішно оновлено.');
    }


    public function index()
    {
        $posts = Post::all(); // Отримати всі пости з бази даних
        return view('posts.index', compact('posts')); // Повернути перегляд з постами
    }



}
