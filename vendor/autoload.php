<?php
spl_autoload_register(function($nome_da_classe) {
    // Substituir separadores de namespace por separadores de diretório
    $caminho_classe = '..' . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $nome_da_classe) . ".php";
    
    // Incluir o arquivo da classe se ele existir
    if (file_exists($caminho_classe)) {
        include $caminho_classe;
    } else {
        // Logar ou exibir erro se o arquivo da classe não for encontrado
        error_log("Arquivo da classe {$nome_da_classe} não encontrado: {$caminho_classe}");
    }
});
