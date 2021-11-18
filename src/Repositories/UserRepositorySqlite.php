<?php

namespace Source\Repositories;

use Source\Repositories\UserRepository;
use Source\Entities\User;
use stdClass;

class UserRepositorySqlite implements UserRepository {
    public function findOne(stdClass $data): User {
        return new User();
    }
    public function create(stdClass $data): User {
        return new User();
    }
    public function save(User $user) {
    }
}
