import PropTypes from 'prop-types';
import { arrayMoveImmutable } from 'array-move';
import { DragDropContext, Droppable, Draggable } from 'react-beautiful-dnd';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faGripLines } from '@fortawesome/free-solid-svg-icons';
import { useState, useEffect, useMemo } from '@wordpress/element';
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, PanelRow } from '@wordpress/components';
import { addQueryArgs } from '@wordpress/url';
import apiFetch from '@wordpress/api-fetch';
import './editor.scss';

const fetchProducts = () =>
  apiFetch({
    path: addQueryArgs('wc/store/products'),
  });

export default function Edit({ attributes, setAttributes }) {
  const [availableProducts, setAvailableProducts] = useState([]);

  const selectedProductIds = useMemo(
    () => attributes.products.map((p) => p.id),
    [attributes.products]
  );

  const select = (product) =>
    setAttributes({ products: [...attributes.products, product] });

  const selectAll = () => setAttributes({ products: [...availableProducts] });

  const deselect = (product) =>
    setAttributes({
      products: attributes.products.filter((p) => p.id !== product.id),
    });

  const deselectAll = () => setAttributes({ products: [] });

  const handleDragEnd = ({ source, destination }) => {
    if (!destination) {
      return;
    }

    setAttributes({
      products: arrayMoveImmutable(
        attributes.products,
        source.index,
        destination.index
      ),
    });
  };

  useEffect(
    () =>
      fetchProducts().then((_products) => {
        console.log({ _products });
        setAvailableProducts(
          _products.map(({ id, name, permalink, images, prices }) => ({
            id,
            name,
            permalink,
            image_url: images?.[0]?.thumbnail ?? '',
            price: prices?.price,
          }))
        );
      }),
    []
  );

  return (
    <div {...useBlockProps()}>
      <InspectorControls>
        <PanelBody title='Aktív termékek' initialOpen={true}>
          <p>
            <small>
              Ezt a listát húzással tudod rendezni. További elemeket a lenti
              &quot;Összes termék&quot; panelen adhatsz hozzá. Eltávolítani is
              ott tudsz egy-egy terméket a listából.
            </small>
          </p>
          <DragDropContext onDragEnd={handleDragEnd}>
            <Droppable droppableId='products'>
              {(provided) => (
                <div {...provided.droppableProps} ref={provided.innerRef}>
                  {attributes.products.map((product, index) => (
                    <Draggable
                      key={product.id}
                      draggableId={`${product.id}`}
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
                          {product.name}
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
        <PanelBody title='Összes termék' initialOpen={true}>
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
            {availableProducts.map((product) => {
              const selected = selectedProductIds.includes(product.id);

              return (
                <li key={product.id}>
                  <input
                    type='checkbox'
                    checked={selected}
                    onChange={() =>
                      selected ? deselect(product) : select(product)
                    }
                  />
                  {product.name}
                </li>
              );
            })}
          </ul>
        </PanelBody>
      </InspectorControls>

      {attributes.products.slice(0, 4).map((product) => (
        <a key={product.id} className='wp-block-bm-blocks-products-product'>
          <div className='wp-block-bm-blocks-products-product-image-wrapper'>
            <img
              src={product.image_url}
              alt={product.name}
              className='wp-block-bm-blocks-products-product-image'
            />
          </div>
          <div className='wp-block-bm-blocks-products-product-name'>
            {product.name}
          </div>
          <div className='wp-block-bm-blocks-products-product-price'>
            {product.price ? `${product.price} Ft` : ''}
          </div>
        </a>
      ))}

      {!attributes.products.length &&
        'Kattints ide, és adj hozzá termékeket a jobb oldalsávban'}
    </div>
  );
}

Edit.propTypes = {
  attributes: PropTypes.shape({
    products: PropTypes.arrayOf(
      PropTypes.shape({
        id: PropTypes.number,
        name: PropTypes.string,
        permalink: PropTypes.string,
        price: PropTypes.string,
        image_url: PropTypes.string,
      })
    ),
  }),
  setAttributes: PropTypes.func,
};
