<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Repository;
use App\Http\Requests\RolesRequest;
use App\Models\Role;

class RolesController extends Controller
{
    public function __construct(Role $roles) {
       
        $this->model = new Repository($roles);
    }

    public function show() {
       
        $data = Role::all();

        return response()->json($data, 200);
    }

    public function create(RolesRequest $request) {
        
        $validated = $request->validated();
        $roles = $this->model->create($request->only($this->model->getModel()->fillable));

        return response()->json($roles,201);
    }
}
