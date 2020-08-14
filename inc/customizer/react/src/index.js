import { BaseControl } from './base/control';
import { headingControl } from './heading/control';
import { hiddenControl } from './hidden/control';
import { descriptionControl } from './description/control';
<<<<<<< HEAD
import { dividerControl } from './divider/control';
=======
import { settingsGroupControl } from './settings-group/control';
import { colorControl } from './color/control.js';
import { responsiveColorControl } from './responsive-color/control'
import { responsiveBackgroundControl } from './responsive-background/control';
import { backgroundControl } from './background/control';
import { sortableControl } from './sortable/control';
import { borderControl } from './border/control';
import { customizerLinkControl } from './customizer-link/control';
import { responsiveControl } from './responsive/control';
import { responsiveSliderControl } from './responsive-slider/control';
import { sliderControl } from './slider/control';
import { radioImageControl } from './radio-image/control';
import { responsiveSpacingControl }  from './responsive-spacing/control';
import { selectControl } from './select/control';
>>>>>>> 303f1e3b603f4d84e165de9fd36b196a0c655c08

wp.customize.controlConstructor['ast-heading'] = headingControl;
wp.customize.controlConstructor['ast-hidden'] = hiddenControl;
wp.customize.controlConstructor['ast-description'] = descriptionControl;
<<<<<<< HEAD
wp.customize.controlConstructor['ast-divider'] = dividerControl;
=======
wp.customize.controlConstructor['ast-settings-group'] = settingsGroupControl;
wp.customize.controlConstructor['ast-color'] = colorControl;
wp.customize.controlConstructor['ast-responsive-color'] = responsiveColorControl;
wp.customize.controlConstructor['ast-responsive-background'] = responsiveBackgroundControl;
wp.customize.controlConstructor['ast-background'] = backgroundControl;
wp.customize.controlConstructor['ast-sortable'] = sortableControl;
wp.customize.controlConstructor['ast-border'] = borderControl;
wp.customize.controlConstructor['ast-customizer-link'] = customizerLinkControl;
wp.customize.controlConstructor['ast-responsive'] = responsiveControl;
wp.customize.controlConstructor['ast-responsive-slider'] = responsiveSliderControl;
wp.customize.controlConstructor['ast-slider'] = sliderControl;
wp.customize.controlConstructor['ast-radio-image'] = radioImageControl;
wp.customize.controlConstructor['ast-responsive-spacing'] = responsiveSpacingControl;
wp.customize.controlConstructor['ast-select'] = selectControl;
>>>>>>> 303f1e3b603f4d84e165de9fd36b196a0c655c08

window.addEventListener( 'load', () => {
    console.log('Testing Console.');
} );