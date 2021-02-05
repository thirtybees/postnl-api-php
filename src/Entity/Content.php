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

namespace Firstred\PostNL\Entity;

use Firstred\PostNL\Attribute\PropInterface;
use Firstred\PostNL\Exception\InvalidArgumentException;
use Firstred\PostNL\Misc\SerializableObject;
use Firstred\PostNL\Service\ServiceInterface;
use JetBrains\PhpStorm\ExpectedValues;

/**
 * Class Content.
 */
class Content extends SerializableObject
{
    /**
     * Content constructor.
     *
     * @param string      $service
     * @param string      $propType
     * @param string|null $CountryOfOrigin
     * @param string|null $Description
     * @param string|null $HSTariffNr
     * @param string|null $Quantity
     * @param string|null $Value
     * @param string|null $Weight
     * @param array|null  $Content
     *
     * @throws InvalidArgumentException
     */
    public function __construct(
        #[ExpectedValues(values: ServiceInterface::SERVICES + [''])]
        string $service,
        #[ExpectedValues(values: PropInterface::PROP_TYPES + [''])]
        string $propType,

        protected string|null $CountryOfOrigin = null,
        protected string|null $Description = null,
        protected string|null $HSTariffNr = null,
        protected string|null $Quantity = null,
        protected string|null $Value = null,
        protected string|null $Weight = null,
        protected array|null $Content = null,
    ) {
        parent::__construct(service: $service, propType: $propType);

        $this->setCountryOfOrigin(CountryOfOrigin: $CountryOfOrigin);
        $this->setDescription(Description: $Description);
        $this->setHSTariffNr(HSTariffNr: $HSTariffNr);
        $this->setQuantity(Quantity: $Quantity);
        $this->setValue(Value: $Value);
        $this->setWeight(Weight: $Weight);
        $this->setContent(Content: $Content);
    }

    /**
     * @return string|null
     */
    public function getCountryOfOrigin(): string|null
    {
        return $this->CountryOfOrigin;
    }

    /**
     * @param string|null $CountryOfOrigin
     *
     * @return static
     */
    public function setCountryOfOrigin(string|null $CountryOfOrigin = null): static
    {
        $this->CountryOfOrigin = $CountryOfOrigin;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): string|null
    {
        return $this->Description;
    }

    /**
     * @param string|null $Description
     *
     * @return static
     */
    public function setDescription(string|null $Description = null): static
    {
        $this->Description = $Description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getHSTariffNr(): string|null
    {
        return $this->HSTariffNr;
    }

    /**
     * @param string|null $HSTariffNr
     *
     * @return static
     */
    public function setHSTariffNr(string|null $HSTariffNr = null): static
    {
        $this->HSTariffNr = $HSTariffNr;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getQuantity(): string|null
    {
        return $this->Quantity;
    }

    /**
     * @param string|null $Quantity
     *
     * @return static
     */
    public function setQuantity(string|null $Quantity = null): static
    {
        $this->Quantity = $Quantity;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getValue(): string|null
    {
        return $this->Value;
    }

    /**
     * @param string|null $Value
     *
     * @return static
     */
    public function setValue(string|null $Value = null): static
    {
        $this->Value = $Value;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getWeight(): string|null
    {
        return $this->Weight;
    }

    /**
     * @param string|null $Weight
     *
     * @return static
     */
    public function setWeight(string|null $Weight = null): static
    {
        $this->Weight = $Weight;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getContent(): array|null
    {
        return $this->Content;
    }

    /**
     * @param array|null $Content
     *
     * @return static
     */
    public function setContent(array|null $Content = null): static
    {
        $this->Content = $Content;

        return $this;
    }
}
