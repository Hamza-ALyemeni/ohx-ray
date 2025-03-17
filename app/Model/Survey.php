<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Survey extends Model
{
   // use SoftDeletes;
    protected $fillable = [
        'title','type', 'status', 'date', 'send_to'
    ];
    protected $appends = [
        'link', 'total_click'
    ];
    protected $hidden = [
        'deleted_at', 'updated_at',
    ];

    public function getLinkAttribute()
    {
        return url('landingPage/' . $this->id);
    }

    public function getTotalClickAttribute()
    {
        return $this->take_survey()->count();
    }

    public function getCreatedAtAttribute($value)
    {
        return date('d M Y', strtotime($value));
    }

    public function companies()
    {
        return $this->belongsToMany('App\Model\Company', 'survey_companies', 'survey_id', 'company_id');
    }

    public function questions()
    {
        return $this->hasMany('App\Model\SurveyQuestion')->orderBy('id');
    }

    public function take_survey()
    {
        return $this->hasMany('App\Model\SurveyEmployee');
    }

    public function survey_company()
    {
        return $this->hasMany('App\Model\SurveyCompany');
    }

  /*  protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('surveys', function (Builder $builder) {
            $builder->where('type','!=', 1);
        });
    }*/
    
    public function getNationalitiesCount($survey_company_id)
    {
        return DB::table('survey_employees as se')
            ->join('users as u', 'se.employee_id', '=', 'u.id')
            ->where('se.survey_company_id', $survey_company_id)
            ->selectRaw('
                COUNT(DISTINCT CASE WHEN u.country_id IS NOT NULL THEN u.country_id END) as total_nationalities,
                SUM(CASE WHEN u.country_id = 184 THEN 1 ELSE 0 END) as local_count,
                SUM(CASE WHEN u.country_id != 184 THEN 1 ELSE 0 END) as expat_count
            ')
            ->first();
    }


    public function getAgeStatis($survey_company_id){
            // Age Statistics
        $ageStats = DB::table('survey_employees as se')
        ->join('users as u', 'se.employee_id', '=', 'u.id')
        ->selectRaw('AVG(TIMESTAMPDIFF(YEAR, u.date_of_birth, CURDATE())) as avg_age, MIN(TIMESTAMPDIFF(YEAR, u.date_of_birth, CURDATE())) as min_age, MAX(TIMESTAMPDIFF(YEAR, u.date_of_birth, CURDATE())) as max_age')
        ->where('se.survey_company_id', $survey_company_id)
        ->first();

        return $ageStats;
    }

    public function focus_results($request , $type = null)
    {
//        $arr = $this->take_survey()->pluck('id')->toArray();

//        for ($i = 0; $i < 24; $i++) {
//            $demo[$i] = SurveySolution::whereIn('survey_employee_id', $arr)->join('answers', 'answers.id', 'survey_solutions.answer_id')->whereIn('survey_solutions.question_id', [($i * 2) + 1, ($i * 2) + 2])->avg('value');
//        }
        $sub_query = "";
        $Phase = "";
        if (@$request->survey_company_id && count($request->survey_company_id) > 0) {
            if ($request->survey_company_id[0] != 0)
                $sub_query .= " And SE.survey_company_id  in (" . implode(',', $request->survey_company_id) . ") ";
        }

        /*if (@$request->company_id && count($request->company_id) > 0) {
            if ($request->company_id[0] != 0)
                $sub_query .= " And CE.company_id in (" . implode(',', $request->company_id) . ") ";
        }*/
        if(@$type){
            if($type == 'from'){
                if (@$request->from && count($request->from ) > 0 && $request->from[0] != 0)
                    $sub_query .= " And CE.company_id in (" . implode(',', $request->from) . ") ";
                    
                if (@$request->company_types_1 && count($request->company_types_1 ) > 0  && $request->company_types_1[0] != 0)
                    $sub_query .= " And CO.company_type_id in (" . implode(',', $request->company_types_1) . ") ";
    
                if (@$request->industry_1 && count($request->industry_1 ) > 0  && $request->industry_1[0] != 0)
                    $sub_query .= " And CO.industry_id in (" . implode(',', $request->industry_1) . ") ";

                if (@$request->phase_1 && count($request->phase_1 ) > 0  && $request->phase_1[0] != 0){ 
                    $sub_query .= " And SC.id in (" . implode(',', $request->phase_1) . ") ";
                }
                
            }else{
                if (@$request->to && count($request->to ) > 0  && $request->to[0] != 0)
                    $sub_query .= " And CE.company_id in (" . implode(',', $request->to) . ") ";

                if (@$request->company_types_2 && count($request->company_types_2 ) > 0  && $request->company_types_2[0] != 0)
                    $sub_query .= " And CO.company_type_id in (" . implode(',', $request->company_types_2) . ") ";
                
                if (@$request->industry_2 && count($request->industry_2 ) > 0  && $request->industry_2[0] != 0)
                    $sub_query .= " And CO.industry_id in (" . implode(',', $request->industry_2) . ") ";

                if (@$request->phase_2 && count($request->phase_2 ) > 0  && $request->phase_2[0] != 0)
                    $sub_query .= " And SC.id in (" . implode(',', $request->phase_2) . ") ";
                }
        }
        if (@$request->company_id && count($request->company_id) > 0) {
            if ($request->company_id[0] != 0)
                $sub_query .= " And CE.company_id in (" . implode(',', $request->company_id) . ") ";
        }
        if (@$request->gender && $request->gender){
            if($request->gender == -1)
                $sub_query .= " And users.gender IS NULL" ;
            else
                $sub_query .= " And users.gender = " . $request->gender;
        }

        if (@$request->level && $request->level){
            if($request->level == -1)
                $sub_query .= " And users.level_id = 0";
            else
                $sub_query .= " And users.level_id = " . $request->level;
        }

        if (@$request->age_range && $request->age_range) {
            $currentDate = Carbon::now();
            $month = $currentDate->month; // Get the current month (1-12)
            $day = $currentDate->day; // Get the current day (1-31)
            //dd(date('Y', strtotime('-25 years')));
            if ($request->age_range == 1) {
                $sub_query .= " And YEAR(users.date_of_birth ) >= '" . date('Y', strtotime('-25 years')) . "'";
                 //dd($sub_query);
            } else if ($request->age_range == 2) {
                $sub_query .= " And users.date_of_birth >= '" . date('Y', strtotime('-34 years')) . "-01-01' And users.date_of_birth < '" . date('Y', strtotime('-25 years')) . "-01-02'";

            } else if ($request->age_range == 3) {
                $sub_query .= " And users.date_of_birth >= '" . date('Y', strtotime('-44 years')) . "-01-01' And users.date_of_birth < '" . date('Y', strtotime('-34 years')) . "-01-02'";

            } else if ($request->age_range == 4) {
                $sub_query .= " And users.date_of_birth <= '" . date('Y', strtotime('-44 years')) . "-01-01'";
            } else if ($request->age_range == -1) {
                $sub_query .= " And users.date_of_birth IS NULL" ;
            }
        }
        if (@$request->nationality && $request->nationality) {
            if ($request->nationality == 1) {
                $sub_query .= " And users.country_id = 184";
            }else if ($request->nationality == 2) {
                $sub_query .= " And users.country_id != 184 And users.country_id IS NOT NULL";
            } else if ($request->nationality == -1) {
                $sub_query .= " And users.country_id IS NULL";
            }
        }
         
        // $count = DB::select("SELECT SE.id FROM `users` 
        // INNER JOIN `survey_employees` as SE on users.id = SE.employee_id
        //  INNER JOIN `company_employees` as CE ON CE.employee_id = SE.employee_id  
        //  INNER JOIN `companies` AS CO on CO.id = CE.company_id
        //  INNER JOIN `survey_solutions` as SS ON SS.survey_employee_id = SE.id
        //  INNER JOIN (SELECT id, phase FROM (
        //         SELECT id, @row_number := IF(@prev_company_id = company_id, @row_number + 1, 1) AS phase, @prev_company_id := company_id
        //         FROM survey_companies, (SELECT @row_number := 0, @prev_company_id := NULL) AS vars
        //         ORDER BY company_id
        //  ) AS subquery GROUP BY phase,`id`   ". $Phase." ) AS SC on SC.id = SE.survey_company_id
        // where 1 ". $sub_query." group by SE.id ");
//        if($count[0]->count < 5){
//            return 0;
//        }

$count = DB::select("SELECT SE.id FROM `users` 
INNER JOIN `survey_employees` as SE on users.id = SE.employee_id
 INNER JOIN `company_employees` as CE ON CE.employee_id = SE.employee_id  
 INNER JOIN `companies` AS CO on CO.id = CE.company_id
 INNER JOIN `survey_solutions` as SS ON SS.survey_employee_id = SE.id
 INNER JOIN `survey_companies` as SC ON SC.id = SE.survey_company_id
where 1 ". $sub_query." group by SE.id ");
//        if($count[0]->count < 5){
//            return 0;
//        }
        $result = DB::select("SELECT

            AVG(Section1) as Section1,
            AVG(Section2) as Section2,
            AVG(Section3) as Section3,
            AVG(Section4) as Section4,
            AVG(Section5) as Section5,
            AVG(Section6) as Section6,
            AVG(Section7) as Section7,
            AVG(Section8) as Section8,
            AVG(Section9) as Section9,
            AVG(Section10) as Section10,
            AVG(Section11) as Section11,
            AVG(Section12) as Section12,
            AVG(Section13) as Section13,
            AVG(Section14) as Section14,
            AVG(Section15) as Section15,
            AVG(Section16) as Section16,
            AVG(Section17) as Section17,
            AVG(Section18) as Section18,
            AVG(Section19) as Section19,
            AVG(Section20) as Section20,
            AVG(Section21) as Section21,
            AVG(Section22) as Section22,
            AVG(Section23) as Section23,
            AVG(Section24) as Section24,
            AVG(Section25) as Section25,
            AVG(Section26) as Section26,
            AVG(Section27) as Section27,
            AVG(Section28) as Section28,
            AVG(Section29) as Section29,
            AVG(Section30) as Section30,
            AVG(Section31) as Section31,
            AVG(Section32) as Section32,
            AVG(Section33) as Section33,
            AVG(Section34) as Section34,
            AVG(Section35) as Section35,
            AVG(Section36) as Section36,
            AVG(Section37) as Section37,
            AVG(Section38) as Section38,
            AVG(Section39) as Section39,
            AVG(Section40) as Section40,
            AVG(Section41) as Section41,
            AVG(Section42) as Section42,
            AVG(Section43) as Section43,
            AVG(Section44) as Section44,
            AVG(Section45) as Section45,
            AVG(Section46) as Section46,
            AVG(Section47) as Section47,
            AVG(Section48) as Section48
        FROM (
            SELECT
                case when question = 1 then value/num else null end as Section1,
                case when question = 2 then value/num else null end as Section2,
                case when question = 3 then value/num else null end as Section3,
                case when question = 4 then value/num else null end as Section4,
                case when question = 5 then value/num else null end as Section5,
                case when question = 6 then value/num else null end as Section6,
                case when question = 7 then value/num else null end as Section7,
                case when question = 8 then value/num else null end as Section8,
                case when question = 9 then value/num else null end as Section9,
                case when question = 10 then value/num else null end as Section10,
                case when question = 11 then value/num else null end as Section11,
                case when question = 12 then value/num else null end as Section12,
                case when question = 13 then value/num else null end as Section13,
                case when question = 14 then value/num else null end as Section14,
                case when question = 15 then value/num else null end as Section15,
                case when question = 16 then value/num else null end as Section16,
                case when question = 17 then value/num else null end as Section17,
                case when question = 18 then value/num else null end as Section18,
                case when question = 19 then value/num else null end as Section19,
                case when question = 20 then value/num else null end as Section20,
                case when question = 21 then value/num else null end as Section21,
                case when question = 22 then value/num else null end as Section22,
                case when question = 23 then value/num else null end as Section23,
                case when question = 24 then value/num else null end as Section24,
                case when question = 25 then value/num else null end as Section25,
                case when question = 26 then value/num else null end as Section26,
                case when question = 27 then value/num else null end as Section27,
                case when question = 28 then value/num else null end as Section28,
                case when question = 29 then value/num else null end as Section29,
                case when question = 30 then value/num else null end as Section30,
                case when question = 31 then value/num else null end as Section31,
                case when question = 32 then value/num else null end as Section32,
                case when question = 33 then value/num else null end as Section33,
                case when question = 34 then value/num else null end as Section34,
                case when question = 35 then value/num else null end as Section35,
                case when question = 36 then value/num else null end as Section36,
                case when question = 37 then value/num else null end as Section37,
                case when question = 38 then value/num else null end as Section38,
                case when question = 39 then value/num else null end as Section39,
                case when question = 40 then value/num else null end as Section40,
                case when question = 41 then value/num else null end as Section41,
                case when question = 42 then value/num else null end as Section42,
                case when question = 43 then value/num else null end as Section43,
                case when question = 44 then value/num else null end as Section44,
                case when question = 45 then value/num else null end as Section45,
                case when question = 46 then value/num else null end as Section46,
                case when question = 47 then value/num else null end as Section47,
                case when question = 48 then value/num else null end as Section48
            FROM (
                    SELECT SS.question_id as question, SUM(A.value) as value, COUNT(*) as num
                    FROM `survey_solutions`as SS
                    INNER JOIN `answers` as A ON SS.answer_id = A.id
                    INNER JOIN `survey_employees` as SE ON SS.survey_employee_id = SE.id
                    INNER JOIN `company_employees` as CE ON CE.employee_id = SE.employee_id
                    INNER JOIN `companies` AS CO on CO.id = CE.company_id
                    INNER JOIN (SELECT id, phase FROM (
                        SELECT id, @row_number := IF(@prev_company_id = company_id, @row_number + 1, 1) AS phase, @prev_company_id := company_id
                        FROM survey_companies, (SELECT @row_number := 0, @prev_company_id := NULL) AS vars
                        ORDER BY company_id
                ) AS subquery GROUP BY phase,`id`   ". $Phase." ) AS SC on SC.id = SE.survey_company_id
                    where  SE.employee_id in (
                      select id from users where 1 " . $sub_query . "
                    )
                    GROUP BY SS.question_id
                ) AS Averages
        ) as LAST_QUERY");

        //dd($result);

        return [
            [
                'count'=> count($count),
                'key' => 'External Focus Result',
                'value' => (((round((( round((($result[0]->Section1+ $result[0]->Section2) / 2 )) + round((($result[0]->Section3+ $result[0]->Section4) / 2 ))  + round((($result[0]->Section5+ $result[0]->Section6) / 2 )) ) / 3)) + round((( round((($result[0]->Section7+ $result[0]->Section8) / 2 )) + round((($result[0]->Section9+ $result[0]->Section10) / 2 ))  + round((($result[0]->Section11+ $result[0]->Section12) / 2 )) ) / 3)) + round((( round((($result[0]->Section13+ $result[0]->Section14) / 2 )) + round((($result[0]->Section15+ $result[0]->Section16) / 2 ))  + round((($result[0]->Section17+ $result[0]->Section18) / 2 )) ) / 3)) + round((( round((($result[0]->Section19+ $result[0]->Section20) / 2 )) + round((($result[0]->Section21+ $result[0]->Section22) / 2 ))  + round((($result[0]->Section23+ $result[0]->Section24) / 2 )) ) / 3))) /4)),
                'dimensional_results' => [
                    [
                        'key' => 'Direction',
                        'value' => ((( round((($result[0]->Section1+ $result[0]->Section2) / 2 )) + round((($result[0]->Section3+ $result[0]->Section4) / 2 ))  + round((($result[0]->Section5+ $result[0]->Section6) / 2 )) ) / 3)),
                        'dimensional_results' => [
                            [
                                'key' => 'Vision',
                                'value' => ((($result[0]->Section1+ $result[0]->Section2) / 2 ) ),
                                'questions' => [
                                    'q1' => ($result[0]->Section1),
                                    'q2' => ($result[0]->Section2)
                                ]
                            ],
                            [
                                'key' => 'Value',
                                'value' => ((($result[0]->Section3+ $result[0]->Section4) / 2 )) ,
                                'questions' => [
                                    'q1' => ($result[0]->Section3),
                                    'q2' => ($result[0]->Section4)
                                ]
                            ],
                            [
                                'key' => 'Strategy',
                                'value' => ((($result[0]->Section5+ $result[0]->Section6) / 2 ) ),
                                'questions' => [
                                    'q1' => ($result[0]->Section5),
                                    'q2' => ($result[0]->Section6)
                                ]
                            ]
                        ]
                    ],
                    [
                        'key' => 'Agility',
                        'value' => ((( round((($result[0]->Section7+ $result[0]->Section8) / 2 )) + round((($result[0]->Section9+ $result[0]->Section10) / 2 ))  + round((($result[0]->Section11+ $result[0]->Section12) / 2 )) ) / 3)),
                        'dimensional_results' => [
                            [
                                'key' => 'Simplicity',
                                'value' => ((($result[0]->Section7+ $result[0]->Section8) / 2 ) ),
                                'questions' => [
                                    'q1' => ($result[0]->Section7),
                                    'q2' => ($result[0]->Section8)
                                ]
                            ],
                            [
                                'key' => 'Flexibility',
                                'value' => ((($result[0]->Section9+ $result[0]->Section10) / 2 ) ),
                                'questions' => [
                                    'q1' => ($result[0]->Section9),
                                    'q2' => ($result[0]->Section10)
                                ]
                            ],
                            [
                                'key' => 'Stability',
                                'value' => ((($result[0]->Section11+ $result[0]->Section12) / 2 )) ,
                                'questions' => [
                                    'q1' => ($result[0]->Section11),
                                    'q2' => ($result[0]->Section12)
                                ]
                            ]
                        ]
                    ],
                    [
                        'key' => 'External Relation',
                        'value' => ((( round((($result[0]->Section13+ $result[0]->Section14) / 2 )) + round((($result[0]->Section15+ $result[0]->Section16) / 2 ))  + round((($result[0]->Section17+ $result[0]->Section18) / 2 )) ) / 3)),
                        'dimensional_results' => [
                            [
                                'key' => 'Customer',
                                'value' => ((($result[0]->Section13+ $result[0]->Section14) / 2 ) ),
                                'questions' => [
                                    'q1' => ($result[0]->Section13),
                                    'q2' => ($result[0]->Section14)
                                ]
                            ],
                            [
                                'key' => 'Competitor',
                                'value' => ((($result[0]->Section15+ $result[0]->Section16) / 2 )) ,
                                'questions' => [
                                    'q1' => ($result[0]->Section15),
                                    'q2' => ($result[0]->Section16)
                                ]
                            ],
                            [
                                'key' => 'Governor',
                                'value' => ((($result[0]->Section17+ $result[0]->Section18) / 2 ) ),
                                'questions' => [
                                    'q1' => ($result[0]->Section17),
                                    'q2' => ($result[0]->Section18)
                                ]
                            ]
                        ]
                    ],
                    [
                        'key' => 'Sustainability',
                        'value' => ((( round((($result[0]->Section19+ $result[0]->Section20) / 2 )) + round((($result[0]->Section21+ $result[0]->Section22) / 2 ))  + round((($result[0]->Section23+ $result[0]->Section24) / 2 )) ) / 3)),
                        'dimensional_results' => [
                            [
                                'key' => 'Social',
                                'value' => ((($result[0]->Section19+ $result[0]->Section20) / 2 )) ,
                                'questions' => [
                                    'q1' => ($result[0]->Section19),
                                    'q2' => ($result[0]->Section20)
                                ]
                            ],
                            [
                                'key' => 'Economy',
                                'value' => ((($result[0]->Section21+ $result[0]->Section22) / 2 ) ),
                                'questions' => [
                                    'q1' => ($result[0]->Section21),
                                    'q2' => ($result[0]->Section22)
                                ]
                            ],
                            [
                                'key' => 'Environment',
                                'value' => ((($result[0]->Section23+ $result[0]->Section24) / 2 )) ,
                                'questions' => [
                                    'q1' => ($result[0]->Section23),
                                    'q2' => ($result[0]->Section24)
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            [
                'key' => 'Internal Focus Result',
                'value' => (((round((( round((($result[0]->Section25+ $result[0]->Section26) / 2 )) + round((($result[0]->Section27+ $result[0]->Section28) / 2 ))  + round((($result[0]->Section29+ $result[0]->Section30) / 2 )) ) / 3)) + round((( round((($result[0]->Section31+ $result[0]->Section32) / 2 )) + round((($result[0]->Section33+ $result[0]->Section34) / 2 ))  + round((($result[0]->Section35+ $result[0]->Section36) / 2 )) ) / 3)) + round((( round((($result[0]->Section37+ $result[0]->Section38) / 2 )) + round((($result[0]->Section39+ $result[0]->Section40) / 2 ))  + round((($result[0]->Section41+ $result[0]->Section42) / 2 )) ) / 3)) + round((( round((($result[0]->Section43+ $result[0]->Section44) / 2 )) + round((($result[0]->Section45+ $result[0]->Section46) / 2 ))  + round((($result[0]->Section47+ $result[0]->Section48) / 2 )) ) / 3))) /4)),
                'dimensional_results' => [
                    [
                        'key' => 'Accountability',
                        'value' => ((( round((($result[0]->Section25+ $result[0]->Section26) / 2 )) + round((($result[0]->Section27+ $result[0]->Section28) / 2 ))  + round((($result[0]->Section29+ $result[0]->Section30) / 2 )) ) / 3)),
                        'dimensional_results' => [
                            [
                                'key' => 'Responsibility',
                                'value' => ((($result[0]->Section25+ $result[0]->Section26) / 2 )) ,
                                'questions' => [
                                    'q1' => ($result[0]->Section25),
                                    'q2' => ($result[0]->Section26)
                                ]
                            ],
                            [
                                'key' => 'Trustworthiness',
                                'value' => ((($result[0]->Section27+ $result[0]->Section28) / 2 )) ,
                                'questions' => [
                                    'q1' => ($result[0]->Section27),
                                    'q2' => ($result[0]->Section28)
                                ]
                            ],
                            [
                                'key' => 'Commitment',
                                'value' => ((($result[0]->Section29+ $result[0]->Section30) / 2 ) ),
                                'questions' => [
                                    'q1' => ($result[0]->Section29),
                                    'q2' => ($result[0]->Section30)
                                ]
                            ]
                        ]
                    ],
                    [
                        'key' => 'Leadership',
                        'value' => ((( round((($result[0]->Section31+ $result[0]->Section32) / 2 )) + round((($result[0]->Section33+ $result[0]->Section34) / 2 ))  + round((($result[0]->Section35+ $result[0]->Section36) / 2 )) ) / 3)),
                        'dimensional_results' => [
                            [
                                'key' => 'Democratic',
                                'value' => ((($result[0]->Section31+ $result[0]->Section32) / 2 ) ),
                                'questions' => [
                                    'q1' => ($result[0]->Section31),
                                    'q2' => ($result[0]->Section32)
                                ]
                            ],
                            [
                                'key' => 'Autocratic',
                                'value' => ((($result[0]->Section33+ $result[0]->Section34) / 2 )) ,
                                'questions' => [
                                    'q1' => ($result[0]->Section33),
                                    'q2' => ($result[0]->Section34)
                                ]
                            ],
                            [
                                'key' => 'Transformational',
                                'value' => ((($result[0]->Section35+ $result[0]->Section36) / 2 )) ,
                                'questions' => [
                                    'q1' => ($result[0]->Section35),
                                    'q2' => ($result[0]->Section36)
                                ]
                            ]
                        ]
                    ],
                    [
                        'key' => 'Working Environment',
                        'value' => ((( round((($result[0]->Section37+ $result[0]->Section38) / 2 )) + round((($result[0]->Section39+ $result[0]->Section40) / 2 ))  + round((($result[0]->Section41+ $result[0]->Section42) / 2 )) ) / 3)),
                        'dimensional_results' => [
                            [
                                'key' => 'Trusting',
                                'value' => ((($result[0]->Section37+ $result[0]->Section38) / 2 ) ),
                                'questions' => [
                                    'q1' => ($result[0]->Section37),
                                    'q2' => ($result[0]->Section38)
                                ]
                            ],
                            [
                                'key' => 'Fairness',
                                'value' => ((($result[0]->Section39+ $result[0]->Section40) / 2 )) ,
                                'questions' => [
                                    'q1' => ($result[0]->Section39),
                                    'q2' => ($result[0]->Section40)
                                ]
                            ],
                            [
                                'key' => 'Respect',
                                'value' => ((($result[0]->Section41+ $result[0]->Section42) / 2 )) ,
                                'questions' => [
                                    'q1' => ($result[0]->Section41),
                                    'q2' => ($result[0]->Section42)
                                ]
                            ]
                        ]
                    ],
                    [
                        'key' => 'Motivation',
                        'value' => ((( round((($result[0]->Section43+ $result[0]->Section44) / 2 )) + round((($result[0]->Section45+ $result[0]->Section46) / 2 ))  + round((($result[0]->Section47+ $result[0]->Section48) / 2 )) ) / 3)),
                        'dimensional_results' => [
                            [
                                'key' => 'Reward',
                                'value' => ((($result[0]->Section43+ $result[0]->Section44) / 2 )) ,
                                'questions' => [
                                    'q1' => ($result[0]->Section43),
                                    'q2' => ($result[0]->Section44)
                                ]
                            ],
                            [
                                'key' => 'Inspire Leader',
                                'value' => ((($result[0]->Section45+ $result[0]->Section46) / 2 )) ,
                                'questions' => [
                                    'q1' => ($result[0]->Section45),
                                    'q2' => ($result[0]->Section46)
                                ]
                            ],
                            [
                                'key' => 'Recognition',
                                'value' => ((($result[0]->Section47+ $result[0]->Section48) / 2 ) ),
                                'questions' => [
                                    'q1' => ($result[0]->Section47),
                                    'q2' => ($result[0]->Section48)
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ];
    }
}
