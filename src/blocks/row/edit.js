import { useBlockProps, useInnerBlocksProps } from '@wordpress/block-editor';

const TEMPLATE = [
  [
    'bm-blocks/col',
    {},
    [['core/paragraph', { placeholder: 'Az első oszlop tartalma...' }]],
  ],
  [
    'bm-blocks/col',
    {},
    [['core/paragraph', { placeholder: 'A második oszlop tartalma...' }]],
  ],
];

export default function Edit() {
  const blockProps = useBlockProps({ className: 'row ms-auto me-auto' });
  const innerBlocksProps = useInnerBlocksProps(blockProps, {
    allowedBlocks: ['bm-blocks/col'],
    template: TEMPLATE,
    orientation: 'horizontal',
  });
  return <div {...innerBlocksProps}>{innerBlocksProps.children}</div>;
}
