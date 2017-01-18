<?php

namespace DDDominio\Common;

interface Event
{
    /**
     * @return \DateTimeImmutable
     */
    public function occurredOn();
}
