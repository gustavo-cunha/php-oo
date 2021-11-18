<?php

namespace Source\Repositories;

use Source\Entities\User;
use stdClass;

interface UserRepository {
    public function findOne(stdClass $data): User;
    public function create(stdClass $data): User;
    public function save(User $user);
}
