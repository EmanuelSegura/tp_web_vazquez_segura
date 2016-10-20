<?php
/* Smarty version 3.1.30, created on 2016-10-18 22:26:42
  from "C:\xampp\htdocs\proyectos\WEB2\bb\templates\gameContent.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58068582482132_73358136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '484533dbf5833750abaca486418d912b60cf3733' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\bb\\templates\\gameContent.tpl',
      1 => 1466654696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58068582482132_73358136 (Smarty_Internal_Template $_smarty_tpl) {
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
