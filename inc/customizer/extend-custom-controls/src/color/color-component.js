import PropTypes from 'prop-types';
import { Component } from '@wordpress/element';
import { Dashicon } from '@wordpress/components';
import AstraColorPickerControl from '../common/astra-color-picker-control';

class ColorComponent extends Component {

    constructor( props ) {

		super( props );
		this.handleChangeComplete = this.handleChangeComplete.bind( this );
		this.updateValues = this.updateValues.bind( this );
		this.renderOperationButtons = this.renderOperationButtons.bind( this );

		let value = this.props.control.setting.get();

		this.defaultValue = this.props.control.params.default;

		this.state = {
			value: value,
		};
	}
	renderOperationButtons () {
		return (
			<span className="customize-control-title">
				<>
					<div className="ast-color-btn-reset-wrap">
						<button
						className="ast-reset-btn components-button components-circular-option-picker__clear is-secondary is-small"
						disabled={ ( JSON.stringify( this.state.value ) === JSON.stringify( this.defaultValue ) ) }
						onClick={ ( e ) => {

							e.preventDefault();
							let value = JSON.parse( JSON.stringify( this.defaultValue ) );
							if ( undefined === value || '' === value ) {
								value = '';
								wp.customize.previewer.refresh();
							}

							this.updateValues( value );
							this.refs.ChildAstraColorPickerControl.onResetRefresh();
						} }
						>
						<Dashicon icon='image-rotate' style={{width: 12, height: 12, fontSize: 12}} />
						</button>
					</div>
				</>
			</span>
		)
	}
    handleChangeComplete( color ) {

		let value;

		if ( typeof color === 'string' || color instanceof String ) {
			value = color;
		} else if ( undefined !== color.rgb && undefined !== color.rgb.a && 1 !== color.rgb.a ) {
			value = 'rgba(' +  color.rgb.r + ',' +  color.rgb.g + ',' +  color.rgb.b + ',' + color.rgb.a + ')';
		} else {
			value = color.hex;
		}
        this.updateValues( value );
    }

    render() {

		let labelHtml = null;

		const {
			label
		} = this.props.control.params

		if ( label ) {

			labelHtml = <span className="customize-control-title">{ label }</span>
		}
		return (
			<>
				<label>
					{ labelHtml }
				</label>
				<div className="ast-color-picker-alpha color-picker-hex">
					{ this.renderOperationButtons() }
					<AstraColorPickerControl
						color={ ( undefined !== this.state.value && this.state.value ? this.state.value :  '' ) }
						onChangeComplete={ ( color, backgroundType ) => this.handleChangeComplete( color ) }
						backgroundType = { 'color' }
						allowGradient={ false }
						allowImage={ false }
						ref="ChildAstraColorPickerControl"
					/>

				</div>
			</>
		);
    }

    updateValues( value ) {
		this.setState( { value: value } );
		this.props.control.setting.set( value );
	}
}

ColorComponent.propTypes = {
	control: PropTypes.object.isRequired
};

export default ColorComponent;
