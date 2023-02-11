<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::latest()->paginate(5);
        return view('admin.adminDash', ['users' => $users])
            ->with('i', (request()->input('page', 1) - 1) * 5);

        // $users = DB::table('users')->get();
        // return redirect()->route('dashboard', ['users' => $users]);
        // return view('admin.adminDash', ['users' => $users]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        $this->validate($request, [
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'age' => ['required', 'numeric'],
            'role' => ['required', 'numeric'],
            'allergies' => ['string', 'max:500'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'numeric', 'digits:10'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'image' => $request->image,
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'age' => $request->age,
            'role' => $request->role,
            'allergies' => $request->allergies,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect()->route('users.index')
            ->with('success', 'User Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.user', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.editUser', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'role' => ['required'],
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'allergies' => ['string', 'max:500'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'numeric', 'digits:10'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $user->update($input);

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }
}
