<?php declare(strict_types=1);

namespace K118\Receipt\Format\Models;

/**
 * Represents a position in a receipt.
 */
interface Shop {

    public function getName(): string;

    public function getAddress(): ?Address;

    public function getTaxNumber(): ?string;

    public function getPhone(): ?string;

    public function getEmail(): ?string;

    public function getFax(): ?string;

}
