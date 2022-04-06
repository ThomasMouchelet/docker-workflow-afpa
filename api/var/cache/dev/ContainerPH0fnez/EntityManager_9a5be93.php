<?php

namespace ContainerPH0fnez;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb5a45 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbfe4a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9ce7a = [
        
    ];

    public function getConnection()
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'getConnection', array(), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'getMetadataFactory', array(), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'getExpressionBuilder', array(), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'beginTransaction', array(), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'getCache', array(), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'transactional', array('func' => $func), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'commit', array(), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->commit();
    }

    public function rollback()
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'rollback', array(), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'getClassMetadata', array('className' => $className), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'createQuery', array('dql' => $dql), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'createNamedQuery', array('name' => $name), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'createQueryBuilder', array(), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'flush', array('entity' => $entity), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'clear', array('entityName' => $entityName), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->clear($entityName);
    }

    public function close()
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'close', array(), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->close();
    }

    public function persist($entity)
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'persist', array('entity' => $entity), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'remove', array('entity' => $entity), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'refresh', array('entity' => $entity), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'detach', array('entity' => $entity), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'merge', array('entity' => $entity), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'contains', array('entity' => $entity), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'getEventManager', array(), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'getConfiguration', array(), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'isOpen', array(), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'getUnitOfWork', array(), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'getProxyFactory', array(), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'initializeObject', array('obj' => $obj), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'getFilters', array(), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'isFiltersStateClean', array(), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'hasFilters', array(), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return $this->valueHolderb5a45->hasFilters();
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

        $instance->initializerbfe4a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb5a45) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb5a45 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb5a45->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, '__get', ['name' => $name], $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        if (isset(self::$publicProperties9ce7a[$name])) {
            return $this->valueHolderb5a45->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb5a45;

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

        $targetObject = $this->valueHolderb5a45;
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
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb5a45;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb5a45;
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
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, '__isset', array('name' => $name), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb5a45;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb5a45;
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
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, '__unset', array('name' => $name), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb5a45;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb5a45;
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
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, '__clone', array(), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        $this->valueHolderb5a45 = clone $this->valueHolderb5a45;
    }

    public function __sleep()
    {
        $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, '__sleep', array(), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;

        return array('valueHolderb5a45');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbfe4a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbfe4a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbfe4a && ($this->initializerbfe4a->__invoke($valueHolderb5a45, $this, 'initializeProxy', array(), $this->initializerbfe4a) || 1) && $this->valueHolderb5a45 = $valueHolderb5a45;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb5a45;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb5a45;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
