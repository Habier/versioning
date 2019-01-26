<?php
/**
 * Versioned Urls
 * User: Javier García
 * Date: 01/01/2019
 * Time: 15:23
 * For easier route, url, asset with version number to avoid client cache when needed.
 */

namespace Habier\Versioning;

class AssetVersioning
{

    /**
     * @param $path
     * @param null $version
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
     */
    public static function url($path, $version = null)
    {

        return url($path . '?v=' . self::version($version));
    }

    /**
     * @param $path
     * @param null $version
     * @return string
     */
    public static function asset($path, $version = null)
    {

        return asset($path . '?v=' . self::version($version));
    }

    /**
     * @param $path
     * @param array $parameters
     * @return string
     */
    public static function route($path, array $parameters = [])
    {
        $parameters['v'] = self::version($parameters['v']);
        return route($path, $parameters);
    }


    private static function version($version)
    {
        if (!$version)
            return config('version.global');

        return $version;
    }

}