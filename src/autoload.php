<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'bookmark' => '/Bookmark.php',
                'category' => '/Category.php',
                'categoryname' => '/CategoryName.php',
                'comment' => '/Comment.php',
                'email' => '/Email.php',
                'link' => '/Link.php',
                'name' => '/Name.php',
                'password' => '/Password.php',
                'user' => '/User.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd
