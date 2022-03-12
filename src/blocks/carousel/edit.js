import PropTypes from 'prop-types';
import {
  useBlockProps,
  InspectorControls,
  MediaUpload,
  MediaUploadCheck,
} from '@wordpress/block-editor';
import {
  TextControl,
  PanelBody,
  PanelRow,
  Button,
} from '@wordpress/components';
import { arrowUp, arrowDown } from '@wordpress/icons';
import { useSelect } from '@wordpress/data';
import { Slide } from './common';
import './editor.scss';

const Directions = {
  Up: 'up',
  Down: 'down',
};

const InPanelSlide = ({
  slide,
  onChange,
  moveSlide,
  removeSlide,
  isFirst,
  isLast,
}) => {
  const media = useSelect((select) => select('core').getMedia(slide.id), [
    slide.id,
  ]);

  return (
    <>
      {media && (
        <img
          className='wp-block-bm-blocks-carousel--img-preview'
          src={
            media.media_details?.sizes?.medium?.source_url ?? media.source_url
          }
        />
      )}
      <TextControl
        label='Hivatkozás (URL)'
        value={slide.aHref}
        onChange={(value) => onChange(slide, value)}
        className='wp-block-bm-blocks-carousel-in-panel-text-control'
      />
      <PanelRow>
        <div>
          {!isFirst && (
            <Button
              onClick={() => moveSlide(slide, Directions.Up)}
              icon={arrowUp}
              label='Mozgatás fel'
            />
          )}
          {!isLast && (
            <Button
              onClick={() => moveSlide(slide, Directions.Down)}
              icon={arrowDown}
              label='Mozgatás le'
            />
          )}
        </div>
        <MediaUploadCheck>
          <Button onClick={() => removeSlide(slide)} isLink isDestructive>
            Eltávolítás
          </Button>
        </MediaUploadCheck>
      </PanelRow>
      <hr />
    </>
  );
};

const CarouselPreview = ({ slide }) => {
  const media = useSelect((select) => select('core').getMedia(slide.id), [
    slide.id,
  ]);

  return media ? (
    <img
      className='wp-block-bm-blocks-carousel--img-preview'
      src={media.media_details?.sizes?.medium?.source_url ?? media.source_url}
    />
  ) : null;
};

export default function Edit({ attributes, setAttributes }) {
  const selectMedia = (media) => {
    console.log(media);
    setAttributes({
      slides: [
        ...attributes.slides,
        {
          id: media.id,
          imgSrc: media.sizes?.large?.url ?? media.url,
          aHref: '',
        },
      ],
    });
  };

  const moveSlide = (slide, direction) => {
    const originalIdx = attributes.slides.indexOf(slide);
    const newSlides = attributes.slides.filter((s) => s.id !== slide.id);
    newSlides.splice(
      direction === Directions.Up ? originalIdx - 1 : originalIdx + 1,
      0,
      slide
    );
    setAttributes({
      slides: newSlides,
    });
  };

  const removeSlide = (slide) => {
    setAttributes({
      slides: attributes.slides.filter((s) => s.id !== slide.id),
    });
  };

  const handleChange = (slide, aHref) => {
    setAttributes({
      slides: attributes.slides.map((s) =>
        s.id === slide.id ? { ...slide, aHref } : s
      ),
    });
  };

  return (
    <div {...useBlockProps()}>
      <InspectorControls>
        <PanelBody title='Galéria elemei' initialOpen={true}>
          {attributes.slides.map((slide, idx) => (
            <InPanelSlide
              slide={slide}
              onChange={handleChange}
              moveSlide={moveSlide}
              removeSlide={removeSlide}
              isFirst={idx === 0}
              isLast={idx === attributes.slides.length - 1}
              key={slide.id}
            />
          ))}
          <div className='editor-post-featured-image'>
            <MediaUploadCheck>
              <MediaUpload
                allowedTypes={['image']}
                onSelect={selectMedia}
                render={({ open }) => (
                  <Button
                    className='editor-post-featured-image__toggle'
                    onClick={open}
                  >
                    Új elem hozzáadása
                  </Button>
                )}
              />
            </MediaUploadCheck>
          </div>
        </PanelBody>
      </InspectorControls>
      {attributes.slides[0] ? (
        <CarouselPreview slide={attributes.slides[0]} />
      ) : (
        'Adj hozzá egy elemet a galériához a jobb oldali panelen!'
      )}
    </div>
  );
}

InPanelSlide.propTypes = {
  slide: Slide,
  onChange: PropTypes.func,
  moveSlide: PropTypes.func,
  removeSlide: PropTypes.func,
  isFirst: PropTypes.bool,
  isLast: PropTypes.bool,
};

CarouselPreview.propTypes = {
  slide: Slide,
};

Edit.propTypes = {
  attributes: PropTypes.shape({
    slides: PropTypes.arrayOf(Slide),
  }),
  setAttributes: PropTypes.func,
};
