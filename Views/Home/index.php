
<div class="container">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imagenes/epo_3.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/epo_4.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/epo_41_2.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/epo_41.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>



<!--mensaje de alerta -->
<!--<script type="text/javascript">
$(document).ready(function(){
  swal({
    title: "Good job!",
    text: "You clicked the button!",
    icon: "success",
    button: "Aww yiss!",
  });
})
</script>-->

<!--alerta de no has iniciado sesion -->
<!--<script type="text/javascript">
$(document).ready(function(){
  swal({
    title: "Aun no has iniciado sesion",
    text: "Ingrese ahora",
    type: "warning",
    closeOnConfirm: false,
    closeOnCancel: true,
    showCancelButton: true,
    confirmButtonClass: "btn-danger",
  },
  function(isConfirm){
    if(isConfirm)
    window.location.href = "<?php echo URL ?>login";
  }
);
})
</script>-->
