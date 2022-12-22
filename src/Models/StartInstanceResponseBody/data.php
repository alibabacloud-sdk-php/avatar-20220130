<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\StartInstanceResponseBody;

use AlibabaCloud\SDK\Avatar\V20220130\Models\StartInstanceResponseBody\data\channel;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var channel
     */
    public $channel;

    /**
     * @example 13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 4f63f9e9788449f9adc88d9438c8dec3
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example 879441ee7b363886418
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'channel'   => 'Channel',
        'requestId' => 'RequestId',
        'sessionId' => 'SessionId',
        'token'     => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channel) {
            $res['Channel'] = null !== $this->channel ? $this->channel->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['Channel'])) {
            $model->channel = channel::fromMap($map['Channel']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
