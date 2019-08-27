<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MemberRequest;
use App\Repositories\Repository;
use App\Http\Resources\MemberResourceCollection;
use App\Models\Member;

class MemberController extends Controller
{
    public function __construct(Member $members) {
       
        $this->model = new Repository($members);
    }

    public function show() {
       
        $data = Member::all();

        return response()->json($data, 200);
    }

    public function showTribeLeaders() {
        
        $data = Member::where('user_type', 2)->get();

        $tribe_leaders = new MemberResourceCollection($data);

        return response()->json($tribe_leaders, 200);
    }

    public function create(MemberRequest $request) {
        
        $validated = $request->validated();
        $member = $this->model->create($request->only($this->model->getModel()->fillable));

        return response()->json($member,201);
    }

    public function update(MemberRequest $request) {
        
        $validated = $request->validated();
        $member = $this->model->update($request->only($this->model->getModel()->fillable), $request->id);

        return response()->json($member,201);
    }
}
