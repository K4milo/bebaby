/**
 * External dependencies
 */
import { Icon, column } from '@wordpress/icons';
import { registerFeaturePluginBlockType } from '@woocommerce/block-settings';

/**
 * Internal dependencies
 */
import { Edit, Save } from './edit';
import metadata from './block.json';

registerFeaturePluginBlockType( metadata, {
	icon: {
		src: <Icon icon={ column } />,
		foreground: '#874FB9',
	},
	edit: Edit,
	save: Save,
} );
