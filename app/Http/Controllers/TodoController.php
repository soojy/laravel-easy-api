<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodosRequest;
use App\Models\Todo;
use http\Env\Response;
use http\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    //  все
    public function index()
    {
        return Response(Todo::all(), 200);
    }

    //  создание
    public function store(TodosRequest $request)
    {

        // $validated = Validator::make($request->all(), [
        //     "name" => "required|string",
        //     "description" => "required|string",
        // ]);
        // if ($validated->fails()) {
        //     return response([
        //         "message" => "error",
        //         "erros" => $validated->errors()
        //     ], 400);
        // }
        $todo = new Todo();
        $todo->fill($request->validated());
        $todo->save();
        return response([
            "message" => "Post with id: $todo->id created"
        ], 200);

    }

    //  показать по id
    public function show($id)
    {
        return response(Todo::all()->where('id', $id)->first());
    }

    //  изменение
    public function update(TodosRequest $request, $id)
    {

        $todo = Todo::all()->where('id', $id)->first()->update($request->validated());
        return response([
            "message" => "Post with id: $id updated"
        ], 200);
    }

    //  удаление
    public function destroy($id)
    {
        Todo::destroy($id);
        return response([
           "message" => "Post with id: $id deleted"
        ], 200);
    }
}
