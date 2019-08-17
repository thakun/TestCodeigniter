<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Helper que genera el menu
 * menu_ul()
 * Genera una lista desordenada con la clase current en el elemento seleccionado.
 */
if ( ! function_exists('menu_ul'))
{
    function menu_ul($sel = 'home')
   {
        $CI =& get_instance();
        $items = $CI->config->item('navigation');
        
        $menu = '<ul class="navbar-nav ml-auto my-2 my-lg-0">'."\n";
        foreach($items as $item)
        {
            $current = (in_array($sel, $item)) ? ' class="nav-item active"' : '';
            $img = '<img src="'.base_url("assets/img/".$item['img'].".png").'">';
            $menu .= '<li'.$current.'><a class="nav-link" href="'.$item['link'].'">'.$img.'<span>'.$item['title'].'</span></a></li>'."\n";
        }
        $menu .= '</ul>'."\n";
        return $menu;
    }
}