import { __ } from '@wordpress/i18n';
import { registerBlockType } from '@wordpress/blocks';
import { TextControl } from '@wordpress/components';
import svgIcon from '../Icon.svg';

registerBlockType('aadsplugin/a-ads-block', {
    title: __('A-ADS'),
    icon: <img src={svgIcon} alt="A-ADS" />,
    category: 'widgets',
    attributes: {
        title: {
            type: 'string',
            default: 'A-ADS',
        },
        adUnitID: {
            type: 'number',
            default: 1,
        },
    },
    example: {
        attributes: {
            title: 'A-ADS Block',
            adUnitID: 1,
        },
    },
    edit: function (props) {
        const { attributes, setAttributes } = props;
        const { title, adUnitID, adUnitSize } = attributes;

        // Edit component UI
        return (
            <div>
                {/* Components for editing your block's attributes */}
                <TextControl
                    label={__('Title')}
                    value={title}
                    onChange={(value) => setAttributes({ title: value })}
                />
                <TextControl
                    label={__('Ad Unit ID')}
                    value={adUnitID}
                    onChange={(value) => setAttributes({ adUnitID: parseInt(value) })}
                />
            </div>
        );
    },
    save: function () {
        // Server-side rendering is handled by PHP, so save function can be empty
        return null;
    },
});
