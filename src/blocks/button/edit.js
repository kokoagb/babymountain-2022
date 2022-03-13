import PropTypes from 'prop-types';
import cn from 'classnames';
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import {
  TextControl,
  PanelBody,
  SelectControl,
  CheckboxControl,
} from '@wordpress/components';

const typeOptions = [
  { value: 'primary', label: 'Teli' },
  { value: 'outline', label: 'Körvonal' },
];

const sizeOptions = [
  { value: '', label: 'Normál' },
  { value: 'btn-sm', label: 'Kicsi' },
  { value: 'btn-lg', label: 'Nagy' },
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
            options={typeOptions}
          />
          <SelectControl
            label='Gomb mérete'
            value={attributes.size}
            onChange={(size) => setAttributes({ size })}
            options={sizeOptions}
          />
          <CheckboxControl
            label='Széles gomb'
            value={attributes.isWide}
            onChange={(isWide) => setAttributes({ isWide })}
          />
        </PanelBody>
      </InspectorControls>
      <a
        className={cn(
          'btn',
          {
            'btn-primary': attributes.type === 'primary',
            'btn-outline-primary': attributes.type === 'outline',
            'w-100 px-0': attributes.isWide,
          },
          attributes.size
        )}
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
    size: PropTypes.string,
    isWide: PropTypes.bool,
  }),
  setAttributes: PropTypes.func,
};
