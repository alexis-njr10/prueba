var script = document.createElement('script');
script.src = 'https://code.jquery.com/jquery-3.6.0.min.js';
document.getElementsByTagName('head')[0].appendChild(script);

const items = document.querySelectorAll(".bEliminar");

function httpRequest(url, callback){
    const http = new XMLHttpRequest();
    http.open("GET", url);
    http.send();

    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            callback.apply(http);
        }
    }
}

async function peticion(){
    let data = ''
    let consulta = [];

    //se obtiene el resultado de la peticion http
    consulta = await $.ajax({
        url: "./home/listarData",
        type: 'GET',
        dataType: 'json',
        error: function (request) {
            alert(request.responseText)
        }
    });

    //si viene data se recorre el array de objetos y se crea las filas del tbody de la tabla
    if(consulta.data){
        consulta.data.forEach(element => {
            data +=
            `<tr> 
            <th scope="row">  ${element.id} </th>
            <td> ${element.contact_no} </td>
            <td> ${element.lastname} </td>
            <td> ${ new Date(element.createdtime)} </td> 
            </tr>`
        });
    }else{
        data = "Error al listar los datos"
    }
    
    // se retorna data
    return data;
    
}