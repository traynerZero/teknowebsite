

$(document).ready(function(){
        //load home.php
        //--->
        $('#np').on('click',function(){

                           $.get( "services.html", function( data ) {

                              $('#display').hide('fade');
                               $('#display').html("");
                              $('#display').append(data);
                              $('#display').hide('fade');
                              $('#display').show('fade');

                          });
        });



});