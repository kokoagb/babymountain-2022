import PropTypes from 'prop-types';

export const Herb = PropTypes.shape({
  title: PropTypes.string,
  description: PropTypes.string,
  position: PropTypes.shape({
    left: PropTypes.number,
    top: PropTypes.number,
  }),
  useCases: PropTypes.arrayOf(PropTypes.string),
  collections: PropTypes.arrayOf(
    PropTypes.shape({
      title: PropTypes.string,
      slug: PropTypes.string,
    })
  ),
});
