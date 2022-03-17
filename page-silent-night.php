<?php get_header(); ?>

<?php
function solid_star($class = '')
{
  echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="fa ' . $class . '" fill="currentColor"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/></svg>';
}

function outline_star($class = '')
{
  echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="fa ' . $class . '" fill="currentColor"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M287.9 0C297.1 0 305.5 5.25 309.5 13.52L378.1 154.8L531.4 177.5C540.4 178.8 547.8 185.1 550.7 193.7C553.5 202.4 551.2 211.9 544.8 218.2L433.6 328.4L459.9 483.9C461.4 492.9 457.7 502.1 450.2 507.4C442.8 512.7 432.1 513.4 424.9 509.1L287.9 435.9L150.1 509.1C142.9 513.4 133.1 512.7 125.6 507.4C118.2 502.1 114.5 492.9 115.1 483.9L142.2 328.4L31.11 218.2C24.65 211.9 22.36 202.4 25.2 193.7C28.03 185.1 35.5 178.8 44.49 177.5L197.7 154.8L266.3 13.52C270.4 5.249 278.7 0 287.9 0L287.9 0zM287.9 78.95L235.4 187.2C231.9 194.3 225.1 199.3 217.3 200.5L98.98 217.9L184.9 303C190.4 308.5 192.9 316.4 191.6 324.1L171.4 443.7L276.6 387.5C283.7 383.7 292.2 383.7 299.2 387.5L404.4 443.7L384.2 324.1C382.9 316.4 385.5 308.5 391 303L476.9 217.9L358.6 200.5C350.7 199.3 343.9 194.3 340.5 187.2L287.9 78.95z"/></svg>';
}
?>

<div class="container overflow-hidden">
  <h2 class="text-white text-center mb-5">A BabyMountain bemutatja:</h2>
  <h1 class="text-white text-center" style="text-align: center;">
    <img class="silent-night-logo" src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/silent_night_logo.png" style="max-width: 100%;" />
    <img class="silent-night-logo-2" src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/silent_night_logo_2.png" style="max-width: 100%;" />
  </h1>
  <h2 id="tagline" class="text-white text-center mb-8 mt-3" style="font-size: 1rem; margin-right: -17rem;">
    Az álomba ringató Sóhegyecske kollekció
  </h2>
</div>

