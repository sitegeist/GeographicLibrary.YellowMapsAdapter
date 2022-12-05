<?php

/*
 * This script belongs to the Neos Flow package "Sitegeist.GeographicLibrary.YellowMapsAdapter".
 */

declare(strict_types=1);

namespace Sitegeist\GeographicLibrary\YellowMapsAdapter\Domain;

use Nezaniel\GeographicLibrary\Application\Value\GeoCoordinates;
use Nezaniel\GeographicLibrary\Domain\Repository\GeoCoderInterface;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\I18n\Service as LocalizationService;

#[Flow\Scope('singleton')]
final class YellowMapsGeoCoder implements GeoCoderInterface
{
    public function __construct(
        private readonly LocalizationService $localizationService,
        private readonly string $apiKey
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function fetchCoordinatesByAddress(string $address): GeoCoordinates
    {
        return new GeoCoordinates(0, 0);
    }

    /**
     * {@inheritdoc}
     */
    public function fetchCoordinatesByPostalCode(string $zip, string $countryCode): GeoCoordinates
    {
        return new GeoCoordinates(0, 0);
    }

    /**
     * {@inheritdoc}
     */
    public function enrichGeoCoordinates(GeoCoordinates $coordinates): GeoCoordinates
    {
        return new GeoCoordinates(0, 0);
    }
}
