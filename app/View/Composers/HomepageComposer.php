<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class HomepageComposer extends Composer
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

        return [
            'data' => [
                'titleSliceOne' => get_field('title_slice_one',get_the_ID()) ?? 'title',
                'titleSliceTwo' => get_field('title_slice_two',get_the_ID()) ?? 'title2',
                'text' => 'sfdsafweuifhsduk'
            ]
        ];
    }
}
