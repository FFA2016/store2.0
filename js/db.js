var mysql = require('mysql');
//import mysql from 'mysql';

function connecttodatabase(string) {
    var con = mysql.createConnection({

        host: "185.236.11.136",
        user: "management",
        password: "9Gy6@a79x"

    });
    con.connect(function (err) {
        if (err) throw err;
        console.log("Connected!");
    });

    con.query('SELECT * FROM shop.produkte AS solution', function (error, results, fields) {
        if (error) throw error;
        console.log('The solution is: ', results);
    });

};