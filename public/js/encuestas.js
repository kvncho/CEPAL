$(document).ready(function () {


    $('.hija').on('click',function () {

       $objetivo = $('.padre').data('value');
       $indicador = $(this).data('value');
       $name_objetivo = $(this).parent('span').text();

       if($(this).hasClass("active")){
           $(this).removeClass("active");
           $padre =  $(this).parent('#lista').addClass("active");
       }

       console.log("objetivo =>" + $objetivo + "  indiador =>"+ $indicador + "  nobre de objetivo :  "+  $name_objetivo);
    });


});


function vercobertura(){

        if ($('input:radio[name=cobertura]:checked').val()==5) {
            document.getElementById('otro').style.display='block';
        } else {
            document.getElementById('otro').style.display='none';
        }
    }




    function VPeriodicidad(){

        if ($('input:radio[name=Periodicidad]:checked').val()==5) {
            document.getElementById('otro1').style.display='block';
        } else {
            document.getElementById('otro1').style.display='none';
        }
    }


    function validarSiNumero(numero){
        if (!/^([0-9])*$/.test(numero))
            alert("El valor " + numero + " no es un número");
    }


    function habilitar() {
        if ($('input:radio[name=chka]:checked').val()==02 || $('input:radio[name=chka]:checked').val()==03) {

            document.getElementById('otro2').style.display = 'block';
            document.getElementById('otro3').style.display = 'none';
            document.getElementById('otro4').style.display = 'none';
            document.getElementById('otro5').style.display = 'none';
            document.getElementById('otro6').style.display = 'none';
            document.getElementById('otro7').style.display = 'none';
        } else {

            document.getElementById('otro2').style.display = 'none';
            document.getElementById('otro3').style.display = 'block';
            document.getElementById('otro4').style.display = 'block';
            document.getElementById('otro5').style.display = 'block';
            document.getElementById('otro6').style.display = 'block';
            document.getElementById('otro7').style.display = 'block';
        }

    }





