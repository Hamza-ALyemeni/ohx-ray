<?php
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\User;
use App\Model\Company;
use App\Model\Employee;
use App\Model\SurveyEmployee;
use App\Model\Answer;
use App\Model\SurveySolution;
class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user =   User::create([
            'f_name'     => "ABC",
            'l_name'    => "",
            // 'logo'    => "",
            'country_id'    => null,
            'verification_code'=>234,
            'role'=>1,
            'location'    => "",
            'gender'    => 0,
            'address'    => "",
            'email'    => Str::random(10).'@gmail.com',
            'phone'    => "",
            'password'    => Hash::make('123456'),
        ]);

        $company = Company::create([
            'name'=>"ABC",
            'user_id' => $user->id
        ]);
        
        factory(Employee::class, 100)->create()->each(function($u) use($company) {
                $u->companies()->sync($company->id);
                $u->surveys()->sync(1);

                $se = SurveyEmployee::where('employee_id',$u->id)->first();

                for($q=1; $q<=48;$q++){
                    $answer = Answer::where('question_id',$q)->inRandomOrder()->first();
                    SurveySolution::create([
                        'survey_employee_id' => $se->id,
                        'question_id' => $q,
                        'answer_id' => $answer->id,
                    ]);
                }
            });

    }
}
