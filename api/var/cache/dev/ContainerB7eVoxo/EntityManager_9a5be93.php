<?php

namespace ContainerB7eVoxo;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder40592 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer39425 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb8a1e = [
        
    ];

    public function getConnection()
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'getConnection', array(), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'getMetadataFactory', array(), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'getExpressionBuilder', array(), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'beginTransaction', array(), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'getCache', array(), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->getCache();
    }

    public function transactional($func)
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'transactional', array('func' => $func), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'wrapInTransaction', array('func' => $func), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'commit', array(), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->commit();
    }

    public function rollback()
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'rollback', array(), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'getClassMetadata', array('className' => $className), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'createQuery', array('dql' => $dql), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'createNamedQuery', array('name' => $name), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'createQueryBuilder', array(), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'flush', array('entity' => $entity), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'clear', array('entityName' => $entityName), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->clear($entityName);
    }

    public function close()
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'close', array(), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->close();
    }

    public function persist($entity)
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'persist', array('entity' => $entity), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'remove', array('entity' => $entity), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'refresh', array('entity' => $entity), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'detach', array('entity' => $entity), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'merge', array('entity' => $entity), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'getRepository', array('entityName' => $entityName), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'contains', array('entity' => $entity), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'getEventManager', array(), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'getConfiguration', array(), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'isOpen', array(), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'getUnitOfWork', array(), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'getProxyFactory', array(), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'initializeObject', array('obj' => $obj), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'getFilters', array(), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'isFiltersStateClean', array(), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'hasFilters', array(), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return $this->valueHolder40592->hasFilters();
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

        $instance->initializer39425 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder40592) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder40592 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder40592->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, '__get', ['name' => $name], $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        if (isset(self::$publicPropertiesb8a1e[$name])) {
            return $this->valueHolder40592->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder40592;

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

        $targetObject = $this->valueHolder40592;
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
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder40592;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder40592;
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
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, '__isset', array('name' => $name), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder40592;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder40592;
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
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, '__unset', array('name' => $name), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder40592;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder40592;
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
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, '__clone', array(), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        $this->valueHolder40592 = clone $this->valueHolder40592;
    }

    public function __sleep()
    {
        $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, '__sleep', array(), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;

        return array('valueHolder40592');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer39425 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer39425;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer39425 && ($this->initializer39425->__invoke($valueHolder40592, $this, 'initializeProxy', array(), $this->initializer39425) || 1) && $this->valueHolder40592 = $valueHolder40592;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder40592;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder40592;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
