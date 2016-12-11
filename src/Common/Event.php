<?php

namespace Common;

interface Event
{
    /**
     * @return \DateTimeImmutable
     */
    public function occurredOn();
}
