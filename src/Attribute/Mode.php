<?php

namespace Mhor\MediaInfo\Attribute;

class Mode implements AttributeInterface
{
    /**
     * @var string
     */
    private $shortName;

    /**
     * @var string
     */
    private $fullName;

    /**
     * @param string $shortName
     * @param string $fullName
     * @return Mode
     */
    public function __construct($shortName, $fullName)
    {
        $this->shortName = $shortName;
        $this->fullName = $fullName;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->shortName;
    }
}
