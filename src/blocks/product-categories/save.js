import PropTypes from 'prop-types';
import { useBlockProps } from '@wordpress/block-editor';

export default function Save({ attributes }) {
  return (
    <>
      <div {...useBlockProps.save()}>
        <div className='swiper'>
          <div className='swiper-wrapper'></div>
        </div>
        <div className='wp-block-bm-blocks-product-categories-swiper-button-next swiper-button-next'></div>
        <div className='wp-block-bm-blocks-product-categories-swiper-button-prev swiper-button-prev'></div>
      </div>
      <script>
        window.bmCategories = {JSON.stringify(attributes.categories)}
      </script>
    </>
  );
}

Save.propTypes = {
  attributes: PropTypes.shape({
    categories: PropTypes.arrayOf(
      PropTypes.shape({
        id: PropTypes.number,
        name: PropTypes.string,
        permalink: PropTypes.string,
        image_url: PropTypes.string,
      })
    ),
  }),
};
