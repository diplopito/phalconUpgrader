<?php

class Phalcon3to4
{
    const CLASSES_V3 = [
            "Phalcon\Acl" => " Removed ",
            "Phalcon\Acl\Adapter" => " Renamed to Phalcon\Acl\Adapter\AbstractAdapter",
            "Phalcon\Acl\Resource" => " Renamed to Phalcon\Acl\Component",
            "Phalcon\Annotations\Adapter" => " Renamed to Phalcon\Annotations\Adapter\AbstractAdapter",
            "Phalcon\Annotations\Adapter\Apc" => " Removed ",
            "Phalcon\Annotations\Adapter\Files" => " Renamed to Phalcon\Annotations\Adapter\Stream",
            "Phalcon\Annotations\Adapter\Xcache" => " Removed ",
            "Phalcon\Annotations\Factory" => " Renamed to Phalcon\Annotations\AnnotationsFactory",
            "Phalcon\Application" => " Renamed to Phalcon\Application\AbstractApplication",
            "Phalcon\Assets\Resource" => " Renamed to Phalcon\Assets\Asset",
            "Phalcon\Assets\Resource\Css" => " Renamed to Phalcon\Assets\Asset\Css",
            "Phalcon\Assets\Resource\Js" => " Renamed to Phalcon\Assets\Asset\Js",
            "Phalcon\Cache\Backend" => " Renamed to Phalcon\Cache",
            "Phalcon\Cache\Backend\Apc" => " Removed ",
            "Phalcon\Cache\Backend\Apcu" => " Renamed to Phalcon\Cache\Adapter\Apcu",
            "Phalcon\Cache\Backend\Factory" => " Renamed to Phalcon\Cache\AdapterFactory",
            "Phalcon\Cache\Backend\File" => " Renamed to Phalcon\Cache\Adapter\Stream",
            "Phalcon\Cache\Backend\Libmemcached" => " Renamed to Phalcon\Cache\Adapter\Libmemcached",
            "Phalcon\Cache\Backend\Memcache" => " Removed ",
            "Phalcon\Cache\Backend\Memory" => " Renamed to Phalcon\Cache\Adapter\Memory",
            "Phalcon\Cache\Backend\Mongo" => " Removed ",
            "Phalcon\Cache\Backend\Redis" => " Renamed to Phalcon\Cache\Adapter\Redis",
            "Phalcon\Cache\Backend\Xcache" => " Removed ",
            "Phalcon\Cache\Exception" => " Renamed to Phalcon\Cache\Exception\Exception",
            "Phalcon\Cache\Frontend\Base64" => " Removed ",
            "Phalcon\Cache\Frontend\Data" => " Removed ",
            "Phalcon\Cache\Frontend\Factory" => " Removed ",
            "Phalcon\Cache\Frontend\Igbinary" => " Removed ",
            "Phalcon\Cache\Frontend\Json" => " Removed ",
            "Phalcon\Cache\Frontend\Msgpack" => " Removed ",
            "Phalcon\Cache\Frontend\None" => " Removed ",
            "Phalcon\Cache\Frontend\Output" => " Removed ",
            "Phalcon\Cache\Multiple" => " Removed ",
            "Phalcon\Config\Factory" => " Renamed to Phalcon\Config\ConfigFactory",
            "Phalcon\Db" => " Renamed to Phalcon\Db\AbstractDb",
            "Phalcon\Db\Adapter" => " Renamed to Phalcon\Db\Adapter\AbstractAdapter",
            "Phalcon\Db\Adapter\Pdo" => " Renamed to Phalcon\Db\Adapter\PdoFactory",
            "Phalcon\Db\Adapter\Pdo\Factory" => " Renamed to Phalcon\Db\Adapter\Pdo\AbstractPdo",
            "Phalcon\Dispatcher" => " Renamed to Phalcon\Dispatcher\AbstractDispatcher",
            "Phalcon\Factory" => " Renamed to Phalcon\Factory\AbstractFactory",
            "Phalcon\Flash" => " Renamed to Phalcon\Flash\AbstractFlash",
            "Phalcon\Forms\Element" => " Renamed to Phalcon\Forms\Element\AbstractElement",
            "Phalcon\Image" => " Removed ",
            "Phalcon\Image\Adapter" => " Renamed to Phalcon\Image\Adapter\AbstractAdapter",
            "Phalcon\Image\Factory" => " Renamed to Phalcon\Image\ImageFactory",
            "Phalcon\Logger\Adapter" => " Renamed to Phalcon\Logger\Adapter\AbstractAdapter",
            "Phalcon\Logger\Adapter\Blackhole" => " Removed ",
            "Phalcon\Logger\Adapter\File" => " Renamed to Phalcon\Logger\Adapter\Stream",
            "Phalcon\Logger\Adapter\Firephp" => " Removed ",
            "Phalcon\Logger\Factory" => " Renamed to Phalcon\Logger\LoggerFactory",
            "Phalcon\Logger\Formatter" => " Renamed to Phalcon\Logger\Formatter\AbstractFormatter",
            "Phalcon\Logger\Formatter\Firephp" => " Removed ",
            "Phalcon\Logger\Multiple" => " Removed ",
            "Phalcon\Mvc\Collection" => " Renamed to Phalcon\Collection",
            "Phalcon\Mvc\Collection\Behavior" => " Removed ",
            "Phalcon\Mvc\Collection\Behavior\SoftDelete" => " Removed ",
            "Phalcon\Mvc\Collection\Behavior\Timestampable" => " Removed ",
            "Phalcon\Mvc\Collection\Document" => " Removed ",
            "Phalcon\Mvc\Collection\Exception" => " Renamed to Phalcon\Collection\Exception ",
            "Phalcon\Mvc\Collection\Manager" => " Removed ",
            "Phalcon\Mvc\Model\Message" => " Renamed to Phalcon\Messages\Message",
            "Phalcon\Mvc\Model\MetaData\Apc" => " Removed ",
            "Phalcon\Mvc\Model\MetaData\Files" => " Renamed to Phalcon\Mvc\Model\MetaData\Stream",
            "Phalcon\Mvc\Model\MetaData\Memcache" => " Removed ",
            "Phalcon\Mvc\Model\MetaData\Session" => " Removed ",
            "Phalcon\Mvc\Model\MetaData\Xcache" => " Removed ",
            "Phalcon\Mvc\Model\Validator" => " Renamed to Phalcon\Validation\ValidatorFactory",
            "Phalcon\Mvc\Model\Validator\Email" => " Removed ",
            "Phalcon\Mvc\Model\Validator\Exclusionin" => " Removed ",
            "Phalcon\Mvc\Model\Validator\Inclusionin" => " Removed ",
            "Phalcon\Mvc\Model\Validator\Ip" => " Renamed to Phalcon\Validation\Validator\Ip",
            "Phalcon\Mvc\Model\Validator\Numericality" => " Removed ",
            "Phalcon\Mvc\Model\Validator\PresenceOf" => " Removed ",
            "Phalcon\Mvc\Model\Validator\Regex" => " Removed ",
            "Phalcon\Mvc\Model\Validator\StringLength" => " Removed ",
            "Phalcon\Mvc\Model\Validator\Uniqueness" => " Removed ",
            "Phalcon\Mvc\Model\Validator\Url" => " Removed ",
            "Phalcon\Mvc\Url" => " Renamed to Phalcon\Url",
            "Phalcon\Mvc\Url\Exception" => " Renamed to Phalcon\Url\Exception",
            "Phalcon\Mvc\User\Component" => " Renamed to Phalcon\Di\AbstractInjectionAware",
            "Phalcon\Mvc\User\Module" => " Renamed to Phalcon\Di\AbstractInjectionAware ",
            "Phalcon\Mvc\User\Plugin" => " Renamed to Phalcon\Di\AbstractInjectionAware",
            "Phalcon\Mvc\View\Engine" => " Renamed to Phalcon\Mvc\View\Engine\AbstractEngine",
            "Phalcon\Paginator\Adapter" => " Renamed to Phalcon\Paginator\Adapter\AbstractAdapter",
            "Phalcon\Paginator\Factory" => " Renamed to Phalcon\Paginator\PaginatorFactory",
            "Phalcon\Paginator\Repository" => " Removed ",
            "Phalcon\Queue\Beanstalk" => " Removed ",
            "Phalcon\Queue\Beanstalk\Exception" => " Removed ",
            "Phalcon\Queue\Beanstalk\Job" => " Removed ",
            "Phalcon\Session\Adapter" => " Renamed to Phalcon\Session\Adapter\AbstractAdapter",
            "Phalcon\Session\Adapter\Files" => " Renamed to Phalcon\Session\Adapter\Stream",
            "Phalcon\Session\Adapter\Memcache" => " Removed ",
            "Phalcon\Session\Factory" => " Renamed to Phalcon\Session\Manager",
            "Phalcon\Translate" => " Removed ",
            "Phalcon\Translate\Adapter" => " Renamed to Phalcon\Translate\Adapter\AbstractAdapter",
            "Phalcon\Translate\Factory" => " Renamed to Phalcon\Translate\TranslateFactory",
            "Phalcon\Validation\CombinedFieldsValidator" => " Renamed to Phalcon\Validation\AbstractCombinedFieldsValidator",
            "Phalcon\Validation\Message" => " Renamed to Phalcon\Messages\Message",
            "Phalcon\Validation\Message\Group" => " Renamed to Phalcon\Messages\Messages",
            "Phalcon\Validation\Validator" => " Renamed to Phalcon\Validation\AbstractValidator"
    ];
    
