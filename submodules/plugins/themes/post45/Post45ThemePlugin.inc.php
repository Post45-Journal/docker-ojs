<?php
import('lib.pkp.classes.plugins.ThemePlugin');
class Post45ThemePlugin extends ThemePlugin {

    /**
     * Load the custom styles for our theme
     * @return null
     */
    public function init() {
        // Use the parent theme's unique plugin slug
        $this->setParent('classicthemeplugin');

        $this->modifyStyle('stylesheet', array('addLess' => array('styles/index.less')));
    }

    /**
     * Get the display name of this theme
     * @return string
     */
    function getDisplayName() {
        return 'Post45 Theme';
    }

    /**
     * Get the description of this plugin
     * @return string
     */
    function getDescription() {
        return 'A theme for Post45 building on the PKP Classic Theme.';
    }
}