<?php

namespace ContainerF0eG7Yc;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera6990 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer69f2c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8ca69 = [
        
    ];

    public function getConnection()
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'getConnection', array(), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'getMetadataFactory', array(), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'getExpressionBuilder', array(), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'beginTransaction', array(), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'getCache', array(), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->getCache();
    }

    public function transactional($func)
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'transactional', array('func' => $func), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'wrapInTransaction', array('func' => $func), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'commit', array(), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->commit();
    }

    public function rollback()
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'rollback', array(), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'getClassMetadata', array('className' => $className), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'createQuery', array('dql' => $dql), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'createNamedQuery', array('name' => $name), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'createQueryBuilder', array(), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'flush', array('entity' => $entity), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'clear', array('entityName' => $entityName), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->clear($entityName);
    }

    public function close()
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'close', array(), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->close();
    }

    public function persist($entity)
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'persist', array('entity' => $entity), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'remove', array('entity' => $entity), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'refresh', array('entity' => $entity), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'detach', array('entity' => $entity), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'merge', array('entity' => $entity), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'getRepository', array('entityName' => $entityName), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'contains', array('entity' => $entity), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'getEventManager', array(), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'getConfiguration', array(), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'isOpen', array(), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'getUnitOfWork', array(), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'getProxyFactory', array(), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'initializeObject', array('obj' => $obj), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'getFilters', array(), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'isFiltersStateClean', array(), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'hasFilters', array(), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return $this->valueHoldera6990->hasFilters();
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

        $instance->initializer69f2c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera6990) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera6990 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera6990->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, '__get', ['name' => $name], $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        if (isset(self::$publicProperties8ca69[$name])) {
            return $this->valueHoldera6990->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera6990;

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

        $targetObject = $this->valueHoldera6990;
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
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera6990;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera6990;
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
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, '__isset', array('name' => $name), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera6990;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera6990;
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
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, '__unset', array('name' => $name), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera6990;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera6990;
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
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, '__clone', array(), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        $this->valueHoldera6990 = clone $this->valueHoldera6990;
    }

    public function __sleep()
    {
        $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, '__sleep', array(), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;

        return array('valueHoldera6990');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer69f2c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer69f2c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer69f2c && ($this->initializer69f2c->__invoke($valueHoldera6990, $this, 'initializeProxy', array(), $this->initializer69f2c) || 1) && $this->valueHoldera6990 = $valueHoldera6990;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera6990;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera6990;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
