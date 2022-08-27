<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
        // veremos como usar DOM de esta forma llamando por el id sacando todos los elementos p y recoriendolos
        function getContenido(params) {
            var rio = document.getElementById('contendor4');
            var contenido = rio.getElementsByTagName("p");
            for (i = 0; i < contenido.length; i++) {
                console.log(contenido[i].innerHTML);
            }


        }
        // ahora veremos como usar DOM de la forma mas practiva y como se suele hacer 
        function getContenidoFromFinal(params) {
            var objetoDOM = document.getElementById("contendor4");
            var contenido = objetoDOM.childNodes[1].innerHTML;
            console.log(contenido);
        }
        // ahora un ejemplo empezando desde el principo del documento utilizando pura jerarquia pero no es frecuente este uso 
        //hay que tener en cuenta que cuando se utiliza este metodo deberiamos tener el html minificado donde boremos los nodos basura como nodos de texto en este caso cada nodo basura como los de texto causados por espacios y tabulaciones cambian la jerarquia donde es tomado como un nivel mas y asi es dificil de encontrar en tambien depende del explorar que puede tener otra interpretacion en los niveles y los nodos basura este ejemplo se corrio en firefox y fuimos probando hasta dar con las referencias correctas.
        function getContenidoFromBegin() {
            var objDOM1 = document.childNodes[1].childNodes[2].childNodes[5].childNodes[1].style.backgroundColor = "green";




            // var contenido = objDOM.innerHTML;
            // console.log(contenido);

        }
        //otra forma de encontrar los nodos con el uso de nodeType si es = 1 es un div o p o otro pero si es 3 es un nodo de texto o basura (tab, etc)
        function localizarConNodeType() {
            var recurso = document.getElementById("contendor2");
            var contador = 0;
            for (i = 0; i < recurso.childNodes.length; i++) {
                if (recurso.childNodes[i].nodeType === 1) {
                    contador++;
                }
                if (contador === 4) {
                    recurso.childNodes[i].innerHTML = "hola mundu";
                    break;
                }
            }



        }

        function obtenerNombreDelNodo() {
            // con esta funcion obtenemos el nombre del nodo con la funcion nodeNme, como se escribio el html de forma que no puede aver estacios y ni tabulacion como basura el primer nodo hijo es un DIV
            var padre = document.getElementById("div1");
            var elhijo = padre.firstChild;
            var nombreDelHijo = elhijo.nodeName;
            document.getElementById("tag").innerHTML = nombreDelHijo;


        }

        function BuscadorNodoTextoOElento() {
            var padre = document.getElementById("div4");
            var elementoOtexto = padre.firstChild;
            if (elementoOtexto.nodeType === 1) {
                console.log(elementoOtexto);
            }
            if (elementoOtexto.nodeType === 3) {
                var contenido = elementoOtexto.nodeValue;
                console.log(elementoOtexto);
            } else {
                // console.log(elementoOtexto);
            }

        }
        function llenarLiVacios() {
            // con la funcion length podemos saber el total de elementos li en este caso que hay dentro de los tags obtenidos
            var nodo = document.getElementsByTagName("li");
            var contador = nodo.length;
            
            for (i = 0; i < contador; i++) {
                console.log(nodo[i].innerHTML);
                nodo[i];
                // aqui hay un falla no reconoce como vacio, queda pendiente el dato que retorna un il vacio pero no cumple la condicional
                if(nodo[i].innerHTML===""){
                    nodo[i].innerHTML="se llenaron todos los div vacios";
                }
                
            }
        }
        function obtnerAtributos() {
            var attr=document.getElementById("tagImagen").hasAttribute("class");
            if (attr===true) {
                console.log(document.getElementById("tagImagen").getAttribute("class"));
            }if(attr===false){
                var attr=document.getElementById("tagImagen").hasAttribute("src");
                if(attr===true){
                    var attr=document.getElementById("tagImagen").getAttribute("src");
                    console.log(attr);
                }
            }
            
        }
        function colocarAtributos() {
            var target = document.getElementById("tagImagen");
            target.setAttribute("class","especial");
            var valor=target.hasAttribute("class");
            if(valor){
                console.log(target.getAttribute("class"));
            }
        }
        function crearElemento() {
         var padre= document.getElementById("divpadre");
         var nodeAdd1= document.createElement("p");
         nodeAdd1.setAttribute("id","pCreado");
         var textoNode= document.createTextNode("OSOOOO");
         nodeAdd1.appendChild(textoNode);
         var parafo1 = padre.firstChild;

        



         
        }
        function insertarNodoFinal() {
            var padre = document.getElementById("contenedordeparafos");
            var parafo = document.createElement("p");
            var texto = document.createTextNode("3 Me he creado al final");
            parafo.appendChild(texto);
            padre.appendChild(parafo);
            
        }
        function insertarNodoPrincipio() {
            var padre = document.getElementById("contenedordeparafos");
            var parafo= document.createElement("p");
            var texto = document.createTextNode("Me he creado al inicio");
            parafo.appendChild(texto);
            var primerHijo = padre.firstChild;
            console.log(primerHijo);
            padre.insertBefore(parafo,primerHijo);
            
        }
        function removeChilds() {
            var padre = document.getElementById("contenedordeparafos");
            var ToErrase = padre.firstChild;
            console.log(padre.childNodes.length);
            if(padre.childNodes.length>0){
                padre.removeChild(ToErrase);

            }

        }
        var plan ={
            nombre:"basico",
            price:3.99,
            spacio: 100,
            trasferir:100,
            pagina:10
        };

        plan.price=79.95;
        plan.features=["guarantia","free ship"];
        paln.bool = false;
        // objeto sin propiedades
        var plan2 = {};
        // se puede crear una propiedad sin valor para darle valor despues este seria indefinido (undefined)
        plan2.market=undefined;
        // borrar la propiedad de un objeto
        delete plan2.merket;
        // verifica si la propiedad existe en el objeto 
        existelaPropiedad = "market" in plan2;
        console.log(existelaPropiedad);



       
        
    </script>
