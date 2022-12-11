const express = require('express')
const routes = express.Router()

routes.get('/clientes', (req, res) =>{
    req.getConnection((err, conn) =>{
        if(err) return res.send(err)

        conn.query('SELECT *FROM TBL_CLIENTES', (err, rows)=>{
            if(err) return res.send(err)

            res.send(rows)
        })
    })
})

routes.get('/clientes/:COD_CLIENTE',(req, res)=>{
    const { COD_CLIENTE} = req.params;
    const consulta = `SELECT * FROM TBL_CLIENTES WHERE COD_CLIENTE = ?`;
    req.getConnection((err, conn)=>{
            conn.query(consulta, [COD_CLIENTE], (err, rows)=>{
                if(err) return res.send(err)

                res.send(rows)
            })
        })
    }) 


routes.post('/insertar_clientes',(req, res)=>{
    const {IDENTIDAD_CLIENTE, RTN_CLIENTE, NOMBRE_CLIENTE, DIRECCION, TIPO_PAGO, FECHA_INGRESO_CLIENTE} = req.body;
    const consulta = `call INSERTAR_CLIENTES('${IDENTIDAD_CLIENTE}','${RTN_CLIENTE}','${NOMBRE_CLIENTE}','${DIRECCION}','${TIPO_PAGO}','${FECHA_INGRESO_CLIENTE}')`;
    
    req.getConnection((err, conn)=>{
            conn.query(consulta, (err, rows)=>{
                if(!err)
                res.send('Cliente Ingresado Correctamente')
                else
                console.log(err)
            })
        })
    })


    //ACTUALIZAR CLIENTES
    routes.put('/clientes/edit/:COD_CLIENTE',(req, res)=>{
        const { COD_CLIENTE} = req.params;
        const { IDENTIDAD_CLIENTE, RTN_CLIENTE, NOMBRE_CLIENTE, DIRECCION, TIPO_PAGO, FECHA_INGRESO_CLIENTE} = req.body;
        const consulta = `call ACTUALIZAR_CLIENTES(?,'${IDENTIDAD_CLIENTE}','${RTN_CLIENTE}','${NOMBRE_CLIENTE}','${DIRECCION}','${TIPO_PAGO}','${FECHA_INGRESO_CLIENTE}')`;
        req.getConnection((err, conn)=>{
                conn.query(consulta, [COD_CLIENTE], (err, rows)=>{
                    if(!err)
                    res.send('Cliente Actualizado Correctamente')
                    else
                    console.log(err)
                })
            })
        })

   //ELIMINAR CLIENTES
        routes.delete('/clientes/delete/:COD_CLIENTE',(req, res)=>{
            const { COD_CLIENTE} = req.params;
            const consulta = `call ELIMINAR_CLIENTES(?)`;
            req.getConnection((err, conn)=>{
                    conn.query(consulta, [COD_CLIENTE], (err, rows)=>{
                        if(!err)
                        res.send('Cliente Eliminado Correctamente')
                        else
                        console.log(err)
                    })
                })
            }) 

module.exports = routes
