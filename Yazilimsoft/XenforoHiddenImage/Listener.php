<?php

class Yazilimsoft_XenforoHiddenImage_Listener
{
    public static function loadClassListener($class, &$extend)
    {

        if ($class == 'XenForo_ViewPublic_Thread_View')
        {
            $extend[] = 'Yazilimsoft_XenforoHiddenImage_ViewPublic_XenforoHiddenImage';
        }

        if ($class == 'XenForo_ViewPublic_Thread_ViewNewPosts')
        {
            $extend[] = 'Yazilimsoft_XenforoHiddenImage_ViewPublic_XenforoHiddenImage';
        }

        if ($class == 'XenForo_ViewPublic_Thread_ViewPosts')
        {
            $extend[] = 'Yazilimsoft_XenforoHiddenImage_ViewPublic_XenforoHiddenImage';
        }

    }
}