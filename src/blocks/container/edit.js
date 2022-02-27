import PropTypes from 'prop-types';
import {
  useBlockProps,
  useInnerBlocksProps,
  InspectorControls,
} from '@wordpress/block-editor';
import { PanelBody, SelectControl } from '@wordpress/components';

const options = [
  { value: 'container', label: 'Konténer' },
  { value: 'container-fluid', label: 'Fluid' },
  { value: '', label: 'Div' },
];

export default function Edit({ attributes, setAttributes }) {
  const blockProps = useBlockProps({ className: attributes.type });
  const innerBlocksProps = useInnerBlocksProps(blockProps);

  return (
    <div {...innerBlocksProps}>
      <InspectorControls>
        <PanelBody title='Tulajdonságok' initialOpen={true}>
          <SelectControl
            label='Konténer típusa'
            value={attributes.type}
            onChange={(type) => setAttributes({ type })}
            options={options}
          />
        </PanelBody>
      </InspectorControls>
      {innerBlocksProps.children}
    </div>
  );
}

Edit.propTypes = {
  attributes: PropTypes.shape({
    type: PropTypes.string,
  }),
  setAttributes: PropTypes.func,
};
