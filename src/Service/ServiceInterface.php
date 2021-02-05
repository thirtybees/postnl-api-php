<?php
/**
 * The MIT License (MIT).
 *
 * Copyright (c) 2017-2021 Michael Dekker (https://github.com/firstred)
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and
 * associated documentation files (the "Software"), to deal in the Software without restriction,
 * including without limitation the rights to use, copy, modify, merge, publish, distribute,
 * sublicense, and/or sell copies of the Software, and to permit persons to whom the Software
 * is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or
 * substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT
 * NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
 * DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * @author    Michael Dekker <git@michaeldekker.nl>
 * @copyright 2017-2021 Michael Dekker
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

declare(strict_types=1);

namespace Firstred\PostNL\Service;

use Firstred\PostNL\Entity\Customer;
use Firstred\PostNL\HttpClient\HttpClientInterface;
use Psr\Log\LoggerInterface;

/**
 * Interface ServiceInterface.
 */
interface ServiceInterface
{
    public const SERVICES = [
        BarcodeServiceInterface::class,
        ConfirmingServiceInterface::class,
        DeliveryDateServiceInterface::class,
        LabellingServiceInterface::class,
        LocationServiceInterface::class,
        ShippingServiceInterface::class,
        ShippingStatusServiceInterface::class,
        TimeframeServiceInterface::class,
    ];

    /**
     * @return Customer
     */
    public function getCustomer(): Customer;

    /**
     * @param Customer $customer
     *
     * @return $this
     */
    public function setCustomer(Customer $customer): static;

    /**
     * @return string
     */
    public function getApiKey(): string;

    /**
     * @param string $apiKey
     *
     * @return $this
     */
    public function setApiKey(string $apiKey): static;

    /**
     * @return bool
     */
    public function isSandbox(): bool;

    /**
     * @param bool $sandbox
     *
     * @return $this
     */
    public function setSandbox(bool $sandbox): static;

    /**
     * @return HttpClientInterface
     */
    public function getHttpClient(): HttpClientInterface;

    /**
     * @param HttpClientInterface $httpClient
     *
     * @return $this
     */
    public function setHttpClient(HttpClientInterface $httpClient): static;

    /**
     * @return LoggerInterface|null
     */
    public function getLogger(): LoggerInterface|null;

    /**
     * @param LoggerInterface|null $logger
     *
     * @return $this
     */
    public function setLogger(LoggerInterface|null $logger): static;
}
