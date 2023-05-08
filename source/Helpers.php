<?php

/**
 * @param string|null $uri
 * @return string
 */
function site(string $param = null): string
{
    if($param && !empty(SITE[$param])) {
        return SITE[$param];
    }

    return SITE["root"];
}

/**
 * @param string|null $uri
 * @return string
 */
function url(string $uri = null): string
{
    if($uri) {
        return URL_BASE."/{$uri}";
    }
    return URL_BASE;
}

/**
 *
 */
enum Status: string
{
    case Admin = 'A';
}