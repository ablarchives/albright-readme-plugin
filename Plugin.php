<?php namespace AlbrightLabs\ReadMe;

use Backend;
use System\Classes\PluginBase;

/**
 * ReadMe Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'ReadMe',
            'description' => 'A plugin that allows for readme and docs to easily be added to any application.',
            'author'      => 'Albright Labs LLC',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Registers back-end settings for this plugin.
     *
     * @return array
     */
    public function registerSettings()
    {
        return [
            'readme' => [
                'label'       => 'About & Docs',
                'description' => 'Read details and documentation for this application.',
                'url'         => Backend::url('albrightlabs/readme/about'),
                'icon'        => 'icon-question-circle',
                'category'    => 'About',
                'keywords'    => 'about docs readme',
                'order'       => 100,
            ],
        ];
    }
}
