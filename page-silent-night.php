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
    Az ??lomba ringat?? S??hegyecske kollekci??
  </h2>
</div>

<div id="silent-night-content" class="container">
  <nav id="silent-night-menu" class="hide-for-test">
    <ul class="d-block d-md-flex justify-content-center m-0 p-0 mb-8 text-uppercase">
      <li class="text-center d-block d-md-inline-block me-0 me-md-3">
        <a class="d-inline-block px-3 py-2 rounded" href="#a-leiras">Le??r??s</a>
      </li>
      <li class="text-center d-block d-md-inline-block me-0 me-md-3">
        <a class="d-inline-block px-3 py-2 rounded" href="#a-teszt">Alv??st??pus teszt</a>
      </li>
      <li class="text-center d-block d-md-inline-block me-0 me-md-3">
        <a class="d-inline-block px-3 py-2 rounded" href="#a-velemenyek">V??lem??nyek</a>
      </li>
      <li class="text-center d-block d-md-inline-block me-0 me-md-3">
        <a class="d-inline-block px-3 py-2 rounded" href="#a-hasznalat">Haszn??lat</a>
      </li>
      <li class="text-center d-block d-md-inline-block me-0">
        <a class="d-inline-block px-3 py-2 rounded" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#cirbolya-modal">A cirbolyafeny??</a>
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
        <p class="text-indent-1 mb-0">Alv??sk??nny??t?? S??hegyecske kollekci??nkat az??rt hoztuk l??tre, hogy seg??thesd gyermekedet a k??nny?? elalv??sban ??s a kiegyens??lyozott, nyugodt alv??sban. T??ltsd ki aromaterapeuta ??ltal ??ssze??ll??tott ???Aromater??pi??s alv??st??pusok??? teszt??nket ??s tudd meg, hogy milyen ??sszetev??kkel t??lt??tt S??hegyecske az, ami legink??bb seg??theti ??t ebben!</p>
      </div>
    </div>
  </div>

  <div class="row mb-8 position-relative">
    <div id="a-teszt" class="position-absolute" style="bottom: 50vh;"></div>
    <div class="col text-center">
      <button class="btn btn-default btn-sn-cta py-4 px-5 font-weight-bold rounded" data-bs-toggle="modal" data-bs-target="#test-modal">
        J??HET A TESZT!
      </button>
    </div>
  </div>

  <div class="row" id="a-leiras">
    <div class="col">
      <h2 class="text-white">
        T??bb, mint egy p??rna
      </h2>
    </div>
  </div>

  <div class="row mb-8">
    <div class="col-lg-5 order-lg-2 mb-3 mb-lg-0">
      <img class="rounded img16-9 img-fluid h-100" src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/IMG_3228.JPG" loading="lazy" />
    </div>
    <div class="col-lg-7">
      <div class="card h-100 text-justify p-4 rounded">
        <p class="text-indent-1 mb-0 h-100">A <img class="logo-small" src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/silent_night_logo.png" /> kollekci?? nem csup??n a k??sz ???term??kb??l??? ??ll. A hozz?? tartoz?? teszt egy olyan, aromaterapeuta ??ltal ??ssze??ll??tott k??rd??ssoron viszi v??gig a Sz??l??t, ami gyermeke szem??lyis??gjegyeire, alv??s ??? ??s ??tkez??sbeli szok??saira, valamint azokra a viselked??sbeli jellemz??kre k??rdez r??, amik pl. konfliktus vagy f??radts??g eset??n jelentkeznek n??la. A v??laszok seg??ts??g??vel der??l ki sz??munkra, melyek azok az ??sszetev??k, melyeket szem??lyre szabottan a p??rn??j??ba t??lthet??nk. Azok az ??sszetev??k, melyek a leghat??konyabban seg??tenek neki a nap v??g??n a mihamarabbi ellazul??sban ??s a nyugodt alv??sban.</p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <h2 class="text-white text-end">
        Ahol az Alpok ??s a Himal??ja ??ssze??r<br><small>avagy 3 k??l??nleges ??sszetev??</small>
      </h2>
    </div>
  </div>

  <div class="row mb-8">
    <div class="col-lg-5 mb-3 mb-lg-0">
      <img class="rounded img16-9 img-fluid h-100" src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/DSC_0269.jpg" loading="lazy" />
    </div>
    <div class="col-lg-7">
      <div class="card h-100 text-justify p-4 rounded">
        <p class="text-indent-1 mb-0 h-100">A <img class="logo-small" src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/silent_night_logo.png" /> kollekci?? S??hegyeinek alapja a legtiszt??bb ??sv??nyi s??k??nt jegyzett, magas ??sv??nyi anyag tartalommal b??r?? Himal??ja krist??lys??, melyhez egy olyan k??l??nleges ??s az eg??sz vil??gon egyed??l??ll?? gy??gyhat??ssal rendelkez?? feny??fajt??t, a Cirbolyafeny?? illatos forg??cs??t kevert??k, mely nyugtatja az idegrendszert, valamint optimaliz??lja a sz??v ??s kering??si rendszert ??? hat??sosan cs??kkentve ??gy a sz??vfrekvenci??t. Harmadik ??sszetev??k??nt pedig k??t laz??t??, nyugtat??, stresszold?? hat??s?? gy??gyn??v??nyt is adtunk hozz?? ,melyek szem??lyre szabva vagy a sz??r??tott levendulavir??g vagy a citromverb??na sz??r??tott levele.</p>
      </div>
    </div>
  </div>

  <div class="row" id="a-hasznalat">
    <div class="col">
      <h2 class="text-white">
        K??nny?? haszn??lat
      </h2>
    </div>
  </div>

  <div class="row mb-8">
    <div class="col-lg-5 order-lg-2 mb-3 mb-lg-0">
      <img class="rounded img16-9 img-fluid h-100" src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/DSC_1174.jpg" loading="lazy" />
    </div>
    <div class="col-lg-7">
      <div class="card h-100 text-justify p-4 rounded">
        <p class="text-indent-1 mb-0">A kollekci?? S??hegyei alv??p??rn??k, teh??t ??lland?? tagjai lehetnek gyermekeink ??gy??nak. Meleg??t??st sem ig??nyelnek, s??t a cirbolyafeny?? faforg??cs miatt nem is szabad ??ket meleg??teni. Egyszer??en, a testh??m??rs??klet hat??s??ra ( fej al?? t??ve, ??sszeb??jva vel??k) v??lik intenz??vebb?? a gy??gyn??v??nyek ??s a faforg??cs illatanyagainak ??raml??sa, valamint a Himal??ja krist??lys??b??l felszabadul?? s??ionok is a testh??m??rs??klet hat??s??ra aktiv??l??dnak, ??gy juttatva el a gy??gyn??v??nyek arom??s vegy??leteit a l??gutak legapr??bb szegmenseihez.</p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <h2 class="text-white text-end">
        Ha elm??ltam m??r 2 ??ves
      </h2>
    </div>
  </div>

  <div class="row mb-8">
    <div class="col-lg-4 mb-3 mb-lg-0">
      <img class="rounded img16-9 img-fluid h-100" src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/DSC_1132.jpg" loading="lazy" />
    </div>
    <div class="col-lg-8">
      <div class="card h-100 text-justify p-4 rounded">
        <p class="text-indent-1 mb-0">A ??alv??sk??nny??t?? S??hegyecsk??ket 2 ??ves kort??l aj??nljuk, hiszen ebben az ??letkorban m??r megfigyelhet??ek azokat a saj??toss??gok, melyeket az aromater??pi??s k??rd??ssorunk alapul vesz. De ami m??g fontosabb,hogy sz??k??l azoknak a t??nyez??knek a k??re is, amik megnehez??tik a bab??k zavartalan ??jszak??it. Ilyenek az ??ppen aktu??lis fejl??d??si szakaszok (??rtelmi fejl??d??s, mozg??sfejl??d??s, lelki fejl??d??s pl. szepar??ci??s szorong??s, testi v??ltoz??sok pl. fogz??s, k??rnyezeti v??ltoz??sok pl. b??lcsi kezd??s). Alv??sk??nny??t?? S??hegyecsk??inket a nyugtalanul alv??, nagyobb gyermekeknek ??s az alv??szavarokkal k??zd??, stresszes ??letm??dot folytat?? feln??tteknek is aj??nljuk.</p>
      </div>
    </div>
  </div>

  <div class="row" id="a-velemenyek">
    <div class="col">
      <h2 class="text-white">
        Mi m??r kipr??b??ltuk!
      </h2>
    </div>
  </div>

  <div class="row mb-8">
    <div class="col">
      <div class="card p-4 rounded">
        <div id="silent-night-reviews" class="wp-block-bm-blocks-carousel swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide d-flex flex-column">
              <h3 class="text-indent-1">"Seg??tett a fel??re cs??kkenteni az altat??si id??t!"</h3>
              <p class="text-indent-1 font-italic">"Misivel kor??bban az esti altat??s el??g k??zdelmes volt, 40 percig is eltartott. Misi el??gg?? ??nfej?? kisfi??, ??gy m??r az sem volt egyszer??, hogy az ??lomhoz?? S??hegyecsk??t az ??gy??ba csemp??sszem. De h??la az isteni illat??nak ??s a form??j??nak, k??nnyed??n mes??be tudtam foglalni neki, mi??rt nagyszer?? m??ka, ha a S??hegyecsk??vel alszik. A <img class="logo-small" src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/silent_night_logo.png" loading="lazy" /> S??hegyecsk??t 3 hete haszn??ljuk ??s m??r eddig is seg??tett a fel??re cs??kkenteni Misin??l az altat??si id??t, amit alig tudok elhinni!"</p>
              <p class="mb-0 text-end mt-auto">
                <?php solid_star(); ?>&nbsp;
                <strong>Kov??csn?? Elekes Vikt??ria</strong>, a 4 ??ves <strong>Rozi</strong>, a 2 ??ves <strong>Misi</strong> ??s a 9 h??napos <strong>Karcsi</strong> Anyuk??ja
              </p>
            </div>

            <div class="swiper-slide d-flex flex-column">
              <h3 class="text-indent-1">"Nem ??bred meg ??jjel"</h3>
              <p class="text-indent-1 font-italic">"Zselyk??m el??g "rossz alv??", van, hogy d??lut??n sem tud aludni. A p??rg??s ??s f??raszt?? mindennapok ellen??re el??g k??s??n alszik el ??s ??jjel is t??bbsz??r ??bred. M??r az els?? ??jszaka, mikor a <img class="logo-small" src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/silent_night_logo.png" /> alv??sk??nny??t?? S??hegyecsk??vel aludt, nyugodtan telt, az ??jszak??t teljesen ??taludta! V??gre tud nyugodtan pihenni, aminek pozit??v hat??sa a napi ritmus??n is megmutatkozik. S??t! Nem csak ?? ??s mi alszunk jobban, hanem Brumi ??r ??s Kutyus Pajti is, akiknek Zselyke n??ha k??lcs??nadja a S??hegyecsk??t, mert szerinte is "Ett??l tudsz majd aludni sz??pen!"."</p>
              <p class="mb-0 text-end mt-auto">
                <?php solid_star(); ?>&nbsp;
                <strong>K??ntor-Skrapits Eszter</strong>, a3 ??ves <strong>Zselyke</strong> ??s a 6 h??napos <stong>Boti</stong> Anyuk??ja
              </p>
            </div>

            <div class="swiper-slide d-flex flex-column">
              <h3 class="text-indent-1">"Sokkal nyugodtabban alszik!"</h3>
              <p class="text-indent-1 font-italic">"Laura S??ra 4 h??napos kor??ig nagyon j??l alv?? baba volt. Azt??n ahogy n??tt, ez megv??ltozott. Most 3,5 ??ves, de az??ta is k??tszer-h??romszor kel ??jjelente. Rendk??v??l nyugtalanul alszik, miel??tt kipr??b??ltuk a <img class="logo-small" src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/silent_night_logo.png" /> kollekci?? illatos p??rn??j??t ??lland??an kopogott a kis feje a bab??gy r??csain, vagy a lees??sg??tl??n. Egy h??napja alszik minden ??jjel az alv??sk??nny??t?? S??hegyecsk??vel ??s az??ta ezek megsz??ntek! Sokkal nyugodtabban alszik!"</p>
              <p class="mb-0 text-end mt-auto">
                <?php solid_star(); ?>&nbsp;
                <strong>Kinga</strong>, a 3,5 ??ves <strong>Laura S??ra</strong> Anyuk??ja
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
          <img class="img16-9 img-fluid rounded" src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/maison.jpg" loading="lazy" />
        </div>
        <h5 class="card-title my-3 text-center">
          <a href="http://www.maisonblog.hu/3-dolog-ami-segit-a-gyors-es-kellemes-altatasban" target="_blank" class="text-body">
            3 DOLOG, AMI SEG??T A GYORS ??S KELLEMES ALTAT??SBAN
          </a>
        </h5>
        <div class="card-text text-justify">
          Annyira megtisztel?? lehet??s??get kaptunk, hogy D??viddal m??r a hivatalos bemutatkoz??sa el??tt tesztelhett??k a BabyMountain ??j, alv??sk??nny??t?? s??hegyecsk??j??t. Most konkr??tan a csillag mint??s hegyecsk??re gondolok, ami gy??gyn??v??nyes-krist??lys??s kever??kkel van megt??mve. Fogadj??tok szeretettel a bemutat??s??t!
        </div>
        <div class="card-footer px-0 mt-auto">
          <a href="http://www.maisonblog.hu/3-dolog-ami-segit-a-gyors-es-kellemes-altatasban/" class="text-body">
            Tov??bb a cikkre...
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card d-flex flex-column h-100 text-justify p-4 rounded h-100">
        <div class="card-img-top">
          <img class="img16-9 img-fluid rounded" src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/DSC_0270.jpg" loading="lazy" />
        </div>
        <h5 class="card-title my-3 text-center">
          <a href="/2018/09/17/csak-egy-parna-es-mar-alszik-is/" target="_blank" class="text-body">
            CSAK EGY P??RNA, ??S M??R ALSZIK IS?
          </a>
        </h5>
        <div class="card-text text-justify">
          Hogy milyen k??l??nleges alapanyagokra bukkantunk alv??sk??nny??t?? kollekci??nkhoz, hogy hogyan szabtuk szem??lyre gyermekenk??nt a S??hegyecsk??k t??ltel??k??t ??s mindezekr??l mit mondtatok Ti, akik kipr??b??lt??tok? Azt olvass??tok el ebben a cikkben!
        </div>
        <div class="card-footer px-0 mt-auto">
          <a href="/2018/09/17/csak-egy-parna-es-mar-alszik-is/" class="text-body">
            Tov??bb a cikkre...
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col mb-8 text-center">
      <button class="btn btn-default btn-sn-cta py-4 px-4 font-weight-bold rounded" data-bs-toggle="modal" data-bs-target="#test-modal">
        V??S??ROLNI SZERETN??K! TOV??BB A TESZTHEZ!
      </button>
    </div>
  </div>
