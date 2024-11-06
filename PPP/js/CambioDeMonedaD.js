document.addEventListener("DOMContentLoaded", function(){
    const Moneda = {
    'COCR' : 450,
    'YENES': 120,
    'MEXD' : 20,
    'USD': 1 
}; //Cada moneda esta reflejada de la siguiente manera USD*Moneda

document.getElementById("ConversionBoton").addEventListener("click", function(){
    var MonedaCantidadOrigen = parseFloat(document.getElementById("Cantidad").value);
    var MonedaOrigenSeleccionada = document.getElementById("MonedaOrigenSeleccionada").value;
    var MonedaDestinoeleccionada = document.getElementById("MonedaDestinoeleccionada").value;
    var MonOrTrans = MonedaCantidadOrigen / Moneda[MonedaOrigenSeleccionada] ;  //Variable de la Moneda Origen Transformada a Dolar = MonOrTrans
    var DineroConvertido = (MonOrTrans * Moneda[MonedaDestinoeleccionada]);
    document.getElementById("Resultado").innerHTML = "Se ha hecho la conversión de su moneda de <strong>$"+MonedaCantidadOrigen.toFixed(2)+" "+ MonedaOrigenSeleccionada+
    "</strong> a <strong>$" +DineroConvertido.toFixed(5) +" "+ MonedaDestinoeleccionada+"</strong><br>";
    });
});