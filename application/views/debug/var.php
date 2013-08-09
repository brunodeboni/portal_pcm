<?php

if(!isset($debug_var)) die('Você deve especificar a variavel <b>$debug_var</b> com o nome da variavel que deseja mostrar na tela');
echo "<pre>";
eval("print_r(\${$debug_var});");