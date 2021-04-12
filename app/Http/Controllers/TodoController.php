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
        //     ], 422);
        // }

//        $todo = new Todo();
//        $todo->fill($request->validated());
//        $todo->save();

        return response(Todo::create($request->validated()), 200);

    }

    //  показать по id
    public function show(Todo $todo)
    {
        return $todo;
    }

    //  изменение
    public function update(Todo $todo, TodosRequest $request)
    {

        $todo->update($request->validated());
        return response([
            "message" => "Todo with id: $todo->id updated"
        ], 200);
    }

    //  удаление
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return response([
            "message" => "Todo with id: $todo->id deleted"
        ], 200);
    }
}
