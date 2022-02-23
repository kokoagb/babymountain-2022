import PropTypes from 'prop-types';
import { useBlockProps } from '@wordpress/block-editor';
import { Partner } from './common';

export default function Save({ attributes }) {
  return (
    <div {...useBlockProps.save({ className: 'swiper' })}>
      <div className='swiper-wrapper'>
        {attributes.partners.map((partner) => (
          <a
            key={partner.id}
            className='swiper-slide'
            href={partner.aHref}
            data-id={partner.id}
          >
            <img data-src={partner.imgSrc} className='swiper-lazy' />
            <div className='swiper-lazy-preloader'></div>
          </a>
        ))}
      </div>
    </div>
  );
}

Save.propTypes = {
  attributes: PropTypes.shape({
    partners: PropTypes.arrayOf(Partner),
  }),
};
