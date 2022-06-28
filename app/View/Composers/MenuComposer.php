<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class MenuComposer extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'template-homepage'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        $menus = [];
        // get theme locations
        $theme_locations = get_nav_menu_locations();
        // for each theme location push the menu object into the menus array
        foreach($theme_locations as $key => $theme_location_id){

            $menuObject = get_term( $theme_location_id, 'nav_menu' );
            $menus[$key] = $menuObject;
            $menus[$key]->items = wp_get_nav_menu_items( $menuObject);

        }

        return [
           'menus' => $menus,
        ];
    }
}
