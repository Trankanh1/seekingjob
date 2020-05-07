<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("Companies")->insert([
            "name" => "FPT Software",
            "website" => "www.fpt.com",
            "head_quarter" => "Ho Chi Minh",
            "found" => "1990",
            "industry" => "Software",
            "size" => "5000",
            "user_id" => 1,
            "description" => "The leading provider of software outsourcing services in Vietnam
            “ FPT Software is part of FPT Corporation (FPT – HoSE) – the global leading technology, outsourcing and IT services group headquartered in Vietnam with nearly US$2 billion in revenue and more than 13,000 employees. Qualified with CMMI Level 5 & ISO 27001:2013, ASPICE LEVEL 3, FPT Software delivers world-class services in Smart factory, Digital platform, RPA, AI, IoT, Enterprise Mobilization, Cloud, AR/VR, Embedded System, Managed service, Testing, Platform modernization, Business Applications, Application Service, BPO and more services globally from delivery centers across the United States, Japan, Europe, Korea, China, Australia, Vietnam and the Asia Pacific. 
            
            In 2017, FPT Software has been placed in top 10 of the ranking for three consecutive years. Among top 10, FPT Software is the only IT Company. "
         ]);
         
    }
}