<div id="silent-night-content" class="container">
  <nav id="silent-night-menu" class="hide-for-test">
    <ul class="d-block d-md-flex justify-content-center m-0 p-0 mb-8 text-uppercase">
      <li class="text-center d-block d-md-inline-block me-0 me-md-3">
        <a class="d-inline-block px-3 py-2 rounded" href="#a-leiras">Leírás</a>
      </li>
      <li class="text-center d-block d-md-inline-block me-0 me-md-3">
        <a class="d-inline-block px-3 py-2 rounded" href="#a-teszt">Alvástípus teszt</a>
      </li>
      <li class="text-center d-block d-md-inline-block me-0 me-md-3">
        <a class="d-inline-block px-3 py-2 rounded" href="#a-velemenyek">Vélemények</a>
      </li>
      <li class="text-center d-block d-md-inline-block me-0 me-md-3">
        <a class="d-inline-block px-3 py-2 rounded" href="#a-hasznalat">Használat</a>
      </li>
      <li class="text-center d-block d-md-inline-block me-0">
        <a class="d-inline-block px-3 py-2 rounded" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#cirbolya-modal">A cirbolyafenyő</a>
      </li>
    </ul>
  </nav>

  <div id="silent-night-carousel" class="wp-block-bm-blocks-carousel swiper mb-8 bg-white rounded overflow-hidden">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img data-src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/IMG_3227.JPG?20200503" class="swiper-lazy">
      </div>
      <div class="swiper-slide">
        <img data-src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/DSC_0277.jpg?20200503" class="swiper-lazy">
      </div>
      <div class="swiper-slide">
        <img data-src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/DSC_1174.jpg?20200503" class="swiper-lazy">
      </div>
      <div class="swiper-slide">
        <img data-src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/DSC_0308.jpg?20200503" class="swiper-lazy">
      </div>
      <div class="swiper-slide">
        <img data-src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/DSC_1132.jpg?20200503" class="swiper-lazy">
      </div>
      <div class="swiper-slide">
        <img data-src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/DSC_0011.jpg?20200503" class="swiper-lazy">
      </div>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>

  <div class="row mb-8">
    <div class="col">
      <div class="card h-100 text-justify p-4 rounded">
        <p class="text-indent-1 mb-0">Alváskönnyítő Sóhegyecske kollekciónkat azért hoztuk létre, hogy segíthesd gyermekedet a könnyű elalvásban és a kiegyensúlyozott, nyugodt alvásban. Töltsd ki aromaterapeuta által összeállított „Aromaterápiás alvástípusok” tesztünket és tudd meg, hogy milyen összetevőkkel töltött Sóhegyecske az, ami leginkább segítheti őt ebben!</p>
      </div>
    </div>
  </div>

  <div class="row mb-8 position-relative">
    <div id="a-teszt" class="position-absolute" style="bottom: 50vh;"></div>
    <div class="col text-center">
      <button class="btn btn-default btn-sn-cta py-4 px-5 font-weight-bold rounded" data-bs-toggle="modal" data-bs-target="#test-modal">
        JÖHET A TESZT!
      </button>
    </div>
  </div>

  <div class="row" id="a-leiras">
    <div class="col">
      <h2 class="text-white">
        Több, mint egy párna
      </h2>
    </div>
  </div>

  <div class="row mb-8">
    <div class="col-lg-5 order-lg-2 mb-3 mb-lg-0">
      <img class="rounded img16-9 h-100" src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/IMG_3228.JPG" loading="lazy" />
    </div>
    <div class="col-lg-7">
      <div class="card h-100 text-justify p-4 rounded">
        <p class="text-indent-1 mb-0 h-100">A <img class="logo-small" src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/silent_night_logo.png" /> kollekció nem csupán a kész „termékből” áll. A hozzá tartozó teszt egy olyan, aromaterapeuta által összeállított kérdéssoron viszi végig a Szülőt, ami gyermeke személyiségjegyeire, alvás – és étkezésbeli szokásaira, valamint azokra a viselkedésbeli jellemzőkre kérdez rá, amik pl. konfliktus vagy fáradtság esetén jelentkeznek nála. A válaszok segítségével derül ki számunkra, melyek azok az összetevők, melyeket személyre szabottan a párnájába tölthetünk. Azok az összetevők, melyek a leghatékonyabban segítenek neki a nap végén a mihamarabbi ellazulásban és a nyugodt alvásban.</p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <h2 class="text-white text-end">
        Ahol az Alpok és a Himalája összeér<br><small>avagy 3 különleges összetevő</small>
      </h2>
    </div>
  </div>

  <div class="row mb-8">
    <div class="col-lg-5 mb-3 mb-lg-0">
      <img class="rounded img16-9 h-100" src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/DSC_0269.jpg" loading="lazy" />
    </div>
    <div class="col-lg-7">
      <div class="card h-100 text-justify p-4 rounded">
        <p class="text-indent-1 mb-0 h-100">A <img class="logo-small" src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/silent_night_logo.png" /> kollekció Sóhegyeinek alapja a legtisztább ásványi sóként jegyzett, magas ásványi anyag tartalommal bíró Himalája kristálysó, melyhez egy olyan különleges és az egész világon egyedülálló gyógyhatással rendelkező fenyőfajtát, a Cirbolyafenyő illatos forgácsát kevertük, mely nyugtatja az idegrendszert, valamint optimalizálja a szív és keringési rendszert – hatásosan csökkentve így a szívfrekvenciát. Harmadik összetevőként pedig két lazító, nyugtató, stresszoldó hatású gyógynövényt is adtunk hozzá ,melyek személyre szabva vagy a szárított levendulavirág vagy a citromverbéna szárított levele.</p>
      </div>
    </div>
  </div>

  <div class="row" id="a-hasznalat">
    <div class="col">
      <h2 class="text-white">
        Könnyű használat
      </h2>
    </div>
  </div>

  <div class="row mb-8">
    <div class="col-lg-5 order-lg-2 mb-3 mb-lg-0">
      <img class="rounded img16-9 h-100" src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/DSC_1174.jpg" loading="lazy" />
    </div>
    <div class="col-lg-7">
      <div class="card h-100 text-justify p-4 rounded">
        <p class="text-indent-1 mb-0">A kollekció Sóhegyei alvópárnák, tehát állandó tagjai lehetnek gyermekeink ágyának. Melegítést sem igényelnek, sőt a cirbolyafenyő faforgács miatt nem is szabad őket melegíteni. Egyszerűen, a testhőmérséklet hatására ( fej alá téve, összebújva velük) válik intenzívebbé a gyógynövények és a faforgács illatanyagainak áramlása, valamint a Himalája kristálysóból felszabaduló sóionok is a testhőmérséklet hatására aktiválódnak, így juttatva el a gyógynövények aromás vegyületeit a légutak legapróbb szegmenseihez.</p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <h2 class="text-white text-end">
        Ha elmúltam már 2 éves
      </h2>
    </div>
  </div>

  <div class="row mb-8">
    <div class="col-lg-4 mb-3 mb-lg-0">
      <img class="rounded img16-9 h-100" src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/DSC_1132.jpg" loading="lazy" />
    </div>
    <div class="col-lg-8">
      <div class="card h-100 text-justify p-4 rounded">
        <p class="text-indent-1 mb-0">A  alváskönnyítő Sóhegyecskéket 2 éves kortól ajánljuk, hiszen ebben az életkorban már megfigyelhetőek azokat a sajátosságok, melyeket az aromaterápiás kérdéssorunk alapul vesz. De ami még fontosabb,hogy szűkül azoknak a tényezőknek a köre is, amik megnehezítik a babák zavartalan éjszakáit. Ilyenek az éppen aktuális fejlődési szakaszok (értelmi fejlődés, mozgásfejlődés, lelki fejlődés pl. szeparációs szorongás, testi változások pl. fogzás, környezeti változások pl. bölcsi kezdés). Alváskönnyítő Sóhegyecskéinket a nyugtalanul alvó, nagyobb gyermekeknek és az alvászavarokkal küzdő, stresszes életmódot folytató felnőtteknek is ajánljuk.</p>
      </div>
    </div>
  </div>

  <div class="row" id="a-velemenyek">
    <div class="col">
      <h2 class="text-white">
        Mi már kipróbáltuk!
      </h2>
    </div>
  </div>

  <div class="row mb-8">
    <div class="col">
      <div class="card p-4 rounded">
        <div id="silent-night-reviews" class="wp-block-bm-blocks-carousel swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide d-flex flex-column">
              <h3 class="text-indent-1">"Segített a felére csökkenteni az altatási időt!"</h3>
              <p class="text-indent-1 font-italic">"Misivel korábban az esti altatás elég küzdelmes volt, 40 percig is eltartott. Misi eléggé önfejű kisfiú, így már az sem volt egyszerű, hogy az álomhozó Sóhegyecskét az ágyába csempésszem. De hála az isteni illatának és a formájának, könnyedén mesébe tudtam foglalni neki, miért nagyszerű móka, ha a Sóhegyecskével alszik. A <img class="logo-small" src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/silent_night_logo.png" loading="lazy" /> Sóhegyecskét 3 hete használjuk és már eddig is segített a felére csökkenteni Misinél az altatási időt, amit alig tudok elhinni!"</p>
              <p class="mb-0 text-end mt-auto">
                <?php solid_star(); ?>&nbsp;
                <strong>Kovácsné Elekes Viktória</strong>, a 4 éves <strong>Rozi</strong>, a 2 éves <strong>Misi</strong> és a 9 hónapos <strong>Karcsi</strong> Anyukája
              </p>
            </div>

            <div class="swiper-slide d-flex flex-column">
              <h3 class="text-indent-1">"Nem ébred meg éjjel"</h3>
              <p class="text-indent-1 font-italic">"Zselykém elég "rossz alvó", van, hogy délután sem tud aludni. A pörgős és fárasztó mindennapok ellenére elég későn alszik el és éjjel is többször ébred. Már az első éjszaka, mikor a <img class="logo-small" src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/silent_night_logo.png" /> alváskönnyítő Sóhegyecskével aludt, nyugodtan telt, az éjszakát teljesen átaludta! Végre tud nyugodtan pihenni, aminek pozitív hatása a napi ritmusán is megmutatkozik. Sőt! Nem csak ő és mi alszunk jobban, hanem Brumi Úr és Kutyus Pajti is, akiknek Zselyke néha kölcsönadja a Sóhegyecskét, mert szerinte is "Ettől tudsz majd aludni szépen!"."</p>
              <p class="mb-0 text-end mt-auto">
                <?php solid_star(); ?>&nbsp;
                <strong>Kántor-Skrapits Eszter</strong>, a3 éves <strong>Zselyke</strong> és a 6 hónapos <stong>Boti</stong> Anyukája
              </p>
            </div>

            <div class="swiper-slide d-flex flex-column">
              <h3 class="text-indent-1">"Sokkal nyugodtabban alszik!"</h3>
              <p class="text-indent-1 font-italic">"Laura Sára 4 hónapos koráig nagyon jól alvó baba volt. Aztán ahogy nőtt, ez megváltozott. Most 3,5 éves, de azóta is kétszer-háromszor kel éjjelente. Rendkívül nyugtalanul alszik, mielőtt kipróbáltuk a <img class="logo-small" src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/silent_night_logo.png" /> kollekció illatos párnáját állandóan kopogott a kis feje a babágy rácsain, vagy a leesésgátlón. Egy hónapja alszik minden éjjel az alváskönnyítő Sóhegyecskével és azóta ezek megszűntek! Sokkal nyugodtabban alszik!"</p>
              <p class="mb-0 text-end mt-auto">
                <?php solid_star(); ?>&nbsp;
                <strong>Kinga</strong>, a 3,5 éves <strong>Laura Sára</strong> Anyukája
              </p>
            </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </div>
  </div>

  <div id="a-cikkek" class="row">
    <div class="col">
      <h2 class="text-white">
        Cikkek
      </h2>
    </div>
  </div>

  <div class="row mb-8">
    <div class="col-md-6">
      <div class="card d-flex flex-column text-justify p-4 rounded h-100">
        <div class="card-img-top">
          <img class="img16-9 rounded" src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/maison.jpg" loading="lazy" />
        </div>
        <h5 class="card-title my-3 text-center">
          <a href="http://www.maisonblog.hu/3-dolog-ami-segit-a-gyors-es-kellemes-altatasban" target="_blank" class="text-body">
            3 DOLOG, AMI SEGÍT A GYORS ÉS KELLEMES ALTATÁSBAN
          </a>
        </h5>
        <div class="card-text text-justify">
          Annyira megtisztelő lehetőséget kaptunk, hogy Dáviddal már a hivatalos bemutatkozása előtt tesztelhettük a BabyMountain új, alváskönnyítő sóhegyecskéjét. Most konkrétan a csillag mintás hegyecskére gondolok, ami gyógynövényes-kristálysós keverékkel van megtömve. Fogadjátok szeretettel a bemutatását!
        </div>
        <div class="card-footer px-0 mt-auto">
          <a href="http://www.maisonblog.hu/3-dolog-ami-segit-a-gyors-es-kellemes-altatasban/" class="text-body">
            Tovább a cikkre...
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card d-flex flex-column h-100 text-justify p-4 rounded h-100">
        <div class="card-img-top">
          <img class="img16-9 rounded" src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/DSC_0270.jpg" loading="lazy" />
        </div>
        <h5 class="card-title my-3 text-center">
          <a href="/2018/09/17/csak-egy-parna-es-mar-alszik-is/" target="_blank" class="text-body">
            CSAK EGY PÁRNA, ÉS MÁR ALSZIK IS?
          </a>
        </h5>
        <div class="card-text text-justify">
          Hogy milyen különleges alapanyagokra bukkantunk alváskönnyítő kollekciónkhoz, hogy hogyan szabtuk személyre gyermekenként a Sóhegyecskék töltelékét és mindezekről mit mondtatok Ti, akik kipróbáltátok? Azt olvassátok el ebben a cikkben!
        </div>
        <div class="card-footer px-0 mt-auto">
          <a href="/2018/09/17/csak-egy-parna-es-mar-alszik-is/" class="text-body">
            Tovább a cikkre...
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col mb-8 text-center">
      <button class="btn btn-default btn-sn-cta py-4 px-4 font-weight-bold rounded" data-bs-toggle="modal" data-bs-target="#test-modal">
        VÁSÁROLNI SZERETNÉK! TOVÁBB A TESZTHEZ!
      </button>
    </div>
  </div>
