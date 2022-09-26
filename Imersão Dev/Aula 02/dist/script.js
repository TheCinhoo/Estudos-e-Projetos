//Conversor de Moedas
function Converter() {
    var dolar = 5.25;
    var libra = 6.04;
    var bitcoin = 98963.09;

    var valorReal = parseFloat(document.getElementById("valor").value);
    var elSelect = document.getElementById("select").value;

    console.log(elSelect);
    var elementoValorConvertido = document.getElementById("valorConvertido");

    switch (elSelect) {
    case "dolar":    
        elementoValorConvertido.innerHTML = "R$:" + valorReal + " Equivale a $:" + (valorReal / dolar).toFixed(2);
        break;
    case "libra":
        elementoValorConvertido.innerHTML = "R$:" + valorReal + " Equivale a £:" + (valorReal / libra).toFixed(2);           
        break;
    
    case "bitcoin":
        elementoValorConvertido.innerHTML = "R$:" + valorReal + " Equivale a ₿:" + (valorReal / bitcoin).toFixed(2);        
    break;
    
        default:
            alert("ERROR!")
        break;
    } 
    
    
}

// Conversor de quilômetros para anos luz e verificar o tempo que demora para ir de uma estrela para outra.
function ConverterKm() {
    const anosLuz = 9460528405000;
    
    var km = parseFloat(document.getElementById("km").value);
    var kmConvertido = anosLuz * km + " Anos Luz";
    
    var valorConvertidoKm = document.getElementById("valorConvertidoKm");

    valorConvertidoKm.innerHTML = kmConvertido;
}

// Conversor de temperaturas entre farenheit, kelvin e celcius.


function ConvertTemperatura() {
    const k = 0;
    const c = -273.15;
    const f = -459.67;

    var op1 = document.getElementById("temp1").value;
    var op2 = document.getElementById("temp2").value;

    if (op1 == 'c' && op2 == 'f' || op1 == 'f' && op2 == 'c') {
        if (op1 == 'c') {
            var result = (op1 * 9 / 5) + 32;
        } else {
            var result = (op1 - 32) * 5 / 9;
        }
        var resultado = document.getElementById("result");
        resultado.innerHTML = result;
    } elseif(op1 == 'c' && op2 == 'k' || op1 == 'k' && op2 == 'c'){

    } else {

    }

    
}