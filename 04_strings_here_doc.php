<?php

$nome = "Fulanod Tal";

$email = <<<end
    Lorem **{$nome}** ipsum dolor sit amet, consectetur adipiscing elit. Nulla non condimentum turpis. 
    Ut mollis, metus et ornare vestibulum, nulla massa luctus ipsum, vulputate ornare mi nunc nec libero. 
    Aenean interdum vitae nulla ac ultrices. Donec commodo erat finibus ullamcorper ullamcorper. Suspendisse eu eros 
    sit amet lorem pretium malesuada eu ut ante. Nam vitae libero sed orci pharetra vehicula eu sollicitudin sem.
    end;


echo $email;

echo PHP_EOL.'***********************' .PHP_EOL;

$email = <<<fim
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non condimentum turpis. 
        Ut mollis, metus et ornare vestibulum, nulla massa luctus ipsum, vulputate ornare mi nunc nec libero. 
    Aenean interdum vitae nulla ac ultrices. Donec commodo erat finibus ullamcorper ullamcorper. Suspendisse eu eros 
    sit amet lorem pretium malesuada eu ut ante. Nam vitae libero sed orci pharetra vehicula eu sollicitudin sem.
    fim;

echo $email.PHP_EOL;

echo PHP_EOL.'***********************' .PHP_EOL;

$email = <<<'final'
        Lorem {$nome} $nome ipsum dolor sit amet, consectetur adipiscing elit. Nulla non condimentum turpis. 
        Ut mollis, metus et ornare vestibulum, nulla massa luctus ipsum, vulputate ornare mi nunc nec libero. 
    Aenean interdum vitae nulla ac ultrices. Donec commodo erat finibus ullamcorper ullamcorper. Suspendisse eu eros 
    sit amet lorem pretium malesuada eu ut ante. Nam vitae libero sed orci pharetra vehicula eu sollicitudin sem.
    final;

echo PHP_EOL.'***********************' .PHP_EOL;
echo $email;
