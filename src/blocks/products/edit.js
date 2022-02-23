import { useState, useEffect } from '@wordpress/element';
import { useBlockProps } from '@wordpress/block-editor';
import { addQueryArgs } from '@wordpress/url';
import apiFetch from '@wordpress/api-fetch';
import './editor.scss';

const fetchProducts = () =>
  apiFetch({
    path: addQueryArgs('wc/store/products', {
      per_page: 4,
    }),
  });

export default function Edit() {
  const [products, setProducts] = useState([]);

  useEffect(() => fetchProducts().then(setProducts), []);

  return (
    <div {...useBlockProps()}>
      {products.map((product) => (
        <a key={product.id} className='wp-block-bm-blocks-products-product'>
          <div className='wp-block-bm-blocks-products-product-image-wrapper'>
            <img
              src={product.images?.[0]?.thumbnail ?? ''}
              alt={product.name}
              className='wp-block-bm-blocks-products-product-image'
            />
          </div>
          <div className='wp-block-bm-blocks-products-product-name'>
            {product.name}
          </div>
          <div className='wp-block-bm-blocks-products-product-price'>
            {product.prices?.price ? `${product.prices.price} Ft` : ''}
          </div>
        </a>
      ))}
    </div>
  );
}
