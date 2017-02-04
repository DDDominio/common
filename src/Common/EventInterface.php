<?php

namespace DDDominio\Common;

interface EventInterface
{
    /**
     * @return mixed
     */
    public function data();

    /**
     * @return MetadataInterface|string
     */
    public function metadata();

    /**
     * @return \DateTimeImmutable
     */
    public function occurredOn();
}
