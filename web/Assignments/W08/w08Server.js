var http = require('http');
var url = require('url');

function onRequest(req, res){
    console.log("Recieved a request for: " + req);
    var request = req.url.toLowerCase();
    var request = url.parse(request, true);
    const path = request.pathname.toLowerCase();
    const query = request.query;
    console.log(request);
   

    if(path == "/home"){
        console.log("Home page");
        res.write("<h1>Welcome to the Home Page</h1>");
        res.end();
    }
    else if(path =="/getdata"){
        console.log("Getting data");
        let student = { 
            name: 'Riley',
            class:'CS 341'
        };
        let data = JSON.stringify(student);
        res.write(data);
        res.end();

    }
    else if (path =="/add"){
        var searchParams = new URLSearchParams(query);
        var sum = 0;
        for (i = 0; i < query.value.length; i++) {
            sum += parseInt(query.value[i]);
          }
        res.write("<h1>Welcome to the Add Page</h1><br>");
        res.write("<p>Your sum is: </p>" + sum);
        res.end();

    }
    else{
        console.log("breaking"); 
        if(path != '/favicon.ico'){
            res.writeHead(404, {"Content-Type": "text/html"});
            res.write("Page Not Found");
            res.end();
        }
    }

}
var server = http.createServer(onRequest);
server.listen(8888);
console.log("The sever is now listening on port 8888....");