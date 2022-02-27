import PropTypes from 'prop-types';
import cn from 'classnames';
import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

export default function Save({ attributes }) {
  return (
    <div {...useBlockProps.save({ className: cn(attributes.type) })}>
      <InnerBlocks.Content />
    </div>
  );
}

Save.propTypes = {
  attributes: PropTypes.shape({
    type: PropTypes.string,
  }),
};
