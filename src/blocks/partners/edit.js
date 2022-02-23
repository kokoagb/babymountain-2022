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
import { Partner } from './common';
import './editor.scss';

const Directions = {
  Up: 'up',
  Down: 'down',
};

const InPanelPartner = ({
  partner,
  onChange,
  movePartner,
  removePartner,
  isFirst,
  isLast,
}) => {
  const media = useSelect((select) => select('core').getMedia(partner.id), [
    partner.id,
  ]);

  return (
    <>
      {media && (
        <img
          className='wp-block-bm-blocks-partners--img-preview'
          src={media.source_url}
        />
      )}
      <TextControl
        label='Hivatkozás (URL)'
        value={partner.aHref}
        onChange={(value) => onChange(partner, value)}
        className='wp-block-bm-blocks-partners-in-panel-text-control'
      />
      <PanelRow>
        <div>
          {!isFirst && (
            <Button
              onClick={() => movePartner(partner, Directions.Up)}
              icon={arrowUp}
              label='Mozgatás fel'
            />
          )}
          {!isLast && (
            <Button
              onClick={() => movePartner(partner, Directions.Down)}
              icon={arrowDown}
              label='Mozgatás le'
            />
          )}
        </div>
        <MediaUploadCheck>
          <Button onClick={() => removePartner(partner)} isLink isDestructive>
            Eltávolítás
          </Button>
        </MediaUploadCheck>
      </PanelRow>
      <hr />
    </>
  );
};

const PartnersPreview = ({ partners }) => {
  return (
    <div className='d-flex justify-content-between'>
      {partners.map((partner) => (
        <img
          key={partner.id}
          className='wp-block-bm-blocks-partners--img-preview'
          src={partner.imgSrc}
        />
      ))}
    </div>
  );
};

export default function Edit({ attributes, setAttributes }) {
  const selectMedia = (media) => {
    setAttributes({
      partners: [
        ...attributes.partners,
        { id: media.id, imgSrc: media.url, aHref: '' },
      ],
    });
  };

  const movePartner = (partner, direction) => {
    const originalIdx = attributes.partners.indexOf(partner);
    const newPartners = attributes.partners.filter((s) => s.id !== partner.id);
    newPartners.splice(
      direction === Directions.Up ? originalIdx - 1 : originalIdx + 1,
      0,
      partner
    );
    setAttributes({
      partners: newPartners,
    });
  };

  const removePartner = (partner) => {
    setAttributes({
      partners: attributes.partners.filter((s) => s.id !== partner.id),
    });
  };

  const handleChange = (partner, aHref) => {
    setAttributes({
      partners: attributes.partners.map((s) =>
        s.id === partner.id ? { ...partner, aHref } : s
      ),
    });
  };

  return (
    <div {...useBlockProps()}>
      <InspectorControls>
        <PanelBody title='Pajtik' initialOpen={true}>
          {attributes.partners.map((partner, idx) => (
            <InPanelPartner
              partner={partner}
              onChange={handleChange}
              movePartner={movePartner}
              removePartner={removePartner}
              isFirst={idx === 0}
              isLast={idx === attributes.partners.length - 1}
              key={partner.id}
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
      {attributes.partners[0] ? (
        <PartnersPreview partners={attributes.partners} />
      ) : (
        'Adj hozzá egy pajtit a jobb oldali panelen!'
      )}
    </div>
  );
}

InPanelPartner.propTypes = {
  partner: Partner,
  onChange: PropTypes.func,
  movePartner: PropTypes.func,
  removePartner: PropTypes.func,
  isFirst: PropTypes.bool,
  isLast: PropTypes.bool,
};

PartnersPreview.propTypes = {
  partners: PropTypes.arrayOf(Partner),
};

Edit.propTypes = {
  attributes: PropTypes.shape({
    partners: PropTypes.arrayOf(Partner),
  }),
  setAttributes: PropTypes.func,
};
