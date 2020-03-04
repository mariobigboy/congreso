<!-- Newsletter -->
<div class="single-widget-area mb-100">
    <div class="newsletter-form">
        <h5>Newsletter</h5>
        <p>Subscríbase a nuestro newsletter para obtener noticias y actualizaciones.</p>

        <form action="#" method="post">
            <input type="email" name="nl-email" id="nlEmail" class="form-control" placeholder="Ingrese email...">
            <button type="submit" class="btn roberto-btn w-100">Subscribir</button>
        </form>
        <br>
        @if(session('success_newsletter'))
        <div class="alert alert-success">
	      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
	        <i class="tim-icons icon-simple-remove"></i>
	      </button>
	      <span>¡Subscripto correctamente!</span>
	    </div>
	    @endif
    </div>

</div>