<?php
class Template {
    /**Carregar o cabeçalho das páginas */
    function header(){
        require __DIR__ . "/templates/header.php";
    }
    /**Carregar o rodapé de todas as páginas  */
    function footer(){
        require __DIR__ . "/templates/footer.php";

    }
}