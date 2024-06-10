<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserTableResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserTableController extends Controller
{
    public function index(Request $request)
    {
        $query = User::query()
            ->leftJoin('addresses', 'addresses.user_id', '=', 'users.id')
            ->leftJoin('address_groups', 'addresses.address_group_id', '=', 'address_groups.id')
            ->leftJoin('cities', 'address_groups.city_id', '=', 'cities.id')
            ->select([
                'users.id as id',
                'users.name as name',
                'users.email as email',
                'addresses.address as address',
                'address_groups.name as group_name',
                'cities.name as city_name',
                'users.email_verified_at as email_verified_at',
            ]);

        // Apply filters
        if ($request->filled('name')) {
            $query->where('users.name', 'like', '%' . $request->input('name') . '%');
        }
        if ($request->filled('email')) {
            $query->where('users.email', 'like', '%' . $request->input('email') . '%');
        }
        if ($request->filled('verified_from')) {
            $query->where('users.email_verified_at', '>=', $request->input('verified_from'));
        }
        if ($request->filled('verified_to')) {
            $query->where('users.email_verified_at', '<=', $request->input('verified_to'));
        }

        // Apply pagination
        $users = $query->paginate(10);

        return UserTableResource::collection($users);
    }

    public function filter(Request $request)
    {
        return $this->index($request);
    }
}
