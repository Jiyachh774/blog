<?php

/**
 * Generate a pseudo-random UUID string of hexadecimal characters.
 *
 * @param int $length The desired length of the UUID. Default is 6.
 * @return string A string containing the generated UUID.
 */

function getUuid(int $length = 6): string
{
    return bin2hex(random_bytes($length - 1));
}
