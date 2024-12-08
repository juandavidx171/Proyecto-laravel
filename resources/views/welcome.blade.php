<!DOCTYPE html>
<html>
<head>
    <title> Mate</title>
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("javascript/script.js") }}">
    <script>
        function calcular(operacion) {
            var num1 = parseFloat(document.getElementById('numero1').value);
            var num2 = parseFloat(document.getElementById('numero2').value);
            var resultado;

            if (isNaN(num1) || isNaN(num2)) {
                resultado = "Por favor, ingrese dos números válidos.";
            } else {
                switch (operacion) {
                    case 'suma':
                        resultado = num1 + num2;
                        break;
                    case 'resta':
                        resultado = num1 - num2;
                        break;
                    case 'multiplicacion':
                        resultado = num1 * num2;
                        break;
                    case 'division':
                        if (num2 !== 0) {
                            resultado = num1 / num2;
                        } else {
                            resultado = "No se puede dividir por cero.";
                        }
                        break;
                }
            }
            document.getElementById('resultado').innerText = "El Resultado es: " + resultado;
        }
    </script>
</head>
<body>
    <h1>Calculadora normal ejecutiva expres</h1>
    <form>
        <label for="numero1">Número 1:</label>
        <input type="text" id="numero1" name="numero1"><br><br>
        <label for="numero2">Número 2:</label>
        <input type="text" id="numero2" name="numero2"><br><br>
        <input type="button" value="Sumar" onclick="calcular('suma')">
        <input type="button" value="Restar" onclick="calcular('resta')">
        <input type="button" value="Multiplicar" onclick="calcular('multiplicacion')">
        <input type="button" value="Dividir" onclick="calcular('division')">
    </form>
    <p id="resultado"></p>
</body>
</html>



