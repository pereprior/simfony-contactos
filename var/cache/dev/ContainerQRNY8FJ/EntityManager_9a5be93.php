<?php

namespace ContainerQRNY8FJ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdd1c8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer52a9a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9988e = [
        
    ];

    public function getConnection()
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'getConnection', array(), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'getMetadataFactory', array(), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'getExpressionBuilder', array(), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'beginTransaction', array(), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'getCache', array(), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->getCache();
    }

    public function transactional($func)
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'transactional', array('func' => $func), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'wrapInTransaction', array('func' => $func), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'commit', array(), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->commit();
    }

    public function rollback()
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'rollback', array(), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'getClassMetadata', array('className' => $className), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'createQuery', array('dql' => $dql), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'createNamedQuery', array('name' => $name), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'createQueryBuilder', array(), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'flush', array('entity' => $entity), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'clear', array('entityName' => $entityName), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->clear($entityName);
    }

    public function close()
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'close', array(), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->close();
    }

    public function persist($entity)
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'persist', array('entity' => $entity), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'remove', array('entity' => $entity), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'refresh', array('entity' => $entity), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'detach', array('entity' => $entity), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'merge', array('entity' => $entity), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'getRepository', array('entityName' => $entityName), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'contains', array('entity' => $entity), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'getEventManager', array(), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'getConfiguration', array(), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'isOpen', array(), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'getUnitOfWork', array(), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'getProxyFactory', array(), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'initializeObject', array('obj' => $obj), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'getFilters', array(), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'isFiltersStateClean', array(), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'hasFilters', array(), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return $this->valueHolderdd1c8->hasFilters();
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

        $instance->initializer52a9a = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderdd1c8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdd1c8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdd1c8->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, '__get', ['name' => $name], $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        if (isset(self::$publicProperties9988e[$name])) {
            return $this->valueHolderdd1c8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd1c8;

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

        $targetObject = $this->valueHolderdd1c8;
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
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd1c8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdd1c8;
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
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, '__isset', array('name' => $name), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd1c8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdd1c8;
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
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, '__unset', array('name' => $name), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd1c8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdd1c8;
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
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, '__clone', array(), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        $this->valueHolderdd1c8 = clone $this->valueHolderdd1c8;
    }

    public function __sleep()
    {
        $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, '__sleep', array(), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;

        return array('valueHolderdd1c8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer52a9a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer52a9a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer52a9a && ($this->initializer52a9a->__invoke($valueHolderdd1c8, $this, 'initializeProxy', array(), $this->initializer52a9a) || 1) && $this->valueHolderdd1c8 = $valueHolderdd1c8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdd1c8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdd1c8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
