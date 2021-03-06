<?php

namespace console\websocketd\model;

use mix\base\Model;

/**
 * Join 表单模型类
 * @author 刘健 <coder.liu@qq.com>
 */
class JoinForm extends Model
{

    public $room_id;

    // 规则
    public function rules()
    {
        return [
            ['room_id', 'integer', 'unsigned' => true, 'min' => 1, 'max' => 1000000000],
        ];
    }

    // 场景
    public function scenarios()
    {
        return [
            'room' => ['required' => ['room_id']],
        ];
    }

}