</div>

<div class="container">
  <div id="konnyu-elalvas-teszt" v-cloak v-if="name">
    <h2 class="text-white">{{ name }}, kérlek válaszolj a kérdésekre!</h2>
    <div class="row" v-for="(questionPair, x) in questionPairs" :key="x">
      <div class="col-md" :class="{'mb-4': x !== 2}" v-for="(question, y) in questionPair" :key="y">
        <div class="card h-100 text-justify p-4 rounded" style="height: 100%">
          <p class="font-weight-bold">{{ question.q }}</p>
          <label class="answer-label d-block" v-for="(answer, z) in question.answers" :key="z" :class="{'cursor-pointer': !isSubmitted, 'semi-transparent': isSubmitted && question.selected !== answer.v}">
            <input class="position-absolute" style="opacity: 0" type="radio" v-model="question.selected" :value="answer.v" :disabled="isSubmitted">
            <div class="radio-custom position-relative d-inline-block">
              <?php outline_star('position-absolute bottom-0 click-effect'); ?>
              <?php solid_star('position-absolute bottom-0 radio-center'); ?>
              <?php outline_star('position-absolute bottom-0'); ?>
            </div>
            {{ answer.a }}
          </label>
        </div>
      </div>
    </div>
    <p class="text-white text-end mt-2 mb-8">
      <small>
        A tesztet összeállította: Tóth-Kállai Fruzsina, természetgyógyász, aromaterapeuta
      </small>
    </p>
    <div class="row mb-8">
      <div class="col text-center">
        <button class="btn btn-default btn-sn-cta py-4 px-5 font-weight-bold rounded" @click="submit" :disabled="!isSubmittable || isSubmitted">
          MUTASD AZ EREDMÉNYT!
        </button>
      </div>
    </div>
    <div class="row mb-8" v-if="isSubmitted">
      <div class="col" id="teszt-eredmeny">
        <h2 class="text-white">
          Az eredmény: {{ result.c > result.l ? 'CITROMVERBÉNA TÍPUS' : 'LEVENDULA TÍPUS' }}
        </h2>
        <div class="row">
          <div class="col-lg-5 mb-3 mb-lg-0">
            <img class="rounded img1-1" src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/IMG_3230.JPG?20210221" loading="lazy" />
          </div>
          <div class="col-lg-7">
            <div class="card h-100 text-justify p-4 rounded">
              <div class="text-justify text-indent-1" v-if="result.c > result.l">
                A citromverbéna típusú gyermekre használhatjuk azt a szót, hogy „zizeg”. Mindenben, ami körülötte történik, részt akar venni, a játékba 100%-osan veti bele magát. Egyaránt kedveli a gyermekek és a felnőttek társaságát, és hamar megtalálja velük a „közös nyelvet”.
                Az savanyú minőségű ételeket részesíti előnyben, pl. fanyar gyümölcsök, hüvelyesek . Ezt az állandóan jelenlévő hatalmas aktivitást édes minőségű ételekkel ellensúlyozhatjuk ( NEM ÉDESSÉGEKKEL!), pl. rizzsel, édes vagy sima burgonyával, húsfélékkel, gabonafélékkel.
                Ha valami bántja, hirtelen haraggal reagál, pl. csapkodás, rugdosás. De amilyen hirtelen jön ez a „vihar”, olyan hamar enyhül is.
                Figyelmet szeretne, mégis lámpalázzal küzd. Ha valami napközben bántja, az az éjszakákon is nyomot hagy, ilyenkor szorongó lehet, pl. nehezen alszik el, mert fél valamitől a sötétben, rémálmai lehetnek, nyugtalanul, hánykolódva alszik. Ilyenkor nem érdemes felébreszteni! Lágy hangsúlyú, nyugtató mondatokkal tudjuk őt visszaterelni a békés alvásba.
              </div>
              <div class="text-justify text-indent-1" v-if="result.c < result.l">
                A levendula típusú gyermekre mondják azt: „Olyan, mintha egy másik világban élne!”. Nyugodt lelkületű, sokszor kívülről szemléli az eseményeket. Először megfigyeli a cselekményeket, mielőtt pl. beállna a többiek közé játszani a játszótéren. Nem szeret szerepelni. Jól érzi magát gyerektársaságban, de sokszor inkább a felnőttek társaságát keresi.
                Az édes minőségű ételeket részesíti előnyben , pl. húsfélék, rizs, burgonya, tésztafélék. Ebből az „elvarázsolt” állapotból savanyú minőségű ételekkel mozdíthatjuk ki, pl. fanyar gyümölcsökkel, citrusfélékkel, hüvelyesekkel – pl. vörös lencsével, uborkával.
                Ha valami bántja, igényli az aktív testkontaktust, mely számára a megnyugvást jelenti. Ha valami bántja a lelkét, az kihat a napjára és az alvására is. Őt simogatni kell, ölbe venni, babusgatni, főleg, ha valami új, félelmetes, idegen helyzetbe kerül. Mindezek elkísérik és igényei lehetnek még nagyobb korban is.
                Nagyon megbízható, kiegyensúlyozott gyermek. Könnyűek vele a mindennapok, mert ha van bennük rendszer, ahhoz szívesen tartja magát.
              </div>
              <p class="text-end mt-2 mb-0">
                <small>
                  A tesztet összeállította: Tóth-Kállai Fruzsina, természetgyógyász, aromaterapeuta
                </small>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row" v-if="isSubmitted">
      <div class="col text-center mb-8">
        <!-- <a class="btn btn-default btn-sn-cta py-4 px-5 font-weight-bold" :href="result.c > result.l ? links['c'] : links['l']"> -->
        <a class="btn btn-default btn-sn-cta py-4 px-5 font-weight-bold rounded" :href="resultUrl">
          Megrendelem a Sóhegyecskét!
        </a>
      </div>
    </div>
  </div>
