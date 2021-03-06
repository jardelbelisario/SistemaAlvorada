<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- InputMask -->
<script src="{{asset('/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{asset('/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{asset('/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{asset('/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- bootstrap datepicker -->
<script src="{{asset('/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<!-- Select2 -->
<script src="{{asset('/plugins/select2/select2.full.min.js')}}"></script>


 <!-- DATA TABES SCRIPT -->
<script src="{{asset('/plugins/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
<script src="{{asset('/plugins/datatables/dataTables.bootstrap.js')}}" type="text/javascript"></script>

<!-- AdminLTE App -->
<script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/demo.js') }}" type="text/javascript"></script>




<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->


<script>
$(document).ready(function(){
/*$("#pegaValor").click(function(){
      var campo1 = document.getElementById('oi');
        $(".onde_vai").append(" <b>"+ campo1.value"</b>");
         // alert(campo1.value);
    });*/
$("option").click(function(){
  $(this).appendTo("#onde_vai");
});
  });

  </script>

 <script>
  $(function () {

    $(".select2").select2();

    $("#example1").DataTable();

    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });

     //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

  });

</script>


<!-- SCRIPT PARA PEGAR IMAGEM DO IMPUT -->
<script language="javascript" type="text/javascript">
  function readURL(input, id) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('#'+id)
        .attr('src', e.target.result)
        ;
      }

      reader.readAsDataURL(input.files[0]);
    }
  }
</script>





<script>
  var video, canvas, context, localMediaStream;
  
//Tira foto.
function snapshot(){
  if (localMediaStream) {
      context.drawImage(video, 0, 0, canvas.width, canvas.height);
      document.getElementById('img-photo').src = canvas.toDataURL('image/webp');
    }
}

//Fallback de erro a função getUserMedia.
function userMediaError(){
  console.log("Camera HTML5+JS", "Desculpa! Seu navegador não apresenta suporte.");
}

window.onload = function()
{
  if(!!(navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia)){
    video = document.getElementById('user-media');
    canvas = document.getElementById('canvas');
    context = canvas.getContext('2d');
  }
  else
  {
    alert("Desculpa! Seu navegador não apresenta suporte. II");
  }
};



// Variantes do getUserMedia
navigator.getUserMedia  = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia;

// Função que imprime quando sair um erro
var errCallback = function(e) {
  console.log('Erro!', e);
};

// Solicita a mídia
function requestMedia(e) {
  e.preventDefault();

  // Usando as variantes do getUserMedia nós montamos o código acima e mostramos o vídeo
  navigator.getUserMedia({video: true, audio: false}, showMedia, errCallback);
}

function showMedia(stream) {
  //var video = document.getElementById('user-media');
  video.src = window.URL.createObjectURL(stream);
  localMediaStream = stream;

  

  video.onloadedmetadata = function(e) {
    console.log('Carregado.');
  };
}


// jQuery para ao clicar o botão, aparecer a WebCam
$(function() {
  $('#get-user-media').click(requestMedia);
});

</script>

<!-- alert -->
<script src="{{ asset('/js/sweetalert.min.js') }}"></script>
<script>
  
  var btnSuccess = document.getElementById('btn-success');
  btnSuccess.addEventListener('click', function() {
      swal("Good job!", "You clicked the button!", "success")
    
  }, false);

  var btnCadAlunoSucceess = document.getElementById('cad-aluno-succeess');
  btnCadAlunoSucceess.addEventListener('click', function() {
      swal("Good job!", "You clicked the button!", "success")
    
  }, false);



  var btnPrimary = document.getElementById('btn-primary');
  btnPrimary.addEventListener('click', function() {
      swal({
          title: "Are you sure?",
          text: "You will not be able to recover this imaginary file!",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Yes, delete it!",
          cancelButtonText: "No, cancel plx!",
          closeOnConfirm: false,
          closeOnCancel: false
        },
        function(isConfirm){
          if (isConfirm) {
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
          } else {
            swal("Cancelled", "Your imaginary file is safe :)", "error");
          }
        });
    
  }, false);




</script>

@include('sweet::alert')
