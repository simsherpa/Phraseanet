<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Basket extends \Entities\Basket implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setDescription($description)
    {
        $this->__load();
        return parent::setDescription($description);
    }

    public function getDescription()
    {
        $this->__load();
        return parent::getDescription();
    }

    public function setUsrId($usrId)
    {
        $this->__load();
        return parent::setUsrId($usrId);
    }

    public function getUsrId()
    {
        $this->__load();
        return parent::getUsrId();
    }

    public function setOwner(\User_Adapter $user)
    {
        $this->__load();
        return parent::setOwner($user);
    }

    public function getOwner(\Alchemy\Phrasea\Application $app)
    {
        $this->__load();
        return parent::getOwner($app);
    }

    public function setIsRead($isRead)
    {
        $this->__load();
        return parent::setIsRead($isRead);
    }

    public function getIsRead()
    {
        $this->__load();
        return parent::getIsRead();
    }

    public function setPusherId($pusherId)
    {
        $this->__load();
        return parent::setPusherId($pusherId);
    }

    public function getPusherId()
    {
        $this->__load();
        return parent::getPusherId();
    }

    public function setPusher(\User_Adapter $user)
    {
        $this->__load();
        return parent::setPusher($user);
    }

    public function getPusher(\Alchemy\Phrasea\Application $app)
    {
        $this->__load();
        return parent::getPusher($app);
    }

    public function setArchived($archived)
    {
        $this->__load();
        return parent::setArchived($archived);
    }

    public function getArchived()
    {
        $this->__load();
        return parent::getArchived();
    }

    public function setCreated(\DateTime $created)
    {
        $this->__load();
        return parent::setCreated($created);
    }

    public function getCreated()
    {
        $this->__load();
        return parent::getCreated();
    }

    public function setUpdated(\DateTime $updated)
    {
        $this->__load();
        return parent::setUpdated($updated);
    }

    public function getUpdated()
    {
        $this->__load();
        return parent::getUpdated();
    }

    public function setValidation(\Entities\ValidationSession $validation = NULL)
    {
        $this->__load();
        return parent::setValidation($validation);
    }

    public function getValidation()
    {
        $this->__load();
        return parent::getValidation();
    }

    public function addElement(\Entities\BasketElement $elements)
    {
        $this->__load();
        return parent::addElement($elements);
    }

    public function removeElement(\Entities\BasketElement $elements)
    {
        $this->__load();
        return parent::removeElement($elements);
    }

    public function setOrder(\Entities\Order $order = NULL)
    {
        $this->__load();
        return parent::setOrder($order);
    }

    public function getOrder()
    {
        $this->__load();
        return parent::getOrder();
    }

    public function getElements()
    {
        $this->__load();
        return parent::getElements();
    }

    public function getElementsByOrder($ordre)
    {
        $this->__load();
        return parent::getElementsByOrder($ordre);
    }

    public function hasRecord(\Alchemy\Phrasea\Application $app, \record_adapter $record)
    {
        $this->__load();
        return parent::hasRecord($app, $record);
    }

    public function getSize(\Alchemy\Phrasea\Application $app)
    {
        $this->__load();
        return parent::getSize($app);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'name', 'description', 'usr_id', 'is_read', 'pusher_id', 'archived', 'created', 'updated', 'validation', 'elements', 'order');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}