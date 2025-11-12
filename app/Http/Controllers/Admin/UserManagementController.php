<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function index()
    {
        $users = User::where('is_admin', false)
            ->orderBy('created_at', 'desc')
            ->paginate(15);

        return view('Admin.admin_dashboard', compact('users'));
    }

    public function approve(User $user)
    {
        if ($user->is_admin) {
            return back()->with('error', 'Cannot modify admin users');
        }

        $user->update(['status' => 'approved']);

        return back()->with('success', 'User approved successfully');
    }

    public function reject(User $user)
    {
        if ($user->is_admin) {
            return back()->with('error', 'Cannot modify admin users');
        }

        $user->update(['status' => 'rejected']);

        return back()->with('success', 'User rejected');
    }
}