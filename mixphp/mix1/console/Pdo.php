<?php

namespace mix\console;

/**
 * Pdo组件
 * @author 刘健 <coder.liu@qq.com>
 */
class Pdo extends \mix\rdb\Pdo
{

    // 初始化事件
    public function onInitialize()
    {
        parent::onInitialize();
        // 连接
        $this->connect();
    }

    // 析构事件
    public function onDestruct()
    {
        parent::onDestruct();
        // 关闭连接
        $this->close();
    }

}