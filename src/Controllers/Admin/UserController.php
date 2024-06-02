<?php

namespace Minhhai\Xuongoop\Controllers\Admin;

use Minhhai\Xuongoop\Commons\Cotroller;
use Minhhai\Xuongoop\Commons\Helper;
use Minhhai\Xuongoop\Models\User;

class UserController extends Cotroller
{
    private user $user;
    public function __construct()
    {
        $this->user = new User();
    }
    public function index()
    {
        [$users, $totalPage] = $this->user->paginate($_GET['page'] ?? 1);
        // Helper::debug($totalPath);
        // echo __CLASS__ . "@" . __FUNCTION__;
        $this->renderViewAdmin(
            'users.index',
            [
                'users' => $users,
                'totalPage' => $totalPage
            ]
        );
    }
    public function create()
    {
        echo __CLASS__ . "@" . __FUNCTION__;
    }
    public function store()
    {
        echo __CLASS__ . "@" . __FUNCTION__;
    }
    public function show($id)
    {
        echo __CLASS__ . "@" . __FUNCTION__;
    }
    public function edit($id)
    {
        echo __CLASS__ . "@" . __FUNCTION__;
    }
    public function update($id)
    {
        echo __CLASS__ . "@" . __FUNCTION__;
    }
    public function delete($id)
    {
        echo __CLASS__ . "@" . __FUNCTION__;
    }
}
