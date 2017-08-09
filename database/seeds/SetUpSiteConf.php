<?php

use Illuminate\Database\Seeder;
use App\User;
use App\page;
use App\template;
class SetUpSiteConf extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        //
        User::create([
            'name' => 'admin',
            'email' => 'deneme@gmail.com',
            'password' => bcrypt("deneme")]);


        $pageHeader = page::create([
                                     'template_id' => 0,
                                     'status' => 0
                                         ]);
        $pageHeader->buttons()->create([]);
        $pageHeader->buttons()->create([]);


        $pageFooter = page::create([
                                     'template_id' => 0,
                                     'status' => 0
                                         ]);
        for($i=0;$i<9;$i++)
        {
            $feature = $pageFooter->features()->create(['status' => 1]);
            if($i>4) $feature->icons()->create([]);
            $feature->buttons()->create([]);
        }

        template::create(['name' => 'Introduction' , 'file_name' => 'introduction'] );
        template::create(['name' => 'Extra Information' , 'file_name' => 'extrainfo'] );
        template::create(['name' => 'Feature' , 'file_name' => 'feature'] );
        template::create(['name' => 'Feedbacks Custumer' , 'file_name' => 'feedbackpanel'] );
        template::create(['name' => 'Product' , 'file_name' => 'product'] );
        template::create(['name' => 'Slayt' , 'file_name' => 'slayt'] );




    }
}
