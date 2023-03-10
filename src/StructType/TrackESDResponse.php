<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackESDResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackESDResponse
 * @subpackage Structs
 */
class TrackESDResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ResultTrackSkybillV2|null
     */
    protected ?\StructType\ResultTrackSkybillV2 $return = null;
    /**
     * Constructor method for trackESDResponse
     * @uses TrackESDResponse::setReturn()
     * @param \StructType\ResultTrackSkybillV2 $return
     */
    public function __construct(?\StructType\ResultTrackSkybillV2 $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ResultTrackSkybillV2|null
     */
    public function getReturn(): ?\StructType\ResultTrackSkybillV2
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ResultTrackSkybillV2 $return
     * @return \StructType\TrackESDResponse
     */
    public function setReturn(?\StructType\ResultTrackSkybillV2 $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
