<?php

// routes //////////////////
$app->route('/', [ $app->display(), 'home' ]);
$app->route('/about', [ $app->display(), 'about' ]);
$app->route('/api', [ $app->api(), 'render_json' ]);

// 404 error ///////////////
$app->map('notFound', [ $app->display(), 'e_404' ]);
