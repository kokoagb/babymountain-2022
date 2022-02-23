import { renderToString } from 'react-dom/server';
import PropTypes from 'prop-types';
import { useBlockProps } from '@wordpress/block-editor';
import { Herb } from './common';

const Popover = ({ herb }) => (
  <div className='wp-block-bm-blocks-herbs--popover d-flex'>
    <div className='wp-block-bm-blocks-herbs--popover--title'>{herb.title}</div>
    <div className='wp-block-bm-blocks-herbs--popover--use-cases'>
      <div className='wp-block-bm-blocks-herbs--popover--heading'>
        MIBEN LEHET A SEGÍTSÉGEDRE?
      </div>
      <ul>
        {herb.useCases.map((useCase) => (
          <li key={useCase}>{useCase}</li>
        ))}
      </ul>
    </div>
    <div className='wp-block-bm-blocks-herbs--popover--collections'>
      <div className='wp-block-bm-blocks-herbs--popover--heading'>
        EZEKBEN A KOLLEKCIÓKBAN TALÁLOD MEG:
      </div>
      <ul>
        {herb.collections.map((collection) => (
          <li key={collection.title}>
            <a href={collection.slug}>{collection.title}</a>
          </li>
        ))}
      </ul>
    </div>
  </div>
);

export default function Save({ attributes }) {
  return (
    <div {...useBlockProps.save()}>
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
          data-popover={renderToString(<Popover herb={herb} />)}
        >
          <div className='wp-block-bm-blocks-herbs--herb-title'>
            {herb.title}
          </div>
        </div>
      ))}
    </div>
  );
}

Popover.propTypes = {
  herb: Herb,
};

Save.propTypes = {
  attributes: PropTypes.shape({
    herbs: PropTypes.arrayOf(Herb),
  }),
};
