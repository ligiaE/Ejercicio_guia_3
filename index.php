<!DOCTYPE html>
<html lang="en">
<head>
<meta  charset="utf-8">
<title>Desarrollo ejercicio 3 </title>

</head>
<body>
   
    <p>Ejercicio tres  Por medio de un menú dar al usuario la opción de seleccionar círculo o circunferencia si selecciona círculo calcular su área. A=PI*r^2, si selecciona circunferencia calcular su longitud. </p>
                        
                          
                        <form id="Figura" name="Figura" action="desarrollo3.php" method="POST">
                            <label>Seleccione el tipo de figura:</label>
            <select id="area" name="area">
                <option value="Circulo">Circulo</option>
                <option value="Circunferencia">Circunferencia</option>
            </select><br>
            <br>
            
            <label>ingrese el valor del Radio</label>
            <input type="text" name="valor" onKeypress="if (event.keyCode < 45 || event.keyCode >57) event.returnValue = false;" maxlength="4" minlength="2" required="required"><br>
            <br />
            <input type="submit" value="Enviar">
        </form>
        <br/>
        <br />
  
</div></body>
</html>