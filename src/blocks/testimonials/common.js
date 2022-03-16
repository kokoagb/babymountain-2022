import PropTypes from 'prop-types';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faStar } from '@fortawesome/free-solid-svg-icons';

export const slidePropType = PropTypes.shape({
  id: PropTypes.number,
  imgSrc: PropTypes.string,
  text: PropTypes.string,
  author: PropTypes.string,
});

export const attributesPropType = PropTypes.shape({
  slides: PropTypes.arrayOf(slidePropType),
  backgroundColor: PropTypes.string,
  textColor: PropTypes.string,
});

export const Slide = ({ slide }) => (
  <div className='swiper-slide d-flex flex-wrap justify-content-center p-3'>
    <img src={slide.imgSrc} />
    <div className='wp-block-bm-blocks-testimonials-slide-text d-flex flex-column'>
      <blockquote className='m-0 mb-3 flex-fill'>
        &quot;{slide.text}&quot;
      </blockquote>
      <div className='text-center mb-3'>{slide.author}</div>
      <div className='d-flex justify-content-center wp-block-bm-blocks-testimonials-slide-stars'>
        <FontAwesomeIcon icon={faStar} className='mr-1' />
        <FontAwesomeIcon icon={faStar} className='mr-1' />
        <FontAwesomeIcon icon={faStar} className='mr-1' />
        <FontAwesomeIcon icon={faStar} className='mr-1' />
        <FontAwesomeIcon icon={faStar} className='mr-1' />
      </div>
    </div>
  </div>
);

Slide.propTypes = {
  slide: slidePropType,
};
