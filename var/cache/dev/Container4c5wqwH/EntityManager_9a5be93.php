<?php

namespace Container4c5wqwH;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc0b0d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer00e1e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf9c4d = [
        
    ];

    public function getConnection()
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'getConnection', array(), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'getMetadataFactory', array(), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'getExpressionBuilder', array(), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'beginTransaction', array(), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'getCache', array(), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'transactional', array('func' => $func), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'commit', array(), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->commit();
    }

    public function rollback()
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'rollback', array(), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'getClassMetadata', array('className' => $className), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'createQuery', array('dql' => $dql), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'createNamedQuery', array('name' => $name), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'createQueryBuilder', array(), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'flush', array('entity' => $entity), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'clear', array('entityName' => $entityName), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->clear($entityName);
    }

    public function close()
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'close', array(), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->close();
    }

    public function persist($entity)
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'persist', array('entity' => $entity), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'remove', array('entity' => $entity), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'refresh', array('entity' => $entity), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'detach', array('entity' => $entity), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'merge', array('entity' => $entity), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'contains', array('entity' => $entity), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'getEventManager', array(), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'getConfiguration', array(), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'isOpen', array(), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'getUnitOfWork', array(), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'getProxyFactory', array(), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'initializeObject', array('obj' => $obj), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'getFilters', array(), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'isFiltersStateClean', array(), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'hasFilters', array(), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return $this->valueHolderc0b0d->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer00e1e = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderc0b0d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc0b0d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc0b0d->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, '__get', ['name' => $name], $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        if (isset(self::$publicPropertiesf9c4d[$name])) {
            return $this->valueHolderc0b0d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc0b0d;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc0b0d;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc0b0d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc0b0d;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, '__isset', array('name' => $name), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc0b0d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc0b0d;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, '__unset', array('name' => $name), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc0b0d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc0b0d;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, '__clone', array(), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        $this->valueHolderc0b0d = clone $this->valueHolderc0b0d;
    }

    public function __sleep()
    {
        $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, '__sleep', array(), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;

        return array('valueHolderc0b0d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer00e1e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer00e1e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer00e1e && ($this->initializer00e1e->__invoke($valueHolderc0b0d, $this, 'initializeProxy', array(), $this->initializer00e1e) || 1) && $this->valueHolderc0b0d = $valueHolderc0b0d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc0b0d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc0b0d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
