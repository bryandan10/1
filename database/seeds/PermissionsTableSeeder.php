<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //USUARIOS
        Permission::create([
            'name'           =>'Navegar usuarios',
            'slug'           =>'users.index',
            'description'    =>'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
            'name'           =>'Ver detalle de Usuario',
            'slug'           =>'users.show',
            'description'    =>'Ver en detalle cada usuario del sistema',
        ]);

        Permission::create([
            'name'           =>'Edición de usuarios',
            'slug'           =>'users.edit',
            'description'    =>'Editar cualquier dato de un usuario del sistema',
        ]);

        Permission::create([
            'name'           =>'Eliminar usuario',
            'slug'           =>'users.destroy',
            'description'    =>'Elimina cualquier usuario del sistema',
        ]);

        Permission::create([
            'name'           =>'Actualizar usuario',
            'slug'           =>'informacion.personal',
            'description'    =>'Actualiza la informacion personal',
        ]);



        //ROLES
        Permission::create([
            'name'           =>'Navegar roles',
            'slug'           =>'roles.index',
            'description'    =>'Lista y navega todos los roles del sistema',
        ]);

        Permission::create([
            'name'           =>'Ver detalle de rol',
            'slug'           =>'roles.show',
            'description'    =>'Ver en detalle cada rol del sistema',
        ]);

        Permission::create([
            'name'           =>'Creación de roles',
            'slug'           =>'roles.create',
            'description'    =>'Permite crear un rol en el sistema',
        ]);

        Permission::create([
            'name'           =>'Edición de roles',
            'slug'           =>'roles.edit',
            'description'    =>'Editar cualquier dato de un rol del sistema',
        ]);

        Permission::create([
            'name'           =>'Eliminar rol',
            'slug'           =>'roles.destroy',
            'description'    =>'Elimina cualquier rol del sistema',
        ]);


        //Profesores
        Permission::create([
            'name'           =>'Navegar profesores',
            'slug'           =>'profesores.index',
            'description'    =>'Lista y navega todos los profesores del sistema',
        ]);

        Permission::create([
            'name'           =>'Ver detalle de profesores',
            'slug'           =>'profesores.show',
            'description'    =>'Ver en detalle cada profesor del sistema',
        ]);

        Permission::create([
            'name'           =>'Creación de profesores',
            'slug'           =>'profesores.create',
            'description'    =>'Permite crear un profesor en el sistema',
        ]);

        Permission::create([
            'name'           =>'Edición de profesor',
            'slug'           =>'profesores.edit',
            'description'    =>'Editar cualquier dato de una profesor del sistema',
        ]);

        Permission::create([
            'name'           =>'Eliminar profesor',
            'slug'           =>'profesores.destroy',
            'description'    =>'Elimina cualquier profesor del sistema',
        ]);


        //Aulas
        Permission::create([
            'name'           =>'Navegar aulas',
            'slug'           =>'aulas.index',
            'description'    =>'Lista y navega todos los aulas del sistema',
        ]);

        Permission::create([
            'name'           =>'Ver detalle de aulas',
            'slug'           =>'aulas.show',
            'description'    =>'Ver en detalle cada aula del sistema',
        ]);

        Permission::create([
            'name'           =>'Creación de aulas',
            'slug'           =>'aulas.create',
            'description'    =>'Permite crear un aula en el sistema',
        ]);

        Permission::create([
            'name'           =>'Edición de aula',
            'slug'           =>'aulas.edit',
            'description'    =>'Editar cualquier dato de una aula del sistema',
        ]);

        Permission::create([
            'name'           =>'Eliminar aula',
            'slug'           =>'aulas.destroy',
            'description'    =>'Elimina cualquier aula del sistema',
        ]);

        //Libros
        Permission::create([
            'name'           =>'Navegar libros',
            'slug'           =>'libros.index',
            'description'    =>'Lista y navega todos los libros del sistema',
        ]);

        Permission::create([
            'name'           =>'Ver detalle de libros',
            'slug'           =>'libros.show',
            'description'    =>'Ver en detalle cada libro del sistema',
        ]);

        Permission::create([
            'name'           =>'Creación de libros',
            'slug'           =>'libros.create',
            'description'    =>'Permite crear un libro en el sistema',
        ]);

        Permission::create([
            'name'           =>'Edición de libro',
            'slug'           =>'libros.edit',
            'description'    =>'Editar cualquier dato de una libro del sistema',
        ]);

        Permission::create([
            'name'           =>'Eliminar libro',
            'slug'           =>'libros.destroy',
            'description'    =>'Elimina cualquier libro del sistema',
        ]);


        //Niveles
        Permission::create([
            'name'           =>'Navegar niveles',
            'slug'           =>'niveles.index',
            'description'    =>'Lista y navega todos los niveles del sistema',
        ]);

        Permission::create([
            'name'           =>'Ver detalle de niveles',
            'slug'           =>'niveles.show',
            'description'    =>'Ver en detalle cada nivel del sistema',
        ]);

        Permission::create([
            'name'           =>'Creación de niveles',
            'slug'           =>'niveles.create',
            'description'    =>'Permite crear un nivel en el sistema',
        ]);

        Permission::create([
            'name'           =>'Edición de nivel',
            'slug'           =>'niveles.edit',
            'description'    =>'Editar cualquier dato de una nivel del sistema',
        ]);

        Permission::create([
            'name'           =>'Eliminar nivel',
            'slug'           =>'niveles.destroy',
            'description'    =>'Elimina cualquier nivel del sistema',
        ]);


        //Matriculas
        Permission::create([
            'name'           =>'Navegar matriculas',
            'slug'           =>'matriculas.index',
            'description'    =>'Lista y navega todos los matriculas del sistema',
        ]);

        Permission::create([
            'name'           =>'Ver detalle de matriculas',
            'slug'           =>'matriculas.show',
            'description'    =>'Ver en detalle cada matricula del sistema',
        ]);

        Permission::create([
            'name'           =>'Creación de matriculas',
            'slug'           =>'matriculas.create',
            'description'    =>'Permite crear un matricula en el sistema',
        ]);

        Permission::create([
            'name'           =>'Edición de matricula',
            'slug'           =>'matriculas.edit',
            'description'    =>'Editar cualquier dato de una matricula del sistema',
        ]);

        Permission::create([
            'name'           =>'Eliminar matricula',
            'slug'           =>'matriculas.destroy',
            'description'    =>'Elimina cualquier matricula del sistema',
        ]);


        //Progresos
        Permission::create([
            'name'           =>'Navegar progresos',
            'slug'           =>'progresos.index',
            'description'    =>'Lista y navega todos los progresos del sistema',
        ]);

        Permission::create([
            'name'           =>'Ver detalle de progresos',
            'slug'           =>'progresos.show',
            'description'    =>'Ver en detalle cada progreso del sistema',
        ]);

        Permission::create([
            'name'           =>'Creación de progresos',
            'slug'           =>'progresos.create',
            'description'    =>'Permite crear un progreso en el sistema',
        ]);

        Permission::create([
            'name'           =>'Edición de progreso',
            'slug'           =>'progresos.edit',
            'description'    =>'Editar cualquier dato de una progreso del sistema',
        ]);

        Permission::create([
            'name'           =>'Eliminar progreso',
            'slug'           =>'progresos.destroy',
            'description'    =>'Elimina cualquier progreso del sistema',
        ]);


        //Facturas
        Permission::create([
            'name'           =>'Navegar facturas',
            'slug'           =>'facturas.index',
            'description'    =>'Lista y navega todos los facturas del sistema',
        ]);

        Permission::create([
            'name'           =>'Ver detalle de facturas',
            'slug'           =>'facturas.show',
            'description'    =>'Ver en detalle cada factura del sistema',
        ]);

        Permission::create([
            'name'           =>'Creación de facturas',
            'slug'           =>'facturas.create',
            'description'    =>'Permite crear un factura en el sistema',
        ]);

        Permission::create([
            'name'           =>'Edición de factura',
            'slug'           =>'facturas.edit',
            'description'    =>'Editar cualquier dato de una factura del sistema',
        ]);

        Permission::create([
            'name'           =>'Eliminar factura',
            'slug'           =>'facturas.destroy',
            'description'    =>'Elimina cualquier factura del sistema',
        ]);
    }
}
