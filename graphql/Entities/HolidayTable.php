<?php

namespace Entities;

/**
 * HolidayTable
 */
class HolidayTable
{
    /**
     * @var string
     */
    private $holidayTableId;

    /**
     * @var \DateTime
     */
    private $holidayDate;

    /**
     * @var string
     */
    private $weekDay;

    /**
     * @var string
     */
    private $holidayName;

    /**
     * @var string
     */
    private $countryCodes = 'ALL';


    /**
     * Get holidayTableId
     *
     * @return string
     */
    public function getHolidayTableId()
    {
        return $this->holidayTableId;
    }

    /**
     * Set holidayDate
     *
     * @param \DateTime $holidayDate
     *
     * @return HolidayTable
     */
    public function setHolidayDate($holidayDate)
    {
        $this->holidayDate = $holidayDate;

        return $this;
    }

    /**
     * Get holidayDate
     *
     * @return \DateTime
     */
    public function getHolidayDate()
    {
        return $this->holidayDate;
    }

    /**
     * Set weekDay
     *
     * @param string $weekDay
     *
     * @return HolidayTable
     */
    public function setWeekDay($weekDay)
    {
        $this->weekDay = $weekDay;

        return $this;
    }

    /**
     * Get weekDay
     *
     * @return string
     */
    public function getWeekDay()
    {
        return $this->weekDay;
    }

    /**
     * Set holidayName
     *
     * @param string $holidayName
     *
     * @return HolidayTable
     */
    public function setHolidayName($holidayName)
    {
        $this->holidayName = $holidayName;

        return $this;
    }

    /**
     * Get holidayName
     *
     * @return string
     */
    public function getHolidayName()
    {
        return $this->holidayName;
    }

    /**
     * Set countryCodes
     *
     * @param string $countryCodes
     *
     * @return HolidayTable
     */
    public function setCountryCodes($countryCodes)
    {
        $this->countryCodes = $countryCodes;

        return $this;
    }

    /**
     * Get countryCodes
     *
     * @return string
     */
    public function getCountryCodes()
    {
        return $this->countryCodes;
    }
}

