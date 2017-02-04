<?php

namespace DDDominio\Common;

interface MetadataInterface extends \IteratorAggregate, \Countable
{
    /**
     * @param string $key
     * @param string $value
     */
    public function set($key, $value);

    /**
     * @param string $key
     * @return string|null
     */
    public function get($key);

    /**
     * @return array
     */
    public function all();
}
