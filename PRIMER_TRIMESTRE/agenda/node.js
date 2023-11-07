const http = require('http');

const contactos = [
    { nombre: 'Juan', telefono: '123-456-7890' },
    { nombre: 'Maria', telefono: '987-654-3210' },
    { nombre: 'Pedro', telefono: '555-555-5555' }
];

const server = http.createServer((req, res) => {
    if (req.url === '/verjson') {
        res.setHeader('Content-Type', 'application/json');
        res.end(JSON.stringify(contactos));
    } else {
        res.statusCode = 404;
        res.end('Not Found');
    }
});

server.listen(3000, () => {
    console.log('El servidor está escuchando en el puerto 3000');
});
