const express = require('express')
const routes = express.Router()

routes.get('/empleados', (req, res) =>{
    req.getConnection((err, conn) =>{
        if(err) return res.send(err)

        conn.query('SELECT *FROM TBL_EMPLEADOS', (err, rows)=>{
            if(err) return res.send(err)

            res.send(rows)
        })
    })
})

routes.post('/insertar_empleado',(req, res)=>{
    const {NOMBRE_EMPLEADO, IDENTIDAD_EMPLEADO, EDAD_EMPLEADO, CORREO_EMPLEADO, NUMERO_CELULAR_EMPLEADO, ESTADO_CIVIL_EMPLEADO,INICIO_CONTRATO,CARGO_EMPLEADO,SALARIO_EMPLEADO,FECHA_INGRESO} = req.body;
    const consulta = `call INSERTAR_EMPLEADO('${NOMBRE_EMPLEADO}','${IDENTIDAD_EMPLEADO}','${EDAD_EMPLEADO}','${CORREO_EMPLEADO}','${NUMERO_CELULAR_EMPLEADO}','${ESTADO_CIVIL_EMPLEADO}','${INICIO_CONTRATO}','${CARGO_EMPLEADO}','${SALARIO_EMPLEADO}','${FECHA_INGRESO}')`;
    
    req.getConnection((err, conn)=>{
            conn.query(consulta, (err, rows)=>{
                if(!err)
                res.send('Empleado Ingresado Correctamente')
                else
                console.log(err)
            })
        })
    })
 
    
routes.get('/empleados/COD_EMPLEADO',(req, res)=>{
    const {COD_EMPLEADO} = req.params;
    const consulta = `SELECT * FROM TBL_EMPLEADOS WHERE COD_EMPLEADO = ?`;
    req.getConnection((err, conn)=>{
            conn.query(consulta, [COD_EMPLEADO], (err, rows)=>{
                if(err) return res.send(err)

                res.send(rows)
            })
        })
    }) 
    //ACTUALIZAR EMPLEADOS
    routes.put('/empleados/edit/:COD_EMPLEADO',(req, res)=>{
        const {COD_EMPLEADO} = req.params;
        const { NOMBRE_EMPLEADO, IDENTIDAD_EMPLEADO, EDAD_EMPLEADO, CORREO_EMPLEADO, NUMERO_CELULAR_EMPLEADO, ESTADO_CIVIL_EMPLEADO,INICIO_CONTRATO,CARGO_EMPLEADO,SALARIO_EMPLEADO,FECHA_INGRESO} = req.body;
        const consulta = `call ACTUALIZAR_EMPLEADOS(?,'${NOMBRE_EMPLEADO}','${IDENTIDAD_EMPLEADO}','${EDAD_EMPLEADO}','${CORREO_EMPLEADO}','${NUMERO_CELULAR_EMPLEADO}','${ESTADO_CIVIL_EMPLEADO}','${INICIO_CONTRATO}','${CARGO_EMPLEADO}','${SALARIO_EMPLEADO}','${FECHA_INGRESO}')`;
        req.getConnection((err, conn)=>{
                conn.query(consulta, [COD_EMPLEADO], (err, rows)=>{
                    if(!err)
                    res.send('Empleado Actualizado Correctamente')
                    else
                    console.log(err)
                })
            })
        })
//eliminar falta
routes.delete('/empleados/delete/:COD_EMPLEADO',(req, res)=>{
    const { COD_EMPLEADO} = req.params;
    const consulta = `call ELIMINAR_EMPLEADOS(?)`;
    req.getConnection((err, conn)=>{
            conn.query(consulta, [COD_EMPLEADO], (err, rows)=>{
                if(!err)
                res.send('Empleado Eliminado Correctamente')
                else
                console.log(err)
            })
        })
    }) 
module.exports = routes