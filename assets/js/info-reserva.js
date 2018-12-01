/* Este script altera as informações de reserva */

var dataCheckin = document.querySelector("#dataCheckinHospede").value;
var dataCheckout = document.querySelector("#dataCheckoutHospede").value;
var quantidadeDiarias = document.querySelector("#quantidadeDiariasHospede").value;

quantidadeDiarias = dataCheckout-dataCheckin;
console.log(quantidadeDiarias);