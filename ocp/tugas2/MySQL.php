<?php

class MySQL implements DBMS
{
    public function connect(): void
    {
        echo "Connectingkan ke MySQL database...\n";
    }
}