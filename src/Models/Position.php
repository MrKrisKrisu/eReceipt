<?php declare(strict_types=1);

namespace K118\Receipt\Format\Models;

/**
 * Represents a position in a receipt.
 */
interface Position {

    public function getReceipt(): Receipt;

    public function getName(): string;

    public function getSinglePrice(): float;

    public function getQuantity(): float;

    public function getTotalPrice(): float;

    public function getTax(): float;

}
