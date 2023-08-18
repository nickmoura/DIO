/*Criar um programa para calcular o valor de uma viagem.

Você terá 3 variáveis. Sendo elas:
1 - Preço do combustível;
2 - Gasto médio de combustível do carro por KM;
3 - Distância em KM da viagem;

Imrpima no console o valor que será gasto para realizar esta viagem.

*/

const combustivel = 5.79;
let consumo = 10;
const distancia = 100;

let litrosconsumidos = distancia/consumo;
let valorgasto = litrosconsumidos*combustivel;
console.log(valorgasto.toFixed(2));