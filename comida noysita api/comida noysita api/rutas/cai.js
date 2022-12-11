const express = require('express')
const routes = express.Router()

routes.get('/cai', (req, res) =>{
    req.getConnection((err, conn) =>{
        if(err) return res.send(err)

        conn.query('SELECT *FROM TBL_CAI', (err, rows)=>{
            if(err) return res.send(err)

            res.send(rows)
        })
    })
})

routes.post('/insertar_cai',(req, res)=>{
    const {CAI, TIPO_DOCUMENTO, VALOR_FISCAL, FECHA_VENCIMIENTO} = req.body;
    const consulta = `call INSERTAR_CAI('${CAI}','${TIPO_DOCUMENTO}','${VALOR_FISCAL}','${FECHA_VENCIMIENTO}')`;
    
    req.getConnection((err, conn)=>{
            conn.query(consulta, (err, rows)=>{
                if(!err)
                res.send('CAI Ingresado Correctamente')
                else
                console.log(err)
            })
        })
    })

    routes.get('/cai/COD_CAI',(req, res)=>{
        const {COD_CAI} = req.params;
        const consulta = `SELECT * FROM TBL_CAI WHERE COD_CAI = ?`;
        req.getConnection((err, conn)=>{
                conn.query(consulta, [COD_CAI], (err, rows)=>{
                    if(err) return res.send(err)
    
                    res.send(rows)
                })
            })
        }) 
        //ACTUALIZAR inventario
        routes.put('/cai/edit/:COD_CAI',(req, res)=>{
            const {COD_CAI} = req.params;
            const {CAI, TIPO_DOCUMENTO, VALOR_FISCAL, FECHA_VENCIMIENTO} = req.body;
            const consulta = `call ACTUALIZAR_CAI( ?,'${CAI}','${TIPO_DOCUMENTO}','${VALOR_FISCAL}','${FECHA_VENCIMIENTO}')`;
            
            req.getConnection((err, conn)=>{
                    conn.query(consulta, [COD_CAI], (err, rows)=>{
                        if(!err)
                        res.send('CAI Actualizado Correctamente')
                        else
                        console.log(err)
                    })
                })
            })
module.exports = routes