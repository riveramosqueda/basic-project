require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


/**
 * Custom global JS functions
 *
 * -
 * -
 */

window.disableOnClick=function disableElement(element){
	$(element).hide(50);
}