</div>

<div class="container">
  <div id="konnyu-elalvas-teszt" v-cloak v-if="name">
    <h2 class="text-white">{{ name }}, k??rlek v??laszolj a k??rd??sekre!</h2>
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
        A tesztet ??ssze??ll??totta: T??th-K??llai Fruzsina, term??szetgy??gy??sz, aromaterapeuta
      </small>
    </p>
    <div class="row mb-8">
      <div class="col text-center">
        <button class="btn btn-default btn-sn-cta py-4 px-5 font-weight-bold rounded" @click="submit" :disabled="!isSubmittable || isSubmitted">
          MUTASD AZ EREDM??NYT!
        </button>
      </div>
    </div>
    <div class="row mb-8" v-if="isSubmitted">
      <div class="col" id="teszt-eredmeny">
        <h2 class="text-white">
          Az eredm??ny: {{ result.c > result.l ? 'CITROMVERB??NA T??PUS' : 'LEVENDULA T??PUS' }}
        </h2>
        <div class="row">
          <div class="col-lg-5 mb-3 mb-lg-0">
            <img class="rounded img1-1" src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/IMG_3230.JPG?20210221" loading="lazy" />
          </div>
          <div class="col-lg-7">
            <div class="card h-100 text-justify p-4 rounded">
              <div class="text-justify text-indent-1" v-if="result.c > result.l">
                A citromverb??na t??pus?? gyermekre haszn??lhatjuk azt a sz??t, hogy ???zizeg???. Mindenben, ami k??r??l??tte t??rt??nik, r??szt akar venni, a j??t??kba 100%-osan veti bele mag??t. Egyar??nt kedveli a gyermekek ??s a feln??ttek t??rsas??g??t, ??s hamar megtal??lja vel??k a ???k??z??s nyelvet???.
                Az savany?? min??s??g?? ??teleket r??szes??ti el??nyben, pl. fanyar gy??m??lcs??k, h??velyesek . Ezt az ??lland??an jelenl??v?? hatalmas aktivit??st ??des min??s??g?? ??telekkel ellens??lyozhatjuk ( NEM ??DESS??GEKKEL!), pl. rizzsel, ??des vagy sima burgony??val, h??sf??l??kkel, gabonaf??l??kkel.
                Ha valami b??ntja, hirtelen haraggal reag??l, pl. csapkod??s, rugdos??s. De amilyen hirtelen j??n ez a ???vihar???, olyan hamar enyh??l is.
                Figyelmet szeretne, m??gis l??mpal??zzal k??zd. Ha valami napk??zben b??ntja, az az ??jszak??kon is nyomot hagy, ilyenkor szorong?? lehet, pl. nehezen alszik el, mert f??l valamit??l a s??t??tben, r??m??lmai lehetnek, nyugtalanul, h??nykol??dva alszik. Ilyenkor nem ??rdemes fel??breszteni! L??gy hangs??ly??, nyugtat?? mondatokkal tudjuk ??t visszaterelni a b??k??s alv??sba.
              </div>
              <div class="text-justify text-indent-1" v-if="result.c < result.l">
                A levendula t??pus?? gyermekre mondj??k azt: ???Olyan, mintha egy m??sik vil??gban ??lne!???. Nyugodt lelk??let??, sokszor k??v??lr??l szeml??li az esem??nyeket. El??sz??r megfigyeli a cselekm??nyeket, miel??tt pl. be??llna a t??bbiek k??z?? j??tszani a j??tsz??t??ren. Nem szeret szerepelni. J??l ??rzi mag??t gyerekt??rsas??gban, de sokszor ink??bb a feln??ttek t??rsas??g??t keresi.
                Az ??des min??s??g?? ??teleket r??szes??ti el??nyben , pl. h??sf??l??k, rizs, burgonya, t??sztaf??l??k. Ebb??l az ???elvar??zsolt??? ??llapotb??l savany?? min??s??g?? ??telekkel mozd??thatjuk ki, pl. fanyar gy??m??lcs??kkel, citrusf??l??kkel, h??velyesekkel ??? pl. v??r??s lencs??vel, ubork??val.
                Ha valami b??ntja, ig??nyli az akt??v testkontaktust, mely sz??m??ra a megnyugv??st jelenti. Ha valami b??ntja a lelk??t, az kihat a napj??ra ??s az alv??s??ra is. ??t simogatni kell, ??lbe venni, babusgatni, f??leg, ha valami ??j, f??lelmetes, idegen helyzetbe ker??l. Mindezek elk??s??rik ??s ig??nyei lehetnek m??g nagyobb korban is.
                Nagyon megb??zhat??, kiegyens??lyozott gyermek. K??nny??ek vele a mindennapok, mert ha van benn??k rendszer, ahhoz sz??vesen tartja mag??t.
              </div>
              <p class="text-end mt-2 mb-0">
                <small>
                  A tesztet ??ssze??ll??totta: T??th-K??llai Fruzsina, term??szetgy??gy??sz, aromaterapeuta
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
          Megrendelem a S??hegyecsk??t!
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
      A BabyMountain m??rk??r??l ??s annak m??rkajelz??s??r??l az Eur??pai Unio Szellemi Tulajdoni Hivatala (???EUIPO???) 2018.06. 18-??n lajstromoz??si tan??s??tv??nyt ??ll??tott ki a Tulajdonos,Koch-Babics ??va r??sz??re. A m??rka ez??ltal v??djegyezett?? v??lt. A BabyMountain term??keinek k??sz??t??j??t, ??s a term??kek design-j??t pedig az Eur??pai Unio Szellemi Tulajdoni Hivatala (???EUIPO???) 2018. 02. 21-??n lajstromozta, teh??t az Eur??pai Uni?? ??ltal kibocs??tott Formatervez??si Mintaoltalom alatt ??ll! A term??kek m??sol??sa jogi k??vetkezm??nyt von maga ut??n, valamint a t??rv??ny b??nteti!
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
          <p>K??rlek, add meg hogyan sz??l??thatunk!</p>
          <div class="form-group mb-3">
            <input type="text" class="form-control rounded" v-model="nickname" placeholder="Mi a beceneved?">
          </div>
        </div>
        <div class="modal-footer border-top-0 pt-0">
          <button type="submit" :disabled="!nickname" class="btn btn-secondary rounded" style="background-color: #0f0f26 !important; border-color: #0f0f26 !important;">Tov??bb a teszthez</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div id="cirbolya-modal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div id="test-modal-content" class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title">A cirbolyafeny??</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-0">
        <img src="https://babymountain.hu/wp-content/themes/babymountain2/assets/images/silent_night/sn_gal_new8.jpg?20200503" style="width: 100%; height: auto; margin-bottom: 1rem;">
        <p>A Kelet-Alpok hegyei k??zt l??tezik egy k??l??nleges feny??, melynek minden porcik??ja illatos nyugalmat ??raszt. Nem m??s ez, mint a cirbolyafeny??, aminek mennyei illatanyaga olyan ??rt??kes gy??gyhat??sokat hordoz, melyek alapj??n m??lt??n nevezik, az "Alpok Kir??lyn??j??nek".</p>
        <p>A cirbolyafeny?? illatanyaga nyugtat?? hat??ssal van az idegrendszerre, f??k??nt a vegetat??v idegrendszerre, mely legink??bb a nap folyam??n minket ??r?? fizikai terhel??s ??s ment??lis stressz eset??n van extra ig??nybev??telnek kit??ve. M??sik f??, egyed??l??ll?? hat??sa, a sz??v- ??s ??rrendszerre kifejtett j??t??kony hat??s, melynek k??sz??nhet??en cs??kken a sz??vfrekvencia, nyugodtt?? v??lik a sz??vver??s, optimaliz??l??dik a kering??s. Sz??vnyugtat?? tulajdons??ga "??jszak??nk??nt 3500 dobban??st ??? azaz egy ??ra munk??t ??? "sp??rol meg" test??nk motorj??nak."</p>
        <p>Az id??j??r??s v??ltoz??saira ??rz??kenyek a cirbolyafeny?? fent eml??tett j??t??kony hat??sainak k??sz??nhet??en k??nnyebben viselik a frontok okozta rossz k??z??rzetet,fejf??j??st, ??lmatlans??got.</p>
        <p>Mindezek mellett pedig olyan term??szetes fert??tlen??t?? (antibiotikus) hat??ssal rendelkezik, mely steril alv??sk??rnyezetet biztos??t , ??gy biztons??ggal tehetj??k kisgyermekek ??gyik??j??ba is. </p>
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
          q: 'Milyen min??s??g??, ??zvil??g?? ??teleket szeret ink??bb a gyermeked?',
          answers: [{
            a: '??des (H??s, rizs, t??sztaf??l??k, burgonya)',
            v: 'l'
          }, {
            a: 'Fanyar (babf??l??k-h??velyesek, savany?? gy??m??lcs??k)',
            v: 'c'
          }],
          selected: null
        }, {
          q: 'Milyen a gyermeked viselked??se, ha f??radt? P??ld??ul, ha nem alszik d??lut??n, ??s ??gy csin??lja v??gig az eg??sz napot?',
          answers: [{
            a: 'T??lp??r??g, ??s semmivel nem lehet lenyugtatni, majd pedig a kimer??lts??gt??l "kid??l"',
            v: 'c'
          }, {
            a: 'Olyan, mintha nyitott szemmel aludna',
            v: 'l'
          }],
          selected: null
        }, {
          q: 'Mi jellemzi legink??bb gyermeked alv??s??t?',
          answers: [{
            a: 'Verg??dik, fogcsikorgat, fels??r ilyenkor nehezen ??breszthet??',
            v: 'c'
          }, {
            a: 'Besz??l, forgol??dik, ilyenkor k??nnyen fel??breszthet??',
            v: 'l'
          }],
          selected: null
        }, {
          q: 'Ha gyermeked valami miatt s??r, akkor ??ltal??ban...',
          answers: [{
            a: '...testkontaktussal, ringat??ssal megnyugtathat??',
            v: 'l'
          }, {
            a: '...nem lehet hozz????rni, hagyni kell, m??g megnyugszik, ??s csak ut??na lehet vigasztalni',
            v: 'c'
          }],
          selected: null
        }, {
          q: 'Milyen lelk??let?? a gyermeked?',
          answers: [{
            a: '??lmodoz??, gyakran elgondolkozik, elvan a saj??t kis vil??g??ban',
            v: 'l'
          }, {
            a: 'Akt??v, ??l??nk, nyitott, k??nnyen teremt kapcsolatot m??sokkal',
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

  .img16-9 img-fluid {
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