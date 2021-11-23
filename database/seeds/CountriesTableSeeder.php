<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            [
                'id'=>1,
                'country_name'=>'Afghanistan',
                'country_iso_code'=>'AF',
                'currency'=>'AFN',
                'currency_symbol'=>'؋',
                'locale_code'=>'FA',
                'locale_name'=>'farsi',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>2,
                'country_name'=>'Argentina',
                'country_iso_code'=>'AR',
                'currency'=>'ARS',
                'currency_symbol'=>'$',
                'locale'=>'ES',
                'locale_name'=>'spanish',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>3,
                'country_name'=>'Australia',
                'country_iso_code'=>'AU',
                'currency'=>'AUD',
                'currency_symbol'=>'A$',
                'locale'=>'EN',
                'locale_name'=>'english',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>4,
                'country_name'=>'Austria',
                'country_iso_code'=>'AT',
                'currency'=>'EUR',
                'currency_symbol'=>'€',
                'locale'=>'DE',
                'locale_name'=>'german',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>5,
                'country_name'=>'Azerbaijan',
                'country_iso_code'=>'AZ',
                'currency'=>'AZN',
                'currency_symbol'=>'₼',
                'locale'=>'AZ',
                'locale_name'=>'azeri',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>6,
                'country_name'=>'Bangladesh',
                'country_iso_code'=>'BD',
                'currency'=>'BDT',
                'currency_symbol'=>'৳',
                'locale'=>'BN ',
                'locale_name'=>'Bengali',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>7,
                'country_name'=>'Bhutan',
                'country_iso_code'=>'BT',
                'currency'=>'BTN',
                'currency_symbol'=>'Nu.',
                'locale'=>'EN ',
                'locale_name'=>'english',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>8,
                'country_name'=>'Brazil',
                'country_iso_code'=>'BR',
                'currency'=>'BRL',
                'currency_symbol'=>'R$',
                'locale'=>'PT',
                'locale_name'=>'portuguese',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>9,
                'country_name'=>'Canada',
                'country_iso_code'=>'CA',
                'currency'=>'CAD',
                'currency_symbol'=>'C$',
                'locale'=>'EN',
                'locale_name'=>'english',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>10,
                'country_name'=>'China',
                'country_iso_code'=>'CN',
                'currency'=>'CNY',
                'currency_symbol'=>'¥',
                'locale'=>'ZH',
                'locale_name'=>'chinese',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>11,
                'country_name'=>'Egypt',
                'country_iso_code'=>'EG',
                'currency'=>'EGP',
                'currency_symbol'=>'E£',
                'locale'=>'AR',
                'locale_name'=>'arabic',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>12,
                'country_name'=>'France',
                'country_iso_code'=>'FR',
                'currency'=>'EUR',
                'currency_symbol'=>'€',
                'locale'=>'FR',
                'locale_name'=>'french',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>13,
                'country_name'=>'Germany',
                'country_iso_code'=>'DE',
                'currency'=>'EUR',
                'currency_symbol'=>'€',
                'locale'=>'DE',
                'locale_name'=>'german',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>14,
                'country_name'=>'India',
                'country_iso_code'=>'IN',
                'currency'=>'INR',
                'currency_symbol'=>'₹',
                'locale'=>'EN',
                'locale_name'=>'english',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>15,
                'country_name'=>'Japan',
                'country_iso_code'=>'JP',
                'currency'=>'JPY',
                'currency_symbol'=>'¥',
                'locale'=>'JA',
                'locale_name'=>'japanese',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>16,
                'country_name'=>'Malaysia',
                'country_iso_code'=>'MY',
                'currency'=>'MYR',
                'currency_symbol'=>'RM',
                'locale'=>'MS',
                'locale_name'=>'malay',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>17,
                'country_name'=>'Mexico',
                'country_iso_code'=>'MX',
                'currency'=>'MXN',
                'currency_symbol'=>'$',
                'locale'=>'ES',
                'locale_name'=>'spanish',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>18,
                'country_name'=>'Nepal',
                'country_iso_code'=>'NP',
                'currency'=>'NPR',
                'currency_symbol'=>'रू',
                'locale'=>'NE',
                'locale_name'=>'nepali',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>19,
                'country_name'=>'New Zealand',
                'country_iso_code'=>'NZ',
                'currency'=>'NZD',
                'currency_symbol'=>'$',
                'locale'=>'EN',
                'locale_name'=>'english',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>20,
                'country_name'=>'Nigeria',
                'country_iso_code'=>'NG',
                'currency'=>'NGN',
                'currency_symbol'=>'₦',
                'locale'=>'EN',
                'locale_name'=>'english',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>21,
                'country_name'=>'Oman',
                'country_iso_code'=>'OM',
                'currency'=>'OMR',
                'currency_symbol'=>'ر.ع.',
                'locale'=>'AR',
                'locale_name'=>'arabic',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>22,
                'country_name'=>'Pakistan',
                'country_iso_code'=>'PK',
                'currency'=>'PKR',
                'currency_symbol'=>'Rs.',
                'locale'=>'EN',
                'locale_name'=>'english',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>23,
                'country_name'=>'Portugal',
                'country_iso_code'=>'PT',
                'currency'=>'EUR',
                'currency_symbol'=>'€',
                'locale'=>'PT',
                'locale_name'=>'portuguese',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>24,
                'country_name'=>'Qatar',
                'country_iso_code'=>'QA',
                'currency'=>'QAR',
                'currency_symbol'=>'ر.ق',
                'locale'=>'AR',
                'locale_name'=>'arabic',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>25,
                'country_name'=>'Saudi Arabia',
                'country_iso_code'=>'SA',
                'currency'=>'SAR',
                'currency_symbol'=>'ر.س',
                'locale'=>'AR',
                'locale_name'=>'arabic',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>26,
                'country_name'=>'Singapore',
                'country_iso_code'=>'SG',
                'currency'=>'SGD',
                'currency_symbol'=>'S$',
                'locale'=>'ZH',
                'locale_name'=>'chinese',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>27,
                'country_name'=>'South Africa',
                'country_iso_code'=>'ZA',
                'currency'=>'ZAR',
                'currency_symbol'=>'R',
                'locale'=>'EN',
                'locale_name'=>'english',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>28,
                'country_name'=>'Sri Lanka',
                'country_iso_code'=>'LK',
                'currency'=>'LKR',
                'currency_symbol'=>'Rs.',
                'locale'=>'EN',
                'locale_name'=>'english',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>29,
                'country_name'=>'United Arab Emirates',
                'country_iso_code'=>'AE',
                'currency'=>'AED',
                'currency_symbol'=>'د.إ',
                'locale'=>'AR',
                'locale_name'=>'arabic',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>30,
                'country_name'=>'United Kingdom',
                'country_iso_code'=>'GB',
                'currency'=>'GBP',
                'currency_symbol'=>'£',
                'locale'=>'EN',
                'locale_name'=>'english',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>31,
                'country_name'=>'United States',
                'country_iso_code'=>'US',
                'currency'=>'USD',
                'currency_symbol'=>'$',
                'locale'=>'EN',
                'locale_name'=>'english',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>32,
                'country_name'=>'Vietnam',
                'country_iso_code'=>'VN',
                'currency'=>'VND',
                'currency_symbol'=>'₫',
                'locale'=>'VI',
                'locale_name'=>'Vietnamese',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'id'=>33,
                'country_name'=>'Yemen',
                'country_iso_code'=>'YE',
                'currency'=>'YER',
                'currency_symbol'=>'﷼',
                'locale'=>'AR',
                'locale_name'=>'arabic',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ]
        ]);
    }
}