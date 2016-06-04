<?php

/*
 * This file is part of the Predis package.
 *
 * (c) Daniele Alessandri <suppakilla@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Predis\Command\Redis;

use Predis\Command\Command;

/**
 * @link http://redis.io/commands/decr
 *
 * @author Daniele Alessandri <suppakilla@gmail.com>
 */
class StringDecrement extends Command
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return 'DECR';
    }
}