const express = require('express')
const routes = express.Router()

routes.get('/inventarios', (req, res) =>{
    req.getConnection((err, conn) =>{
        if(err) return res.send(err)

        conn.query('SELECT *FROM TBL_INVENTARIO', (err, rows)=>{
            if(err) return res.send(err)

            res.send(rows)
        })
    })
})


 routes.post('/insertar_inventario',(req, res)=>{
    const {NOMBRE_PRODUCTO, PRECIO_PRODUCTO, CANTIDAD_PRODUCTO, CATEGORIA_PRODUCTO, FECHA_VENCIMIENTO,MAXIMO_PRODUCTO,MINIMO_PRODUCTO} = req.body;
    const consulta = `call INSERTAR_INVENTARIOS('${NOMBRE_PRODUCTO}','${PRECIO_PRODUCTO}','${CANTIDAD_PRODUCTO}','${CATEGORIA_PRODUCTO}','${FECHA_VENCIMIENTO}','${MAXIMO_PRODUCTO}','${MINIMO_PRODUCTO}')`;
    
    
    req.getConnection((err, conn)=>{
            conn.query(consulta, (err, rows)=>{
                if(!err)        
                res.send('Producto Ingresado Correctamente')
                else
                console.log(err)
            })
        })
    })


    routes.get('/inventarios/COD_PRODUCTO',(req, res)=>{
        const {COD_PRODUCTO} = req.params;
        const consulta = `SELECT * FROM TBL_INVENTARIO WHERE COD_PRODUCTO = ?`;
        req.getConnection((err, conn)=>{
                conn.query(consulta, [COD_PRODUCTO], (err, rows)=>{
                    if(err) return res.send(err)
    
                    res.send(rows)
                })
            })
        }) 
        //ACTUALIZAR inventario
        routes.put('/inventarios/edit/:COD_PRODUCTO',(req, res)=>{
            const {COD_PRODUCTO} = req.params;
            const {NOMBRE_PRODUCTO, PRECIO_PRODUCTO, CANTIDAD_PRODUCTO, CATEGORIA_PRODUCTO, FECHA_VENCIMIENTO,MAXIMO_PRODUCTO,MINIMO_PRODUCTO} = req.body;
            const consulta = `call ACTUALIZAR_INVENTARIO(?,'${NOMBRE_PRODUCTO}','${PRECIO_PRODUCTO}','${CANTIDAD_PRODUCTO}','${CATEGORIA_PRODUCTO}','${FECHA_VENCIMIENTO}','${MAXIMO_PRODUCTO}','${MINIMO_PRODUCTO}')`;
            
            req.getConnection((err, conn)=>{
                    conn.query(consulta, [COD_PRODUCTO], (err, rows)=>{
                        if(!err)
                        res.send('Inventario Actualizado Correctamente')
                        else
                        console.log(err)
                    })
                })
            })
    //eliminar falta
    routes.delete('/inventarios/delete/:COD_PRODUCTO',(req, res)=>{
        const { COD_PRODUCTO} = req.params;
        const consulta = `call ELIMINAR_PRODUCTO(?)`;
        req.getConnection((err, conn)=>{
                conn.query(consulta, [COD_PRODUCTO], (err, rows)=>{
                    if(!err)
                    res.send('Producto Eliminado Correctamente')
                    else
                    console.log(err)
                })
            })
        }) 
























module.exports = routes