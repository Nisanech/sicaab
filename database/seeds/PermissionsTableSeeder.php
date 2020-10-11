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
        // Inicio permisos módulo usuarios

        Permission::create([
            'name'        => 'Acceso módulo administrador',
            'slug'        => 'administrador',
            'description' => 'Acceso al módulo administrador',
        ]);

        // Inicio permisos usuarios

        Permission::create([
            'name'        => 'Listar usuarios',
            'slug'        => 'users.index',
            'description' => 'Lista todos los usuarios registrados en el sistema',
        ]);

        Permission::create([
            'name'        => 'Registrar usuarios',
            'slug'        => 'users.create',
            'description' => 'Registrar usarios en el sistema',
        ]);

        Permission::create([
            'name'        => 'Ver detalle del usuario',
            'slug'        => 'users.show',
            'description' => 'Ver el detalle del usuario',
        ]);

        Permission::create([
            'name'        => 'Editar usuario',
            'slug'        => 'users.edit',
            'description' => 'Editar la información del usuario',
        ]);

        Permission::create([
            'name'        => 'Inactivar usuario',
            'slug'        => 'users.destroy',
            'description' => 'Inactivar el usuario',
        ]);

        // Fin permisos usuarios

        // Inicio permisos roles

        Permission::create([
            'name'        => 'Listar roles',
            'slug'        => 'roles.index',
            'description' => 'Lista todos los roles registrados en el sistema',
        ]);

        Permission::create([
            'name'        => 'Crear roles',
            'slug'        => 'roles.create',
            'description' => 'Crear roles del sistema',
        ]);

        Permission::create([
            'name'        => 'Ver detalle del rol',
            'slug'        => 'roles.show',
            'description' => 'Ver el detalle del rol',
        ]);

        Permission::create([
            'name'        => 'Editar rol',
            'slug'        => 'roles.edit',
            'description' => 'Editar información del rol',
        ]);

        Permission::create([
            'name'        => 'Inactivar rol',
            'slug'        => 'roles.destroy',
            'description' => 'Inactivar el rol',
        ]);

        // Fin permisos roles
        // Fin permisos módulo usuarios

        // Inicio permisos módulo comercial

        Permission::create([
            'name'        => 'Acceso módulo comercial',
            'slug'        => 'comercial',
            'description' => 'Acceso al módulo comercial',
        ]);

        // Inicio permisos orden de compra
        
        Permission::create([
            'name'        => 'Listar órdenes de compra',
            'slug'        => 'orden_compra.index',
            'description' => 'Lista todas las órdenes de compra ingresadas en el sistema',
        ]);

        Permission::create([
            'name'        => 'Crear orden de compra',
            'slug'        => 'orden_compra.create',
            'description' => 'Crear orden de compra para los productos a fabricar',
        ]);

        Permission::create([
            'name'        => 'Ver detalle de la orden de compra',
            'slug'        => 'orden_compra.show',
            'description' => 'Ver el detalle de la orden de compra',
        ]);

        Permission::create([
            'name'        => 'Editar orden de compra',
            'slug'        => 'orden_compra.edit',
            'description' => 'Editar la orden de compra',
        ]);

        Permission::create([
            'name'        => 'Cancelar orden de compra',
            'slug'        => 'orden_compra.destroy',
            'description' => 'Cancelar la orden de compra',
        ]);

        // Fin permisos orden de compra
        
        // Inicio permisos clientes
        
        Permission::create([
            'name'        => 'Listar clientes',
            'slug'        => 'cliente.index',
            'description' => 'Lista todos los clientes registrados en el sistema',
        ]);

        Permission::create([
            'name'        => 'Crear cliente',
            'slug'        => 'cliente.create',
            'description' => 'Crear cliente',
        ]);

        Permission::create([
            'name'        => 'Ver detalle del cliente',
            'slug'        => 'cliente.show',
            'description' => 'Ver el detalle del cliente',
        ]);

        Permission::create([
            'name'        => 'Editar cliente',
            'slug'        => 'cliente.edit',
            'description' => 'Editar la información del cliente',
        ]);

        Permission::create([
            'name'        => 'Inactivar cliente',
            'slug'        => 'cliente.destroy',
            'description' => 'Inactivar el cliente',
        ]);

        // Fin permisos clientes

        // Inicio permisos proveedores
        
        Permission::create([
            'name'        => 'Listar proveedores',
            'slug'        => 'proveedores.index',
            'description' => 'Lista todos los proveedores registrados en el sistema',
        ]);

        Permission::create([
            'name'        => 'Crear proveedor',
            'slug'        => 'proveedores.create',
            'description' => 'Crear proveedor',
        ]);

        Permission::create([
            'name'        => 'Ver detalle del proveedor',
            'slug'        => 'proveedores.show',
            'description' => 'Ver el detalle del proveedor',
        ]);

        Permission::create([
            'name'        => 'Editar proveedor',
            'slug'        => 'proveedores.edit',
            'description' => 'Editar la información del proveedor',
        ]);

        Permission::create([
            'name'        => 'Inactivar proveedor',
            'slug'        => 'proveedores.destroy',
            'description' => 'Inactivar el proveedor',
        ]);

        // Fin permisos proveedores

        // Inicio permisos productos
        
        Permission::create([
            'name'        => 'Listar productos',
            'slug'        => 'productos.index',
            'description' => 'Lista todos los productos registrados en el sistema',
        ]);

        Permission::create([
            'name'        => 'Crear producto',
            'slug'        => 'productos.create',
            'description' => 'Crear producto',
        ]);

        Permission::create([
            'name'        => 'Ver detalle del producto',
            'slug'        => 'productos.show',
            'description' => 'Ver el detalle del producto',
        ]);

        Permission::create([
            'name'        => 'Editar producto',
            'slug'        => 'productos.edit',
            'description' => 'Editar la información del producto',
        ]);

        Permission::create([
            'name'        => 'Inactivar producto',
            'slug'        => 'productos.destroy',
            'description' => 'Inactivar el producto',
        ]);

        // Fin permisos productos

        // Inicio permisos artes
        
        Permission::create([
            'name'        => 'Listar artes del producto',
            'slug'        => 'artes.index',
            'description' => 'Lista todas las artes del producto registradas en el sistema',
        ]);

        Permission::create([
            'name'        => 'Cargar arte del producto',
            'slug'        => 'artes.create',
            'description' => 'Cargar arte del producto a fabricar',
        ]);

        Permission::create([
            'name'        => 'Ver detalle del arte',
            'slug'        => 'artes.show',
            'description' => 'Ver el detalle del arte',
        ]);

        Permission::create([
            'name'        => 'Editar arte',
            'slug'        => 'artes.edit',
            'description' => 'Editar la información del arte',
        ]);

        Permission::create([
            'name'        => 'Inactivar arte',
            'slug'        => 'artes.destroy',
            'description' => 'Inactivar el arte',
        ]);

        // Fin permisos artes

        // Inicio permisos orden de pago
        
        Permission::create([
            'name'        => 'Listar órdenes de pago',
            'slug'        => 'orden_pago.index',
            'description' => 'Lista todas las órdenes de pago ingresadas en el sistema',
        ]);

        Permission::create([
            'name'        => 'Crear orden de pago',
            'slug'        => 'orden_pago.create',
            'description' => 'Crear orden de pago para los productos fabricados',
        ]);

        Permission::create([
            'name'        => 'Ver detalle de la orden de pago',
            'slug'        => 'orden_pago.show',
            'description' => 'Ver el detalle de la orden de pago',
        ]);

        Permission::create([
            'name'        => 'Editar orden de pago',
            'slug'        => 'orden_pago.edit',
            'description' => 'Editar la orden de pago',
        ]);

        Permission::create([
            'name'        => 'Anular orden de pago',
            'slug'        => 'orden_pago.destroy',
            'description' => 'Anular la orden de pago',
        ]);

        // Fin permisos orden de pago

        // Inicio permisos estado de pedido
        
        Permission::create([
            'name'        => 'Listar órdenes de compra',
            'slug'        => 'estado_pedido.index',
            'description' => 'Lista las órdenes de compra registradas en el sistema',
        ]);

        Permission::create([
            'name'        => 'Ver estado del pedido',
            'slug'        => 'estado_pedido.show',
            'description' => 'Ver el estadoido según la orden de compra',
        ]);

        // Fin permisos estado de pedido
        // Fin permisos módulo comercial

        // Inicio permisos módulo almacén y logística

        Permission::create([
            'name'        => 'Acceso módulo almacén y logística',
            'slug'        => 'almacen',
            'description' => 'Acceso al módulo almacén y logística',
        ]);

        // Inicio permisos materiales
        
        Permission::create([
            'name'        => 'Listar materiales',
            'slug'        => 'materiales.index',
            'description' => 'Lista todos los materiales ingresados en el sistema',
        ]);

        Permission::create([
            'name'        => 'Ingreso de materiales',
            'slug'        => 'materiales.create',
            'description' => 'Ingresar materiales nuevos al sistema',
        ]);

        Permission::create([
            'name'        => 'Ver detalle del material',
            'slug'        => 'materiales.show',
            'description' => 'Ver el detalle del material',
        ]);

        Permission::create([
            'name'        => 'Editar material',
            'slug'        => 'materiales.edit',
            'description' => 'Editar la información del material',
        ]);

        // Fin permisos materiales

        // Inicio permisos requerimiento de compra
        
        Permission::create([
            'name'        => 'Listar requerimiento de compra',
            'slug'        => 'requerimiento_compra.index',
            'description' => 'Lista todos los requerimientos de compra ingresados en el sistema',
        ]);

        Permission::create([
            'name'        => 'Crear requerimiento de compra',
            'slug'        => 'requerimiento_compra.create',
            'description' => 'Crear requerimiento de compra para los materiales de los productos a fabricar',
        ]);

        Permission::create([
            'name'        => 'Ver detalle del requerimiento de compra',
            'slug'        => 'requerimiento_compra.show',
            'description' => 'Ver el detalle del requerimiento de compra',
        ]);

        Permission::create([
            'name'        => 'Editar requerimiento de compra',
            'slug'        => 'requerimiento_compra.edit',
            'description' => 'Editar el requerimiento de compra',
        ]);

        Permission::create([
            'name'        => 'Cancelar requerimiento de compra',
            'slug'        => 'requerimiento_compra.destroy',
            'description' => 'Cancelar el requerimiento de compra',
        ]);

        // Fin permisos requerimiento de compra

        // Inicio permisos guías de entrega
        
        Permission::create([
            'name'        => 'Listar entregas del producto terminado',
            'slug'        => 'remisiones.index',
            'description' => 'Lista todas las guías de entrega del producto terminado',
        ]);

        Permission::create([
            'name'        => 'Crear guía de entrega',
            'slug'        => 'remisiones.create',
            'description' => 'Crear guía de entrega del producto terminado',
        ]);

        Permission::create([
            'name'        => 'Ver detalle de la guía de entrega',
            'slug'        => 'remisiones.show',
            'description' => 'Ver el detalle de la guía de entrega',
        ]);

        Permission::create([
            'name'        => 'Editar guía de entrega',
            'slug'        => 'remisiones.edit',
            'description' => 'Editar la guía de entrega',
        ]);

        Permission::create([
            'name'        => 'Cancelar guía de entrega',
            'slug'        => 'remisiones.destroy',
            'description' => 'Cancelar la guía de entrega',
        ]);

        // Fin permisos guías de entrega
        // Fin permisos módulo almacén y logística

        // Inicio permisos módulo producción

        Permission::create([
            'name'        => 'Acceso módulo producción',
            'slug'        => 'produccion',
            'description' => 'Acceso al módulo producción',
        ]);

        // Inicio permisos ficha técnica
        
        Permission::create([
            'name'        => 'Listar ficha técnica del producto a fabricar',
            'slug'        => 'ficha_tecnica.index',
            'description' => 'Lista todas las fichas técnicas de los productos a fabricar',
        ]);

        Permission::create([
            'name'        => 'Crear ficha técnica',
            'slug'        => 'ficha_tecnica.create',
            'description' => 'Crear ficha técnica del producto a fabricar',
        ]);

        Permission::create([
            'name'        => 'Ver detalle de la ficha técnica',
            'slug'        => 'ficha_tecnica.show',
            'description' => 'Ver el detalle de la ficha técnica',
        ]);

        Permission::create([
            'name'        => 'Editar ficha técnica',
            'slug'        => 'ficha_tecnica.edit',
            'description' => 'Editar la ficha técnica',
        ]);

        Permission::create([
            'name'        => 'Anular ficha técnica',
            'slug'        => 'ficha_tecnica.destroy',
            'description' => 'Anular la ficha técnica',
        ]);

        // Fin permisos ficha técnica

        // Inicio permisos planeación de producción
        
        Permission::create([
            'name'        => 'Listar planeación de producción',
            'slug'        => 'planeacion.index',
            'description' => 'Lista todas las planeaciones de producción',
        ]);

        Permission::create([
            'name'        => 'Crear planeación de producción',
            'slug'        => 'planeacion.create',
            'description' => 'Crear planeación de producción del producto a fabricar',
        ]);

        Permission::create([
            'name'        => 'Ver detalle de la planeación de producción',
            'slug'        => 'planeacion.show',
            'description' => 'Ver el detalle de la planeación de producción',
        ]);

        Permission::create([
            'name'        => 'Editar planeación de producción',
            'slug'        => 'planeacion.edit',
            'description' => 'Editar planeación de producción',
        ]);

        Permission::create([
            'name'        => 'Anular planeación de producción',
            'slug'        => 'planeacion.destroy',
            'description' => 'Anular planeación de producción',
        ]);

        // Fin permisos planeación de producción

        // Inicio permisos orden de producción
        
        Permission::create([
            'name'        => 'Listar orden de producción',
            'slug'        => 'orden_produccion.index',
            'description' => 'Lista todas las órdenes de producción',
        ]);

        Permission::create([
            'name'        => 'Crear orden de producción',
            'slug'        => 'orden_produccion.create',
            'description' => 'Crear orden de producción del producto a fabricar',
        ]);

        Permission::create([
            'name'        => 'Ver detalle de la orden de producción',
            'slug'        => 'orden_produccion.show',
            'description' => 'Ver el detalle de la orden de producción',
        ]);

        Permission::create([
            'name'        => 'Editar orden de producción',
            'slug'        => 'orden_produccion.edit',
            'description' => 'Editar orden de producción',
        ]);

        Permission::create([
            'name'        => 'Cancelar orden de producción',
            'slug'        => 'orden_produccion.destroy',
            'description' => 'Cancelar orden de producción',
        ]);

        // Fin permisos orden de producción

        // Inicio permisos certificado de calidad
        
        Permission::create([
            'name'        => 'Listar certificados de calidad',
            'slug'        => 'certificado_calidad.index',
            'description' => 'Lista todos los certificados de calidad',
        ]);

        Permission::create([
            'name'        => 'Crear certificado de calidad',
            'slug'        => 'certificado_calidad.create',
            'description' => 'Crear certificado de calidad del producto terminado',
        ]);

        Permission::create([
            'name'        => 'Ver detalle del certificado de calidad',
            'slug'        => 'certificado_calidad.show',
            'description' => 'Ver el detalle del certificado de calidad',
        ]);

        Permission::create([
            'name'        => 'Editar certificado de calidad',
            'slug'        => 'certificado_calidad.edit',
            'description' => 'Editar certificado de calidad',
        ]);

        Permission::create([
            'name'        => 'Eliminar certificado de calidad',
            'slug'        => 'certificado_calidad.destroy',
            'description' => 'Eliminar certificado de calidad',
        ]);

        // Fin permisos certificado de calidad

        // Inicio permisos orden de servicio
        
        Permission::create([
            'name'        => 'Listar orden de servicio',
            'slug'        => 'orden_servicio.index',
            'description' => 'Lista todas las órdenes de servicio',
        ]);

        Permission::create([
            'name'        => 'Crear orden de servicio',
            'slug'        => 'orden_servicio.create',
            'description' => 'Crear orden de servicio del producto a fabricar',
        ]);

        Permission::create([
            'name'        => 'Ver detalle de la orden de servicio',
            'slug'        => 'orden_servicio.show',
            'description' => 'Ver el detalle de la orden de servicio',
        ]);

        Permission::create([
            'name'        => 'Editar orden de servicio',
            'slug'        => 'orden_servicio.edit',
            'description' => 'Editar orden de servicio',
        ]);

        Permission::create([
            'name'        => 'Cancelar orden de servicio',
            'slug'        => 'orden_servicio.destroy',
            'description' => 'Cancelar orden de servicio',
        ]);

        // Fin permisos orden de servicio
        // Fin permisos módulo producción

        // Inicio permisos dashboard

        Permission::create([
            'name'        => 'Acceso dashboard',
            'slug'        => 'principal',
            'description' => 'Acceso a la vista principal del sistema',
        ]);
        
        // Fin permisos dashboard
    }
}
