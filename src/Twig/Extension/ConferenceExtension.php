<?php

namespace App\Twig\Extension;

use App\Twig\Runtime\ConferenceExtensionRuntime;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class ConferenceExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('conferences', [ConferenceExtensionRuntime::class, 'getConferences']),
        ];
    }
}
