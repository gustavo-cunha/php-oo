<?php

namespace Source\Services;

use Source\Repositories\UserRepositorySqlite;
use \Exception;

abstract class IUserRequest {
    public $name;
    public $email;
    public $password;
    public $admin;
}

class CreateUserService {
    public function execute(IUserRequest $request) {
        if (!$request->email) {
            throw new Exception("Invalid e-mail.");
        }

        $userRepo = new UserRepositorySqlite();

        $userAlreadyExists = $userRepo->findOne((object) ['email' => $request->email]);
        if ($userAlreadyExists) {
            throw new Exception("User already exists.");
        }

        $passwordHash = hash($request->password, 8);

        $user = $userRepo->create((object) [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $passwordHash,
            'admin' => $request->admin
        ]);
        $userRepo->save($user);

        return $user;
    }
}
