<?php

class Yazilimsoft_XenforoHiddenImage_ViewPublic_XenforoHiddenImage extends XFCP_Yazilimsoft_XenforoHiddenImage_ViewPublic_XenforoHiddenImage
{
    public function renderHtml()
    {
        parent::renderHtml();

        if (isset($this->_params['posts'])) {
            $options = XenForo_Application::get('options');
            $visitor = XenForo_Visitor::getInstance();

            foreach ($this->_params['posts'] AS &$message) {
                if (!empty($options->image_hidden_status) AND !$visitor['user_id']) {
                    if (isset($_GET['amp'])) {
                    } else {
                        $message['messageHtml'] = preg_replace_callback(
                            "!<a[^>]*><img src=\"http[^>]*></a>!siU",
                            create_function('$m', '
$options = XenForo_Application::get("options");
        static $id = 0;
        $id++;
        preg_match("/< *img[^>]*src *= *[\"\']?([^\"\']*)/i",$m[0],$imageResult);
        return "<a onclick=\"return XenforoHidingImageViewer(this, this.href)\" href=\"".$imageResult[1]."\" rel=\"nofollow\">".$options->hidden_message."</a> <br>";'),
                            $message['messageHtml']);

                        $message['messageHtml'] = preg_replace_callback(
                            "!<img src=\"http[^>]*>!siU",
                            create_function('$m', '
$options = XenForo_Application::get("options");
        static $id = 0;
        $id++;
        preg_match("/< *img[^>]*src *= *[\"\']?([^\"\']*)/i",$m[0],$imageResult);
        return "<a onclick=\"return XenforoHidingImageViewer(this, this.href)\" href=\"".$imageResult[1]."\" rel=\"nofollow\">".$options->hidden_message."</a> <br>";'),
                            $message['messageHtml']);

                        $message['messageHtml'] = preg_replace_callback(
                            "!<a[^>]*><img src=\"data[^>]*></a>!siU",
                            create_function('$m', '
$options = XenForo_Application::get("options");
        static $id = 0;
        $id++;
        preg_match("/< *img[^>]*src *= *[\"\']?([^\"\']*)/i",$m[0],$imageResult);
        return "<a onclick=\"return XenforoHidingImageViewer(this, this.href)\" href=\"".$imageResult[1]."\" rel=\"nofollow\">".$options->hidden_message."</a> <br>";'),
                            $message['messageHtml']);
                    }
                }
            }
        }
    }
}



