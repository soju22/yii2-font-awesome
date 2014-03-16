<?php
namespace soju\yii2fontawesome;

use yii\helpers\Html;

class FontAwesome
{

    public static function icon($iconOptions)
    {
        if (is_string($iconOptions)) {
            $icon = $iconOptions;
            $iconOptions = [];
        } else if (is_array($iconOptions) && isset($iconOptions[0])) {
            $icon = $iconOptions[0];
            unset($iconOptions[0]);
        } else {
            return;
        }

        $options = ['class' => 'fa fa-' . $icon];
        foreach ($iconOptions as $opt) {
            Html::addCssClass($options, 'fa-' . $opt);
        }

        return Html::tag('i', '', $options);
    }

}
