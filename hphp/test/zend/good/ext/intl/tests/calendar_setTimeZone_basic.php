<?hh <<__EntryPoint>> function main(): void {
ini_set("intl.error_level", E_WARNING);
ini_set("intl.default_locale", "nl");

$intlcal = IntlCalendar::createInstance('Europe/Amsterdam');
print_r($intlcal->getTimeZone()->getID());
echo "\n";
var_dump($intlcal->get(IntlCalendar::FIELD_ZONE_OFFSET));

$intlcal->setTimeZone(IntlTimeZone::getGMT());
print_r($intlcal->getTimeZone()->getID());
echo "\n";
var_dump($intlcal->get(IntlCalendar::FIELD_ZONE_OFFSET));

intlcal_set_time_zone($intlcal,
        IntlTimeZone::createTimeZone('GMT+05:30'));
print_r($intlcal->getTimeZone()->getID());
echo "\n";
var_dump($intlcal->get(IntlCalendar::FIELD_ZONE_OFFSET));
echo "==DONE==";
}
