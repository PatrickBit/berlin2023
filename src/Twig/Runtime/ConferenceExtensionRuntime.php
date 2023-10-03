<?php

namespace App\Twig\Runtime;

use App\Repository\ConferenceRepository;
use Twig\Extension\RuntimeExtensionInterface;

class ConferenceExtensionRuntime implements RuntimeExtensionInterface
{
    public function __construct(
        private ConferenceRepository $conferenceRepository
    )
    {
        // Inject dependencies if needed
    }

    public function getConferences()
    {
        return $this->conferenceRepository->findAll();
    }
}
