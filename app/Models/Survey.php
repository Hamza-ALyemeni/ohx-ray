<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Survey extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title', 'status', 'date', 'send_to'
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

    public function focus_results($request , $type = null)
    {
//        $arr = $this->take_survey()->pluck('id')->toArray();

//        for ($i = 0; $i < 24; $i++) {
//            $demo[$i] = SurveySolution::whereIn('survey_employee_id', $arr)->join('answers', 'answers.id', 'survey_solutions.answer_id')->whereIn('survey_solutions.question_id', [($i * 2) + 1, ($i * 2) + 2])->avg('value');
//        }
        $sub_query = "";

        if (@$request->company_id && count($request->company_id) > 0) {
            if ($request->company_id[0] != 0)
                $sub_query .= " And CE.company_id in (" . implode(',', $request->company_id) . ") ";
        }
        if(@$type){
            if($type == 'from'){
                if (@$request->from && count($request->from ) > 0 && $request->from[0] != 0)
                    $sub_query .= " And CE.company_id in (" . implode(',', $request->from) . ") ";
            }else{
                if (@$request->to && count($request->to ) > 0  && $request->to[0] != 0)
                    $sub_query .= " And CE.company_id in (" . implode(',', $request->to) . ") ";
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
            if ($request->age_range == 1) {
                $sub_query .= " And users.date_of_birth >= '" . date('Y', strtotime('-25 years')) . "-01-01'";

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
        $count = DB::select("SELECT SE.id FROM `users` INNER JOIN `survey_employees` as SE on users.id = SE.employee_id INNER JOIN `company_employees` as CE ON CE.employee_id = SE.employee_id  INNER JOIN `survey_solutions` as SS ON SS.survey_employee_id = SE.id where SE.survey_id = " . $this->id . $sub_query." group by SE.id");
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
                    where SE.survey_id = " . $this->id . " AND SE.employee_id in (
                      select id from users where 1 " . $sub_query . "
                    )
                    GROUP BY SS.question_id
                ) AS Averages
        ) as LAST_QUERY");

        return [
            [
                'count'=> count($count),
                'key' => 'External Focus Result',
                'value' => round(((round((( round((($result[0]->Section1+ $result[0]->Section2) / 2 )) + round((($result[0]->Section3+ $result[0]->Section4) / 2 ))  + round((($result[0]->Section5+ $result[0]->Section6) / 2 )) ) / 3)) + round((( round((($result[0]->Section7+ $result[0]->Section8) / 2 )) + round((($result[0]->Section9+ $result[0]->Section10) / 2 ))  + round((($result[0]->Section11+ $result[0]->Section12) / 2 )) ) / 3)) + round((( round((($result[0]->Section13+ $result[0]->Section14) / 2 )) + round((($result[0]->Section15+ $result[0]->Section16) / 2 ))  + round((($result[0]->Section17+ $result[0]->Section18) / 2 )) ) / 3)) + round((( round((($result[0]->Section19+ $result[0]->Section20) / 2 )) + round((($result[0]->Section21+ $result[0]->Section22) / 2 ))  + round((($result[0]->Section23+ $result[0]->Section24) / 2 )) ) / 3))) /4)),
                'dimensional_results' => [
                    [
                        'key' => 'Direction',
                        'value' => round((( round((($result[0]->Section1+ $result[0]->Section2) / 2 )) + round((($result[0]->Section3+ $result[0]->Section4) / 2 ))  + round((($result[0]->Section5+ $result[0]->Section6) / 2 )) ) / 3)),
                        'dimensional_results' => [
                            [
                                'key' => 'Vision',
                                'value' => round((($result[0]->Section1+ $result[0]->Section2) / 2 ) ),
                                'questions' => [
                                    'q1' => ($result[0]->Section1),
                                    'q2' => ($result[0]->Section2)
                                ]
                            ],
                            [
                                'key' => 'Value',
                                'value' => round((($result[0]->Section3+ $result[0]->Section4) / 2 )) ,
                                'questions' => [
                                    'q1' => ($result[0]->Section3),
                                    'q2' => ($result[0]->Section4)
                                ]
                            ],
                            [
                                'key' => 'Strategy',
                                'value' => round((($result[0]->Section5+ $result[0]->Section6) / 2 ) ),
                                'questions' => [
                                    'q1' => ($result[0]->Section5),
                                    'q2' => ($result[0]->Section6)
                                ]
                            ]
                        ]
                    ],
                    [
                        'key' => 'Agility',
                        'value' => round((( round((($result[0]->Section7+ $result[0]->Section8) / 2 )) + round((($result[0]->Section9+ $result[0]->Section10) / 2 ))  + round((($result[0]->Section11+ $result[0]->Section12) / 2 )) ) / 3)),
                        'dimensional_results' => [
                            [
                                'key' => 'Simplicity',
                                'value' => round((($result[0]->Section7+ $result[0]->Section8) / 2 ) ),
                                'questions' => [
                                    'q1' => ($result[0]->Section7),
                                    'q2' => ($result[0]->Section8)
                                ]
                            ],
                            [
                                'key' => 'Flexibility',
                                'value' => round((($result[0]->Section9+ $result[0]->Section10) / 2 ) ),
                                'questions' => [
                                    'q1' => ($result[0]->Section9),
                                    'q2' => ($result[0]->Section10)
                                ]
                            ],
                            [
                                'key' => 'Stability',
                                'value' => round((($result[0]->Section11+ $result[0]->Section12) / 2 )) ,
                                'questions' => [
                                    'q1' => ($result[0]->Section11),
                                    'q2' => ($result[0]->Section12)
                                ]
                            ]
                        ]
                    ],
                    [
                        'key' => 'External Relation',
                        'value' => round((( round((($result[0]->Section13+ $result[0]->Section14) / 2 )) + round((($result[0]->Section15+ $result[0]->Section16) / 2 ))  + round((($result[0]->Section17+ $result[0]->Section18) / 2 )) ) / 3)),
                        'dimensional_results' => [
                            [
                                'key' => 'Customer',
                                'value' => round((($result[0]->Section13+ $result[0]->Section14) / 2 ) ),
                                'questions' => [
                                    'q1' => ($result[0]->Section13),
                                    'q2' => ($result[0]->Section14)
                                ]
                            ],
                            [
                                'key' => 'Competitor',
                                'value' => round((($result[0]->Section15+ $result[0]->Section16) / 2 )) ,
                                'questions' => [
                                    'q1' => ($result[0]->Section15),
                                    'q2' => ($result[0]->Section16)
                                ]
                            ],
                            [
                                'key' => 'Governor',
                                'value' => round((($result[0]->Section17+ $result[0]->Section18) / 2 ) ),
                                'questions' => [
                                    'q1' => ($result[0]->Section17),
                                    'q2' => ($result[0]->Section18)
                                ]
                            ]
                        ]
                    ],
                    [
                        'key' => 'Sustainability',
                        'value' => round((( round((($result[0]->Section19+ $result[0]->Section20) / 2 )) + round((($result[0]->Section21+ $result[0]->Section22) / 2 ))  + round((($result[0]->Section23+ $result[0]->Section24) / 2 )) ) / 3)),
                        'dimensional_results' => [
                            [
                                'key' => 'Social',
                                'value' => round((($result[0]->Section19+ $result[0]->Section20) / 2 )) ,
                                'questions' => [
                                    'q1' => ($result[0]->Section19),
                                    'q2' => ($result[0]->Section20)
                                ]
                            ],
                            [
                                'key' => 'Economy',
                                'value' => round((($result[0]->Section21+ $result[0]->Section22) / 2 ) ),
                                'questions' => [
                                    'q1' => ($result[0]->Section21),
                                    'q2' => ($result[0]->Section22)
                                ]
                            ],
                            [
                                'key' => 'Environment',
                                'value' => round((($result[0]->Section23+ $result[0]->Section24) / 2 )) ,
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
                'value' => round(((round((( round((($result[0]->Section25+ $result[0]->Section26) / 2 )) + round((($result[0]->Section27+ $result[0]->Section28) / 2 ))  + round((($result[0]->Section29+ $result[0]->Section30) / 2 )) ) / 3)) + round((( round((($result[0]->Section31+ $result[0]->Section32) / 2 )) + round((($result[0]->Section33+ $result[0]->Section34) / 2 ))  + round((($result[0]->Section35+ $result[0]->Section36) / 2 )) ) / 3)) + round((( round((($result[0]->Section37+ $result[0]->Section38) / 2 )) + round((($result[0]->Section39+ $result[0]->Section40) / 2 ))  + round((($result[0]->Section41+ $result[0]->Section42) / 2 )) ) / 3)) + round((( round((($result[0]->Section43+ $result[0]->Section44) / 2 )) + round((($result[0]->Section45+ $result[0]->Section46) / 2 ))  + round((($result[0]->Section47+ $result[0]->Section48) / 2 )) ) / 3))) /4)),
                'dimensional_results' => [
                    [
                        'key' => 'Accountability',
                        'value' => round((( round((($result[0]->Section25+ $result[0]->Section26) / 2 )) + round((($result[0]->Section27+ $result[0]->Section28) / 2 ))  + round((($result[0]->Section29+ $result[0]->Section30) / 2 )) ) / 3)),
                        'dimensional_results' => [
                            [
                                'key' => 'Responsibility',
                                'value' => round((($result[0]->Section25+ $result[0]->Section26) / 2 )) ,
                                'questions' => [
                                    'q1' => ($result[0]->Section25),
                                    'q2' => ($result[0]->Section26)
                                ]
                            ],
                            [
                                'key' => 'Trustworthiness',
                                'value' => round((($result[0]->Section27+ $result[0]->Section28) / 2 )) ,
                                'questions' => [
                                    'q1' => ($result[0]->Section27),
                                    'q2' => ($result[0]->Section28)
                                ]
                            ],
                            [
                                'key' => 'Commitment',
                                'value' => round((($result[0]->Section29+ $result[0]->Section30) / 2 ) ),
                                'questions' => [
                                    'q1' => ($result[0]->Section29),
                                    'q2' => ($result[0]->Section30)
                                ]
                            ]
                        ]
                    ],
                    [
                        'key' => 'Leadership',
                        'value' => round((( round((($result[0]->Section31+ $result[0]->Section32) / 2 )) + round((($result[0]->Section33+ $result[0]->Section34) / 2 ))  + round((($result[0]->Section35+ $result[0]->Section36) / 2 )) ) / 3)),
                        'dimensional_results' => [
                            [
                                'key' => 'Democratic',
                                'value' => round((($result[0]->Section31+ $result[0]->Section32) / 2 ) ),
                                'questions' => [
                                    'q1' => ($result[0]->Section31),
                                    'q2' => ($result[0]->Section32)
                                ]
                            ],
                            [
                                'key' => 'Autocratic',
                                'value' => round((($result[0]->Section33+ $result[0]->Section34) / 2 )) ,
                                'questions' => [
                                    'q1' => ($result[0]->Section33),
                                    'q2' => ($result[0]->Section34)
                                ]
                            ],
                            [
                                'key' => 'Transformational',
                                'value' => round((($result[0]->Section35+ $result[0]->Section36) / 2 )) ,
                                'questions' => [
                                    'q1' => ($result[0]->Section35),
                                    'q2' => ($result[0]->Section36)
                                ]
                            ]
                        ]
                    ],
                    [
                        'key' => 'Working Environment',
                        'value' => round((( round((($result[0]->Section37+ $result[0]->Section38) / 2 )) + round((($result[0]->Section39+ $result[0]->Section40) / 2 ))  + round((($result[0]->Section41+ $result[0]->Section42) / 2 )) ) / 3)),
                        'dimensional_results' => [
                            [
                                'key' => 'Trusting',
                                'value' => round((($result[0]->Section37+ $result[0]->Section38) / 2 ) ),
                                'questions' => [
                                    'q1' => ($result[0]->Section37),
                                    'q2' => ($result[0]->Section38)
                                ]
                            ],
                            [
                                'key' => 'Fairness',
                                'value' => round((($result[0]->Section39+ $result[0]->Section40) / 2 )) ,
                                'questions' => [
                                    'q1' => ($result[0]->Section39),
                                    'q2' => ($result[0]->Section40)
                                ]
                            ],
                            [
                                'key' => 'Respect',
                                'value' => round((($result[0]->Section41+ $result[0]->Section42) / 2 )) ,
                                'questions' => [
                                    'q1' => ($result[0]->Section41),
                                    'q2' => ($result[0]->Section42)
                                ]
                            ]
                        ]
                    ],
                    [
                        'key' => 'Motivation',
                        'value' => round((( round((($result[0]->Section43+ $result[0]->Section44) / 2 )) + round((($result[0]->Section45+ $result[0]->Section46) / 2 ))  + round((($result[0]->Section47+ $result[0]->Section48) / 2 )) ) / 3)),
                        'dimensional_results' => [
                            [
                                'key' => 'Reward',
                                'value' => round((($result[0]->Section43+ $result[0]->Section44) / 2 )) ,
                                'questions' => [
                                    'q1' => ($result[0]->Section43),
                                    'q2' => ($result[0]->Section44)
                                ]
                            ],
                            [
                                'key' => 'Inspire Leader',
                                'value' => round((($result[0]->Section45+ $result[0]->Section46) / 2 )) ,
                                'questions' => [
                                    'q1' => ($result[0]->Section45),
                                    'q2' => ($result[0]->Section46)
                                ]
                            ],
                            [
                                'key' => 'Recognition',
                                'value' => round((($result[0]->Section47+ $result[0]->Section48) / 2 ) ),
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
