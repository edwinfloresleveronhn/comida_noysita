const express = require('express')
const routes = express.Router()

routes.get('/rol', (req, res) =>{
    req.getConnection((err, conn) =>{
        if(err) return res.send(err)

        conn.query('SELECT *FROM TBL_ROLES', (err, rows)=>{
            if(err) return res.send(err)

            res.send(rows)
        })
    })
})

routes.post('/insertar_rol',(req, res)=>{
    const {ROL, USUARIO, FECHA_REGISTRO } = req.body;
    const consulta = `call INSERTAR_ROL('${ROL}','${USUARIO}','${FECHA_REGISTRO}' )`;
    
    req.getConnection((err, conn)=>{
            conn.query(consulta, (err, rows)=>{
                if(!err)
                res.send('Rol Ingresado Correctamente')
                else
                console.log(err)
            })
        })
    })


    routes.get('/rol/COD_ROL',(req, res)=>{
        const {COD_ROL} = req.params;
        const consulta = `SELECT * FROM TBL_ROLES WHERE COD_ROL = ?`;
        req.getConnection((err, conn)=>{
                conn.query(consulta, [COD_ROL], (err, rows)=>{
                    if(err) return res.send(err)
    
                    res.send(rows)
                })
            })
        }) 
        //ACTUALIZAR rol
        routes.put('/rol/edit/:COD_ROL',(req, res)=>{
            const {COD_ROL} = req.params;
            const {ROL, USUARIO, FECHA_REGISTRO } = req.body;
            const consulta = `call ACTUALIZAR_ROL(?,'${ROL}','${USUARIO}','${FECHA_REGISTRO}' )`;
            req.getConnection((err, conn)=>{
                    conn.query(consulta, [COD_ROL], (err, rows)=>{
                        if(!err)
                        res.send('Rol Actualizado Correctamente')
                        else
                        console.log(err)
                    })
                })
            })
            
    //eliminar falta
    routes.delete('/rol/delete/:COD_ROL',(req, res)=>{
        const { COD_ROL} = req.params;
        const consulta = `call ELIMINAR_ROL(?)`;
        req.getConnection((err, conn)=>{
                conn.query(consulta, [COD_ROL], (err, rows)=>{
                    if(!err)
                    res.send('rol Eliminado Correctamente')
                    else
                    console.log(err)
                })
            })
        }) 








module.exports = routes