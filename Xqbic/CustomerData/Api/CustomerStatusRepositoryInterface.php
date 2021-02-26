<?php

namespace Xqbic\CustomerData\Api;

use Magento\Framework\Exception\LocalizedException;
use Xqbic\CustomerData\Api\Data\StatusInterface;

/**
 * Interface CustomerStatusRepositoryInterface
 * @package Xqbic\CustomerData\Api
 */
interface CustomerStatusRepositoryInterface
{
    /**
     * Retrieve customer status model.
     *
     * @param int $customerId
     * @return StatusInterface
     * @throws LocalizedException
     */
    public function getByCustomerId($customerId);

    /**
     * Save page.
     *
     * @param StatusInterface $statusModel
     * @return StatusInterface
     * @throws LocalizedException
     */
    public function save(StatusInterface $statusModel);
}
