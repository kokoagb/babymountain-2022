import PropTypes from 'prop-types';
import cn from 'classnames';
import { useBlockProps } from '@wordpress/block-editor';

export default function Save({ attributes }) {
  return (
    <div
      {...useBlockProps.save({
        className: cn({ 'flex-fill': attributes.isWide }),
      })}
    >
      <a
        href={attributes.aHref}
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

Save.propTypes = {
  attributes: PropTypes.shape({
    text: PropTypes.string,
    aHref: PropTypes.string,
    type: PropTypes.string,
    isWide: PropTypes.bool,
  }),
};