</head>

<body>
    <div id="contendor1">
        <p>este el primer contenedor </p>
        <p>el segundo contenedor </p>
    </div>
    <div id="contendor2">
        <p>este el primer contenedor 2</p>
        <p>el segundo contenedor 2</p>

        <p>el segundo contenedor 3</p>
        <p>el segundo contenedor 4</p>
        <p>osos 4</p>
    </div>
    <div id="contendor3">
        <p>este el primer contenedor 3 </p>
        <p>el segundo contenedor 3</p>
    </div>
    <div id="contendor4">
        <p>este el primer contenedor 4</p>
        <p>el segundo contenedor 4</p>
    </div>
    <div id="div1">
        <div>
            <p>Estoy aqui</p>
        </div>
        <div>
            <p>esta es mi ultima noche</p>
        </div>
    </div>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            padding: 0 0 0 0;
        }
    </style>




    <table id="tabla1">
        <tr>
            <th>Nombre del Nodo</th>

        </tr>
        <tr>
            <td>
                <p id="tag"></p>
            </td>
        </tr>
    </table>
    <div id="div4">
        <h2>hola <em>mundo</em></h2>
    </div>
    <ol>
        <li>

        </li>
        <li>

        </li>
        <li>

        </li>
    </ol>
    <img src="image.jpg" id="tagImagen" alt="imagen-cocina" height="50" width="50">
    <div id="padre">
        <p>
            1 prime
        </p>
        <p>
            2 segundo
        </p>
    </div>
    <div id="contenedordeparafos"
    ><p> el primero </p>
        <p>el segundo</p>
        <p>el tercero</p>
    </div>
    

    <input type="button" value="GetContent" onclick="getContenido();">
    <input type="button" value="GetContentWithChildnodes" onclick="getContenidoFromFinal();">
    <input type="button" value="getContenidoFromBegin" onclick="getContenidoFromBegin();">
    <input type="button" value="getContenidoNoteType" onclick="localizarConNodeType();">
    <input type="button" value="getNombreDelNodo" onclick="obtenerNombreDelNodo();">
    <input type="button" value="getValorDelNodo" onclick="BuscadorNodoTextoOElento();">
    <input type="button" value="llenarLosDivVacios" onclick="llenarLiVacios();">
    <input type="button" value="ObtenerAtributos" onclick="obtnerAtributos();">
    <input type="button" value="colocarAtributos" onclick="colocarAtributos();">
    <input type="button" value="CrearElemento" onclick="crearElemento();">
    <input type="button" value="InsertarNodoAlFinal" onclick="insertarNodoFinal();">
    <input type="button" value="InsertarNodoAlPrincipio" onclick="insertarNodoPrincipio();">
    <input type="button" value="RemoverHijo" onclick="removeChilds();">
    
    




    <h1>algunos botones funcionan para ver el resultado en modo consola del developer del brows</h1>
</body>

</html>