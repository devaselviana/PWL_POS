<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::firstOrNew(
            [
                'username' => 'manager33',
                'nama' => 'Manager Tiga Tiga',
                'password' => Hash::make('12345'),
                'level_id' => 2
            ],
        );
        $user->save();
        //[
        //    'username' => 'manager',
        //]
        //$user = UserModel::firstOrCreate(
        //    [
        //        'username' => 'manager22',
        //        'nama' => 'Manager Dua Dua',
        //        'password' => Hash::make('12345'),
        //        'level_id' => 2,

        //    ],
        //);
        return view('user', ['data' => $user]);
    }
}
        //$data = [
        //    'level_id' => 2,
        //    'username' => 'manager_tiga',
        //    'nama' => 'Manager 3',
        //    'password' => Hash::make('12345')
        //];
        //UserModel::create($data);
        //tambah data user dengan Eloquent Model
        //$data = [
        //    'nama' => 'Pelanggan Pertama',
        //];
            /*'username' => 'customer-1',
            'nama' => 'Manager',
            'password' => Hash::make('12345'),
            'level_id' => 4*/

        //UserModel::where('username', 'customer 1')->update($data); //update data user

        //coba akses model UserModel
        //$user = UserModel::find(1); //ambil semua data dari tabel m_user
        //$user = UserModel::where('level_id', 1)->first();
        //$user = UserModel::firstWhere('level_id', 1);
        //$user = UserModel::findOr(1, ['username', 'nama'], function () {

        //});
        //$user = UserModel::findOr(20, ['username', 'nama'], function () {
        //    abort(404);
        //});
        //$user = UserModel::findOrFail(1);
        //$user = UserModel::where('username', 'manager9')->firstOrFail();
        //$userCount = UserModel::where('level_id', 2)->count();
        //dd($user);