<?php

class Phalcon3to4
{
    const CLASSES = [
        "Phalcon\Acl" => "Removed ",
        "Phalcon\Acl\Adapter" => "Renamed to Phalcon\Acl\Adapter\AbstractAdapter",
        "Phalcon\Acl\Resource" => "Renamed to Phalcon\Acl\Component",
        "Phalcon\Annotations\Adapter" => "Renamed to Phalcon\Annotations\Adapter\AbstractAdapter",
        "Phalcon\Annotations\Adapter\Apc" => "Removed ",
        "Phalcon\Annotations\Adapter\Files" => "Renamed to Phalcon\Annotations\Adapter\Stream",
        "Phalcon\Annotations\Adapter\Xcache" => "Removed ",
        "Phalcon\Annotations\Factory" => "Renamed to Phalcon\Annotations\AnnotationsFactory",
        "Phalcon\Application" => "Renamed to Phalcon\Application\AbstractApplication",
        "Phalcon\Assets\Resource" => "Renamed to Phalcon\Assets\Asset",
        "Phalcon\Assets\Resource\Css" => "Renamed to Phalcon\Assets\Asset\Css",
        "Phalcon\Assets\Resource\Js" => "Renamed to Phalcon\Assets\Asset\Js",
        "Phalcon\Cache\Backend\Apc" => "Removed ",
        "Phalcon\Cache\Backend" => "Renamed to Phalcon\Cache",
        "Phalcon\Cache\Backend\Factory" => "Renamed to Phalcon\Cache\AdapterFactory",
        "Phalcon\Cache\Backend\Apcu" => "Renamed to Phalcon\Cache\Adapter\Apcu",
        "Phalcon\Cache\Backend\File" => "Renamed to Phalcon\Cache\Adapter\Stream",
        "Phalcon\Cache\Backend\Libmemcached" => "Renamed to Phalcon\Cache\Adapter\Libmemcached",
        "Phalcon\Cache\Backend\Memcache" => "Removed ",
        "Phalcon\Cache\Backend\Memory" => "Renamed to Phalcon\Cache\Adapter\Memory",
        "Phalcon\Cache\Backend\Mongo" => "Removed ",
        "Phalcon\Cache\Backend\Redis" => "Renamed to Phalcon\Cache\Adapter\Redis",
        "Phalcon\Cache\Backend\Xcache" => "Removed ",
        "Phalcon\Cache\Exception" => "Renamed to Phalcon\Cache\Exception\Exception",
        "Phalcon\Cache\Frontend\Base64" => "Removed ",
        "Phalcon\Cache\Frontend\Data" => "Removed ",
        "Phalcon\Cache\Frontend\Factory" => "Removed ",
        "Phalcon\Cache\Frontend\Igbinary" => "Removed ",
        "Phalcon\Cache\Frontend\Json" => "Removed ",
        "Phalcon\Cache\Frontend\Msgpack" => "Removed ",
        "Phalcon\Cache\Frontend\None" => "Removed ",
        "Phalcon\Cache\Frontend\Output" => "Removed ",
        "Phalcon\Cache\Multiple" => "Removed ",
        "Phalcon\Config\Factory" => "Renamed to Phalcon\Config\ConfigFactory",
        "Phalcon\Db" => "Renamed to Phalcon\Db\AbstractDb",
        "Phalcon\Db\Adapter" => "Renamed to Phalcon\Db\Adapter\AbstractAdapter",
        "Phalcon\Db\Adapter\Pdo" => "Renamed to Phalcon\Db\Adapter\Pdo\AbstractPdo",
        "Phalcon\Db\Adapter\Pdo\Factory" => "Renamed to Phalcon\Db\Adapter\PdoFactory",
        "Phalcon\Dispatcher" => "Renamed to Phalcon\Dispatcher\AbstractDispatcher",
        "Phalcon\Factory" => "Renamed to Phalcon\Factory\AbstractFactory",
        "Phalcon\Filter" => "Renamed to Phalcon\Filter\Filter",
        "Phalcon\Flash" => "Renamed to Phalcon\Flash\AbstractFlash",
        "Phalcon\Forms\Element" => "Renamed to Phalcon\Forms\Element\AbstractElement",
        "Phalcon\Image" => "Removed ",
        "Phalcon\Image\Adapter" => "Renamed to Phalcon\Image\Adapter\AbstractAdapter",
        "Phalcon\Image\Factory" => "Renamed to Phalcon\Image\ImageFactory",
        "Phalcon\Logger" => "Renamed to Phalcon\Logger\Logger",
        "Phalcon\Logger\Adapter" => "Renamed to Phalcon\Logger\Adapter\AbstractAdapter",
        "Phalcon\Logger\Adapter\Blackhole" => "Renamed to Phalcon\Logger\Adapter\Noop",
        "Phalcon\Logger\Adapter\File" => "Renamed to Phalcon\Logger\Adapter\Stream",
        "Phalcon\Logger\Adapter\Firephp" => "Removed ",
        "Phalcon\Logger\Factory" => "Renamed to Phalcon\Logger\LoggerFactory",
        "Phalcon\Logger\Formatter" => "Renamed to Phalcon\Logger\Formatter\AbstractFormatter",
        "Phalcon\Logger\Formatter\Firephp" => "Removed 	",
        "Phalcon\Logger\Multiple" => "Removed ",
        "Phalcon\Mvc\Model\Message" => "Renamed to Phalcon\Messages\Message",
        "Phalcon\Mvc\Model\MetaData\Apc" => "Removed ",
        "Phalcon\Mvc\Model\MetaData\Files" => "Renamed to Phalcon\Mvc\Model\MetaData\Stream",
        "Phalcon\Mvc\Model\MetaData\Memcache" => "Removed ",
        "Phalcon\Mvc\Model\MetaData\Session" => " ",
        "Phalcon\Mvc\Model\MetaData\Xcache" => "Removed ",
        "Phalcon\Mvc\Model\Validator" => "Renamed to Phalcon\Validation\Validator",
        "Phalcon\Mvc\Model\Validator\Email" => "Renamed to Phalcon\Validation\Validator\Email",
        "Phalcon\Mvc\Model\Validator\Exclusionin" => "Renamed to Phalcon\Validation\Validator\ExclusionIn",
        "Phalcon\Mvc\Model\Validator\Inclusionin" => "Renamed to Phalcon\Validation\Validator\InclusionIn",
        "Phalcon\Mvc\Model\Validator\Ip" => "Renamed to Phalcon\Validation\Validator\Ip",
        "Phalcon\Mvc\Model\Validator\Numericality" => "Renamed to Phalcon\Validation\Validator\Numericality",
        "Phalcon\Mvc\Model\Validator\PresenceOf" => "Renamed to Phalcon\Validation\Validator\PresenceOf",
        "Phalcon\Mvc\Model\Validator\Regex" => "Renamed to Phalcon\Validation\Validator\Regex",
        "Phalcon\Mvc\Model\Validator\StringLength" => "Renamed to Phalcon\Validation\Validator\StringLength",
        "Phalcon\Mvc\Model\Validator\Uniqueness" => "Renamed to Phalcon\Validation\Validator\Uniqueness",
        "Phalcon\Mvc\Model\Validator\Url" => "Renamed to Phalcon\Validation\Validator\Url",
        "Phalcon\Mvc\Url" => "Renamed to Phalcon\Url",
        "Phalcon\Mvc\Url\Exception" => "Renamed to Phalcon\Url\Exception",
        "Phalcon\Mvc\User\Component" => "Renamed to Phalcon\Plugin",
        "Phalcon\Mvc\User\Module" => "Renamed to Phalcon\Plugin",
        "Phalcon\Mvc\User\Plugin" => "Renamed to Phalcon\Plugin",
        "Phalcon\Mvc\View\Engine" => "Renamed to Phalcon\Mvc\View\Engine\AbstractEngine",
        "Phalcon\Paginator\Adapter" => "Renamed to Phalcon\Paginator\Adapter\AbstractAdapter",
        "Phalcon\Paginator\Factory" => "Renamed to Phalcon\Paginator\PaginatorFactory",
        "Phalcon\Queue\Beanstalk" => "Removed ",
        "Phalcon\Queue\Beanstalk\Exception" => "Removed ",
        "Phalcon\Queue\Beanstalk\Job" => "Removed ",
        "Phalcon\Session\Adapter" => "Renamed to Phalcon\Session\Adapter\AbstractAdapter",
        "Phalcon\Session\Adapter\Files" => "Renamed to Phalcon\Session\Adapter\Stream",
        "Phalcon\Session\Adapter\Memcache" => "Removed ",
        "Phalcon\Session\BagInterface" => "Removed ",
        "Phalcon\Session\Factory" => "Renamed to Phalcon\Session\Manager",
        "Phalcon\Translate" => "Removed ",
        "Phalcon\Translate\Adapter" => "Renamed to Phalcon\Translate\Adapter\AbstractAdapter",
        "Phalcon\Translate\Factory" => "Renamed to Phalcon\Translate\TranslateFactory",
        "Phalcon\Validation\CombinedFieldsValidator" => "Renamed to Phalcon\Validation\AbstractCombinedFieldsValidator",
        "Phalcon\Validation\Message" => "Renamed to Phalcon\Messages\Message",
        "Phalcon\Validation\Message\Group" => "Renamed to Phalcon\Messages\Messages",
        "Phalcon\Validation\Validator" => "Renamed to Phalcon\Validation\AbstractValidator",
    ];   
}
