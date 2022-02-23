import PropTypes from 'prop-types';
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import { TextControl, PanelBody } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
  return (
    <div {...useBlockProps()}>
      <InspectorControls>
        <PanelBody title='Tulajdonságok' initialOpen={true}>
          <TextControl
            label='Mailchimp ID'
            value={attributes.mailchimpId}
            onChange={(mailchimpId) => setAttributes({ mailchimpId })}
          />
        </PanelBody>
      </InspectorControls>

      <form>
        <div className='form-inline'>
          <div className='form-group flex-grow-1'>
            <input
              id='newsletter-email'
              type='dummy'
              name='EMAIL'
              placeholder='Email címem'
              className='form-control w-100'
            />
          </div>
          <button
            type='submit'
            value='Subscribe'
            name='subscribe'
            className='newsletter-submit'
          >
            <img
              className='newsletter-submit-icon'
              src='https://babymountain.hu/wp-content/themes/babymountain2/assets/images/email.png'
            />
          </button>
        </div>
        <div className='custom-control custom-checkbox text-justify mt-2'>
          <input
            id={`${attributes.mailchimpId}-subscription-consent`}
            type='checkbox'
            className='subscription-consent custom-control-input'
          />
          <label
            className='custom-control-label'
            htmlFor={`${attributes.mailchimpId}-subscription-consent`}
          >
            <small>
              Kérem a BabyMountain hírlevelét, benne híreket újdonságokról,
              értesítéseket érdekes blogbejegyzésekrõl, valamint a webshop
              legfrissebb kedvezményeirõl, hogy semmirõl se maradjak le és a
              legjobbat választhassam a kisbabám, gyermekem és a családom
              természetes gyógyulásához.{' '}
              <a href='/adatvedelmi-nyilatkozat/'>
                <strong>
                  Feliratkozásommal elfogadom az Adatvédelmi irányelveket.
                </strong>
              </a>
            </small>
            <small className='form-text text-danger' />
          </label>
        </div>
      </form>
    </div>
  );
}

Edit.propTypes = {
  attributes: PropTypes.shape({
    mailchimpId: PropTypes.string,
  }),
  setAttributes: PropTypes.func,
};
