<?php
/**
 * Sales and Orders Ads (http://salesandordersads.com/)
 *
 * This file is subject to the terms and conditions defined in
 * file 'LICENSE.txt', which is part of this source code package.
 *
 * @link      https://github.com/newdynamx/AdsUI for the canonical source repository
 * @copyright Copyright (c) 2013-2014 New Dynamx Inc. (http://www.newdynamx.com)
 * @license   See LICENSE.txt
 */

return [
    'modules' => [
        'Application',
        'ZF\\DevelopmentMode',
        'ZF\\Apigility',
        'ZF\\Apigility\\Provider',
        'ZF\\Apigility\\Documentation',
        'AssetManager',
        'ZF\\ApiProblem',
        'ZF\\MvcAuth',
        'ZF\\OAuth2',
        'ZF\\Hal',
        'ZF\\ContentNegotiation',
        'ZF\\ContentValidation',
        'ZF\\Rest',
        'ZF\\Rpc',
        'ZF\\Versioning',
        'AccountApi',
    ],
    'module_listener_options' => [
        'module_paths'             => ['./module', './vendor'],
        'config_glob_paths'        => ['config/autoload/{,*.}{global,local}.php'],
        'config_cache_enabled'     => true,
        'config_cache_key'         => 'ads',
        'module_map_cache_enabled' => true,
        'module_map_cache_key'     => 'ads_map',
        'cache_dir'                => './data/cache',
    ]
];
