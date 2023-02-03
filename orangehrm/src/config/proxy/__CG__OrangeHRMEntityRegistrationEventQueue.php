<?php

namespace DoctrineProxies\__CG__\OrangeHRM\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class RegistrationEventQueue extends \OrangeHRM\Entity\RegistrationEventQueue implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'OrangeHRM\\Entity\\RegistrationEventQueue' . "\0" . 'id', '' . "\0" . 'OrangeHRM\\Entity\\RegistrationEventQueue' . "\0" . 'eventType', '' . "\0" . 'OrangeHRM\\Entity\\RegistrationEventQueue' . "\0" . 'published', '' . "\0" . 'OrangeHRM\\Entity\\RegistrationEventQueue' . "\0" . 'eventTime', '' . "\0" . 'OrangeHRM\\Entity\\RegistrationEventQueue' . "\0" . 'publishTime', '' . "\0" . 'OrangeHRM\\Entity\\RegistrationEventQueue' . "\0" . 'data'];
        }

        return ['__isInitialized__', '' . "\0" . 'OrangeHRM\\Entity\\RegistrationEventQueue' . "\0" . 'id', '' . "\0" . 'OrangeHRM\\Entity\\RegistrationEventQueue' . "\0" . 'eventType', '' . "\0" . 'OrangeHRM\\Entity\\RegistrationEventQueue' . "\0" . 'published', '' . "\0" . 'OrangeHRM\\Entity\\RegistrationEventQueue' . "\0" . 'eventTime', '' . "\0" . 'OrangeHRM\\Entity\\RegistrationEventQueue' . "\0" . 'publishTime', '' . "\0" . 'OrangeHRM\\Entity\\RegistrationEventQueue' . "\0" . 'data'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (RegistrationEventQueue $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): int
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
    public function setId(int $id): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventType(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventType', []);

        return parent::getEventType();
    }

    /**
     * {@inheritDoc}
     */
    public function setEventType(int $eventType): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEventType', [$eventType]);

        parent::setEventType($eventType);
    }

    /**
     * {@inheritDoc}
     */
    public function isPublished(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPublished', []);

        return parent::isPublished();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublished(bool $published): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublished', [$published]);

        parent::setPublished($published);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventTime(): ?\DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventTime', []);

        return parent::getEventTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setEventTime(?\DateTime $eventTime): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEventTime', [$eventTime]);

        parent::setEventTime($eventTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishTime(): ?\DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishTime', []);

        return parent::getPublishTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublishTime(?\DateTime $publishTime): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublishTime', [$publishTime]);

        parent::setPublishTime($publishTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getData(): ?array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getData', []);

        return parent::getData();
    }

    /**
     * {@inheritDoc}
     */
    public function setData(?array $data): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setData', [$data]);

        parent::setData($data);
    }

}