</div>

<div class="container clearfix">
  <div class="card h-100 text-justify p-4 rounded mb-5">
    <div class="float-md-end rounded p-2 bg-white mb-2 mb-md-0 ms-md-3">
      <img src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/mintaoltalom_logo.png" loading="lazy" style="max-width: 300px; aspect-ratio: 3 / 1; object-fit: cover;" />
    </div>
    <div class="text-justify">
      A BabyMountain márkáról és annak márkajelzéséről az Európai Unio Szellemi Tulajdoni Hivatala („EUIPO”) 2018.06. 18-án lajstromozási tanúsítványt állított ki a Tulajdonos,Koch-Babics Éva részére. A márka ezáltal védjegyezetté vált. A BabyMountain termékeinek készítőjét, és a termékek design-ját pedig az Európai Unio Szellemi Tulajdoni Hivatala („EUIPO”) 2018. 02. 21-én lajstromozta, tehát az Európai Unió által kibocsátott Formatervezési Mintaoltalom alatt áll! A termékek másolása jogi következményt von maga után, valamint a törvény bünteti!
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-12 col-md-6 mb-5 mb-md-0">
      <div class="fb-page" data-href="https://www.facebook.com/babymountainhimalaya/" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
        <blockquote cite="https://www.facebook.com/babymountainhimalaya/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/babymountainhimalaya/">BabyMountain</a></blockquote>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="bg-white rounded pt-2">
        <?php echo do_shortcode('[instagram-feed feed=2]'); ?>
      </div>
    </div>
  </div>
