<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\Update2dAvatarResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example CH_2d_xxxxxx
     *
     * @var string
     */
    public $code;
    protected $_name = [
        'code' => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
