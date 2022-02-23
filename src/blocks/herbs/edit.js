import PropTypes from 'prop-types';
import { useBlockProps } from '@wordpress/block-editor';
import { Herb } from './common';

export default function Edit({ attributes }) {
  return (
    <div {...useBlockProps()}>
      <img
        className='img-fluid'
        src='https://babymountain.hu/wp-content/themes/babymountain2/assets/images/ret.png'
      />
      {attributes.herbs.map((herb) => (
        <div
          className='wp-block-bm-blocks-herbs--herb'
          key={herb.title}
          style={{
            left: `${herb.position.left}%`,
            top: `${herb.position.top}%`,
          }}
        >
          <div className='wp-block-bm-blocks-herbs--herb-title'>
            {herb.title}
          </div>
        </div>
      ))}
    </div>
  );
}

Edit.propTypes = {
  attributes: PropTypes.shape({
    herbs: PropTypes.arrayOf(Herb),
  }),
};
