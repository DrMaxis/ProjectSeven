<?php

use App\Domains\Currency\Models\Currency;
use Illuminate\Database\Seeder;

/**
 * Class CurrencyTableSeeder.
 */
class CurrencyTableSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Run the database seed.
     */
    public function run()
    {
        $this->disableForeignKeys();


        Currency::create([
            'name' => 'Afghan Afghani',
            'name_plural' => 'Afghan Afghanis',
            'country' => 'AFGHANISTAN',
            'country_code_iso3' => 'AFG',
            'symbol'  => '؋',
            'symbol_native' => 'Af',
            'code' => 'AFN',
            'rounding' => 0,
            'decimal_digits' => 0

        ]);

        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'ÅLAND ISLANDS',
            'country_code_iso3' => 'AFG',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 0

        ]);

        Currency::create([
            'name' => 'Albanian Lek',
            'name_plural' => 'Albanian lekë',
            'country' => 'ALBANIA',
            'country_code_iso3' => 'ALB',
            'symbol'  => 'Lek',
            'symbol_native' => 'Lek',
            'code' => 'ALL',
            'rounding' => 0,
            'decimal_digits' => 0

        ]);


        Currency::create([
            'name' => 'Algerian Dinar',
            'name_plural' => 'Algerian Dinars',
            'country' => 'AMERICAN SAMOA',
            'country_code_iso3' => 'DZA',
            'symbol'  => 'د.ج.‏',
            'symbol_native' => 'Lek',
            'code' => 'DZD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'US Dollar',
            'name_plural' => 'US Dollars',
            'country' => 'AMERICAN SAMOA',
            'country_code_iso3' => 'USA',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'USD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'ANDORRA',
            'country_code_iso3' => 'AND',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Kwanza',
            'name_plural' => 'Kwanzas',
            'country' => 'ANGOLA',
            'country_code_iso3' => 'AGO',
            'symbol'  => 'Kz',
            'symbol_native' => 'Kz',
            'code' => 'AOA',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'East Caribbean Dollar',
            'name_plural' => 'East Caribbean Dollars',
            'country' => 'ANGUILLA',
            'country_code_iso3' => 'AIA',
            'symbol'  => 'X$',
            'symbol_native' => 'X$',
            'code' => 'XCD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Argentine Peso',
            'name_plural' => 'Argentine Pesos',
            'country' => 'ARGENTINA',
            'country_code_iso3' => 'ARG',
            'symbol'  => 'AR$',
            'symbol_native' => '$',
            'code' => 'ARS',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'Armenian Dram',
            'name_plural' => 'Armenian Drams',
            'country' => 'ARMENIA',
            'country_code_iso3' => 'ARM',
            'symbol'  => 'AMD',
            'symbol_native' => 'դր.',
            'code' => 'AMD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Aruban Florin',
            'name_plural' => 'Aruban Florins',
            'country' => 'ARUBA',
            'country_code_iso3' => 'ABW',
            'symbol'  => 'ƒ',
            'symbol_native' => 'ƒ',
            'code' => 'AWG',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Australian Dollar',
            'name_plural' => 'Australian Dollars',
            'country' => 'AUSTRALIA',
            'country_code_iso3' => 'AUS',
            'symbol'  => 'AU$',
            'symbol_native' => '$',
            'code' => 'AUD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'AUSTRIA',
            'country_code_iso3' => 'AUT',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);

        Currency::create([
            'name' => 'Azerbaijani Manat',
            'name_plural' => 'Azerbaijani Manats',
            'country' => 'AZERBAIJAN',
            'country_code_iso3' => 'AZE',
            'symbol'  => '₼',
            'symbol_native' => '₼',
            'code' => 'AZN',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Bahamian Dollar',
            'name_plural' => 'Bahamian Dollars',
            'country' => 'BAHAMAS',
            'country_code_iso3' => 'BHS',
            'symbol'  => 'B$',
            'symbol_native' => 'B$',
            'code' => 'BSD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'Bahraini Dinar',
            'name_plural' => 'Bahraini Dinars',
            'country' => 'BAHRAIN',
            'country_code_iso3' => 'BHR',
            'symbol'  => 'BD',
            'symbol_native' => 'د.ب.',
            'code' => 'BHD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Bangladeshi Taka',
            'name_plural' => 'Bangladeshi Takas',
            'country' => 'BANGLADESH',
            'country_code_iso3' => 'BGD',
            'symbol'  => 'Tk',
            'symbol_native' => '৳',
            'code' => 'BDT',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Barbados Dollar',
            'name_plural' => 'Barbados Dollars',
            'country' => 'BARBADOS',
            'country_code_iso3' => 'BRB',
            'symbol'  => 'Bds$',
            'symbol_native' => '$',
            'code' => 'BBD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Belarussian Ruble',
            'name_plural' => 'Belarussian Rubles',
            'country' => 'BELARUS',
            'country_code_iso3' => 'BLR',
            'symbol'  => '‎Br',
            'symbol_native' => '‎Br',
            'code' => 'BYN',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'BELGIUM',
            'country_code_iso3' => 'BEL',
            'symbol'  => '‎€',
            'symbol_native' => '‎€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Belize Dollar',
            'name_plural' => 'Belize Dollars',
            'country' => 'BELIZE',
            'country_code_iso3' => 'BLZ',
            'symbol'  => '‎BZ$',
            'symbol_native' => '‎$',
            'code' => 'BZD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'CFA Franc BCEAO',
            'name_plural' => 'CFA francs BCEAO',
            'country' => 'BENIN',
            'country_code_iso3' => 'BEN',
            'symbol'  => 'CFA',
            'symbol_native' => '‎CFA',
            'code' => 'XOF',
            'rounding' => 0,
            'decimal_digits' => 0

        ]);

        Currency::create([
            'name' => 'Bermudian Dollar',
            'name_plural' => 'Bermudian Dollars',
            'country' => 'BERMUDA',
            'country_code_iso3' => 'BMU',
            'symbol'  => 'BD$',
            'symbol_native' => '‎$',
            'code' => 'BMD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Ngultrum',
            'name_plural' => 'Ngultrums',
            'country' => 'BHUTAN',
            'country_code_iso3' => 'BTN',
            'symbol'  => 'Nu',
            'symbol_native' => '‎Nu',
            'code' => 'BTN',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Indian Rupee',
            'name_plural' => 'Indian Rupees',
            'country' => 'BHUTAN',
            'country_code_iso3' => 'BHU',
            'symbol'  => 'Rs',
            'symbol_native' => '‎₹',
            'code' => 'INR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Bolivian Boliviano',
            'name_plural' => 'Bolivian Bolivianos',
            'country' => 'BOLIVIA',
            'country_code_iso3' => 'BOL',
            'symbol'  => '$b',
            'symbol_native' => '$b',
            'code' => 'BOB',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'Boliviano Mvdol',
            'name_plural' => 'Boliviano Mvdols',
            'country' => 'BOLIVIA',
            'country_code_iso3' => 'BOL',
            'symbol'  => '$b',
            'symbol_native' => '$b',
            'code' => 'BOV',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'US Dollar',
            'name_plural' => 'US Dollars',
            'country' => 'BONAIRE, SINT EUSTATIUS AND SABA',
            'country_code_iso3' => 'BQ',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'USD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);

        Currency::create([
            'name' => 'Convertible Mark',
            'name_plural' => 'Convertible Marks',
            'country' => 'BOSNIA AND HERZEGOVINA',
            'country_code_iso3' => 'BQ',
            'symbol'  => ' KM',
            'symbol_native' => ' KM',
            'code' => 'BAM',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Botswanan Pula',
            'name_plural' => 'Botswanan Pulas',
            'country' => 'BOTSWANA',
            'country_code_iso3' => 'BWA',
            'symbol'  => 'P',
            'symbol_native' => 'P',
            'code' => 'BWP',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Norwegian Krone',
            'name_plural' => 'Norwegian Krones',
            'country' => 'BOUVET ISLAND',
            'country_code_iso3' => 'BVT',
            'symbol'  => 'Nkr',
            'symbol_native' => 'kr',
            'code' => 'NOK',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Brazilian Real',
            'name_plural' => 'Brazilian Reals',
            'country' => 'BRAZIL',
            'country_code_iso3' => 'BRA',
            'symbol'  => 'R$',
            'symbol_native' => 'R$',
            'code' => 'BRL',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'US Dollar',
            'name_plural' => 'US Dollars',
            'country' => 'BRITISH INDIAN OCEAN TERRITORY',
            'country_code_iso3' => 'IOT',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'USD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);




        Currency::create([
            'name' => 'Brunei Dollar',
            'name_plural' => 'Brunei Dollars',
            'country' => 'BRUNEI DARUSSALAM',
            'country_code_iso3' => 'BRN',
            'symbol'  => 'BN$',
            'symbol_native' => '$',
            'code' => 'BND',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Bulgarian Lev',
            'name_plural' => 'Bulgarian Levs',
            'country' => 'BULGARIA',
            'country_code_iso3' => 'BGR',
            'symbol'  => 'BGN',
            'symbol_native' => 'лв',
            'code' => 'BGN',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'CFA Franc BCEAO',
            'name_plural' => 'CFA Francs BCEAO',
            'country' => 'BURKINA FASO',
            'country_code_iso3' => 'BFA',
            'symbol'  => 'CFA',
            'symbol_native' => 'CFA',
            'code' => 'XOF',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => '	Burundi Franc',
            'name_plural' => '	Burundi Francs',
            'country' => 'BURUNDI',
            'country_code_iso3' => 'BDI',
            'symbol'  => 'FBu',
            'symbol_native' => 'FBu',
            'code' => 'BIF',
            'rounding' => 0,
            'decimal_digits' => 0

        ]);


        Currency::create([
            'name' => 'Cabo Verde Escudo',
            'name_plural' => 'Cabo Verde Escudos',
            'country' => 'CABO VERDE',
            'country_code_iso3' => 'CPV',
            'symbol'  => 'Esc',
            'symbol_native' => '$',
            'code' => 'CVE',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Cambodian Riel',
            'name_plural' => 'Cambodian Riels',
            'country' => 'CAMBODIA',
            'country_code_iso3' => 'KHM',
            'symbol'  => 'KHR',
            'symbol_native' => '៛',
            'code' => 'KHR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'CFA Franc BEAC',
            'name_plural' => 'CFA Francs BEAC',
            'country' => 'CAMEROON',
            'country_code_iso3' => 'CMR',
            'symbol'  => 'FCFA',
            'symbol_native' => 'FCFA',
            'code' => 'XAF',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Canadian Dollar',
            'name_plural' => 'Canadian Dollars',
            'country' => 'CANADA',
            'country_code_iso3' => 'CAN',
            'symbol'  => 'CA$',
            'symbol_native' => '$',
            'code' => 'CAD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Cayman Islands Dollar',
            'name_plural' => 'Cayman Islands Dollars',
            'country' => 'CAYMAN ISLANDS',
            'country_code_iso3' => 'CYM',
            'symbol'  => 'CI$',
            'symbol_native' => '$',
            'code' => 'KYD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'CFA Franc BEAC',
            'name_plural' => 'CFA Francs BEAC',
            'country' => 'CENTRAL AFRICAN REPUBLIC',
            'country_code_iso3' => 'CAF',
            'symbol'  => 'FCFA',
            'symbol_native' => 'FCFA',
            'code' => 'XAF',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'CFA Franc BEAC',
            'name_plural' => 'CFA Francs BEAC',
            'country' => 'CHAD',
            'country_code_iso3' => 'TCD',
            'symbol'  => 'FCFA',
            'symbol_native' => 'FCFA',
            'code' => 'XAF',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);




        Currency::create([
            'name' => 'Unidad de Fomento',
            'name_plural' => 'Unidad de Fomentos',
            'country' => 'CHILE',
            'country_code_iso3' => 'CHL',
            'symbol'  => 'UF',
            'symbol_native' => 'UF',
            'code' => 'CLF',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Chilean Peso',
            'name_plural' => 'Chilean Pesos',
            'country' => 'CHILE',
            'country_code_iso3' => 'CHL',
            'symbol'  => 'CLF',
            'symbol_native' => 'CLF',
            'code' => 'CLP',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Yuan Renminbi',
            'name_plural' => 'Yuan',
            'country' => 'CHINA',
            'country_code_iso3' => 'CHN',
            'symbol'  => '¥',
            'symbol_native' => '¥',
            'code' => 'CNY',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Australian Dollar',
            'name_plural' => 'Australian Dollars',
            'country' => 'CHRISTMAS ISLAND',
            'country_code_iso3' => 'CXR',
            'symbol'  => 'A$',
            'symbol_native' => '$',
            'code' => 'AUD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Australian Dollar',
            'name_plural' => 'Australian Dollars',
            'country' => 'COCOS (KEELING) ISLANDS',
            'country_code_iso3' => 'CCK',
            'symbol'  => 'A$',
            'symbol_native' => '$',
            'code' => 'AUD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Colombian Peso',
            'name_plural' => 'Colombian Pesos',
            'country' => 'COLOMBIA',
            'country_code_iso3' => 'COL',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'COP',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Unidad de Valor Real',
            'name_plural' => 'Unidad de Valor Reals',
            'country' => 'COLOMBIA',
            'country_code_iso3' => 'COL',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'COU',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => '	Comoro Franc',
            'name_plural' => '	Comoro Francs',
            'country' => 'COMOROS',
            'country_code_iso3' => 'COM',
            'symbol'  => 'CF',
            'symbol_native' => 'CF',
            'code' => 'KMF',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'Congolese Franc',
            'name_plural' => 'Congolese Francs',
            'country' => 'THE DEMOCRATIC REPUBLIC OF CONGO',
            'country_code_iso3' => 'COD',
            'symbol'  => 'FC',
            'symbol_native' => 'FC',
            'code' => 'CDF',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'CFA Franc BEAC',
            'name_plural' => 'CFA Francs BEAC',
            'country' => 'CONGO',
            'country_code_iso3' => 'COG',
            'symbol'  => 'FCFA',
            'symbol_native' => 'FCFA',
            'code' => 'XAF',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'New Zealand Dollar',
            'name_plural' => 'New Zealand Dollars',
            'country' => 'COOK ISLANDS',
            'country_code_iso3' => 'COK',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'NZD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Costa Rican Colon',
            'name_plural' => 'Costa Rican Colons',
            'country' => 'COSTA RICA',
            'country_code_iso3' => 'CRI',
            'symbol'  => '₡',
            'symbol_native' => '₡',
            'code' => 'CRC',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => '	Kuna',
            'name_plural' => '	Kunas',
            'country' => 'CROATIA',
            'country_code_iso3' => 'HRV',
            'symbol'  => 'kn',
            'symbol_native' => 'kn',
            'code' => 'CRC',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Peso Convertible',
            'name_plural' => 'Peso Convertibles',
            'country' => 'CUBA',
            'country_code_iso3' => 'CUB',
            'symbol'  => 'CUC',
            'symbol_native' => 'CUC$',
            'code' => 'CUC',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Cuban Peso',
            'name_plural' => 'Cuban Pesos',
            'country' => 'CUBA',
            'country_code_iso3' => 'CUB',
            'symbol'  => '$MN',
            'symbol_native' => '₱',
            'code' => 'CUP',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Netherlands Antillean Guilder',
            'name_plural' => 'Netherlands Antillean Guilders',
            'country' => 'CURAÇAO',
            'country_code_iso3' => 'CUW',
            'symbol'  => 'ƒ',
            'symbol_native' => 'ƒ',
            'code' => 'ANG',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'CYPRUS',
            'country_code_iso3' => 'CYP',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'CZECH REPUBLIC',
            'country_code_iso3' => 'CZE',
            'symbol'  => 'Kč',
            'symbol_native' => 'Kč',
            'code' => 'CZK',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'CFA Franc BCEAO',
            'name_plural' => 'CFA Francs BCEAO',
            'country' => 'CÔTE D\'IVOIRE',
            'country_code_iso3' => 'CIV',
            'symbol'  => 'CFA',
            'symbol_native' => 'CFA',
            'code' => 'XOF',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Danish Krone',
            'name_plural' => 'Danish Krones',
            'country' => 'DENMARK',
            'country_code_iso3' => 'DNK',
            'symbol'  => 'Kr.',
            'symbol_native' => 'Kr.',
            'code' => 'DKK',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Djibouti Franc',
            'name_plural' => 'Djibouti Francs',
            'country' => 'DJIBOUTI',
            'country_code_iso3' => 'DJI',
            'symbol'  => 'Fdj',
            'symbol_native' => 'Fdj',
            'code' => 'DJF',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'East Caribbean Dollar',
            'name_plural' => 'East Caribbean Dollars',
            'country' => 'DOMINICA',
            'country_code_iso3' => 'DMA',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'XCD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Dominican Peso',
            'name_plural' => 'Dominican Pesos',
            'country' => 'DOMINICAN REPUBLIC',
            'country_code_iso3' => 'DOM',
            'symbol'  => 'RD$',
            'symbol_native' => '$',
            'code' => 'DOP',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'US Dollar',
            'name_plural' => 'US Dollars',
            'country' => 'ECUADOR',
            'country_code_iso3' => 'ECU',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'USD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Egyptian Pound',
            'name_plural' => 'Egyptian Pounds',
            'country' => 'EGYPT',
            'country_code_iso3' => 'EGY',
            'symbol'  => 'E£',
            'symbol_native' => 'E£',
            'code' => 'EGP',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'El Salvador Colon',
            'name_plural' => 'El Salvador Colons',
            'country' => 'EL SALVADOR',
            'country_code_iso3' => 'SLV',
            'symbol'  => 'SVC',
            'symbol_native' => 'SVC',
            'code' => 'SVC',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'US Dollar',
            'name_plural' => 'US Dollars',
            'country' => 'EL SALVADOR',
            'country_code_iso3' => 'SLV',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'USD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'CFA Franc BEAC',
            'name_plural' => 'CFA Francs BEAC',
            'country' => 'EQUATORIAL GUINEA',
            'country_code_iso3' => 'GNQ ',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'XAF',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Nakfa',
            'name_plural' => 'Nakfas',
            'country' => 'ERITREA',
            'country_code_iso3' => 'ERI',
            'symbol'  => 'Nkf',
            'symbol_native' => 'Nkf',
            'code' => 'ERN',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'ESTONIA',
            'country_code_iso3' => 'EST',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Ethiopian Birr',
            'name_plural' => 'Ethiopian Birrs',
            'country' => 'ETHIOPIA',
            'country_code_iso3' => 'ETH',
            'symbol'  => 'Br',
            'symbol_native' => 'ብር',
            'code' => 'ETB',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'EUROPEAN UNION',
            'country_code_iso3' => 'EU',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);

        Currency::create([
            'name' => 'Falkland Islands Pound',
            'name_plural' => 'Falkland Islands Pounds',
            'country' => 'Falkland Islands (Malvinas)',
            'country_code_iso3' => 'EU',
            'symbol'  => '£',
            'symbol_native' => '£',
            'code' => 'FKP',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Danish Krone',
            'name_plural' => 'Danish Krones',
            'country' => 'FAROE ISLANDS',
            'country_code_iso3' => 'FRO',
            'symbol'  => 'Kr.',
            'symbol_native' => 'Kr.',
            'code' => 'DKK',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'FINLAND',
            'country_code_iso3' => 'FIN',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);

        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'FRANCE',
            'country_code_iso3' => 'FRA',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'FRENCH GUIANA',
            'country_code_iso3' => 'GUF',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'CFP Franc',
            'name_plural' => 'CFP Francs',
            'country' => 'FRENCH POLYNESIA',
            'country_code_iso3' => 'PYF',
            'symbol'  => '₣',
            'symbol_native' => '₣',
            'code' => 'XPF',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'FRENCH SOUTHERN TERRITORIES',
            'country_code_iso3' => 'ATF',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'CFA Franc BEAC',
            'name_plural' => 'CFA Francs BEAC',
            'country' => 'GABON',
            'country_code_iso3' => 'GAB',
            'symbol'  => 'FCFA',
            'symbol_native' => 'FCFA',
            'code' => 'XAF',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => '	Dalasi',
            'name_plural' => '	Dalasies',
            'country' => 'GAMBIA',
            'country_code_iso3' => 'GMB',
            'symbol'  => 'D',
            'symbol_native' => 'D',
            'code' => 'GMD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Lari',
            'name_plural' => 'Laries',
            'country' => 'GEORGIA',
            'country_code_iso3' => 'GEO',
            'symbol'  => 'GEL',
            'symbol_native' => 'ლ',
            'code' => 'GEL',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'GERMANY',
            'country_code_iso3' => 'DEU',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Ghana Cedi',
            'name_plural' => 'Ghana Cedis',
            'country' => 'GHANA',
            'country_code_iso3' => 'GHA',
            'symbol'  => '‎GH₵',
            'symbol_native' => 'GH¢',
            'code' => 'GHS',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Gibraltar Pound',
            'name_plural' => 'Gibraltar Pounds',
            'country' => 'GIBRALTAR',
            'country_code_iso3' => 'GIB',
            'symbol'  => '‎£',
            'symbol_native' => '£',
            'code' => 'GIP',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'GREECE',
            'country_code_iso3' => 'GRC',
            'symbol'  => '‎€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Danish Krone',
            'name_plural' => 'Danish Krones',
            'country' => 'GREENLAND',
            'country_code_iso3' => 'GRL',
            'symbol'  => '‎Kr.',
            'symbol_native' => 'Kr.',
            'code' => 'DKK',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'East Caribbean Dollar',
            'name_plural' => 'East Caribbean Dollars',
            'country' => 'GRENADA',
            'country_code_iso3' => 'GRD',
            'symbol'  => '‎$',
            'symbol_native' => '$',
            'code' => 'XCD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'GUADELOUPE',
            'country_code_iso3' => 'GLP',
            'symbol'  => '‎€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'US Dollar',
            'name_plural' => 'US Dollars',
            'country' => 'GUAM',
            'country_code_iso3' => 'GUM',
            'symbol'  => '‎$',
            'symbol_native' => '$',
            'code' => 'USD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Quetzal',
            'name_plural' => 'Quetzals',
            'country' => 'GUATEMALA',
            'country_code_iso3' => 'GTM',
            'symbol'  => '‎Q',
            'symbol_native' => 'Q',
            'code' => 'GTQ',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Pound Sterling',
            'name_plural' => 'Pound Sterlings',
            'country' => 'GUERNSEY',
            'country_code_iso3' => 'GGY',
            'symbol'  => '‎£',
            'symbol_native' => '£',
            'code' => 'GBP',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Guinea Franc',
            'name_plural' => 'Guinea Francs',
            'country' => 'GUINEA',
            'country_code_iso3' => 'GIN',
            'symbol'  => '‎FG',
            'symbol_native' => 'FG',
            'code' => 'GNF',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'CFA Franc BCEAO',
            'name_plural' => 'CFA Francs BCEAO',
            'country' => 'GUINEA-BISSAU',
            'country_code_iso3' => 'GNB',
            'symbol'  => '‎CFA',
            'symbol_native' => 'CFA',
            'code' => 'XOF',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Guyana Dollar',
            'name_plural' => 'Guyana Dollars',
            'country' => 'GUYANA',
            'country_code_iso3' => 'GUY',
            'symbol'  => '‎CFA',
            'symbol_native' => 'CFA',
            'code' => 'GYD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Gourde',
            'name_plural' => 'Gourdes',
            'country' => 'HAITI',
            'country_code_iso3' => 'HTI',
            'symbol'  => '‎G',
            'symbol_native' => 'G',
            'code' => 'HTG',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'US Dollar',
            'name_plural' => 'US Dollars',
            'country' => 'HAITI',
            'country_code_iso3' => 'HTI',
            'symbol'  => '‎$',
            'symbol_native' => '$',
            'code' => 'USD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Australian Dollar',
            'name_plural' => 'Australian Dollars',
            'country' => 'HEARD ISLAND AND McDONALD ISLANDS',
            'country_code_iso3' => 'HMD',
            'symbol'  => 'A‎$',
            'symbol_native' => 'A$',
            'code' => 'AUD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Australian Dollar',
            'name_plural' => 'Australian Dollars',
            'country' => 'HEARD ISLAND AND McDONALD ISLANDS',
            'country_code_iso3' => 'HMD',
            'symbol'  => 'A‎$',
            'symbol_native' => 'A$',
            'code' => 'AUD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'HOLY SEE (Vatican City State)',
            'country_code_iso3' => 'HMD',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'Lempira',
            'name_plural' => 'Lempiras',
            'country' => 'HONDURAS',
            'country_code_iso3' => 'HMD',
            'symbol'  => 'L',
            'symbol_native' => 'L',
            'code' => 'HNL',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => '	Hong Kong Dollar',
            'name_plural' => '	Hong Kong Dollars',
            'country' => 'HONG KONG',
            'country_code_iso3' => 'HKG',
            'symbol'  => 'HK$',
            'symbol_native' => 'HK$',
            'code' => 'HKD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Forint',
            'name_plural' => 'Forints',
            'country' => 'HUNGARY',
            'country_code_iso3' => 'HUN',
            'symbol'  => 'Ft',
            'symbol_native' => 'Ft',
            'code' => 'HUF',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Iceland Krona',
            'name_plural' => 'Iceland Kronas',
            'country' => 'ICELAND',
            'country_code_iso3' => 'ISL',
            'symbol'  => 'kr',
            'symbol_native' => 'Íkr',
            'code' => 'ISK',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Iceland Krona',
            'name_plural' => 'Iceland Kronas',
            'country' => 'ICELAND',
            'country_code_iso3' => 'ISL',
            'symbol'  => 'kr',
            'symbol_native' => 'Íkr',
            'code' => 'ISK',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Indian Rupee',
            'name_plural' => 'Indian Rupees',
            'country' => 'INDIA',
            'country_code_iso3' => 'IND',
            'symbol'  => '₹',
            'symbol_native' => '₹',
            'code' => 'INR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'Rupiah',
            'name_plural' => 'Rupiahs',
            'country' => 'INDONESIA',
            'country_code_iso3' => 'IDN',
            'symbol'  => 'Rp',
            'symbol_native' => 'Rp',
            'code' => 'IDR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Iranian Rial',
            'name_plural' => 'Iranian Rials',
            'country' => 'IRAN',
            'country_code_iso3' => 'IRN',
            'symbol'  => '﷼',
            'symbol_native' => '﷼',
            'code' => 'IRR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Iraqi Dinar',
            'name_plural' => 'Iraqi Dinars',
            'country' => 'IRAQ',
            'country_code_iso3' => 'IRQ',
            'symbol'  => 'ع.د',
            'symbol_native' => 'ع.د',
            'code' => 'IQD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'IRELAND',
            'country_code_iso3' => 'IRL',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Pound Sterling',
            'name_plural' => 'Pound Sterlings',
            'country' => 'ISLE OF MAN',
            'country_code_iso3' => 'IMN',
            'symbol'  => '£',
            'symbol_native' => '£',
            'code' => 'GBP',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'New Israeli Sheqel',
            'name_plural' => 'New Israeli Sheqels',
            'country' => 'ISRAEL',
            'country_code_iso3' => 'ISR',
            'symbol'  => '₪',
            'symbol_native' => '₪',
            'code' => 'ILS',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'ITALY',
            'country_code_iso3' => 'ITA',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Jamaican Dollar',
            'name_plural' => 'Jamaican Dollars',
            'country' => 'JAMAICA',
            'country_code_iso3' => 'JAM ',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'JMD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Yen',
            'name_plural' => 'Yen',
            'country' => 'JAPAN',
            'country_code_iso3' => 'JPN ',
            'symbol'  => '¥',
            'symbol_native' => '¥',
            'code' => 'JPY',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Pound Sterling',
            'name_plural' => 'Pound Sterlings',
            'country' => 'JERSEY',
            'country_code_iso3' => 'JEY',
            'symbol'  => '£',
            'symbol_native' => '£',
            'code' => 'GBP',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Jordanian Dinar',
            'name_plural' => 'Jordanian Dinars',
            'country' => 'JORDAN',
            'country_code_iso3' => 'JOR',
            'symbol'  => 'د.ا',
            'symbol_native' => 'د.ا',
            'code' => 'JOD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Tenge',
            'name_plural' => 'Tenge',
            'country' => 'KAZAKHSTAN',
            'country_code_iso3' => 'KAZ',
            'symbol'  => '₸',
            'symbol_native' => '₸',
            'code' => 'KZT',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Kenyan Shilling',
            'name_plural' => 'Kenyan Shillings',
            'country' => 'KENYA',
            'country_code_iso3' => 'KEN',
            'symbol'  => 'KSh',
            'symbol_native' => '/=',
            'code' => 'KES',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Australian Dollar',
            'name_plural' => 'Australian Dollars',
            'country' => 'KIRIBATI',
            'country_code_iso3' => 'KIR',
            'symbol'  => 'A$',
            'symbol_native' => 'A$',
            'code' => 'AUD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'North Korean Won',
            'name_plural' => 'North Korean Wons',
            'country' => 'NORTH KOREA',
            'country_code_iso3' => 'PRK',
            'symbol'  => '₩',
            'symbol_native' => '₩',
            'code' => 'KPW',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Korean Won',
            'name_plural' => 'Korean Wons',
            'country' => 'KOREA',
            'country_code_iso3' => 'KOR',
            'symbol'  => '₩',
            'symbol_native' => '₩',
            'code' => 'KRW',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Kuwaiti Dinar',
            'name_plural' => 'Kuwaiti Dinars',
            'country' => 'KUWAIT',
            'country_code_iso3' => 'KWT',
            'symbol'  => 'KD',
            'symbol_native' => '‎د.ك',
            'code' => 'KWD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Som',
            'name_plural' => 'Soms',
            'country' => 'KYRGYZSTAN',
            'country_code_iso3' => 'KGZ',
            'symbol'  => 'Лв',
            'symbol_native' => '‎Лв',
            'code' => 'KGS ',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Kip',
            'name_plural' => 'Kips',
            'country' => 'LAO PEOPLE’S DEMOCRATIC REPUBLIC',
            'country_code_iso3' => 'LAO',
            'symbol'  => '₭N',
            'symbol_native' => '‎₭N',
            'code' => 'LAK ',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'LATVIA',
            'country_code_iso3' => 'LVA',
            'symbol'  => '£',
            'symbol_native' => '‎£',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Lebanese Pound',
            'name_plural' => 'Lebanese Pounds',
            'country' => 'LEBANON',
            'country_code_iso3' => 'LBN',
            'symbol'  => 'ل.ل.‎',
            'symbol_native' => '‎ل.ل.‎',
            'code' => 'LBP',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Loti',
            'name_plural' => 'Lotis',
            'country' => 'LESOTHO',
            'country_code_iso3' => 'LSO',
            'symbol'  => 'L‎',
            'symbol_native' => '‎L‎',
            'code' => 'LSL',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Rand',
            'name_plural' => 'Rands',
            'country' => 'LESOTHO',
            'country_code_iso3' => 'LSO',
            'symbol'  => 'R‎',
            'symbol_native' => '‎R‎',
            'code' => 'ZAR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'Liberian Dollar',
            'name_plural' => 'Liberian Dollars',
            'country' => 'LIBERIA',
            'country_code_iso3' => 'LBR',
            'symbol'  => 'L$',
            'symbol_native' => '‎L$',
            'code' => 'LRD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Liberian Dollar',
            'name_plural' => 'Liberian Dollars',
            'country' => 'LIBYA',
            'country_code_iso3' => 'LBY',
            'symbol'  => 'LD',
            'symbol_native' => '‎ل.د',
            'code' => 'LYD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'Swiss Franc',
            'name_plural' => 'Swiss Francs',
            'country' => 'LIECHTENSTEIN',
            'country_code_iso3' => 'LIE',
            'symbol'  => 'CHf',
            'symbol_native' => 'CHf',
            'code' => 'CHF',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'LITHUANIA',
            'country_code_iso3' => 'LTU',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'LUXEMBOURG',
            'country_code_iso3' => 'LUX',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Pataca',
            'name_plural' => 'Patacas',
            'country' => 'MACAO',
            'country_code_iso3' => 'MAC',
            'symbol'  => 'MOP$',
            'symbol_native' => 'MOP$',
            'code' => 'MOP',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'Malagasy Ariary',
            'name_plural' => 'Malagasy Ariarys',
            'country' => 'MADAGASCAR',
            'country_code_iso3' => 'MDG',
            'symbol'  => 'Ar',
            'symbol_native' => 'Ar',
            'code' => 'MGA',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Kwacha',
            'name_plural' => 'Kwachas',
            'country' => 'MALAWI',
            'country_code_iso3' => 'MWI',
            'symbol'  => 'ZK',
            'symbol_native' => 'ZK',
            'code' => 'MWK',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Kwacha',
            'name_plural' => 'Kwachas',
            'country' => 'MALAWI',
            'country_code_iso3' => 'MWI',
            'symbol'  => 'ZK',
            'symbol_native' => 'ZK',
            'code' => 'MWK',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Malaysian Ringgit',
            'name_plural' => 'Malaysian Ringgits',
            'country' => 'MALAYSIA',
            'country_code_iso3' => 'MYS',
            'symbol'  => 'RM',
            'symbol_native' => 'RM',
            'code' => 'MYR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Rufiyaa',
            'name_plural' => 'Rufiyaas',
            'country' => 'MALDIVES',
            'country_code_iso3' => 'MDV',
            'symbol'  => 'ރ',
            'symbol_native' => 'ރ',
            'code' => 'MVR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'CFA Franc BCEAO',
            'name_plural' => 'CFA Francs BCEAO',
            'country' => 'MALI',
            'country_code_iso3' => 'MLI',
            'symbol'  => 'CFA',
            'symbol_native' => 'CFA',
            'code' => 'XOF',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'MALTA',
            'country_code_iso3' => 'MLT',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'US Dollar',
            'name_plural' => 'US Dollars',
            'country' => 'MARSHALL ISLANDS',
            'country_code_iso3' => 'MHL',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'USD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'MARTINIQUE',
            'country_code_iso3' => 'MTQ',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Ouguiya',
            'name_plural' => 'Ouguiyas',
            'country' => 'MAURITANIA',
            'country_code_iso3' => 'MRT',
            'symbol'  => 'MRU',
            'symbol_native' => 'MRU',
            'code' => 'MRU',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Mauritius Rupee',
            'name_plural' => 'Mauritius Rupees',
            'country' => 'MAURITIUS',
            'country_code_iso3' => 'MUS',
            'symbol'  => '₨',
            'symbol_native' => '₨',
            'code' => 'MUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'MAYOTTE',
            'country_code_iso3' => 'MYT',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);

        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'MAYOTTE',
            'country_code_iso3' => 'MYT',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Mexican Peso',
            'name_plural' => 'Mexican Pesos',
            'country' => 'MEXICO',
            'country_code_iso3' => 'MEX',
            'symbol'  => 'Mex$',
            'symbol_native' => '$',
            'code' => 'MXN',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'US Dollar',
            'name_plural' => 'US Dollars',
            'country' => 'MICRONESIA',
            'country_code_iso3' => 'FSM',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'USD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Moldovan Leu',
            'name_plural' => 'Moldovan Leus',
            'country' => 'MOLDOVA',
            'country_code_iso3' => 'MDL',
            'symbol'  => 'L',
            'symbol_native' => 'L',
            'code' => 'MDL',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'MONACO',
            'country_code_iso3' => 'MCO',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Tugrik',
            'name_plural' => 'Tugriks',
            'country' => 'MONGOLIA',
            'country_code_iso3' => 'MNG',
            'symbol'  => '₮',
            'symbol_native' => '₮',
            'code' => 'MNT',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'MONTENEGRO',
            'country_code_iso3' => 'MNE',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'East Caribbean Dollar',
            'name_plural' => 'East Caribbean Dollars',
            'country' => 'MONTSERRAT',
            'country_code_iso3' => 'MSR',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'XCD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'Moroccan Dirham',
            'name_plural' => 'Moroccan Dirhams',
            'country' => 'MOROCCO',
            'country_code_iso3' => 'MAR',
            'symbol'  => 'MAD',
            'symbol_native' => 'MAD',
            'code' => 'MAD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Mozambique Metical',
            'name_plural' => 'Mozambique Meticals',
            'country' => 'MOZAMBIQUE',
            'country_code_iso3' => 'MOZ',
            'symbol'  => 'MT',
            'symbol_native' => 'MT',
            'code' => 'MZN',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'Kyat',
            'name_plural' => 'Kyats',
            'country' => 'MYANMAR',
            'country_code_iso3' => 'MMR',
            'symbol'  => 'K',
            'symbol_native' => 'K',
            'code' => 'MMK',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'Namibia Dollar',
            'name_plural' => 'Namibia Dollars',
            'country' => 'NAMIBIA',
            'country_code_iso3' => 'NAM',
            'symbol'  => 'N$',
            'symbol_native' => 'N$',
            'code' => 'NAD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Rand',
            'name_plural' => 'Rands',
            'country' => 'NAMIBIA',
            'country_code_iso3' => 'NAM',
            'symbol'  => 'R',
            'symbol_native' => 'R',
            'code' => 'ZAR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Australian Dollar',
            'name_plural' => 'Australian Dollars',
            'country' => 'NAURU',
            'country_code_iso3' => 'NRU',
            'symbol'  => 'A$',
            'symbol_native' => 'A$',
            'code' => 'AUD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);

        Currency::create([
            'name' => 'Nepalese Rupee',
            'name_plural' => 'Nepalese Rupees',
            'country' => 'NEPAL',
            'country_code_iso3' => 'NPL',
            'symbol'  => 'Re.',
            'symbol_native' => 'रू',
            'code' => 'NPR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'NETHERLANDS',
            'country_code_iso3' => 'NLD',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'CFP Franc',
            'name_plural' => 'CFP Francs',
            'country' => 'NEW CALEDONIA',
            'country_code_iso3' => 'NCL',
            'symbol'  => '₣',
            'symbol_native' => '₣',
            'code' => 'XPF',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'New Zealand Dollar',
            'name_plural' => 'New Zealand Dollars',
            'country' => 'NEW ZEALAND',
            'country_code_iso3' => 'NZL',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'NZD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Cordoba Oro',
            'name_plural' => 'Cordoba Oros',
            'country' => 'NICARAGUA',
            'country_code_iso3' => 'NIC',
            'symbol'  => 'C$',
            'symbol_native' => 'C$',
            'code' => 'NIO',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'CFA Franc BCEAO',
            'name_plural' => 'CFA Francs BCEAO',
            'country' => 'NIGER',
            'country_code_iso3' => 'NER',
            'symbol'  => 'CFA',
            'symbol_native' => 'CFA',
            'code' => 'XOF',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Naira',
            'name_plural' => 'Nairas',
            'country' => 'NIGERIA',
            'country_code_iso3' => 'NGA',
            'symbol'  => '₦',
            'symbol_native' => '₦',
            'code' => 'NGN',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'New Zealand Dollar',
            'name_plural' => 'New Zealand Dollars',
            'country' => 'NIUE',
            'country_code_iso3' => 'NIU',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'NZD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Australian Dollar',
            'name_plural' => 'Australian Dollars',
            'country' => 'NORFOLK ISLAND',
            'country_code_iso3' => 'NFK',
            'symbol'  => 'A$',
            'symbol_native' => 'A$',
            'code' => 'AUD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'US Dollar',
            'name_plural' => 'US Dollars',
            'country' => 'NORTHERN MARIANA ISLANDS',
            'country_code_iso3' => 'MNP',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'USD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Norwegian Krone',
            'name_plural' => 'Norwegian Krones',
            'country' => 'NORWAY',
            'country_code_iso3' => 'NOR',
            'symbol'  => 'kr',
            'symbol_native' => 'kr',
            'code' => 'NOK',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Rial Omani',
            'name_plural' => 'Rial Omanis',
            'country' => 'OMAN',
            'country_code_iso3' => 'OMN',
            'symbol'  => 'ر.ع.',
            'symbol_native' => 'ر.ع.',
            'code' => 'OMR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => '	Pakistan Rupee',
            'name_plural' => '	Pakistan Rupees',
            'country' => 'PAKISTAN',
            'country_code_iso3' => 'PAK',
            'symbol'  => '₨',
            'symbol_native' => '₨',
            'code' => 'PKR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'US Dollar',
            'name_plural' => 'US Dollars',
            'country' => 'PALAU',
            'country_code_iso3' => 'PLW',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'USD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'US Dollar',
            'name_plural' => 'US Dollars',
            'country' => 'PANAMA',
            'country_code_iso3' => 'PAN',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'USD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Balboa',
            'name_plural' => 'Balboas',
            'country' => 'PANAMA',
            'country_code_iso3' => 'PAN',
            'symbol'  => 'B/.',
            'symbol_native' => 'B/.',
            'code' => 'PAB',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'Kina',
            'name_plural' => 'Kinas',
            'country' => 'PAPUA NEW GUINEA',
            'country_code_iso3' => 'PNG',
            'symbol'  => 'K',
            'symbol_native' => 'K',
            'code' => 'PGK',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'Guarani',
            'name_plural' => 'Guaranis',
            'country' => 'PARAGUAY',
            'country_code_iso3' => 'PRY',
            'symbol'  => '₲',
            'symbol_native' => '₲',
            'code' => 'PYG',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Nuevo Sol',
            'name_plural' => 'Nuevo Sols',
            'country' => 'PERU',
            'country_code_iso3' => 'PER',
            'symbol'  => 'S/',
            'symbol_native' => 'S/',
            'code' => 'PEN',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Philippine Peso',
            'name_plural' => 'Philippine Pesos',
            'country' => 'PHILIPPINES',
            'country_code_iso3' => 'PHL',
            'symbol'  => '₱',
            'symbol_native' => '₱',
            'code' => 'PHP',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'New Zealand Dollar',
            'name_plural' => 'New Zealand Dollars',
            'country' => 'PITCAIRN',
            'country_code_iso3' => 'PCN',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'NZD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Zloty',
            'name_plural' => 'Zloty',
            'country' => 'POLAND',
            'country_code_iso3' => 'POL',
            'symbol'  => 'zł',
            'symbol_native' => 'zł',
            'code' => 'PLN',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'PORTUGAL',
            'country_code_iso3' => 'PRT',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => '	US Dollar',
            'name_plural' => '	US Dollars',
            'country' => 'PUERTO RICO',
            'country_code_iso3' => 'PRT',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'USD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Qatari Rial',
            'name_plural' => 'Qatari Rials',
            'country' => 'QATAR',
            'country_code_iso3' => 'QAT',
            'symbol'  => 'QR',
            'symbol_native' => 'ر.ق',
            'code' => 'QAR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Denar',
            'name_plural' => 'Denars',
            'country' => 'MACEDONIA',
            'country_code_iso3' => 'MKD',
            'symbol'  => 'ع.د',
            'symbol_native' => 'ع.د',
            'code' => 'MKD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'Romanian Leu',
            'name_plural' => 'Romanian Leus',
            'country' => 'ROMANIA',
            'country_code_iso3' => 'ROU',
            'symbol'  => 'lei',
            'symbol_native' => 'lei',
            'code' => 'RON',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Russian Ruble',
            'name_plural' => 'Russian Rubles',
            'country' => 'RUSSIAN FEDERATION',
            'country_code_iso3' => 'RUS',
            'symbol'  => 'RUB',
            'symbol_native' => 'RUB',
            'code' => 'RUB',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Rwanda Franc',
            'name_plural' => 'Rwanda Francs',
            'country' => 'RWANDA',
            'country_code_iso3' => 'RWA',
            'symbol'  => 'R₣',
            'symbol_native' => 'R₣',
            'code' => 'RWF',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'RÉUNION',
            'country_code_iso3' => 'REU',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'SAINT BARTHÉLEMY',
            'country_code_iso3' => 'BLM',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Saint Helena Pound',
            'name_plural' => 'Saint Helena Pounds',
            'country' => 'SAINT HELENA, ASCENSION AND TRISTAN DA CUNHA',
            'country_code_iso3' => 'SHN',
            'symbol'  => '£',
            'symbol_native' => '£',
            'code' => 'SHP',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'East Caribbean Dollar',
            'name_plural' => 'East Caribbean Dollars',
            'country' => 'SAINT KITTS AND NEVIS',
            'country_code_iso3' => 'KNA',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'XCD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'East Caribbean Dollar',
            'name_plural' => 'East Caribbean Dollars',
            'country' => 'SAINT LUCIA',
            'country_code_iso3' => 'LCA',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'XCD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'SAINT MARTIN',
            'country_code_iso3' => 'MAF ',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'SAINT PIERRE AND MIQUELON',
            'country_code_iso3' => 'SPM',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'East Caribbean Dollar',
            'name_plural' => 'East Caribbean Dollars',
            'country' => 'SAINT VINCENT AND THE GRENADINES',
            'country_code_iso3' => 'VCT',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'XCD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'East Caribbean Dollar',
            'name_plural' => 'East Caribbean Dollars',
            'country' => 'SAMOA',
            'country_code_iso3' => 'WSM',
            'symbol'  => 'WS$',
            'symbol_native' => 'WS$',
            'code' => 'WST',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => '	Euro',
            'name_plural' => '	Euros',
            'country' => 'SAN MARINO',
            'country_code_iso3' => 'SMR',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'Dobra',
            'name_plural' => 'Dobras',
            'country' => 'SAO TOME AND PRINCIPE',
            'country_code_iso3' => 'STP',
            'symbol'  => 'Db',
            'symbol_native' => 'Db',
            'code' => 'STN',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'Saudi Riyala',
            'name_plural' => 'Saudi Riyalas',
            'country' => 'SAUDI ARABIA',
            'country_code_iso3' => 'SAU',
            'symbol'  => 'SR',
            'symbol_native' => '﷼‎',
            'code' => 'SAR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'CFA Franc BCEAO',
            'name_plural' => 'CFA Francs BCEAO',
            'country' => 'SENEGAL',
            'country_code_iso3' => 'SEN ',
            'symbol'  => 'CFA',
            'symbol_native' => 'CFA‎',
            'code' => 'XOF',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => '	Serbian Dinar',
            'name_plural' => '	Serbian Dinar',
            'country' => 'SERBIA',
            'country_code_iso3' => 'SRB',
            'symbol'  => 'din',
            'symbol_native' => 'din‎',
            'code' => 'RSD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Seychelles Rupee',
            'name_plural' => 'Seychelles Rupee',
            'country' => 'SEYCHELLES',
            'country_code_iso3' => 'SYC ',
            'symbol'  => 'SR',
            'symbol_native' => 'SR‎',
            'code' => 'SCR	',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => 'Leone',
            'name_plural' => 'Leone',
            'country' => 'SIERRA LEONE',
            'country_code_iso3' => 'SLE ',
            'symbol'  => 'Le',
            'symbol_native' => 'Le‎',
            'code' => 'SLL	',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Singapore Dollar',
            'name_plural' => 'Singapore Dollars',
            'country' => 'SINGAPORE',
            'country_code_iso3' => 'SGP',
            'symbol'  => 'S$',
            'symbol_native' => 'S$‎',
            'code' => 'SGD	',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'SLOVAKIA',
            'country_code_iso3' => 'SVK',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'SLOVENIA',
            'country_code_iso3' => 'SVN',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Solomon Islands Dollar',
            'name_plural' => 'Solomon Islands Dollars',
            'country' => 'SOLOMON ISLANDS',
            'country_code_iso3' => 'SLB',
            'symbol'  => 'Si$',
            'symbol_native' => 'Si$',
            'code' => 'SBD',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);



        Currency::create([
            'name' => '	Somali Shilling',
            'name_plural' => '	Somali Shillings',
            'country' => 'SOMALIA',
            'country_code_iso3' => 'SOM',
            'symbol'  => 'Sl.',
            'symbol_native' => 'Sl.',
            'code' => 'SOS',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);




        Currency::create([
            'name' => 'Rand',
            'name_plural' => 'Rands',
            'country' => 'SOUTH AFRICA',
            'country_code_iso3' => 'ZAF',
            'symbol'  => 'R',
            'symbol_native' => 'R',
            'code' => 'ZAR',
            'rounding' => 0,
            'decimal_digits' => 2

        ]);


        Currency::create([
            'name' => 'Euro',
            'name_plural' => 'Euros',
            'country' => 'SPAIN',
            'country_code_iso3' => 'ESP',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'EUR',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);


        Currency::create([
            'name' => '	Sri Lanka Rupee',
            'name_plural' => '	Sri Lanka Rupees',
            'country' => 'SRI LANKA',
            'country_code_iso3' => 'LKA',
            'symbol'  => 'Rs',
            'symbol_native' => 'ரூ',
            'code' => 'LKR',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);



        Currency::create([
            'name' => 'Sudanese Pound',
            'name_plural' => 'Sudanese Pounds',
            'country' => 'SUDAN',
            'country_code_iso3' => 'SDN',
            'symbol'  => 'ج.س.',
            'symbol_native' => 'ج.س.',
            'code' => 'SDG',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);



        Currency::create([
            'name' => 'Surinam Dollar',
            'name_plural' => 'Surinam Dollars',
            'country' => 'SURINAME',
            'country_code_iso3' => 'SUR',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'SRD',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);




        Currency::create([
            'name' => 'Norwegian Krone',
            'name_plural' => 'Norwegian Krones',
            'country' => 'SVALBARD AND JAN MAYEN',
            'country_code_iso3' => 'SJM',
            'symbol'  => 'kr',
            'symbol_native' => 'kr',
            'code' => 'NOK',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);



        Currency::create([
            'name' => 'Lilangeni',
            'name_plural' => 'Lilangenis',
            'country' => 'SWAZILAND',
            'country_code_iso3' => 'SWZ',
            'symbol'  => 'E',
            'symbol_native' => 'E',
            'code' => 'SZL',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);


        Currency::create([
            'name' => 'Swedish Krona',
            'name_plural' => 'Swedish Kronas',
            'country' => 'SWEDEN',
            'country_code_iso3' => 'SWE',
            'symbol'  => 'kr',
            'symbol_native' => 'kr',
            'code' => 'SEK',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);


        Currency::create([
            'name' => 'WIR Euro',
            'name_plural' => 'WIR Euros',
            'country' => 'SWITZERLAND',
            'country_code_iso3' => 'CHE',
            'symbol'  => '€',
            'symbol_native' => '€',
            'code' => 'CHE',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);


        Currency::create([
            'name' => 'Swiss Franc',
            'name_plural' => 'Swiss Francs',
            'country' => 'SWITZERLAND',
            'country_code_iso3' => 'CHE',
            'symbol'  => 'CHf',
            'symbol_native' => 'CHf',
            'code' => 'CHF',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);


        Currency::create([
            'name' => 'Swiss Franc',
            'name_plural' => 'Swiss Francs',
            'country' => 'SWITZERLAND',
            'country_code_iso3' => 'CHE',
            'symbol'  => 'CHW',
            'symbol_native' => 'CHW',
            'code' => 'CHW',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);



        Currency::create([
            'name' => 'Syrian Pound',
            'name_plural' => 'Syrian Pounds',
            'country' => 'SYRIAN ARAB REPUBLIC',
            'country_code_iso3' => 'SYR',
            'symbol'  => '£S',
            'symbol_native' => '£S',
            'code' => 'SYP',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);


        Currency::create([
            'name' => 'New Taiwan Dollar',
            'name_plural' => 'New Taiwan Dollars',
            'country' => 'TAIWAN',
            'country_code_iso3' => 'TWN',
            'symbol'  => 'NT$',
            'symbol_native' => '$',
            'code' => 'TWD',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);


        Currency::create([
            'name' => 'Somoni',
            'name_plural' => 'Somonis',
            'country' => 'TAJIKISTAN',
            'country_code_iso3' => 'TJK',
            'symbol'  => 'ЅM',
            'symbol_native' => 'ЅM',
            'code' => 'TJS',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);



        Currency::create([
            'name' => 'Tanzanian Shilling',
            'name_plural' => 'Tanzanian Shillings',
            'country' => 'TANZANIA',
            'country_code_iso3' => 'TZA',
            'symbol'  => 'TSh',
            'symbol_native' => 'TSh',
            'code' => 'TZS',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);



        Currency::create([
            'name' => 'Baht',
            'name_plural' => 'Bahts',
            'country' => 'THAILAND',
            'country_code_iso3' => 'THA',
            'symbol'  => '฿',
            'symbol_native' => '฿',
            'code' => 'THB',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);


        Currency::create([
            'name' => 'US Dollar',
            'name_plural' => 'US Dollars',
            'country' => 'TIMOR-LESTE',
            'country_code_iso3' => 'TLS',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'USD',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);



        Currency::create([
            'name' => 'CFA Franc BCEAO',
            'name_plural' => 'CFA Francs BCEAO',
            'country' => 'TOGO',
            'country_code_iso3' => 'TGO',
            'symbol'  => 'CFA',
            'symbol_native' => 'CFA',
            'code' => 'XOF',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);




        Currency::create([
            'name' => 'New Zealand Dollar',
            'name_plural' => 'New Zealand Dollars',
            'country' => 'TOKELAU',
            'country_code_iso3' => 'TKL',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'NZD',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);



        Currency::create([
            'name' => 'Pa’anga',
            'name_plural' => 'Pa’angas',
            'country' => 'TONGA',
            'country_code_iso3' => 'TON',
            'symbol'  => 'T$',
            'symbol_native' => 'T$',
            'code' => 'TOP',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);


        Currency::create([
            'name' => 'Trinidad and Tobago Dollar',
            'name_plural' => 'Trinidad and Tobago Dollars',
            'country' => 'TRINIDAD AND TOBAGO',
            'country_code_iso3' => 'TTO',
            'symbol'  => 'TT$',
            'symbol_native' => 'TT$',
            'code' => 'TTD',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);


        Currency::create([
            'name' => 'Tunisian Dinar',
            'name_plural' => 'Tunisian Dinars',
            'country' => 'TUNISIA',
            'country_code_iso3' => 'TUN',
            'symbol'  => 'DT',
            'symbol_native' => 'د.ت',
            'code' => 'TND',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);


        Currency::create([
            'name' => 'Turkish Lira',
            'name_plural' => 'Turkish Liras',
            'country' => 'TURKEY',
            'country_code_iso3' => 'TUR',
            'symbol'  => '₺',
            'symbol_native' => '₺',
            'code' => 'TRY',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);



        Currency::create([
            'name' => 'Turkmenistan New Manat',
            'name_plural' => 'Turkmenistan New Manats',
            'country' => 'TURKMENISTAN',
            'country_code_iso3' => 'TKM',
            'symbol'  => 'm',
            'symbol_native' => 'm',
            'code' => 'TMT',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);



        Currency::create([
            'name' => 'US Dollar',
            'name_plural' => 'US Dollars',
            'country' => 'TURKS AND CAICOS ISLANDS',
            'country_code_iso3' => 'TCA',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'USD',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);


        Currency::create([
            'name' => 'Australian Dollar',
            'name_plural' => 'Australian Dollars',
            'country' => 'TUVALU',
            'country_code_iso3' => 'TUV',
            'symbol'  => 'A$',
            'symbol_native' => 'A$',
            'code' => 'AUD',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);



        Currency::create([
            'name' => 'Uganda Shilling',
            'name_plural' => 'Uganda Shillings',
            'country' => 'UGANDA',
            'country_code_iso3' => 'UGA',
            'symbol'  => 'USh',
            'symbol_native' => 'USh',
            'code' => 'UGX',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);

        Currency::create([
            'name' => 'Hryvnia',
            'name_plural' => 'Hryvnias',
            'country' => 'UKRAINE',
            'country_code_iso3' => 'UKR',
            'symbol'  => '₴',
            'symbol_native' => '₴',
            'code' => 'UAH',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);



        Currency::create([
            'name' => 'Hryvnia',
            'name_plural' => 'Hryvnias',
            'country' => 'UNITED ARAB EMIRATES',
            'country_code_iso3' => 'ARE',
            'symbol'  => 'د.إ',
            'symbol_native' => 'د.إ',
            'code' => 'AED',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);

        Currency::create([
            'name' => 'Pound Sterling',
            'name_plural' => 'Pound Sterlings',
            'country' => 'UNITED KINGDOM OF GREAT BRITAIN AND NORTHERN IRELAND ',
            'country_code_iso3' => 'GBR',
            'symbol'  => '£',
            'symbol_native' => '£',
            'code' => 'GPB',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);


        Currency::create([
            'name' => 'US Dollar',
            'name_plural' => 'US Dollars',
            'country' => 'UNITED STATES MINOR OUTLYING ISLANDS',
            'country_code_iso3' => 'GBR',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'USD',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);


        Currency::create([
            'name' => 'US Dollar',
            'name_plural' => 'US Dollars',
            'country' => 'UNITED STATES OF AMERICA ',
            'country_code_iso3' => 'USA',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'USD',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);


        Currency::create([
            'name' => 'Uruguay Peso',
            'name_plural' => 'Uruguay Pesos',
            'country' => 'URUGUAY',
            'country_code_iso3' => 'UYR',
            'symbol'  => '$U',
            'symbol_native' => '$',
            'code' => 'UYI',
            'rounding' => 0,
            'decimal_digits' => 2


        ]);


        Currency::create([
            'name' => 'Uzbekistan Sum',
            'name_plural' => 'Uzbekistan Sums',
            'country' => 'UZBEKISTAN',
            'country_code_iso3' => 'UZB',
            'symbol'  => '$U',
            'symbol_native' => '$',
            'code' => 'UZS',
            'rounding' => 0,
            'decimal_digits' => 2
        ]);



        Currency::create([
            'name' => 'Vatu',
            'name_plural' => 'Vatus',
            'country' => 'VANUATU',
            'country_code_iso3' => 'VUT',
            'symbol'  => 'VT',
            'symbol_native' => 'VT',
            'code' => 'VUV',
            'rounding' => 0,
            'decimal_digits' => 2
        ]);



        Currency::create([
            'name' => 'Bolivar',
            'name_plural' => 'Bolivars',
            'country' => 'VENEZUELA',
            'country_code_iso3' => 'VEN',
            'symbol'  => 'Bs',
            'symbol_native' => 'Bs',
            'code' => 'VEF',
            'rounding' => 0,
            'decimal_digits' => 2
        ]);


        Currency::create([
            'name' => 'Dong',
            'name_plural' => 'Dongs',
            'country' => 'VIET NAM',
            'country_code_iso3' => 'VNM',
            'symbol'  => '₫',
            'symbol_native' => '₫',
            'code' => 'VND',
            'rounding' => 0,
            'decimal_digits' => 2
        ]);


        Currency::create([
            'name' => 'US Dollar',
            'name_plural' => 'US Dollars',
            'country' => 'VIRGIN ISLANDS(BRITISH)',
            'country_code_iso3' => 'VGB',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'USD',
            'rounding' => 0,
            'decimal_digits' => 2
        ]);


        Currency::create([
            'name' => 'US Dollar',
            'name_plural' => 'US Dollars',
            'country' => 'VIRGIN ISLANDS ',
            'country_code_iso3' => 'VIR',
            'symbol'  => '$',
            'symbol_native' => '$',
            'code' => 'USD',
            'rounding' => 0,
            'decimal_digits' => 2
        ]);


        Currency::create([
            'name' => 'CFP Franc',
            'name_plural' => 'CFP Francs',
            'country' => 'WALLIS AND FUTUNA ',
            'country_code_iso3' => 'WLF',
            'symbol'  => '₣',
            'symbol_native' => '₣',
            'code' => 'XPF',
            'rounding' => 0,
            'decimal_digits' => 2
        ]);



        Currency::create([
            'name' => '	Moroccan Dirham',
            'name_plural' => '	Moroccan Dirhams',
            'country' => 'WESTERN SAHARA',
            'country_code_iso3' => 'ESH',
            'symbol'  => 'MAD',
            'symbol_native' => 'MAD',
            'code' => 'MAD',
            'rounding' => 0,
            'decimal_digits' => 2
        ]);


        Currency::create([
            'name' => 'Yemeni Rial',
            'name_plural' => 'Yemeni Rials',
            'country' => 'YEMEN',
            'country_code_iso3' => 'YEM',
            'symbol'  => '﷼',
            'symbol_native' => '﷼',
            'code' => 'YER',
            'rounding' => 0,
            'decimal_digits' => 2
        ]);


        Currency::create([
            'name' => 'Zambian Kwacha',
            'name_plural' => 'Zambian Kwachas',
            'country' => 'ZAMBIA',
            'country_code_iso3' => 'ZMB',
            'symbol'  => 'ZK',
            'symbol_native' => 'ZK',
            'code' => 'ZMW',
            'rounding' => 0,
            'decimal_digits' => 2
        ]);


        Currency::create([
            'name' => 'Zimbabwe Dollar',
            'name_plural' => 'Zimbabwe Dollars',
            'country' => 'ZIMBABWE',
            'country_code_iso3' => 'ZWE',
            'symbol'  => 'Z$',
            'symbol_native' => '$',
            'code' => 'ZWL',
            'rounding' => 0,
            'decimal_digits' => 2
        ]);

        $this->enableForeignKeys();
    }
}
