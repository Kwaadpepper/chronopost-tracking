<?php

declare(strict_types=1);

namespace ChronopostTracking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultSearchPOD StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResultSearchPOD extends AbstractStructBase
{
    /**
     * The errorCode
     * @var int|null
     */
    protected ?int $errorCode = null;
    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorMessage = null;
    /**
     * The formatPOD
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $formatPOD = null;
    /**
     * The pod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pod = null;
    /**
     * The podPresente
     * @var bool|null
     */
    protected ?bool $podPresente = null;
    /**
     * The statusCode
     * @var int|null
     */
    protected ?int $statusCode = null;
    /**
     * Constructor method for resultSearchPOD
     * @uses ResultSearchPOD::setErrorCode()
     * @uses ResultSearchPOD::setErrorMessage()
     * @uses ResultSearchPOD::setFormatPOD()
     * @uses ResultSearchPOD::setPod()
     * @uses ResultSearchPOD::setPodPresente()
     * @uses ResultSearchPOD::setStatusCode()
     * @param int $errorCode
     * @param string $errorMessage
     * @param string $formatPOD
     * @param string $pod
     * @param bool $podPresente
     * @param int $statusCode
     */
    public function __construct(?int $errorCode = null, ?string $errorMessage = null, ?string $formatPOD = null, ?string $pod = null, ?bool $podPresente = null, ?int $statusCode = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setFormatPOD($formatPOD)
            ->setPod($pod)
            ->setPodPresente($podPresente)
            ->setStatusCode($statusCode);
    }
    /**
     * Get errorCode value
     * @return int|null
     */
    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param int $errorCode
     * @return \ChronopostTracking\StructType\ResultSearchPOD
     */
    public function setErrorCode(?int $errorCode = null): self
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \ChronopostTracking\StructType\ResultSearchPOD
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
        
        return $this;
    }
    /**
     * Get formatPOD value
     * @return string|null
     */
    public function getFormatPOD(): ?string
    {
        return $this->formatPOD;
    }
    /**
     * Set formatPOD value
     * @param string $formatPOD
     * @return \ChronopostTracking\StructType\ResultSearchPOD
     */
    public function setFormatPOD(?string $formatPOD = null): self
    {
        // validation for constraint: string
        if (!is_null($formatPOD) && !is_string($formatPOD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($formatPOD, true), gettype($formatPOD)), __LINE__);
        }
        $this->formatPOD = $formatPOD;
        
        return $this;
    }
    /**
     * Get pod value
     * @return string|null
     */
    public function getPod(): ?string
    {
        return $this->pod;
    }
    /**
     * Set pod value
     * @param string $pod
     * @return \ChronopostTracking\StructType\ResultSearchPOD
     */
    public function setPod(?string $pod = null): self
    {
        // validation for constraint: string
        if (!is_null($pod) && !is_string($pod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pod, true), gettype($pod)), __LINE__);
        }
        $this->pod = $pod;
        
        return $this;
    }
    /**
     * Get podPresente value
     * @return bool|null
     */
    public function getPodPresente(): ?bool
    {
        return $this->podPresente;
    }
    /**
     * Set podPresente value
     * @param bool $podPresente
     * @return \ChronopostTracking\StructType\ResultSearchPOD
     */
    public function setPodPresente(?bool $podPresente = null): self
    {
        // validation for constraint: boolean
        if (!is_null($podPresente) && !is_bool($podPresente)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($podPresente, true), gettype($podPresente)), __LINE__);
        }
        $this->podPresente = $podPresente;
        
        return $this;
    }
    /**
     * Get statusCode value
     * @return int|null
     */
    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }
    /**
     * Set statusCode value
     * @param int $statusCode
     * @return \ChronopostTracking\StructType\ResultSearchPOD
     */
    public function setStatusCode(?int $statusCode = null): self
    {
        // validation for constraint: int
        if (!is_null($statusCode) && !(is_int($statusCode) || ctype_digit($statusCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($statusCode, true), gettype($statusCode)), __LINE__);
        }
        $this->statusCode = $statusCode;
        
        return $this;
    }
}
