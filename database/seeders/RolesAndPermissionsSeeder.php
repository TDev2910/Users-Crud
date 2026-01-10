<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Xóa cache quyền cũ (tránh lỗi cache khi chạy lại)
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // 2. Tạo Permissions (Các quyền cụ thể)
        Permission::create(['name' => 'access admin']); // Quyền vào trang admin
        Permission::create(['name' => 'manage users']); // Quyền quản lý user

        // 3. Tạo Roles (Vai trò) và gán quyền

        // Role User: Không có quyền gì đặc biệt
        Role::create(['name' => 'user']);

        // Role Admin: Có tất cả các quyền trên
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleAdmin->givePermissionTo(['access admin', 'manage users']);
    }
}
