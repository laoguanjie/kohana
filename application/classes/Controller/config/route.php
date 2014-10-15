<?php

Route::set('default', 'welcome')
    ->defaults(array(
    'controller' => 'welcome',
    'action'     => 'index',
));

Route::set('link_track', 'link/track(/<action>)')
    ->defaults(array(
    'controller' => 'link_track',
    'action'     => 'test',
));



