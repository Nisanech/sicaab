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
        // Inicio permisos usuarios

        Permission::create([
            'name'        => 'Listar usuarios',
            'slug'        => 'usuarios/users.index',
            'description' => 'Lista todos los usuarios registrados en el sistema',
        ]);

        Permission::create([
            'name'        => 'Registrar usuarios',
            'slug'        => 'usuarios/users.create',
            'description' => 'Registrar usarios en el sistema',
        ]);

        Permission::create([
            'name'        => 'Ver detalle del usuario',
            'slug'        => 'usuarios/users.show',
            'description' => 'Ver el detalle del usuario',
        ]);

        Permission::create([
            'name'        => 'Editar usuario',
            'slug'        => 'usuarios/users.edit',
            'description' => 'Editar la información del usuario',
        ]);

        Permission::create([
            'name'        => 'Inactivar usuario',
            'slug'        => 'usuarios/users.destroy',
            'description' => 'Inactivar el usuario',
        ]);

        // Fin permisos usuarios

        // Inicio permisos roles

        Permission::create([
            'name'        => 'Listar roles',
            'slug'        => 'usuarios/roles.index',
            'description' => 'Lista todos los roles registrados en el sistema',
        ]);

        Permission::create([
            'name'        => 'Crear roles',
            'slug'        => 'usuarios/roles.create',
            'description' => 'Crear roles del sistema',
        ]);

        Permission::create([
            'name'        => 'Ver detalle del rol',
            'slug'        => 'usuarios/roles.show',
            'description' => 'Ver el detalle del rol',
        ]);

        Permission::create([
            'name'        => 'Editar rol',
            'slug'        => 'usuarios/roles.edit',
            'description' => 'Editar información del rol',
        ]);

        Permission::create([
            'name'        => 'Inactivar rol',
            'slug'        => 'usuarios/roles.destroy',
            'description' => 'Inactivar el rol',
        ]);

        // Fin permisos roles
        // Fin permisos módulo usuarios

        // Inicio permisos módulo comercial
        // Inicio permisos orden de compra
        
        Permission::create([
            'name'        => 'Listar órdenes de compra',
            'slug'        => 'comercial/orden_compra.index',
            'description' => 'Lista todas las órdenes de compra ingresadas en el sistema',
        ]);

        Permission::create([
            'name'        => 'Crear orden de compra',
            'slug'        => 'comercial/orden_compra.create',
            'description' => 'Crear orden de compra para los productos a fabricar',
        ]);

        Permission::create([
            'name'        => 'Ver detalle de la orden de compra',
            'slug'        => 'comercial/orden_compra.show',
            'description' => 'Ver el detalle de la orden de compra',
        ]);

        Permission::create([
            'name'        => 'Editar orden de compra',
            'slug'        => 'comercial/orden_compra.edit',
            'description' => 'Editar la orden de compra',
        ]);

        Permission::create([
            'name'        => 'Cancelar orden de compra',
            'slug'        => 'comercial/orden_compra.destroy',
            'description' => 'Cancelar la orden de compra',
        ]);

        // Fin permisos orden de compra
        
        // Inicio permisos clientes
        
        Permission::create([
            'name'        => 'Listar clientes',
            'slug'        => 'comercial/cliente.index',
            'description' => 'Lista todos los clientes registrados en el sistema',
        ]);

        Permission::create([
            'name'        => 'Crear cliente',
            'slug'        => 'comercial/cliente.create',
            'description' => 'Crear cliente',
        ]);

        Permission::create([
            'name'        => 'Ver detalle del cliente',
            'slug'        => 'comercial/cliente.show',
            'description' => 'Ver el detalle del cliente',
        ]);

        Permission::create([
            'name'        => 'Editar cliente',
            'slug'        => 'comercial/cliente.edit',
            'description' => 'Editar la información del cliente',
        ]);

        Permission::create([
            'name'        => 'Inactivar cliente',
            'slug'        => 'comercial/cliente.destroy',
            'description' => 'Inactivar el cliente',
        ]);

        // Fin permisos clientes

        // Inicio permisos proveedores
        
        Permission::create([
            'name'        => 'Listar proveedores',
            'slug'        => 'comercial/proveedores.index',
            'description' => 'Lista todos los proveedores registrados en el sistema',
        ]);

        Permission::create([
            'name'        => 'Crear proveedor',
            'slug'        => 'comercial/proveedores.create',
            'description' => 'Crear proveedor',
        ]);

        Permission::create([
            'name'        => 'Ver detalle del proveedor',
            'slug'        => 'comercial/proveedores.show',
            'description' => 'Ver el detalle del proveedor',
        ]);

        Permission::create([
            'name'        => 'Editar proveedor',
            'slug'        => 'comercial/proveedores.edit',
            'description' => 'Editar la información del proveedor',
        ]);

        Permission::create([
            'name'        => 'Inactivar proveedor',
            'slug'        => 'comercial/proveedores.destroy',
            'description' => 'Inactivar el proveedor',
        ]);

        // Fin permisos proveedores

        // Inicio permisos productos
        
        Permission::create([
            'name'        => 'Listar productos',
            'slug'        => 'comercial/productos.index',
            'description' => 'Lista todos los productos registrados en el sistema',
        ]);

        Permission::create([
            'name'        => 'Crear producto',
            'slug'        => 'comercial/productos.create',
            'description' => 'Crear producto',
        ]);

        Permission::create([
            'name'        => 'Ver detalle del producto',
            'slug'        => 'comercial/productos.show',
            'description' => 'Ver el detalle del producto',
        ]);

        Permission::create([
            'name'        => 'Editar producto',
            'slug'        => 'comercial/productos.edit',
            'description' => 'Editar la información del producto',
        ]);

        Permission::create([
            'name'        => 'Inactivar producto',
            'slug'        => 'comercial/productos.destroy',
            'description' => 'Inactivar el producto',
        ]);

        // Fin permisos productos

        // Inicio permisos artes
        
        Permission::create([
            'name'        => 'Listar artes del producto',
            'slug'        => 'comercial/artes.index',
            'description' => 'Lista todas las artes del producto registradas en el sistema',
        ]);

        Permission::create([
            'name'        => 'Cargar arte del producto',
            'slug'        => 'comercial/artes.create',
            'description' => 'Cargar arte del producto a fabricar',
        ]);

        Permission::create([
            'name'        => 'Ver detalle del arte',
            'slug'        => 'comercial/artes.show',
            'description' => 'Ver el detalle del arte',
        ]);

        Permission::create([
            'name'        => 'Editar arte',
            'slug'        => 'comercial/artes.edit',
            'description' => 'Editar la información del arte',
        ]);

        Permission::create([
            'name'        => 'Inactivar arte',
            'slug'        => 'comercial/artes.destroy',
            'description' => 'Inactivar el arte',
        ]);

        // Fin permisos artes

        // Inicio permisos orden de pago
        
        Permission::create([
            'name'        => 'Listar órdenes de pago',
            'slug'        => 'comercial/orden_pago.index',
            'description' => 'Lista todas las órdenes de pago ingresadas en el sistema',
        ]);

        Permission::create([
            'name'        => 'Crear orden de pago',
            'slug'        => 'comercial/orden_pago.create',
            'description' => 'Crear orden de pago para los productos fabricados',
        ]);

        Permission::create([
            'name'        => 'Ver detalle de la orden de pago',
            'slug'        => 'comercial/orden_pago.show',
            'description' => 'Ver el detalle de la orden de pago',
        ]);

        Permission::create([
            'name'        => 'Editar orden de pago',
            'slug'        => 'comercial/orden_pago.edit',
            'description' => 'Editar la orden de pago',
        ]);

        Permission::create([
            'name'        => 'Anular orden de pago',
            'slug'        => 'comercial/orden_pago.destroy',
            'description' => 'Anular la orden de pago',
        ]);

        // Fin permisos orden de pago

        // Inicio permisos estado de pedido
        
        Permission::create([
            'name'        => 'Listar órdenes de compra',
            'slug'        => 'comercial/estado_pedido.index',
            'description' => 'Lista las órdenes de compra registradas en el sistema',
        ]);

        Permission::create([
            'name'        => 'Ver estado del pedido',
            'slug'        => 'comercial/estado_pedido.show',
            'description' => 'Ver el estado del pedido según la orden de compra',
        ]);

        // Fin permisos estado de pedido
        // Fin permisos módulo comercial

        // Inicio permisos módulo almacén y logística
        // Inicio permisos materiales
        
        Permission::create([
            'name'        => 'Listar materiales',
            'slug'        => 'almacen/materiales.index',
            'description' => 'Lista todos los materiales ingresados en el sistema',
        ]);

        Permission::create([
            'name'        => 'Ingreso de materiales',
            'slug'        => 'almacen/materiales.create',
            'description' => 'Ingresar materiales nuevos al sistema',
        ]);

        Permission::create([
            'name'        => 'Ver detalle del material',
            'slug'        => 'almacen/materiales.show',
            'description' => 'Ver el detalle del material',
        ]);

        Permission::create([
            'name'        => 'Editar material',
            'slug'        => 'almacen/materiales.edit',
            'description' => 'Editar la información del material',
        ]);

        // Fin permisos materiales

        // Inicio permisos requerimiento de compra
        
        Permission::create([
            'name'        => 'Listar requerimiento de compra',
            'slug'        => 'almacen/requerimiento_compra.index',
            'description' => 'Lista todos los requerimientos de compra ingresados en el sistema',
        ]);

        Permission::create([
            'name'        => 'Crear requerimiento de compra',
            'slug'        => 'almacen/requerimiento_compra.create',
            'description' => 'Crear requerimiento de compra para los materiales de los productos a fabricar',
        ]);

        Permission::create([
            'name'        => 'Ver detalle del requerimiento de compra',
            'slug'        => 'almacen/requerimiento_compra.show',
            'description' => 'Ver el detalle del requerimiento de compra',
        ]);

        Permission::create([
            'name'        => 'Editar requerimiento de compra',
            'slug'        => 'almacen/requerimiento_compra.edit',
            'description' => 'Editar el requerimiento de compra',
        ]);

        Permission::create([
            'name'        => 'Cancelar requerimiento de compra',
            'slug'        => 'almacen/requerimiento_compra.destroy',
            'description' => 'Cancelar el requerimiento de compra',
        ]);

        // Fin permisos requerimiento de compra

        // Inicio permisos guías de entrega
        
        Permission::create([
            'name'        => 'Listar entregas del producto terminado',
            'slug'        => 'almacen/remisiones.index',
            'description' => 'Lista todas las guías de entrega del producto terminado',
        ]);

        Permission::create([
            'name'        => 'Crear guía de entrega',
            'slug'        => 'almacen/remisiones.create',
            'description' => 'Crear guía de entrega del producto terminado',
        ]);

        Permission::create([
            'name'        => 'Ver detalle de la guía de entrega',
            'slug'        => 'almacen/remisiones.show',
            'description' => 'Ver el detalle de la guía de entrega',
        ]);

        Permission::create([
            'name'        => 'Editar guía de entrega',
            'slug'        => 'almacen/remisiones.edit',
            'description' => 'Editar la guía de entrega',
        ]);

        Permission::create([
            'name'        => 'Cancelar guía de entrega',
            'slug'        => 'almacen/remisiones.destroy',
            'description' => 'Cancelar la guía de entrega',
        ]);

        // Fin permisos guías de entrega
        // Fin permisos módulo almacén y logística

        // Inicio permisos módulo producción
        // Inicio permisos ficha técnica
        
        Permission::create([
            'name'        => 'Listar ficha técnica del producto a fabricar',
            'slug'        => 'produccion/ficha_tecnica.index',
            'description' => 'Lista todas las fichas técnicas de los productos a fabricar',
        ]);

        Permission::create([
            'name'        => 'Crear ficha técnica',
            'slug'        => 'produccion/ficha_tecnica.create',
            'description' => 'Crear ficha técnica del producto a fabricar',
        ]);

        Permission::create([
            'name'        => 'Ver detalle de la ficha técnica',
            'slug'        => 'produccion/ficha_tecnica.show',
            'description' => 'Ver el detalle de la ficha técnica',
        ]);

        Permission::create([
            'name'        => 'Editar ficha técnica',
            'slug'        => 'produccion/ficha_tecnica.edit',
            'description' => 'Editar la ficha técnica',
        ]);

        Permission::create([
            'name'        => 'Anular ficha técnica',
            'slug'        => 'produccion/ficha_tecnica.destroy',
            'description' => 'Anular la ficha técnica',
        ]);

        // Fin permisos ficha técnica

        // Inicio permisos planeación de producción
        
        Permission::create([
            'name'        => 'Listar planeación de producción',
            'slug'        => 'produccion/planeacion.index',
            'description' => 'Lista todas las planeaciones de producción',
        ]);

        Permission::create([
            'name'        => 'Crear planeación de producción',
            'slug'        => 'produccion/planeacion.create',
            'description' => 'Crear planeación de producción del producto a fabricar',
        ]);

        Permission::create([
            'name'        => 'Ver detalle de la planeación de producción',
            'slug'        => 'produccion/planeacion.show',
            'description' => 'Ver el detalle de la planeación de producción',
        ]);

        Permission::create([
            'name'        => 'Editar planeación de producción',
            'slug'        => 'produccion/planeacion.edit',
            'description' => 'Editar planeación de producción',
        ]);

        Permission::create([
            'name'        => 'Anular planeación de producción',
            'slug'        => 'produccion/planeacion.destroy',
            'description' => 'Anular planeación de producción',
        ]);

        // Fin permisos planeación de producción

        // Inicio permisos orden de producción
        
        Permission::create([
            'name'        => 'Listar orden de producción',
            'slug'        => 'produccion/orden_produccion.index',
            'description' => 'Lista todas las órdenes de producción',
        ]);

        Permission::create([
            'name'        => 'Crear orden de producción',
            'slug'        => 'produccion/orden_produccion.create',
            'description' => 'Crear orden de producción del producto a fabricar',
        ]);

        Permission::create([
            'name'        => 'Ver detalle de la orden de producción',
            'slug'        => 'produccion/orden_produccion.show',
            'description' => 'Ver el detalle de la orden de producción',
        ]);

        Permission::create([
            'name'        => 'Editar orden de producción',
            'slug'        => 'produccion/orden_produccion.edit',
            'description' => 'Editar orden de producción',
        ]);

        Permission::create([
            'name'        => 'Cancelar orden de producción',
            'slug'        => 'produccion/orden_produccion.destroy',
            'description' => 'Cancelar orden de producción',
        ]);

        // Fin permisos orden de producción

        // Inicio permisos certificado de calidad
        
        Permission::create([
            'name'        => 'Listar certificados de calidad',
            'slug'        => 'produccion/certificado_calidad.index',
            'description' => 'Lista todos los certificados de calidad',
        ]);

        Permission::create([
            'name'        => 'Crear certificado de calidad',
            'slug'        => 'produccion/certificado_calidad.create',
            'description' => 'Crear certificado de calidad del producto terminado',
        ]);

        Permission::create([
            'name'        => 'Ver detalle del certificado de calidad',
            'slug'        => 'produccion/certificado_calidad.show',
            'description' => 'Ver el detalle del certificado de calidad',
        ]);

        Permission::create([
            'name'        => 'Editar certificado de calidad',
            'slug'        => 'produccion/certificado_calidad.edit',
            'description' => 'Editar certificado de calidad',
        ]);

        Permission::create([
            'name'        => 'Eliminar certificado de calidad',
            'slug'        => 'produccion/certificado_calidad.destroy',
            'description' => 'Eliminar certificado de calidad',
        ]);

        // Fin permisos certificado de calidad

        // Inicio permisos orden de servicio
        
        Permission::create([
            'name'        => 'Listar orden de servicio',
            'slug'        => 'produccion/orden_servicio.index',
            'description' => 'Lista todas las órdenes de servicio',
        ]);

        Permission::create([
            'name'        => 'Crear orden de servicio',
            'slug'        => 'produccion/orden_servicio.create',
            'description' => 'Crear orden de servicio del producto a fabricar',
        ]);

        Permission::create([
            'name'        => 'Ver detalle de la orden de servicio',
            'slug'        => 'produccion/orden_servicio.show',
            'description' => 'Ver el detalle de la orden de servicio',
        ]);

        Permission::create([
            'name'        => 'Editar orden de servicio',
            'slug'        => 'produccion/orden_servicio.edit',
            'description' => 'Editar orden de servicio',
        ]);

        Permission::create([
            'name'        => 'Cancelar orden de servicio',
            'slug'        => 'produccion/orden_servicio.destroy',
            'description' => 'Cancelar orden de servicio',
        ]);

        // Fin permisos orden de servicio
        // Fin permisos módulo producción

    }
}
