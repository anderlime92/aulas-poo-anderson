<?php

interface Notificador
{
    public function enviar(string $mensagem): string;
    
}