</div>

<div id="test-modal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div id="test-modal-content" class="modal-content">
      <form @submit.prevent="submit">
        <div class="modal-body pb-0">
          <p>Kérlek, add meg hogyan szólíthatunk!</p>
          <div class="form-group mb-3">
            <input type="text" class="form-control rounded" v-model="nickname" placeholder="Mi a beceneved?">
          </div>
        </div>
        <div class="modal-footer border-top-0 pt-0">
          <button type="submit" :disabled="!nickname" class="btn btn-secondary rounded" style="background-color: #0f0f26 !important; border-color: #0f0f26 !important;">Tovább a teszthez</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div id="cirbolya-modal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div id="test-modal-content" class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title">A cirbolyafenyő</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-0">
        <img src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/sn_gal_new8.jpg?20200503" style="width: 100%; height: auto; margin-bottom: 1rem;">
        <p>A Kelet-Alpok hegyei közt létezik egy különleges fenyő, melynek minden porcikája illatos nyugalmat áraszt. Nem más ez, mint a cirbolyafenyő, aminek mennyei illatanyaga olyan értékes gyógyhatásokat hordoz, melyek alapján méltán nevezik, az "Alpok Királynőjének".</p>
        <p>A cirbolyafenyő illatanyaga nyugtató hatással van az idegrendszerre, főként a vegetatív idegrendszerre, mely leginkább a nap folyamán minket érő fizikai terhelés és mentális stressz esetén van extra igénybevételnek kitéve. Másik fő, egyedülálló hatása, a szív- és érrendszerre kifejtett jótékony hatás, melynek köszönhetően csökken a szívfrekvencia, nyugodttá válik a szívverés, optimalizálódik a keringés. Szívnyugtató tulajdonsága "éjszakánként 3500 dobbanást – azaz egy óra munkát – "spórol meg" testünk motorjának."</p>
        <p>Az időjárás változásaira érzékenyek a cirbolyafenyő fent említett jótékony hatásainak köszönhetően könnyebben viselik a frontok okozta rossz közérzetet,fejfájást, álmatlanságot.</p>
        <p>Mindezek mellett pedig olyan természetes fertőtlenítő (antibiotikus) hatással rendelkezik, mely steril alváskörnyezetet biztosít , így biztonsággal tehetjük kisgyermekek ágyikójába is. </p>
      </div>
    </div>
  </div>
