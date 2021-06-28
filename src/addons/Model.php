<?php

namespace think\addons;
use think\facade\Env;
use think\facade\Request;
use think\facade\Config;
use think\Loader;


/**
 * 插件基类模型
 */
class Model extends think\Model
{

      /**
     * 架构函数
     * @access public
     * @param  array|object $data 数据
     */
    public function __construct($data = [])
    {
      

       parent::__construct();

    }


}