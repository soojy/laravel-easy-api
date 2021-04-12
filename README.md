# laravel-easy-api
PRIVUET


1. Install `composer create-project laravel/laravel laravel-todo`.
2. Create model with controller, migration and resource: `php artisan make:model ModelName -mcr`.
3. Available Column Types: https://laravel.com/docs/8.x/migrations#available-column-types.
4. Simple router: `Route::get('/todos', function () {return 'Hello World';});`.
5. Route list `php artisan route:list `
6. Group routs: `Route::group(["prefix"=>"todos", "as" =>"todos."], function () {Route::get('/', [TodoController::class, "index"]);});`.
7. Simple validator: `$validated = Validator::make($request->all(), ["name" => "required|string"]);`.
8. Validation rules https://laravel.com/docs/8.x/validation#available-validation-rules.
9. Request file create: `php artisan make:request TodosRequest`.
10. Request file rules: `return ['name' => ['required', 'string']];`.
11. Disable redirect after validation fails (`failedValidation()`): `throw new HttpResponseException(response()->json(["errors" => $validator->errors()], 422));`.
12. Custom validation errors (`messages()`): `return ['name.required' => 'Поле Название статьи обязательно для заполнения'];`
