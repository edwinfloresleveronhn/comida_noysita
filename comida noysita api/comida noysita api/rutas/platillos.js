const express = require('express')
const routes = express.Router()

routes.get('/platillos', (req, res) =>{
    req.getConnection((err, conn) =>{
        if(err) return res.send(err)

        conn.query('SELECT *FROM TBL_PLATILLO', (err, rows)=>{
            if(err) return res.send(err)

            res.send(rows)
        })
    })
})

routes.post('/insertar_platillos',(req, res)=>{
    const {NOMBRE_PLATILLO, PRECIO_PLATILLO, RECETA_PLATILLO } = req.body;
    const consulta = `call INSERTAR_PLATILLOS('${NOMBRE_PLATILLO}','${PRECIO_PLATILLO}','${RECETA_PLATILLO}' )`;
    
    req.getConnection((err, conn)=>{
            conn.query(consulta, (err, rows)=>{
                if(!err)
                res.send('Platillo Ingresado Correctamente')
                else
                console.log(err)
            })
        })
    })


    routes.get('/platillos/COD_PLATILLO',(req, res)=>{
        const {COD_PLATILLO} = req.params;
        const consulta = `SELECT * FROM TBL_PLATILLO WHERE COD_PLATILLO = ?`;
        req.getConnection((err, conn)=>{
                conn.query(consulta, [COD_PLATILLO], (err, rows)=>{
                    if(err) return res.send(err)
    
                    res.send(rows)
                })
            })
        }) 
        //ACTUALIZAR platillo
        routes.put('/platillos/edit/:COD_PLATILLO',(req, res)=>{
            const {COD_PLATILLO} = req.params;
            const {NOMBRE_PLATILLO, PRECIO_PLATILLO, RECETA_PLATILLO } = req.body;
            const consulta = `call ACTUALIZAR_PLATILLOS(?,'${NOMBRE_PLATILLO}','${PRECIO_PLATILLO}','${RECETA_PLATILLO}' )`;
            req.getConnection((err, conn)=>{
                    conn.query(consulta, [COD_PLATILLO], (err, rows)=>{
                        if(!err)
                        res.send('Platillo Actualizado Correctamente')
                        else
                        console.log(err)
                    })
                })
            })
    //eliminar falta
    routes.delete('/platillos/delete/:COD_PLATILLO',(req, res)=>{
        const { COD_PLATILLO} = req.params;
        const consulta = `call ELIMINAR_PLATILLO(?)`;
        req.getConnection((err, conn)=>{
                conn.query(consulta, [COD_PLATILLO], (err, rows)=>{
                    if(!err)
                    res.send('Platillo Eliminado Correctamente')
                    else
                    console.log(err)
                })
            })
        }) 









module.exports = routes