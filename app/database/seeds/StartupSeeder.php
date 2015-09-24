<?php
class StartupSeeder extends Seeder{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // PLANS
        DB::table('plans')->delete();
        Plan::create(array(
            'name'  =>  'Basic',
            'status'    =>  1
        ));

        // COUNTRIES
        DB::table('country')->delete();
        Country::create(array('name'  =>  'Spain'));

        // ZONES
        DB::table('zone')->delete();
        Zone::create(array('name'  =>  'Barcelona', 'country_id' => 1));

        // LANGUAGES
        DB::table('languages')->delete();
        Language::create(array('name'  =>  'Español','code' => 'es','status'    =>  1));
        Language::create(array('name'  =>  'Català','code' => 'ca','status'    =>  1));
        Language::create(array('name'  =>  'English','code' => 'en','status'    =>  1));

        // COMPANY TYPES
        DB::table('company_type')->delete();
        Company_type::create(array('name'  =>  'Gimnasio Fitness'));
        Company_type::create(array('name'  =>  'Escuela'));

        DB::table('company')->delete();
        Company::create(
            array(
                'code'  =>  'DEMO',
                'status'    =>  1,
                'name'  =>  'DEMO',
                'email' =>  'demo@tekede.com',
                'phone' =>  '620422972',
                'zone_id'   =>  1,
                'city'  =>  'Mataró',
                'cif'   =>  'D65546877',
                'country_id'    =>  1,
                'plan_id'   =>  1,
                'company_type_id'   =>  1,
                'language_id'   =>  2
            )
        );

        DB::table('users')->delete();
        User::create(
            array(
                'firstname'  =>  'Jason',
                'lastname'  =>  'Ich',
                'email' =>  'jason.ich@tekede.com',
                'password'  =>  Hash::make('awesome'),
                'company_id'    =>  1,
                'status'    =>  1,
                'nif'   =>  '38876558E',
                'language_id'    =>  2
            )
        );

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}