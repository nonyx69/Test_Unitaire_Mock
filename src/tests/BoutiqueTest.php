<?php

use PHPUnit\Framework\TestCase;
use App\Entities\Boutique;
use App\Entities\Banque;

class BoutiqueTest extends TestCase{

    public function testPaiementReussi(){

        $fausseBanque = $this->createMock(Banque::class);

        $fausseBanque->method('verifierPaiement')->willReturn(true);

        

        $boutique = new Boutique("ici Banque");

        $reponse = boutique->payer(100, "1290 1232 1233 1234");

        $this->assertEquals("Paiement de 100 euros accepté", $reponse);

    }
}