    const CLASSES_V4 = [
            "Phalcon\Acl\Enum" => "New",
            "Phalcon\Cache\CacheFactory" => "New",
            "Phalcon\Cache\Exception\InvalidArgumentException" => "New",
            "Phalcon\Collection" => "New",
            "Phalcon\Collection\Exception" => "New",
            "Phalcon\Collection\ReadOnly" => "New",
            "Phalcon\Container" => "New",
            "Phalcon\Db\Enum" => "New",
            "Phalcon\Dispatcher\Exception" => "New",
            "Phalcon\Di\AbstractInjectionAware" => "New",
            "Phalcon\Di\Exception\ServiceResolutionException" => "New",
            "Phalcon\Domain\Payload\Payload" => "New",
            "Phalcon\Domain\Payload\PayloadFactory" => "New",
            "Phalcon\Domain\Payload\Status" => "New",
            "Phalcon\Filter\FilterFactory" => "New",
            "Phalcon\Filter\Sanitize\AbsInt" => "New",
            "Phalcon\Filter\Sanitize\Alnum" => "New",
            "Phalcon\Filter\Sanitize\Alpha" => "New",
            "Phalcon\Filter\Sanitize\BoolVal" => "New",
            "Phalcon\Filter\Sanitize\Email" => "New",
            "Phalcon\Filter\Sanitize\FloatVal" => "New",
            "Phalcon\Filter\Sanitize\IntVal" => "New",
            "Phalcon\Filter\Sanitize\Lower" => "New",
            "Phalcon\Filter\Sanitize\LowerFirst" => "New",
            "Phalcon\Filter\Sanitize\Regex" => "New",
            "Phalcon\Filter\Sanitize\Remove" => "New",
            "Phalcon\Filter\Sanitize\Replace" => "New",
            "Phalcon\Filter\Sanitize\Special" => "New",
            "Phalcon\Filter\Sanitize\SpecialFull" => "New",
            "Phalcon\Filter\Sanitize\StringVal" => "New",
            "Phalcon\Filter\Sanitize\Striptags" => "New",
            "Phalcon\Filter\Sanitize\Trim" => "New",
            "Phalcon\Filter\Sanitize\Upper" => "New",
            "Phalcon\Filter\Sanitize\UpperFirst" => "New",
            "Phalcon\Filter\Sanitize\UpperWords" => "New",
            "Phalcon\Filter\Sanitize\Url" => "New",
            "Phalcon\Firewall\Adapter\AbstractAdapter" => "New",
            "Phalcon\Firewall\Adapter\Acl" => "New",
            "Phalcon\Firewall\Adapter\Annotations" => "New",
            "Phalcon\Firewall\Adapter\Micro\Acl" => "New",
            "Phalcon\Firewall\Exception" => "New",
            "Phalcon\Helper\Arr" => "New",
            "Phalcon\Helper\Exception" => "New",
            "Phalcon\Helper\Fs" => "New",
            "Phalcon\Helper\Number" => "New",
            "Phalcon\Helper\Str" => "New",
            "Phalcon\Html\Attributes" => "New",
            "Phalcon\Html\Breadcrumbs" => "New",
            "Phalcon\Html\Exception" => "New",
            "Phalcon\Html\Helper\AbstractHelper" => "New",
            "Phalcon\Html\Helper\Anchor" => "New",
            "Phalcon\Html\Helper\AnchorRaw" => "New",
            "Phalcon\Html\Helper\Body" => "New",
            "Phalcon\Html\Helper\Button" => "New",
            "Phalcon\Html\Helper\Close" => "New",
            "Phalcon\Html\Helper\Element" => "New",
            "Phalcon\Html\Helper\ElementRaw" => "New",
            "Phalcon\Html\Helper\Form" => "New",
            "Phalcon\Html\Helper\Img" => "New",
            "Phalcon\Html\Helper\Label" => "New",
            "Phalcon\Html\Helper\TextArea" => "New",
            "Phalcon\Html\TagFactory" => "New",
            "Phalcon\Http\Message\AbstractCommon" => "New",
            "Phalcon\Http\Message\AbstractMessage" => "New",
            "Phalcon\Http\Message\AbstractRequest" => "New",
            "Phalcon\Http\Message\Exception\InvalidArgumentException" => "New",
            "Phalcon\Http\Message\Request" => "New",
            "Phalcon\Http\Message\RequestFactory" => "New",
            "Phalcon\Http\Message\Response" => "New",
            "Phalcon\Http\Message\ResponseFactory" => "New",
            "Phalcon\Http\Message\ServerRequest" => "New",
            "Phalcon\Http\Message\ServerRequestFactory" => "New",
            "Phalcon\Http\Message\Stream" => "New",
            "Phalcon\Http\Message\StreamFactory" => "New",
            "Phalcon\Http\Message\Stream\Input" => "New",
            "Phalcon\Http\Message\Stream\Memory" => "New",
            "Phalcon\Http\Message\Stream\Temp" => "New",
            "Phalcon\Http\Message\UploadedFile" => "New",
            "Phalcon\Http\Message\UploadedFileFactory" => "New",
            "Phalcon\Http\Message\Uri" => "New",
            "Phalcon\Http\Message\UriFactory" => "New",
            "Phalcon\Http\Server\AbstractMiddleware" => "New",
            "Phalcon\Http\Server\AbstractRequestHandler" => "New",
            "Phalcon\Image\Enum" => "New",
            "Phalcon\Logger\AdapterFactory" => "New",
            "Phalcon\Logger\Adapter\Noop" => "New",
            "Phalcon\Messages\Exception" => "New",
            "Phalcon\Session\Adapter\Noop" => "New",
            "Phalcon\Storage\AdapterFactory" => "New",
            "Phalcon\Storage\Adapter\AbstractAdapter" => "New",
            "Phalcon\Storage\Adapter\Apcu" => "New",
            "Phalcon\Storage\Adapter\Libmemcached" => "New",
            "Phalcon\Storage\Adapter\Memory" => "New",
            "Phalcon\Storage\Adapter\Redis" => "New",
            "Phalcon\Storage\Adapter\Stream" => "New",
            "Phalcon\Storage\Exception" => "New",
            "Phalcon\Storage\SerializerFactory" => "New",
            "Phalcon\Storage\Serializer\AbstractSerializer" => "New",
            "Phalcon\Storage\Serializer\Base64" => "New",
            "Phalcon\Storage\Serializer\Igbinary" => "New",
            "Phalcon\Storage\Serializer\Json" => "New",
            "Phalcon\Storage\Serializer\Msgpack" => "New",
            "Phalcon\Storage\Serializer\None" => "New",
            "Phalcon\Storage\Serializer\Php" => "New",
            "Phalcon\Translate\InterpolatorFactory" => "New",
            "Phalcon\Validation\AbstractValidatorComposite" => "New",
            "Phalcon\Validation\Validator\File\AbstractFile" => "New",
            "Phalcon\Validation\Validator\File\MimeType" => "New",
            "Phalcon\Validation\Validator\File\Resolution\Equal" => "New",
            "Phalcon\Validation\Validator\File\Resolution\Max" => "New",
            "Phalcon\Validation\Validator\File\Resolution\Min" => "New",
            "Phalcon\Validation\Validator\File\Size\Equal" => "New",
            "Phalcon\Validation\Validator\File\Size\Max" => "New",
            "Phalcon\Validation\Validator\File\Size\Min" => "New",
            "Phalcon\Validation\Validator\StringLength\Max" => "New",
            "Phalcon\Validation\Validator\StringLength\Min" => "New",
    ];        
}
