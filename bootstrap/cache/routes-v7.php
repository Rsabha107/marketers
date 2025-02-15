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
            '_route' => 'sanctum.csrf-cookie',
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
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
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
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
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
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
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
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sTsmQr3q86iHQ8Fy',
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
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
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
      '/tracki/auth/signup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tracki.auth.signup',
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
      '/admin/signup/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.signup.create',
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
      '/sec/adminuser/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.adminuser.list',
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
      '/updateadminuser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.adminuser.update',
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
      '/createadminuser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.adminuser.create',
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
      '/sec/adminuser/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.adminuser.add',
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
      '/sec/adminuser/add2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.adminuser.add2',
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
      '/sec/roles/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.roles.add',
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
      '/sec/roles/roles/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.roles.list',
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
      '/updaterole' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.roles.update',
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
      '/createrole' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.roles.create',
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
      '/sec/groups/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.groups.add',
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
      '/sec/groups/groups/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.groups.list',
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
      '/updategroup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.groups.update',
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
      '/creategroup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.groups.create',
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
      '/sec/permissions/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.perm.list',
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
      '/updatepermission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.perm.update',
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
      '/createpermission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.perm.create',
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
      '/sec/permissions/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.perm.add',
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
      '/sec/perm/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.perm.import',
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
      '/importnow' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.perm.import.now',
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
      '/sec/rolesetup/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.rolesetup.list',
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
      '/updaterolesetup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.rolesetup.update',
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
      '/createrolesetup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.rolesetup.create',
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
      '/sec/rolesetup/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.rolesetup.add',
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
      '/general/settings/company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general.settings.company',
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
      '/general/settings/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general.settings.update',
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
      '/general/settings/address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general.settings.address',
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
      '/general/settings/address/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general.settings.address.update',
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
      '/general/settings/address/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general.settings.address.add',
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
      '/general/settings/address/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general.settings.address.store',
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
      '/general/settings/currency' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general.settings.currency',
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
      '/general/settings/currency/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general.settings.currency.update',
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
      '/general/settings/currency/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general.settings.currency.add',
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
      '/general/settings/currency/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general.settings.currency.store',
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
      '/procurement/admin/vendor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'procurement.admin.vendor',
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
      '/procurement/vendor/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'procurement.vendor.store',
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
      '/procurement/vendor/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'procurement.vendor.update',
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
      '/procurement/admin/purchase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'procurement.admin.purchase',
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
      '/procurement/purchase/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'procurement.purchase.store',
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
      '/procurement/purchase/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'procurement.purchase.update',
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
      '/procurement/admin/items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'procurement.admin.items',
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
      '/procurement/items/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'procurement.items.store',
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
      '/procurement/items/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'procurement.items.update',
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
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.index',
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
      '/projects/admin/project' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.project',
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
      '/projects/admin/project/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.project.create',
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
      '/projects/admin/project/mv/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.project.mv.create',
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
      '/projects/admin/project/mv' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.project.mv',
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
      '/project/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'project.store',
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
      '/project/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'project.update',
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
      '/projects/admin/project/member/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.project.member.update',
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
      '/projects/admin/board/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.board.update',
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
      '/projects/admin/project/update/client' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.project.update.client',
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
      '/projects/admin/task' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.task',
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
      '/projects/admin/task/file/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.task.file.store',
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
      '/projects/admin/task/note/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.task.note.store',
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
      '/projects/admin/task/subtask' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.task.subtask.store',
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
      '/projects/admin/task/status/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.task.status.update',
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
      '/projects/admin/task/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.task.store',
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
      '/projects/admin/task/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.task.update',
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
      '/projects/admin/task/template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.task.template.index',
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
      '/projects/admin/task/template/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.task.template.list',
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
      '/projects/admin/task/template/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.task.template.update',
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
      '/projects/admin/task/template/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.task.template.store',
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
      '/projects/admin/setting/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.category.index',
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
      '/projects/admin/setting/category/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.category.list',
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
      '/projects/admin/setting/category/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.category.update',
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
      '/projects/admin/setting/category/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.category.store',
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
      '/projects/admin/setting/audience' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.audience.index',
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
      '/projects/admin/setting/audience/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.audience.list',
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
      '/projects/admin/setting/audience/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.audience.update',
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
      '/projects/admin/setting/audience/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.audience.store',
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
      '/projects/admin/setting/tag' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.tag.index',
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
      '/projects/admin/setting/tag/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.tag.list',
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
      '/projects/admin/setting/tag/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.tag.update',
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
      '/projects/admin/setting/tag/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.tag.store',
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
      '/projects/admin/setting/venue' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.venue.index',
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
      '/projects/admin/setting/venue/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.venue.list',
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
      '/projects/admin/setting/venue/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.venue.update',
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
      '/projects/admin/setting/venue/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.venue.store',
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
      '/projects/admin/setting/location' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.location.index',
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
      '/projects/admin/setting/location/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.location.list',
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
      '/projects/admin/setting/location/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.location.update',
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
      '/projects/admin/setting/location/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.location.store',
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
      '/projects/admin/setting/projecttype' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.projecttype.index',
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
      '/projects/admin/setting/projecttype/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.projecttype.list',
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
      '/projects/admin/setting/projecttype/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.projecttype.update',
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
      '/projects/admin/setting/projecttype/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.projecttype.store',
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
      '/projects/admin/setting/departments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.departments',
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
      '/projects/admin/setting/funcareas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.funcareas',
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
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.dashboard',
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
      '/hr/admin/employee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.employee',
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
      '/hr/admin/employee/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.employee.list',
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
      '/hr/admin/employee/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.employee.update',
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
      '/hr/admin/employee/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.employee.create',
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
      '/hr/admin/employee/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.employee.store',
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
      '/hr/admin/bank' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.bank',
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
      '/hr/admin/bank/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.bank.add',
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
      '/hr/admin/bank/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.bank.store',
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
      '/hr/admin/bank/bank/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.bank.update',
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
      '/hr/admin/file/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.file.store',
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
      '/hr/admin/files' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.files',
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
      '/hr/admin/files/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.files.list',
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
      '/hr/admin/files/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.files.update',
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
      '/hr/admin/address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.address',
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
      '/hr/admin/address/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.address.update',
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
      '/hr/admin/address/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.address.add',
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
      '/hr/admin/address/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.address.store',
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
      '/hr/admin/leave' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.leave',
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
      '/hr/admin/leave/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.leave.add',
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
      '/hr/admin/leave/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.leave.store',
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
      '/hr/admin/leave/leave/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.leave.update',
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
      '/hr/admin/leave/status/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.leave.status.update',
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
      '/hr/admin/salary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.salary',
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
      '/hr/admin/salary/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.salary.add',
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
      '/hr/admin/salary/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.salary.store',
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
      '/hr/admin/salary/salary/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.salary.update',
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
      '/hr/admin/emergency' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.emergency',
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
      '/hr/admin/emergency/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.emergency.add',
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
      '/hr/admin/emergency/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.emergency.store',
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
      '/hr/admin/emergency/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.emergency.update',
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
      '/hr/admin/timesheet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.timesheet',
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
      '/hr/admin/timesheet/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.timesheet.add',
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
      '/hr/admin/timesheet/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.timesheet.store',
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
      '/hr/admin/timesheet/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.timesheet.update',
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
      '/hr/admin/timesheet/status/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.timesheet.status.update',
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
      '/hr/admin/timesheet/entries/status/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.timesheet.entries.status.update',
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
      '/hr/admin/letter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.letter',
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
      '/hr/admin/letter/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.letter.list',
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
      '/hr/admin/letter/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.letter.create',
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
      '/hr/admin/letter/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.letter.store',
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
      '/hr/admin/letter/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.letter.update',
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
      '/hr/admin/letter/generate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.letter.generate',
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
      '/hr/admin/letter/generate/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.letter.generate.list',
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
      '/hr/admin/letter/generate/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.letter.generate.create',
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
      '/hr/admin/letter/generate/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.letter.generate.store',
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
      '/hr/admin/setting/addresstype' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.addresstype',
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
      '/hr/admin/setting/addresstype/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.addresstype.list',
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
      '/hr/admin/setting/addresstype/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.addresstype.update',
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
      '/hr/admin/setting/addresstype/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.addresstype.store',
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
      '/hr/admin/setting/designations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.designations',
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
      '/hr/admin/setting/designations/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.designations.list',
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
      '/hr/admin/setting/designations/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.designations.update',
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
      '/hr/admin/setting/designations/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.designations.store',
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
      '/hr/admin/setting/joblevel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.joblevel',
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
      '/hr/admin/setting/joblevel/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.joblevel.list',
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
      '/hr/admin/setting/joblevel/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.joblevel.update',
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
      '/hr/admin/setting/joblevel/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.joblevel.store',
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
      '/hr/admin/setting/sponsorship' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.sponsorship',
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
      '/hr/admin/setting/sponsorship/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.sponsorship.list',
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
      '/hr/admin/setting/sponsorship/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.sponsorship.update',
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
      '/hr/admin/setting/sponsorship/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.sponsorship.store',
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
      '/hr/admin/setting/contracttype' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.contracttype',
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
      '/hr/admin/setting/contracttype/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.contracttype.list',
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
      '/hr/admin/setting/contracttype/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.contracttype.update',
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
      '/hr/admin/setting/contracttype/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.contracttype.store',
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
      '/hr/admin/setting/funcareas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.funcareas',
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
      '/hr/admin/setting/funcareas/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.funcareas.list',
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
      '/hr/admin/setting/funcareas/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.funcareas.update',
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
      '/hr/admin/setting/funcareas/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.funcareas.store',
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
      '/hr/admin/setting/gender' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.gender',
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
      '/hr/admin/setting/gender/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.gender.list',
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
      '/hr/admin/setting/gender/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.gender.update',
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
      '/hr/admin/setting/gender/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.gender.store',
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
      '/hr/admin/setting/prefix' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.prefix',
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
      '/hr/admin/setting/prefix/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.prefix.list',
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
      '/hr/admin/setting/prefix/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.prefix.update',
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
      '/hr/admin/setting/prefix/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.prefix.store',
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
      '/hr/admin/setting/marital' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.marital',
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
      '/hr/admin/setting/marital/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.marital.list',
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
      '/hr/admin/setting/marital/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.marital.update',
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
      '/hr/admin/setting/marital/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.marital.store',
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
      '/hr/admin/setting/countries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.countries',
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
      '/hr/admin/setting/countries/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.countries.list',
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
      '/hr/admin/setting/countries/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.countries.update',
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
      '/hr/admin/setting/countries/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.countries.store',
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
      '/hr/admin/setting/nationalities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.nationalities',
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
      '/hr/admin/setting/nationalities/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.nationalities.list',
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
      '/hr/admin/setting/nationalities/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.nationalities.update',
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
      '/hr/admin/setting/nationalities/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.nationalities.store',
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
      '/hr/admin/setting/departments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.departments',
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
      '/hr/admin/setting/departments/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.departments.list',
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
      '/hr/admin/setting/departments/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.departments.update',
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
      '/hr/admin/setting/departments/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.departments.store',
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
      '/hr/admin/setting/entities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.entities',
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
      '/hr/admin/setting/entities/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.entities.list',
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
      '/hr/admin/setting/entities/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.entities.update',
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
      '/hr/admin/setting/entities/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.entities.store',
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
      '/hr/admin/setting/directorates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.directorates',
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
      '/hr/admin/setting/directorates/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.directorates.list',
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
      '/hr/admin/setting/directorates/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.directorates.update',
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
      '/hr/admin/setting/directorates/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.directorates.store',
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
      '/hr/admin/setting/relationships' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.relationships',
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
      '/hr/admin/setting/relationships/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.relationships.list',
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
      '/hr/admin/setting/relationships/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.relationships.update',
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
      '/hr/admin/setting/relationships/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.relationships.store',
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
      '/hr/admin/setting/leavetypes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.leavetypes',
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
      '/hr/admin/setting/leavetypes/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.leavetypes.list',
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
      '/hr/admin/setting/leavetypes/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.leavetypes.update',
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
      '/hr/admin/setting/leavetypes/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.leavetypes.store',
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
      '/hr/admin/setting/element' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.element',
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
      '/hr/admin/setting/element/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.element.list',
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
      '/hr/admin/setting/element/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.element.update',
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
      '/hr/admin/setting/element/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.element.store',
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
      '/hr/admin/setting/element/classifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.element.classifications',
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
      '/hr/admin/setting/element/classifications/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.element.classifications.list',
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
      '/hr/admin/setting/element/classifications/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.element.classifications.update',
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
      '/hr/admin/setting/element/classifications/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.element.classifications.store',
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
      '/hr/admin/setting/elementset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.elementset',
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
      '/hr/admin/setting/elementset/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.elementset.list',
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
      '/hr/admin/setting/elementset/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.elementset.update',
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
      '/hr/admin/setting/elementset/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.elementset.store',
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
      '/hr/admin/setting/elementset/assignment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.elementset.assignment',
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
      '/hr/admin/setting/paycycle' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.paycycle',
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
      '/hr/admin/setting/paycycle/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.paycycle.list',
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
      '/hr/admin/setting/paycycle/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.paycycle.update',
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
      '/hr/admin/setting/paycycle/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.paycycle.store',
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
      '/hr/admin/setting/invoice/notes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.invoice.notes',
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
      '/hr/admin/setting/invoice/notes/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.invoice.notes.list',
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
      '/hr/admin/setting/invoice/notes/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.invoice.notes.update',
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
      '/hr/admin/setting/invoice/notes/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.invoice.notes.store',
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
      '/hr/admin/setting/audit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.audit',
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
      '/hr/admin/setting/audit/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.audit.list',
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
      '/hr/emp/timesheet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.emp.timesheet',
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
      '/hr/emp/timesheet/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.emp.timesheet.add',
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
      '/hr/emp/timesheet/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.emp.timesheet.store',
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
      '/hr/emp/timesheet/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.emp.timesheet.update',
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
      '/hr/emp/timesheet/status/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.emp.timesheet.status.update',
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
      '/hr/emp/timesheet/entries/status/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.emp.timesheet.entries.status.update',
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
      '/hr/emp/emergency' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.emp.emergency',
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
      '/hr/emp/emergency/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.emp.emergency.add',
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
      '/hr/emp/emergency/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.emp.emergency.store',
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
      '/hr/emp/emergency/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.emp.emergency.update',
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
      '/hr/manager' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.manager',
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
      '/hr/manager/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.manager.list',
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
      '/hr/manager/timesheet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.manager.timesheet',
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
      '/hr/manager/timesheet/status/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.manager.timesheet.status.update',
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
      '/hr/payroll/timesheet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.payroll.timesheet',
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
      '/hr/payroll/timesheet/missing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.payroll.timesheet.missing',
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
      '/hr/payroll/timesheet/missing/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.payroll.timesheet.missing.list',
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
      '/hr/payroll/bank' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.payroll.bank',
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
      '/hr/payroll/bank/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.payroll.bank.list',
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
      '/hr/payroll/payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.payroll.payment',
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
      '/hr/payroll/payment/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.payroll.payment.list',
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
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
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
            '_route' => 'tracki.auth.login',
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
      '/auth/signin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.signin',
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
      '/tracki/auth/forgot' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tracki.auth.forgot',
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
      '/forget-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forgot.password.post',
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
      '/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reset.password.post',
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
      '/send-mail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vC38f5lAf3GDhS1m',
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
      '/send-mail2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oGbhhJNddzJSD0Zp',
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
      '/send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::edOSc8aY6e2PMVWB',
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
      '/whatsapp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'whatsapp.send',
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
    ),
    2 => 
    array (
      0 => '{^(?|/api/data/([^/]++)(*:25)|/sec/(?|adminuser/([^/]++)/(?|edit(*:66)|delete(*:79))|roles(?|/([^/]++)/(?|edit(*:112)|delete(*:126))|etup/([^/]++)/(?|edit(*:156)|delete(*:170)))|groups/([^/]++)/(?|edit(*:203)|delete(*:217))|perm/([^/]++)/(?|edit(*:247)|delete(*:261)))|/g(?|eneral/settings/(?|address/(?|list(?:/([^/]++))?(*:324)|mv/edit/([^/]++)(*:348)|delete/([^/]++)(*:371))|currency/(?|list(?:/([^/]++))?(*:410)|get/([^/]++)(*:430)|delete/([^/]++)(*:453)))|antt(?|xx/([^/]++)(*:481)|/([^/]++)(*:498)))|/pro(?|curement/admin/(?|vendor/(?|list(?:/([^/]++))?(*:561)|mv/get/([^/]++)(*:584)|delete/([^/]++)(*:607))|purchase(?|/(?|list(?:/([^/]++))?(*:649)|mv/get/([^/]++)(*:672)|delete/([^/]++)(*:695)|po/pdf(?:/([^/]++))?(*:723))|\\-order/([^/]++)(*:748))|item(?|/get/([^/]++)(*:777)|s/(?|list(?:/([^/]++))?(*:808)|mv/edit/([^/]++)(*:832)|delete/([^/]++)(*:855))))|jects/admin/(?|project/(?|d(?|uplicate/([^/]++)(*:913)|/([^/]++)(*:930)|elete/([^/]++)(*:952))|list(?:/([^/]++))?(*:979)|employee/list(?:/([^/]++))?(*:1014)|get/([^/]++)(*:1035)|m(?|v/get/([^/]++)(*:1062)|ember/(?|list(?:/([^/]++))?(*:1098)|([^/]++)/delete/([^/]++)(*:1131)))|restore/([^/]++)(*:1158))|task/(?|list(?:/([^/]++))?(*:1194)|employee/list(?:/([^/]++))?(*:1230)|overview/([^/]++)(*:1256)|note(?|s/([^/]++)(*:1282)|/([^/]++)/delete(*:1307))|s(?|ubtask/(?|([^/]++)(?|(*:1342)|/overview(*:1360))|update_status(*:1383))|tatus/edit/([^/]++)(*:1412))|file(?|s/([^/]++)(*:1439)|/([^/]++)/delete(*:1464))|delete/([^/]++)(*:1489)|get(?|projectassigned/([^/]++)(*:1528)|/([^/]++)(*:1546))|mv/edit/([^/]++)(*:1572)|template/(?|edit/([^/]++)(*:1606)|delete/([^/]++)(*:1630)))|setting/(?|category/(?|edit/([^/]++)(*:1677)|delete/([^/]++)(*:1701))|audience/(?|edit/([^/]++)(*:1736)|delete/([^/]++)(*:1760))|tag/(?|edit/([^/]++)(*:1790)|delete/([^/]++)(*:1814))|venue/(?|edit/([^/]++)(*:1846)|delete/([^/]++)(*:1870))|location/(?|edit/([^/]++)(*:1905)|delete/([^/]++)(*:1929))|projecttype/(?|edit/([^/]++)(*:1967)|delete/([^/]++)(*:1991)))))|/hr/(?|admin/(?|em(?|ployee/(?|profile/([^/]++)(*:2051)|mv/(?|edit/([^/]++)(*:2079)|duplicate/([^/]++)(*:2106))|delete/([^/]++)(*:2131)|restore/([^/]++)(*:2156))|ergency/(?|list(?:/([^/]++))?(*:2195)|delete/([^/]++)(*:2219)|get/([^/]++)(*:2240)|mv/edit/([^/]++)(*:2265)))|bank/(?|list(?:/([^/]++))?(*:2302)|mv/(?|edit/([^/]++)(*:2330)|attachment/([^/]++)(*:2358))|delete/([^/]++)(*:2383))|file(?|s/(?|get/([^/]++)(*:2417)|delete/([^/]++)(*:2441))|/serve/([^/]++)(*:2466))|address/(?|list(?:/([^/]++))?(*:2505)|mv/edit/([^/]++)(*:2530)|delete/([^/]++)(*:2554))|le(?|ave/(?|list(?:/([^/]++))?(*:2594)|delete/([^/]++)(*:2618)|mv/edit/([^/]++)(*:2643)|status/edit/([^/]++)(*:2672))|tter/(?|show/([^/]++)(*:2703)|edit/([^/]++)(*:2725)|delete/([^/]++)(*:2749)|generate/(?|gettemplate/([^/]++)(*:2790)|empvar/([^/]++)(*:2814)|pdf/([^/]++)(*:2835)|show/([^/]++)(*:2857))))|s(?|alary/(?|list(?:/([^/]++))?(*:2900)|delete/([^/]++)(*:2924)|mv/edit/([^/]++)(*:2949))|etting/(?|addresstype/(?|get/([^/]++)(*:2996)|delete/([^/]++)(*:3020))|d(?|e(?|signations/(?|get/([^/]++)(*:3064)|delete/([^/]++)(*:3088))|partments/(?|get/([^/]++)(*:3123)|delete/([^/]++)(*:3147)))|irectorates/(?|get/([^/]++)(*:3185)|delete/([^/]++)(*:3209)))|joblevel/(?|get/([^/]++)(*:3244)|delete/([^/]++)(*:3268))|sponsorship/(?|get/([^/]++)(*:3305)|delete/([^/]++)(*:3329))|co(?|ntracttype/(?|get/([^/]++)(*:3370)|delete/([^/]++)(*:3394))|untries/(?|get/([^/]++)(*:3427)|delete/([^/]++)(*:3451)))|funcareas/(?|get/([^/]++)(*:3487)|delete/([^/]++)(*:3511))|gender/(?|get/([^/]++)(*:3543)|delete/([^/]++)(*:3567))|p(?|refix/(?|get/([^/]++)(*:3602)|delete/([^/]++)(*:3626))|aycycle/(?|get/([^/]++)(*:3659)|delete/([^/]++)(*:3683)))|marital/(?|get/([^/]++)(*:3717)|delete/([^/]++)(*:3741))|nationalities/(?|get/([^/]++)(*:3780)|delete/([^/]++)(*:3804))|e(?|ntities/(?|get/([^/]++)(*:3841)|delete/([^/]++)(*:3865))|lement(?|/(?|get/([^/]++)(*:3900)|delete/([^/]++)(*:3924)|classifications/(?|get/([^/]++)(*:3964)|delete/([^/]++)(*:3988)))|set/(?|get/([^/]++)(*:4018)|delete/([^/]++)(*:4042))))|relationships/(?|get/([^/]++)(*:4083)|delete/([^/]++)(*:4107))|leavetypes/(?|get/([^/]++)(*:4143)|delete/([^/]++)(*:4167))|invoice/notes/(?|get/([^/]++)(*:4206)|delete/([^/]++)(*:4230))))|timesheet/(?|invoice/([^/]++)(*:4271)|list(?:/([^/]++))?(*:4298)|delete/([^/]++)(*:4322)|mv/edit/([^/]++)(*:4347)|status/edit/([^/]++)(*:4376)|entries/(?|([^/]++)(*:4404)|add/([^/]++)(*:4425)|list/([^/]++)(*:4447)|st(?|ore(*:4464)|atus/edit/([^/]++)(*:4491))|update(*:4507)|get/([^/]++)(*:4528))))|emp/(?|timesheet/(?|invoice/([^/]++)(*:4576)|list(?:/([^/]++))?(*:4603)|delete/([^/]++)(*:4627)|mv/edit/([^/]++)(*:4652)|status/edit/([^/]++)(*:4681)|entries/(?|([^/]++)(*:4709)|add/([^/]++)(*:4730)|list/([^/]++)(*:4752)|st(?|ore(*:4769)|atus/edit/([^/]++)(*:4796))|update(*:4812)|get/([^/]++)(*:4833)))|emergency/(?|list(?:/([^/]++))?(*:4875)|delete/([^/]++)(*:4899)|get/([^/]++)(*:4920)|mv/edit/([^/]++)(*:4945)))|manager/timesheet/(?|list(?:/([^/]++))?(*:4995)|status/edit/([^/]++)(*:5024)|entries/(?|list(?:/([^/]++))?(*:5062)|mv/get/([^/]++)(*:5086)))|payroll/timesheet/(?|review/([^/]++)(*:5133)|list(?:/([^/]++))?(*:5160)))|/tracki/auth/reset/([^/]++)(*:5198))/?$}sDu',
    ),
    3 => 
    array (
      25 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uNbEnX1ra2qMLlTM',
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
      66 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.adminuser.edit',
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
          5 => false,
          6 => NULL,
        ),
      ),
      79 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.adminuser.delete',
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
          5 => false,
          6 => NULL,
        ),
      ),
      112 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.roles.edit',
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
          5 => false,
          6 => NULL,
        ),
      ),
      126 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.roles.delete',
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
          5 => false,
          6 => NULL,
        ),
      ),
      156 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.rolesetup.edit',
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
          5 => false,
          6 => NULL,
        ),
      ),
      170 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.rolesetup.delete',
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
          5 => false,
          6 => NULL,
        ),
      ),
      203 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.groups.edit',
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
          5 => false,
          6 => NULL,
        ),
      ),
      217 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.groups.delete',
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
          5 => false,
          6 => NULL,
        ),
      ),
      247 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.perm.edit',
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
          5 => false,
          6 => NULL,
        ),
      ),
      261 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec.perm.delete',
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
          5 => false,
          6 => NULL,
        ),
      ),
      324 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general.settings.address.list',
            'id' => NULL,
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
      348 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general.settings.address.mv.edit',
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
      371 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general.settings.address.delete',
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
      410 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general.settings.currency.list',
            'id' => NULL,
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
      430 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general.settings.currency.get',
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
      453 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general.settings.currency.delete',
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
      481 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ganttxxx',
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
      498 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'project.gantt.index',
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
      561 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'procurement.admin.vendor.list',
            'id' => NULL,
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
      584 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'procurement.admin.vendor.mv.get',
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
      607 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'procurement.admin.vendor.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      649 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'procurement.admin.purchase.list',
            'id' => NULL,
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
      672 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'procurement.admin.purchase.mv.get',
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
      695 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'procurement.admin.purchase.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      723 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'procurement.admin.purchase.po.pdf',
            'id' => NULL,
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
      748 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'procurement.admin.purchase.order',
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
      777 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'procurement.admin.item.get',
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
      808 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'procurement.admin.items.list',
            'id' => NULL,
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
      832 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'procurement.admin.items.mv.get',
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
      855 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'procurement.admin.items.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      913 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.project.duplicate',
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
      930 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.project.d',
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
      952 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.project.delete',
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
      979 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.project.list',
            'id' => NULL,
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
      1014 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.employee.project.list',
            'id' => NULL,
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
      1035 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.project.get',
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
      1062 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.project.get.mv',
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
      1098 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.project.member.list',
            'id' => NULL,
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
      1131 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.project.member.delete',
          ),
          1 => 
          array (
            0 => 'pid',
            1 => 'id',
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
      1158 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.project.restore',
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
      1194 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.task.list',
            'id' => NULL,
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
      1230 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.employee.task.list',
            'id' => NULL,
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
      1256 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.task.overview',
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
      1282 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.task.notes',
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
      1307 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.task.note.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1342 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.task.subtask',
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
      1360 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.task.subtask.overview',
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
          5 => false,
          6 => NULL,
        ),
      ),
      1383 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.task.subtask.update_status',
          ),
          1 => 
          array (
          ),
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
      1412 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.task.status.edit',
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
      1439 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.task.files',
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
      1464 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.task.file.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1489 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.task.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1528 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.task.getprojectassigned',
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
      1546 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.task.get',
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
      1572 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.task.mv.edit',
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
      1606 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.task.template.edit',
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
      1630 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.task.template.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1677 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.category.edit',
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
      1701 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.category.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1736 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.audience.edit',
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
      1760 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.audience.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1790 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.tag.edit',
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
      1814 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.tag.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1846 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.venue.edit',
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
      1870 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.venue.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1905 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.location.edit',
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
      1929 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.location.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1967 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.projecttype.edit',
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
      1991 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.admin.setting.projecttype.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2051 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.employee.profile',
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
      2079 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.employee.rv.edit',
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
      2106 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.employee.mv.duplicate',
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
      2131 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.employee.delete',
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
      2156 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.employee.restore',
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
      2195 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.emergency.list',
            'id' => NULL,
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
      2219 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.emergency.delete',
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
      2240 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.emergency.get',
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
      2265 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.emergency.rv.edit',
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
      2302 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.bank.list',
            'id' => NULL,
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
      2330 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.bank.rv.edit',
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
      2358 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.bank.rv.attachment',
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
      2383 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.bank.delete',
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
      2417 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.files.get',
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
      2441 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.files.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2466 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.file.serve',
          ),
          1 => 
          array (
            0 => 'file',
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
      2505 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.address.list',
            'id' => NULL,
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
      2530 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.address.mv.edit',
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
      2554 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.address.delete',
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
      2594 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.leave.list',
            'id' => NULL,
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
      2618 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.leave.delete',
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
      2643 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.leave.rv.edit',
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
      2672 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.leave.status.edit',
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
      2703 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.letter.show',
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
      2725 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.letter.edit',
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
      2749 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.letter.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2790 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.letter.generate.gettemplate',
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
      2814 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.letter.generate.empvar',
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
      2835 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.letter.generate.pdf',
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
      2857 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.letter.generate.show',
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
      2900 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.salary.list',
            'id' => NULL,
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
      2924 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.salary.delete',
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
      2949 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.salary.rv.edit',
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
      2996 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.addresstype.get',
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
      3020 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.addresstype.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3064 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.designations.get',
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
      3088 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.designations.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3123 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.departments.get',
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
      3147 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.departments.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3185 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.directorates.get',
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
      3209 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.directorates.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3244 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.joblevel.get',
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
      3268 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.joblevel.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3305 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.sponsorship.get',
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
      3329 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.sponsorship.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3370 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.contracttype.get',
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
      3394 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.contracttype.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3427 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.countries.get',
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
      3451 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.countries.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3487 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.funcareas.get',
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
      3511 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.funcareas.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3543 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.gender.get',
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
      3567 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.gender.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3602 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.prefix.get',
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
      3626 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.prefix.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3659 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.paycycle.get',
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
      3683 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.paycycle.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3717 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.marital.get',
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
      3741 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.marital.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3780 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.nationalities.get',
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
      3804 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.nationalities.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3841 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.entities.get',
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
      3865 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.entities.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3900 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.element.get',
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
      3924 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.element.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3964 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.element.classifications.get',
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
      3988 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.element.classifications.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4018 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.elementset.get',
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
      4042 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.elementset.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4083 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.relationships.get',
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
      4107 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.relationships.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4143 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.leavetypes.get',
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
      4167 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.leavetypes.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4206 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.invoice.notes.get',
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
      4230 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.setting.invoice.notes.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4271 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.timesheet.invoice.pdf',
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
      4298 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.timesheet.list',
            'id' => NULL,
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
      4322 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.timesheet.delete',
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
      4347 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.timesheet.rv.edit',
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
      4376 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.timesheet.status.edit',
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
      4404 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.timesheet.entries',
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
      4425 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.timesheet.entries.add',
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
      4447 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.timesheet.entries.list',
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
      4464 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.timesheet.entries.store',
          ),
          1 => 
          array (
          ),
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
      4491 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.timesheet.entries.status.edit',
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
      4507 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.timesheet.entries.update',
          ),
          1 => 
          array (
          ),
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
      4528 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.admin.timesheet.entries.rv.edit',
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
      4576 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.emp.timesheet.invoice.pdf',
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
      4603 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.emp.timesheet.list',
            'id' => NULL,
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
      4627 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.emp.timesheet.delete',
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
      4652 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.emp.timesheet.rv.edit',
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
      4681 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.emp.timesheet.status.edit',
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
      4709 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.emp.timesheet.entries',
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
      4730 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.emp.timesheet.entries.add',
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
      4752 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.emp.timesheet.entries.list',
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
      4769 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.emp.timesheet.entries.store',
          ),
          1 => 
          array (
          ),
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
      4796 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.emp.timesheet.entries.status.edit',
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
      4812 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.emp.timesheet.entries.update',
          ),
          1 => 
          array (
          ),
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
      4833 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.emp.timesheet.entries.rv.edit',
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
      4875 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.emp.emergency.list',
            'id' => NULL,
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
      4899 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.emp.emergency.delete',
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
      4920 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.emp.emergency.get',
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
      4945 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.emp.emergency.rv.edit',
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
      4995 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.manager.timesheet.list',
            'id' => NULL,
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
      5024 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.manager.timesheet.status.edit',
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
      5062 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.manager.timesheet.entries.list',
            'id' => NULL,
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
      5086 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tracki.employee.timesheet.manager.entries.mv.get',
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
      5133 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.payroll.timesheet.review',
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
      5160 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hr.payroll.timesheet.list',
            'id' => NULL,
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
      5198 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reset.password.get',
          ),
          1 => 
          array (
            0 => 'token',
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
    'sanctum.csrf-cookie' => 
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
        'as' => 'sanctum.csrf-cookie',
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
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
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
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
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
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
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
    'generated::sTsmQr3q86iHQ8Fy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000077b0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::sTsmQr3q86iHQ8Fy',
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
    'generated::uNbEnX1ra2qMLlTM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/data/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\GanttController@get',
        'controller' => 'App\\Http\\Controllers\\GanttController@get',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::uNbEnX1ra2qMLlTM',
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
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@logout',
        'controller' => 'App\\Http\\Controllers\\AdminController@logout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
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
    'tracki.auth.signup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tracki/auth/signup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'roles:admin',
          4 => 'role:SuperAdmin',
          5 => 'prevent-back-history',
          6 => 'XssSanitizer',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\AdminController@signUp',
        'controller' => 'App\\Http\\Controllers\\AdminController@signUp',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'tracki.auth.signup',
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
    'admin.signup.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/signup/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'roles:admin',
          4 => 'role:SuperAdmin',
          5 => 'prevent-back-history',
          6 => 'XssSanitizer',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\AdminController@createUser',
        'controller' => 'App\\Http\\Controllers\\AdminController@createUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.signup.create',
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
    'sec.adminuser.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sec/adminuser/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@listAdminUser',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@listAdminUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.adminuser.list',
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
    'sec.adminuser.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'updateadminuser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@updateAdminUser',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@updateAdminUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.adminuser.update',
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
    'sec.adminuser.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'createadminuser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@createAdminUser',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@createAdminUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.adminuser.create',
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
    'sec.adminuser.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sec/adminuser/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@editAdminUser',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@editAdminUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.adminuser.edit',
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
    'sec.adminuser.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sec/adminuser/{id}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@deleteAdminUser',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@deleteAdminUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.adminuser.delete',
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
    'sec.adminuser.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sec/adminuser/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@addAdminUser',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@addAdminUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.adminuser.add',
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
    'sec.adminuser.add2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sec/adminuser/add2',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@addAdminUser2',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@addAdminUser2',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.adminuser.add2',
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
    'sec.roles.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sec/roles/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController',
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:75:"function () {
                return \\view(\'/sec/roles/add\');
            }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000078d0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.roles.add',
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
    'sec.roles.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sec/roles/roles/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@listRole',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@listRole',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.roles.list',
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
    'sec.roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'updaterole',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@updateRole',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@updateRole',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.roles.update',
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
    'sec.roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'createrole',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@createRole',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@createRole',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.roles.create',
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
    'sec.roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sec/roles/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@editRole',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@editRole',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.roles.edit',
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
    'sec.roles.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sec/roles/{id}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@deleteRole',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@deleteRole',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.roles.delete',
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
    'sec.groups.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sec/groups/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController',
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:76:"function () {
                return \\view(\'/sec/groups/add\');
            }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007940000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.groups.add',
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
    'sec.groups.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sec/groups/groups/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@listGroup',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@listGroup',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.groups.list',
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
    'sec.groups.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'updategroup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@updateGroup',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@updateGroup',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.groups.update',
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
    'sec.groups.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'creategroup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@createGroup',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@createGroup',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.groups.create',
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
    'sec.groups.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sec/groups/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@editGroup',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@editGroup',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.groups.edit',
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
    'sec.groups.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sec/groups/{id}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@deleteGroup',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@deleteGroup',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.groups.delete',
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
    'sec.perm.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sec/permissions/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@listPermission',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@listPermission',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.perm.list',
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
    'sec.perm.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'updatepermission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@updatePermission',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@updatePermission',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.perm.update',
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
    'sec.perm.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'createpermission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@createPermission',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@createPermission',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.perm.create',
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
    'sec.perm.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sec/perm/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@editPermission',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@editPermission',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.perm.edit',
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
    'sec.perm.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sec/perm/{id}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@deletePermission',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@deletePermission',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.perm.delete',
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
    'sec.perm.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sec/permissions/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@addPermission',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@addPermission',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.perm.add',
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
    'sec.perm.import' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sec/perm/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@ImportPermission',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@ImportPermission',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.perm.import',
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
    'sec.perm.import.now' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'importnow',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@ImportNowPermission',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@ImportNowPermission',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.perm.import.now',
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
    'sec.rolesetup.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sec/rolesetup/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@listRolePermission',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@listRolePermission',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.rolesetup.list',
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
    'sec.rolesetup.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'updaterolesetup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@updateRolePermission',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@updateRolePermission',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.rolesetup.update',
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
    'sec.rolesetup.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'createrolesetup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@createRolePermission',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@createRolePermission',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.rolesetup.create',
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
    'sec.rolesetup.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sec/rolesetup/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@editRolePermission',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@editRolePermission',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.rolesetup.edit',
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
    'sec.rolesetup.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sec/rolesetup/{id}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@deleteRolePermission',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@deleteRolePermission',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.rolesetup.delete',
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
    'sec.rolesetup.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sec/rolesetup/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@addRolePermission',
        'controller' => 'App\\Http\\Controllers\\hr\\Security\\RoleController@addRolePermission',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sec.rolesetup.add',
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
    'general.settings.company' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'general/settings/company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:purchase.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\GeneralSettings\\CompanyController@index',
        'controller' => 'App\\Http\\Controllers\\GeneralSettings\\CompanyController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general.settings.company',
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
    'general.settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'general/settings/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\GeneralSettings\\CompanyController@update',
        'controller' => 'App\\Http\\Controllers\\GeneralSettings\\CompanyController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general.settings.update',
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
    'general.settings.address' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'general/settings/address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\GeneralSettings\\CompanyAddressController@index',
        'controller' => 'App\\Http\\Controllers\\GeneralSettings\\CompanyAddressController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general.settings.address',
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
    'general.settings.address.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'general/settings/address/list/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\GeneralSettings\\CompanyAddressController@list',
        'controller' => 'App\\Http\\Controllers\\GeneralSettings\\CompanyAddressController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general.settings.address.list',
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
    'general.settings.address.mv.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'general/settings/address/mv/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\GeneralSettings\\CompanyAddressController@getAddressEditView',
        'controller' => 'App\\Http\\Controllers\\GeneralSettings\\CompanyAddressController@getAddressEditView',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general.settings.address.mv.edit',
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
    'general.settings.address.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'general/settings/address/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\GeneralSettings\\CompanyAddressController@update',
        'controller' => 'App\\Http\\Controllers\\GeneralSettings\\CompanyAddressController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general.settings.address.update',
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
    'general.settings.address.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'general/settings/address/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.create',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\GeneralSettings\\CompanyAddressController@add',
        'controller' => 'App\\Http\\Controllers\\GeneralSettings\\CompanyAddressController@add',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general.settings.address.add',
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
    'general.settings.address.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'general/settings/address/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\GeneralSettings\\CompanyAddressController@store',
        'controller' => 'App\\Http\\Controllers\\GeneralSettings\\CompanyAddressController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general.settings.address.store',
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
    'general.settings.address.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'general/settings/address/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\GeneralSettings\\CompanyAddressController@delete',
        'controller' => 'App\\Http\\Controllers\\GeneralSettings\\CompanyAddressController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general.settings.address.delete',
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
    'general.settings.currency' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'general/settings/currency',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\GeneralSettings\\CurrencyController@index',
        'controller' => 'App\\Http\\Controllers\\GeneralSettings\\CurrencyController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general.settings.currency',
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
    'general.settings.currency.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'general/settings/currency/list/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\GeneralSettings\\CurrencyController@list',
        'controller' => 'App\\Http\\Controllers\\GeneralSettings\\CurrencyController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general.settings.currency.list',
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
    'general.settings.currency.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'general/settings/currency/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\GeneralSettings\\CurrencyController@get',
        'controller' => 'App\\Http\\Controllers\\GeneralSettings\\CurrencyController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general.settings.currency.get',
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
    'general.settings.currency.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'general/settings/currency/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\GeneralSettings\\CurrencyController@update',
        'controller' => 'App\\Http\\Controllers\\GeneralSettings\\CurrencyController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general.settings.currency.update',
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
    'general.settings.currency.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'general/settings/currency/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.create',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\GeneralSettings\\CurrencyController@add',
        'controller' => 'App\\Http\\Controllers\\GeneralSettings\\CurrencyController@add',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general.settings.currency.add',
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
    'general.settings.currency.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'general/settings/currency/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\GeneralSettings\\CurrencyController@store',
        'controller' => 'App\\Http\\Controllers\\GeneralSettings\\CurrencyController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general.settings.currency.store',
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
    'general.settings.currency.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'general/settings/currency/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\GeneralSettings\\CurrencyController@delete',
        'controller' => 'App\\Http\\Controllers\\GeneralSettings\\CurrencyController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general.settings.currency.delete',
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
    'procurement.admin.vendor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'procurement/admin/vendor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:purchase.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\Procurement\\Admin\\VendorController@index',
        'controller' => 'App\\Http\\Controllers\\Procurement\\Admin\\VendorController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'procurement.admin.vendor',
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
    'procurement.admin.vendor.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'procurement/admin/vendor/list/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:purchase.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\Procurement\\Admin\\VendorController@list',
        'controller' => 'App\\Http\\Controllers\\Procurement\\Admin\\VendorController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'procurement.admin.vendor.list',
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
    'procurement.vendor.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'procurement/vendor/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\Procurement\\Admin\\VendorController@store',
        'controller' => 'App\\Http\\Controllers\\Procurement\\Admin\\VendorController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'procurement.vendor.store',
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
    'procurement.vendor.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'procurement/vendor/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\Procurement\\Admin\\VendorController@update',
        'controller' => 'App\\Http\\Controllers\\Procurement\\Admin\\VendorController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'procurement.vendor.update',
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
    'procurement.admin.vendor.mv.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'procurement/admin/vendor/mv/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\Procurement\\Admin\\VendorController@get',
        'controller' => 'App\\Http\\Controllers\\Procurement\\Admin\\VendorController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'procurement.admin.vendor.mv.get',
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
    'procurement.admin.vendor.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'procurement/admin/vendor/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\Procurement\\Admin\\VendorController@destroy',
        'controller' => 'App\\Http\\Controllers\\Procurement\\Admin\\VendorController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'procurement.admin.vendor.delete',
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
    'procurement.admin.purchase' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'procurement/admin/purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:purchase.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\Procurement\\Admin\\PurchaseOrderController@index',
        'controller' => 'App\\Http\\Controllers\\Procurement\\Admin\\PurchaseOrderController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'procurement.admin.purchase',
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
    'procurement.admin.purchase.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'procurement/admin/purchase/list/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:purchase.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\Procurement\\Admin\\PurchaseOrderController@list',
        'controller' => 'App\\Http\\Controllers\\Procurement\\Admin\\PurchaseOrderController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'procurement.admin.purchase.list',
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
    'procurement.purchase.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'procurement/purchase/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\Procurement\\Admin\\PurchaseOrderController@store',
        'controller' => 'App\\Http\\Controllers\\Procurement\\Admin\\PurchaseOrderController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'procurement.purchase.store',
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
    'procurement.purchase.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'procurement/purchase/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\Procurement\\Admin\\PurchaseOrderController@update',
        'controller' => 'App\\Http\\Controllers\\Procurement\\Admin\\PurchaseOrderController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'procurement.purchase.update',
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
    'procurement.admin.purchase.mv.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'procurement/admin/purchase/mv/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\Procurement\\Admin\\PurchaseOrderController@get',
        'controller' => 'App\\Http\\Controllers\\Procurement\\Admin\\PurchaseOrderController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'procurement.admin.purchase.mv.get',
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
    'procurement.admin.purchase.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'procurement/admin/purchase/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\Procurement\\Admin\\PurchaseOrderController@destroy',
        'controller' => 'App\\Http\\Controllers\\Procurement\\Admin\\PurchaseOrderController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'procurement.admin.purchase.delete',
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
    'procurement.admin.item.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'procurement/admin/item/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\Procurement\\Admin\\PurchaseOrderController@getItem',
        'controller' => 'App\\Http\\Controllers\\Procurement\\Admin\\PurchaseOrderController@getItem',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'procurement.admin.item.get',
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
    'procurement.admin.purchase.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'procurement/admin/purchase-order/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\Procurement\\Admin\\PurchaseOrderController@viewPo',
        'controller' => 'App\\Http\\Controllers\\Procurement\\Admin\\PurchaseOrderController@viewPo',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'procurement.admin.purchase.order',
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
    'procurement.admin.purchase.po.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'procurement/admin/purchase/po/pdf/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:purchase.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\Procurement\\Admin\\PurchaseOrderController@purchasePDF',
        'controller' => 'App\\Http\\Controllers\\Procurement\\Admin\\PurchaseOrderController@purchasePDF',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'procurement.admin.purchase.po.pdf',
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
    'procurement.admin.items' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'procurement/admin/items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:purchase.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\Procurement\\Admin\\ItemMasterController@index',
        'controller' => 'App\\Http\\Controllers\\Procurement\\Admin\\ItemMasterController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'procurement.admin.items',
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
    'procurement.admin.items.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'procurement/admin/items/list/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:purchase.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\Procurement\\Admin\\ItemMasterController@list',
        'controller' => 'App\\Http\\Controllers\\Procurement\\Admin\\ItemMasterController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'procurement.admin.items.list',
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
    'procurement.items.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'procurement/items/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\Procurement\\Admin\\ItemMasterController@store',
        'controller' => 'App\\Http\\Controllers\\Procurement\\Admin\\ItemMasterController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'procurement.items.store',
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
    'procurement.items.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'procurement/items/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\Procurement\\Admin\\ItemMasterController@update',
        'controller' => 'App\\Http\\Controllers\\Procurement\\Admin\\ItemMasterController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'procurement.items.update',
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
    'procurement.admin.items.mv.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'procurement/admin/items/mv/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\Procurement\\Admin\\ItemMasterController@get',
        'controller' => 'App\\Http\\Controllers\\Procurement\\Admin\\ItemMasterController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'procurement.admin.items.mv.get',
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
    'procurement.admin.items.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'procurement/admin/items/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|Procurement',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\Procurement\\Admin\\ItemMasterController@destroy',
        'controller' => 'App\\Http\\Controllers\\Procurement\\Admin\\ItemMasterController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'procurement.admin.items.delete',
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
    'projects.index' => 
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
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:project.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@index',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.index',
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
    'projects.admin.project' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/project',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:project.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@index',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.project',
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
    'projects.admin.project.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/project/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:project.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@create',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.project.create',
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
    'projects.admin.project.mv.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/project/mv/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:project.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@createmv',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@createmv',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.project.mv.create',
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
    'projects.admin.project.duplicate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/project/duplicate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:project.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@duplicate',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@duplicate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.project.duplicate',
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
    'projects.admin.project.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/project/list/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:project.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@list',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.project.list',
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
    'projects.admin.employee.project.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/project/employee/list/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:project.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@employeeList',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@employeeList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.employee.project.list',
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
    'projects.admin.project.d' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/project/d/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:project.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@detail',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@detail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.project.d',
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
    'projects.admin.project.mv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/project/mv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@projectCardMV',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@projectCardMV',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.project.mv',
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
    'project.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'project/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@store',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'project.store',
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
    'project.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'project/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@update',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'project.update',
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
    'projects.admin.project.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/project/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@getProject',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@getProject',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.project.get',
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
    'projects.admin.project.get.mv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/project/mv/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@getProjectView',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@getProjectView',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.project.get.mv',
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
    'projects.admin.project.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/project/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:project.delete',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@delete',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.project.delete',
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
    'projects.admin.project.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/project/restore/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:project.delete',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@restore',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@restore',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.project.restore',
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
    'projects.admin.project.member.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/project/member/list/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:project.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@mlist',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@mlist',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.project.member.list',
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
    'projects.admin.project.member.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/project/member/{pid}/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:project.delete',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@mdelete',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@mdelete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.project.member.delete',
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
    'projects.admin.project.member.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/admin/project/member/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:project.delete',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@mupdate',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@mupdate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.project.member.update',
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
    'projects.admin.board.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/admin/board/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:task.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@kanbanUpdate',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@kanbanUpdate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.board.update',
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
    'projects.admin.project.update.client' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/admin/project/update/client',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:task.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@updateClient',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController@updateClient',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.project.update.client',
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
    'ganttxxx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ganttxx/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\ProjectController',
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:96:"function () {
                return \\view(\'/projects/admin/project/gantt/gantt\');
            }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007e20000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ganttxxx',
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
    'project.gantt.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'gantt/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\GanttController@index',
        'controller' => 'App\\Http\\Controllers\\GanttController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'project.gantt.index',
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
    'projects.admin.task.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/task/list/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:project.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@list',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.task.list',
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
    'projects.admin.employee.task.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/task/employee/list/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:project.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@employeeList',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@employeeList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.employee.task.list',
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
    'projects.admin.task.overview' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/task/overview/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:task.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@taskOverview',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@taskOverview',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.task.overview',
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
    'projects.admin.task.notes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/task/notes/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:task.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@getTaskNotesView',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@getTaskNotesView',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.task.notes',
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
    'projects.admin.task.subtask' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/task/subtask/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:task.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@getTaskSubView',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@getTaskSubView',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.task.subtask',
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
    'projects.admin.task.files' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/task/files/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:task.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@getTaskFilesView',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@getTaskFilesView',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.task.files',
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
    'projects.admin.task' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/task',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:task.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@index',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.task',
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
    'projects.admin.task.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'projects/admin/task/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.task.delete',
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
    'projects.admin.task.getprojectassigned' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/task/getprojectassigned/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:task.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@getProjectAssigned',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@getProjectAssigned',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.task.getprojectassigned',
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
    'projects.admin.task.file.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/admin/task/file/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@taskFileStore',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@taskFileStore',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.task.file.store',
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
    'projects.admin.task.file.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'projects/admin/task/file/{id}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@taskFileDelete',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@taskFileDelete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.task.file.delete',
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
    'projects.admin.task.note.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/admin/task/note/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@taskNoteStore',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@taskNoteStore',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.task.note.store',
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
    'projects.admin.task.note.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'projects/admin/task/note/{id}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@deleteTaskNote',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@deleteTaskNote',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.task.note.delete',
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
    'projects.admin.task.subtask.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/admin/task/subtask',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@store',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.task.subtask.store',
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
    'projects.admin.task.subtask.overview' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/task/subtask/{id}/overview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@overview',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@overview',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.task.subtask.overview',
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
    'projects.admin.task.subtask.update_status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/admin/task/subtask/update_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@updateStatus',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@updateStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.task.subtask.update_status',
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
    'projects.admin.task.status.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/task/status/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@editTaskStatus',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@editTaskStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.task.status.edit',
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
    'projects.admin.task.status.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/admin/task/status/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@updateTaskStatus',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@updateTaskStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.task.status.update',
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
    'projects.admin.task.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/admin/task/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@store',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.task.store',
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
    'projects.admin.task.mv.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/task/mv/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@getTaskView',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@getTaskView',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.task.mv.edit',
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
    'projects.admin.task.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/task/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@getTask',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@getTask',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.task.get',
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
    'projects.admin.task.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/admin/task/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@updateTask',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskController@updateTask',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.task.update',
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
    'projects.admin.task.template.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/task/template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskTemplateController@index',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskTemplateController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.task.template.index',
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
    'projects.admin.task.template.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/task/template/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskTemplateController@list',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskTemplateController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.task.template.list',
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
    'projects.admin.task.template.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/admin/task/template/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskTemplateController@update',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskTemplateController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.task.template.update',
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
    'projects.admin.task.template.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/admin/task/template/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskTemplateController@store',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskTemplateController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.task.template.store',
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
    'projects.admin.task.template.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/task/template/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskTemplateController@edit',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskTemplateController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.task.template.edit',
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
    'projects.admin.task.template.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'projects/admin/task/template/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskTemplateController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\TaskTemplateController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.task.template.delete',
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
    'projects.admin.setting.category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/setting/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\CategoryController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.category.index',
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
    'projects.admin.setting.category.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/setting/category/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\CategoryController@list',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\CategoryController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.category.list',
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
    'projects.admin.setting.category.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/admin/setting/category/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\CategoryController@update',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\CategoryController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.category.update',
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
    'projects.admin.setting.category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/admin/setting/category/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\CategoryController@store',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\CategoryController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.category.store',
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
    'projects.admin.setting.category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/setting/category/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\CategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\CategoryController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.category.edit',
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
    'projects.admin.setting.category.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'projects/admin/setting/category/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\CategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\CategoryController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.category.delete',
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
    'projects.admin.setting.audience.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/setting/audience',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\AudienceController@index',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\AudienceController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.audience.index',
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
    'projects.admin.setting.audience.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/setting/audience/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\AudienceController@list',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\AudienceController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.audience.list',
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
    'projects.admin.setting.audience.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/admin/setting/audience/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\AudienceController@update',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\AudienceController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.audience.update',
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
    'projects.admin.setting.audience.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/admin/setting/audience/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\AudienceController@store',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\AudienceController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.audience.store',
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
    'projects.admin.setting.audience.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/setting/audience/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\AudienceController@edit',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\AudienceController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.audience.edit',
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
    'projects.admin.setting.audience.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'projects/admin/setting/audience/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\AudienceController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\AudienceController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.audience.delete',
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
    'projects.admin.setting.tag.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/setting/tag',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\TagController@index',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\TagController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.tag.index',
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
    'projects.admin.setting.tag.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/setting/tag/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\TagController@list',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\TagController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.tag.list',
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
    'projects.admin.setting.tag.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/admin/setting/tag/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\TagController@update',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\TagController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.tag.update',
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
    'projects.admin.setting.tag.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/admin/setting/tag/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\TagController@store',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\TagController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.tag.store',
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
    'projects.admin.setting.tag.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/setting/tag/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\TagController@edit',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\TagController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.tag.edit',
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
    'projects.admin.setting.tag.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'projects/admin/setting/tag/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\TagController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\TagController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.tag.delete',
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
    'projects.admin.setting.venue.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/setting/venue',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\VenueController@index',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\VenueController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.venue.index',
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
    'projects.admin.setting.venue.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/setting/venue/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\VenueController@list',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\VenueController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.venue.list',
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
    'projects.admin.setting.venue.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/admin/setting/venue/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\VenueController@update',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\VenueController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.venue.update',
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
    'projects.admin.setting.venue.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/admin/setting/venue/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\VenueController@store',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\VenueController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.venue.store',
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
    'projects.admin.setting.venue.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/setting/venue/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\VenueController@edit',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\VenueController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.venue.edit',
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
    'projects.admin.setting.venue.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'projects/admin/setting/venue/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\VenueController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\VenueController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.venue.delete',
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
    'projects.admin.setting.location.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/setting/location',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\LocationController@index',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\LocationController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.location.index',
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
    'projects.admin.setting.location.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/setting/location/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\LocationController@list',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\LocationController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.location.list',
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
    'projects.admin.setting.location.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/admin/setting/location/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\LocationController@update',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\LocationController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.location.update',
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
    'projects.admin.setting.location.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/admin/setting/location/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\LocationController@store',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\LocationController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.location.store',
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
    'projects.admin.setting.location.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/setting/location/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\LocationController@edit',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\LocationController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.location.edit',
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
    'projects.admin.setting.location.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'projects/admin/setting/location/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\LocationController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\LocationController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.location.delete',
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
    'projects.admin.setting.projecttype.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/setting/projecttype',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\ProjectTypetController@index',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\ProjectTypetController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.projecttype.index',
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
    'projects.admin.setting.projecttype.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/setting/projecttype/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\ProjectTypetController@list',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\ProjectTypetController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.projecttype.list',
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
    'projects.admin.setting.projecttype.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/admin/setting/projecttype/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\ProjectTypetController@update',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\ProjectTypetController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.projecttype.update',
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
    'projects.admin.setting.projecttype.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'projects/admin/setting/projecttype/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\ProjectTypetController@store',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\ProjectTypetController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.projecttype.store',
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
    'projects.admin.setting.projecttype.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/setting/projecttype/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\ProjectTypetController@edit',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\ProjectTypetController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.projecttype.edit',
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
    'projects.admin.setting.projecttype.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'projects/admin/setting/projecttype/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\ProjectTypetController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\ProjectTypetController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.projecttype.delete',
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
    'projects.admin.setting.departments' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/setting/departments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\DepartmentController@index',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\DepartmentController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.departments',
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
    'projects.admin.setting.funcareas' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'projects/admin/setting/funcareas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|PROJECTMGT',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\FunctionalAreaController@index',
        'controller' => 'App\\Http\\Controllers\\ProjectMgt\\Admin\\Setting\\FunctionalAreaController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'projects.admin.setting.funcareas',
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
    'hr.admin.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeDashboardController@dashboard',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeDashboardController@dashboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.dashboard',
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
    'hr.admin.employee' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/employee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.employee',
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
    'hr.admin.employee.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/employee/profile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeController@profile',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeController@profile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.employee.profile',
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
    'hr.admin.employee.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/employee/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.employee.list',
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
    'hr.admin.employee.rv.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/employee/mv/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.edit',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeController@getEmpEditView',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeController@getEmpEditView',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.employee.rv.edit',
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
    'hr.admin.employee.mv.duplicate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/employee/mv/duplicate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.edit',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeController@duplicate_employee_view',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeController@duplicate_employee_view',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.employee.mv.duplicate',
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
    'hr.admin.employee.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/employee/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.edit',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.employee.update',
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
    'hr.admin.employee.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/employee/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.delete',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.employee.delete',
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
    'hr.admin.employee.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/employee/restore/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.delete',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeController@restore',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeController@restore',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.employee.restore',
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
    'hr.admin.employee.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/employee/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.create',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeController@create',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.employee.create',
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
    'hr.admin.employee.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/employee/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.create',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.employee.store',
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
    'hr.admin.bank' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/bank',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeBankController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeBankController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.bank',
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
    'hr.admin.bank.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/bank/list/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeBankController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeBankController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.bank.list',
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
    'hr.admin.bank.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/bank/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.create',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeBankController@add',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeBankController@add',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.bank.add',
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
    'hr.admin.bank.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/bank/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeBankController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeBankController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.bank.store',
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
    'hr.admin.bank.rv.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/bank/mv/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeBankController@getEmpEditView',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeBankController@getEmpEditView',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.bank.rv.edit',
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
    'hr.admin.bank.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/bank/bank/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeBankController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeBankController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.bank.update',
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
    'hr.admin.bank.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/bank/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeBankController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeBankController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.bank.delete',
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
    'hr.admin.bank.rv.attachment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/bank/mv/attachment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeBankController@getAttachmentView',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeBankController@getAttachmentView',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.bank.rv.attachment',
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
    'hr.admin.file.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/file/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeAttachmentController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeAttachmentController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.file.store',
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
    'hr.admin.files' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/files',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.file.list',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeAttachmentController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeAttachmentController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.files',
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
    'hr.admin.files.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/files/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.file.list',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeAttachmentController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeAttachmentController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.files.list',
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
    'hr.admin.files.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/files/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeAttachmentController@get',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeAttachmentController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.files.get',
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
    'hr.admin.files.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/files/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeAttachmentController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeAttachmentController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.files.update',
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
    'hr.admin.files.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'hr/admin/files/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeAttachmentController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeAttachmentController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.files.delete',
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
    'hr.admin.file.serve' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/file/serve/{file}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeAttachmentController@serve',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeAttachmentController@serve',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.file.serve',
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
    'hr.admin.address' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeAddressController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeAddressController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.address',
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
    'hr.admin.address.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/address/list/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeAddressController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeAddressController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.address.list',
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
    'hr.admin.address.mv.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/address/mv/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeAddressController@getAddressEditView',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeAddressController@getAddressEditView',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.address.mv.edit',
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
    'hr.admin.address.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/address/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeAddressController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeAddressController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.address.update',
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
    'hr.admin.address.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/address/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.create',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeAddressController@add',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeAddressController@add',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.address.add',
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
    'hr.admin.address.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/address/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeAddressController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeAddressController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.address.store',
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
    'hr.admin.address.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/address/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeAddressController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeAddressController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.address.delete',
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
    'hr.admin.leave' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/leave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:leave.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLeaveController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLeaveController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.leave',
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
    'hr.admin.leave.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/leave/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:leave.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLeaveController@add',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLeaveController@add',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.leave.add',
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
    'hr.admin.leave.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/leave/list/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:leave.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLeaveController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLeaveController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.leave.list',
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
    'hr.admin.leave.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/leave/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:leave.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLeaveController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLeaveController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.leave.store',
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
    'hr.admin.leave.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/leave/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:leave.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLeaveController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLeaveController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.leave.delete',
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
    'hr.admin.leave.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/leave/leave/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:leave.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLeaveController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLeaveController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.leave.update',
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
    'hr.admin.leave.rv.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/leave/mv/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:leave.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLeaveController@getEmpLeaveEditView',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLeaveController@getEmpLeaveEditView',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.leave.rv.edit',
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
    'hr.admin.leave.status.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/leave/status/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:leave.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLeaveController@updateStatus',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLeaveController@updateStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.leave.status.update',
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
    'hr.admin.leave.status.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/leave/status/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:leave.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLeaveController@editStatus',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLeaveController@editStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.leave.status.edit',
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
    'hr.admin.salary' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/salary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeSalaryController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeSalaryController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.salary',
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
    'hr.admin.salary.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/salary/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.create',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeSalaryController@add',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeSalaryController@add',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.salary.add',
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
    'hr.admin.salary.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/salary/list/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeSalaryController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeSalaryController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.salary.list',
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
    'hr.admin.salary.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/salary/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeSalaryController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeSalaryController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.salary.store',
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
    'hr.admin.salary.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/salary/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeSalaryController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeSalaryController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.salary.delete',
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
    'hr.admin.salary.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/salary/salary/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeSalaryController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeSalaryController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.salary.update',
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
    'hr.admin.salary.rv.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/salary/mv/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeSalaryController@getEmpSalaryEditView',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeSalaryController@getEmpSalaryEditView',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.salary.rv.edit',
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
    'hr.admin.emergency' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/emergency',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeEmergencyContactController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeEmergencyContactController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.emergency',
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
    'hr.admin.emergency.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/emergency/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.create',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeEmergencyContactController@add',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeEmergencyContactController@add',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.emergency.add',
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
    'hr.admin.emergency.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/emergency/list/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeEmergencyContactController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeEmergencyContactController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.emergency.list',
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
    'hr.admin.emergency.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/emergency/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeEmergencyContactController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeEmergencyContactController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.emergency.store',
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
    'hr.admin.emergency.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/emergency/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeEmergencyContactController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeEmergencyContactController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.emergency.delete',
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
    'hr.admin.emergency.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/emergency/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeEmergencyContactController@get',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeEmergencyContactController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.emergency.get',
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
    'hr.admin.emergency.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/emergency/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeEmergencyContactController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeEmergencyContactController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.emergency.update',
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
    'hr.admin.emergency.rv.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/emergency/mv/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeEmergencyContactController@getEditView',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeEmergencyContactController@getEditView',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.emergency.rv.edit',
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
    'hr.admin.timesheet.invoice.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/timesheet/invoice/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\EmployeeTimeSheetInvoice@invoice',
        'controller' => 'App\\Http\\Controllers\\EmployeeTimeSheetInvoice@invoice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.timesheet.invoice.pdf',
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
    'hr.admin.timesheet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/timesheet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.timesheet',
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
    'hr.admin.timesheet.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/timesheet/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.create',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetController@add',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetController@add',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.timesheet.add',
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
    'hr.admin.timesheet.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/timesheet/list/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.timesheet.list',
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
    'hr.admin.timesheet.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/timesheet/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.timesheet.store',
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
    'hr.admin.timesheet.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/timesheet/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.timesheet.delete',
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
    'hr.admin.timesheet.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/timesheet/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.timesheet.update',
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
    'hr.admin.timesheet.rv.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/timesheet/mv/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetController@getEmpTimeSheetEditView',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetController@getEmpTimeSheetEditView',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.timesheet.rv.edit',
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
    'hr.admin.timesheet.status.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/timesheet/status/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetController@updateStatus',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetController@updateStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.timesheet.status.update',
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
    'hr.admin.timesheet.status.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/timesheet/status/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetController@editStatus',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetController@editStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.timesheet.status.edit',
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
    'hr.admin.timesheet.entries' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/timesheet/entries/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetEntryController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetEntryController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.timesheet.entries',
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
    'hr.admin.timesheet.entries.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/timesheet/entries/add/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetEntryController@add',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetEntryController@add',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.timesheet.entries.add',
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
    'hr.admin.timesheet.entries.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/timesheet/entries/list/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetEntryController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetEntryController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.timesheet.entries.list',
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
    'hr.admin.timesheet.entries.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/timesheet/entries/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetEntryController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetEntryController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.timesheet.entries.store',
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
    'hr.admin.timesheet.entries.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/timesheet/entries/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetEntryController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetEntryController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.timesheet.entries.update',
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
    'hr.admin.timesheet.entries.rv.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/timesheet/entries/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetEntryController@get',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetEntryController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.timesheet.entries.rv.edit',
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
    'hr.admin.timesheet.entries.status.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/timesheet/entries/status/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetEntryController@updateStatus',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetEntryController@updateStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.timesheet.entries.status.update',
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
    'hr.admin.timesheet.entries.status.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/timesheet/entries/status/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetEntryController@editStatus',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeTimeSheetEntryController@editStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.timesheet.entries.status.edit',
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
    'hr.admin.letter' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/letter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLetterController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLetterController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.letter',
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
    'hr.admin.letter.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/letter/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLetterController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLetterController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.letter.list',
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
    'hr.admin.letter.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/letter/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLetterController@show',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLetterController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.letter.show',
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
    'hr.admin.letter.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/letter/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLetterController@edit',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLetterController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.letter.edit',
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
    'hr.admin.letter.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/letter/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLetterController@create',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLetterController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.letter.create',
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
    'hr.admin.letter.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/letter/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLetterController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLetterController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.letter.store',
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
    'hr.admin.letter.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/letter/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLetterController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLetterController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.letter.update',
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
    'hr.admin.letter.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'hr/admin/letter/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLetterController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeLetterController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.letter.delete',
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
    'hr.admin.letter.generate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/letter/generate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeGeneratedLetterController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeGeneratedLetterController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.letter.generate',
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
    'hr.admin.letter.generate.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/letter/generate/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeGeneratedLetterController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeGeneratedLetterController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.letter.generate.list',
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
    'hr.admin.letter.generate.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/letter/generate/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeGeneratedLetterController@create',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeGeneratedLetterController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.letter.generate.create',
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
    'hr.admin.letter.generate.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/letter/generate/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeGeneratedLetterController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeGeneratedLetterController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.letter.generate.store',
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
    'hr.admin.letter.generate.gettemplate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/letter/generate/gettemplate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeGeneratedLetterController@getTemplate',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeGeneratedLetterController@getTemplate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.letter.generate.gettemplate',
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
    'hr.admin.letter.generate.empvar' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/letter/generate/empvar/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeGeneratedLetterController@getEmp',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeGeneratedLetterController@getEmp',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.letter.generate.empvar',
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
    'hr.admin.letter.generate.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/letter/generate/pdf/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeGeneratedLetterController@pdf',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeGeneratedLetterController@pdf',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.letter.generate.pdf',
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
    'hr.admin.letter.generate.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/letter/generate/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeGeneratedLetterController@show',
        'controller' => 'App\\Http\\Controllers\\hr\\Admin\\EmployeeGeneratedLetterController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.letter.generate.show',
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
    'hr.admin.setting.addresstype' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/addresstype',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\AddressTypeController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\AddressTypeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.addresstype',
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
    'hr.admin.setting.addresstype.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/addresstype/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\AddressTypeController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\AddressTypeController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.addresstype.list',
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
    'hr.admin.setting.addresstype.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/addresstype/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\AddressTypeController@get',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\AddressTypeController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.addresstype.get',
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
    'hr.admin.setting.addresstype.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/addresstype/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\AddressTypeController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\AddressTypeController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.addresstype.update',
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
    'hr.admin.setting.addresstype.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'hr/admin/setting/addresstype/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\AddressTypeController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\AddressTypeController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.addresstype.delete',
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
    'hr.admin.setting.addresstype.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/addresstype/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\AddressTypeController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\AddressTypeController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.addresstype.store',
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
    'hr.admin.setting.designations' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/designations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\DesignationController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\DesignationController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.designations',
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
    'hr.admin.setting.designations.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/designations/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\DesignationController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\DesignationController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.designations.list',
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
    'hr.admin.setting.designations.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/designations/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\DesignationController@get',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\DesignationController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.designations.get',
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
    'hr.admin.setting.designations.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/designations/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\DesignationController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\DesignationController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.designations.update',
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
    'hr.admin.setting.designations.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'hr/admin/setting/designations/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\DesignationController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\DesignationController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.designations.delete',
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
    'hr.admin.setting.designations.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/designations/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\DesignationController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\DesignationController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.designations.store',
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
    'hr.admin.setting.joblevel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/joblevel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\JobLevelController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\JobLevelController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.joblevel',
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
    'hr.admin.setting.joblevel.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/joblevel/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\JobLevelController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\JobLevelController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.joblevel.list',
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
    'hr.admin.setting.joblevel.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/joblevel/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\JobLevelController@get',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\JobLevelController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.joblevel.get',
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
    'hr.admin.setting.joblevel.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/joblevel/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\JobLevelController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\JobLevelController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.joblevel.update',
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
    'hr.admin.setting.joblevel.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'hr/admin/setting/joblevel/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\JobLevelController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\JobLevelController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.joblevel.delete',
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
    'hr.admin.setting.joblevel.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/joblevel/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\JobLevelController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\JobLevelController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.joblevel.store',
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
    'hr.admin.setting.sponsorship' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/sponsorship',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeSponsorshipController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeSponsorshipController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.sponsorship',
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
    'hr.admin.setting.sponsorship.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/sponsorship/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeSponsorshipController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeSponsorshipController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.sponsorship.list',
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
    'hr.admin.setting.sponsorship.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/sponsorship/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeSponsorshipController@get',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeSponsorshipController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.sponsorship.get',
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
    'hr.admin.setting.sponsorship.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/sponsorship/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeSponsorshipController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeSponsorshipController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.sponsorship.update',
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
    'hr.admin.setting.sponsorship.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'hr/admin/setting/sponsorship/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeSponsorshipController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeSponsorshipController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.sponsorship.delete',
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
    'hr.admin.setting.sponsorship.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/sponsorship/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeSponsorshipController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeSponsorshipController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.sponsorship.store',
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
    'hr.admin.setting.contracttype' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/contracttype',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeContractTypeController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeContractTypeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.contracttype',
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
    'hr.admin.setting.contracttype.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/contracttype/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeContractTypeController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeContractTypeController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.contracttype.list',
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
    'hr.admin.setting.contracttype.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/contracttype/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeContractTypeController@get',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeContractTypeController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.contracttype.get',
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
    'hr.admin.setting.contracttype.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/contracttype/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeContractTypeController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeContractTypeController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.contracttype.update',
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
    'hr.admin.setting.contracttype.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'hr/admin/setting/contracttype/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeContractTypeController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeContractTypeController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.contracttype.delete',
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
    'hr.admin.setting.contracttype.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/contracttype/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeContractTypeController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeContractTypeController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.contracttype.store',
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
    'hr.admin.setting.funcareas' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/funcareas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\FunctionalAreaController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\FunctionalAreaController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.funcareas',
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
    'hr.admin.setting.funcareas.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/funcareas/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\FunctionalAreaController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\FunctionalAreaController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.funcareas.list',
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
    'hr.admin.setting.funcareas.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/funcareas/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\FunctionalAreaController@get',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\FunctionalAreaController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.funcareas.get',
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
    'hr.admin.setting.funcareas.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/funcareas/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\FunctionalAreaController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\FunctionalAreaController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.funcareas.update',
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
    'hr.admin.setting.funcareas.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'hr/admin/setting/funcareas/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\FunctionalAreaController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\FunctionalAreaController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.funcareas.delete',
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
    'hr.admin.setting.funcareas.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/funcareas/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\FunctionalAreaController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\FunctionalAreaController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.funcareas.store',
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
    'hr.admin.setting.gender' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/gender',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\GenderController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\GenderController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.gender',
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
    'hr.admin.setting.gender.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/gender/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\GenderController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\GenderController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.gender.list',
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
    'hr.admin.setting.gender.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/gender/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\GenderController@get',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\GenderController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.gender.get',
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
    'hr.admin.setting.gender.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/gender/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\GenderController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\GenderController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.gender.update',
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
    'hr.admin.setting.gender.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'hr/admin/setting/gender/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\GenderController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\GenderController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.gender.delete',
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
    'hr.admin.setting.gender.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/gender/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\GenderController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\GenderController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.gender.store',
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
    'hr.admin.setting.prefix' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/prefix',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\PrefixController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\PrefixController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.prefix',
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
    'hr.admin.setting.prefix.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/prefix/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\PrefixController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\PrefixController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.prefix.list',
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
    'hr.admin.setting.prefix.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/prefix/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\PrefixController@get',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\PrefixController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.prefix.get',
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
    'hr.admin.setting.prefix.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/prefix/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\PrefixController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\PrefixController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.prefix.update',
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
    'hr.admin.setting.prefix.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'hr/admin/setting/prefix/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\PrefixController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\PrefixController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.prefix.delete',
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
    'hr.admin.setting.prefix.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/prefix/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\PrefixController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\PrefixController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.prefix.store',
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
    'hr.admin.setting.marital' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/marital',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\MaritalStatusController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\MaritalStatusController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.marital',
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
    'hr.admin.setting.marital.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/marital/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\MaritalStatusController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\MaritalStatusController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.marital.list',
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
    'hr.admin.setting.marital.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/marital/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\MaritalStatusController@get',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\MaritalStatusController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.marital.get',
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
    'hr.admin.setting.marital.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/marital/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\MaritalStatusController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\MaritalStatusController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.marital.update',
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
    'hr.admin.setting.marital.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'hr/admin/setting/marital/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\MaritalStatusController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\MaritalStatusController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.marital.delete',
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
    'hr.admin.setting.marital.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/marital/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\MaritalStatusController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\MaritalStatusController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.marital.store',
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
    'hr.admin.setting.countries' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\CountryController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\CountryController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.countries',
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
    'hr.admin.setting.countries.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/countries/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\CountryController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\CountryController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.countries.list',
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
    'hr.admin.setting.countries.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/countries/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\CountryController@get',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\CountryController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.countries.get',
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
    'hr.admin.setting.countries.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/countries/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\CountryController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\CountryController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.countries.update',
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
    'hr.admin.setting.countries.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'hr/admin/setting/countries/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\CountryController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\CountryController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.countries.delete',
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
    'hr.admin.setting.countries.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/countries/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\CountryController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\CountryController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.countries.store',
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
    'hr.admin.setting.nationalities' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/nationalities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\NationalityController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\NationalityController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.nationalities',
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
    'hr.admin.setting.nationalities.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/nationalities/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\NationalityController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\NationalityController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.nationalities.list',
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
    'hr.admin.setting.nationalities.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/nationalities/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\NationalityController@get',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\NationalityController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.nationalities.get',
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
    'hr.admin.setting.nationalities.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/nationalities/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\NationalityController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\NationalityController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.nationalities.update',
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
    'hr.admin.setting.nationalities.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'hr/admin/setting/nationalities/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\NationalityController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\NationalityController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.nationalities.delete',
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
    'hr.admin.setting.nationalities.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/nationalities/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\NationalityController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\NationalityController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.nationalities.store',
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
    'hr.admin.setting.departments' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/departments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\DepartmentController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\DepartmentController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.departments',
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
    'hr.admin.setting.departments.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/departments/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\DepartmentController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\DepartmentController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.departments.list',
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
    'hr.admin.setting.departments.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/departments/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\DepartmentController@get',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\DepartmentController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.departments.get',
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
    'hr.admin.setting.departments.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/departments/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\DepartmentController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\DepartmentController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.departments.update',
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
    'hr.admin.setting.departments.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'hr/admin/setting/departments/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\DepartmentController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\DepartmentController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.departments.delete',
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
    'hr.admin.setting.departments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/departments/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\DepartmentController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\DepartmentController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.departments.store',
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
    'hr.admin.setting.entities' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/entities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EntityController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EntityController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.entities',
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
    'hr.admin.setting.entities.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/entities/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EntityController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EntityController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.entities.list',
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
    'hr.admin.setting.entities.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/entities/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EntityController@get',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EntityController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.entities.get',
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
    'hr.admin.setting.entities.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/entities/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EntityController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EntityController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.entities.update',
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
    'hr.admin.setting.entities.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'hr/admin/setting/entities/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EntityController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EntityController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.entities.delete',
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
    'hr.admin.setting.entities.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/entities/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EntityController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EntityController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.entities.store',
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
    'hr.admin.setting.directorates' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/directorates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\DirectorateController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\DirectorateController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.directorates',
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
    'hr.admin.setting.directorates.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/directorates/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\DirectorateController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\DirectorateController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.directorates.list',
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
    'hr.admin.setting.directorates.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/directorates/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\DirectorateController@get',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\DirectorateController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.directorates.get',
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
    'hr.admin.setting.directorates.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/directorates/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\DirectorateController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\DirectorateController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.directorates.update',
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
    'hr.admin.setting.directorates.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'hr/admin/setting/directorates/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\DirectorateController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\DirectorateController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.directorates.delete',
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
    'hr.admin.setting.directorates.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/directorates/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\DirectorateController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\DirectorateController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.directorates.store',
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
    'hr.admin.setting.relationships' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/relationships',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeRelationshipController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeRelationshipController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.relationships',
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
    'hr.admin.setting.relationships.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/relationships/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeRelationshipController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeRelationshipController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.relationships.list',
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
    'hr.admin.setting.relationships.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/relationships/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeRelationshipController@get',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeRelationshipController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.relationships.get',
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
    'hr.admin.setting.relationships.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/relationships/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeRelationshipController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeRelationshipController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.relationships.update',
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
    'hr.admin.setting.relationships.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'hr/admin/setting/relationships/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeRelationshipController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeRelationshipController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.relationships.delete',
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
    'hr.admin.setting.relationships.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/relationships/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeRelationshipController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeRelationshipController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.relationships.store',
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
    'hr.admin.setting.leavetypes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/leavetypes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\LeaveTypeController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\LeaveTypeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.leavetypes',
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
    'hr.admin.setting.leavetypes.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/leavetypes/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\LeaveTypeController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\LeaveTypeController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.leavetypes.list',
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
    'hr.admin.setting.leavetypes.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/leavetypes/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\LeaveTypeController@get',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\LeaveTypeController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.leavetypes.get',
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
    'hr.admin.setting.leavetypes.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/leavetypes/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\LeaveTypeController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\LeaveTypeController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.leavetypes.update',
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
    'hr.admin.setting.leavetypes.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'hr/admin/setting/leavetypes/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\LeaveTypeController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\LeaveTypeController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.leavetypes.delete',
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
    'hr.admin.setting.leavetypes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/leavetypes/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\LeaveTypeController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\LeaveTypeController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.leavetypes.store',
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
    'hr.admin.setting.element' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/element',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\ElementController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\ElementController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.element',
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
    'hr.admin.setting.element.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/element/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\ElementController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\ElementController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.element.list',
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
    'hr.admin.setting.element.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/element/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\ElementController@get',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\ElementController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.element.get',
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
    'hr.admin.setting.element.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/element/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\ElementController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\ElementController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.element.update',
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
    'hr.admin.setting.element.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'hr/admin/setting/element/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\ElementController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\ElementController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.element.delete',
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
    'hr.admin.setting.element.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/element/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\ElementController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\ElementController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.element.store',
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
    'hr.admin.setting.element.classifications' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/element/classifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\ElementClassificationController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\ElementClassificationController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.element.classifications',
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
    'hr.admin.setting.element.classifications.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/element/classifications/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\ElementClassificationController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\ElementClassificationController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.element.classifications.list',
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
    'hr.admin.setting.element.classifications.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/element/classifications/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\ElementClassificationController@get',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\ElementClassificationController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.element.classifications.get',
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
    'hr.admin.setting.element.classifications.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/element/classifications/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\ElementClassificationController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\ElementClassificationController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.element.classifications.update',
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
    'hr.admin.setting.element.classifications.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'hr/admin/setting/element/classifications/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\ElementClassificationController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\ElementClassificationController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.element.classifications.delete',
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
    'hr.admin.setting.element.classifications.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/element/classifications/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\ElementClassificationController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\ElementClassificationController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.element.classifications.store',
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
    'hr.admin.setting.elementset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/elementset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\ElementSetController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\ElementSetController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.elementset',
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
    'hr.admin.setting.elementset.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/elementset/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\ElementSetController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\ElementSetController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.elementset.list',
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
    'hr.admin.setting.elementset.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/elementset/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\ElementSetController@get',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\ElementSetController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.elementset.get',
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
    'hr.admin.setting.elementset.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/elementset/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\ElementSetController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\ElementSetController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.elementset.update',
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
    'hr.admin.setting.elementset.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'hr/admin/setting/elementset/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\ElementSetController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\ElementSetController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.elementset.delete',
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
    'hr.admin.setting.elementset.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/elementset/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\ElementSetController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\ElementSetController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.elementset.store',
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
    'hr.admin.setting.elementset.assignment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/elementset/assignment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\ElementSetController@AssignElements',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\ElementSetController@AssignElements',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.elementset.assignment',
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
    'hr.admin.setting.paycycle' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/paycycle',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\PayCycleController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\PayCycleController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.paycycle',
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
    'hr.admin.setting.paycycle.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/paycycle/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\PayCycleController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\PayCycleController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.paycycle.list',
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
    'hr.admin.setting.paycycle.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/paycycle/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\PayCycleController@get',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\PayCycleController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.paycycle.get',
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
    'hr.admin.setting.paycycle.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/paycycle/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\PayCycleController@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\PayCycleController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.paycycle.update',
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
    'hr.admin.setting.paycycle.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'hr/admin/setting/paycycle/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\PayCycleController@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\PayCycleController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.paycycle.delete',
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
    'hr.admin.setting.paycycle.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/paycycle/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\PayCycleController@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\PayCycleController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.paycycle.store',
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
    'hr.admin.setting.invoice.notes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/invoice/notes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeTimeSheetInvoice@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeTimeSheetInvoice@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.invoice.notes',
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
    'hr.admin.setting.invoice.notes.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/invoice/notes/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeTimeSheetInvoice@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeTimeSheetInvoice@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.invoice.notes.list',
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
    'hr.admin.setting.invoice.notes.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/invoice/notes/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeTimeSheetInvoice@get',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeTimeSheetInvoice@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.invoice.notes.get',
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
    'hr.admin.setting.invoice.notes.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/invoice/notes/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeTimeSheetInvoice@update',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeTimeSheetInvoice@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.invoice.notes.update',
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
    'hr.admin.setting.invoice.notes.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'hr/admin/setting/invoice/notes/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeTimeSheetInvoice@delete',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeTimeSheetInvoice@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.invoice.notes.delete',
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
    'hr.admin.setting.invoice.notes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/admin/setting/invoice/notes/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeTimeSheetInvoice@store',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\EmployeeTimeSheetInvoice@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.invoice.notes.store',
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
    'hr.admin.setting.audit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/audit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:audit.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\ActivityAuditController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\ActivityAuditController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.audit',
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
    'hr.admin.setting.audit.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/admin/setting/audit/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:SuperAdmin|HRMSADMIN',
          6 => 'roles:admin',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:audit.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Setting\\ActivityAuditController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Setting\\ActivityAuditController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.admin.setting.audit.list',
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
    'hr.emp.timesheet.invoice.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/emp/timesheet/invoice/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS|Manager',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\EmployeeTimeSheetInvoice@invoice',
        'controller' => 'App\\Http\\Controllers\\EmployeeTimeSheetInvoice@invoice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.emp.timesheet.invoice.pdf',
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
    'hr.emp.timesheet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/emp/timesheet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\EmployeeTimeSheetController@index',
        'controller' => 'App\\Http\\Controllers\\EmployeeTimeSheetController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.emp.timesheet',
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
    'hr.emp.timesheet.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/emp/timesheet/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.create',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\EmployeeTimeSheetController@add',
        'controller' => 'App\\Http\\Controllers\\EmployeeTimeSheetController@add',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.emp.timesheet.add',
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
    'hr.emp.timesheet.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/emp/timesheet/list/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\EmployeeTimeSheetController@list',
        'controller' => 'App\\Http\\Controllers\\EmployeeTimeSheetController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.emp.timesheet.list',
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
    'hr.emp.timesheet.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/emp/timesheet/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\EmployeeTimeSheetController@store',
        'controller' => 'App\\Http\\Controllers\\EmployeeTimeSheetController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.emp.timesheet.store',
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
    'hr.emp.timesheet.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/emp/timesheet/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\EmployeeTimeSheetController@delete',
        'controller' => 'App\\Http\\Controllers\\EmployeeTimeSheetController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.emp.timesheet.delete',
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
    'hr.emp.timesheet.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/emp/timesheet/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\EmployeeTimeSheetController@update',
        'controller' => 'App\\Http\\Controllers\\EmployeeTimeSheetController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.emp.timesheet.update',
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
    'hr.emp.timesheet.rv.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/emp/timesheet/mv/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\EmployeeTimeSheetController@getEmpTimeSheetEditView',
        'controller' => 'App\\Http\\Controllers\\EmployeeTimeSheetController@getEmpTimeSheetEditView',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.emp.timesheet.rv.edit',
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
    'hr.emp.timesheet.status.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/emp/timesheet/status/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\EmployeeTimeSheetController@updateStatus',
        'controller' => 'App\\Http\\Controllers\\EmployeeTimeSheetController@updateStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.emp.timesheet.status.update',
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
    'hr.emp.timesheet.status.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/emp/timesheet/status/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\EmployeeTimeSheetController@editStatus',
        'controller' => 'App\\Http\\Controllers\\EmployeeTimeSheetController@editStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.emp.timesheet.status.edit',
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
    'hr.emp.timesheet.entries' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/emp/timesheet/entries/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\EmployeeTimeSheetEntryController@index',
        'controller' => 'App\\Http\\Controllers\\EmployeeTimeSheetEntryController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.emp.timesheet.entries',
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
    'hr.emp.timesheet.entries.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/emp/timesheet/entries/add/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\EmployeeTimeSheetEntryController@add',
        'controller' => 'App\\Http\\Controllers\\EmployeeTimeSheetEntryController@add',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.emp.timesheet.entries.add',
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
    'hr.emp.timesheet.entries.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/emp/timesheet/entries/list/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\EmployeeTimeSheetEntryController@list',
        'controller' => 'App\\Http\\Controllers\\EmployeeTimeSheetEntryController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.emp.timesheet.entries.list',
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
    'hr.emp.timesheet.entries.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/emp/timesheet/entries/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\EmployeeTimeSheetEntryController@store',
        'controller' => 'App\\Http\\Controllers\\EmployeeTimeSheetEntryController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.emp.timesheet.entries.store',
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
    'hr.emp.timesheet.entries.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/emp/timesheet/entries/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\EmployeeTimeSheetEntryController@update',
        'controller' => 'App\\Http\\Controllers\\EmployeeTimeSheetEntryController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.emp.timesheet.entries.update',
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
    'hr.emp.timesheet.entries.rv.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/emp/timesheet/entries/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\EmployeeTimeSheetEntryController@get',
        'controller' => 'App\\Http\\Controllers\\EmployeeTimeSheetEntryController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.emp.timesheet.entries.rv.edit',
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
    'hr.emp.timesheet.entries.status.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/emp/timesheet/entries/status/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\EmployeeTimeSheetEntryController@updateStatus',
        'controller' => 'App\\Http\\Controllers\\EmployeeTimeSheetEntryController@updateStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.emp.timesheet.entries.status.update',
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
    'hr.emp.timesheet.entries.status.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/emp/timesheet/entries/status/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\EmployeeTimeSheetEntryController@editStatus',
        'controller' => 'App\\Http\\Controllers\\EmployeeTimeSheetEntryController@editStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.emp.timesheet.entries.status.edit',
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
    'hr.emp.emergency' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/emp/emergency',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\EmployeeEmergencyContactController@index',
        'controller' => 'App\\Http\\Controllers\\EmployeeEmergencyContactController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.emp.emergency',
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
    'hr.emp.emergency.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/emp/emergency/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.create',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\EmployeeEmergencyContactController@add',
        'controller' => 'App\\Http\\Controllers\\EmployeeEmergencyContactController@add',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.emp.emergency.add',
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
    'hr.emp.emergency.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/emp/emergency/list/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\EmployeeEmergencyContactController@list',
        'controller' => 'App\\Http\\Controllers\\EmployeeEmergencyContactController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.emp.emergency.list',
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
    'hr.emp.emergency.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/emp/emergency/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\EmployeeEmergencyContactController@store',
        'controller' => 'App\\Http\\Controllers\\EmployeeEmergencyContactController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.emp.emergency.store',
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
    'hr.emp.emergency.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/emp/emergency/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\EmployeeEmergencyContactController@delete',
        'controller' => 'App\\Http\\Controllers\\EmployeeEmergencyContactController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.emp.emergency.delete',
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
    'hr.emp.emergency.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/emp/emergency/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\EmployeeEmergencyContactController@get',
        'controller' => 'App\\Http\\Controllers\\EmployeeEmergencyContactController@get',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.emp.emergency.get',
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
    'hr.emp.emergency.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/emp/emergency/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\EmployeeEmergencyContactController@update',
        'controller' => 'App\\Http\\Controllers\\EmployeeEmergencyContactController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.emp.emergency.update',
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
    'hr.emp.emergency.rv.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/emp/emergency/mv/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\EmployeeEmergencyContactController@getEditView',
        'controller' => 'App\\Http\\Controllers\\EmployeeEmergencyContactController@getEditView',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.emp.emergency.rv.edit',
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
    'hr.manager' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/manager',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS|Manager',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Manager\\ManagerController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Manager\\ManagerController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.manager',
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
    'hr.manager.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/manager/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS|Manager',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Manager\\ManagerController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Manager\\ManagerController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.manager.list',
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
    'hr.manager.timesheet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/manager/timesheet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS|Manager',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Manager\\ManagerTimesheetController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Manager\\ManagerTimesheetController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.manager.timesheet',
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
    'hr.manager.timesheet.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/manager/timesheet/list/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS|Manager',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Manager\\ManagerTimesheetController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Manager\\ManagerTimesheetController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.manager.timesheet.list',
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
    'hr.manager.timesheet.status.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hr/manager/timesheet/status/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS|Manager',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Manager\\ManagerTimesheetController@updateStatus',
        'controller' => 'App\\Http\\Controllers\\hr\\Manager\\ManagerTimesheetController@updateStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.manager.timesheet.status.update',
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
    'hr.manager.timesheet.status.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/manager/timesheet/status/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS|Manager',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Manager\\ManagerTimesheetController@editStatus',
        'controller' => 'App\\Http\\Controllers\\hr\\Manager\\ManagerTimesheetController@editStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.manager.timesheet.status.edit',
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
    'hr.manager.timesheet.entries.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/manager/timesheet/entries/list/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS|Manager',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Manager\\ManagerTimesheetController@list_entries',
        'controller' => 'App\\Http\\Controllers\\hr\\Manager\\ManagerTimesheetController@list_entries',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.manager.timesheet.entries.list',
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
    'tracki.employee.timesheet.manager.entries.mv.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/manager/timesheet/entries/mv/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS|Manager',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Manager\\ManagerTimesheetController@getEntries',
        'controller' => 'App\\Http\\Controllers\\hr\\Manager\\ManagerTimesheetController@getEntries',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'tracki.employee.timesheet.manager.entries.mv.get',
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
    'hr.payroll.timesheet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/payroll/timesheet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS|Payroll',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Pay\\PayrollTimesheetController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Pay\\PayrollTimesheetController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.payroll.timesheet',
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
    'hr.payroll.timesheet.review' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/payroll/timesheet/review/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS|Payroll',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Pay\\PayrollTimesheetController@reviewed',
        'controller' => 'App\\Http\\Controllers\\hr\\Pay\\PayrollTimesheetController@reviewed',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.payroll.timesheet.review',
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
    'hr.payroll.timesheet.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/payroll/timesheet/list/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS|Payroll',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Pay\\PayrollTimesheetController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Pay\\PayrollTimesheetController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.payroll.timesheet.list',
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
    'hr.payroll.timesheet.missing' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/payroll/timesheet/missing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS|Payroll',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Pay\\PayrollTimesheetController@missingTimesheet',
        'controller' => 'App\\Http\\Controllers\\hr\\Pay\\PayrollTimesheetController@missingTimesheet',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.payroll.timesheet.missing',
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
    'hr.payroll.timesheet.missing.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/payroll/timesheet/missing/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS|Payroll',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Pay\\PayrollTimesheetController@listMissingTimesheet',
        'controller' => 'App\\Http\\Controllers\\hr\\Pay\\PayrollTimesheetController@listMissingTimesheet',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.payroll.timesheet.missing.list',
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
    'hr.payroll.bank' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/payroll/bank',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS|Payroll',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Pay\\PayrollBankController@index',
        'controller' => 'App\\Http\\Controllers\\hr\\Pay\\PayrollBankController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.payroll.bank',
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
    'hr.payroll.bank.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/payroll/bank/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS|Payroll',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Pay\\PayrollBankController@list',
        'controller' => 'App\\Http\\Controllers\\hr\\Pay\\PayrollBankController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.payroll.bank.list',
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
    'hr.payroll.payment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/payroll/payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS|Payroll',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Pay\\PayrollBankController@payment_index',
        'controller' => 'App\\Http\\Controllers\\hr\\Pay\\PayrollBankController@payment_index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.payroll.payment',
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
    'hr.payroll.payment.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hr/payroll/payment/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'auth',
          3 => 'otp',
          4 => 'XssSanitizer',
          5 => 'role:HRMS|Payroll',
          6 => 'roles:user',
          7 => 'prevent-back-history',
          8 => 'auth.session',
          9 => 'permission:employee.show',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\hr\\Pay\\PayrollBankController@payment_list',
        'controller' => 'App\\Http\\Controllers\\hr\\Pay\\PayrollBankController@payment_list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hr.payroll.payment.list',
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
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'guest',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
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
    'tracki.auth.login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'prevent-back-history',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\AdminController@login',
        'controller' => 'App\\Http\\Controllers\\AdminController@login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'tracki.auth.login',
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
    'auth.signin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/signin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'prevent-back-history',
          3 => 'prevent-back-history',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\AdminController@signIn',
        'controller' => 'App\\Http\\Controllers\\AdminController@signIn',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'auth.signin',
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
    'tracki.auth.forgot' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tracki/auth/forgot',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'prevent-back-history',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\AdminController@forgotPassword',
        'controller' => 'App\\Http\\Controllers\\AdminController@forgotPassword',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'tracki.auth.forgot',
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
    'forgot.password.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'prevent-back-history',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\AdminController@submitForgetPasswordForm',
        'controller' => 'App\\Http\\Controllers\\AdminController@submitForgetPasswordForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'forgot.password.post',
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
    'reset.password.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tracki/auth/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'prevent-back-history',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\AdminController@showResetPasswordForm',
        'controller' => 'App\\Http\\Controllers\\AdminController@showResetPasswordForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'reset.password.get',
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
    'reset.password.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'prevent-back-history',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\AdminController@submitResetPasswordForm',
        'controller' => 'App\\Http\\Controllers\\AdminController@submitResetPasswordForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'reset.password.post',
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
    'generated::vC38f5lAf3GDhS1m' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'send-mail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'prevent-back-history',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\SendMailController@index',
        'controller' => 'App\\Http\\Controllers\\SendMailController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::vC38f5lAf3GDhS1m',
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
    'generated::oGbhhJNddzJSD0Zp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'send-mail2',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'prevent-back-history',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\SendMailController@sendTaskAssignmentEmail',
        'controller' => 'App\\Http\\Controllers\\SendMailController@sendTaskAssignmentEmail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::oGbhhJNddzJSD0Zp',
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
    'generated::edOSc8aY6e2PMVWB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'prevent-back-history',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\SendMailController@sendTaskAssignmentNotifcation',
        'controller' => 'App\\Http\\Controllers\\SendMailController@sendTaskAssignmentNotifcation',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::edOSc8aY6e2PMVWB',
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
    'whatsapp.send' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'whatsapp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'prevent-back-history',
          2 => 'prevent-back-history',
        ),
        0 => 'XssSanitizer',
        'uses' => 'App\\Http\\Controllers\\CommunicationChannels@sendWhatsapp',
        'controller' => 'App\\Http\\Controllers\\CommunicationChannels@sendWhatsapp',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'whatsapp.send',
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
