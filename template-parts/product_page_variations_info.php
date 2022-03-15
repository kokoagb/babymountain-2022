<?php

function bm_clear_variation_name($name)
{
  $name = str_ireplace(' -', '-', $name);
  $name = str_ireplace('- ', '-', $name);
  $name = str_ireplace('kristálysó', 'só', $name);
  return $name;
}

$variation_images = array(
  'kristalyso-citromfu-levendula' => 'toltelek_so_citromfu_levendula.png',
  'levendula-citromfu-kristalyso' => 'toltelek_so_citromfu_levendula.png',
  'kamilla-citromfu-kristalyso' => 'toltelek_so_citromfu_kamilla.png',
  'kristalyso-citromfu-kamilla' => 'toltelek_so_citromfu_kamilla.png',
  'harsfavirag-citromfu-kristalyso' => 'toltelek_so_citromfu_harsfavirag.png',
  'citromverbena-harsfavirag-kristalyso' => 'toltelek_so_harsfavirag_citromverbena.png',
  'citromverbena-harsfavirag-kristalyso-2' => 'toltelek_so_harsfavirag_citromverbena.png',
);

$args = wp_parse_args($args, array('variations' => array()));

?>

<?php if (count($args['variations'])) : ?>
  <div class="clear text-center pt-4">
    <h2 class="h4 text-uppercase mb-7">Nem tudod, melyiket is válaszd? Segítünk!</h2>
    <?php foreach ($args['variations'] as $variation) : ?>
      <?php if (array_key_exists($variation->slug, $variation_images)) : ?>
        <div class="mb-7">
          <img src="<?php echo get_template_directory_uri(); ?>/static/images/<?php echo $variation_images[$variation->slug] ?>" alt="<?php echo $variation->name; ?>" class="" loading="lazy" />
          <h3 class="h4 mb-3 text-uppercase bm-decorative-bg bm-decorative-bg-center">
            <?php echo bm_clear_variation_name($variation->name); ?>
            <small>hármasa</small>
          </h3>
          <p>
            <?php echo $variation->description; ?>
          <p>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
<?php endif; ?>
<div class="clear mb-7 container-fluid">
  <div class="row justify-content-center">
    <div class="col-12 col-lg-8 text-uppercase text-center mb-4">
      <em>"...A természetgyógyászatban eltöltött közel 20 év tapasztalatával ajánlom a szülők figyelmébe a Himalája ásványi só alkalmazását széleskörű hatékonyságával együtt."</em>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-12 col-md-9 col-lg-6 text-uppercase text-end">
      Dr. Prof. Bertha András
    </div>
  </div>
</div>