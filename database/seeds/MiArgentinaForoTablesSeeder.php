<?php

use Illuminate\Database\Seeder;

class MiArgentinaForoTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        \DB::table('permissions')->delete();
    
        \DB::table('permissions')->insert([
            0 => [
                'id' => 1,
                'name' => 'users.show',
            ],
            1 => [
                'id' => 2,
                'name' => 'users.edit',
            ],
            2 => [
                'id' => 3,
                'name' => 'users.delete',
            ],
            3 => [
                'id' => 4,
                'name' => 'role.create',
            ],
            4 => [
                'id' => 5,
                'name' => 'role.show',
            ],
            5 => [
                'id' => 6,
                'name' => 'role.edit',
            ],
            6 => [
                'id' => 7,
                'name' => 'role.delete',
            ],
            7 => [
                'id' => 8,
                'name' => 'permission.create',
            ],
            8 => [
                'id' => 9,
                'name' => 'permission.show',
            ],
            9 => [
                'id' => 10,
                'name' => 'permission.edit',
            ],
            10 => [
                'id' => 11,
                'name' => 'permission.delete',
            ]
        ]);
    
        \DB::table('roles')->delete();
    
        \DB::table('roles')->insert([
            [
                'id' => 1,
                'name' => 'sudo'
            ],
            [
                'id' => 2,
                'name' => 'admin'
            ]
        ]);
    
        \DB::table('permission_role')->delete();
    
        \DB::table('permission_role')->insert([
            [
                'id' => 1,
                'permission_id' => 1,
                'role_id' => 1,
            ],
            [
                'id' => 2,
                'permission_id' => 2,
                'role_id' => 1,
            ],
            [
                'id' => 3,
                'permission_id' => 3,
                'role_id' => 1,
            ],
            [
                'id' => 4,
                'permission_id' => 4,
                'role_id' => 1,
            ],
            [
                'id' => 5,
                'permission_id' => 5,
                'role_id' => 1,
            ],
            [
                'id' => 6,
                'permission_id' => 6,
                'role_id' => 1,
            ],
            [
                'id' => 7,
                'permission_id' => 7,
                'role_id' => 1,
            ],
            [
                'id' => 8,
                'permission_id' => 8,
                'role_id' => 1,
            ],
            [
                'id' => 9,
                'permission_id' => 9,
                'role_id' => 1,
            ],
            [
                'id' => 10,
                'permission_id' => 10,
                'role_id' => 1,
            ],
            [
                'id' => 11,
                'permission_id' => 11,
                'role_id' => 1,
            ],
        ]);
    
        if (\DB::table('users')->find(1)) {
    
            \DB::table('role_user')->delete();
            
            \DB::table('role_user')->insert([
                [
                    'id' => 1,
                    'user_id' => 1,
                    'role_id' => 1,
                ],
                [
                    'id' => 2,
                    'user_id' => 1,
                    'role_id' => 2,
                ]
            ]);
            
        }
    
        // CREATE THE CATEGORIES
    
        \DB::table('chatter_categories')->delete();
    
        \DB::table('chatter_categories')->insert([
            [
                'id'         => null,
                'parent_id'  => null,
                'order'      => 1,
                'name'       => 'Experiencias',
                'color'      => '#ea1d76',
                'slug'       => 'experiencias',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id'         => null,
                'parent_id'  => null,
                'order'      => 2,
                'name'       => 'Propuestas de mejora',
                'color'      => '#873299',
                'slug'       => 'propuestas-de-mejora',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id'         => null,
                'parent_id'  => null,
                'order'      => 4,
                'name'       => 'Materiales de consulta',
                'color'      => '#ff4338',
                'slug'       => 'materiales-de-consulta',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id'         => null,
                'parent_id'  => null,
                'order'      => 5,
                'name'       => 'Consultas',
                'color'      => '#82bc00',
                'slug'       => 'consultas',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id'         => null,
                'parent_id'  => null,
                'order'      => 6,
                'name'       => 'Propuestas para seguir capacitándonos',
                'color'      => '#009dda',
                'slug'       => 'propuestas-para-seguir-capacitandonos',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id'         => null,
                'parent_id'  => null,
                'order'      => 7,
                'name'       => 'Ronda de Mate',
                'color'      => '#bd1e61',
                'slug'       => 'ronda-de-mate',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id'         => null,
                'parent_id'  => null,
                'order'      => 8,
                'name'       => 'Debate',
                'color'      => '#cfde00',
                'slug'       => 'debate',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id'         => null,
                'parent_id'  => null,
                'order'      => 9,
                'name'       => 'Anuncios',
                'color'      => '#5bc0de',
                'slug'       => 'anuncios',
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
    }
}
