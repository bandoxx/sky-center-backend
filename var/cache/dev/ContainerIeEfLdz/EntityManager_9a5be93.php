<?php

namespace ContainerIeEfLdz;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderca668 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf248e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2c309 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'getConnection', array(), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'getMetadataFactory', array(), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'getExpressionBuilder', array(), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'beginTransaction', array(), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'getCache', array(), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'transactional', array('func' => $func), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'commit', array(), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->commit();
    }

    public function rollback()
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'rollback', array(), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'getClassMetadata', array('className' => $className), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'createQuery', array('dql' => $dql), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'createNamedQuery', array('name' => $name), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'createQueryBuilder', array(), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'flush', array('entity' => $entity), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'clear', array('entityName' => $entityName), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->clear($entityName);
    }

    public function close()
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'close', array(), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->close();
    }

    public function persist($entity)
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'persist', array('entity' => $entity), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'remove', array('entity' => $entity), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'refresh', array('entity' => $entity), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'detach', array('entity' => $entity), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'merge', array('entity' => $entity), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'contains', array('entity' => $entity), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'getEventManager', array(), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'getConfiguration', array(), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'isOpen', array(), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'getUnitOfWork', array(), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'getProxyFactory', array(), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'initializeObject', array('obj' => $obj), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'getFilters', array(), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'isFiltersStateClean', array(), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'hasFilters', array(), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return $this->valueHolderca668->hasFilters();
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

        $instance->initializerf248e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderca668) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderca668 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderca668->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, '__get', ['name' => $name], $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        if (isset(self::$publicProperties2c309[$name])) {
            return $this->valueHolderca668->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderca668;

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

        $targetObject = $this->valueHolderca668;
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
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderca668;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderca668;
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
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, '__isset', array('name' => $name), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderca668;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderca668;
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
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, '__unset', array('name' => $name), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderca668;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderca668;
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
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, '__clone', array(), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        $this->valueHolderca668 = clone $this->valueHolderca668;
    }

    public function __sleep()
    {
        $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, '__sleep', array(), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;

        return array('valueHolderca668');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf248e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf248e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf248e && ($this->initializerf248e->__invoke($valueHolderca668, $this, 'initializeProxy', array(), $this->initializerf248e) || 1) && $this->valueHolderca668 = $valueHolderca668;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderca668;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderca668;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
