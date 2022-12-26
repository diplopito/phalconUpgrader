<?php

return [
    'Phalcon\Cache' => 'Rename | `Phalcon\Cache\Cache` | Multiple changes. Check: https://docs.phalcon.io/5.0/en/upgrade#cache',
    'Phalcon\Collection' => 'Change | `Phalcon\Support\Collection` | Some changes, check: https://docs.phalcon.io/5.0/en/upgrade#support',
    'Phalcon\Collection\Exception' => 'Rename | `Phalcon\Support\Collection\Exception`',
    'Phalcon\Collection\ReadOnly' => 'Rename | `Phalcon\Support\Collection\ReadOnlyCollection`',
    'Phalcon\Config' => 'Change | `Phalcon\Config\Config` | A new interface has been introduced (Phalcon\Config\ConfigInterface) to offer more flexibility when extending the config object.',
    'Phalcon\Container' => 'Change | `Phalcon\Container\Container` | The Container component has been removed from the framework. It is in our roadmap to develop a new container that will support auto wiring, as well as providers. Additionally, the container will be designed and implemented in such a way that could be used as a PSR-11 container (with the help of a Proxy class). Check: https://docs.phalcon.io/5.0/en/upgrade#container',
    'Phalcon\Crypt' => 'Change | `Phalcon\Encryption\Crypt\` | Check https://docs.phalcon.io/5.0/en/encryption-crypt and https://docs.phalcon.io/5.0/en/upgrade#encryption',
    'Phalcon\Crypt\Exception' => 'Rename | `Phalcon\Encryption\Crypt\Exception`',
    'Phalcon\Crypt\Mismatch' => 'Rename | `Phalcon\Encryption\Crypt\Mismatch`',
    'Phalcon\Debug' => 'Rename | `Phalcon\Support\Debug`',
    'Phalcon\Debug\Dump' => 'Rename | `Phalcon\Support\Debug\Dump`',
    'Phalcon\Debug\Exception' => 'Rename | `Phalcon\Support\Debug\Exception`',
    'Phalcon\Di' => 'Change | `Phalcon\Di\Di` | The tag service now returns an instance of Phalcon\Html\TagFactory The (new) helper service returns an instance of Phalcon\Support\HelperFactory',
    'Phalcon\Escaper' => 'Change | `Phalcon\Html\Escaper` | Renamed and added New methods. Check https://docs.phalcon.io/5.0/en/upgrade#phalconhtmlescaper',
    'Phalcon\Escaper\Exception' => 'Rename | `Phalcon\Html\Escaper\Exception` | Changed Phalcon\Html\Escaper\Exception to extend \Exception',
    'Phalcon\Exception' => 'Remove',
    'Phalcon\Filter' => 'Change | `Phalcon\Filter\Filter` | Renamed and Added __call() to allow using filter names as methods i.e. $filter->upper($input)',
    'Phalcon\Helper\Arr' => 'Rename | `Phalcon\Support\Helper\Arr`',
    'Phalcon\Helper\Base64' => 'Rename | `Phalcon\Support\Helper\Base64`',
    'Phalcon\Helper\Exception' => 'Rename | `Phalcon\Support\Helper\Exception`',
    'Phalcon\Helper\Fs' => 'Rename | `Phalcon\Support\Helper\Fs`',
    'Phalcon\Helper\Json' => 'Rename | `Phalcon\Support\Helper\Json`',
    'Phalcon\Helper\Number' => 'Rename | `Phalcon\Support\Helper\Number`',
    'Phalcon\Helper\Str' => 'Rename | `Phalcon\Support\Helper\Str`',
    'Phalcon\Http\Message\AbstractCommon' => 'Remove',
    'Phalcon\Http\Message\AbstractMessage' => 'Remove',
    'Phalcon\Http\Message\AbstractRequest' => 'Remove',
    'Phalcon\Http\Message\Exception\InvalidArgumentException' => 'Remove',
    'Phalcon\Http\Message\Request' => 'Remove',
    'Phalcon\Http\Message\RequestFactory' => 'Remove',
    'Phalcon\Http\Message\Response' => 'Remove',
    'Phalcon\Http\Message\ResponseFactory' => 'Remove',
    'Phalcon\Http\Message\ServerRequest' => 'Remove',
    'Phalcon\Http\Message\ServerRequestFactory' => 'Remove',
    'Phalcon\Http\Message\Stream' => 'Remove',
    'Phalcon\Http\Message\StreamFactory' => 'Remove',
    'Phalcon\Http\Message\Stream\Input' => 'Remove',
    'Phalcon\Http\Message\Stream\Memory' => 'Remove',
    'Phalcon\Http\Message\Stream\Temp' => 'Remove',
    'Phalcon\Http\Message\UploadedFile' => 'Remove',
    'Phalcon\Http\Message\UploadedFileFactory' => 'Remove',
    'Phalcon\Http\Message\Uri' => 'Remove',
    'Phalcon\Http\Message\UriFactory' => 'Remove',
    'Phalcon\Http\Server\AbstractMiddleware' => 'Remove',
    'Phalcon\Http\Server\AbstractRequestHandler' => 'Remove',
    'Phalcon\Kernel' => 'Remove',
    'Phalcon\Loader' => 'Change | `Phalcon\Autoload\Loader` | Multiple methods renamed. Check: https://docs.phalcon.io/5.0/en/upgrade#autoload',
    'Phalcon\Loader\Exception' => 'Rename | `Phalcon\Autoload\Loader\Exception`',
    'Phalcon\Logger' => 'Rename | `Phalcon\Logger\Logger` | The component has been refactored and the dependency to PSR has been removed. The interface method calls are much stricter now. Check: https://docs.phalcon.io/5.0/en/logger',
    'Phalcon\Registry' => 'Rename | `Phalcon\Support\Registry`',
    'Phalcon\Security' => 'Rename | `Phalcon\Encryption\Security`',
    'Phalcon\Security\Exception' => 'Rename | `Phalcon\Encryption\Security\Exception`',
    'Phalcon\Security\JWT\Builder' => 'Rename | `Phalcon\Encryption\Security\JWT\Builder`',
    'Phalcon\Security\JWT\Exceptions\UnsupportedAlgorithmException' => 'Rename | `Phalcon\Encryption\Security\JWT\Exceptions\UnsupportedAlgorithmException`',
    'Phalcon\Security\JWT\Exceptions\ValidatorException' => 'Rename | `Phalcon\Encryption\Security\JWT\Exceptions\ValidatorException`',
    'Phalcon\Security\JWT\Signer\AbstractSigner' => 'Rename | `Phalcon\Encryption\Security\JWT\Signer\AbstractSigner`',
    'Phalcon\Security\JWT\Signer\Hmac' => 'Rename | `Phalcon\Encryption\Security\JWT\Signer\Hmac`',
    'Phalcon\Security\JWT\Signer\None' => 'Rename | `Phalcon\Encryption\Security\JWT\Signer\None`',
    'Phalcon\Security\JWT\Token\AbstractItem' => 'Rename | `Phalcon\Encryption\Security\JWT\Token\AbstractItem`',
    'Phalcon\Security\JWT\Token\Enum' => 'Rename | `Phalcon\Encryption\Security\JWT\Token\Enum`',
    'Phalcon\Security\JWT\Token\Item' => 'Rename | `Phalcon\Encryption\Security\JWT\Token\Item`',
    'Phalcon\Security\JWT\Token\Parser' => 'Rename | `Phalcon\Encryption\Security\JWT\Token\Parser`',
    'Phalcon\Security\JWT\Token\Signature' => 'Rename | `Phalcon\Encryption\Security\JWT\Token\Signature`',
    'Phalcon\Security\JWT\Token\Token' => 'Rename | `Phalcon\Encryption\Security\JWT\Token\Token`',
    'Phalcon\Security\JWT\Validator' => 'Rename | `Phalcon\Encryption\Security\JWT\Validator`',
    'Phalcon\Security\Random' => 'Rename | `Phalcon\Encryption\Security\Random`',
    'Phalcon\Text' => 'Rename | `Phalcon\Support\HelperFactory` | Check: https://docs.phalcon.io/5.0/en/upgrade#support',
    'Phalcon\Url' => 'Rename | `Phalcon\Mvc\Url`',
    'Phalcon\Url\Exception' => 'Rename | `Phalcon\Mvc\Url\Exception`',
    'Phalcon\Validation' => 'Change | `Phalcon\Filter\Validation` | Renamed and Added getValueByEntity() and getValueByData() for more options to retrieve data. Added the ability to define allowEmpty to any validator (in the parameters)',
    'Phalcon\Validation\AbstractCombinedFieldsValidator' => 'Rename | `Phalcon\Filter\Validation\AbstractCombinedFieldsValidator`',
    'Phalcon\Validation\AbstractValidator' => 'Change | `Phalcon\Filter\Validation\AbstractValidator` | Renamed and Added the ability to define allowEmpty to any validator (in the parameters)',
    'Phalcon\Validation\AbstractValidatorComposite' => 'Rename | `Phalcon\Filter\Validation\AbstractValidatorComposite`',
    'Phalcon\Validation\Exception' => 'Rename | `Phalcon\Filter\Validation\Exception`',
    'Phalcon\Validation\ValidatorFactory' => 'Change | `Phalcon\Filter\Validation\ValidatorFactory` | Changed getAdapters() to getServices()',
    'Phalcon\Validation\Validator\Alnum' => 'Rename | `Phalcon\Filter\Validation\Validator\Alnum`',
    'Phalcon\Validation\Validator\Alpha' => 'Rename | `Phalcon\Filter\Validation\Validator\Alpha`',
    'Phalcon\Validation\Validator\Between' => 'Rename | `Phalcon\Filter\Validation\Validator\Between`',
    'Phalcon\Validation\Validator\Callback' => 'Rename | `Phalcon\Filter\Validation\Validator\Callback`',
    'Phalcon\Validation\Validator\Confirmation' => 'Rename | `Phalcon\Filter\Validation\Validator\Confirmation`',
    'Phalcon\Validation\Validator\CreditCard' => 'Rename | `Phalcon\Filter\Validation\Validator\CreditCard`',
    'Phalcon\Validation\Validator\Date' => 'Rename | `Phalcon\Filter\Validation\Validator\Date`',
    'Phalcon\Validation\Validator\Digit' => 'Rename | `Phalcon\Filter\Validation\Validator\Digit`',
    'Phalcon\Validation\Validator\Email' => 'Rename | `Phalcon\Filter\Validation\Validator\Email`',
    'Phalcon\Validation\Validator\Exception' => 'Change | `Phalcon\Filter\Validation\Validator\Exception` | Renamed and Changed Phalcon\Filter\Validation\Validator\Exception to extend \Exception',
    'Phalcon\Validation\Validator\ExclusionIn' => 'Rename | `Phalcon\Filter\Validation\Validator\ExclusionIn`',
    'Phalcon\Validation\Validator\File' => 'Rename | `Phalcon\Filter\Validation\Validator\File`',
    'Phalcon\Validation\Validator\File\AbstractFile' => 'Rename | `Phalcon\Filter\Validation\Validator\File\AbstractFile`',
    'Phalcon\Validation\Validator\File\MimeType' => 'Rename | `Phalcon\Filter\Validation\Validator\File\MimeType`',
    'Phalcon\Validation\Validator\File\Resolution\Equal' => 'Rename | `Phalcon\Filter\Validation\Validator\File\Resolution\Equal`',
    'Phalcon\Validation\Validator\File\Resolution\Max' => 'Rename | `Phalcon\Filter\Validation\Validator\File\Resolution\Max`',
    'Phalcon\Validation\Validator\File\Resolution\Min' => 'Rename | `Phalcon\Filter\Validation\Validator\File\Resolution\Min`',
    'Phalcon\Validation\Validator\File\Size\Equal' => 'Rename | `Phalcon\Filter\Validation\Validator\File\Size\Equal`',
    'Phalcon\Validation\Validator\File\Size\Max' => 'Rename | `Phalcon\Filter\Validation\Validator\File\Size\Max`',
    'Phalcon\Validation\Validator\File\Size\Min' => 'Rename | `Phalcon\Filter\Validation\Validator\File\Size\Min`',
    'Phalcon\Validation\Validator\Identical' => 'Rename | `Phalcon\Filter\Validation\Validator\Identical`',
    'Phalcon\Validation\Validator\InclusionIn' => 'Rename | `Phalcon\Filter\Validation\Validator\InclusionIn`',
    'Phalcon\Validation\Validator\Ip' => 'Rename | `Phalcon\Filter\Validation\Validator\Ip`',
    'Phalcon\Validation\Validator\Numericality' => 'Rename | `Phalcon\Filter\Validation\Validator\Numericality`',
    'Phalcon\Validation\Validator\PresenceOf' => 'Rename | `Phalcon\Filter\Validation\Validator\PresenceOf`',
    'Phalcon\Validation\Validator\Regex' => 'Rename | `Phalcon\Filter\Validation\Validator\Regex`',
    'Phalcon\Validation\Validator\StringLength' => 'Rename | `Phalcon\Filter\Validation\Validator\StringLength`',
    'Phalcon\Validation\Validator\StringLength\Max' => 'Rename | `Phalcon\Filter\Validation\Validator\StringLength\Max`',
    'Phalcon\Validation\Validator\StringLength\Min' => 'Rename | `Phalcon\Filter\Validation\Validator\StringLength\Min`',
    'Phalcon\Validation\Validator\Uniqueness' => 'Rename | `Phalcon\Filter\Validation\Validator\Uniqueness`',
    'Phalcon\Validation\Validator\Url' => 'Rename | `Phalcon\Filter\Validation\Validator\Url`',
    'Phalcon\Version' => 'Rename | `Phalcon\Support\Version`',
    'Phalcon\Acl\ComponentAware' => 'Rename | `Phalcon\Acl\ComponentAwareInterface`',
    'Phalcon\Acl\RoleAware' => 'Rename | `Phalcon\Acl\RoleAwareInterface`',
    'Phalcon\Application\AbstractApplication' => 'Change: The getEventsManager() now returns a Phalcon\Events\ManagerInterface or null',
    'Phalcon\Assets\Asset' => 'Change: The Assets component has had changes to the interface as well as some methods were renamed. The functionality remains the same as in previous versions. Check: https://docs.phalcon.io/5.0/en/upgrade#assets',
    'Phalcon\Assets\Collection' => 'Change: The class now uses ArrayIterator instead of Iterator; Renamed getLocal() to isLocal(); Renamed setLocal() to setIsLocal(); Renamed getTargetLocal() to getTargetIsLocal(); Renamed setTargetLocal() to setTargetIsLocal(); Removed getPosition(), current(), key(), next(), rewind(), valid(); ',
    'Phalcon\Assets\Inline' => 'Change: getAssetKey() now uses sha256 to compute the key',
    'Phalcon\Assets\Manager' => 'Change: Multiple changes. Check https://docs.phalcon.io/5.0/en/upgrade#phalconassetsmanager ',
    'Phalcon\Db\Adapter\Pdo\AbstractPdo' => 'Change: Return types changed',
    'Phalcon\Db\Adapter\Pdo\Mysql' => 'Change: Changed bind type for Column::TYPE_BIGINT to be Column::BIND_PARAM_STR Added bind type for Column::TYPE_BINARY to cater for VARBINARY and BINARY fields Added support for comments ',
    'Phalcon\Db\Adapter\Pdo\Postgresql' => 'Change: Changed bind type for Column::TYPE_BIGINT to be Column::BIND_PARAM_STR Added support for comments ',
    'Phalcon\Db\Adapter\AbstractAdapter' => 'Change: Changed default parameters types, check: https://docs.phalcon.io/5.0/en/upgrade#phalcondbadapterabstractadapter',
    'Phalcon\Db\Adapter\AdapterInterfac' => 'Change: Changed default parameters types and return types. Check: https://docs.phalcon.io/5.0/en/upgrade#phalcondbadapteradapterinterface',
    'Phalcon\Db\Adapter\PdoFactory' => 'Change: Added getExceptionClass() to return the exception class for the factory Renamed getAdapters() to getServices() ',
    'Phalcon\Db\Dialect' => 'Change: Added support for comments Added support for SMALLINT for Postgresql Changed getColumnList(array $columnList, string $escapeChar = null, $bindCounts = null): string to getColumnList(array $columnList, string $escapeChar = null, array $bindCounts = []): string Changed getSqlColumn($column, string $escapeChar = null, $bindCounts = null): string to getSqlColumn($column, string $escapeChar = null, array $bindCounts = []): string Changed getSqlExpression(array $expression, string $escapeChar = null, $bindCounts = null): string; to getSqlExpression(array $expression, string $escapeChar = null, array $bindCounts = []): string ',
    'Phalcon\Db\Result\Pdo' => 'Rename | `Phalcon\Db\Result\ResultPdo`',
    'Phalcon\Db\Column' => 'Change: Added support for comments Added TYPE_BINARY constant Added TYPE_VARBINARY constant Added getComment(): string | null ',
    'Phalcon\Db\DialectInterface' => 'Change: Changed getSqlExpression(array $expression, string $escapeChar = null, $bindCounts = null): string; to getSqlExpression(array $expression, string $escapeChar = null, array $bindCounts = []): string',
    'Phalcon\Db\Exception' => 'Change: Changed Phalcon\Db\Exception to extend \Exception',
    'Phalcon\Dispatcher\AbstractDispatcher' => 'Change: Changed getEventsManager(): ManagerInterface to getEventsManager(): ManagerInterface | null',
    'Phalcon\Dispatcher\Exception' => 'Change: Changed Phalcon\Dispatcher\Exception to extend \Exception',
    'Phalcon\Events\Event' => 'Change: Changed public function __construct(string $type, object $source, $data = null, bool $cancelable = true) to __construct(string $type, $source = null, $data = null, bool $cancelable = true) ($source is now nullable)',
    'Phalcon\Events\Exception' => 'Change: Changed Phalcon\Events\Exception to extend \Exception',
    'Phalcon\Events\Manager' => 'Change: Added isValidHandler(): bool to return if the internal handler is valid or not',
    'Phalcon\Factory\AbstractFactory' => 'Change: Changed init() to read from getServices() Added abstract Phalcon\Factory\AbstractConfigFactory to check configuration elements',
    'Phalcon\Factory\Exception' => 'Change: Changed Phalcon\Factory\Exception to extend \Exception',
    'Phalcon\Filter\Factory' => 'Change: Changed getAdapters() to getServices()',
    'Phalcon\Flash\AbstractFlash' => 'Change: Added the ability to define CSS icon classes (setCssIconClasses()) Changed getTemplate(string $cssClasses): string to getTemplate(string $cssClasses, string $cssIconClasses): string ',
    'Phalcon\Flash\Exception' => 'Change: Changed Phalcon\Flash\Exception to extend \Exception',
    'Phalcon\Flash\Session' => 'Change: Added SESSION_KEY constant Changed has($type = null): bool to has(string $type = null): bool Changed message(string $type, string $message): string | null to message(string $type, $message): string | null ',
    'Phalcon\Forms\Element' => 'Change: Phalcon\Forms\Element\* classes now use the new Phalcon\Html\TagFactory to generate HTML code. As a result, the functionality has changed slightly. The main difference is that a Phalcon\Html\TagFactory has to be set in the form object, so that elements can be rendered. If the Phalcon\Html\TagFactory is not set, then the component will search the Di container (Phalcon\Di\DiInterface) for a service with the name tag. If you are using Phalcon\Di\FactoryDefault as your container, then the tag service is already defined for you.',
    'Phalcon\Forms\Element\AbstractElement' => 'Change: Added getTagFactory() to return the Phalcon\Html\TagFactory object used internally, as well as setTagFactory(TagFactory $tagFactory): AbstractElement to set it.',
    'Phalcon\Forms\Element\Check' => 'Change: The class now use the Phalcon\Html\Helper\Input\Checkbox. The class uses checked and unchecked parameters to set the state of each control. If the checked parameter is identical to the $value then the control will be checked. If the unchecked parameter is present, it will be set if the $value is not the same as the checked parameter. Check: https://docs.phalcon.io/5.0/en/html-tagfactory',
    'Phalcon\Forms\Element\Radio' => 'Change: The class now use the Phalcon\Html\Helper\Input\Radio. The class uses checked and unchecked parameters to set the state of each control. If the checked parameter is identical to the $value then the control will be checked. If the unchecked parameter is present, it will be set if the $value is not the same as the checked parameter. Check: https://docs.phalcon.io/5.0/en/html-tagfactory',
    'Phalcon\Html\Escaper' => 'Change: Multiple changes, check: https://docs.phalcon.io/5.0/en/upgrade#phalconhtmlescaper',
    'Phalcon\Html\Escaper\EscaperInterface' => 'Change: Multiple changes. Check: https://docs.phalcon.io/5.0/en/upgrade#phalconhtmlescaperescaperinterface',
    'Phalcon\Html\Escaper\Exception' => 'Change: This class has been moved to this namespace Phalcon\Escaper. Changed Phalcon\Html\Escaper\Exception to extend \Exception ',
    'Phalcon\Escaper\EscaperInterface' => 'Change | `Phalcon\Html\Escaper\EscaperInterface` | Renamed and multiple methods added and removed. Check: https://docs.phalcon.io/5.0/en/upgrade#phalconhtmlescaperescaperinterface',
    'Phalcon\Html\Link' => 'Change: Refactor and new dependencies added. Check: https://docs.phalcon.io/5.0/en/html-link',
    'Phalcon\Html\Exception' => 'Change: Changed Phalcon\Html\Exception to extend \Exception',
    'Phalcon\Http\Cookie' => 'Change: Changed __construct() and made $httpOnly = false',
    'Phalcon\Http\Cookie\Exception' => 'Change: Changed Phalcon\Http\Cookie\Exception to extend \Exception',
    'Phalcon\Http\Request' => 'Change: Added getPreferredIsoLocaleVariant(): string to return the preferred ISO locale variant.',
    'Phalcon\Http\Request\Exception' => 'Change: Changed Phalcon\Http\Request\Exception to extend \Exception',
    'Phalcon\Http\Response\Cookie' => 'Change: Added isSent(): bool to return if the cookie has been sent or not',
    'Phalcon\Http\Response\Headers' => 'Change: Added isSent(): bool to return if the headers have been sent or not',
    'Phalcon\Http\Response\Exception' => 'Change: Changed Phalcon\Http\Response\Exception to extend \Exception',
    'Phalcon\Logger\Adapter\Stream' => 'Change: Failing to write to the file will throw a LogicException instead of UnexpectedValueException',
    'Phalcon\Logger\Formatter\FormatterInterface' => 'Change: Changed process(Item $item): string (previously it returned array|string)',
    'Phalcon\Logger\Formatter\Json' => 'Change: Changed format() to encode JSON with the following options by default: JSON_HEX_TAG, JSON_HEX_APOS, JSON_HEX_AMP, JSON_HEX_QUOT, JSON_UNESCAPED_SLASHES, JSON_THROW_ON_ERROR,',
    'Phalcon\Logger\AdapterFactory' => 'Change: The constructor now requires a Phalcon\Storage\SerializerFactory to be passed as the first parameter The getAdapters() protected method has been renamed to getServices() A new protected method getExceptionClass() was introduced to return the exception class to throw from this factory when necessary ',
    'Phalcon\Logger\Exception' => 'Change: Changed Phalcon\Logger\Exception to extend \Exception',
    'Phalcon\Logger\Item' => 'Change: Changed __construct(string $message, string $levelName, int $level, DateTimeImmutable $dateTime, array $context = []) (dateTtime accepts a DateTimeImmutable object)',
    'Phalcon\Messages\Exception' => 'Change: Changed Phalcon\Messages\Exception to extend \Exception',
    'Phalcon\Mvc\Micro\Collection' => 'Change: Changed the methods to accept a callable as the $handler instead of mixed delete(string $routePattern, callable $handler, string $name = null) get(string $routePattern, callable $handler, string $name = null) head(string $routePattern, callable $handler, string $name = null) map(string $routePattern, callable $handler, string $name = null) mapVia(string $routePattern, callable $handler, mixed $method, string $name = null) options(string $routePattern, callable $handler, string $name = null) patch(string $routePattern, callable $handler, string $name = null) post(string $routePattern, callable $handler, string $name = null) put(string $routePattern, callable $handler, string $name = null) ',
    'Phalcon\Mvc\Micro\Exception' => 'Change: Changed Phalcon\Mvc\Micro\Exception to extend \Exception',
    'Phalcon\Mvc\Model\MetaData\Strategy\Annotations' => 'Change: Phalcon\Mvc\Model\MetaData\Strategy\Annotations::getMetaData() will now return a string instead of an integer when encountering BIGINT fields',
    'Phalcon\Mvc\Model\MetaData\Stream' => 'Change: Changed the constructor to accept an array __construct(array $options = [])',
    'Phalcon\Mvc\Model\Query\BuilderInterface' => 'Change: Corrected having() signature having(string $conditions, array $bindParams = [], array $bindTypes = []) Changed orderBy() to accept an array or a string orderBy(array | string $orderBy) ',
    'Phalcon\Mvc\Model\Resultset\Complex' => 'Change: Changed current() to return mixed Added __serialize() and __unserialize() methods ',
    'Phalcon\Mvc\Model\Resultset\Simple' => 'Change: Changed the constructor to accept mixed for $cache : __construct(mixed $columnMap, mixed $model, mixed $result, mixed $cache = null, bool $keepSnapshots = false) Added __serialize() and __unserialize() methods ',
    'Phalcon\Mvc\Model\CriteriaInterface' => 'Change: Corrected where() signature where(string $conditions, mixed $bindParams = null, mixed $bindTypes = null)',
    'Phalcon\Mvc\Model\Exception' => 'Change: Changed Phalcon\Mvc\Model\Exception to extend \Exception',
    'Phalcon\Mvc\Model\ManagerInterface' => 'Change: Many changes, check: https://docs.phalcon.io/5.0/en/upgrade#phalconmvcmodelmanagerinterface',
    'Phalcon\Mvc\Model\Manager' => 'Change: many changes, check: https://docs.phalcon.io/5.0/en/upgrade#phalconmvcmodelmanager',
    'Phalcon\Mvc\Model\ResultsetInterface' => 'Change: getCache() now returns null or an object (mixed)',
    'Phalcon\Mvc\Model\Resultset' => 'Change: __construct() accepts an object in the $cache parameter. The object has implement Phalcon\Cache\CacheInterface or Psr\SimpleCache\CacheInterface getCache() now returns null or an object (mixed) ',
    'Phalcon\Mvc\Router' => 'Change: Changed add(), addConnect(), addDelete(), addGet(), addHead(), addOptions(), addPatch(), addPost(), addPurge(), addPut(), addTrace(), attach() to accept int as $position Changed getEventsManager() to return ManagerInterface or null ',
    'Phalcon\Mvc\RouterInterface' => 'Change: Changed add(), addConnect(), addDelete(), addGet(), addHead(), addOptions(), addPatch(), addPost(), addPurge(), addPut(), addTrace(), attach() to accept int as $position',
    'Phalcon\Mvc\Router\Exception' => 'Change: Changed Phalcon\Mvc\Router\Exception to extend \Exception',
    'Phalcon\Mvc\Router\RouteInterface' => 'Change: getHostname() now returns string or null getName() now returns string or null ',
    'Phalcon\Mvc\Router\Route' => 'Change: beforeMatch(callable $callback): RouteInterface now accepts a callable getHostname() now returns string or null getName() now returns string or null ',
    'Phalcon\Mvc\ModelInterface' => 'Change: Changed average(array $parameters = []) to accept an array Changed cloneResultset() to default keepSnapshots = false Changed findFirst(mixed $parameters = null): mixed | null to return null instead of false Changed getSchema(): string | null to return string or null ',
    'Phalcon\Mvc\View' => 'Change: Marked as @deprecated exists() Added has() (replacing the exists() method) ',
    'Phalcon\Mvc\View\Exception' => 'Change: Changed Phalcon\Mvc\View\Exception to extend \Exception',
    'Phalcon\Mvc\View\Engine\Volt\Compiler' => 'Change: Removed compileCache()',
    'Phalcon\Paginator\Exception' => 'Change: Changed Phalcon\Paginator\Exception to extend \Exception',
    'Phalcon\Paginator\PaginatorFactory' => 'Change: The getAdapters() protected method has been renamed to getServices() A new protected method getExceptionClass() was introduced to return the exception class to throw from this factory when necessary ',
    'Phalcon\Session\Adapter\AbstractAdapter' => 'Change: Changed gc(int $maxlifetime): int | bool to accept only int for the parameter',
    'Phalcon\Session\Adapter\Noop' => 'Change: Changed gc(int $maxlifetime): int | bool to accept only int for the parameter',
    'Phalcon\Session\Adapter\Stream' => 'Change: Changed __construct() to throw an exception if the save path is empty',
    'Phalcon\Session\BagInterface' => 'Change: Added interface for Phalcon\Session\Bag',
    'Phalcon\Session\Exception' => 'Change: Changed Phalcon\Session\Exception to extend \Exception',
    'Phalcon\Storage\Adapter\AdapterInterface' => 'Change: Added setForever(string $key, mixed $value): to set an item in the store forever',
    'Phalcon\Storage\Adapter\Apcu' => 'Change: Added setForever(string $key, mixed $value): to set an item in the store forever',
    'Phalcon\Storage\Adapter\Libmemcached' => 'Change: Added setForever(string $key, mixed $value): to set an item in the store forever',
    'Phalcon\Storage\Adapter\Memory' => 'Change: Added setForever(string $key, mixed $value): to set an item in the store forever',
    'Phalcon\Storage\Adapter\Redis' => 'Change: Added setForever(string $key, mixed $value): to set an item in the store forever Added timeout, connectTimeout, retryInterval and readTimeout for constructor options ',
    'Phalcon\Storage\Adapter\Stream' => 'Change: Added setForever(string $key, mixed $value): to set an item in the store forever',
    'Phalcon\Storage\Serializer\AbstractSerializer' => 'Change: Added __serialize() and __unserialize() methods Added isSuccess(): bool to return when the data was serialized/unserialized successfully ',
    'Phalcon\Storage\Serializer\Base64' => 'Change: Changed unserialize to set the data to an empty string in case of a failure',
    'Phalcon\Storage\Serializer\Igbinary' => 'Change: Changed unserialize to set the data to an empty string in case of a failure',
    'Phalcon\Storage\Serializer\Msgpack' => 'Change: Changed unserialize to set the data to an empty string in case of a failure',
    'Phalcon\Storage\Serializer\Php' => 'Change: Changed unserialize to set the data to an empty string in case of a failure',
    'Phalcon\Storage\Serializer' => 'Change: Added stub serializers for Memcached and Redis when in need to use the built-in serializers for those storages: Phalcon\Storage\Serializer\MemcachedIgbinary Phalcon\Storage\Serializer\MemcachedJson Phalcon\Storage\Serializer\MemcachedPhp Phalcon\Storage\Serializer\RedisIgbinary Phalcon\Storage\Serializer\RedisJson Phalcon\Storage\Serializer\RedisMsgpack Phalcon\Storage\Serializer\RedisNone Phalcon\Storage\Serializer\RedisPhp ',
    'Phalcon\Storage\Exception' => 'Change: Changed Phalcon\Storage\Exception to extend \Exception',
    'Phalcon\Storage\AdapterFactory' => 'Change: The getAdapters() protected method has been renamed to getServices() A new protected method getExceptionClass() was introduced to return the exception class to throw from this factory when necessary ',
    'Phalcon\Storage\SerializerFactory' => 'Change: The getAdapters() protected method has been renamed to getServices() A new protected method getExceptionClass() was introduced to return the exception class to throw from this factory when necessary ',
    'Phalcon\Tag' => 'Change: Note, this component will be removed in future versions of the framework. Added preload(mixed $parameters): string to parse preloading link headers',
    'Phalcon\Translate\Adapter\AbstractAdapter' => 'Change: Changed __construct(InterpolatorFactory $interpolator, array $options = [] to default to an empty array for $options',
    'Phalcon\Translate\Adapter\Csv' => 'Change: Marked as @deprecated exists() Added has() ',
    'Phalcon\Translate\Adapter\Gettext' => 'Change: Marked as @deprecated exists() Added has() ',
    'Phalcon\Translate\Adapter\NativeArray' => 'Change: Marked as @deprecated exists() Added has() Added toArray() to return the translation array back ',
    'Phalcon\Translate\Exception' => 'Change: Changed Phalcon\Translate\Exception to extend \Exception',
    'Phalcon\Translate\InterpolatorFactory' => 'Change: The getAdapters() protected method has been renamed to getServices() A new protected method getExceptionClass() was introduced to return the exception class to throw from this factory when necessary ',
    'Phalcon\Translate\TranslateFactory' => 'Change: The getAdapters() protected method has been renamed to getServices() A new protected method getExceptionClass() was introduced to return the exception class to throw from this factory when necessary ',
];