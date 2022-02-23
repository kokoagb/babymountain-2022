import { useBlockProps } from '@wordpress/block-editor';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faStar } from '@fortawesome/free-solid-svg-icons';
import { attributesPropType } from './common';

export default function Save({ attributes }) {
  return (
    <div {...useBlockProps.save()}>
      <div
        className='swiper'
        style={{
          backgroundColor: attributes.backgroundColor,
          color: attributes.textColor,
        }}
      >
        <div className='swiper-wrapper'>
          {attributes.slides.map((slide) => (
            <div
              key={slide.id}
              className='swiper-slide d-flex flex-wrap justify-content-center p-3'
            >
              <div className='position-relative'>
                <img data-src={slide.imgSrc} className='swiper-lazy' />
                <div className='swiper-lazy-preloader swiper-lazy-preloader-white'></div>
              </div>
              <div className='wp-block-bm-blocks-testimonials-slide-text d-flex flex-column'>
                <blockquote className='m-0 mb-3 flex-fill'>
                  &quot;{slide.text}&quot;
                </blockquote>
                <div className='d-flex justify-content-center mb-3 wp-block-bm-blocks-testimonials-slide-stars'>
                  <FontAwesomeIcon icon={faStar} className='mr-1' />
                  <FontAwesomeIcon icon={faStar} className='mr-1' />
                  <FontAwesomeIcon icon={faStar} className='mr-1' />
                  <FontAwesomeIcon icon={faStar} className='mr-1' />
                  <FontAwesomeIcon icon={faStar} className='mr-1' />
                  {slide.author}
                </div>
              </div>
            </div>
          ))}
        </div>
      </div>
      <div className='wp-block-bm-blocks-testimonials-swiper-button-prev swiper-button-prev'></div>
      <div className='wp-block-bm-blocks-testimonials-swiper-button-next swiper-button-next'></div>
    </div>
  );
}

Save.propTypes = {
  attributes: attributesPropType,
};
