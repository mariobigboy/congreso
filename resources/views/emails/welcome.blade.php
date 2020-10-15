<div style="text-align: center;">
	<img style="width:65%;" src="{{env('APP_URL')}}/img/bg-img/sae.svg" alt="">
</div>
<strong>¡Bienvenido a Cosae2020!</strong>
<p>Agradecemos su Inscripción. Para poder continuar con el proceso de registro debe confirmar su email haciendo click en el siguiente enlace: </p>
<a href="{{env('APP_URL')}}/confirmar?token={{$token}}" style="color: #fff;background-color: #0062cc;border-color: #005cbf;">Confirmar Inscripción</a>
<p>De no poder continuar con el registro copie el siguiente link y péguelo en su navegador para confirmar su Email: </p>
<p>{{env('APP_URL')}}/confirmar?token={{$token}}</p>