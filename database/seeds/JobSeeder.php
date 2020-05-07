<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("Jobs")->insert([
            "company_name"=> "FPT Software",
            "company_id" => 1,
            "location"=> "Ha Noi",
            "title" => "Technical Lead (Java)",
            "description" => "Mô Tả Công Việc
            Study customer’s requirement and framework, create design documents, implementation and coding of solutions.
            Generate unit tests to ensure the products are being tested thoroughly to produce quality products
            Supporting quality assurance in testing software products.
            Interacting with customers and partners about product explanation, implementation and support.
            Be ready to go on business trip when required
            Yêu Cầu Công Việc
            Proficient in English communication, can communicate directly with customer via emails, conference calls, daily meeting.
            At least 2 years programming in J2EE technologies.
            Strong OOAD knowledge, Java core, design pattern.
            Strong experience with Java/J2EE, Spring framework, Hibernate, Database (SQL, Oracle).
            Experience with Web Service (SOAP and RESTfull).
            Experience with application server Weblogic.
            Experience in RDBMS like MySQL and PostgreSQL.
            Experience in version control system like Subversion and Git.
            Knowledge in basic Linux/ UNIX server administration is an advantage.
            Experience with build tools (Ant, Maven, etc.) is an advantage.
            Experience with micro services
            Tại Sao Bạn Sẽ Yêu Thích Làm Việc Tại Đây
            Salary negotiation
            All benefits based on Labor Law & FPT Software’s policy.
            English-friendly, international working environment
            Onsite opportunities
            Clear career path.",
            "since" => time(),
        ]);

        DB::table("Jobs")->insert([
            "company_name"=> "FPT Software",
            "company_id" => 1,
            "location"=> "Ho Chi Minh",
            "title" => "Senior ERP/SAP Consultant Manager",
            "description" => "Mô Tả Công Việc
            JOB BRIEF
            
            EBS (Enterprise Business Services) is a competency unit of FPT Software (~1000 staff) providing Core ERP (SAP, MS Dynamic 365 preferred) and surround applications together with digital transformation for big enterprises around the world.  
            
            We are looking for an ambitious and energetic Senior ERP/SAP Consultant Manager for EBS to help us expand our clientele. You will be the front of the company and will have the dedication to create and apply an effective sales strategy.
            
            JOB DESCRIPTIONS  
            
            Is responsible for sales consulting of EBS’s solution and service
            Lead Sales Consulting Team to develop marketing documents for main solution and services of EBS
            Develop a growth strategy focused both on financial gain and customer satisfaction
            Conduct research to identify new markets and customer needs
            Arrange business meetings with prospective clients
            Promote the company’s products/services addressing or predicting clients’ objectives
            Prepare sales contracts ensuring adherence to law-established rules and guidelines
            Provide trustworthy feedback and after-sales support
            Build long-term relationships with new and existing customers
            Develop staff into valuable salespeople
            Yêu Cầu Công Việc
            Bachelor's or Master's degree in (Business) Information Systems or Engineering
            10+ years of experience with SAP, Finance, ERP etc.
            05+ years enterprise level ERP project management experience; project management
            03+ years in Consulting
            Previous experience implementing top tier ERP programs (SAP, Oracle, MS Dynamic 365) or other relevant manufacturing software.
            In-dept knowledge or experience of implementing Core ERP is an advantage
            Working experience in Big 4 Consulting Companies or hands-on experience in ERP implementation consulting for large corporations.
            Dialogue communication skills and persuasion skills towards C-level of enterprises.
            Management skills of multi-national team and working for multi-national markets.
            Excellent English or Japanese communication and comprehension
            Tại Sao Bạn Sẽ Yêu Thích Làm Việc Tại Đây
            “FPT care” health insurance provided by AON and is exclusive for FPT employees
            Annual Summer Vacation: follows company’s policy and starts from May every year
            Salary review one time per year or on career promotion.
            International, dynamic, friendly working environment
            Continuous development of hard and soft skills through work and professional trainings.
            Company's labor policy completely pursuant to Vietnamese labor legislation plus other benefits offered by the company (Company trip, Holiday, etc.)
            Other allowances: lunch allowance, working on-site allowance, etc.",
            "since" => time(),
        ]);

    }
}
