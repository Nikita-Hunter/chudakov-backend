<?php // routes/breadcrumbs.php

use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// start questions
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Панель управления', route('dashboard'));
});
Breadcrumbs::for('dashboardQuestionList', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Популярные вопросы', route('admin.question.list'));
});
Breadcrumbs::for('dashboardQuestionStore', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboardQuestionList');
    $trail->push('Добавление вопроса', route('admin.question.create'));
});
//start feedback
Breadcrumbs::for('dashboardFeedbackIndex', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Отзывы клиентов', route('admin.feedback.index'));
});
Breadcrumbs::for('dashboardFeedbackCreate', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboardFeedbackIndex');
    $trail->push('Добавить отзыв', route('admin.feedback.create'));
});
Breadcrumbs::for('dashboardFeedbackEdit', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboardFeedbackIndex');
    $trail->push('Редактировать отзыв', route('admin.feedback.create'));
});
//start show
Breadcrumbs::for('dashboardShowIndex', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Шоу - программы', route('admin.show.index'));
});
Breadcrumbs::for('dashboardShowCreate', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboardShowIndex');
    $trail->push('Создать шоу', route('admin.show.index'));
});
Breadcrumbs::for('dashboardShowEdit', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboardShowIndex');
    $trail->push('Редактировать шоу', route('admin.show.index'));
});

//start gallery
Breadcrumbs::for('dashboardGalleryIndex', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Галерея', route('admin.gallery.index'));
});
