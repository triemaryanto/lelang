<?php
if (!function_exists('get_menu_web')) {
    function get_menu_web()
    {
        return \App\Models\Menu::where('parent_id', '=', 0)->get();
    }
}
