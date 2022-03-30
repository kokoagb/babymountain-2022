import PropTypes from 'prop-types';
import { useBlockProps } from '@wordpress/block-editor';

export default function Save({ attributes }) {
  return (
    <>
      <div {...useBlockProps.save()}>
        <div className='swiper'>
          <div className='swiper-wrapper'></div>
        </div>
        <div className='wp-block-bm-blocks-products-swiper-button-next swiper-button-next'></div>
        <div className='wp-block-bm-blocks-products-swiper-button-prev swiper-button-prev'></div>
      </div>
      <script>window.bmProducts = {JSON.stringify(attributes.products)}</script>
    </>
  );
}

Save.propTypes = {
  attributes: PropTypes.shape({
    products: PropTypes.arrayOf(
      PropTypes.shape({
        id: PropTypes.number,
        name: PropTypes.string,
        permalink: PropTypes.string,
        price: PropTypes.string,
        image_url: PropTypes.string,
      })
    ),
  }),
};
