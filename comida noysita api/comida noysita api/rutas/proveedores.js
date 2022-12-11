const express = require('express')
const routes = express.Router()

routes.get('/proveedores', (req, res) =>{
    req.getConnection((err, conn) =>{
        if(err) return res.send(err)

        conn.query('SELECT *FROM TBL_PROVEEDOR', (err, rows)=>{
            if(err) return res.send(err)

            res.send(rows)
        })
    })
})


//COLOCAR TODOS LOS CAMPOS DE PROVEEDOR OJO
 routes.post('/insertar_proveedor',(req, res)=>{
    const {NOMBRE_PROVEEDOR, CELULAR_PROVEEDOR, PRODUCTO_VENTA, PRECIO_PRODUCTO, CIUDAD_PROVEEDOR, OBSERVACION} = req.body;
    const consulta = `call INSERTAR_PROVEEDOR('${NOMBRE_PROVEEDOR}','${CELULAR_PROVEEDOR}','${PRODUCTO_VENTA}','${PRECIO_PRODUCTO}','${CIUDAD_PROVEEDOR}','${OBSERVACION}')`;
    
    req.getConnection((err, conn)=>{
            conn.query(consulta, (err, rows)=>{
                if(!err)
                res.send('Proveedor Ingresado Correctamente')
                else
                console.log(err)
            })
        })
    })

    routes.get('/provreedores/COD_PROVEEDOR',(req, res)=>{
        const {COD_PROVEEDOR} = req.params;
        const consulta = `SELECT * FROM TBL_PROVEEDOR WHERE COD_PROVEEDOR = ?`;
        req.getConnection((err, conn)=>{
                conn.query(consulta, [COD_PROVEEDOR], (err, rows)=>{
                    if(err) return res.send(err)
    
                    res.send(rows)
                })
            })
        }) 
        //ACTUALIZAR PROVEEDOR
        routes.put('/proveedor/edit/:COD_PROVEEDOR',(req, res)=>{
            const {COD_PROVEEDOR} = req.params;
            const {NOMBRE_PROVEEDOR, CELULAR_PROVEEDOR, PRODUCTO_VENTA, PRECIO_PRODUCTO, CIUDAD_PROVEEDOR, OBSERVACION} = req.body;
            const consulta = `call ACTUALIZAR_PROVEEDORES(?,'${NOMBRE_PROVEEDOR}','${CELULAR_PROVEEDOR}','${PRODUCTO_VENTA}','${PRECIO_PRODUCTO}','${CIUDAD_PROVEEDOR}','${OBSERVACION}')`;
            req.getConnection((err, conn)=>{
                    conn.query(consulta, [COD_PROVEEDOR], (err, rows)=>{
                        if(!err)
                        res.send('Proveedor Actualizado Correctamente')
                        else
                        console.log(err)
                    })
                })
            })
    //eliminar falta
    routes.delete('/proveedores/delete/:COD_PROVEEDOR',(req, res)=>{
        const { COD_PROVEEDOR} = req.params;
        const consulta = `call ELIMINAR_PROVEEDOR(?)`;
        req.getConnection((err, conn)=>{
                conn.query(consulta, [COD_PROVEEDOR], (err, rows)=>{
                    if(!err)
                    res.send('Proveedor Eliminado Correctamente')
                    else
                    console.log(err)
                })
            })
        }) 

module.exports = routes