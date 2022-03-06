<?php

$field = $args['field'];
$key   = $args['key'];
$value = $args['value'];
$args  = $args['args'];

$text_types = array(
  'text',
  'password',
  'datetime',
  'datetime-local',
  'date',
  'month',
  'time',
  'week',
  'number',
  'email',
  'url',
  'tel'
);

if ( in_array($args['type'], $text_types) ): ?>

  <div id="<?php echo esc_attr( $args['id'] ) . '_field'; ?>" class="mb-3 <?php echo esc_attr( implode( ' ', $args['class'] ) ); ?>">
    <div class="form-floating">
      <input
        id="<?php echo esc_attr( $args['id'] ); ?>"
        type="<?php echo esc_attr( $args['type'] ); ?>"
        class="form-control <?php echo esc_attr( implode( ' ', $args['input_class'] ) ); ?>"
        name="<?php echo esc_attr( $key ); ?>"
        value="<?php echo esc_attr( $value ); ?>"
        placeholder="<?php echo wp_kses_post( $args['label'] ); ?>"
      />
      <label for="<?php echo $args['id']; ?>"><?php echo wp_kses_post( $args['label'] ); ?></label>
    </div>
  </div>

<?php elseif ($args['type'] === 'select'): ?>

  <div id="<?php echo esc_attr( $args['id'] ) . '_field'; ?>" class="mb-3 <?php echo esc_attr( implode( ' ', $args['class'] ) ); ?>">
    <div class="form-floating">
      <select <?php echo 'name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" class="select ' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" ' . implode( ' ', $custom_attributes ) . ' data-placeholder="' . esc_attr( $args['placeholder'] ) . '"'; ?>>
      <?php
        foreach ( $args['options'] as $option_key => $option_text ) {
          if ( '' === $option_key ) {
            // If we have a blank option, select2 needs a placeholder.
            if ( empty( $args['placeholder'] ) ) {
              $args['placeholder'] = $option_text ? $option_text : __( 'Choose an option', 'woocommerce' );
            }
            $custom_attributes[] = 'data-allow_clear="true"';
          }
          echo '<option value="' . esc_attr( $option_key ) . '" ' . selected( $value, $option_key, false ) . '>' . esc_html( $option_text ) . '</option>';
        }
      ?>
      </select>
      <label for="<?php echo $args['id']; ?>"><?php echo wp_kses_post( $args['label'] ); ?></label>
    </div>
  </div>
<?php else:
  echo $field;
endif; ?>
