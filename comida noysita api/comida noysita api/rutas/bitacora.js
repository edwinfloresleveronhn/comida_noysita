const express = require('express')
const routes = express.Router()

routes.get('/bitacora', (req, res) =>{
    req.getConnection((err, conn) =>{
        if(err) return res.send(err)

        conn.query('SELECT *FROM TBL_BITACORA', (err, rows)=>{
            if(err) return res.send(err)

            res.send(rows)
        })
    })
})

module.exports = routes