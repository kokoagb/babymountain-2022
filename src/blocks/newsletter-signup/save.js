import PropTypes from 'prop-types';
import { useBlockProps } from '@wordpress/block-editor';

export default function Save({ attributes }) {
  return (
    <div {...useBlockProps.save()}>
      <h2 className='text-center text-md-left'>Iratkozz fel hírlevelünkre!</h2>

      <form
        name='mc-embedded-subscribe-form'
        action={`https://babymountain.us6.list-manage.com/subscribe/post?u=8c60bf97301e09f33b4d8dca3&amp;id=${attributes.mailchimpId}`}
        method='post'
        noValidate
      >
        <div className='form-inline'>
          <div className='form-group' style='flex-grow: 1;'>
            <input
              type='email'
              name='EMAIL'
              placeholder='Email címem'
              className='newsletter-email form-control w-100'
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
        <small className='email-error form-text text-danger' />
        <div style='position: absolute; left: -5000px;' aria-hidden='true'>
          <input
            type='text'
            name='b_8c60bf97301e09f33b4d8dca3_c26705cccb'
            tabIndex='-1'
            value=''
          />
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
            <small className='consent-error form-text text-danger' />
          </label>
        </div>
      </form>
    </div>
  );
}

Save.propTypes = {
  attributes: PropTypes.shape({
    mailchimpId: PropTypes.string,
  }),
};
