<?php 

/* A interface define os métodos que cada classe DEVE implementar obrigatóriamente. Podemos dizer que Interface é como um Contrato, em que as assinaturas (métodos) deverão ser honradas. 

Usamos a Interface para garantir que todos as classes que a utilizam, sigam um memsmo padrão definido nos métodos. Ainda assim, cada classe poderá ter uma implementação diferente no corpo do método (polimorfismo). */

interface Notificador {
    // O padrão definido aqui é: nome, parâmetros, tipo de dados dos parâmetro e tipo de retorno do método. 
    public function enviar (string $mensagem): string;
}