<?php

  require_once __DIR__ . "/../base/baseBattleField.php";
  require_once "warrior.php";


  class BattleField extends BaseBattleField
  {
    public static function createMyWarrior(){

        $SuperZouzou = new MarvelWarrior('SuperZouzou', 100, 100, 100);
        $SuperZouzou->setImageUrl('https://www.sbs.com.au/popasia/sites/sbs.com.au.popasia/files/styles/full/public/cauliflaheadergif.gif?itok=wbgi5U-z&mtime=1496207037');
        $Kameameah = new Weapon('Kameameah', 100);
        $Kameameah->setImageUrl('https://vignette.wikia.nocookie.net/dragonball/images/2/21/FK_4.jpg/revision/latest?cb=20170522025457');
        $SuperZouzou->SetWeapon($Kameameah);

        $SuperZouzou->saveNew();



    }


      public static function createOtherWarrior(){


          $griffe = new Weapon('griffe', 50);
          $griffe->setImageUrl('http://img.over-blog-kiwi.com/1/42/18/12/20180221/ob_7abc16_griffes.png');
          $NoOne = new MarvelWarrior('NoOne');
          $NoOne->setImageUrl('https://vignette.wikia.nocookie.net/marvel_dc/images/9/97/Justice_League_of_America_Vixen_Rebirth_Vol_1_1_Textless.jpg/revision/latest?cb=20161018002153');
          $NoOne->SetWeapon($griffe);

          $NoOne->saveNew();



      }
  }
