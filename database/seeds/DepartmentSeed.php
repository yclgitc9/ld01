<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->delete();
        Department::create(array(
        'name'=>'Human Resources',
        ));
        Department::create(array(
            'name'=>'Manufacturing',
        ));
        Department::create(array(
            'name'=>'Engineering',
        ));
        Department::create(array(
            'name'=>'Management',
        ));
        Department::create(array(
            'name'=>'Sales',
        ));
        Department::create(array(
            'name'=>'Accounting',
        ));
        Department::create(array(
            'name'=>'Advertising',
        ));
    }
}
