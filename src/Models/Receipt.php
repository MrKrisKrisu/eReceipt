<?php declare(strict_types=1);

namespace K118\Receipt\Format\Models;

use Carbon\Carbon;

/**
 * Represents a receipt.
 */
interface Receipt {

    /**
     * The unique identifier of the receipt.
     * @return string
     */
    public function getId(): string;

    /**
     * The total amount of the receipt.
     * @return float
     */
    public function getTotal(): float;

    /**
     * The currency of the receipt.
     * @return Currency|null
     */
    public function getCurrency(): ?Currency;

    /**
     * Payment method with which this receipt was paid.
     * There can be more than one (e.g. 1. voucher, 2. card payment, 3. remaining cash).
     * @return array
     */
    public function getPayments(): array;

    /**
     * The date of the receipt.
     * @return Carbon
     */
    public function getTimestamp(): Carbon;

    /**
     * All positions of the receipt.
     * @return array
     */
    public function getPositions(): array;
}
