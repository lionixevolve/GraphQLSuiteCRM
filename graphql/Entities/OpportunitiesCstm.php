<?php

namespace Entities;

/**
 * OpportunitiesCstm
 */
class OpportunitiesCstm
{
    /**
     * @var string
     */
    private $idC;

    /**
     * @var float
     */
    private $jjwgMapsLngC = '0.00000000';

    /**
     * @var float
     */
    private $jjwgMapsLatC = '0.00000000';

    /**
     * @var string
     */
    private $jjwgMapsGeocodeStatusC;

    /**
     * @var string
     */
    private $jjwgMapsAddressC;

    /**
     * @var integer
     */
    private $lxcodeC;

    /**
     * @var string
     */
    private $areaC;

    /**
     * @var \DateTime
     */
    private $nextdatecontactC;

    /**
     * @var \DateTime
     */
    private $quotedeliverydateC;

    /**
     * @var string
     */
    private $maincontactC;

    /**
     * @var string
     */
    private $migratedfromC;

    /**
     * @var string
     */
    private $lostdetailC;

    /**
     * @var string
     */
    private $parentType;

    /**
     * @var string
     */
    private $parentId;

    /**
     * @var string
     */
    private $departmentC;

    /**
     * @var string
     */
    private $userIdC;

    /**
     * @var string
     */
    private $userId1C;

    /**
     * @var string
     */
    private $lostaccountC;

    /**
     * @var boolean
     */
    private $budgetC = '0';

    /**
     * @var integer
     */
    private $budgetyearC;

    /**
     * @var string
     */
    private $budgetamountC = '0.000000';

    /**
     * @var boolean
     */
    private $budgethelpC = '0';

    /**
     * @var string
     */
    private $budgethelpamountC = '0.000000';

    /**
     * @var string
     */
    private $namefreetextC;


    /**
     * Get idC
     *
     * @return string
     */
    public function getIdC()
    {
        return $this->idC;
    }

    /**
     * Set jjwgMapsLngC
     *
     * @param float $jjwgMapsLngC
     *
     * @return OpportunitiesCstm
     */
    public function setJjwgMapsLngC($jjwgMapsLngC)
    {
        $this->jjwgMapsLngC = $jjwgMapsLngC;

        return $this;
    }

    /**
     * Get jjwgMapsLngC
     *
     * @return float
     */
    public function getJjwgMapsLngC()
    {
        return $this->jjwgMapsLngC;
    }

    /**
     * Set jjwgMapsLatC
     *
     * @param float $jjwgMapsLatC
     *
     * @return OpportunitiesCstm
     */
    public function setJjwgMapsLatC($jjwgMapsLatC)
    {
        $this->jjwgMapsLatC = $jjwgMapsLatC;

        return $this;
    }

    /**
     * Get jjwgMapsLatC
     *
     * @return float
     */
    public function getJjwgMapsLatC()
    {
        return $this->jjwgMapsLatC;
    }

    /**
     * Set jjwgMapsGeocodeStatusC
     *
     * @param string $jjwgMapsGeocodeStatusC
     *
     * @return OpportunitiesCstm
     */
    public function setJjwgMapsGeocodeStatusC($jjwgMapsGeocodeStatusC)
    {
        $this->jjwgMapsGeocodeStatusC = $jjwgMapsGeocodeStatusC;

        return $this;
    }

    /**
     * Get jjwgMapsGeocodeStatusC
     *
     * @return string
     */
    public function getJjwgMapsGeocodeStatusC()
    {
        return $this->jjwgMapsGeocodeStatusC;
    }

    /**
     * Set jjwgMapsAddressC
     *
     * @param string $jjwgMapsAddressC
     *
     * @return OpportunitiesCstm
     */
    public function setJjwgMapsAddressC($jjwgMapsAddressC)
    {
        $this->jjwgMapsAddressC = $jjwgMapsAddressC;

        return $this;
    }

    /**
     * Get jjwgMapsAddressC
     *
     * @return string
     */
    public function getJjwgMapsAddressC()
    {
        return $this->jjwgMapsAddressC;
    }

    /**
     * Set lxcodeC
     *
     * @param integer $lxcodeC
     *
     * @return OpportunitiesCstm
     */
    public function setLxcodeC($lxcodeC)
    {
        $this->lxcodeC = $lxcodeC;

        return $this;
    }

    /**
     * Get lxcodeC
     *
     * @return integer
     */
    public function getLxcodeC()
    {
        return $this->lxcodeC;
    }

    /**
     * Set areaC
     *
     * @param string $areaC
     *
     * @return OpportunitiesCstm
     */
    public function setAreaC($areaC)
    {
        $this->areaC = $areaC;

        return $this;
    }

    /**
     * Get areaC
     *
     * @return string
     */
    public function getAreaC()
    {
        return $this->areaC;
    }

    /**
     * Set nextdatecontactC
     *
     * @param \DateTime $nextdatecontactC
     *
     * @return OpportunitiesCstm
     */
    public function setNextdatecontactC($nextdatecontactC)
    {
        $this->nextdatecontactC = $nextdatecontactC;

        return $this;
    }

    /**
     * Get nextdatecontactC
     *
     * @return \DateTime
     */
    public function getNextdatecontactC()
    {
        return $this->nextdatecontactC;
    }

    /**
     * Set quotedeliverydateC
     *
     * @param \DateTime $quotedeliverydateC
     *
     * @return OpportunitiesCstm
     */
    public function setQuotedeliverydateC($quotedeliverydateC)
    {
        $this->quotedeliverydateC = $quotedeliverydateC;

        return $this;
    }

    /**
     * Get quotedeliverydateC
     *
     * @return \DateTime
     */
    public function getQuotedeliverydateC()
    {
        return $this->quotedeliverydateC;
    }

