
<?php

namespace App;

class Demo
{
    public function run()
    {
        // PHPCS: Missing visibility for method
        function doSomething($value)
        {
            echo "Processing: " . $value;
        }

        // Rector + PHPStan: Use of deprecated string concatenation
        $name = "John";
        $greeting = "Hello " . $name;

        // PHPStan: Undefined variable
        $result = $undefinedVar + 10;

        // Rector: Can refactor to use null coalescing
        $data = isset($_GET['data']) ? $_GET['data'] : 'default';

        // Dead code
        return;
        echo "This will never be executed";
    }
}
