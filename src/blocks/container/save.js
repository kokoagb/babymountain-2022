import PropTypes from 'prop-types';
import cn from 'classnames';
import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

export default function Save({ attributes }) {
  return attributes.type === 'a' ? (
    <a
      {...useBlockProps.save({ className: cn(attributes.type, 'd-block') })}
      href={attributes.aHref}
    >
      <InnerBlocks.Content />
    </a>
  ) : (
    <div {...useBlockProps.save({ className: cn(attributes.type) })}>
      <InnerBlocks.Content />
    </div>
  );
}

Save.propTypes = {
  attributes: PropTypes.shape({
    type: PropTypes.string,
    aHref: PropTypes.string,
  }),
};
