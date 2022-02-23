import PropTypes from 'prop-types';
import cn from 'classnames';
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import {
  TextControl,
  PanelBody,
  SelectControl,
  CheckboxControl,
} from '@wordpress/components';

const options = [
  { value: 'primary', label: 'Teli' },
  { value: 'outline', label: 'Körvonal' },
];

export default function Edit({ attributes, setAttributes }) {
  return (
    <div
      {...useBlockProps({
        className: cn({ 'flex-fill': attributes.isWide }),
      })}
    >
      <InspectorControls>
        <PanelBody title='Tulajdonságok' initialOpen={true}>
          <TextControl
            label='Szöveg'
            value={attributes.text}
            onChange={(text) => setAttributes({ text })}
          />
          <TextControl
            label='Hivatkozás'
            value={attributes.aHref}
            onChange={(aHref) => setAttributes({ aHref })}
          />
          <SelectControl
            label='Gomb típusa'
            value={attributes.type}
            onChange={(type) => setAttributes({ type })}
            options={options}
          />
          <CheckboxControl
            label='Széles gomb'
            value={attributes.isWide}
            onChange={(isWide) => setAttributes({ isWide })}
          />
        </PanelBody>
      </InspectorControls>
      <a
        className={cn('btn', {
          'btn-primary': attributes.type === 'primary',
          'btn-outline-primary': attributes.type === 'outline',
          'w-100': attributes.isWide,
        })}
      >
        {attributes.text || 'Gomb'}
      </a>
    </div>
  );
}

Edit.propTypes = {
  attributes: PropTypes.shape({
    text: PropTypes.string,
    aHref: PropTypes.string,
    type: PropTypes.string,
    isWide: PropTypes.bool,
  }),
  setAttributes: PropTypes.func,
};
