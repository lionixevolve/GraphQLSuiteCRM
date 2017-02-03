<?php

namespace Entities;

/**
 * AmProjecttemplatesContacts1C
 */
class AmProjecttemplatesContacts1C
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var boolean
     */
    private $deleted = '0';

    /**
     * @var string
     */
    private $amProjecttemplatesIda;

    /**
     * @var string
     */
    private $contactsIdb;


    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return AmProjecttemplatesContacts1C
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    /**
     * Get dateModified
     *
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return AmProjecttemplatesContacts1C
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set amProjecttemplatesIda
     *
     * @param string $amProjecttemplatesIda
     *
     * @return AmProjecttemplatesContacts1C
     */
    public function setAmProjecttemplatesIda($amProjecttemplatesIda)
    {
        $this->amProjecttemplatesIda = $amProjecttemplatesIda;

        return $this;
    }

    /**
     * Get amProjecttemplatesIda
     *
     * @return string
     */
    public function getAmProjecttemplatesIda()
    {
        return $this->amProjecttemplatesIda;
    }

    /**
     * Set contactsIdb
     *
     * @param string $contactsIdb
     *
     * @return AmProjecttemplatesContacts1C
     */
    public function setContactsIdb($contactsIdb)
    {
        $this->contactsIdb = $contactsIdb;

        return $this;
    }

    /**
     * Get contactsIdb
     *
     * @return string
     */
    public function getContactsIdb()
    {
        return $this->contactsIdb;
    }
}

