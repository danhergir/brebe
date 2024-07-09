import 'flowbite';

import Datepicker from 'flowbite-datepicker/Datepicker';
import DateRangePicker from 'flowbite-datepicker/DateRangePicker';
window.datePicker = Datepicker;
window.dateRangePicker = DateRangePicker;

import es from 'vanillajs-datepicker/locales/es';

Object.assign(Datepicker.locales, es);