</div>

<div class="site-footer-inner position-relative mt-9" aria-hidden="true">
  <img class="site-footer-background img-fluid" src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night_2020.png" loading="lazy">
  <img class="site-footer-logo" src="<?php echo get_template_directory_uri(); ?>/static/images/logo.png" loading="lazy">
</div>

<script>
  function Star() {
    var x = Math.floor((Math.random() * 90) + 1);
    var y = Math.floor((Math.random() * 90) + 1);
    var r2 = Math.floor((Math.random() * 8) + 3);
    var interval = Math.floor((Math.random() * 10) + 3);
    var opacity = Math.random();
    var el = document.createElement('div');
    el.classList.add('star');
    el.style.top = y + '%';
    el.style.left = x + '%';
    el.style.width = r2 + 'px';
    el.style.height = r2 + 'px';
    el.style.transform = 'scale(0.5)';
    // el.style.opacity = opacity;
    el.style.animation = 'twinkle ' + interval + 's ease-in infinite';
    document
      .querySelector('body')
      .appendChild(el);
  }

  window.addEventListener('DOMContentLoaded', function() {
    var konnyuElalvasTeszt = new Vue({
      el: '#konnyu-elalvas-teszt',
      data: {
        name: null,
        questions: [{
          q: 'Milyen minőségű, ízvilágú ételeket szeret inkább a gyermeked?',
          answers: [{
            a: 'Édes (Hús, rizs, tésztafélék, burgonya)',
            v: 'l'
          }, {
            a: 'Fanyar (babfélék-hüvelyesek, savanyú gyümölcsök)',
            v: 'c'
          }],
          selected: null
        }, {
          q: 'Milyen a gyermeked viselkedése, ha fáradt? Például, ha nem alszik délután, és így csinálja végig az egész napot?',
          answers: [{
            a: 'Túlpörög, és semmivel nem lehet lenyugtatni, majd pedig a kimerültségtől "kidől"',
            v: 'c'
          }, {
            a: 'Olyan, mintha nyitott szemmel aludna',
            v: 'l'
          }],
          selected: null
        }, {
          q: 'Mi jellemzi leginkább gyermeked alvását?',
          answers: [{
            a: 'Vergődik, fogcsikorgat, felsír ilyenkor nehezen ébreszthető',
            v: 'c'
          }, {
            a: 'Beszél, forgolódik, ilyenkor könnyen felébreszthető',
            v: 'l'
          }],
          selected: null
        }, {
          q: 'Ha gyermeked valami miatt sír, akkor általában...',
          answers: [{
            a: '...testkontaktussal, ringatással megnyugtatható',
            v: 'l'
          }, {
            a: '...nem lehet hozzáérni, hagyni kell, míg megnyugszik, és csak utána lehet vigasztalni',
            v: 'c'
          }],
          selected: null
        }, {
          q: 'Milyen lelkületű a gyermeked?',
          answers: [{
            a: 'Álmodozó, gyakran elgondolkozik, elvan a saját kis világában',
            v: 'l'
          }, {
            a: 'Aktív, élénk, nyitott, könnyen teremt kapcsolatot másokkal',
            v: 'c'
          }],
          selected: null
        }],
        isSubmitted: false,
        links: {
          c: '/termek/silent-night-alomhozo-citromfuves-sohegyecske/',
          l: '/termek/silent-night-alomhozo-levendulas-cirbolyas-sohegyecske/'
        },
      },
      computed: {
        questionPairs: function() {
          return [
            [this.questions[0], this.questions[1]],
            [this.questions[2], this.questions[3]],
            [this.questions[4]]
          ];
        },
        isSubmittable: function() {
          return this.questions.reduce(function(acc, q) {
            return q.selected === null ? acc : acc + 1;
          }, 0) === this.questions.length;
        },
        result: function() {
          return this.questions.reduce(function(acc, q) {
            acc[q.selected] !== undefined && acc[q.selected]++;
            return acc;
          }, {
            c: 0,
            l: 0
          });
        },
        resultUrl: function() {
          return this.result.c > this.result.l ? this.links['c'] : this.links['l'];
        }
      },
      methods: {
        submit: function() {
          if (this.isSubmittable) {
            this.isSubmitted = true;
            setTimeout(function() {
              document.querySelector('#teszt-eredmeny').scrollIntoView();
            }, 10);
          }
        }
      }
    });

    var tesztModal = new Vue({
      el: '#test-modal-content',
      data: {
        nickname: null
      },
      methods: {
        submit: function() {
          if (!this.nickname) {
            return;
          }
          jQuery('#test-modal').modal('hide');
          konnyuElalvasTeszt.name = this.nickname;
          document.querySelector('#silent-night-content').style.display = 'none';
          setTimeout(() => {
            document.querySelector('#konnyu-elalvas-teszt').scrollIntoView();
          }, 100);
        }
      }
    });

    for (var i = 0, star; i < 60; i++) {
      star = new Star();
    }

    jQuery('#test-modal').on('shown.bs.modal', function() {
      jQuery('#test-modal input').trigger('focus');
    });
  });
