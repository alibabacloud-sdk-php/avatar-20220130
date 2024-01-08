<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitTextTo2DAvatarVideoTaskRequest;

use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitTextTo2DAvatarVideoTaskRequest\videoInfo\subtitleStyle;
use AlibabaCloud\Tea\Model;

class videoInfo extends Model
{
    /**
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
     * @example true
     *
     * @deprecated
     *
     * @var bool
     */
    public $isSubtitles;

    /**
     * @var int
     */
    public $resolution;

    /**
     * @var bool
     */
    public $subtitleEmbedded;

    /**
     * @var subtitleStyle
     */
    public $subtitleStyle;
    protected $_name = [
        'alphaFormat'        => 'AlphaFormat',
        'backgroundImageUrl' => 'BackgroundImageUrl',
        'isAlpha'            => 'IsAlpha',
        'isSubtitles'        => 'IsSubtitles',
        'resolution'         => 'Resolution',
        'subtitleEmbedded'   => 'SubtitleEmbedded',
        'subtitleStyle'      => 'SubtitleStyle',
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
        if (null !== $this->isSubtitles) {
            $res['IsSubtitles'] = $this->isSubtitles;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }
        if (null !== $this->subtitleEmbedded) {
            $res['SubtitleEmbedded'] = $this->subtitleEmbedded;
        }
        if (null !== $this->subtitleStyle) {
            $res['SubtitleStyle'] = null !== $this->subtitleStyle ? $this->subtitleStyle->toMap() : null;
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
        if (isset($map['IsSubtitles'])) {
            $model->isSubtitles = $map['IsSubtitles'];
        }
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }
        if (isset($map['SubtitleEmbedded'])) {
            $model->subtitleEmbedded = $map['SubtitleEmbedded'];
        }
        if (isset($map['SubtitleStyle'])) {
            $model->subtitleStyle = subtitleStyle::fromMap($map['SubtitleStyle']);
        }

        return $model;
    }
}
