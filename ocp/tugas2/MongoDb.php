<?php

class MongoDB implements DBMS
{
    public function connect(): void
    {
        echo "Connectingkan ke MongoDB database...\n";
    }
}