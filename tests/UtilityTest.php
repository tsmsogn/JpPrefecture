<?php

namespace JpPrefecture\Test;

use JpPrefecture\Exception\InvalidPrefectureException;
use JpPrefecture\PrefectureInterface;
use JpPrefecture\Utility;
use PHPUnit\Framework\TestCase;

class UtilityTest extends TestCase
{

    /**
     * @throws \JpPrefecture\Exception\InvalidPrefectureException
     */
    public function testGetPrefectureWithInvalidCode()
    {
        $this->expectException(InvalidPrefectureException::class);

        Utility::getPrefecture(0);
    }

    /**
     * @throws \JpPrefecture\Exception\InvalidPrefectureException
     */
    public function testGetPrefecture()
    {
        $hokkaido = Utility::getPrefecture(1);

        $this->assertInstanceOf(PrefectureInterface::class, $hokkaido);
        $this->assertEquals('北海道', $hokkaido->getName());
    }

    /**
     * @return void
     */
    public function testGetAllPrefectures()
    {
        $prefectures = Utility::getAllPrefectures();

        $this->assertCount(47, $prefectures);
    }
}