<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => '功能菜单', 'options' => ['class' => 'header']],
                    ['label' => '普通用户管理', 'icon' => 'fa fa-file-code-o', 'url' => ['userinfo/index']],
                    ['label' => '主办方管理', 'icon' => 'fa fa-dashboard', 'url' => ['official/index']],
                    ['label' => '标签管理','icon' => 'fa fa-file-code-o', 'url' => ['tag/index']],
                    ['label' => '活动分类', 'icon' => 'fa fa-file-code-o', 'url' => ['category/index']],
                    ['label' => '活动管理', 'icon' => 'fa fa-file-code-o', 'url' => ['activity/index']],
//                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Same tools',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'fa fa-circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'fa fa-circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
