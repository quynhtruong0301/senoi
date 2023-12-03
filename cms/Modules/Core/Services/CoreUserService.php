<?php

namespace Cms\Modules\Core\Services;

use Cms\Modules\Core\Repositories\Contracts\CoreUserRepositoryContract;
use Cms\Modules\Core\Services\Contracts\CoreUserServiceContract;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class CoreUserService implements CoreUserServiceContract
{
    protected $repository;

    public function __construct(CoreUserRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function getAll()
    {
        return $this->repository->getAll();
    }

    public function paginate($data)
    {
        return $this->repository->paginate($data);
    }

    public function store($data)
    {
        $data['password'] = Hash::make($data['password']);

        return $this->repository->store($data);
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }

    public function update($id, $data)
    {
        return $this->repository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }

    public function findByEmail($data)
    {
        return $this->repository->findByEmail($data);
    }

    public function handleCallback($data, $social)
    {
        $socialUser = Socialite::driver($social)->user();
        $user = $this->repository->findByEmail($socialUser->email);

        if (!$user) {
            $user = $this->repository->store([
                'name' => $socialUser->name,
                'email' => $socialUser->email,
                'social_id' => $socialUser->id,
                'avatar' => $socialUser->avatar ? $socialUser->avatar : '/assets/web/images/avatar-default.jpeg',
                'social_provider' => $social
            ]);
        }

        if ($user && !$user->social_id) {
            $this->repository->update($user->id,
                [
                    'name' => $socialUser->name,
                    'email' => $socialUser->email,
                    'social_id' => $socialUser->id,
                    'social_provider' => $social
                ]);
        }

        return $user;
    }
}
