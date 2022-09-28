<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\Admin\StorePermissionsRequest;
use App\Http\Requests\Admin\UpdatePermissionsRequest;

class PermissionsController extends Controller
{
    public function index()
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        $permissions = Permission::all();

        return view('admin.permissions.index', compact('permissions'));
    }

    public function create()
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        return view('admin.permissions.create');
    }

    public function store(StorePermissionsRequest $request)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        Permission::create($request->all());

        return redirect()->route('admin.permissions.index');
    }

    public function edit(Permission $permission)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        return view('admin.permissions.edit', compact('permission'));
    }

    public function update(UpdatePermissionsRequest $request, Permission $permission)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        $permission->update($request->all());

        return redirect()->route('admin.permissions.index');
    }

    public function destroy(Permission $permission)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        $permission->delete();

        return redirect()->route('admin.permissions.index');
    }

    public function show(Permission $permission)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        return view('admin.permissions.show', compact('permission'));
    }

    public function massDestroy(Request $request)
    {
        Permission::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}