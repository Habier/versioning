<?php

/**
 * @param $path
 * @param null $version
 * @return \Illuminate\Contracts\Routing\UrlGenerator|string
 */
function url_version($path, $version = null)
{
    return \Habier\Versioning\AssetVersioning::url($path, $version);
}

/**
 * @param $path
 * @param null $version
 * @return string
 */
function asset_version($path, $version = null)
{
    return \Habier\Versioning\AssetVersioning::asset($path, $version);
}

/**
 * @param $path
 * @param array $parameters
 * @return string
 */
function route_version($path, $parameters = [])
{
    return \Habier\Versioning\AssetVersioning::route($path, $parameters);
}
