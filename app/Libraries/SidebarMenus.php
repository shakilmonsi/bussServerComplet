<?php

namespace App\Libraries;


class SidebarMenus
{
    protected static $uri;
    protected static $rolePermission;
    public static $currentMenuId = 0;
    public static $currentMenuTitle = '';
    public static $currentMenuSegment = '';

    public function __construct(Rolepermission $r)
    {
        static::$uri = service('uri');
        static::$rolePermission = $r;
        static::$currentMenuSegment = (static::$uri)->getSegment(3);
    }

    public static function checkActive(string $check)
    {
        if (static::$currentMenuSegment == $check) {
            return 'mm-active';
        }

        return '';
    }

    // public 
} 