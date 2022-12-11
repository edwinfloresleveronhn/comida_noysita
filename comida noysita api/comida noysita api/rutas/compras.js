const express = require('express')
const routes = express.Router()

routes.get('/compras', (req, res) =>{
    req.getConnection((err, conn) =>{
        if(err) return res.send(err)

        conn.query('SELECT *FROM TBL_COMPRA', (err, rows)=>{
            if(err) return res.send(err)

            res.send(rows)
        })
    })
})

routes.post('/insertar_compra',(req, res)=>{
    const {NOMBRE_PRODUCTO, PRECIO_PRODUCTO, CANTIDAD_PRODUCTO, CATALOGO_PRODUCTO, FECHA_COMPRA} = req.body;
    const consulta = `call INSERTAR_COMPRA('${NOMBRE_PRODUCTO}','${PRECIO_PRODUCTO}','${CANTIDAD_PRODUCTO}','${CATALOGO_PRODUCTO}','${FECHA_COMPRA}')`;
    
    req.getConnection((err, conn)=>{
            conn.query(consulta, (err, rows)=>{
                if(!err)
                res.send('Compra Ingresado Correctamente')
                else
                console.log(err)
            })
        })
    })

    routes.get('/compras/COD_COMPRA',(req, res)=>{
        const {COD_COMPRA} = req.params;
        const consulta = `SELECT * FROM TBL_COMPRA WHERE COD_COMPRA = ?`;
        req.getConnection((err, conn)=>{
                conn.query(consulta, [COD_COMPRA], (err, rows)=>{
                    if(err) return res.send(err)
    
                    res.send(rows)
                })
            })
        }) 
        //ACTUALIZAR COMPRA
        routes.put('/compras/edit/:COD_COMPRA',(req, res)=>{
            const {COD_COMPRA} = req.params;
            const {NOMBRE_PRODUCTO, PRECIO_PRODUCTO, CANTIDAD_PRODUCTO, CATALOGO_PRODUCTO, FECHA_COMPRA} = req.body;
            const consulta = `call ACTUALIZAR_COMPRA (?,'${NOMBRE_PRODUCTO}','${PRECIO_PRODUCTO}','${CANTIDAD_PRODUCTO}','${CATALOGO_PRODUCTO}','${FECHA_COMPRA}')`;
            
            req.getConnection((err, conn)=>{
                    conn.query(consulta, [COD_COMPRA], (err, rows)=>{
                        if(!err)
                        res.send('Compra Actualizado Correctamente')        
                        else
                        console.log(err)
                    })
                })
            })
    //eliminar falta
    routes.delete('/compras/delete/:COD_COMPRA',(req, res)=>{
        const { COD_COMPRA} = req.params;
        const consulta = `call ELIMINAR_COMPRA(?)`;
        req.getConnection((err, conn)=>{
                conn.query(consulta, [COD_COMPRA], (err, rows)=>{
                    if(!err)
                    res.send('Compra Eliminado Correctamente')
                    else
                    console.log(err)
                })
            })
        }) 













 

module.exports = routes