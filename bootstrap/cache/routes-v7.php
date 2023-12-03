<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HFc5Kx20KcNJiljZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.post-login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/category/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/attribute' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.attribute.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/attribute/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.attribute.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/attribute/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.attribute.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pet.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pet/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pet.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pet/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pet.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/topic' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.topic.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/topic/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.topic.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/topic/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.topic.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/banner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/banner/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/banner/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dang-nhap' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'client.post-login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dang-ky' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'client.post-register',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dang-xuat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ve-chung-toi' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.about',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/lien-he' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.contact',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bai-viet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.blog',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thu-cung' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.pet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thanh-toan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.payment',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thanh-cong' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.payment.success',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thanh-toan/checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.payment.checkout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/admin/(?|user/delete/([^/]++)(*:37)|category/(?|de(?|tail/([^/]++)(*:74)|lete/([^/]++)(*:94))|edit/([^/]++)(*:115)|update/([^/]++)(*:138))|b(?|log/(?|de(?|tail/([^/]++)(*:176)|lete/([^/]++)(*:197))|edit/([^/]++)(*:219)|update/([^/]++)(*:242))|anner/(?|de(?|tail/([^/]++)(*:278)|lete/([^/]++)(*:299))|edit/([^/]++)(*:321)|update/([^/]++)(*:344)))|attribute/(?|de(?|tail/([^/]++)(*:385)|lete/([^/]++)(*:406))|edit/([^/]++)(*:428)|update/([^/]++)(*:451))|pet/(?|de(?|tail/([^/]++)(*:485)|lete/([^/]++)(*:506))|edit/([^/]++)(*:528)|update/([^/]++)(*:551))|topic/(?|de(?|tail/([^/]++)(*:587)|lete/([^/]++)(*:608))|edit/([^/]++)(*:630)|update/([^/]++)(*:653)))|/dang\\-nhap/([^/]++)(?|(*:686)|/callback(*:703))|/bai\\-viet/([^/]++)(*:731))/?$}sDu',
    ),
    3 => 
    array (
      37 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      74 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      94 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      115 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      138 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      176 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      197 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      219 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      242 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      278 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      299 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      321 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      344 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      385 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.attribute.detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      406 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.attribute.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      428 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.attribute.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      451 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.attribute.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      485 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pet.detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      506 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pet.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      528 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pet.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      551 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pet.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      587 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.topic.detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      608 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.topic.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      630 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.topic.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      653 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.topic.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      686 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.login-social',
          ),
          1 => 
          array (
            0 => 'social',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      703 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.login-social.callback',
          ),
          1 => 
          array (
            0 => 'social',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      731 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.blog-detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::HFc5Kx20KcNJiljZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::HFc5Kx20KcNJiljZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\AuthController@login',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\AuthController@login',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.post-login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\AuthController@postLogin',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\AuthController@postLogin',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.post-login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\AuthController@logout',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\AuthController@logout',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\DashboardController@index',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\DashboardController@index',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\UserController@index',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\UserController@index',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\UserController@delete',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\UserController@delete',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\CategoryController@index',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\CategoryController@index',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/category',
        'where' => 
        array (
        ),
        'as' => 'admin.category.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category/detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\CategoryController@detail',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\CategoryController@detail',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/category',
        'where' => 
        array (
        ),
        'as' => 'admin.category.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\CategoryController@create',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\CategoryController@create',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/category',
        'where' => 
        array (
        ),
        'as' => 'admin.category.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/category/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\CategoryController@store',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\CategoryController@store',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/category',
        'where' => 
        array (
        ),
        'as' => 'admin.category.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\CategoryController@edit',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\CategoryController@edit',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/category',
        'where' => 
        array (
        ),
        'as' => 'admin.category.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/category/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\CategoryController@update',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\CategoryController@update',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/category',
        'where' => 
        array (
        ),
        'as' => 'admin.category.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/category/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\CategoryController@delete',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\CategoryController@delete',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/category',
        'where' => 
        array (
        ),
        'as' => 'admin.category.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\BlogController@index',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\BlogController@index',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\BlogController@detail',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\BlogController@detail',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\BlogController@create',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\BlogController@create',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\BlogController@store',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\BlogController@store',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\BlogController@edit',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\BlogController@edit',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\BlogController@update',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\BlogController@update',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\BlogController@delete',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\BlogController@delete',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.attribute.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/attribute',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\AttributeController@index',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\AttributeController@index',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/attribute',
        'where' => 
        array (
        ),
        'as' => 'admin.attribute.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.attribute.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/attribute/detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\AttributeController@detail',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\AttributeController@detail',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/attribute',
        'where' => 
        array (
        ),
        'as' => 'admin.attribute.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.attribute.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/attribute/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\AttributeController@create',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\AttributeController@create',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/attribute',
        'where' => 
        array (
        ),
        'as' => 'admin.attribute.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.attribute.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/attribute/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\AttributeController@store',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\AttributeController@store',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/attribute',
        'where' => 
        array (
        ),
        'as' => 'admin.attribute.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.attribute.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/attribute/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\AttributeController@edit',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\AttributeController@edit',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/attribute',
        'where' => 
        array (
        ),
        'as' => 'admin.attribute.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.attribute.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/attribute/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\AttributeController@update',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\AttributeController@update',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/attribute',
        'where' => 
        array (
        ),
        'as' => 'admin.attribute.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.attribute.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/attribute/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\AttributeController@delete',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\AttributeController@delete',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/attribute',
        'where' => 
        array (
        ),
        'as' => 'admin.attribute.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pet.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\PetController@index',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\PetController@index',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/pet',
        'where' => 
        array (
        ),
        'as' => 'admin.pet.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pet.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pet/detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\PetController@detail',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\PetController@detail',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/pet',
        'where' => 
        array (
        ),
        'as' => 'admin.pet.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pet.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pet/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\PetController@create',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\PetController@create',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/pet',
        'where' => 
        array (
        ),
        'as' => 'admin.pet.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pet.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/pet/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\PetController@store',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\PetController@store',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/pet',
        'where' => 
        array (
        ),
        'as' => 'admin.pet.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pet.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pet/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\PetController@edit',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\PetController@edit',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/pet',
        'where' => 
        array (
        ),
        'as' => 'admin.pet.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pet.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/pet/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\PetController@update',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\PetController@update',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/pet',
        'where' => 
        array (
        ),
        'as' => 'admin.pet.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pet.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/pet/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\PetController@delete',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\PetController@delete',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/pet',
        'where' => 
        array (
        ),
        'as' => 'admin.pet.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.topic.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/topic',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\TopicController@index',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\TopicController@index',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/topic',
        'where' => 
        array (
        ),
        'as' => 'admin.topic.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.topic.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/topic/detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\TopicController@detail',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\TopicController@detail',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/topic',
        'where' => 
        array (
        ),
        'as' => 'admin.topic.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.topic.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/topic/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\TopicController@create',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\TopicController@create',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/topic',
        'where' => 
        array (
        ),
        'as' => 'admin.topic.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.topic.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/topic/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\TopicController@store',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\TopicController@store',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/topic',
        'where' => 
        array (
        ),
        'as' => 'admin.topic.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.topic.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/topic/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\TopicController@edit',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\TopicController@edit',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/topic',
        'where' => 
        array (
        ),
        'as' => 'admin.topic.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.topic.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/topic/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\TopicController@update',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\TopicController@update',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/topic',
        'where' => 
        array (
        ),
        'as' => 'admin.topic.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.topic.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/topic/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\TopicController@delete',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\TopicController@delete',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/topic',
        'where' => 
        array (
        ),
        'as' => 'admin.topic.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.banner.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/banner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\BannerController@index',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\BannerController@index',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/banner',
        'where' => 
        array (
        ),
        'as' => 'admin.banner.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.banner.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/banner/detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\BannerController@detail',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\BannerController@detail',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/banner',
        'where' => 
        array (
        ),
        'as' => 'admin.banner.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.banner.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/banner/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\BannerController@create',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\BannerController@create',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/banner',
        'where' => 
        array (
        ),
        'as' => 'admin.banner.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.banner.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/banner/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\BannerController@store',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\BannerController@store',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/banner',
        'where' => 
        array (
        ),
        'as' => 'admin.banner.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.banner.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/banner/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\BannerController@edit',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\BannerController@edit',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/banner',
        'where' => 
        array (
        ),
        'as' => 'admin.banner.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.banner.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/banner/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\BannerController@update',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\BannerController@update',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/banner',
        'where' => 
        array (
        ),
        'as' => 'admin.banner.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.banner.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/banner/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\BannerController@delete',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\BannerController@delete',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/banner',
        'where' => 
        array (
        ),
        'as' => 'admin.banner.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dang-nhap',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Cms\\Modules\\Core\\Controllers\\AuthController@login',
        'controller' => 'Cms\\Modules\\Core\\Controllers\\AuthController@login',
        'namespace' => 'Cms\\Modules\\Core\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.post-login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dang-nhap',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Cms\\Modules\\Core\\Controllers\\AuthController@postLogin',
        'controller' => 'Cms\\Modules\\Core\\Controllers\\AuthController@postLogin',
        'namespace' => 'Cms\\Modules\\Core\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.post-login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dang-ky',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Cms\\Modules\\Core\\Controllers\\AuthController@register',
        'controller' => 'Cms\\Modules\\Core\\Controllers\\AuthController@register',
        'namespace' => 'Cms\\Modules\\Core\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.post-register' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dang-ky',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Cms\\Modules\\Core\\Controllers\\AuthController@postRegister',
        'controller' => 'Cms\\Modules\\Core\\Controllers\\AuthController@postRegister',
        'namespace' => 'Cms\\Modules\\Core\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.post-register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.login-social' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dang-nhap/{social}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Cms\\Modules\\Core\\Controllers\\AuthController@socialRedirect',
        'controller' => 'Cms\\Modules\\Core\\Controllers\\AuthController@socialRedirect',
        'namespace' => 'Cms\\Modules\\Core\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.login-social',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.login-social.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dang-nhap/{social}/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Cms\\Modules\\Core\\Controllers\\AuthController@socialCallback',
        'controller' => 'Cms\\Modules\\Core\\Controllers\\AuthController@socialCallback',
        'namespace' => 'Cms\\Modules\\Core\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.login-social.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dang-xuat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Cms\\Modules\\Core\\Controllers\\AuthController@logout',
        'controller' => 'Cms\\Modules\\Core\\Controllers\\AuthController@logout',
        'namespace' => 'Cms\\Modules\\Core\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Cms\\Modules\\Core\\Controllers\\ClientController@index',
        'controller' => 'Cms\\Modules\\Core\\Controllers\\ClientController@index',
        'namespace' => 'Cms\\Modules\\Core\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.about' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 've-chung-toi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Cms\\Modules\\Core\\Controllers\\ClientController@about',
        'controller' => 'Cms\\Modules\\Core\\Controllers\\ClientController@about',
        'namespace' => 'Cms\\Modules\\Core\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.about',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.contact' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lien-he',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Cms\\Modules\\Core\\Controllers\\ClientController@contact',
        'controller' => 'Cms\\Modules\\Core\\Controllers\\ClientController@contact',
        'namespace' => 'Cms\\Modules\\Core\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.blog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bai-viet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Cms\\Modules\\Core\\Controllers\\ClientController@blog',
        'controller' => 'Cms\\Modules\\Core\\Controllers\\ClientController@blog',
        'namespace' => 'Cms\\Modules\\Core\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.blog-detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bai-viet/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Cms\\Modules\\Core\\Controllers\\ClientController@blogDetail',
        'controller' => 'Cms\\Modules\\Core\\Controllers\\ClientController@blogDetail',
        'namespace' => 'Cms\\Modules\\Core\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.blog-detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.pet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thu-cung',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Cms\\Modules\\Core\\Controllers\\ClientController@pet',
        'controller' => 'Cms\\Modules\\Core\\Controllers\\ClientController@pet',
        'namespace' => 'Cms\\Modules\\Core\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.pet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.payment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thanh-toan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Core\\Controllers\\ClientController@payment',
        'controller' => 'Cms\\Modules\\Core\\Controllers\\ClientController@payment',
        'namespace' => 'Cms\\Modules\\Core\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.payment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.payment.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thanh-cong',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Core\\Controllers\\ClientController@success',
        'controller' => 'Cms\\Modules\\Core\\Controllers\\ClientController@success',
        'namespace' => 'Cms\\Modules\\Core\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.payment.success',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.payment.checkout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'thanh-toan/checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Core\\Controllers\\ClientController@checkout',
        'controller' => 'Cms\\Modules\\Core\\Controllers\\ClientController@checkout',
        'namespace' => 'Cms\\Modules\\Core\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.payment.checkout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