    /**
     * Set maincontactC
     *
     * @param string $maincontactC
     *
     * @return OpportunitiesCstm
     */
    public function setMaincontactC($maincontactC)
    {
        $this->maincontactC = $maincontactC;

        return $this;
    }

    /**
     * Get maincontactC
     *
     * @return string
     */
    public function getMaincontactC()
    {
        return $this->maincontactC;
    }

    /**
     * Set migratedfromC
     *
     * @param string $migratedfromC
     *
     * @return OpportunitiesCstm
     */
    public function setMigratedfromC($migratedfromC)
    {
        $this->migratedfromC = $migratedfromC;

        return $this;
    }

    /**
     * Get migratedfromC
     *
     * @return string
     */
    public function getMigratedfromC()
    {
        return $this->migratedfromC;
    }

    /**
     * Set lostdetailC
     *
     * @param string $lostdetailC
     *
     * @return OpportunitiesCstm
     */
    public function setLostdetailC($lostdetailC)
    {
        $this->lostdetailC = $lostdetailC;

        return $this;
    }

    /**
     * Get lostdetailC
     *
     * @return string
     */
    public function getLostdetailC()
    {
        return $this->lostdetailC;
    }

    /**
     * Set parentType
     *
     * @param string $parentType
     *
     * @return OpportunitiesCstm
     */
    public function setParentType($parentType)
    {
        $this->parentType = $parentType;

        return $this;
    }

    /**
     * Get parentType
     *
     * @return string
     */
    public function getParentType()
    {
        return $this->parentType;
    }

    /**
     * Set parentId
     *
     * @param string $parentId
     *
     * @return OpportunitiesCstm
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set departmentC
     *
     * @param string $departmentC
     *
     * @return OpportunitiesCstm
     */
    public function setDepartmentC($departmentC)
    {
        $this->departmentC = $departmentC;

        return $this;
    }

    /**
     * Get departmentC
     *
     * @return string
     */
    public function getDepartmentC()
    {
        return $this->departmentC;
    }

    /**
     * Set userIdC
     *
     * @param string $userIdC
     *
     * @return OpportunitiesCstm
     */
    public function setUserIdC($userIdC)
    {
        $this->userIdC = $userIdC;

        return $this;
    }

    /**
     * Get userIdC
     *
     * @return string
     */
    public function getUserIdC()
    {
        return $this->userIdC;
    }

    /**
     * Set userId1C
     *
     * @param string $userId1C
     *
     * @return OpportunitiesCstm
     */
    public function setUserId1C($userId1C)
    {
        $this->userId1C = $userId1C;

        return $this;
    }

    /**
     * Get userId1C
     *
     * @return string
     */
    public function getUserId1C()
    {
        return $this->userId1C;
    }

    /**
     * Set lostaccountC
     *
     * @param string $lostaccountC
     *
     * @return OpportunitiesCstm
     */
    public function setLostaccountC($lostaccountC)
    {
        $this->lostaccountC = $lostaccountC;

        return $this;
    }

    /**
     * Get lostaccountC
     *
     * @return string
     */
    public function getLostaccountC()
    {
        return $this->lostaccountC;
    }

    /**
     * Set budgetC
     *
     * @param boolean $budgetC
     *
     * @return OpportunitiesCstm
     */
    public function setBudgetC($budgetC)
    {
        $this->budgetC = $budgetC;

        return $this;
    }

    /**
     * Get budgetC
     *
     * @return boolean
     */
    public function getBudgetC()
    {
        return $this->budgetC;
    }

    /**
     * Set budgetyearC
     *
     * @param integer $budgetyearC
     *
     * @return OpportunitiesCstm
     */
    public function setBudgetyearC($budgetyearC)
    {
        $this->budgetyearC = $budgetyearC;

        return $this;
    }

    /**
     * Get budgetyearC
     *
     * @return integer
     */
    public function getBudgetyearC()
    {
        return $this->budgetyearC;
    }

    /**
     * Set budgetamountC
     *
     * @param string $budgetamountC
     *
     * @return OpportunitiesCstm
     */
    public function setBudgetamountC($budgetamountC)
    {
        $this->budgetamountC = $budgetamountC;

        return $this;
    }

    /**
     * Get budgetamountC
     *
     * @return string
     */
    public function getBudgetamountC()
    {
        return $this->budgetamountC;
    }

    /**
     * Set budgethelpC
     *
     * @param boolean $budgethelpC
     *
     * @return OpportunitiesCstm
     */
    public function setBudgethelpC($budgethelpC)
    {
        $this->budgethelpC = $budgethelpC;

        return $this;
    }

    /**
     * Get budgethelpC
     *
     * @return boolean
     */
    public function getBudgethelpC()
    {
        return $this->budgethelpC;
    }

    /**
     * Set budgethelpamountC
     *
     * @param string $budgethelpamountC
     *
     * @return OpportunitiesCstm
     */
    public function setBudgethelpamountC($budgethelpamountC)
    {
        $this->budgethelpamountC = $budgethelpamountC;

        return $this;
    }

    /**
     * Get budgethelpamountC
     *
     * @return string
     */
    public function getBudgethelpamountC()
    {
        return $this->budgethelpamountC;
    }

    /**
     * Set namefreetextC
     *
     * @param string $namefreetextC
     *
     * @return OpportunitiesCstm
     */
    public function setNamefreetextC($namefreetextC)
    {
        $this->namefreetextC = $namefreetextC;

        return $this;
    }

    /**
     * Get namefreetextC
     *
     * @return string
     */
    public function getNamefreetextC()
    {
        return $this->namefreetextC;
    }
}

