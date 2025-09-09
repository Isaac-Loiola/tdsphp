<?php 
    function formatarPreco(float $valor):string{
        return "R$ " . number_format($valor, 2, ",", ".");
    }


    // esta função gera um código
    function gerarCodigo(string $prefixo, int $id):string{
        return strtoupper($prefixo) . str_pad($id, 5, "0", STR_PAD_LEFT);
    }
?>