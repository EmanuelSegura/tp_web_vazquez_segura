<?php
/* Smarty version 3.1.30, created on 2016-10-09 23:40:46
  from "C:\xampp\htdocs\proyectos\Sitio Web - Segura Emanuel - Vazquez Rodrigo\templates\gameContent.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57fab95ee1a9d6_44831349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f253abc9ae13453e6c21fcc9821061bf87d7508a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Sitio Web - Segura Emanuel - Vazquez Rodrigo\\templates\\gameContent.tpl',
      1 => 1466654696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fab95ee1a9d6_44831349 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section>
  <article class="thumbnail">
      <img src="./images/juego.png" class="img-responsive" alt="Banner del juego" />
      <button onclick="getmoney(2777)"><img id="methgame" src="" alt="Boton con Metanfetamina" /></button>

      <p  id="dineroactual">
        <img id="WalterRetroGame" src="images/walt.png" class="img-responsive" alt="Walter White character" />
        Comienza a cocinar para generar los US$ 3M que te prometio Gus. ¡No cocines de más o pensarán que cocinas para otros carteles!
        <br>
        <br>
        <span id="resultado"></span>
      </p>
      </article>
</section>

<audio id="crack_meth" preload="true" src="sounds/crack_meth.mp3">
<?php echo '<script'; ?>
 src=js/juego.js> <?php echo '</script'; ?>
>
<?php }
}
