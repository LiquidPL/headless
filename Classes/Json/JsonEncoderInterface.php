<?php

/*
 * This file is part of the "headless" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.md file that was distributed with this source code.
 *
 * (c) 2021
 */

declare(strict_types=1);

namespace FriendsOfTYPO3\Headless\Json;

interface JsonEncoderInterface
{
    /**
     * @param mixed $data
     * @param int $options
     * @return string
     */
    public function encode($data, int $options = 0): string;
}
