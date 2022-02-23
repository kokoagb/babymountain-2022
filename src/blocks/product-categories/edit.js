import { useState, useEffect } from '@wordpress/element';
import { useBlockProps } from '@wordpress/block-editor';
import { addQueryArgs } from '@wordpress/url';
import apiFetch from '@wordpress/api-fetch';
import './editor.scss';

const fetchProducts = () =>
  apiFetch({
    path: addQueryArgs('wc/store/products/categories', {
      per_page: 3,
    }),
  });

export default function Edit() {
  const [categories, setCategories] = useState([]);

  useEffect(() => fetchProducts().then(setCategories), []);

  return (
    <div {...useBlockProps()}>
      {categories.map((category) => (
        <a
          key={category.id}
          className='wp-block-bm-blocks-product-categories-category'
        >
          <img
            src={category.image?.thumbnail ?? ''}
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
