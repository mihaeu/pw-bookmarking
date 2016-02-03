<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'bookmark' => '/../src/Bookmark.php',
                'bookmarktest' => '/BookmarkTest.php',
                'comment' => '/../src/Comment.php',
                'commenttest' => '/CommentTest.php',
                'email' => '/../src/Email.php',
                'emailtest' => '/EmailTest.php',
                'link' => '/../src/Link.php',
                'linktest' => '/LinkTest.php',
                'name' => '/../src/Name.php',
                'nametest' => '/NameTest.php',
                'password' => '/../src/Password.php',
                'passwordtest' => '/PasswordTest.php',
                'user' => '/../src/User.php',
                'usertest' => '/UserTest.php'
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
