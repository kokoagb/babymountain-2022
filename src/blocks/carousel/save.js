import PropTypes from 'prop-types';
import { useBlockProps } from '@wordpress/block-editor';
import { Slide } from './common';

export default function Save({ attributes }) {
  return (
    <div {...useBlockProps.save({ className: 'swiper' })}>
      <div className='swiper-wrapper'>
        {attributes.slides.map((slide) => (
          <a
            key={slide.id}
            className='swiper-slide'
            href={slide.aHref}
            data-id={slide.id}
          >
            <img data-src={slide.imgSrc} className='swiper-lazy' />
            <div className='swiper-lazy-preloader'></div>
          </a>
        ))}
      </div>
      <div className='swiper-button-prev'></div>
      <div className='swiper-button-next'></div>
    </div>
  );
}

Save.propTypes = {
  attributes: PropTypes.shape({
    slides: PropTypes.arrayOf(Slide),
  }),
};
