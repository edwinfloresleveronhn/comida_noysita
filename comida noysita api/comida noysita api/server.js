const express = require('express')
const mysql = require('mysql')
const myconn = require('express-myconnection')


const app = express()

app.set('port', process.env.PORT || 9000)
const dbOptions = {
    host: process.env.DB_HOST || "localhost",
    port: process.env.DB_PORT || "3306",
    user: process.env.DB_USER || "root",
    password: process.env.DB_PASSWORD || "",
    database: process.env.DB_NAME || "oficial_noysita"
}

// Middlewares
app.use(myconn(mysql,dbOptions,'single'))
app.use(express.json())
// Rutas
app.use(require('./rutas/clientes'))
app.use(require('./rutas/empleados'))
app.use(require('./rutas/proveedores'))
app.use(require('./rutas/compras'))
app.use(require('./rutas/inventarios'))
app.use(require('./rutas/cai'))
app.use(require('./rutas/facturas'))
app.use(require('./rutas/platillos'))
app.use(require('./rutas/rol'))
app.use(require('./rutas/bitacora'))
 // Server running
app.listen(app.get('port'), () =>{
    console.log('Server running on port',app.get('port'))
})
///