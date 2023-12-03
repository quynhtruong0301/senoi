<?php

namespace Cms\Modules\Core\Databases\Seeds;

use Carbon\Carbon;
use Cms\Modules\Core\Models\Permission;
use Cms\Modules\Core\Models\Role;
use Cms\Modules\Core\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Helper\Table;

class SampleAuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'admin',
            'user',
            'hospital'
        ];

        $permissions = [
            'user_access',
            'user_show',
            'user_create',
            'user_edit',
            'user_delete',
            'role_access',
            'role_show',
            'role_create',
            'role_edit',
            'role_delete',
            'permission_access',
            'permission_show',
            'permission_create',
            'permission_edit',
            'permission_delete',
        ];

        $users = [
            [
                'name' => 'CMS Normal User',
                'email' => 'user@caerux.cms',
                'password' => bcrypt('00000000'),
                'email_verified_at' => Carbon::now()->timestamp
            ],
            [
                'name' => 'CMS Normal User Two',
                'email' => 'user2@caerux.cms',
                'password' => bcrypt('00000000'),
                'email_verified_at' => Carbon::now()->timestamp
            ],
            [
                'name' => 'CMS Normal User Three',
                'email' => 'user3@caerux.cms',
                'password' => bcrypt('00000000'),
                'email_verified_at' => Carbon::now()->timestamp
            ],
            [
                'name' => 'CMS Normal User Four',
                'email' => 'user4@caerux.cms',
                'password' => bcrypt('00000000'),
                'email_verified_at' => Carbon::now()->timestamp
            ],
            [
                'name' => 'CMS Normal User Five',
                'email' => 'user5@caerux.cms',
                'password' => bcrypt('00000000'),
                'email_verified_at' => Carbon::now()->timestamp
            ],
        ];
        $admins = [
            [
                'name' => 'CMS Administrator',
                'email' => 'admin@caerux.cms',
                'password' => bcrypt('00000000'),
                'email_verified_at' => Carbon::now()->timestamp
            ],
        ];
        $hospitals = [
            [
                'name' => 'CMS Hospital',
                'email' => 'hospital@caerux.cms',
                'password' => bcrypt('00000000'),
                'email_verified_at' => Carbon::now()->timestamp
            ],
            [
                'name' => 'CMS Hospital Two',
                'email' => 'hospital2@caerux.cms',
                'password' => bcrypt('00000000'),
                'email_verified_at' => Carbon::now()->timestamp
            ],
            [
                'name' => 'CMS Hospital Three',
                'email' => 'hospital3@caerux.cms',
                'password' => bcrypt('00000000'),
                'email_verified_at' => Carbon::now()->timestamp
            ],
            [
                'name' => 'CMS Hospital Four',
                'email' => 'hospital4@caerux.cms',
                'password' => bcrypt('00000000'),
                'email_verified_at' => Carbon::now()->timestamp
            ],
            [
                'name' => 'CMS Hospital Five',
                'email' => 'hospital5@caerux.cms',
                'password' => bcrypt('00000000'),
                'email_verified_at' => Carbon::now()->timestamp
            ],
        ];

        // Create permissions
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create and give permissions to roles
        // If role is admin => give all permission => using Gate::before in AuthServiceProvider
        foreach ($roles as $role) {
            $newRole = Role::create(['name' => $role]);

            if ($role == 'user') {
                $rolePermission = [
                    'user_show',
                    'role_show',
                    'permission_show',
                ];

                $newRole->givePermissionTo($rolePermission);
            }
        }

        // Create user and give role to user
        foreach ($users as $user) {
            $newUser = User::create($user);
            $newUser->assignRole('user');
        }

        foreach ($admins as $admin) {
            $newAdmin = User::create($admin);
            $newAdmin->assignRole('admin');
        }

        foreach ($hospitals as $hospital) {
            $newHospital = User::create($hospital);
            $newHospital->assignRole('hospital');
        }
    }
}
