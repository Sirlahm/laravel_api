<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'raotech', 'namespace' => 'App\Http\Controllers'],  function() {
    Route::apiResource('companies', CompaniesController::class);
    Route::apiResource('employees', EmployeesController::class);
});

    // ROUTES
// GET -  api/raotech/companies
// POST - api/raotech/companies
// PUT - api/raotech/companies/{id}
// PATCH - api/raotech/companies/{id}
// DELETE - api/raotech/companies/{id}


// GET -  api/raotech/employees
// POST - api/raotech/employees
// PUT - api/raotech/employees/{id}
// PATCH - api/raotech/employees/{id}
// DELETE - api/raotech/employees/{id}