<?php


namespace BHayes\Test;


class ComposerJson extends JsonFile
{
    public function __construct(string $filename = 'composer.json')
    {
        parent::__construct($filename);
    }

    /**
     * @var string|null
     * @see: https://getcomposer.org/doc/04-schema.md#name
     */
    public ?string $name;

    /**
     * @var string|null
     * @see: https://getcomposer.org/doc/04-schema.md#description
     */
    public ?string $description;

    /**
     * @var string|null
     * @see: https://getcomposer.org/doc/04-schema.md#version
     */
    public ?string $version;

    /**
     * @var string|null
     * @see: https://getcomposer.org/doc/04-schema.md#type
     */
    public ?string $type;

    /**
     * @var string[]|null
     * @see: https://getcomposer.org/doc/04-schema.md#keywords
     */
    public ?array $keywords;

    /**
     * @var string|null
     * @see: https://getcomposer.org/doc/04-schema.md#homepage
     */
    public ?string $homepage;

    /**
     * @var string|null
     * @see: https://getcomposer.org/doc/04-schema.md#readme
     */
    public ?string $readme;

    /**
     * @var string|null
     * @see: https://getcomposer.org/doc/04-schema.md#time
     */
    public ?string $time;

    /**
     * @var string|string[]|null
     * @see: https://getcomposer.org/doc/04-schema.md#license
     */
    public $license;
    //public null|string|array $license; //use this when making package support php 8 only

    /**
     * @var null|array{
     *          object{ name: string, email: string, homepage: string, role: string }
     *     }
     * @see: https://getcomposer.org/doc/04-schema.md#authors
     */
    public ?array $authors;

    /**
     * @var null|object{
     *          email: string,
     *          issues: string,
     *          forum: string,
     *          wiki: string,
     *          irc: string,
     *          source: string,
     *          docs: string,
     *          rss: string,
     *          chat: string
     *     }
     * @see: https://getcomposer.org/doc/04-schema.md#support
     */
    public ?object $support;

    /**
     * @var null|array{
     *          object{ type:string, url: string }
     *      }
     * @see: https://getcomposer.org/doc/04-schema.md#funding
     */
    public ?array $funding;

    /**
     * @var null|object
     * @see: https://getcomposer.org/doc/04-schema.md#package-links
     */
    public ?object $require;

    /**
     * @var null|object
     * @see: https://getcomposer.org/doc/04-schema.md#require-dev
     */
    public ?object $requireDev;

    /**
     * @var null|object
     * @see: https://getcomposer.org/doc/04-schema.md#conflict
     */
    public ?object $conflict;

    /**
     * @var null|object
     * @see: https://getcomposer.org/doc/04-schema.md#replace
     */
    public ?object $replace;

    /**
     * @var null|object
     * @see: https://getcomposer.org/doc/04-schema.md#provide
     */
    public ?object $provide;

    /**
     * @var null|object
     * @see: https://getcomposer.org/doc/04-schema.md#suggest
     */
    public $suggest;

    /**
     * @var null|object{
     *          psr-4: ?object,
     *          psr-0: ?object,
     *          files: ?array,
     *          exclude-from-classmap: ?array
     *     }
     * @see: https://getcomposer.org/doc/04-schema.md#autoload
     */
    public ?object $autoload;

    /**
     * @var null|object{
     *          psr-4: ?object,
     *          psr-0: ?object,
     *          files: ?array,
     *          exclude-from-classmap: ?array
     *     }
     * @see: https://getcomposer.org/doc/04-schema.md#autoload-dev
     */
    public ?object $autoloadDev;

    /**
     * @deprecated This is only present to support legacy projects.
     * @var null|string[]
     * @see: https://getcomposer.org/doc/04-schema.md#include-path
     */
    public ?array $includePath;

    /**
     * @deprecated This is only present to support legacy projects.
     * @var null|string[]
     * @see: https://getcomposer.org/doc/04-schema.md#target-dir
     */
    public ?array $targetDir;

    /**
     * @var null|string
     * @see: https://getcomposer.org/doc/04-schema.md#minimum-stability
     */
    public ?string $minimumStability;

    /**
     * @var null|bool
     * @see: https://getcomposer.org/doc/04-schema.md#prefer-stable
     */
    public ?bool $preferStable;

    /**
     * @var null|object[]|object
     * @see: https://getcomposer.org/doc/04-schema.md#repositories
     */
    public $repositories;

    /**
     * Typehint only includes platform->php as a personal preference but there are a LOT more config options.
     *
     * @var null|object{ platform: object{ php: string } }
     * @see: https://getcomposer.org/doc/04-schema.md#config
     */
    public ?object $config;

    /**
     * @var null|object
     * @see: https://getcomposer.org/doc/04-schema.md#scripts
     */
    public ?object $scripts;

    /**
     * @var mixed
     * @see: https://getcomposer.org/doc/04-schema.md#extra
     */
    public $extra;

    /**
     * @var null|string[]
     * @see: https://getcomposer.org/doc/04-schema.md#bin
     */
    public ?array $bin;

    /**
     * @var null|object
     * @see: https://getcomposer.org/doc/04-schema.md#archive
     */
    public ?object $archive;

    /**
     * @var null|bool
     * @see: https://getcomposer.org/doc/04-schema.md#abandoned
     */
    public ?bool $abandoned;

    /**
     * @var null|string[]
     * @see: https://getcomposer.org/doc/04-schema.md#non-feature-branches
     */
    public ?array $nonFeatureBranches;
}
