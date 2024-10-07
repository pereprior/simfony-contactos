<?php

namespace ContainerBxWBeYt;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd47ce = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercfcb5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7e069 = [
        
    ];

    public function getConnection()
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'getConnection', array(), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'getMetadataFactory', array(), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'getExpressionBuilder', array(), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'beginTransaction', array(), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'getCache', array(), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->getCache();
    }

    public function transactional($func)
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'transactional', array('func' => $func), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'wrapInTransaction', array('func' => $func), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'commit', array(), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->commit();
    }

    public function rollback()
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'rollback', array(), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'getClassMetadata', array('className' => $className), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'createQuery', array('dql' => $dql), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'createNamedQuery', array('name' => $name), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'createQueryBuilder', array(), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'flush', array('entity' => $entity), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'clear', array('entityName' => $entityName), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->clear($entityName);
    }

    public function close()
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'close', array(), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->close();
    }

    public function persist($entity)
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'persist', array('entity' => $entity), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'remove', array('entity' => $entity), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'detach', array('entity' => $entity), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'merge', array('entity' => $entity), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'getRepository', array('entityName' => $entityName), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'contains', array('entity' => $entity), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'getEventManager', array(), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'getConfiguration', array(), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'isOpen', array(), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'getUnitOfWork', array(), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'getProxyFactory', array(), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'initializeObject', array('obj' => $obj), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'getFilters', array(), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'isFiltersStateClean', array(), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'hasFilters', array(), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return $this->valueHolderd47ce->hasFilters();
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

        $instance->initializercfcb5 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolderd47ce) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd47ce = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd47ce->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, '__get', ['name' => $name], $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        if (isset(self::$publicProperties7e069[$name])) {
            return $this->valueHolderd47ce->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd47ce;

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

        $targetObject = $this->valueHolderd47ce;
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
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd47ce;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd47ce;
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
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, '__isset', array('name' => $name), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd47ce;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd47ce;
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
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, '__unset', array('name' => $name), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd47ce;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd47ce;
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
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, '__clone', array(), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        $this->valueHolderd47ce = clone $this->valueHolderd47ce;
    }

    public function __sleep()
    {
        $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, '__sleep', array(), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;

        return array('valueHolderd47ce');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(?\Closure $initializer = null) : void
    {
        $this->initializercfcb5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercfcb5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercfcb5 && ($this->initializercfcb5->__invoke($valueHolderd47ce, $this, 'initializeProxy', array(), $this->initializercfcb5) || 1) && $this->valueHolderd47ce = $valueHolderd47ce;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd47ce;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd47ce;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
