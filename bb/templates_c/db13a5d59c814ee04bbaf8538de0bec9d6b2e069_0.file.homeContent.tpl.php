<?php
/* Smarty version 3.1.30, created on 2016-10-17 22:06:13
  from "C:\xampp\htdocs\proyectos\WEB2\Sitio Web - Segura Emanuel - Vazquez Rodrigo\templates\homeContent.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58052f352bd517_70173334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db13a5d59c814ee04bbaf8538de0bec9d6b2e069' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\Sitio Web - Segura Emanuel - Vazquez Rodrigo\\templates\\homeContent.tpl',
      1 => 1476734768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58052f352bd517_70173334 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="thumbnail">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['noticias']->value, 'noticia');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['noticia']->value) {
?>
  <div class="caption">
    <section>
    <article>
    <header>
        <h2><a  href="#"><?php echo $_smarty_tpl->tpl_vars['noticia']->value['titulo'];?>
</a></h2>
      </header>
     <img src="images/ep1.jpg" class="img-responsive" alt="Walt y Jessie hablan con Mike">
     <br>
     <p><?php echo $_smarty_tpl->tpl_vars['noticia']->value['descripcion'];?>
</p>
       <br>
       <button  href="#" class="btn btn-primary sharp">Leer Más</button>
       <a class="glyphicon glyphicon-trash" href="index.php?action=borrarNoticia&id_noticia=<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
"></a>
       </article>
       </div>
       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


         <div class="caption">
       <article>
         <header>
             <h2><a  href="#">Madrigal [S05E02]</a></h2>
         </header>
         <img src="images/ep2.jpg" class="img-responsive" alt="Walter en el sillon">
           <br>
             <p>En una cocina de Madrigal Electromotive (Alemania) donde se llevan a cabo pruebas relacionadas con alimentos, el ejecutivo de la empresa Peter Schuler prueba una variedad de cinco nuevas salsas para piezas de pollo sin parecer muy entusiasmado. Su secretaria interrumpe para informarle de que tres agentes policiales han aparecido para hablar con él.
             </p>
             <br>
             <button href="#" class="btn btn-primary sharp">Leer Más</button>
       </article>
     </div>

     <div class="caption">
       <article>
         <header>
             <h2><a href="#">Hazard Pay [S05E03]</a></h2>
         </header>
         <img src="images/ep3.jpg" class="img-responsive" alt="walter y Jessie cocinando metanfetamina">
         <br>
             <p>Fingiendo ser asistente judicial, Mike visita a Dennis, el administrador de la lavandería industrial de Gus, en la cárcel. Durante la reunión, el abogado de Dennis, Dan, se pone cascos y empieza a escuchar música: no quiere oír lo que Mike va a decirle a Dennis sobre su problema. Mike le comenta a Dennis que el trato que tenía con Gus sigue vigente y debería estar quieto y no confesar nada a la policía.
           </p>
           <br>
           <button href="#" class="btn btn-primary sharp">Leer Más</button>
       </article>
     </div>

     <div class="caption">
       <article>
         <header>
             <h2><a href="#">Fifty-one [S05E04]</a></h2>
         </header>
         <img src="images/ep4.jpg" class="img-responsive" alt="Lydia y Jessie preocupados en el depósito">
         <br>
             <p>Walt y Walter Jr. van a recoger el Aztek del taller de reparación en el que está, obteniendo un historial de todas las reparaciones a las que ha tenido que someterse a lo largo del año. Aún así, el mecánico dice que el coche está perfecto y tiene muchos kilómetros por rodar. Walt recupera su sombrero de copa baja de Heisenberg del asiento frontal y, sin intenciones de seguir conduciendo aquél coche por el resto de su vida, lo vende al mecánico por 50$.
             </p>
             <br>
             <button href="#" class="btn btn-primary sharp">Leer Más</button>
       </article>
       </div>
       <!--aca van los demas articulos -->
       </section>
</div>
</div>
<?php }
}
