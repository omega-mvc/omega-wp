<?php

namespace App\Admin;

use Omega\Admin\Menu\AbstractMenuBuilder;

defined( 'ABSPATH' ) || exit;

class Menu extends AbstractMenuBuilder
{
    public function register(): void
    {
        $menu = $this
            ->add('omega-wp', __('Task Manager', 'omega-wp'))
            ->icon('dashicons-lightbulb')
            ->capability('manage_options');
    }
}
