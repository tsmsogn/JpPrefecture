<?php

namespace JpPrefecture\Test;

use JpPrefecture\Exception\InvalidPrefectureException;
use JpPrefecture\PrefectureInterface;
use JpPrefecture\JpPrefecture;
use PHPUnit\Framework\TestCase;

class JpPrefectureTest extends TestCase
{

    /**
     * @throws \JpPrefecture\Exception\InvalidPrefectureException
     */
    public function testGetWithInvalidCode()
    {
        $this->expectException(InvalidPrefectureException::class);

        JpPrefecture::get(0);
    }

    /**
     * @throws \JpPrefecture\Exception\InvalidPrefectureException
     */
    public function testGet()
    {
        $hokkaido = JpPrefecture::get(1);

        $this->assertInstanceOf(PrefectureInterface::class, $hokkaido);
        $this->assertEquals(1, $hokkaido->getCode());
        $this->assertEquals('北海道', $hokkaido->getName());
    }

    /**
     * @return void
     */
    public function testExists()
    {
        $this->assertFalse(JpPrefecture::exists(0));
        $this->assertTrue(JpPrefecture::exists(1));
    }

    /**
     * @return void
     */
    public function testAll()
    {
        $prefectures = JpPrefecture::all();

        $this->assertCount(47, $prefectures);
    }
}