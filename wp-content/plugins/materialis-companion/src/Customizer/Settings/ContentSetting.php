<?php

namespace Materialis\Customizer\Settings;

class ContentSetting extends \Materialis\Customizer\BaseSetting
{

    public static $pageIDRegex = '/<!--@@CPPAGEID\[(.*)\]@@-->/s';

    public function update($value)
    {
        if (is_string($value)) {
            $pages_content = json_decode($value, true);
        } else {
            $pages_content = $value;
        }

        foreach ($pages_content as $page_id => $content) {
            wp_update_post(array(
                'ID'           => $page_id,
                'post_content' => $content,
            ));
        }

        parent::update(array());
    }

    public function value()
    {
        if ($this->is_previewed) {
            $value = $this->post_value(null);
            return $value;
        } else {
            return array();
        }
    }
}
