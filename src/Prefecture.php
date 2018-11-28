<?php

namespace JpPrefecture;

/**
 * Class Prefecture
 * @package JpPrefecture
 */
class Prefecture implements PrefectureInterface
{
    /**
     * @var int
     */
    protected $code;

    /**
     * @var string
     */
    protected $name;

    /**
     * Prefecture constructor.
     * @param $code
     * @param $name
     */
    public function __construct($code, $name)
    {
        $this->code = $code;
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}