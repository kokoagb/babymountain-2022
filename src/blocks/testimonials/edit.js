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
  TextareaControl,
} from '@wordpress/components';
import { arrowUp, arrowDown } from '@wordpress/icons';
import { useSelect } from '@wordpress/data';
import { attributesPropType, slidePropType, Slide } from './common';
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
          className='wp-block-bm-blocks-testimonials-in-panel-img'
          src={media.source_url}
        />
      )}
      <TextareaControl
        label='Vélemény szövege'
        value={slide.text}
        onChange={(value) => onChange(slide, value, slide.author)}
        className='wp-block-bm-blocks-testimonials-in-panel-text-control'
      />
      <TextControl
        label='Beküldő neve'
        value={slide.author}
        onChange={(value) => onChange(slide, slide.text, value)}
        className='wp-block-bm-blocks-testimonials-in-panel-text-control'
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

export default function Edit({ attributes, setAttributes }) {
  const selectMedia = (media) => {
    setAttributes({
      slides: [
        ...attributes.slides,
        { id: media.id, imgSrc: media.url, text: '', author: '' },
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

  const handleChange = (slide, text, author) => {
    setAttributes({
      slides: attributes.slides.map((s) =>
        s.id === slide.id ? { ...slide, text, author } : s
      ),
    });
  };

  return (
    <div {...useBlockProps()}>
      <InspectorControls>
        <PanelBody title='Vevővélemények elemei' initialOpen={true}>
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
        <Slide slide={attributes.slides[0]} />
      ) : (
        'Adj hozzá egy vevővéleményt a jobb oldali panelen!'
      )}
    </div>
  );
}

InPanelSlide.propTypes = {
  slide: slidePropType,
  onChange: PropTypes.func,
  moveSlide: PropTypes.func,
  removeSlide: PropTypes.func,
  isFirst: PropTypes.bool,
  isLast: PropTypes.bool,
};

Edit.propTypes = {
  attributes: attributesPropType,
  setAttributes: PropTypes.func,
};
