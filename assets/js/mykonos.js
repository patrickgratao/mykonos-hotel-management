/*CÓDIGOS REFERENTES A CARACTERÍSTICAS DO SOFTWARE*/

//Cálculo de Diárias e Valor Total a Pagar
    function dataEntrada () {
        var dataCheckIn = document.querySelector('#dataCheckinHospede').value;
        return dataCheckIn;
    }

    function dataSaida () {
        var dataCheckOut = document.querySelector('#dataCheckoutHospede').value;
        return dataCheckOut;
    }

    function calculaDiarias(date1, date2){
        //formato do brasil 'pt-br'
        moment.locale('pt-br');
        //setando data1
        var data1 = moment(date1,'DD/MM/YYYY');
        //setando data2
        var data2 = moment(date2,'DD/MM/YYYY');
        //tirando a diferenca da data2 - data1 em dias
        var diff  = data2.diff(data1, 'days');

        var qtdDiarias = document.querySelector('#quantidadeDiariasHospede');
        qtdDiarias.value = diff;
        console.log("Total de Diarias: "+diff);
}
    
    function calculaTotalPagar(qtdDiarias, acompanhantes, precoDiaria, valorPago) {
        var acompanhantes = parseInt(acompanhantes)+1;
        var valorTotal = (precoDiaria*qtdDiarias)*(acompanhantes)-valorPago;

        var insereValorTotal = document.querySelector('#precoTotal');
        insereValorTotal.value = valorTotal.toFixed(2);

        console.log("Total a Pagar éh: "+valorTotal);

    }

//Este código faz uma mudança visual no sexo do hóspede
    var sexo = document.querySelector('.sexo-hospede');
    if (sexo.innerHTML == "m") {
      sexo.textContent = "Masculino";
    }
    else {
      sexo.textContent = "Feminino";
    }

//Mudança visual na data de nascimento e idade do hóspede
    var dataNascimento = document.querySelector('.data-nascimento');
    //formato do brasil 'pt-br'
    moment.locale('pt-br');
    //setando data de nascimento 
    var dataNascimentoMask = moment(dataNascimento.textContent,'DD/MM/YYYY');
    var idade = moment().diff(dataNascimentoMask, 'years',false);

    dataNascimento.textContent = dataNascimento.textContent + " - "+idade+" anos";
    console.log(idade);

//Função para setar a data atual no checkin
function dataAtual () {
    var dtCheckIn = document.querySelector('#dataCheckinHospede');
    moment.locale('pt-br');
    //setando data de nascimento 
    var dataHoje = moment().format('DD/MM/YYYY');
    dtCheckIn.value = dataHoje;

}