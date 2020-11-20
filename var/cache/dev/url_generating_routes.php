<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'admin_index' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin/']], [], []],
    'contact_index' => [[], ['_controller' => 'App\\Controller\\AdminController::indexContact'], [], [['text', '/admin/contact']], [], []],
    'admin_article_index' => [[], ['_controller' => 'App\\Controller\\AdminController::indexArticle'], [], [['text', '/admin/article']], [], []],
    'article_index' => [[], ['_controller' => 'App\\Controller\\ArticleController::index'], [], [['text', '/article']], [], []],
    'article_new' => [[], ['_controller' => 'App\\Controller\\ArticleController::new'], [], [['text', '/admin/article/new']], [], []],
    'article_show' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article']], [], []],
    'article_edit' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article']], [], []],
    'article_delete' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article']], [], []],
    'category_index' => [[], ['_controller' => 'App\\Controller\\CategoryController::index'], [], [['text', '/category/']], [], []],
    'category_new' => [[], ['_controller' => 'App\\Controller\\CategoryController::new'], [], [['text', '/category/new']], [], []],
    'category_show' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], []],
    'category_edit' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], []],
    'category_delete' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], []],
    'contact_new' => [[], ['_controller' => 'App\\Controller\\ContactController::new'], [], [['text', '/contact/']], [], []],
    'contact_show' => [['id'], ['_controller' => 'App\\Controller\\ContactController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/contact']], [], []],
    'contact_edit' => [['id'], ['_controller' => 'App\\Controller\\ContactController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/contact']], [], []],
    'contact_delete' => [['id'], ['_controller' => 'App\\Controller\\ContactController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/contact']], [], []],
    'homepage_index' => [[], ['_controller' => 'App\\Controller\\HomepageController::index'], [], [['text', '/admin/homepage/index']], [], []],
    'homepage_new' => [[], ['_controller' => 'App\\Controller\\HomepageController::new'], [], [['text', '/admin/homepage/new']], [], []],
    'about' => [[], ['_controller' => 'App\\Controller\\HomepageController::about'], [], [['text', '/about']], [], []],
    'homepage_edit' => [['id'], ['_controller' => 'App\\Controller\\HomepageController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/homepage']], [], []],
    'homepage_delete' => [['id'], ['_controller' => 'App\\Controller\\HomepageController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/homepage']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\HomepageController::show'], [], [['text', '/']], [], []],
];
