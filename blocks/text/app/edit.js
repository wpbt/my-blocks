import { useBlockProps } from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';

export default function Edit() {
    console.log( 'yoo', useBlockProps() );
    return <p>{ __( 'Yo buddy!', 'my-blocks' ) }</p>;
}