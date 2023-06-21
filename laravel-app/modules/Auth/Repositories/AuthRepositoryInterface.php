<?php
namespace App\Repositories;

use App\Models\User;
interface AuthRepositoryInterface
{
    public function findByEmail(string $email): ?User;
    public function register(array $data): User;
    public function attemptLogin(string $email, string $password): bool;
}