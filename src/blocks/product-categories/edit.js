import PropTypes from 'prop-types';
import { arrayMoveImmutable } from 'array-move';
import { DragDropContext, Droppable, Draggable } from 'react-beautiful-dnd';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faGripLines } from '@fortawesome/free-solid-svg-icons';
import { useState, useEffect, useMemo } from '@wordpress/element';
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import { PanelBody } from '@wordpress/components';
import { addQueryArgs } from '@wordpress/url';
import apiFetch from '@wordpress/api-fetch';
import './editor.scss';

const fetchCategories = () =>
  apiFetch({
    path: addQueryArgs('wc/store/products/categories'),
  });

export default function Edit({ attributes, setAttributes }) {
  const [availableCategories, setAvailableCategories] = useState([]);

  const selectedCategoryIds = useMemo(
    () => attributes.categories.map((c) => c.id),
    [attributes.categories]
  );

  const select = (category) =>
    setAttributes({ categories: [...attributes.categories, category] });

  const selectAll = () =>
    setAttributes({ categories: [...availableCategories] });

  const deselect = (category) =>
    setAttributes({
      categories: attributes.categories.filter((c) => c.id !== category.id),
    });

  const deselectAll = () => setAttributes({ categories: [] });

  const handleDragEnd = ({ source, destination }) => {
    if (!destination) {
      return;
    }

    setAttributes({
      categories: arrayMoveImmutable(
        attributes.categories,
        source.index,
        destination.index
      ),
    });
  };

  useEffect(
    () =>
      fetchCategories().then((_categories) => {
        console.log(_categories);
        setAvailableCategories(
          _categories.map(({ id, name, permalink, image }) => ({
            id,
            name,
            permalink,
            image_url: image?.thumbnail ?? '',
          }))
        );
      }),
    []
  );

  return (
    <div {...useBlockProps()}>
      <InspectorControls>
        <PanelBody title='Aktív kollekciók' initialOpen={true}>
          <p>
            <small>
              Ezt a listát húzással tudod rendezni. További elemeket a lenti
              &quot;Összes termék&quot; panelen adhatsz hozzá. Eltávolítani is
              ott tudsz egy-egy terméket a listából.
            </small>
          </p>
          <DragDropContext onDragEnd={handleDragEnd}>
            <Droppable droppableId='categories'>
              {(provided) => (
                <div {...provided.droppableProps} ref={provided.innerRef}>
                  {attributes.categories.map((category, index) => (
                    <Draggable
                      key={category.id}
                      draggableId={`${category.id}`}
                      index={index}
                    >
                      {(provided) => (
                        <div
                          ref={provided.innerRef}
                          {...provided.draggableProps}
                          {...provided.dragHandleProps}
                          style={{
                            ...provided.draggableProps.style,
                            marginBottom: '.5rem',
                          }}
                        >
                          <FontAwesomeIcon
                            icon={faGripLines}
                            style={{ color: '#ccc', marginRight: '.5rem' }}
                          />
                          {category.name}
                        </div>
                      )}
                    </Draggable>
                  ))}
                  {provided.placeholder}
                </div>
              )}
            </Droppable>
          </DragDropContext>
        </PanelBody>
        <PanelBody title='Összes kollekció' initialOpen={true}>
          <div>
            <a
              onClick={selectAll}
              style={{ cursor: 'pointer', marginRight: '1rem' }}
            >
              Összes
            </a>
            <a onClick={deselectAll} style={{ cursor: 'pointer' }}>
              Egyik se
            </a>
          </div>
          <ul>
            {availableCategories.map((category) => {
              const selected = selectedCategoryIds.includes(category.id);

              return (
                <li key={category.id}>
                  <input
                    type='checkbox'
                    checked={selected}
                    onChange={() =>
                      selected ? deselect(category) : select(category)
                    }
                  />
                  {category.name}
                </li>
              );
            })}
          </ul>
        </PanelBody>
      </InspectorControls>

      {attributes.categories.slice(0, 3).map((category) => (
        <a
          key={category.id}
          className='wp-block-bm-blocks-product-categories-category'
        >
          <img
            src={category.image_url}
            alt={category.name}
            className='wp-block-bm-blocks-product-categories-category-image'
          />
          <div className='wp-block-bm-blocks-product-categories-category-name'>
            {category.name}
          </div>
        </a>
      ))}
    </div>
  );
}

Edit.propTypes = {
  attributes: PropTypes.shape({
    categories: PropTypes.arrayOf(
      PropTypes.shape({
        id: PropTypes.number,
        name: PropTypes.string,
        permalink: PropTypes.string,
        image_url: PropTypes.string,
      })
    ),
  }),
  setAttributes: PropTypes.func,
};
