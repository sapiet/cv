<?php

namespace App\Services;

use App\Entity\Profile;
use App\Repository\ProfileRepository;

class ProfileProvider
{
    /**
     * @var string
     */
    private $email;

    /**
     * @var ProfileRepository
     */
    private $profileRepository;

    public function __construct(
        string $email,
        ProfileRepository $profileRepository
    ) {
        $this->email = $email;
        $this->profileRepository = $profileRepository;
    }

    /**
     * @return Profile
     */
    public function get(): Profile
    {
        return $this->profileRepository->getByEmail($this->email);
    }
}
