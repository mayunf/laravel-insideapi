<?php
/**
 * Created by PhpStorm.
 * User: mayunfeng
 * Date: 2018/2/26
 * Time: 15:28
 */

namespace Mayunfeng\LaravelInsideApi\Facades;


use Illuminate\Support\Facades\Facade;

class InsideApi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'InsideApi';
    }
}