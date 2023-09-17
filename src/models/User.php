<?php

namespace Src\models;

class User
{

    private int     $userId;
    private string  $username;
    private string  $password;
    private string  $token;
    private array   $roles;

    /**
     * @param int $userId
     * @param string $username
     * @param string $password
     * @param string $token
     * @param array $roles
     */
    public function __construct(int $userId, string $username, string $password, string $token, array $roles)
    {
        $this->userId = $userId;
        $this->username = $username;
        $this->password = $password;
        $this->token = $token;
        $this->roles = $roles;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): void
    {
        $this->token = $token;
    }

    public function getRoles(): array
    {
        return $this->roles;
    }

    public function setRoles(array $roles): void
    {
        $this->roles = $roles;
    }




}