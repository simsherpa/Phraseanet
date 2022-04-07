<?php

namespace Alchemy\Phrasea\Model\Proxies\__CG__\Alchemy\Phrasea\Model\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ValidationSession extends \Alchemy\Phrasea\Model\Entities\ValidationSession implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ValidationSession' . "\0" . 'id', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ValidationSession' . "\0" . 'initiator', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ValidationSession' . "\0" . 'created', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ValidationSession' . "\0" . 'updated', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ValidationSession' . "\0" . 'expires', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ValidationSession' . "\0" . 'basket'];
        }

        return ['__isInitialized__', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ValidationSession' . "\0" . 'id', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ValidationSession' . "\0" . 'initiator', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ValidationSession' . "\0" . 'created', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ValidationSession' . "\0" . 'updated', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ValidationSession' . "\0" . 'expires', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ValidationSession' . "\0" . 'basket'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ValidationSession $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setInitiator(\Alchemy\Phrasea\Model\Entities\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInitiator', [$user]);

        return parent::setInitiator($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getInitiator()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInitiator', []);

        return parent::getInitiator();
    }

    /**
     * {@inheritDoc}
     */
    public function isInitiator(\Alchemy\Phrasea\Model\Entities\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isInitiator', [$user]);

        return parent::isInitiator($user);
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated(\DateTime $created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', [$created]);

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', []);

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdated(\DateTime $updated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdated', [$updated]);

        return parent::setUpdated($updated);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdated', []);

        return parent::getUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function setExpires($expires)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpires', [$expires]);

        return parent::setExpires($expires);
    }

    /**
     * {@inheritDoc}
     */
    public function getExpires()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExpires', []);

        return parent::getExpires();
    }

    /**
     * {@inheritDoc}
     */
    public function setBasket(\Alchemy\Phrasea\Model\Entities\Basket $basket = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBasket', [$basket]);

        return parent::setBasket($basket);
    }

    /**
     * {@inheritDoc}
     */
    public function getBasket()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBasket', []);

        return parent::getBasket();
    }

    /**
     * {@inheritDoc}
     */
    public function addParticipant(\Alchemy\Phrasea\Model\Entities\ValidationParticipant $participants)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addParticipant', [$participants]);

        return parent::addParticipant($participants);
    }

    /**
     * {@inheritDoc}
     */
    public function removeParticipant(\Alchemy\Phrasea\Model\Entities\ValidationParticipant $participants)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeParticipant', [$participants]);

        return parent::removeParticipant($participants);
    }

    /**
     * {@inheritDoc}
     */
    public function getParticipants()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParticipants', []);

        return parent::getParticipants();
    }

    /**
     * {@inheritDoc}
     */
    public function isFinished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isFinished', []);

        return parent::isFinished();
    }

    /**
     * {@inheritDoc}
     */
    public function getValidationString(\Alchemy\Phrasea\Application $app, \Alchemy\Phrasea\Model\Entities\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValidationString', [$app, $user]);

        return parent::getValidationString($app, $user);
    }

    /**
     * {@inheritDoc}
     */
    public function getParticipant(\Alchemy\Phrasea\Model\Entities\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParticipant', [$user]);

        return parent::getParticipant($user);
    }

    /**
     * {@inheritDoc}
     */
    public function isParticipant(\Alchemy\Phrasea\Model\Entities\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isParticipant', [$user]);

        return parent::isParticipant($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getListParticipantsUserId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getListParticipantsUserId', []);

        return parent::getListParticipantsUserId();
    }

}
