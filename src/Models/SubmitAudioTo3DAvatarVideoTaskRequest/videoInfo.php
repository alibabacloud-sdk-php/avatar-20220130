<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitAudioTo3DAvatarVideoTaskRequest;

use AlibabaCloud\Tea\Model;

class videoInfo extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $alphaFormat;

    /**
     * @var string
     */
    public $backgroundImageUrl;

    /**
     * @example false
     *
     * @var bool
     */
    public $isAlpha;

    /**
     * @example 1
     *
     * @var int
     */
    public $resolution;
    protected $_name = [
        'alphaFormat'        => 'AlphaFormat',
        'backgroundImageUrl' => 'BackgroundImageUrl',
        'isAlpha'            => 'IsAlpha',
        'resolution'         => 'Resolution',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alphaFormat) {
            $res['AlphaFormat'] = $this->alphaFormat;
        }
        if (null !== $this->backgroundImageUrl) {
            $res['BackgroundImageUrl'] = $this->backgroundImageUrl;
        }
        if (null !== $this->isAlpha) {
            $res['IsAlpha'] = $this->isAlpha;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlphaFormat'])) {
            $model->alphaFormat = $map['AlphaFormat'];
        }
        if (isset($map['BackgroundImageUrl'])) {
            $model->backgroundImageUrl = $map['BackgroundImageUrl'];
        }
        if (isset($map['IsAlpha'])) {
            $model->isAlpha = $map['IsAlpha'];
        }
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }

        return $model;
    }
}
