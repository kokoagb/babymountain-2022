<?php

function bm_custom_translations($text, $untranslated, $domain) {
  $translations = [
    'Payment method:' => 'Fizetési mód',
    'Phone:' => 'Telefon:',
    'Go shop' => 'Irány a bolt',
    'Order details' => 'Rendelés részletei',
    'Coupon: %s' => 'Kupon: %s',
    'Thank you for your order' => 'Köszönjük a rendelést!',
    'Apply coupon' => 'Kupon felhasználása',
    'Update cart' => 'Kosár frissítése',
    'Coupon code' => 'Kuponkód',
    'Apply coupon' => 'Felhasználom',
    'Billing details' => 'Számlázási adatok',
    'Password change' => 'Jelszó megváltoztatása',
    'Current password (leave blank to leave unchanged)' => 'Jelenlegi jelszó (ha nem szeretnénk megváltoztatni, hagyjuk üresen)',
    'New password (leave blank to leave unchanged)' => 'Új jelszó  (ha nem szeretnénk megváltoztatni, hagyjuk üresen)',
    'Confirm new password' => 'Új jelszó megerõsítése',
    'Continue reading' => 'Olvass tovább',
    'Return to shop' => 'Vissza a boltba',
    'Go to shop' => 'Irány a bolt',
    'Shop' => 'Bolt',
    'Üzlet' => 'Irány a bolt',
    'Opciók választása' => 'Variációk',
    'Bank adatok' => 'Fizetési információk',
    'A rendelést megkaptuk és jelenleg feldolgozás alatt áll. Emlékeztetőül alább láthatóak a rendelés részletei:' => '',
    'A rendelés a fizetett összeg beérkezésének ellenőrzéséig függőben tartva. A rendelés részleteit alul lehet megtekinteni:' => '',
    'Lakás, lakosztály, stb (nem kötelező)' => 'Emelet, lakás, stb (nem kötelező)',
    'I&rsquo;ve read and accept the <a href="%s" target="_blank" class="woocommerce-terms-and-conditions-link">terms &amp; conditions</a>' => 'Elolvastam és elfogadom az <a href="%s" target="_blank" class="woocommerce-terms-and-conditions-link">Általános Szerződési Feltételeket.</a>',
    'Send reminder' => 'Fizetési emlékeztető küldése',
    'Reminder sent.' => 'Emlékeztető elküldve.',
    'Reminder sent on' => 'Emlékeztető elküldve',
    'Discount applied: %s' => '%s GRATULÁLUNK! A leggyorsabbak egyikeként tetted a kosaradba  ünnepi Sóhegyecskénket! Ez azt jelenti, hogy 10% kedvezménnyel lehet a tiéd! AMIRE FIGYELJ! A kedvezmény csak a rendelés elküldésekor lép életbe! Míg nem küldöd el a rendelésedet, addig mások is lecsaphatnak rá! (A kedvezményben az első 5 karácsonyi Sóhegyecskét vásárló személy részesül!)'
  ];

  if ($domain === 'woopar') {
    $translations['at'] = '-án, ekkor:';
  }

  return isset($translations[$text]) ? $translations[$text] : $text;
}
add_filter( 'gettext', 'bm_custom_translations', 20, 3);
