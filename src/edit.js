import { useBlockProps } from '@wordpress/block-editor';
import ServerSideRender from '@wordpress/server-side-render';

export default function Edit( { attributes, setAttributes } ) {
	const { blockProps } =  useBlockProps();
	return (
		<div { ...blockProps }>
			<ServerSideRender 
				block="transk-block/links-block"
				
			/>					
		</div>
	);
}
