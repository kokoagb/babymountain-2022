import { useBlockProps, useInnerBlocksProps } from '@wordpress/block-editor';

const TEMPLATE = [['core/paragraph', { placeholder: 'Az oszlop tartalma...' }]];

export default function Edit() {
  const blockProps = useBlockProps({ className: 'col' });
  const innerBlocksProps = useInnerBlocksProps(blockProps, {
    template: TEMPLATE,
  });
  return <div {...innerBlocksProps}>{innerBlocksProps.children}</div>;
}
