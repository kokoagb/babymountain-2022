window.addEventListener('DOMContentLoaded', () => {
  const forms = document.querySelectorAll(
    '.wp-block-bm-blocks-newsletter-signup'
  );
  const emailPattern = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/i;

  class ValidationError extends Error {
    constructor(message) {
      super(message);
      this.name = 'ValidationError';
    }
  }

  const validate = (form) => {
    let valid = true;
    let emailError = '';
    let consentError = '';

    const email = form.querySelector('.newsletter-email')?.value;
    const consent = form.querySelector('.subscription-consent')?.checked;
    const emailErrorEl = form.querySelector('.email-error');
    const consentErrorEl = form.querySelector('.consent-error');

    if (!email) {
      emailError = 'Kérlek, add meg az email címed!';
      valid = false;
    } else if (!email.match(emailPattern)) {
      emailError = 'Kérlek, adj meg valós emailcímet!';
      valid = false;
    }
    if (!consent) {
      consentError = 'Kérlek, fogadd el a szabályzatot!';
      valid = false;
    }

    emailErrorEl.innerHTML = emailError;
    consentErrorEl.innerHTML = consentError;

    if (!valid) {
      throw new ValidationError(JSON.stringify({ emailError, consentError }));
    }
  };

  const handleSubmit = (event) => {
    try {
      validate(event.target);
    } catch (error) {
      console.info(error);
      event.preventDefault();
    }
  };

  forms.forEach((form) => form.addEventListener('submit', handleSubmit));
});
