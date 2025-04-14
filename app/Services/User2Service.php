<?php
namespace App\Services;

use App\Traits\ConsumesExternalService;

class User2Service
{
    use ConsumesExternalService;

    public $baseUri;

    //@var string
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.users2.base_uri');
        $this->secret = config('services.users2.secret');
    }

    public function obtainUsers2()
    {
        return $this->performRequest('GET', '/api/users');
    }

    public function createUser2($data)
    {
        return $this->performRequest('POST', '/api/users', $data);
    }

    public function getUser2($userId)
    {
        return $this->performRequest('GET', "/api/users/{$userId}");
    }

    public function updateUser2($userId, $data)
    {
        return $this->performRequest('PUT', "/api/users/{$userId}", $data);
    }

    public function deleteUser2($userId)
    {
        return $this->performRequest('DELETE', "/api/users/{$userId}");
    }
}