</script>

<style>
  @keyframes click-effect {
    0% {
      opacity: 1;
      transform: scale(1);
    }

    90% {
      opacity: 0;
      transform: scale(2);
    }

    100% {
      opacity: 0;
      transform: scale(1);
    }
  }

  @keyframes twinkle {
    0% {
      opacity: 0.5;
      transform: scale(0.5);
    }

    12% {
      opacity: 1;
      transform: scale(1);
    }

    15% {
      opacity: 0.5;
      transform: scale(0.5);
    }

    100% {
      opacity: 0.5;
      transform: scale(0.5);
    }
  }

  .btn-default {
    background-color: white;
  }

  .btn-sn-cta {
    white-space: normal;
    color: white !important;
    /* background-color: rgb(224, 185, 124) !important; */
    background-color: rgb(185, 209, 193) !important;
    text-shadow: 0 0 5px #483c2b, 0 0 30px #020202;
    font-size: 1.2rem;
  }

  body {
    padding-top: 3rem;
    background-color: #0f0f26;
    background-size: 100%;
    background-repeat: repeat;
    background-image: url('https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night_stars.png'), url('https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night_overlay_bg.svg') !important;
  }

  html {
    margin-top: 0 !important;
  }

  #bm-nav-session,
  #bm-main-nav-sticky-wrapper,
  #bm-main-nav-mobile,
  #wpadminbar {
    display: none !important;
  }

  #bm-content-wrapper {
    max-width: 100%;
    padding: 0 !important;
    overflow-x: hidden;
  }

  .star {
    position: absolute;
    border-radius: 50%;
    background: white;
    z-index: -1;
  }

  .answer-label {
    transition: opacity 0.5s;
  }

  .semi-transparent {
    opacity: 0.5;
  }

  .card {
    background-color: rgba(255, 255, 255, 0.85);
    line-height: 2;
    box-shadow: 0 0 15px #576c8c;
  }

  .click-effect.animate {
    animation: click-effect 0.5s;
  }

  .cursor-pointer {
    cursor: pointer;
  }

  #main-footer {
    z-index: -1;
    background-image: url('https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night_2020.png') !important;
    padding-bottom: 85% !important;
  }

  .radio-custom {
    height: 1.1rem;
    margin-right: 1.5rem;
    font-size: 1.1rem;
    transform: translateY(2px);
  }

  .radio-custom .radio-center {
    transform-origin: 50%;
    transform: scale(0);
    transition: transform 0.2s ease-in;
  }

  .radio-custom .click-effect {
    transform-origin: 50%;
    opacity: 0;
  }

  [type="radio"]:checked+.radio-custom .radio-center {
    transform: scale(1);
  }

  [type="radio"]:focus+.radio-custom .click-effect {
    animation: click-effect 1s;
  }

  .text-indent-1 {
    text-indent: 2rem;
  }

  h2 {
    text-shadow: 0 0 2px #0f1833, 0 0 5px #0f1833;
  }

  [v-cloak] {
    display: none;
  }

  #silent-night-menu a {
    color: white;
    transition: color 0.3s, background-color 0.3s, text-shadow 0s linear 0.3s;
    text-decoration: none;
    text-shadow: 0 0 2px #0f1833, 0 0 5px #0f1833;
    font-size: 1.2rem;
  }

  #silent-night-menu a:hover {
    color: #0f0f26;
    background-color: white;
    text-shadow: none;
    transition: color 0.3s, background-color 0.3s, text-shadow 0s;
  }

  .font-sn {
    font-family: playlistscript;
  }

  #logo-bottom {
    bottom: 3vw;
  }

  .logo-small {
    filter: invert(0.5);
    width: 120px !important;
    height: auto;
    display: inline !important;
    aspect-ratio: initial !important;
    opacity: 1 !important;
  }

  .silent-night-logo {
    display: inline;
  }

  .silent-night-logo-2 {
    display: none;
  }

  .fb-page {
    max-width: calc(100vw - 32px);
    overflow: auto;
  }

  #silent-night-carousel .swiper-slide img {
    aspect-ratio: 16 / 9;
    object-fit: cover;
    object-position: center;
  }

  @media (max-width: 450px) {
    .silent-night-logo {
      display: none;
    }

    .silent-night-logo-2 {
      display: inline;
    }
  }

  @media (max-width: 767px) {
    h1 {
      font-size: 15vw !important;
    }

    #tagline {
      font-size: 2vw !important;
      margin-right: -20vw !important;
    }
  }

  .img16-9 {
    aspect-ratio: 16 / 9;
    object-fit: cover;
  }

  .img1-1 {
    aspect-ratio: 1;
    object-fit: cover;
  }

  @media (max-width: 604px) {
    h1 {
      font-size: 20vw !important;
    }

    #tagline {
      font-size: 3vw !important;
      margin-right: -17vw !important;
    }
  }

  .fa {
    height: 1em;
    width: auto;
    margin-top: -0.5em;
  }

  footer.site-footer {
    margin-top: 0 !important;
  }
</style>

<?php get_footer(); ?>