<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Productos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href=" styles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>
<body>
    <header>
        
	<?php include'present.php'?> 

        <div class="container-navbar">
            

                <form class="search-form" style="float: right; margin-top: 14px;">
                    <select class="btn-search" id="filtroCategoria">
                        <option value="todos">Filtrar</option>
                        <option value="especial"> Detalles para Mujer</option>
                        <option value="especialH"> Detalles para Hombre</option>
                        <option value="especialN"> Detalles para Niñ@s</option>
                        <option value="desayuno">Desayunos Sorpresa</option>
                        <option value="flores">Arreglos Florales</option>
                        <option value="fresas">Fresas y Minidonas con chocolate</option>
                        <option value="virgen">Figura de la Virgen</option>
                        <option value="mug">Mug Personalizados</option>
                        <option value="peluche">Detalles con Peluches</option>
                        <option value="detalle">Detalles Sorpresas</option>
                    </select>
                </form>
            
        </div>
        
    </header>
    
    <h1 class="heading-11">apartado del:</h1>
        <h1 class="heading-1">-Catalogo filtrado-</h1>
        <br>
    <section class="container specials">
        <h1 class="heading-1"></h1>
        <div class="container-products" id="catalogo">
            <!-- Aquí se cargarán los productos -->
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var productos = [
                
                { nombre: "A01H", img: "A01H.jpg", categorias:["especialH","detalle","fresas"], descuento: "", precioActual: "$43.000", precioAnterior: "", descrip:"♥️ MINI DONAS CUBIERTAS CON CHOCOLATE ♥️CAJA DE CARTÓN ♥️TEMÁTICA AL GUSTO ♥️MOÑO ♥️TARJETA PERSONALIZADA ♥️ADEREZOS"},
                { nombre: "A01M", img: "A01M.jpg", categorias:["especial"], descuento: "", precioActual: "$43.000", precioAnterior: "", descrip:"♥️ MINI DONAS CUBIERTAS CON CHOCOLATE ♥️CAJA DE CARTÓN ♥️TEMÁTICA AL GUSTO ♥️MOÑO ♥️TARJETA PERSONALIZADA ♥️ADEREZOS"},
                { nombre: "A01N1", img: "A01N.jpg", categorias:["especialN"], descuento: "", precioActual: "$43.000", precioAnterior: "", descrip:"♥️ MINI DONAS CUBIERTAS CON CHOCOLATE ♥️CAJA DE CARTÓN ♥️TEMÁTICA AL GUSTO ♥️MOÑO ♥️TARJETA PERSONALIZADA ♥️ADEREZOS"},
                { nombre: "A01N2", img: "A01N2.jpg", categorias:["especialN"], descuento: "", precioActual: "$43.000", precioAnterior: "", descrip:"♥️ MINI DONAS CUBIERTAS CON CHOCOLATE ♥️CAJA DE CARTÓN ♥️TEMÁTICA AL GUSTO ♥️MOÑO ♥️TARJETA PERSONALIZADA ♥️ADEREZOS"},
                { nombre: "A01N3", img: "A01N3.jpg", categorias:["especialN"], descuento: "", precioActual: "$50.000", precioAnterior: "", descrip:"♥️ MINI DONAS y FRESAS CUBIERTAS CON CHOCOLATE ♥️CAJA DE CARTÓN ♥️TEMÁTICA AL GUSTO ♥️MOÑO ♥️TARJETA PERSONALIZADA ♥️ADEREZOS"},
                { nombre: "A02H", img: "A02H.jpg", categorias:["especialH"],descuento: "", precioActual: "$50.000", precioAnterior: "", descrip:"♥️Waffle doble tipo torta♥️linda caja  marcada a mano♥️Cubiertos ecológicos♥️moño♥️Globo marcado y personalizado ♥️aderezos♥️chocolates variados"},
                { nombre: "A02M", img: "A02.jpeg", categorias:["especial","desayuno"],descuento: "", precioActual: "$50.000", precioAnterior: "", descrip:"♥️Waffle doble tipo torta♥️linda caja  marcada a mano♥️Cubiertos ecológicos♥️moño♥️Globo marcado y personalizado ♥️aderezos♥️chocolates variados"},
                { nombre: "A03H", img: "A03H.jpg", categorias:["especialH"],descuento: "", precioActual: "$45.000", precioAnterior: "50.000", descrip:"♥️ Saludable Parfait♥️Cubiertos Ecológicos♥️Tarjeta Personalizada♥️Globo Marcado Y Personalizado♥️Aderezos♥️Moño"},
                { nombre: "A03M", img: "A03M.jpg", categorias:["especial","detalle","desayuno"],descuento: "", precioActual: "$45.000", precioAnterior: "", descrip:"♥️ Saludable Parfait♥️Cubiertos Ecológicos♥️Tarjeta Personalizada♥️Globo Marcado Y Personalizado♥️Aderezos♥️Moño"},
                { nombre: "A04H", img: "A04H.jpg", categorias:["especialH","detalle","fresas"],descuento: "", precioActual: "$55.000", precioAnterior: "", descrip:"♥️ 8 fresas cubiertas con chocolate♥️linda Caja de cartón decorada♥️tarjeta personalizada♥️Temática al gusto♥️aderezos♥️moño y cintas"},
                { nombre: "A04M", img: "A04M.jpeg", categorias:["especial"],descuento: "", precioActual: "$55.000", precioAnterior: "", descrip:"♥️ 8 fresas cubiertas con chocolate♥️linda Caja de cartón decorada♥️tarjeta personalizada♥️Temática al gusto♥️aderezos♥️moño y cintas"},
                { nombre: "A05H", img: "A05H.jpg", categorias:["especialH"],descuento: "", precioActual: "$60.000", precioAnterior: "", descrip:"♥️ linda Bandeja de cartón decorada♥️delicioso salchipapas ♥️bebida decorada  al gusto♥️chocolates variados♥️cubiertos ecológicos♥️hermoso globo marcado y decorado segun tematica♥️moño y cintas♥️tarjeta y foto personalizada♥️temática a elecion del cliente"},
                { nombre: "A05M", img: "A05M.jpg", categorias:["especial","desayuno"],descuento: "", precioActual: "$60.000", precioAnterior: "", descrip:"♥️ linda Bandeja de cartón decorada♥️delicioso salchipapas ♥️bebida decorada  al gusto♥️chocolates variados♥️cubiertos ecológicos♥️hermoso globo marcado y decorado segun tematica♥️moño y cintas♥️tarjeta y foto personalizada♥️temática a elecion del cliente"},
                { nombre: "A05N", img: "A05N.jpg", categorias:["especialN"],descuento: "", precioActual: "$63.000", precioAnterior: "", descrip:"♥️ linda Bandeja de cartón decorada♥️delicioso salchipapas ♥️bebida decorada  al gusto♥️chocolates variados♥️cubiertos ecológicos♥️hermoso globo marcado y decorado segun tematica♥️moño y cintas♥️tarjeta y foto personalizada♥️temática a elecion del cliente"},
                { nombre: "A05N1", img: "A05N1.jpg", categorias:["especialN"],descuento: "", precioActual: "$73.000", precioAnterior: "", descrip:"♥️ linda Bandeja de cartón decorada♥️delicioso salchipapas con huevos de codorniz ♥️bebida decorada  al gusto♥️chocolates variados♥️3minidonas con chocolate♥cubiertos ecológicos♥️hermoso globo marcado y decorado segun tematica♥️moño y cintas♥️tarjeta y foto personalizada♥️temática a elecion del cliente"},
                { nombre: "A05N2", img: "A05N2.jpg", categorias:["especialN"],descuento: "", precioActual: "$68.000", precioAnterior: "", descrip:"♥️ linda Bandeja de cartón decorada♥️delicioso salchipapas con huevos de codorniz ♥️bebida decorada  al gusto♥️chocolates variados♥️♥cubiertos ecológicos♥️hermoso globo marcado y decorado segun tematica♥️moño y cintas♥️tarjeta y foto personalizada♥️temática a elecion del cliente"},
                { nombre: "A06", img: "A06.jpg", categorias:["especialH","especial","detalle","flores"],descuento: "", precioActual: "$78.000", precioAnterior: "", descrip:"♥️ linda decoracion en coronita ♥️frutos secos♥️gomas♥️chocolates variados♥️galletas♥️rosetones♥️globo marcado♥️tarjeta personalizada♥️moños"},
                { nombre: "A07", img: "A07.jpg", categorias:["especial","especialH","detalle","flores"],descuento: "", precioActual: "$80.000", precioAnterior: "", descrip:"♥️Linda caja redonda en  negro decorada♥️8  rosas eternas en liston satinado♥️3 unidades Ferrero Rocher o fresas con chocolate♥️Cintas y moño♥️tarjeta personalizada."},
                { nombre: "A08", img: "A08.jpg", categorias:["especialH","detalle","fresas"],descuento: "", precioActual: "$68.000", precioAnterior: "", descrip:"♥️ 7 fresas cubiertas en chocolate ♥️linda Caja decorada con ventana ♥️ moño y foto♥️Tarjeta decorada con mensaje personalizado.♥️bebida al gusto decorada segun tematica♥️chocolates variados"},
                { nombre: "A08M", img: "A08M.jpg", categorias:["especial"],descuento: "", precioActual: "$68.000", precioAnterior: "", descrip:"♥️ 7 fresas cubiertas en chocolate ♥️linda Caja decorada con ventana ♥️ moño y foto♥️Tarjeta decorada con mensaje personalizado.♥️bebida al gusto decorada segun tematica♥️chocolates variados"},
                { nombre: "A09", img: "A09.jpg", categorias:["especialH"],descuento: "", precioActual: "$68.000", precioAnterior: "", descrip:"♥️ Sándwich de la casa♥️Mix de frutas♥️bebida al gusto decorada segun tematica♥️Cubiertos ecológicos♥️Aderezos♥️Tarjeta personalizada♥️Moños y cintas segun tematica♥️linda Caja de cartón decorada y personalizada segun tematica♥️Chocolates variados"},
                { nombre: "A09M", img: "A09M.jpg", categorias:["especial","detalle","desayuno"],descuento: "", precioActual: "$68.000", precioAnterior: "", descrip:"♥️ Sándwich de la casa♥️Mix de frutas♥️bebida al gusto decorada segun tematica♥️Cubiertos ecológicos♥️Aderezos♥️Tarjeta personalizada♥️Moños y cintas segun tematica♥️linda Caja de cartón decorada y personalizada segun tematica♥️Chocolates variados"},
                { nombre: "A10", img: "A010.jpeg", categorias:["especial","especialH","detalle","desayuno"],descuento: "", precioActual: "$68.000", precioAnterior: "", descrip:"♥️ ensalada de frutas saludable♥️yogurt griego natural con cereales♥️gomas - dulces varios♥️Cubiertos ecológicos♥️moño y cintas segun tematica♥️linda caja marcada a mano♥️aderezos"},
                { nombre: "A11", img: "A11.jpg", categorias:["especial","especialH","especialN","detalle","flores"],descuento: "", precioActual: "$68.000", precioAnterior: "", descrip:"♥️ 2 unidades Carros hot wheels♥️Chocolates, gomas, galletas, mani♥️Tarjeta personalizada segun tematica ♥️Foto y cintas♥️Empaque tipo ramillete♥️Moños"},
                { nombre: "A12", img: "A012.jpg", categorias:["especial","especialH","detalle","virgen","fresas"],descuento: "", precioActual: "$78.000", precioAnterior: "", descrip:"♥️ linda  Caja de cartón decorada con ventana ♥️Figura santa o santo a elegir♥️Fresas con chocolate o minidonas ♥️rosa eterna en liston satinado o natural♥️Tarjeta personalizada ♥️decoracion, moños y cintas segun tematica"},
                { nombre: "A13", img: "A013.jpg", categorias:["especial","detalle","flores","fresas"],descuento: "", precioActual: "$78.000", precioAnterior: "", descrip:"♥️ linda  Caja de cartón decorada con ventana ♥️arreglo floral con 4 rosas y follaje ♥️6 Fresas con chocolate o minidonas ♥️tarjeta decorada y mensaje personalizado♥️Decoración general, moños y cintas segun tematica"},
                { nombre: "A14", img: "A014.jpeg", categorias:["especial"],descuento: "", precioActual: "$78.000", precioAnterior: "", descrip:"♥️ linda Caja tematica flork♥️tarjeta marcada y personalizada♥️chocolates variados♥️gomas♥️linda rosa eterna en liston satinada♥️decoracion , moños, cintas segun tematica♥️galletas"},
                { nombre: "A14H", img: "A14H.jpg", categorias:["especialH","detalle","flores"],descuento: "", precioActual: "$78.000", precioAnterior: "", descrip:"♥️ linda Caja tematica flork♥️tarjeta marcada y personalizada♥️chocolates variados♥️gomas♥️linda rosa eterna en liston satinada♥️decoracion , moños, cintas segun tematica♥️galletas"},
                { nombre: "A15", img: "A015.jpg", categorias:["especial","especialH","detalle","desayuno"],descuento: "", precioActual: "$82.000", precioAnterior: "", descrip:"♥️ hamburguesa ♥️papas francesas♥️gomas - dulces♥️bebida al gusto♥️aderezos♥️linda caja de cartón deorada♥️moño y decoracion seguntemtica"},
                { nombre: "A15N", img: "A15N.jpg", categorias:["especialN"],descuento: "", precioActual: "$85.000", precioAnterior: "", descrip:"♥️ hamburguesa ♥️papas francesas♥️gomas - dulces♥️bebida al gusto♥️aderezos♥️♥papas pringles ♥️️globo marcado a mano♥cubiertos ecologicos♥️️linda caja de cartón deorada♥️moño y decoracion seguntemtica"},
                { nombre: "A16", img: "A016.jpg", categorias:["especial","desayuno"],descuento: "", precioActual: "$69.000", precioAnterior: "", descrip:"♥️ bandeja en división sándwich♥️división mix fruta♥️postre o dulces- chocolates♥️bebida al gusto♥️lindo globo marcado segun tematica♥️moño y cubiertos ecológicos♥️tarjeta personalizada"},
                { nombre: "A16H", img: "A16.jpg", categorias:["especialH"],descuento: "", precioActual: "$69.000", precioAnterior: "", descrip:"♥️ bandeja en división sándwich♥️división mix fruta♥️postre o dulces- chocolates♥️bebida al gusto♥️lindo globo marcado segun tematica♥️moño y cubiertos ecológicos♥️tarjeta personalizada"},
                { nombre: "A17", img: "A017.jpg", categorias:["especial","especialH","desayuno"],descuento: "", precioActual: "$92.000", precioAnterior: "", descrip:"♥️ Bandeja divisiones♥️división mix fruta♥️postre o dulces- chocolates♥️Aderezos♥️linda Decoración en globos según temática♥️Empanaditas de la casa horneadas♥️tarjeta personalizada♥️Salchipapas♥️Waffles♥️Cubiertos Ecologicos"},
                { nombre: "A18", img: "A018.jpg", categorias:["especial","especialH","detalle"],descuento: "", precioActual: "$95.000", precioAnterior: "", descrip:"♥️ caja de madera linda decoracion♥️Ferrero Rocher♥️4 frascos de vidrio con frutos secos♥️2 coronitas decoradas♥️gomas♥️galletas♥️tarjeta personalizada segun tematica"},
                { nombre: "A19", img: "A019.jpg", categorias:["especial","especialH","desayuno"],descuento: "", precioActual: "$95.000", precioAnterior: "", descrip:"♥️ jugoso Churrasco♥️acompañado Maduro con queso, papa francesa o criolla♥️Ensalada♥️Bebida al gusto♥️Cubiertos ecológicos♥️Tarjeta personalizada♥️Aderezos♥️lindo Globo marcado segun tematica♥️Moñoy cintas segun tematica"},
                { nombre: "A20", img: "A020.jpeg", categorias:["especial","detalle","flores"],descuento: "", precioActual: "$95.000", precioAnterior: "", descrip:"♥️lindo cono decorado y  personalizado♥️mym, galletas, gomas, snikers♥️chocolatinas♥️ferrero rocher♥️tarjeta marcada segun tematica♥️2 rosas y follaje♥️moños y cintas segun tematica"},
                { nombre: "A21", img: "A021.jpg", categorias:["especial","especialH","detalle","flores"],descuento: "", precioActual: "$98.000", precioAnterior: "", descrip:"♥️ caja de madera con linda decoracion♥️Ferrero Rocher♥️coronita decorada♥frascos con frutos secos♥️gomas♥️galletas♥️moño y cintas segun tematica♥️tarjeta personalizada♥️arreglo floral 3 rosas y follaje"},
                { nombre: "A23", img: "A023.jpg", categorias:["especial","desayuno"],descuento: "", precioActual: "$98.000", precioAnterior: "", descrip:"♥️ sandwch de la casa o huevos rancheros♥️mix de frutas♥️bebida al gusto♥️postre personal♥️bandeja de madera♥️globos marcados segun tematica ♥️moños y cintas segun tematica♥️tarjeta personalizada♥️chocolates - dulces♥️cubiertos ecológicos"},
                { nombre: "A23H", img: "A23.jpg", categorias:["especialH","desayuno"],descuento: "", precioActual: "$98.000", precioAnterior: "", descrip:"♥️ sandwch de la casa o huevos rancheros♥️mix de frutas♥️bebida al gusto♥️postre personal♥️bandeja de madera♥️globos marcados segun tematica ♥️moños y cintas segun tematica♥️tarjeta personalizada♥️chocolates - dulces♥️cubiertos ecológicos"},
                { nombre: "A24", img: "A024.jpg", categorias:["especial","especialH","detalle","desayuno","flores"],descuento: "", precioActual: "$98.000", precioAnterior: "", descrip:"♥️ ensalada de frutas natural♥️yogurt griego, cereales♥️Ferrero rocher♥️cubiertos ecológicos♥️moño♥️linda caja marcada segun tematica♥️aderezos♥️ramillete 1 girasol, 2 rosas y follaje"},
                { nombre: "A25", img: "A025.jpg", categorias:["especial","detalle","peluche"],descuento: "", precioActual: "$98.000", precioAnterior: "", descrip:"♥️ Mug  personalizado♥️chocolatinas-dulces♥️Ferrero rocher♥️galletas♥️peluche pequeño♥️lindo globo decorado segun tematica♥️tarjeta personalizada♥️moños y cintas segun tematica."},
                { nombre: "A26", img: "A026.jpg", categorias:["especial","especialH","desayuno"],descuento: "", precioActual: "$128.000", precioAnterior: "", descrip:"♥️ Ensalada de frutas natural♥️Yogurt griego natural, cereales♥️Chocolates-dulces variados♥️Sándwich doble de la casa♥️bebida al gusto decorada♥️lindo arreglo  de globos en arco♥️Caja de madera decorada segun tematica♥️Cubiertos ecológicos♥️Tarjeta personalizada♥️Aderezos"},
                { nombre: "A27", img: "A027.jpg", categorias:["especial","especialH","detalle","flores","peluche","fresas"],descuento: "", precioActual: "$128.000", precioAnterior: "", descrip:"♥️ lindo arreglo florar con 3 girasoles y 3 rosas♥️caja de carton decorada que contiene: fresas con chocolate o  mini donas♥️peluche pequeño♥️moños y cintas segun tematica"},
                { nombre: "A28H", img: "A028.jpg", categorias:["especialH"],descuento: "", precioActual: "$155.000", precioAnterior: "", descrip:"♥️ caja de madera decorada♥️lindo globo burbuja marcado segun tematica♥️arreglo floralde 3 rosas ♥️foto♥️tarjeta personalizada segun tematica♥️omelette ♥️jugo natural al  gusto♥️yogurt  natural  ♥️mix de fruta ♥️Aderezos♥️sándwich con pollo♥️botella dulcera"},
                { nombre: "A28M", img: "A028A.jpg", categorias:["especial","desayuno","detalle","flores"],descuento: "", precioActual: "$155.000", precioAnterior: "", descrip:"♥️ caja de madera decorada♥️lindo globo burbuja marcado segun tematica♥️arreglo floralde 3 rosas ♥️foto♥️tarjeta personalizada segun tematica♥️omelette ♥️jugo natural al  gusto♥️yogurt  natural  ♥️mix de fruta ♥️Aderezos♥️sándwich con pollo♥️botella dulcera"},
                { nombre: "A29", img: "A029.jpg", categorias:["especial","detalle","flores"],descuento: "", precioActual: "$165.000", precioAnterior: "", descrip:"♥️linda canasta decorada♥️12 rosas eternas en liston satinado o naturales♥️frutas naturales (uvas,manzana verde,manzana roja,bananos)♥️moños y cintas segun tematica♥️tarjeta personalizada segun tematica♥️lindo globo burbuja decorado segun tematica"},
                { nombre: "A30", img: "A030.jpg", categorias:["especial","detalle","fresas","flores","virgen"],descuento: "", precioActual: "$168.000", precioAnterior: "", descrip:"♥️arreglo floral con 8 rosas a elegir si son eternas  en liston satinado o naturales♥️imagen de santo o santa♥️6 fresas con chocolate♥️linda caja con ventana decorada♥️moños, cintas y decoracion segun tematica♥️tarjeta personalizada"},
                { nombre: "A31", img: "A031.jpg", categorias:["especial","detalle","flores","fresas"],descuento: "", precioActual: "$168.000", precioAnterior: "", descrip:"♥️12 Ferreros Rocher♥️15 rosas rojas naturales y follaje♥️linda Caja negra decorada♥️Cintas y moños♥️Tarjeta personalizada"},
                { nombre: "A31", img: "A31.jpg", categorias:["especialH","detalle","flores","fresas"],descuento: "", precioActual: "$168.000", precioAnterior: "", descrip:"♥️12 Ferreros Rocher♥️15 rosas rojas naturales y follaje♥️linda Caja negra decorada♥️Cintas y moños♥️Tarjeta personalizada"},
                { nombre: "A31M", img: "A31M.jpg", categorias:["especial","especialH","detalle","flores","fresas"],descuento: "", precioActual: "$193.000", precioAnterior: "", descrip:"♥️peluche oso ♥️️12 Ferreros Rocher♥️15 rosas rojas naturales y follaje♥️linda Caja negra decorada♥️Cintas y moños♥️Tarjeta personalizada"},
                { nombre: "A32", img: "A032.jpg", categorias:["especial","especialH","desayuno","detalle","flores"],descuento: "", precioActual: "$198.000", precioAnterior: "", descrip:"♥️arreglo floral (1 girasol y 12 rosas)♥️ensalada de frutas♥️caja de madera♥️Ferrero Rocher♥️helado♥️frutos secos♥️yogurt griego o dulces♥️cubierto ecológico♥️tarjeta marcada ypersonalizada segun tematica"},
                { nombre: "A33", img: "A033.jpg", categorias:["especial","detalle","desayuno","flores"],descuento: "", precioActual: "$200.000", precioAnterior: "", descrip:"♥️ lindo arreglo floral♥️panqueques con fruta♥️bebida al gusto♥️postre  personal♥️lindo globo burbuja decorado segun tematica♥️yogurt griego y cereales♥️huevos rancheros♥️chocolates - dulces variados♥️tarjeta marcada ypersonalizada segun tematica♥️cubiertos ecológicos ♥️tarjeta marcada ypersonalizada segun tematica"},
                { nombre: "A34", img: "A034.jpg", categorias:["especial","detalle","licor","fresas","flores"],descuento: "", precioActual: "$220.000", precioAnterior: "", descrip:"♥️botella baile's♥️12 rosas y follaje♥️caja de madera♥️tarjeta personalizada♥️corazones o pin al gusto segun tematica♥️moños , cintas segun tematica♥️12 Ferrero Rocher"},
                { nombre: "A35", img: "A035A.jpg", categorias:["especialH","detalle","desayuno","flores"],descuento: "", precioActual: "$230.000", precioAnterior: "", descrip:"♥️ Caja de madera♥️Arco de globos♥️Globo burbuja marcado♥️tarjeta personalizada♥️Moños y cintas♥️Cubiertos ecológicos♥️Huevos rancheros♥️Mix de frutas♥️jugo  al gusto♥️Postre personal♥️Yogurt griego con cereales♥️Ramillete con 6 rosas y follaje♥️Media botella de vino gato negro"},
                { nombre: "A35M", img: "A035.jpg", categorias:["especial","desayuno"],descuento: "", precioActual: "$230.000", precioAnterior: "", descrip:"♥️ Caja de madera♥️Arco de globos♥️Globo burbuja marcado♥️tarjeta personalizada♥️Moños y cintas♥️Cubiertos ecológicos♥️Huevos rancheros♥️Mix de frutas♥️jugo  al gusto♥️Postre personal♥️Yogurt griego con cereales♥️Ramillete con 6 rosas y follaje♥️Media botella de vino gato negro"},
                { nombre: "A40", img: "A40.jpg", categorias:["especial","especialH","flores","detalle"],descuento: "", precioActual: "$295.000", precioAnterior: "", descrip:"♥️Caja decorada según temática ♥️ botella Jack Daniels Honey ♥️8 rosas naturales♥️9 Ferrero Roche ♥️Moños y cintas según temática♥️Tarjeta personalizada"},
                { nombre: "A41", img: "A41.jpg", categorias:["especial","especialH","detalle"],descuento: "", precioActual: "$138.000", precioAnterior: "", descrip:"linda caja decorada según temática ❤️ Sandwich jamón ahumado ,queso y verduras❤️2 te hatsu ❤️Vaso de yogurt ❤️ Caja de férreos Rocher ❤️ Paquetes personales de frutos secos y chocolatinas ❤️ Parfait artesanal ❤️ Letreros diez razones ❤️ Moños cintas y tarjetas según temática ❤️ Cubiertos ecologicos ❤️ Aderezos"},
                { nombre: "B01", img: "B01.jpeg", categorias:["especial","detalle","flores","fresas"],descuento: "", precioActual: "$148.000", precioAnterior: "", descrip:"♥️hermosa caja doble fondo negra♥️tarjeta personalizada♥️Cubiertos ecológicos♥️moños y cintas♥️20 Rosas eternas liston satinado ♥️7 unid ferrero rocher"},
                { nombre: "B02", img: "B02.jpg", categorias:["especial","detalle","flores","virgen"],descuento: "", precioActual: "$78.000", precioAnterior: "", descrip:"♥️Linda caja redonda en  negro decorada♥️5  rosas eternas en liston satinado♥️luces decorativas♥️Cintas y moño Figura santa o santo a elegir tarjeta personalizada."},
                { nombre: "B02H", img: "B02H.jpg", categorias:["especialH","detalle","flores","virgen"],descuento: "", precioActual: "$78.000", precioAnterior: "", descrip:"♥️Linda caja redonda en  negro decorada♥️5  rosas eternas en liston satinado♥️luces decorativas♥️Cintas y moño Figura santa o santo a elegir tarjeta personalizada."},
                { nombre: "B03", img: "B03.jpg", categorias:["detalle","especialN"],descuento: "", precioActual: "$83.000", precioAnterior: "", descrip:"♥️ linda  Caja de cartón decorada 6 maneras de amar de marvel♥️dulces - chocolates variador♥️cama papel seda♥️Tarjeta personalizada ♥️decoracion, moños y cintas segun tematica"},
                { nombre: "B04", img: "B04.jpg", categorias:["detalle"],descuento: "", precioActual: "$150.000", precioAnterior: "", descrip:"♥️4 Cajas de carton con fondos♥️24 fotos♥️dulces - chocolates variados♥️gomas♥️5 mensajes personalizados♥️decoracion , moños, cintas segun tematica♥️fondo papel seda"},
                { nombre: "B05", img: "B05.jpeg", categorias:["desayuno","detalle"],descuento: "", precioActual: "$118.000", precioAnterior: "", descrip:"♥️ bandeja en división sándwich♥️división mix fruta♥️postre o dulces- chocolates♥️bebida al gusto♥️lindo globo burbuja marcado segun tematica♥️moño y cubiertos ecológicos♥️tarjeta personalizada♥️aderezos♥️huevos rancheros♥️4 tortillas"},
                { nombre: "B06", img: "B06.jpeg", categorias:["especial","detalle","peluche","flores","fresas"],descuento: "", precioActual: "$180.000", precioAnterior: "", descrip:"♥️linda caja decorado y  personalizado♥️dulces variados, galletas, gomas y chocolatinas♥️6 mini donas♥️tarjeta marcada segun tematica♥️ramillete 3 rosas, girasol y follaje♥️moños y cintas segun tematica♥️peluche♥️cama papel seda♥️10 letreros cancion 10 razones para amarte♥️cama papel seda"},
                { nombre: "B07", img: "B07.jpg", categorias:["especial","especialH","desayuno","detalle"],descuento: "", precioActual: "$158.000", precioAnterior: "", descrip:"♥️Caja exagonal de madera decorada♥️Huevos rancheros♥️arepas con queso♥️Mix de frutas naturales♥️Aderezos♥️Bebida al gusto♥️Galletas y chocolates varios♥️Tarjeta , moños y cintas deacuerdo a la temática♥️globos marcados y arco de globos "},
                { nombre: "B35", img: "B035.jpg", categorias:["especial","detalle","flores","fresas"],descuento: "", precioActual: "$218.000", precioAnterior: "", descrip:"♥️Arreglo floral con 12 rosas eternas en liston satinado o rosas naturales♥️15 fresas bañadas en chocolate♥️Linda caja decorada redonda de base ♥️Globo burbuja decorado y marcado según ocasión♥️Moños y cintas"},
                { nombre: "B5P", img: "B5p.jpg", categorias:["desayuno","detalle","peluche"],descuento: "", precioActual: "$198.000", precioAnterior: "", descrip:"peluche de cerdito con capucha♥️ bandeja en división sándwich♥️división mix fruta♥️postre o dulces- chocolates♥️bebida al gusto♥️lindo globo burbuja marcado segun tematica♥️moño y cubiertos ecológicos♥️tarjeta personalizada♥️aderezos♥️huevos rancheros♥️4 tortillas"},
                { nombre: "DE1", img: "DE1.jpg", categorias:["mug","especial","desayuno","detalle","flores","fresas"],descuento: "", precioActual: "$175.000", precioAnterior: "", descrip:"Linda caja de madera color rosada ❤️Decoración según temática❤️arreglo con globos❤️pocillo mug según temática decorado con arreglo floral❤️3 und ferrero roche❤️ensalada de frutas❤️Aderezos❤️Botella té hatsu❤️parfait❤️6 minidonas o fresas con chocolate❤️Varios chocolates❤️Cubiertos ecologicos❤️Tarjeta personalizada ❤️Moños y cintas según tematica"},
                { nombre: "DMá", img: "DMá.jpeg", categorias:["mug","especial","detalle","desayuno","flores","fresas"],descuento: "", precioActual: "$135.000", precioAnterior: "", descrip:"Linda caja de madera color rosada ❤️Decoración según temática❤️arreglo con globos.❤️Pin segun ocasion❤️Lindo mug según temática decorado con arreglo floral❤️3 und ferrero roche❤️Sandwich de la casa❤️Aderezos❤️Botella jugo de naranja❤️Mix de frutas❤️Varios chocolates❤️Cubiertos ecologicos❤️Tarjeta personalizada ❤️Moños y cintas según tematica"},
                { nombre: "EEl", img: "EEl.jpeg", categorias:["especial","detalle","flores","fresas"],descuento: "", precioActual: "$98.000", precioAnterior: "", descrip:"❤️Lindo bouquet de 9 fresas con chocolate decoradas en forma de rosas.❤️Arreglo floral con un girasol.❤️Tarjeta personalizada❤️Cintas , moños y envoltura según temática"},
                { nombre: "EG", img: "EG.jpeg", categorias:["especialN","desayuno"], descuento: "", precioActual: "$93.000", precioAnterior: "", descrip:"globo numero ❤️ arreglo de globos ❤️ foto fondo ❤️ decoracion segun ocasion ❤️ bebida al gusto ❤️ sadwiche (jamon y queso) ❤️ postre personal ❤️ huevos de codorniz y salchichas ❤️ pony malta ❤️ paquete papa frita ❤️ gomas ❤️ caja de madera"},
                { nombre: "EM1", img: "EM1.jpeg", categorias:["especial","mug", "detalle","flores","fresas"],descuento: "", precioActual: "$68.000", precioAnterior: "", descrip:"❤️Mug según ocasión ❤️ 3 rosas y follaje ❤️ 3 Ferreros Rocher ❤️ letrero segun ocasion❤️ globo según ocasión ❤️ decoración en general ❤️ mariposas y moños"},
                { nombre: "EM2", img: "EM2.jpeg", categorias:["especial","mug","detalle","flores","fresas"],descuento: "", precioActual: "$98.000", precioAnterior: "", descrip:"❤️Mug metalizado brillante ❤️ 8 rosas y follaje ❤️ 4 Ferreros Rocher ❤️ letrero segun ocasion❤️ globo según ocasión ❤️ decoración en general ❤️ mariposas"},
                { nombre: "EMA", img: "EMá.jpeg", categorias:["especial"],descuento: "", precioActual: "$65.000", precioAnterior: "", descrip:"Linda caja portátil decorada según ocasión.❤️ botella con jugo de naranja.❤️Sandwich de la casa( jamón ahumado ,queso tajado,porción de pollo artesanal,verduras.)❤️Aderezos❤️Mix de frutas natural❤️Dulces varios❤️Moños ❤️tarjeta según decoracion"},
                { nombre: "EMrA", img: "EMra.jpeg", categorias:["especial","detalle","desayuno"],descuento: "", precioActual: "$80.000", precioAnterior: "", descrip:"❤️caja de madera ❤️ te hatsu ❤️ waffle ❤️ parfait personal ❤️ cubiertos ecologicos ❤️ huevos ranchero ❤️ arreglo de globos ❤️ moños y cintas ❤️ tarjeta personalizada"},
                { nombre: "G1", img: "G1.jpg", categorias:["especialH","especial","detalle"],descuento: "", precioActual: "$188.000", precioAnterior: "", descrip:"Caja de madera ❤️ Globo burbuja decorado con luces❤️ jp chenet 200ml ❤️ 4 tarros vidrio (frutos secos, gomas, galletas)❤️ Ferrero Rocher ❤️ Burbujet❤️ Tarjeta personalizada ❤️moños y cintas "},
                { nombre: "MM1", img: "MM1.jpg", categorias:["especial","mug", "detalle","flores","fresas"],descuento: "", precioActual: "$88.000", precioAnterior: "", descrip:"❤️Mug según ocasión ❤️ 3 rosas y follaje ❤️ 3 Ferreros Rocher ❤️ 8 minidonas o fresas con chocolate ❤️ letrero segun ocasion❤️ globo según ocasión ❤️ decoración en general ❤️ mariposas y moños"},
                { nombre: "PR1", img: "PR1.jpg", categorias:["especialH","especial","detalle","peluche","flores"],descuento: "", precioActual: "$108.000", precioAnterior: "", descrip:"❤️Linda caja negra decorada según temática ❤️4 rosas negras con follaje ❤️ Un oso aproximadamente 18cm ❤️ 5 ferreros roches ❤️ Tarjeta y cintas según temática"},
                { nombre: "RB1", img: "RB1.jpg", categorias:["especial","detalle"], descuento: "", precioActual: "$98.000", precioAnterior: "", descrip:"❤️balde de madera ❤️ 3 coronitas decoradas ❤️ dulces variados (chocolatinas, mani, gomas, ferrero rocher, gol, burbujet)❤️globo personalizado ❤️ moños y cintas ❤️ tematica al gusto ❤️ tarjeta personalizada"},
                { nombre: "Rl1", img: "Rl1.jpg", categorias:["especial","especialH","detalle","flores"],descuento: "", precioActual: "$35.000", precioAnterior: "", descrip:"♥️ lindo arreglo florar con 3 rosas eternas en liston satinado, follaje, moño y tarjeta personalizada"},
                { nombre: "Rl2", img: "Rl2.jpg", categorias:["especial","detalle","flores"],descuento: "", precioActual: "$28.000", precioAnterior: "", descrip:"♥️ lindo arreglo florar con 2 rosas eternas en liston satinado, follaje, moño y tarjeta personalizada"},
                { nombre: "Rl3", img: "R13.jpeg", categorias:["especial","detalle","flores","fresas"],descuento: "", precioActual: "$55.000", precioAnterior: "", descrip:"♥️ lindo arreglo florar con 1 girasol eterno en liston satinado, 3 unid ferreros rocher, moño y tarjeta personalizada"},
                { nombre: "Rl3H", img: "R13H.jpg", categorias:["especialH","detalle","flores","fresas"],descuento: "", precioActual: "$55.000", precioAnterior: "", descrip:"♥️ lindo arreglo florar con 1 girasol eterno en liston satinado, 3 unid ferreros rocher, moño y tarjeta personalizada"},
                { nombre: "Rl4", img: "Rl4.jpg", categorias:["especial","detalle","flores"],descuento: "", precioActual: "$48.000", precioAnterior: "", descrip:"♥️ lindo arreglo florar con 1 girasol natural o eterno en liston satinado, follaje variado, moño y tarjeta personalizada"},
                { nombre: "Rl5", img: "Rl5.jpg", categorias:["especial","flores","detalle"],descuento: "", precioActual: "$70.000", precioAnterior: "", descrip:"♥️ lindo arreglo florar con 2 girasol natural o eterno en liston satinado, follaje variado, globo marcado, moño y tarjeta personalizada"},
                { nombre: "Rl6", img: "Rl6.jpg", categorias:["especial","detalle","flores"],descuento: "", precioActual: "$88.000", precioAnterior: "", descrip:"♥️ lindo arreglo florar con 3 girasol natural o eterno en liston satinado, follaje variado, globo marcado, moño y tarjeta personalizada"},
                { nombre: "Rl7", img: "Rl7.jpg", categorias:["especial","detalle","flores","fresas"],descuento: "", precioActual: "$88.000", precioAnterior: "", descrip:"♥️ lindo arreglo florar con 7 rosas natural o eternas en liston satinado, follaje variado, chocolates - dulces, moño y tarjeta personalizada"},
                { nombre: "Rl8", img: "Rl8.jpg", categorias:["especial","detalle","flores"],descuento: "", precioActual: "$180.000", precioAnterior: "", descrip:"♥️ lindo arreglo florar con 12 rosas y 3 girasoles natural o eternos en liston satinado, follaje variado, moño y tarjeta personalizada"},
                { nombre: "RMA", img: "RMá.jpeg", categorias:["especial","especialH","flores","peluche"],descuento: "", precioActual: "$60.000", precioAnterior: "", descrip:"❤️peluche❤️ramillete 3 rosas naturales o eternas y follaje ❤️ tarjeta personalizada ❤️ moños y cintas ❤️ emvolura"},
                { nombre: "SPM", img: "SPM.jpg", categorias:["especialN","desayuno","peluche"], descuento: "", precioActual: "$198.000", precioAnterior: "", descrip:"Globo numero️ ❤ peluche spiderman ❤️ ensalada de frutas o huevos ranchero ❤️ bebida al gusto ❤️ gelatina de colores ❤️dulces variado ❤️ globo personalizado ❤️ cubiertos ecologicos ❤️ tarjeta personalizada ❤️ aderezos ❤️ moños y cintas ❤️ tematica al gusto"},

{ nombre: "New1", img: "New1.jpeg", categorias:["especialH"],descuento: "", precioActual: "$73.000", precioAnterior: "", descrip:"Cerveza coronita o coca cola en lata decorada según temática ❤️ chocolates variados (ferrero rocher, mani, gomas, gol, chocolatinas, etc) ❤️ Pines y rosetones ❤️ globo burbuja segun tematica ❤️tarjeta personalizada ❤️ moños y cintas según temática"},
                        { nombre: "New4", img: "New4.jpeg", categorias:["especialH"],descuento: "", precioActual: "$78.000", precioAnterior: "", descrip:" Linda caja exagonal de madera decorada según temática ❤️ Sandwich extra especial o 3 empanadas❤️ Parfait natural con yogurt griego ❤️ Cerveza coronita ❤️ Waffle saludable ❤️ Galleta Chokis clásica ❤️ Chocolates ❤️Cubiertos ecológicos ❤️ Aderezos ❤️ Letreros,moños,cintas y tarjeta según tematica"},
                        { nombre: "New3", img: "New3.jpeg", categorias:["especialH"],descuento: "", precioActual: "$83.000", precioAnterior: "", descrip:"❤️Linda caja de madera en color negro decorada según temática ❤️ 3  deliciosas empanadas de carne ❤️ Cerveza coronita ❤️ jugo de naranja natural o te Hatsu ❤️ Mix de frutas fresca ❤️ yogurt griego y cereal ❤️ 3 unid ferreros Rocher ❤️ Cubiertos ecológicos ❤️ Aderezos ❤️ Tarjeta y moños personalizados según ocacion "},
                        { nombre: "New2", img: "New2.jpeg", categorias:["especialH"],descuento: "", precioActual: "$105.000", precioAnterior: "", descrip:"Detalle con lindo globo marcado según temática ❤️ 2 cervezas Coronitas ❤️ Mug personalizado ❤️ Recipiente de vidrio con frutos secos ❤️ Chocolates, ferrero rocher, mani, gomas, y galletas varias ❤️ Caja base decorada según temática ❤️ Tarjeta personalizada ❤️ cintas y moños según temática"},
                        
                 

        ];

            function limpiarPrecio(precio) {
                return parseFloat(precio.replace(/[^\d.-]/g, ''));
            }

            productos.sort(function(a, b) {
                return limpiarPrecio(a.precioActual) - limpiarPrecio(b.precioActual);
            });

            function mostrarProductos(categoria) {
                var catalogo = document.getElementById("catalogo");
                catalogo.innerHTML = "";

                productos.forEach(function(producto) {
                    if (categoria === "todos" || producto.categorias.includes(categoria)) {
                        var productoHTML = `
                            <div class="container-productss">
                                <div class="card-product">
                                    <div class="container-img">
                                        <img src=" img/Catalogo/${producto.img}" alt="${producto.nombre}" />
                                        ${producto.descuento ? `<span class="discount">-${producto.descuento}</span>` : ''}
                                        <div class="button-group">
                                            <span><i class="fa-regular fa-heart"></i></span>
                                            <br>
                                        </div>
                                        <div class="button-groupp" onclick="mostrarSweetAlert('${producto.nombre}')">
                                            <span> <i class="fa-regular fa-eye"> ver Descripcion</i></span>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="content-card-product">
                                        <div class="stars">
                                            ${Array.from({ length: 5 }, () => `<i class="fas fa-star"></i>`).join('')}
                                            ${Array.from({ length: 5 - 5 }, () => `<i class="far fa-star"></i>`).join('')}
                                        </div>
                                        <h3>Referencia: ${producto.nombre}</h3>
                                        <span class="add-cart">
                                            <a href="https://wa.me/+573228766485?text=Revise%20la%20pagina%20y%20deseo%20agendar%20la%20Ref%20${producto.nombre}" class="btn-2">
                                                <i class="fa-solid fa-basket-shopping"></i>
                                            </a>
                                        </span>
                                        <p class="price">${producto.precioActual} ${producto.precioAnterior ? `<span>${producto.precioAnterior}</span>` : ''}</p>
                                    </div>
                                </div>
                            </div>
                        `;
                        catalogo.innerHTML += productoHTML;
                    }
                });
            }

            // Mostrar todos los productos al cargar la página
            mostrarProductos("todos");

            // Obtener el valor de la variable de la URL
            const params = new URLSearchParams(window.location.search);
            const variable = params.get('variable');

            // Si la variable existe y es "especial", filtrar por la categoría especial
            if (variable && variable === "especial") {
                mostrarProductos("especial");
            }

            if (variable && variable === "especialH") {
                mostrarProductos("especialH");
            }
            if (variable && variable === "especialN") {
                mostrarProductos("especialN");
            }
            if (variable && variable === "flores") {
                mostrarProductos("flores");
            }

            if (variable && variable === "desayuno") {
                mostrarProductos("desayuno");
            }

            // Agregar evento de cambio al select
            document.getElementById("filtroCategoria").addEventListener("change", function() {
                var categoriaSeleccionada = this.value;
                mostrarProductos(categoriaSeleccionada);
            });

            function mostrarSweetAlert(nombre) {
                alert(`Descripción del producto: ${nombre}`);
            }

            // Mostrar SweetAlert al cargar la página
           Swal.fire({
            title: '¡Bienvenido!',
            html: `
                <p>Para optimizar tu experiencia y comodidad, te recomendamos filtrar nuestras referencias de acuerdo con tus preferencias:</p>
                <div style="text-align: left; font-size: 18px;">
                    <label style="display: block;"><input type="radio" name="categoria" value="especial" > Detalles Para Mujer</label>
                    <label style="display: block;"><input type="radio" name="categoria" value="especialH" > Detalles Para Hombre</label>
                    <label style="display: block;"><input type="radio" name="categoria" value="especialN" > Detalles Para Niñ@s</label>
                    <label style="display: block;"><input type="radio" name="categoria" value="desayuno"> Desayunos Sorpresa</label>
                    <label style="display: block;"><input type="radio" name="categoria" value="peluche"> Detalles con Peluches</label>
                    <label style="display: block;"><input type="radio" name="categoria" value="detalle"> Detalles Sorpresas</label>
                    <label style="display: block;"><input type="radio" name="categoria" value="flores"> Arreglos Florales</label>
                    <label style="display: block;"><input type="radio" name="categoria" value="fresas"> Fresas y Minidonas con chocolate</label>
                    <label style="display: block;"><input type="radio" name="categoria" value="virgen"> Figura de la Virgen</label>
                    <label style="display: block;"><input type="radio" name="categoria" value="mug"> Mug Personalizados</label>
                    <label style="display: block;"><input type="radio" name="categoria" value="todos" checked > Todas las categorias sin filtrar</label>
                </div>
            `,
            customClass: { popup: 'custom-swal' },
            position: 'center',
            confirmButtonText: 'Filtrar',
            preConfirm: () => {
                const categoria = Swal.getPopup().querySelector('input[name="categoria"]:checked');
                if (!categoria) {
                    Swal.showValidationMessage('Por favor selecciona una categoría');
                    return false;
                }
                return { categoria: categoria.value };
            }
        }).then((result) => {
            if (result.isConfirmed) {
                mostrarProductos(result.value.categoria);
            }
        });
        });
    </script>


    <div class="carousel-container">
        <h1 class="heading-11">apartado de:</h1>
        <h1 class="heading-1">-Productos para adicionar-</h1>
        <br>
        <div class="carousel-slide">
        <!-- Aquí se generarán dinámicamente los elementos del carrusel -->
        </div>
        <button id="prevBtn" class="carousel-button carousel-button-prev">&lt;</button>
        <button id="nextBtn" class="carousel-button carousel-button-next">&gt;</button>
    </div>

    <script>
        const images = [
            { nombre: "PapaFrancesa", img: "jpg",des:"porción de papa francesa"},
            { nombre: "ClubColombiaRoja", img: "jpg",des:"unidad club colombia roja en lata"},
            { nombre: "CocacolaLata", img: "jpg",des:"unidad coca cola en lata"},
            { nombre: "Coronita", img: "jpg",des:"unidad coronita"},
            { nombre: "Cubierto", img: "jpg",des:"juego de cubiertos ecologicos, servilleta y empaque"},
            { nombre: "EmpanadaCasa", img: "jpg",des:"unidad empanada de la casa (pollo o carne)"},
            { nombre: "EnsaladaFrutas", img: "jpg",des:"ensalada de frutas "},
            { nombre: "FerreroRocher", img: "jpg",des:"paq. ferrero rocher por 3 unidades"},
            { nombre: "FresaChocolate", img: "jpg",des:"unidad de fresa cubierta de chocolate"},
            { nombre: "GirasolEterno", img: "jpg",des:"unidad girasol eterno en liston satinado"},
            { nombre: "Globo", img: "jpg",des:"unidad globo R12 marcado al gusto"},
            { nombre: "GloboMetali", img: "jpg",des:"unidad globo metalizo de corazon pequeño marcado al gusto"},
            { nombre: "Hamburguesa", img: "jpg",des:"unidad de hamburguesa"},
            { nombre: "HotWheels", img: "jpg",des:"unidad de carro hotwheels (segun disponibilidad)"},
            { nombre: "jugo", img: "jpg",des:"unidad de jugo natural en botella sabor al gusto"},
            { nombre: "JumboFlowMini", img: "jpg",des:"unidad de chocolatina jumbo flow mini"},
            { nombre: "MyM", img: "jpg",des:"unidad de M&M"},
            { nombre: "ManiEspecial", img: "jpg",des:"unidad de mani marca la especial"},
            { nombre: "MiniChips", img: "jpg",des:"unidad de galletas Mini Chips"},
            { nombre: "MixFruta", img: "jpg",des:"unidad de mix de frutas "},
            { nombre: "Moño", img: "jpg",des:"unidad moño en cinta de papel"},
            { nombre: "PapFrancesa", img: "jpg",des:"porción de papa francesa"},
            { nombre: "ParfaitBotella", img: "jpg",des:"botella de parfait"},
            { nombre: "RosaEterna", img: "jpg",des:"unidad de rosa eterna en liston satinado sin decoracion"},
            { nombre: "RosaRoja", img: "jpg",des:"unidad de rosa natural (color al gusto/segun disponibilidad) sin decoracion"},
            { nombre: "Sandwiche", img: "jpg",des:"unidad de sandwiche"},
            { nombre: "SandwicheDoble", img: "jpg",des:"unidad de sandwiche doble"},
            { nombre: "TeaHatsu", img: "jpg",des:"unidad tea hatsu 250ml"},
            { nombre: "Virgen", img: "jpg",des:"unidad figura de la virgen en resina"},
            { nombre: "WaferJet", img: "jpg",des:"unidad galleta Wafer Jet"},
            { nombre: "Waffle", img: "jpg",des:"unidad waffle doble"},
            { nombre: "WaffleTriangulo", img: "jpg",des:"empaque con 3 unidades de waffle triangular"},
            { nombre: "YogurtGranola", img: "jpg",des:"empaque de domo con yogurth griego y cereales"},
                
                
        ];

        const carouselSlide = document.querySelector('.carousel-slide');
        
        images.forEach(image => {
        const item = document.createElement('div');
        item.classList.add('carousel-item');
        item.innerHTML = `
            
            <img src=" img/Adicional/${image.nombre}.${image.img}" alt="${image.nombre}" />
            <br>
            <div class="content-card-product">
                <span class="add-cart">
                    <a href="https://wa.me/+573228766485?text=Revise%20los%20adicionales%20de%20la%20pagina%20y%20deseo%20agregar%20el%20Adicional%20de%20${image.nombre}" class="btn-2">
                    <i class="fa-solid fa-plus"></i></a>
                </span>
                <p class="price">${image.nombre}</p>
            </div>
            <t>1 ${image.des} <br> ♥️decoracion acorde al detalle general</t>
                            
        `;
        carouselSlide.appendChild(item);
        });

        let counter = 0;
        const totalSlides = images.length;
        const slidesToShow = 5; // Ajusta según la cantidad de elementos visibles

        function updateCarousel() {
            const offset = -counter * (100 / slidesToShow);
            carouselSlide.style.transform = `translateX(${offset}%)`;
        }

        function showNextSlide() {
            counter++;
            if (counter >= totalSlides) {
                counter = 0;
            }
            updateCarousel();
        }

        function showPrevSlide() {
            counter--;
            if (counter < 0) {
                counter = totalSlides - 1;
            }
            updateCarousel();
        }

        document.getElementById('nextBtn').addEventListener('click', showNextSlide);
        document.getElementById('prevBtn').addEventListener('click', showPrevSlide);

        setInterval(showNextSlide, 3500); // Cambia de imagen cada 2 segundos

        
    </script>

        

	<?php include'Fin.php'?> 

    </footer>

    <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
    <!-- Tu archivo de JavaScript personalizado -->
    <script src=" script.js"></script>
</body>
</html>
