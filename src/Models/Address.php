<?php declare(strict_types=1);

namespace K118\Receipt\Format\Models;

interface Address {

    public function getStreet(): ?string;

    public function getPostalCode(): ?string;

    public function getCity(): ?string;

    public function getCountry(): ?string;
}