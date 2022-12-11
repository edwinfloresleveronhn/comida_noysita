const express = require('express')
const routes = express.Router()

routes.get('/facturas', (req, res) =>{
    req.getConnection((err, conn) =>{
        if(err) return res.send(err)

        conn.query('SELECT *FROM TBL_FACTURA', (err, rows)=>{
            if(err) return res.send(err)

            res.send(rows)
        })
    })
})

routes.post('/insertar_factura',(req, res)=>{
    const {NUMERO_FACTURA,NOMBRE_CLIENTE, RTN_CLIENTE, FECHA_FACTURACION,CAI,PLATILLO,CANTIDAD_PLATILLO,PRECIO,IVA,TOTAL_FACTURA} = req.body;
    const consulta = `call INSERTAR_FACTURA('${NUMERO_FACTURA}','${NOMBRE_CLIENTE}','${RTN_CLIENTE}','${FECHA_FACTURACION}','${CAI}','${PLATILLO}','${CANTIDAD_PLATILLO}','${PRECIO}','${IVA}','${TOTAL_FACTURA}')`;
    
    req.getConnection((err, conn)=>{
            conn.query(consulta, (err, rows)=>{
                if(!err)
                res.send('Factura Ingresado Correctamente')
                else
                console.log(err)
            })
        })
    })
    routes.get('/facturas/COD_FACTURA',(req, res)=>{
        const {COD_FACTURA} = req.params;
        const consulta = `SELECT * FROM TBL_FACTURA WHERE COD_FACTURA = ?`;
        req.getConnection((err, conn)=>{
                conn.query(consulta, [COD_FACTURA], (err, rows)=>{
                    if(err) return res.send(err)
    
                    res.send(rows)
                })
            })
        }) 
        //ACTUALIZAR inventario
        routes.put('/facturas/edit/:COD_FACTURA',(req, res)=>{
            const {COD_FACTURA} = req.params;
            const {NUMERO_FACTURA,NOMBRE_CLIENTE, RTN_CLIENTE, FECHA_FACTURACION,CAI,PLATILLO,CANTIDAD_PLATILLO,PRECIO,IVA,TOTAL_FACTURA} = req.body;
            const consulta = `call ACTUALIZAR_FACTURA(?,'${NUMERO_FACTURA}','${NOMBRE_CLIENTE}','${RTN_CLIENTE}','${FECHA_FACTURACION}','${CAI}','${PLATILLO}','${CANTIDAD_PLATILLO}','${PRECIO}','${IVA}','${TOTAL_FACTURA}')`;
            req.getConnection((err, conn)=>{
                    conn.query(consulta, [COD_FACTURA], (err, rows)=>{
                        if(!err)
                        res.send('Factura Actualizado Correctamente')
                        else
                        console.log(err)
                    })
                })
            })






module.exports = routes