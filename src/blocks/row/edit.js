import PropTypes from 'prop-types';
import {
  useBlockProps,
  useInnerBlocksProps,
  InspectorControls,
} from '@wordpress/block-editor';
import { PanelBody, TextControl } from '@wordpress/components';

const TEMPLATE = [
  [
    'bm-blocks/col',
    {},
    [['core/paragraph', { placeholder: 'Az első oszlop tartalma...' }]],
  ],
  [
    'bm-blocks/col',
    {},
    [['core/paragraph', { placeholder: 'A második oszlop tartalma...' }]],
  ],
];

export default function Edit({ attributes, setAttributes }) {
  const blockProps = useBlockProps({ className: 'row ms-auto me-auto' });
  const innerBlocksProps = useInnerBlocksProps(blockProps, {
    allowedBlocks: ['bm-blocks/col'],
    template: TEMPLATE,
    orientation: 'horizontal',
  });
  return (
    <div {...innerBlocksProps}>
      <InspectorControls>
        <PanelBody title='Tulajdonságok' initialOpen={true}>
          <TextControl
            label='HTML Horgony'
            value={attributes.id}
            onChange={(id) => setAttributes({ id })}
          />
        </PanelBody>
      </InspectorControls>
      {innerBlocksProps.children}
    </div>
  );
}

Edit.propTypes = {
  attributes: PropTypes.shape({
    id: PropTypes.string,
  }),
  setAttributes: PropTypes.func,
};
