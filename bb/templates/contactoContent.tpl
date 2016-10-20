<section>
  <article class="thumbnail">
      <h2>Envia un mail </h2>
    <form class="form-horizontal" action="index.php?action=enviarFormulario" method="POST">
          <div class="form-group">
            <label for="inputNombre" class="control-label col-xs-2 col-md-2">Nombre</label>
            <div class="col-xs-12 col-md-6">
              <input type="text" class="form-control"  name="inputNombre" placeholder="Nombre">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail" class="control-label col-xs-2 col-md-2" >Email</label>
            <div class="col-xs-12 col-md-6">
              <input type="email" class="form-control" placeholder="Email" name="inputEmail">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAsunto" class="control-label col-xs-2 col-md-2">Asunto</label>
            <div class="col-xs-12 col-md-6">
              <input type="text" class="form-control" placeholder="Asunto" name="inputAsunto">
            </div>
          </div>
          <div class="form-group">
            <label for="inputMensaje" class="control-label col-xs-2 col-md-2">Mensaje</label>
            <div class="col-xs-12 col-md-6">
              <input type="text" class="form-control" placeholder="Ingrese un mensaje" name="inputMensaje" >
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-offset-2 col-xs-6">
              <button type="submit" id="enviarFormContacto" class="btn btn-primary">Enviar</button>
            </div>
          </div>
        </form>
      </article>

      <div class="thumbnail">
      <section>
        <article>
          <h2>Mails recibidos </h2>
          {foreach $mails as $mail}
            <p>
              {$mail['nombre_contacto']}
              <br>
              {$mail['email_contacto']}
              <br>
              {$mail['asunto_contacto']}
              <br>
              {$mail['mensaje_contacto']}
            </p>
          {/foreach}

        </article>
      </section>
      </div>
</section>
