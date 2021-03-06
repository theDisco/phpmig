<?php
/**
 * @package    Phpmig
 * @subpackage Phpmig\Migration
 */
namespace Phpmig\Migration;

/**
 * This file is part of phpmig
 *
 * Copyright (c) 2011 Dave Marshall <dave.marshall@atstsolutuions.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Migration
 *
 * A migration describes the changes that should be made (or unmade)
 *
 * @author      Dave Marshall <david.marshall@atstsolutions.co.uk>
 */
class Migration
{
    /**
     * @var int
     */
    protected $version = null;

    /**
     * @var \ArrayAccess
     */
    protected $container = null;

    /**
     * @var OutputInterface
     */
    protected $output = null;

    /**
     * Constructor
     *
     * @param int $version
     */
    final public function __construct($version)
    {
        $this->version = $version;
        $this->init();
    }

    /**
     * init
     *
     * @return void
     */
    protected function init()
    {
        return;
    }

    /**
     * Do the migration
     *
     * @return void
     */
    public function up() 
    {
        return;
    }

    /**
     * Undo the migration
     *
     * @return void
     */
    public function down()
    {
        return;
    }

    /**
     * Get Version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set version
     *
     * @param int $version
     * @return Migration
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return get_class($this);
    }

    /**
     * Get Container
     *
     * @return \ArrayAccess
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * Set Container
     *
     * @param \ArrayAccess $container
     * @return Migrator
     */
    public function setContainer(\ArrayAccess $container)
    {
        $this->container = $container;
        return $this;
    }

    /**
     * Get Output
     *
     * @return OutputInterface
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * Set Output
     *
     * @param OutputInterface $output 
     * @return Migrator
     */
    public function setOutput(OutputInterface $output)
    {
        $this->output = $output;
        return $this;
    }
}



