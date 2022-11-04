<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitTextTo3DAvatarVideoTaskRequest;

use AlibabaCloud\Tea\Model;

class videoInfo extends Model
{
    /**
     * @var string
     */
    public $backgroundImageUrl;

    /**
     * @var bool
     */
    public $isAlpha;

    /**
     * @var bool
     */
    public $isSubtitles;

    /**
     * @var int
     */
    public $resolution;
    protected $_name = [
        'backgroundImageUrl' => 'BackgroundImageUrl',
        'isAlpha'            => 'IsAlpha',
        'isSubtitles'        => 'IsSubtitles',
        'resolution'         => 'Resolution',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backgroundImageUrl) {
            $res['BackgroundImageUrl'] = $this->backgroundImageUrl;
        }
        if (null !== $this->isAlpha) {
            $res['IsAlpha'] = $this->isAlpha;
        }
        if (null !== $this->isSubtitles) {
            $res['IsSubtitles'] = $this->isSubtitles;
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
        if (isset($map['BackgroundImageUrl'])) {
            $model->backgroundImageUrl = $map['BackgroundImageUrl'];
        }
        if (isset($map['IsAlpha'])) {
            $model->isAlpha = $map['IsAlpha'];
        }
        if (isset($map['IsSubtitles'])) {
            $model->isSubtitles = $map['IsSubtitles'];
        }
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }

        return $model;
    }
}
