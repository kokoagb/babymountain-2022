<?php // var_dump($email->id); ?>
<?php // var_dump($order->get_shipping_method()); ?>

<?php if( $email->id === 'customer_on_hold_order' ): ?>
  <p>Köszönjük, hogy a BabyMountain termékeit választottad!</p>
  <p>Rendelésedről a  részleteket rögzítettük, amelyről az összegzést alább találod. Köszönjük megrendelésedet, mely függőben van, amíg a rendelési összeg beérkezéséről meg nem győződünk.</p>
  <?php if ( $order->get_payment_method() === 'bacs' && $order->has_status( 'on-hold' ) ): ?>
    <h2>Fizetési információk:</h2>
    <ul style="padding-left: 1rem">
      <li>Kedvezményezett neve: <strong>BabyMountain Kft.</strong></li>
      <li>Kedvezményezett bankszámlaszáma: <strong>11737083-24683180</strong></li>
      <li>Kedvezményezett IBAN-kódja: <strong>HU13117370832468318000000000</strong></li>
      <li>Kedvezményezett bankja: <strong>OTP Bank</strong></li>
      <li>Kedvezményezett bankjának SWIFT (BIC) kódja: <strong>OTPVHUHB</strong></li>
      <li>Kedvezményezett bankjának székhelye: <strong>1051 Budapest, Nádor utca 16.</strong></li>
    </ul>
    <p>Kérünk, a <strong>rendelésszámot (<?php echo $order->get_order_number(); ?>) és a nevedet</strong>&nbsp;az átutalás/befizetés <strong>“Megjegyzés”</strong> rovatában <strong>tüntesd fel!</strong></p>
    <p>A kiszállítás csak az után lehetséges, miután a teljes vételár összege megérkezett a kedvezményezett bankszámlaszámára.</p>
    <p>Számládat e-mailben (e-számla formájában, a <a href="https://szamlazz.hu">szamlazz.hu</a> rendszeréből) fogod megkapni.</p>
    <p>Ha a számlád nem érkezett meg, kérünk jelezd felénk!</p>
    <p>A szállítás pontos időpontjáról csomagod feladásának napján fogsz információt kapni e-mailben a GLS futárszolgálattól.</p>
  <?php endif; ?>
<?php endif; ?>

<?php if( $email->id === 'customer_processing_order' ): ?>
  <?php if ( $order->get_payment_method() === 'bacs' ): ?>
    <img src="https://babymountain.hu/wp-content/themes/babymountain/assets/images/omw.png" style="width: 100%;">
    <p>Utalásod sikeresen beérkezett hozzánk!</p>
    <p>Az általad megrendelt Sóhegyecské(ke)t készítjük, majd pedig küldjük Neked!</p>
    <p>A készítési és szállítási idő max. 10 munkanap.</p>
    <p>A csomag indulásakor a GLS futárszolgálat e-mail értesítést küld majd neked, de a csomagon a telefonszámodat is feltüntetjük, hogy mindenképp elérhessenek!</p>
    <p>A rendelésedről kiállított számlát pedig elektronikus úton, az általad megadott e-mail címre küldjük ki.</p>
  <?php endif; ?>
  <?php if ( $order->get_payment_method() === 'borgun' || $order->get_payment_method() === 'Bankkártyás fizetés' ): ?>
    <img src="https://babymountain.hu/wp-content/themes/babymountain/assets/images/omw.png" style="width: 100%;">
    <p>Kártyás fizetésed sikeresen beérkezett hozzánk!</p>
    <p>Az általad megrendelt Sóhegyecské(ke)t készítjük, majd pedig küldjük Neked!</p>
    <p>A készítési és szállítási idő max. 10 munkanap.</p>
    <p>A csomag indulásakor a GLS futárszolgálat e-mail értesítést küld majd neked, de a csomagon a telefonszámodat is feltüntetjük, hogy mindenképp elérhessenek!</p>
  <?php endif; ?>
  <?php if($order->get_shipping_method() === 'Személyes átvétel'): ?>
    <p>Vásárlásod során a "Személyes átvétel" opciót választottad. Kérünk, mihamarabb vedd fel velünk a kapcsolatot, hogy pontosan egyeztetni tudjunk, hogy ezt mikor és hol teheted meg!</p>
    <p>Kapcsolattartó: Koch-Babics Éva +36305470154 Hívható hétfőtől péntekig 9:00-16:00 között.</p>
    <p>Megrendelésedrôl a számlát a csomagban találod majd.</p>
  <?php endif; ?>
  <p>Köszönjük, hogy megtiszteltél minket bizalmaddal és nálunk vásároltál!</p>
<?php endif; ?>
