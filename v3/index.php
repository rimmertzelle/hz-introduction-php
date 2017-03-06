<?php

require_once 'helper_functions.php';
require_once 'Video.php';


$videos = [
        new Video('self disicpline is a fraud', 'https://www.youtube.com/embed/kI5FYpwZMXU'),
        new Video('How to code', 'https://www.youtube.com/embed/mvK0UzFNw1Q')

];

//dd($videos);

require 'index.view.php';

?>
