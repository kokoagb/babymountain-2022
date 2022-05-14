import PropTypes from 'prop-types';
import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

export default function Save({ attributes }) {
  return (
    <div {...useBlockProps.save({ className: 'row', id: attributes.id })}>
      <InnerBlocks.Content />
    </div>
  );
}

Save.propTypes = {
  attributes: PropTypes.shape({
    id: PropTypes.string,
  }),
};
