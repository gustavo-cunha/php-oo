<?php

namespace Source\Entities;

/**
 * @Entity
 * @Table(name="user")
 */
class User {
    /**
     * @Id
     * @Column(type="guid")
     */
    private $id;

    /**
     * @Column(type="string", name="first_name")
     */
    private $firstName;

    /**
     * @Column(type="string", name="last_name")
     */
    private $lastName;

    /**
     * @Column(type="string", name="email")
     */
    private $email;

    /**
     * @Column(type="string", name="password")
     */
    private $password;

    public function getId(): int {
        return $this->id;
    }

    public function setId($id): self {
        $this->id = $id;
        return $this;
    }

    public function getFirstName(): string {
        return $this->firstName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
}
