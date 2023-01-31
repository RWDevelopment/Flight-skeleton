<?php

// routes //////////////////
$app->route('/', [ $app->display(), 'home' ]);
$app->route('/about', [ $app->display(), 'about' ]);

// 404 error ///////////////
$app->map('notFound', [ $app->display(), 'e_404' ]);
