<?php

namespace App\Http\Controllers;


use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Todoの一覧を取得する処理
     */
    public function index()
    {
        // データベースに保存されているすべてのTodoを取得
        return Todo::all();
    }

    /**
     * 新しいTodoを登録する処理
     */
    public function store(Request $request)
    {
        // バリデーション：titleは必須で、文字列、最大255文字
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        // titleのみを取得してTodoとして保存
        $todo = Todo::create($request->only('title'));

        // 201（Created）でJSON形式で返却
        return response()->json($todo, 201);
    }

    /**
     * 指定されたIDのTodoを削除する処理
     */
    public function destroy($id)
    {
        // IDに該当するTodoを取得（存在しない場合はエラー）
        $todo = Todo::findOrFail($id);

        // Todoを削除
        $todo->delete();

        // 204（No Content）を返却（中身なし）
        return response()->json(null, 204);
    }
}
